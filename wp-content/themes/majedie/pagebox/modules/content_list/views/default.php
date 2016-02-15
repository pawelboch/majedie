<div class="wrapper capabilities-specific-text <?php echo esc_attr( $this->get( 'css_class' ) ); ?>" style="background-color: <?php echo esc_attr( $this->get( 'bg_color' ) ); ?>">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h2 style="color: <?php echo $this->get( 'title_color' ); ?>; font-size: <?php echo $this->get('title_font_size'); ?>"><?php echo esc_html($this->get( 'title' )); ?></h2>
			</div>
			<div class="col-md-12">
				<div class="subtitle-container">
					<?php echo wpautop( $this->get( 'description' ) ); ?>
				</div>
				<?php if ( ! empty( $this->get( 'list_title' ) ) ) : ?>
				<h3><?php echo esc_html( $this->get( 'list_title' ) ); ?></h3>
				<?php endif; ?>
				<?php $list = $this->get( 'list' ); ?>
				<?php if ( ! empty( $list->{0}->title ) ): ?>
				<ul>
					<?php foreach ( $this->get( 'list' ) as $item ): ?>
					<li style="color: <?php echo $this->get( 'font_color' ); ?>;">
						<?php echo esc_html($item->title); ?>
						<?php if ( $item->href && $item->link_label ) : ?>
						<br><a class="btn" href="<?php echo esc_url( $item->href ); ?>" class=""><?php echo esc_html( $item->link_label ); ?></a>
						<?php endif; ?>
					</li>
					<?php endforeach ?>
				</ul>
				<?php endif ?>
			</div>
		</div>
	</div>
</div>
<style>
	.capabilities-specific-text h2 {
		font-size: 45px;
		line-height: 53px;
	}
</style>