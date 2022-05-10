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
    <!-- <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri ?>/style.css?ver=<?php echo time() ?>"> -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="icon" href="<?php echo(get_template_directory_uri() . '/assets/icone/favicone.png') ?>" sizes="16x16 32x32 48x48 64x64">
    

  <?php wp_head();

  $page_contact = get_site_url() . '/contact/';
  $page_blog = get_site_url() . '/blog/';

  ?>
  </head>
  <body>


<header class="site-header"> 
  <nav class="navbar navbar-default navbar-expand-md d-flex container flex-column flex-md-row justify-content-between">
      <a class="navbar-brand" href="<?php echo get_site_url();?>" aria-label="Product" >
            <img src="<?php echo (get_template_directory_uri(). '/assets/logo/logo-large.png');?>"  alt="" height="85" width="240"> 
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="true" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="d-md-inline-block apropos" href="#apropos">
      <span class="point-4">À</span> propos de nous
      </a>
      <a class="d-md-inline-block exemples" href="#exemples">
      <span class="point-2">N</span>os réalisations
      </a>
      <a class="d-md-inline-block blog" href="<?php echo $page_blog; ?>">
      <span class="point-1">N</span>otre blog
      </a>
      <a class="d-md-inline-block contact" href="<?php echo $page_contact; ?>">
      <span class="point-3">C</span>ontact
      </a>
      <a href="tel:+0145260873">
        <button class="btn btn-success text-white display-btn-top"><i class="fa fa-phone"></i> 01 45 26 08 73</button>
	    </a>
  </nav>
</header>