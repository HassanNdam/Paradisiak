

<!--
Page contact Paradisiak 
-->

<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Paradisiak">
    <meta name="generator" content="Hugo 0.88.1">
    <title><?php echo bloginfo("name");?></title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="icon" href="<?php echo(get_template_directory_uri() . '/assets/icone/FavIcone1.png') ?>" sizes="16x16 32x32 48x48 64x64" >
    

  <?php wp_head();

  ?>
  </head>
<body>


<header class="site-header text-titre-header">
  <nav class="navbar navbar-expand-md container d-flex flex-column flex-md-row justify-content-between">
      <a class="py-1 " href="<?php echo get_site_url();?>" aria-label="Product" style="margin-Left:-47px">
            <img src="<?php echo (get_template_directory_uri(). '/assets/logo/logo-large.png');?>"  alt="" height="65" width="200"> 
      </a>

      <a class="d-none d-md-inline-block apropos" href="<?php echo get_site_url()."#apropos";?>">
      <span class="point-4">À</span> propos de nous
      </a>
      <a class="d-none d-md-inline-block exemples" href="<?php echo get_site_url(). '#exemples';?>">
      <span class="point-2">N</span>os réalisations
      </a>
      <a class="d-none d-md-inline-block blog" href="<?php echo $page_blog; ?>">
      <span class="point-1">N</span>otre blog
      </a>
      <a class="d-none d-md-inline-block contact" href="<?php echo $page_contact; ?>">
      <span class="point-3">C</span>ontact
      </a>
      <a href="tel:+0145260873">
        <button class="btn btn-success"><i class="fa fa-phone"></i> 01 45 26 08 73</button>
	    </a>
  </nav>

 <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center background-header-contact">
    <main>
       <div class="col header-text"> 
          <h1 class="site-carriere titre-header-page"> Un besoin de site carrière ? </h1>
          <div class="">
          <p class="lead fw-normal">Contactez <strong> Paradisiak</strong> nous vous accompagnons <br>de A à Z.</p>
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
          <img src="<?php echo (get_template_directory_uri(). '/assets/icone/FavIcone1.png');?>"  alt="" width="33%" height="10%"> 
        </div>
        <div class="col">
          <i class="fa fa-map-marker" aria-hidden="true"> </i> 
          <span class="point-1"><strong> Paradisiak </strong></span>
            <br> 58 rue de l'arcade <br>75008 Paris
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
              <a href="https://www.linkedin.com/company/intuition-software/" target="_blank">
              <img src="<?php echo (get_template_directory_uri(). '/assets/icone/linkedin.png');?>" class="img-fluid" alt="" width="30" >
              </a>
              <a href="#">
              <img src="<?php echo (get_template_directory_uri(). '/assets/icone/tiktok-logo.svg');?>" class="img-fluid" alt="" width="30" >
              </a>
              <a href="#">
              <img src="<?php echo (get_template_directory_uri(). '/assets/icone/insta.webp');?>" class="img-fluid" alt="" width="30" >
              </a>
        </div>
      </div>
  </div>
</div>

<div>
		<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10496.25450566!2d2.3299204!3d48.8760636!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x67586b81447b926a!2sIntuition%20Software%20-%20Logiciel%20de%20Recrutement!5e0!3m2!1sfr!2sfr!4v1593613302255!5m2!1sfr!2sfr" width="100%" height="250" frameborder="0"  allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>			
</div>
<?php

include("page-templates/page-footer.php");

?>
