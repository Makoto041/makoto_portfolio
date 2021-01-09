<?php get_header(); ?>
<div id="wrapper">
	<?php
	// Dealing with old files.
	// Actually, it's ok to only use get_template_part().
	/*
 Page Header
/*-------------------------------------------*/
	$old_file_name[] = 'module_pageTit.php';
	if (locate_template($old_file_name, false, false)) {
		locate_template($old_file_name, true, false);
	} else {
		get_template_part('template-parts/page-header');
	}
	/*
 BreadCrumb
/*-------------------------------------------*/
	$old_file_name[] = 'module_panList.php';
	if (locate_template($old_file_name, false, false)) {
		locate_template($old_file_name, true, false);
	} else {
		get_template_part('template-parts/breadcrumb');
	}
	?>

	<div class="<?php lightning_the_class_name('siteContent'); ?>">
		<?php do_action('lightning_siteContent_prepend'); ?>
		<div class="container">
			<div class="page_title">Blog</div>
			<div class="blog_article">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<!--ここに記事一覧に表示したいコンテンツを記述-->
					<?php get_template_part('loop-content'); ?>
			<?php endwhile;
			endif; ?>
			</div>
			<!--ループ終了-->
			<div class="pagination">
				<?php echo paginate_links(array(
					'type' => 'list',
					'mid_size' => '1',
					'prev_text' => '<i class="fas fa-angle-left"></i>',
					'next_text' => '<i class="fas fa-angle-right"></i>'
				)); ?>
			</div>

			<?php do_action('lightning_siteContent_container_prepend'); ?>

		</div><!-- [ /.container ] -->
	</div><!-- [ /.siteContent ] -->
	<?php get_footer(); ?>
	<!-- warapper end -->
</div>