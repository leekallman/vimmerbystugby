<!-- this tag wraps around our gallery and contains everything -->
<div class="gallery container flex flex-wrap center ph4-l">
	<?php $images = get_sub_field('gallery'); ?>
	<?php foreach ($images as $image) : ?>
		<!-- here we have added a custom field to our attachments (images) which adds a class name to control the width of the image -->
		<div class="gallery-image ph3 mb4 <?php the_field('image_width', $image['id'])?>
		">
		<!-- here we get the image by its ID and that we want the full size -->
		<?php echo wp_get_attachment_image($image['id'], 'full'); ?>
		<!-- here we sign our caption to a variable called $caption -->
		<?php $caption = wp_get_attachment_caption($image['id']); ?>
		<!-- if the caption is not empty, we render it onto the page -->
		<?php if (!empty($caption)) : ?>
			<p class="caption f8 o-50 pt3 mv0">
				<?php echo $caption; ?>
			</p>

		<?php endif; ?>
		</div>
<?php endforeach ?>
</div>