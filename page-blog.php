<!-- Page blog -->

<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-capable" content="yes">
    <title>Blog Paradisiak</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="icon" href="<?php echo(get_template_directory_uri() . '/assets/icone/favicone.png') ?>" sizes="16x16 32x32 48x48 64x64" >

<?php
    wp_head();
?>
</head>
<body>
<header class="site-header text-titre-header">
  <nav class="navbar navbar-default navbar-expand-md container d-flex flex-column flex-md-row justify-content-between">
      <a class="py-1" href="<?php echo get_site_url();?>" aria-label="Product" style="margin-Left:-47px">
            <img src="<?php echo (get_template_directory_uri(). '/assets/logo/logo-large.png');?>"  alt="" height="65" width="200"> 
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
       <div class="col"> 
          <h1 class="site-carriere titre-header-page">Besoin d'inspiration ? </h1>
          <div class="">
          <p class="lead fw-normal">Nous avons <strong> le meilleur </strong> du recrutement</p>
          </div>
        </div>
       </div>
  </div>
</header>

<div class="bloc-titre-blog text-center">
    <h1 class="titre-blog">Le blog de Paradisiak <span class="point-1">!</span></h1>
</div>

<main class="container m-5">
    <div class="row g-5">
        <div class="col-md-8">
        <div class="bg-light rounded-3 border p-4 box-pourquoi">
            <h2 class="pourquoi text-center">Pourquoi avoir un site carrière ?</h2>
            <p class="pourquoi-site-blog">Premier vecteur entre votre entreprise et vos candidats,  <span class="point-1">un site carrière </span> « sur mesure » est un excellent moyen d'aider vos futurs collaborateurs à mieux vous connaître.</p>
        </div>

        </div>

        <div class="col-md-4">
        <div class="position-sticky" style="top:2rem;">
            <div class="p-4 mb-3 bg-light rounded border">
            <h4 class="idee-site">Une idée de site carrière ?</h4>
                <div class="container text-center"><br>
                    <a class="devis-pensez" href="<?php echo $page_contact; ?>">
                        <button type="button" class="btn btn-success text-white">Demandez un devis </button>
                    </a> 
                </div>
            </div>
        </div>
        </div>
    </div><br><br>
  <div class="row mb-2">
    <div class="col-md-8">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <h3 class="mb-0">titre de l'article</h3>
          <div class="mb-1 m-1 text-muted">date</div>
          <p class="card-text mb-auto">Artcile..............................</p>
          <a href="#" class="stretched-link">Lire la suite</a>
        </div>
        <div class="col-auto d-none d-lg-block">
          <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">image</text></svg>
        </div>
      </div>
    </div>
    <!-- <div class="col-md-4 border rounded-3">
         
    </div> -->
  </div>


</main>

<img src="<?php echo (get_template_directory_uri(). '/assets/img/footer_image.png');?>" class="img-fluid" alt="..." width="100%" height="10%">
<?php

  get_footer();
?>
</body>
</html>







