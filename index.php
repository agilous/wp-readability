<!-- START INDEX -->

<?php get_header(); ?>
<div id="content">

<?php if (have_posts()) : ?><?php $first = 1; while (have_posts()) : the_post(); ?>
<div class="post">

<h1 id="post-<?php the_ID(); ?>"><a href="<?php echo get_permalink() ?>" rel="bookmark" title="Permanent Link: <?php the_title(); ?>"><?php the_title(); ?></a></h1>

<div class="post-content">

<?php $continue_text = 'Continue reading...';
if ( 1 == $first && is_home() && !is_paged() ) { 
  the_content($continue_text);
  $first = 0;
} else {
the_content($continue_text);
} ?>
</div>

<p><?php the_time(__('F jS, Y')) ?> (<?php comments_popup_link('0 Comments', '1 Comment', '% Comments'); ?>)<br />
Category: <?php the_category(', ') ?><br />
Tags: <?php the_tags('', ', ', ''); ?></p>

</div>

<?php endwhile; ?>

<div>
<div><?php posts_nav_link('','',__('&laquo; Previous','')) ?></div>
<div><?php posts_nav_link('',__('Next &raquo;',''),'') ?></div>
</div>


<?php else : ?>
<h2 class="center"><?php _e('No content found.'); ?></h2>
<p class="center"><?php _e("Would you care to search the site?"); ?></p>
<?php include (TEMPLATEPATH . "/searchform.php"); ?>
<?php endif; ?>
</div>

</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>

<!-- END INDEX -->
