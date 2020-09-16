<?php get_header(); ?>
<?php
if (lightning_is_page_header_and_breadcrumb()) {

	// Dealing with old files.
	// Actually, it's ok to only use get_template_part().
	/*-------------------------------------------*/
	/* Page Header
	/*-------------------------------------------*/
	$old_file_name[] = 'module_pageTit.php';
	if (locate_template($old_file_name, false, false)) {
		locate_template($old_file_name, true, false);
	} else {
		get_template_part('template-parts/page-header');
	}
	/*-------------------------------------------*/
	/* BreadCrumb
	/*-------------------------------------------*/
	$old_file_name[] = 'module_panList.php';
	if (locate_template($old_file_name, false, false)) {
		locate_template($old_file_name, true, false);
	} else {
		get_template_part('template-parts/breadcrumb');
	}
} // if ( lightning_is_page_header_and_top_breadcrumb() ){
?>
<div id="about">
	<div class="<?php lightning_the_class_name('siteContent'); ?>">
		<?php do_action('lightning_siteContent_prepend'); ?>
		<div class="container">
			<?php do_action('lightning_siteContent_container_prepend'); ?>
			<div class="page_title"><?php the_title(); ?></div>
			<div class="about_content">
				<div class="about_img">
					<?php the_post_thumbnail('midiam'); ?>
				</div>
				<div class="item"><?php the_content(); ?></div>
			</div>
			<div class="row">
				<div class="<?php lightning_the_class_name('mainSection'); ?>" id="main" role="main">
					<?php do_action('lightning_mainSection_prepend'); ?>
					<!-- Contents -->
				</div><!-- [ /.mainSection ] -->
			</div><!-- [ /.row ] -->
		</div><!-- [ /.container ] -->
	</div><!-- [ /.siteContent ] -->
</div><!-- [ /.about ] -->
<?php get_footer(); ?>