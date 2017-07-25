    <?php
/*
Template Name: single
*/
?>

<?php get_header(); ?>
<div id="boxContainer">
<div id="sidebar">
<P>【最近の投稿】</P>
<?php
	global $post;
	$args = array( 'posts_per_page' => 5 );
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
<div id="contents">

<?php if(have_posts()): while(have_posts()): the_post(); ?>
<div class="entry">
<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
<div class="entry_main">
<?php the_content(); ?>
</div>
</div>



<?php endwhile; endif; ?>




<?php if(have_posts()): while(have_posts()): the_post();?>

<?php previous_post_link();?>
｜｜
<?php next_post_link(); ?>

<?php endwhile; endif;?>




</div>
</div>
</div>
<?php get_footer(); ?>