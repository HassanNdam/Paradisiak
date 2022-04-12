<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Paradisiak">
    <meta name="generator" content="Hugo 0.88.1">
    <title><?php echo bloginfo("name");?></title>
    <!-- <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri ?>/style.css?ver=<?php echo time() ?>"> -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="icon" href="<?php echo(get_template_directory_uri() . '/assets/icone/FavIcone1.png') ?>" sizes="16x16 32x32 48x48 64x64" >
    

  <?php wp_head();

  $page_contact = get_site_url() . '/contact/';
  $page_blog = get_site_url() . '/blog/';

  ?>
  </head>
  <body oncontextmenu='return false' class='snippet-body'>
    
<header class="site-header"> 
  <nav class="navbar navbar-expand-md container d-flex flex-column flex-md-row justify-content-between">
      <a class="py-1 " href="<?php echo get_site_url();?>" aria-label="Product" style="margin-Left:-47px">
            <img src="<?php echo (get_template_directory_uri(). '/assets/logo/logo-large.png');?>"  alt="" height="65" width="200"> 
      </a>
      <a class="d-md-inline-block apropos" href="#apropos">
      <span class="point-4">À</span> propos de nous
      </a>
      <a class="d-md-inline-block exemples" href="#exemples">
      <span class="point-2">E</span>xemples
      </a>
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

 <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-dark">
    <main>
       <div class="col-md-5  header-text"> <!--p-lg-5 mx-auto my-5-->

          <h1 class="site-carriere"> Votre site carrière <strong>sur-mesure.</strong> </h1>
          <div class="">
          <br>
          <p class="lead fw-normal">Attirez les meilleurs talents et faites exploser <br>votre référencement !</p>
            <a href="<?php echo $page_contact; ?>"><button type="button" class="btn btn-success">Demandez un devis</button>
          </a>
          </div>
        </div>
      </div>
  </div>

</header>













