		</content>
		<footer>
			<div class="container">
<?php
$navItems = wp_get_nav_menu_items('Footer Menu'); 
if(count($navItems) > 0) {
	foreach($navItems as $item) { ?>
				<div class="col-3">
					<h5><a href="<?php echo $item->url; ?>"><?php echo $item->title; ?></a></h5>
				</div>
<?php 
	} 
} 
?>
			</div>
		</footer>
		<?php require_once(get_template_directory().'/svg/template.svg'); ?>
	</body>
</html>