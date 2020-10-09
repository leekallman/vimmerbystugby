
<div class="locations" id="locations">
	<div class="location flex-l">
		<div class="map w-100 w-50-l flex">
			<div class="map-inner">
				<!-- firstly we check if the map custom field is filled in -->
                <?php if( get_field('map') ): ?>
                <!-- if it is we output it here  -->
                <?php the_field('map'); ?>
                <?php endif; ?>
			</div>
		</div>

		<div class="location-info w-100 w-50-l flex">
			<div class="location-description">
			<?php the_content(); ?>
			</div>
		</div>
		
	</div>
	<?php endwhile; endif; ?>
	
</div>