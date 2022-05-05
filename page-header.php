<!doctype html>
<html lang="fr">
  <head>
    <meta name="google-site-verification" content="h853uzLKUoZUqwcp0rxEHpDu75O5XbAuuvvOqtb3mzo" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Paradisiak">
    <meta name="generator" content="Hugo 0.88.1">
    <title><?php echo bloginfo("name");?></title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="icon" href="<?php echo(get_template_directory_uri() . '/assets/icone/favicone.png') ?>" sizes="16x16 32x32 48x48 64x64" >
    

  <?php wp_head();
  
  ?>
  </head>

<header class="site-header text-titre-header"> 
  <nav class="navbar navbar-expand-md container d-flex flex-column container flex-md-row justify-content-between">
      <a class="py-1 " href="<?php echo get_site_url();?>" aria-label="Product" style="margin-Left:-47px">
            <img src="<?php echo (get_template_directory_uri(). '/assets/logo/logo-large.png');?>"  alt="" height="65" width="200"> 
      </a>
      <a class="d-none d-md-inline-block apropos" href="<?php echo get_site_url()."#apropos";?>">
      <span class="point-4">À</span> propos de nous
      </a>
      <a class="d-none d-md-inline-block exemples" href="<?php echo get_site_url(). '#exemples';?>">
      <span class="point-2">N</span>os réalisations
      <a class="d-md-inline-block blog" href="<?php echo $page_blog; ?>">
      <span class="point-1">N</span>otre blog
      </a>
      <a class="d-md-inline-block contact" href="<?php echo $page_contact; ?>">
      <span class="point-3">C</span>ontact
      </a>
      <a href="tel:+0145260873">
        <button class="btn btn-success"><i class="fa fa-phone"></i> 01 45 26 08 73</button>
	    </a>
  </nav>

 <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-dark-page">
    <main>
       <div class="col header-text">
          <h1 class="site-carriere titre-header-page">En savoir plus </h1>
          <div class="">
          <p class="lead fw-normal">On vous accompagne dans la réalisation de votre  <br>page carrière. </p>
          </div>
      </div>
 </div>

</header>













