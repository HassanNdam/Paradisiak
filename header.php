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
    <!-- <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri ?>/style.css?ver=<?php echo time() ?>"> -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="icon" href="<?php echo(get_template_directory_uri() . '/assets/icone/favicone.png') ?>" sizes="16x16 32x32 48x48 64x64">
    

  <?php wp_head();

  $page_contact = get_site_url() . '/contact/';
  $page_blog = get_site_url() . '/blog/';

  ?>
  </head>
  <body>
    
<!-- <header class="site-header"> 
 <nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Fixed navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="true" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="navbar-collapse collapse show" id="navbarCollapse" style="">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link apropos d-md-inline-block" href="#">Link</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled">Disabled</a>
          </li>
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav> 
</header> -->

<header class="site-header"> 
  <nav class="navbar navbar-default navbar-expand-md container d-flex flex-column flex-md-row justify-content-between">
      <a class="py-1" href="<?php echo get_site_url();?>" aria-label="Product" style="margin-Left:-60px">
            <img src="<?php echo (get_template_directory_uri(). '/assets/logo/logo-large.png');?>"  alt="" height="65" width="200"> 
      </a>
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
        <button class="btn btn-success text-white"><i class="fa fa-phone"></i> 01 45 26 08 73</button>
	    </a>
  </nav>

  <div class="position-relative overflow-hidden m-4 bg-dark">
        <div class="col-md-5 header-text">
          <h1 class="site-carriere"> Votre site carrière <strong>sur-mesure</strong> </h1>
          <br>
          <p class="lead fw-normal">Attirez les meilleurs talents et faites exploser <br>votre référencement !</p>
            <a href="<?php echo $page_contact; ?>"><button type="button" class="btn btn-success btn-lg text-white hover-vert" >Demandez un devis</button>
          </a>
        </div>
  </div>

</header>
