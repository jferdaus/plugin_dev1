<?php


function contact_user_contact_methods( $methods ){
	
	$methods['twitter'] = __('Twitter','contact');
	$methods['facebook'] = __('Facebook','contact');
	$methods['linkedin'] = __('LinkedIn','contact');
	
	
	
	return $methods;
	
}


add_filter( 'user_contactmethods', 'contact_user_contact_methods' );