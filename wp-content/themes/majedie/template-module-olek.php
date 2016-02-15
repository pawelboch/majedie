<?php
/* Template Name: module example */
?>
<?php get_header(); ?>




<div class="module-full-width-text-slider bg-grey-grain">
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
		<h2>Contact Us</h2>
		<p>If you have any queries of a non-urgent nature, please fill in the form and we will endeavour to get back to you within 48 hours.</p>
		<p>Alternatively to speak to someone about dealing for direct investment, please call  BNY Mellon on +44 (0)344 892 0974.</p>
		<?php echo do_shortcode('[contact-form-7 id="24" title="Contact form 1"]'); ?>
		<?php
/*
<div class="row">
<div class="col-xs-12 col-sm-6">
<label for="wpg-contact-name">Name</label>
[text* name id:wpg-contact-name]
</div>
<div class="col-xs-12 col-sm-6">
<label for="wpg-contact-email">Email</label>
[email* email id:wpg-contact-email]
</div>
<div class="col-md-12">
<label for="wpg-comments">Comments</label>
[textarea comments id:wpg-comments]
</div>
<div>[submit "SUBMIT"]</div>
</div>
*/
		?>
	</div>
</div>

<?php get_footer(); ?> 