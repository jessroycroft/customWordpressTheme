<?php //index.php is the last resort template, if no other templates match ?>
<?php get_header(); ?>

<div class="main">
  <div class="container clearfix">
	<div class="highlightPost" style="background-image: url('<?php echo the_post_thumbnail_url("large")?>');">
	 	<?php
	 	$args = array( 'numberposts' => 1 );
	 	$lastposts = get_posts( $args );
	 	foreach($lastposts as $post) : setup_postdata($post); ?>
	 		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	 		<div class="readMore">
	 			<a href="<?php the_permalink(); ?>">Read More</a>
	 		</div>
	 	<?php endforeach; ?>
	</div>
    <div class="content clearfix">
    	<div class="postWrapper clearfix">
    		<?php get_template_part( 'loop', 'index' );	?>
    	</div>
    </div> <!--/.content -->

    <?php get_sidebar(); ?>

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>