

<!--
Page contact Paradisiak 
-->

<!doctype html>
<html lang="fr">
  <head>
    <meta name="google-site-verification" content="h853uzLKUoZUqwcp0rxEHpDu75O5XbAuuvvOqtb3mzo" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Paradisiak">
    <meta name="generator" content="Hugo 0.88.1">
    <title><?php echo bloginfo("name");?></title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="icon" href="<?php echo(get_template_directory_uri() . '/assets/icone/favicone.png') ?>" sizes="16x16 32x32 48x48 64x64" >
    

  <?php wp_head();

  ?>
  </head>
<body>
<header class="site-header text-titre-header">
  <nav class="navbar navbar-default navbar-expand-md d-flex container flex-column flex-md-row justify-content-between">
      <a class="py-1" href="<?php echo get_site_url();?>" aria-label="Product" >
        <img src="<?php echo (get_template_directory_uri(). '/assets/logo/logo-large1.png');?>"  alt="" height="76" width="211"> 
      </a>
      <a class="d-md-inline-block apropos" href="<?php echo get_site_url()."#apropos";?>">
      <span class="point-4">À</span> propos de nous
      </a>
      <a class="d-md-inline-block exemples" href="<?php echo get_site_url(). '#exemples';?>">
      <span class="point-2">N</span>os réalisations
      </a>
      <a class="d-md-inline-block blog" href="<?php echo $page_blog ;?>">
      <span class="point-1">N</span>otre blog
      </a>
      <a class="d-md-inline-block contact" href="<?php echo $page_contact; ?>">
      <span class="point-3">C</span>ontact
      </a>
      <a href="tel:+0145260873">
        <button class="btn btn-success text-white"><i class="fa fa-phone"></i> 01 45 26 08 73</button>
	    </a>
  </nav>

 <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center background-header-contact">
       <div class="col container"> 
          <h1 class="site-carriere titre-header-page"> Un besoin de site carrière ? </h1>
          <div class="">
          <p class="contactez">Contactez <strong> Paradisiak</strong> nous vous accompagnons <br>de A à Z</p>
          </div>
        </div>
       </div>
  </div>
</header>
<h2 class="devis-titre-contact">Demandez un devis pour votre site carrière !</h2>
<div class="container block-contact border rounded-2">
  <div class="row">
      <div class="col-sm-8">
          <?php 
            echo do_shortcode("[forminator_form id='29']"); 
          ?>
      </div>

      <div class="col-sm-4 text-center rounded-1 left-contact-block" >
        <div class="col">
          <img src="<?php echo (get_template_directory_uri(). '/assets/icone/favicone.png');?>"  alt="" width="33%" height="10%"> 
        </div>
        <div class="col">
          <i class="fa fa-map-marker" aria-hidden="true"> </i> 
          <span class="point-1"><strong> Paradisiak </strong></span>
            <br> 10 rue du Colisée
            <br>75008 Paris
        </div>
        <div>
          <i class="fa fa-envelope-o" aria-hidden="true"></i> 
          <a class="contact-e-mail" href="mailto:contact@paradisiak.com">contact@paradisiak.com</a>
        </div>
        <div class="col">
          <i class="fa fa-phone"></i> 
           <a href="tel:+0145260873">
            <button class="btn btn-success">01 45 26 08 73</button>
	         </a>
        </div>

        <div class="col footer-picto">
              <a href="https://www.linkedin.com/company/agenceparadisiak/about/?viewAsMember=true" target="_blank">
              <img src="<?php echo (get_template_directory_uri(). '/assets/icone/linkedin.png');?>" class="img-fluid" alt="" width="30" >
              </a>
              <a href="https://www.tiktok.com/@agenceparadisiak?lang=fr" target="_blank">
              <img src="<?php echo (get_template_directory_uri(). '/assets/icone/tiktok-logo.svg');?>" class="img-fluid" alt="" width="30" >
              </a>
              <a href="https://www.instagram.com/agenceparadisiak/" target="_blank">
              <img src="<?php echo (get_template_directory_uri(). '/assets/icone/insta.webp');?>" class="img-fluid" alt="" width="30" >
              </a>
        </div>
      </div>
  </div>
</div>

<div>
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2624.353861147375!2d2.305908114891088!3d48.87053040780715!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66fc44426d0a3%3A0x4dd46a14608f8c25!2s10%20Rue%20du%20Colis%C3%A9e%2C%2075008%20Paris!5e0!3m2!1sfr!2sfr!4v1651513310444!5m2!1sfr!2sfr" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>

<?php

get_footer();

?>
