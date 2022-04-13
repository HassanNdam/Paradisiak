<?php

$page_exemples = get_site_url() . '/exemples/';
$page_blog = get_site_url() . '/blog/';
$page_contact = get_site_url() . '/contact/';


function paradisiak_style(){


wp_enqueue_style( 'my-custom-style', get_template_directory_uri() . '/style.css', array('ms-bootstrap'), time() );
wp_enqueue_style('ms-bootstrap',"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css", array(), 
'5.1.3', 'All');
wp_enqueue_style('ms-font',"https://use.fontawesome.com/releases/v5.7.0/css/all.css", array(), 
'5.7.0', 'All');


}
add_action('wp_enqueue_scripts', 'paradisiak_style');



?>