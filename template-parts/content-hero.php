<!-- here we used a inline style attribute to attach our hero image as a css background directly onto the element -->
	<div class="hero min-vh-80 cover bg-center flex items-center justify-center o-90 white" style="<?php nice_background('hero_image');?>" href="<?php the_permalink(); ?>">
		<div class="hero-content tc pa5 pt5">

			<!-- our location title -->
			<h1 class="hero-heading f1 f-subheadline-l mt5 mb0 lh-title">
				<?php the_title(); ?>
			</h1>
			<!-- our subheading (custom fields) -->
			<?php if( get_field('subhead') ): ?>
			<p class="hero-subhead f2 f3-l mb2 mb3-l mt0 white">
				<?php the_field('subhead'); ?>
			</p>
			<!-- mb6: margin bottom 6, margin top 0 -->
			<?php endif; ?>

		</div>

	</div>