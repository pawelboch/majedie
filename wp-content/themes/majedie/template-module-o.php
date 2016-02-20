<?php
/* Template Name: module example */
?>
<?php get_header(); ?>


<div class="module-full-width-image-title-icons-paragraph-link">
	<div class="container">
		

		<div class="row" data-wpg-equal-height-wrap="height">
			<!-- .col-xs-	.col-sm-	.col-md-	.col-lg-	.col-xl- -->
			<div class="col-xs-12 col-sm-8 col-lg-6 pull-xs-right" data-wpg-equal-height-item>

				<div class="span-table wpg-100p">
					<div class="span-table-cell vertical-align-middle">
						<h1>Majedie Asset Management</h1>
						<ul class="wpg-social-icons">
							<li><a href="#"><span>Facebook</span><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><span>Twitter</span><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><span>Linkedin</span><i class="fa fa-linkedin"></i></a></li>
						</ul>
						<p>Established in 2002, is an independent investment boutique that actively manages equities for institutional investors, wealth managers and endowments across a range of UK and Global strategies.</p>
						<a href="#" class="btn-1">ABOUT US</a>
					</div>
				</div>

			</div>
			<div class="col-xs-12 col-sm-4 col-lg-6 pull-xs-left" data-wpg-equal-height-item>

				<div class="span-table wpg-100p">
					<div class="span-table-cell vertical-align-middle text-xs-center">
						<img src="http://majedie-dev.kurtosysdev.com/wp-content/uploads/2016/02/111.png" alt="Majedie Asset Management">
					</div>
				</div>

			</div>
		</div>


	</div>
</div>




<div class="module-full-width-text-slider">
	<?php $idUniqid=uniqid(); ?>
	<div class="container">
		<p>Majedie was founded by a team from Mercury Asset Management with a clear aim: </p>
		<h2>simply to make money for our clients.</h2>
		<div class="cycle-slideshow-wrap">
			<div class="cycle-slideshow"
				data-cycle-timeout="0"
				data-cycle-fx="scrollHorz"
				data-cycle-swipe="true"
				data-cycle-swipe-fx="scrollHorz"
				data-cycle-pager=".cycle-slideshow-pager-<?php echo $idUniqid; ?>"
				data-cycle-slides="> div"
				data-cycle-prev=".cycle-slideshow-prev-<?php echo $idUniqid; ?>"
				data-cycle-next=".cycle-slideshow-next-<?php echo $idUniqid; ?>"
				data-cycle-auto-height="container"
			>
				<div>
					<p>We are proud of our distinctive, long-term track recordbut remain as hungry to perform today as we were on day one.</p>
				</div>
				<div>
					<p>We are proud of our distinctive, long-term track recordbut remain as hungry to perform today as we were on day one. We are proud of our distinctive, long-term track recordbut remain as hungry to perform today as we were on day one. We are proud of our distinctive, long-term track recordbut remain as hungry to perform today as we were on day one. We are proud of our distinctive, long-term track recordbut remain as hungry to perform today as we were on day one. We are proud of our distinctive, long-term track recordbut remain as hungry to perform today as we were on day one.</p>
				</div>
				<div>
					<p>We are proud of our distinctive, long-term track recordbut remain as hungry to perform today as we were on day one.</p>
				</div>
			</div>
			<div class="cycle-slideshow-prev cycle-slideshow-prev-<?php echo $idUniqid; ?>"><i class="fa fa-angle-left"></i></div>
			<div class="cycle-slideshow-next cycle-slideshow-next-<?php echo $idUniqid; ?>"><i class="fa fa-angle-right"></i></div>
		</div>
		<div class="cycle-slideshow-pager cycle-slideshow-pager-<?php echo $idUniqid; ?>"></div>
	</div>
</div>



<div class="module-full-width-contact-form-title-paragraph">
	<div class="container">
		<div>
			<h2>Contact Us</h2>
			<p>If you have any queries of a non-urgent nature, please fill in the form and we will endeavour to get back to you within 48 hours.</p>
			<p>Alternatively to speak to someone about dealing for direct investment, please call  BNY Mellon on +44 (0)344 892 0974.</p>
			<?php echo do_shortcode('[contact-form-7 id="24" title="Contact form 1"]'); ?>
			<?php
	/*
	<div class="row">
	<div class="col-xs-12 col-sm-6">
	<label for="wpg-contact-name">Name</label>[text* name id:wpg-contact-name]
	</div>
	<div class="col-xs-12 col-sm-6">
	<label for="wpg-contact-email">Email</label>[email* email id:wpg-contact-email]
	</div>
	<div class="col-md-12 wpg-clear-both">
	<label for="wpg-comments">Comments</label>[textarea* comments id:wpg-comments]
	</div>
	<div>[submit "SUBMIT"]</div>
	</div>
	*/
			?>
		</div>
	</div>
</div>


<!-- Module two blocks with logo + title + button + background image (MajiQ and About Us) -->
<div class="module-two-blocks-with-logo-title-button-background-image">
	<div class="container container-corrected">

		<div class="row" data-wpg-equal-height-wrap="min-height">
			<div class="col-xs-12 col-sm-6">
				<div class="wpg-red-block span-table" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/cloud-big-fs8.png)" data-wpg-equal-height-item>
					<div class="span-table-row">
						<div class="span-table-cell vertical-align-top">
							<h2><img src="<?php echo get_template_directory_uri(); ?>/assets/images/cloud-fs8.png" alt="x"><span>Maj<strong>IQ</strong></span></h2>
						</div>
					</div>

					<div class="span-table-row">
						<div class="span-table-cell vertical-align-bottom">
							<p>Search our market intel<br>archive your way.</p>
							<a class="btn-1" href="#">LOGIN</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6">
				<div class="wpg-blue-block span-table" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/one-fs8.png)" data-wpg-equal-height-item>
					<div class="span-table-row">
						<div class="span-table-cell vertical-align-bottom">
							<p>We have one clear Aim:<br>Simply to make money<br>for our Clients</p>
							<a class="btn-1" href="#">LEARN MORE ABOUT US</a>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!--
		<div class="span-table">
			<div class="span-table-cell">
				<h2>Maj<strong>IQ</strong></h2>
				<p>Search our market intel<br>archive your way.</p>
				<a class="wpg-button-type-1" href="#">LOGIN</a>
			</div>
			<div class="span-table-cell">
				<p>We have one clear Aim:<br>Simply to make money<br>for our Clients</p>
				<a class="wpg-button-type-1" href="#">LEARN MORE ABOUT US</a>
			</div>
		</div>
		-->


	</div>
</div>





<div class="module-full-width-left-title-right-text wpg-bg-grain">
	<div class="container">
		<div class="wpg-container-inset">
			<h2>£11bn</h2>
			<p>Assets under management<br>total approximately</p>
			<!--
			<div class="row">
				<div class="col-xs-12 col-sm-5">
					<h2>£11bn</h2>
				</div>
				<div class="col-xs-12 col-sm-7">
					<p>Assets under management<br>total approximately</p>
				</div>
			</div>
			-->
		</div>
	</div>
</div>




<div class="module-full-width-search-funds-title-paragraph-link">
	<div class="container">

		<div class="span-table">
			<div class="span-table-cell vertical-align-middle wpg-first-block">
				<h2>Prices</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet condimentum diam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque egestas nulla ac vestibulum hendrerit.<p> 
				<p>Donec sit amet condimentum diam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque egestas nulla ac vestibulum hendrerit.</p>
				<a href="#" class="btn-2">SEE PRICES</a>
			</div>
			<div class="span-table-cell vertical-align-middle wpg-second-block">
				<h2>Search Prices</h2>
				<form method="get" action="/">
					<select class="wpg-plugin-select">
						<option value="1">Fund</option>
						<option value="2">Option 2</option>
						<option value="3">Option 3</option>
						<option value="4">Option 4</option>
						<option value="5">Option 5</option>
						<option value="6">Option 6</option>
						<option value="7">Option 7</option>
					</select>
					<select class="wpg-plugin-select">
						<option value="1">Fund Domicile</option>
						<option value="2">Option 2</option>
						<option value="3">Option 3</option>
						<option value="4">Option 4</option>
						<option value="5">Option 5</option>
						<option value="6">Option 6</option>
						<option value="7">Option 7</option>
						<option value="8">Option 8</option>
					</select>
					<select class="wpg-plugin-select">
						<option value="1">Share Class</option>
						<option value="2">Option 2</option>
						<option value="3">Option 3</option>
						<option value="4">Option 4</option>
					</select>
					<select class="wpg-plugin-select">
						<option value="1">Acc / Inc</option>
						<option value="2">Option 2</option>
						<option value="3">Option 3</option>
						<option value="4">Option 4</option>
						<option value="5">Option 5</option>
						<option value="6">Option 6</option>
					</select>
					<input class="btn-1" type="submit" name="search-funds" value="SEARCH FUNDS">
				</form>
				
			</div>
		</div>

	</div>
</div>







<div class="module-full-width-2-posts-with-thumnails-2-posts">
	<div class="container">
		<h2>News &amp; Insights</h2>
		<p class="wpg-filter-topic">Filter Topic</p>
	
		<div class="row" data-wpg-equal-height-wrap="height">
			
			<div class="col-xs-12 col-md-6 col-lg-4 wpg-col wpg-col-classic">
				<div style="background-color: #fff;" data-wpg-equal-height-item>
					<div class="wpg-inside-bg" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/example-1.jpg);"></div>
					<div class="wpg-post-box">
						<p class="wpg-post-box_tag">Equity</p>
						<h3><a href="#">Global American Fund</a></h3>
						<p class="wpg-post-box_date">12 / 11/ 2005</p>
						<div class="wpg-post-box_main-content">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
						</div>
					</div>
				</div>
			</div>

			<div class="col-xs-12 col-md-6 col-lg-4 wpg-col wpg-col-classic">
				<div style="background-color: #fff;" data-wpg-equal-height-item>
					<div class="wpg-inside-bg" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/example-1.jpg);"></div>
					<div class="wpg-post-box">
						<p class="wpg-post-box_tag">Equity</p>
						<h3><a href="#">Global American Fund</a></h3>
						<p class="wpg-post-box_date">12 / 11/ 2005</p>
						<div class="wpg-post-box_main-content">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet condimentum diam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque egestas nulla ac vestibulum hendrerit.</p>
						</div>
					</div>
				</div>
			</div>


			<div class="col-xs-12 col-md-12 col-lg-4 wpg-col wpg-col-special-1" data-wpg-equal-height-item>
				
				<div class="span-table wpg-post-box-cols" style="height: 100%">
					<div class="span-table-row">
						<div class="span-table-cell wpg-post-box-corrected-1-outset vertical-align-top">
							<div class="wpg-post-box wpg-post-box-corrected-1" style="background-color: #fff;">
								<p class="wpg-post-box_tag">Equity</p>
								<h3><a href="#">Global American Fund</a></h3>
								<p class="wpg-post-box_date">12 / 11/ 2005</p>
								<div class="wpg-post-box_main-content">
									<p>Lorem ipsum...</p>
								</div>
							</div>
						</div>
					</div>

					<div class="span-table-row">
						<div class="span-table-cell wpg-post-box-corrected-2-outset vertical-align-bottom">
							<div class="wpg-post-box wpg-post-box-corrected-2" style="background-color: #fff;">
								<p class="wpg-post-box_tag">Equity</p>
								<h3><a href="#">Global American Fund</a></h3>
								<p class="wpg-post-box_date">12 / 11/ 2005</p>
								<div class="wpg-post-box_main-content">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet condimentum diam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque egestas nulla ac vestibulum hendrerit.</p>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>


		</div>

	</div>
</div>






<div class="module-demo">
	<div class="container">

		<div class="row" data-wpg-equal-height-wrap="min-height">
			<!-- .col-xs-	.col-sm-	.col-md-	.col-lg-	.col-xl- -->
			<div class="col-xs-12 col-sm-4">
				<div class="wpg-red-block wpg-demo-block" style="background-color: red;" data-wpg-equal-height-item>
					
					<h2>Simulate select examples</h2>

					<select class="wpg-plugin-select">
						<option value="http://majedie-dev-local.kurtosysweb.com/about-us/">About us</option>
						<option value="2">Option 2</option>
						<option value="3">Option 3</option>
						<option value="4" selected="selected">Option 4</option>
						<option value="5">Option 5</option>
						<option value="6">Option 6</option>
						<option value="7">Option 7</option>
						<option value="8">Option 8</option>
						<option value="9">Option 9</option>
						<option value="10">Option 10</option>
					</select>

					<select class="wpg-plugin-select">
						<option value="1">example 1</option>
						<option value="2">example 2</option>
						<option value="3">example 3</option>
						<option value="4">example 4</option>
						<option value="5">example 5</option>
						<option value="6" selected="selected">example 6</option>
					</select>

					<select class="wpg-plugin-select">
						<option value="1">one</option>
						<option value="2">two</option>
						<option value="3">three</option>
						<option value="4">four</option>
					</select>

					<h2>Simple Paragraph</h2>
					<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet</p>
				</div>
			</div>
			<div class="col-xs-12 col-sm-4">
				<div class="wpg-red-block wpg-demo-block" style="background-color: lime;" data-wpg-equal-height-item>
					<h2>Simple Paragraph</h2>
					<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
				</div>
			</div>
			<div class="col-xs-12 col-sm-4">
				<div class="wpg-red-block wpg-demo-block" style="background-color: yellow;" data-wpg-equal-height-item>
					<h2>Simple Paragraph</h2>
					<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
				</div>
			</div>
		</div>

	</div>
</div>

<?php get_footer(); ?> 