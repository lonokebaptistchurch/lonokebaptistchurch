<?php
class content {
	public function announcements() { ?>
		<section class="announcements">
			<div class="container">
<?php
		if(have_rows('announcements')) {
			while(have_rows('announcements')) {
				the_row();
				$title = get_sub_field('announcement-title');
				$image = get_sub_field('announcement-image');
				$content = get_sub_field('announcement-content'); 
				$link = get_sub_field('announcement-link'); ?>
				<div class="announcement col-4">
					<h3><?php echo $title; ?></h3>
					<?php if($image) { ?><img src="<?php echo $image['url']; ?>" class="announcement-image" alt="<?php echo $image['alt']; ?>" /><?php }
					if($content) { echo $content; } ?>
				</div>
<?php
			}
		} ?>
			</div>
	</section>
<?php
	}
	public function hero() { ?>
<?php
	}
	public function general() {
		$title = get_field('general_content-title');
		$content = get_field('general_content-content'); ?>
		<section class="content">
			<div class="container">
				<div class="col-12">
<?php
		if($title) { ?><h2><?php echo $title; ?></h2><?php }
		if($content) { echo $content; } ?>
				</div>
			</div>
		</section>
<?php
	}
}

$content = new content; ?>