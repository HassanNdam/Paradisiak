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

// function paradisiak_script(){

// //     // wp_enqueue_script('followandre-popper', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js', array(), 
// //     // '1.16.0', true);
// //     // wp_enqueue_script('followandrew-bootstrap', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js', array(), 
// //     // '4.4.1', true);
// //     wp_enqueue_script('followandre-main', get_template_directory_uri() . '/assets/js/main.js', array(), 
// //     '1.0', true);
// // }


// function menu_paradisiak(){

//     $location = array(

//         'primary' => 'Menu Haut',
//         'footer' => 'Menu Footer',
//     );

//     register_nav_menus($location);

// }

// add_action('init', 'menu_paradisiak');


function Envoi_Mail (){
    if(isset($_POST['nom'])){
        $nom = $_POST["nom"];
        echo "<br> <center> <strong>Merci!</strong> Votre message a été envoyé avec succés aux équipes de chez Paradisiak.</center>";
    }
}

?>