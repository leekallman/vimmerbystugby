<div class="welcome w-100 pv4-l pt3 tc ph6 ph7-l">
			<h2 class="f5">
				<?php the_title(); ?>
			</h2>
			<?php if( get_field('subhead') ): ?>
			<p class="welcome-subhead f6 mb0">
				<?php the_field('subhead'); ?>
			</p>
		</div>
<?php endif ?>