<?php
/*
Plugin Name: Post Author Bio Plugin
Plugin URI:   https://jferdaus.github.io/plugin_dev/
Description:  Basic WordPress Plugin for displaying author bio for any post. 
Version:      1
Author:       Jannatul Ferdaus
Author URI:   https://jferdaus.github.io/
License:      GPL2
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
Text Domain:  post_author

*/


if(!defined('ABSPATH')) exit ;

if (is_admin()){
	
require_once dirname(__FILE__) . '/includes/admin/profile.php' ;	
	
}

/**
*print SEO tags in the header
* @return void 


*/

function post_author_seo_tags(){
	
	?>
	
	<meta name="description" content="Janatul Ferdaus | PHP Developer" />
	
	<meta name="keywords" content="wordpress, PHP, Ajax, jQuery, HTML, CSS"/>
	
	
	
	
	<?php
	
}


add_action('wp_head','post_author_seo_tags');



function post_author_wp_footer(){
	
	echo "Hello Programmer" ;
	
}


//add_action('wp_footer','post_author_wp_footer');


function post_author_bio( $content ){
	global $post; 
	
	$author = get_user_by( 'id', $post->post_author );
	
	$bio = get_user_meta( $author->ID, 'description', true);
	$twitter = get_user_meta( $author->ID, 'twitter', true);
	$facebook = get_user_meta( $author->ID, 'facebook', true);
	$linkedin = get_user_meta( $author->ID, 'linkedin', true);
	
	ob_start();
	
	?>
	
	<div class="post_author-bio-wrap">
	
	
	
	<div class="avatar-image">
	
	<?php  echo get_avatar( $author->ID, 64);?>
	
	</div>
	
	
	<div class="post_author-bio-content">
	<div class="post_author-name">
	
	<?php  echo $author->display_name ;?>
	
	</div>
	</div>
	
	
	<div class="post_author-bio">
	
	<?php  echo wpautop( wp_kses_post ( $bio )) ;?>
	

	</div>
	
	
	
	<ul class="post-author-socials">
	
	<?php if( $twitter ) { ?>
	<li><a href="<?php echo esc_url( $twitter );?>"><?php _e('Twitter','contact'); ?></a></li>
	
<?php } ?>
	
	
	
	
	<?php if( $facebook ) { ?>
	<li><a href="<?php echo esc_url( $facebook );?>"><?php _e('Facebook','contact'); ?></a></li>
	
<?php } ?>
	
	
	
	
	<?php if( $linkedin ) { ?>
	<li><a href="<?php echo esc_url( $linkedin );?>"><?php _e('LinkedIn','contact'); ?></a></li>
	
<?php } ?>
	
	
	
	</ul>
	
	
	</div>
	
	
	
	
	<?php
	
	$bio_content= ob_get_clean();
	
	return $content.$bio_content ;
	
}

add_filter('the_content','post_author_bio');

function post_author_enqueue_scripts(){
	
	wp_enqueue_style('post_author-style', plugins_url('assets/css/mystyle.css', __FILE__));
	
}


add_action('wp_enqueue_scripts', 'post_author_enqueue_scripts');