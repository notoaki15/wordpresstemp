<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <title><?php wp_title(); ?></title>
        <meta name="description" content="<?php bloginfo( 'description' ); ?>">
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="screen" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
        <?php wp_head(); ?>
    </head>



<body <?php body_class(); ?>>
<div id="header">
   <h1>
     <a href="<?php echo get_option('home'); ?>">
       <?php bloginfo('name'); ?>
     </a>
   </h1>
 <div class="description">
   <a href="<?php echo get_option('home'); ?>">
     <?php bloginfo('description'); ?>
   </a>
 </div>
</div>