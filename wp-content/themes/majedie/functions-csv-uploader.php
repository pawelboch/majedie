<?php

/**
 * @author Piotr Grzesiak
 */

if ( ! class_exists( 'Majedie_CSV' ) ) {
	class Majedie_CSV {

		private $_columns;
		private $_rows;
		private $_index = array();

		public function __construct( $file ) {
			$this->_rows    = array_map( 'str_getcsv', file( $file ) );
			$this->_columns = array_map( 'sanitize_title', array_shift( $this->_rows ) );
		}

		public function getColumns() {
			return $this->_columns;
		}

		public function getColumnByName( $name ) {
			return array_search( sanitize_title( $name ), $this->_columns );
		}

		public function getRows() {
			return $this->_rows;
		}

		public function getIndex( $indexName ) {
			return isset( $this->_index[ $indexName ] ) ? $this->_index[ $indexName ] : array();
		}

		public function getRowByIndex( $indexName, $key ) {
			if ( isset( $this->_index[ $indexName ] ) ) {
				return isset( $this->_index[ $indexName ][ $key ] ) ? $this->_index[ $indexName ][ $key ] : false;
			}

			return false;
		}

		public function getValue( $row, $column ) {
			return $this->_rows[ (int) $row ][ (int) $column ];
		}

		public function createIndex( $columnName ) {
			$columnName = sanitize_title( $columnName );
			if ( in_array( $columnName, $this->_columns ) ) {
				$offset = array_search( $columnName, $this->_columns );
				if ( $offset !== false ) {
					$this->_index[ $columnName ] = array();
					for ( $i = 0, $n = count( $this->_rows ); $i < $n; $i ++ ) {
						if ( isset( $this->_rows[ $i ][ $offset ] ) ) {
							$this->_index[ $columnName ][ $this->_rows[ $i ][ $offset ] ] = $i;
						}
					}

					return true;
				}
			}

			return false;
		}

		public function mergeBy( Majedie_CSV $other, $columnName ) {
			if ( $this->createIndex( $columnName ) && $other->createIndex( $columnName ) ) {
				$columnsToAdd    = array_diff( $other->getColumns(), $this->getColumns() );
				$columnsToUpdate = array_intersect( $other->getColumns(), $this->getColumns() );
				if ( ( $key = array_search( $columnName, $columnsToUpdate ) ) !== false ) {
					unset( $columnsToUpdate[ $key ] );
				}

				$columnsToAddLength = count( $columnsToAdd );
				if ( $columnsToAddLength > 0 ) {
					foreach ( $columnsToAdd as $name ) {
						$this->_columns[] = $name;
					}
					$index = $other->getIndex( $columnName );
					foreach ( $index as $key => $row ) {
						$rowId = $this->getRowByIndex( $columnName, $key );
						if ( $rowId !== false ) {
							foreach ( $columnsToAdd as $column => $name ) {
								$this->_rows[ $rowId ][] = $other->getValue( $row, $column );
							}
						}
					}
				}

				$columnsToUpdateLength = count( $columnsToUpdate );
				if ( $columnsToUpdateLength > 0 ) {
					$index = $other->getIndex( $columnName );
					foreach ( $index as $key => $row ) {
						$rowId = $this->getRowByIndex( $columnName, $key );
						if ( $rowId !== false ) {
							foreach ( $columnsToUpdate as $column => $name ) {
								$offset = $this->getColumnByName( $name );
								if ( $offset !== false ) {
									$this->_rows[ $rowId ][ $offset ] = $other->getValue( $row, $column );
								}
							}
						}
					}
				}
			}
		}

	}
}

if ( ! class_exists( 'Majedie_CSV_Uploader' ) ) {
	class Majedie_CSV_Uploader {

		private $_errors = array();

		public function __construct() {
			if ( is_admin() ) {
				if ( isset( $_POST['upload_csv'] ) ) {
					$this->process();
				}
				add_action( 'admin_menu', array( $this, 'addMenuPage' ) );
			}
		}

		public function addMenuPage() {
			add_menu_page(
				'CSV Uploader',
				'CSV Uploader',
				'manage_options',
				'majedie_csv_uploader',
				array( $this, 'menuPage' ),
				'dashicons-media-spreadsheet',
				58
			);
		}

		private function getFileErrorMessage( $code ) {
			$phpFileUploadErrors = array(
				0 => 'There is no error, the file uploaded with success',
				1 => 'The uploaded file exceeds the upload_max_filesize directive in php.ini',
				2 => 'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form',
				3 => 'The uploaded file was only partially uploaded',
				4 => 'No file was uploaded',
				6 => 'Missing a temporary folder',
				7 => 'Failed to write file to disk.',
				8 => 'A PHP extension stopped the file upload.',
			);

			return $phpFileUploadErrors[ $code ];
		}

		private function updateDB( Majedie_CSV $CSV ) {
			global $wpdb;

			$table_name = $wpdb->prefix . 'majedie_csv';

			if ( $wpdb->get_var( "SHOW TABLES LIKE '$table_name'" ) != $table_name ) {
				// Table not in database. Create new table.
				$charset_collate = $wpdb->get_charset_collate();

				$sql = "CREATE TABLE `$table_name` (
					`sedol` VARCHAR(8) NOT NULL,
					`institutional-access` VARCHAR(64) NULL,
					`retail-access` VARCHAR(64) NULL,
					`strategy` VARCHAR(64) NULL,
					`domicile` VARCHAR(64) NULL,
					`share-class` VARCHAR(64) NULL,
					`type` VARCHAR(64) NULL,
					`isin` VARCHAR(64) NULL,
					`currency` VARCHAR(64) NULL,
					`price-currency` VARCHAR(64) NULL,
					`time` VARCHAR(64) NULL,
					`nav` VARCHAR(64) NULL,
					`navdate` VARCHAR(64) NULL,
					`price-swing` VARCHAR(64) NULL,
					`ongoing-charge` VARCHAR(64) NULL,
					`amc` VARCHAR(64) NULL,
					`admin-cost-charge` VARCHAR(64) NULL,
					`perf-fee` VARCHAR(64) NULL,
					`entry-charge` VARCHAR(64) NULL,
					`taxes` VARCHAR(64) NULL,
					`trade-ex` VARCHAR(64) NULL,
					`research` VARCHAR(64) NULL,
					`pricing-basis` VARCHAR(64) NULL,
					`dilution-rates` VARCHAR(64) NULL,
					`fund-name` VARCHAR(64) NULL,
					`umbrella` VARCHAR(256) NULL,
					UNIQUE `sedol` (`sedol`)
			    ) $charset_collate;";

				require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
				dbDelta( $sql );
			}

			$columns = $CSV->getColumns();
			if ( count( $columns ) === 26 ) {
				foreach ( $CSV->getRows() as $row ) {
					$wpdb->replace(
						$table_name,
						array_combine( $columns, $row )
					);
				}
			} else {
				$sedolIndex = $CSV->getColumnByName( 'sedol' );
				foreach ( $CSV->getRows() as $row ) {
					$wpdb->update(
						$table_name,
						array_combine( $columns, $row ),
						array( 'sedol' => $row[ $sedolIndex ] )
					);
				}
			}
		}

		public function process() {

			if ( ! isset( $_POST['csv_uploader_nonce'] ) || ! wp_verify_nonce( $_POST['csv_uploader_nonce'], 'upload' ) ) {
				print 'Sorry, your nonce did not verify.';
				exit;
			}

			$map        = array();
			$file_names = array( 'share_class_csv', 'prices_csv', 'charges_csv' );
			foreach ( $file_names as $name ) {
				if ( isset( $_FILES[ $name ] ) ) {
					$file = $_FILES[ $name ];
					if ( $file['error'] === UPLOAD_ERR_OK ) {
						if ( $file['size'] > 0 && $file['type'] == 'application/vnd.ms-excel' ) {
							$map[] = new Majedie_CSV( $file['tmp_name'] );
						} else {
							$this->_errors[] = strtoupper( $name ) . ': Unexpected type of file, accepts only CSV (application/vnd.ms-excel)';
						}
					} else if ( $file['error'] !== UPLOAD_ERR_NO_FILE ) {
						$this->_errors[] = strtoupper( $name ) . ': ' . $this->getFileErrorMessage( $file['error'] );
					}
				}
			}

			$mapLength = count( $map );
			if ( $mapLength >= 1 && count( $this->_errors ) === 0 ) {
				for ( $i = 1; $i < $mapLength; $i ++ ) {
					$map[0]->mergeBy( $map[ $i ], 'sedol' );
				}
				$this->updateDB( $map[0] );
			} else if ( $mapLength === 0 ) {
				$this->_errors[] = 'Upload at least one valid csv file.';
			}
		}

		public function menuPage() { ?>
			<div class="wrap">
				<h1>CSV Uploader</h1>

				<?php if ( isset( $_POST['upload_csv'] ) && count( $this->_errors ) === 0 ): ?>
					<div class="notice-success notice is-dismissible">
						<p>Database successfully updated.</p>
						<button type="button" class="notice-dismiss"><span class="screen-reader-text">Dismiss this notice.</span>
						</button>
					</div>
				<?php endif; ?>

				<?php foreach ( $this->_errors as $error ): ?>
					<div class="error settings-error notice is-dismissible">
						<p><?php echo $error; ?></p>
						<button type="button" class="notice-dismiss"><span class="screen-reader-text">Dismiss this notice.</span>
						</button>
					</div>
				<?php endforeach; ?>

				<form method="post" enctype="multipart/form-data">
					<input type="hidden" name="upload_csv" value="true">
					<?php wp_nonce_field( 'upload', 'csv_uploader_nonce' ); ?>
					<table class="form-table">
						<tbody>
						<tr>
							<th scope="row">ShareClass csv</th>
							<td>
								<input type="file" name="share_class_csv">
							</td>
						</tr>
						<tr>
							<th scope="row">Prices csv</th>
							<td>
								<input type="file" name="prices_csv">
							</td>
						</tr>
						<tr>
							<th scope="row">Charges csv</th>
							<td>
								<input type="file" name="charges_csv">
							</td>
						</tr>
						</tbody>
					</table>
					<p>Put at least one csv file or all.</p>
					<p class="submit">
						<input type="submit" name="submit" id="submit" class="button button-primary"
						       value="Upload and save">
					</p>
				</form>
			</div>
		<?php }

	}
}

/**
 * Run Majedie_CSV_Uploader
 */
new Majedie_CSV_Uploader;

function majedie_get_prices_filters() {
	global $wpdb;

	$table_name = $wpdb->prefix . 'majedie_csv';

	$results = $wpdb->get_results( "
	SELECT `fund-name`, `domicile`, `share-class`, `type`, UPPER(`currency`)
	FROM {$table_name}
	ORDER BY `fund-name`", ARRAY_A );

	array_unshift( $results, null );
	$results = call_user_func_array( 'array_map', $results );

	foreach( $results as &$array ) {
		$array = array_unique( $array );
	}

	return $results;
}

function majedie_get_prices_table() {
	global $wpdb;

	$table_name = $wpdb->prefix . 'majedie_csv';

	$where = '';
	$filters = array();
	if( isset( $_GET['f'] )) {
		$f = $_GET['f'];
		if( ! empty( $f['name'] )) $filters[] = '`fund-name` LIKE \'' . esc_sql( $f['name'] ) . '\'';
		if( ! empty( $f['domicile'] )) $filters[] = '`domicile` LIKE \'' . esc_sql( $f['domicile'] ) . '\'';
		if( ! empty( $f['share_class'] )) $filters[] = '`share-class` LIKE \'' . esc_sql( $f['share_class'] ) . '\'';
		if( ! empty( $f['acc_inc'] )) $filters[] = '`type` LIKE \'' . esc_sql( $f['acc_inc'] ) . '\'';
		if( ! empty( $f['currency'] )) $filters[] = '`currency` LIKE \'' . esc_sql( $f['currency'] ) . '\'';
	}

	if( count( $filters ) ) {
		$where = ' WHERE ' . implode( ' AND ', $filters ) . ' ';
	}

	$results = $wpdb->get_results( "
	SELECT `fund-name`, `domicile`, `share-class`, `type`, `isin`, `currency`, `nav`, `price-swing`, `navdate`, `time`
	FROM {$table_name}{$where}
	ORDER BY `fund-name`", OBJECT );

	return $results;
}