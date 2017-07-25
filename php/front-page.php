<?php get_header(); ?>


<div id="boxContainer">
	<div id="sidebar">
<?php
	global $post;
	$args = array( 'posts_per_page' => 34 );
	$myposts = get_posts( $args );
	foreach( $myposts as $post ) {
		setup_postdata($post);
?>

	<a href="<?php the_permalink(); ?>"style="text-decoration:underline;"><?php the_title(); ?></a><br>

<?php
}
	wp_reset_postdata();
?>





	</div>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
				
			<?php endif; ?>

			<?php
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'content', get_post_format() );
			endwhile;

			the_posts_pagination( array(
				'prev_text'          => __( 'Previous page', 'twentyfifteen' ),
				'next_text'          => __( 'Next page', 'twentyfifteen' ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>',
			) );

		// If no content, include the "No posts found" template.
		else :
			get_template_part( 'content', 'none' );

		endif;
		?>

		</main><!-- .site-main -->
	</div><!-- .content-area -->
</div>

<?php get_footer(); ?>