<?php
global $post;
$author_id=$post->post_author;
?>
<div class="module-wpg module-full-width-post-content">
	<div class="container">
		<div class="wpg-main-content-article" style="
			<?php
			if($this->get('background_color')) {
			echo 'background-color: ' . $this->get('background_color') . ';';
			}
			;?>
			">
			<div class="row">
				<div class="col-xs-12 col-sm-3 left-side">
					<div class="wpg-inset-col wpg-sidebar">
						<div class="wpg-box-name">
							<h3
							<?php
							if($this->get('author_name_size') || $this->get('author_name_color') != '') {
								echo 'style=" ';
								if($this->get('author_name_size') != '') {
									echo 'font-size: ' . $this->get('author_name_size') . 'px;';
								}
								if($this->get('author_name_color') != '') {
									echo 'color: ' . $this->get('author_name_color') . ';';
								}
								echo '"';
							} ;?>
							><?php echo the_author_meta( 'display_name', $author_id ); ?></h3>
							<p
								<?php if($this->get('author_role_size') || $this->get('author_role_color') != '') {
									echo 'style=" ';
									if($this->get('author_role_size') != '') {
										echo 'font-size: ' . $this->get('author_role_size') . 'px;';
									}
									if($this->get('author_role_color') != '') {
										echo 'color: ' . $this->get('author_role_color') . ';';
									}
									echo '"';
								} ;?>
							><?php  echo  the_author_meta( 'nickname', $author_id ); ?></p>
						</div>
						<div class="wpg-box-date">
							<p>Published on:</p>
							<p class="date"><?php echo get_the_date('d/m/Y'); ?></p>
						</div>
						<div class="wpg-box-options-post clearfix">
							<div class="pull-xs-left wpg-share"><button><i class="fa fa-share-alt"></i>Share</button></div>
							<div class="pull-xs-left wpg-print"><button onClick="window.print()"><i class="fa fa-print"></i>Print</button></div>
              <div class="social-icons">
                <a class="link email" target="_blank" href="mailto:?subject=I found this article on majedie.com&body=I thought you'd find this article from Majedie interesting. You can read it at <?php echo get_permalink(); ?> ">
                  <i class="fa fa-envelope"></i>
                </a>
                <a class="link twitter" target="_blank" href="http://twitter.com/share?url=<?php echo get_permalink(); ?>&text=Majedie <?php the_title() ;?>">
                  <i class="fa fa-twitter"></i>
                </a>
                <a class="link google-plus" target="_blank" href="https://plus.google.com/share?url=<?php echo get_permalink(); ?>">
                  <i class="fa fa-google-plus"></i>
                </a>
                <a class="link facebook" target="_blank" href="http://www.facebook.com/sharer/sharer.php?u=<?php echo get_permalink(); ?>">
                  <i class="fa fa-facebook"></i>
                </a>
                <a class="link linkedin" target="_blank" href="http://www.linkedin.com/shareArticle?url=<?php echo get_permalink(); ?>&title=<?php the_title() ;?>">
                  <i class="fa fa-linkedin"></i>
                </a>
              </div>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-9 right-side">
					<div class="wpg-inset-col wpg-main-content">
						<?php if($this->get('editor') != '') {
						echo $this->get('editor') ;
						} ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>