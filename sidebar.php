<!-- START SIDEBAR -->

<div id="sidebar">

	<div>
		<h2>Search</h2>
		<ul>
			<li><?php include (TEMPLATEPATH . '/searchform.php'); ?></li>
		</ul>
	</div>

	<div>
		<ul>
			<?php wp_list_pages('title_li=<h2>Pages</h2>'); ?>
		</ul>
	</div>

	<div>
		<h2>Archive</h2>
		<ul>
			<?php wp_get_archives('type=monthly'); ?>
		</ul>
	</div>

	<div>
		<ul>
			<?php wp_list_categories('title_li=<h2>Categories</h2>'); ?>
		</ul>
	</div>

	<div>
		<ul>
			<?php wp_list_bookmarks(); ?>
		</ul>
	</div>

	<div>
		<h2>Meta</h2>
		<ul>
			<?php wp_register(); ?>
			<li><?php wp_loginout(); ?></li>
			<li><a href="http://wordpress.org/" title="WordPress">WordPress</a></li>
		</ul>
	</div>

</div>

<!-- END SIDEBAR -->
