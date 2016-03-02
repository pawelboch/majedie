<style type="text/css" media="screen">
<?php
if($this->get('placeholder_size') || $this->get('placeholder_color') != '') {
	echo 'style=" ';
	if($this->get('placeholder_size') != '') {
		echo 'font-size: ' . $this->get('placeholder_size') . 'px;';
	}
	if($this->get('placeholder_color') != '') {
		echo 'color: ' . $this->get('placeholder_color') . ';';
	}
	echo '"';
} ;?>
#s::-webkit-input-placeholder
{
color: #000;
}
</style>
<div class="module-wpg module-full-width-search-field-title"
	<?php
	if($this->get('background_color')) {
		echo 'style="';
		echo 'background-color: ' . $this->get('background_color') . ';';
		echo '"';
	}
	;?>
	>
	<div class="container">
		<?php if($this->get('title') != '') { ;?>
		<h2
		<?php if($this->get('title_size') || $this->get('title_color') != '') {
			echo 'style=" ';
			if($this->get('title_size') != '') {
				echo 'font-size: ' . $this->get('title_size') . 'px;';
			}
			if($this->get('title_color') != '') {
				echo 'color: ' . $this->get('title_color') . ';';
			}
			echo '"';
		} ;?>
		><?php echo $this->get('title') ;?></h2>
		<?php } ;?>
		<div class="wpg-search-form">
			<form  role="search"  method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
				<input  type="submit" value="<?php echo esc_attr_x( 'Search', 'submit button' ); ?>"><input  type="text"
				<?php if($this->get('placeholder') != '') {
					echo 'placeholder="'.$this->get('placeholder').'"';
				}
				else {
					echo 'placeholder="Search"';
				}
				;?>
				value="<?php echo get_search_query(); ?>" id="s" name="s"></input>
			</form>
		</div>
	</div>
</div>