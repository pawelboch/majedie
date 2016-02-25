<div class="module-full-width-contact-form-box-title-text span-table" style="
<?php	if($this->get('background_color')) {
		echo 'background-color: ' . $this->get('background_color') . ';';
				}
			;?>
" data-wpg-height-100p-window>
	<div class="span-table-cell vertical-align-middle">
		
		<div class="container">

			<div class="row">
				<div class="col-xs-12 col-md-6">
					<?php if($this->get('title') != '') { ;?>
						<h1
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
						><?php echo $this->get('title') ;?></h1>
						<?php } ;?>
					<?php if($this->get('editor') != '') {
						
			echo $this->get('editor') ;
						
						} ?>
				</div>
				<div class="col-xs-12 col-md-6">
					<?php echo do_shortcode('[contact-form-7 id="26" title="Contact Page"]'); ?>

					<!-- to copy on contact form 7 -->
					<!--
					<div class="wpg-form-contact span-table">

					<div class="span-table-row"><label for="wpg-id-your-name" class="span-table-cell vertical-align-top">Your name*</label><div class="span-table-cell vertical-align-middle">[text* wpg-id-your-name id:wpg-id-your-name]</div></div>

					<div class="span-table-row"><label for="wpg-id-your-email" class="span-table-cell vertical-align-top">Your eamil*</label><div class="span-table-cell vertical-align-middle">[email* wpg-id-your-email id:wpg-id-your-email]</div></div>

					<div class="span-table-row"><div class="span-table-cell vertical-align-top wpg-label-style">Title</div><div class="span-table-cell vertical-align-middle"><input type="radio" name="wpg-id-mr-mrs[]" id="wpg-id-mr"> <label for="wpg-id-mr">Mr</label> <input type="radio" name="wpg-id-mr-mrs[]" id="wpg-id-mrs"> <label for="wpg-id-mrs">Mrs</label></div></div>
						
					<div class="span-table-row"><label for="wpg-id-company" class="span-table-cell vertical-align-top">Company*</label><div class="span-table-cell vertical-align-middle">[text* wpg-id-company id:wpg-id-company]</div></div>

					<div class="span-table-row"><label for="wpg-id-comments" class="span-table-cell vertical-align-top">Comments</label><div class="span-table-cell vertical-align-top"><div>[textarea* wpg-id-comments id:wpg-id-comments]</div><div>[reCAPTCHA]</div><div>[submit class:btn-1 "SUBMIT"]</div></div></div>

					</div>
					-->


					<!-- Orgianl form HTML  -->
					<!--
					<form>
						<div class="wpg-form-contact span-table">
							<div class="span-table-row">
								<label for="wpg-id-your-name" class="span-table-cell vertical-align-middle">
									Your name*
								</label>
								<div class="span-table-cell vertical-align-middle">
									<input type="text" id="wpg-id-your-name" name="wpg-id-your-name">
								</div>
							</div>
							<div class="span-table-row">
								<label for="wpg-id-your-email" class="span-table-cell vertical-align-middle">
									Your eamil*
								</label>
								<div class="span-table-cell vertical-align-middle">
									<input type="email" id="wpg-id-your-email" name="wpg-id-your-name">
								</div>
							</div>
							<div class="span-table-row">
								<div class="span-table-cell vertical-align-middle wpg-label-style">
									Title
								</div>
								<div class="span-table-cell vertical-align-middle">
									<input type="radio" id="wpg-id-mr" name="wpg-id-mr-mrs[]"> <label for="wpg-id-mr">Mr</label>
									<input type="radio" id="wpg-id-mrs" name="wpg-id-mr-mrs[]"> <label for="wpg-id-mrs">Mrs</label>
								</div>
							</div>
							<div class="span-table-row">
								<label for="wpg-id-company" class="span-table-cell vertical-align-middle">
									Company*
								</label>
								<div class="span-table-cell vertical-align-middle">
									<input type="text" id="wpg-id-company" name="wpg-id-company">
								</div>
							</div>
							<div class="span-table-row">
								<label for="wpg-id-comments" class="span-table-cell vertical-align-top">
									Comments
								</label>
								<div class="span-table-cell vertical-align-top">
									<textarea id="wpg-id-comments" name="wpg-id-comments"></textarea>
									<br>
									[reCAPTCHA]
									<br>
									<input class="btn-1" type="submit" value="SUBMIT">
								</div>
							</div>
						</div>
					</form>
					-->
				</div>

			</div>
		</div>

	</div>
</div>