<!-- Page blog -->



<!DOCTYPE html>
<html lang="en">
<head>
        <meta name="google-site-verification" content="h853uzLKUoZUqwcp0rxEHpDu75O5XbAuuvvOqtb3mzo" />
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

<header class="site-header"> 
  <nav class="navbar navbar-default navbar-expand-md container d-flex flex-column flex-md-row justify-content-between">
      <a class="py-1" href="<?php echo get_site_url();?>" aria-label="Product" style="margin-Left:-60px">
            <img src="<?php echo (get_template_directory_uri(). '/assets/logo/logo-large.png');?>"  alt="" height="65" width="200"> 
      </a>
      <a class="d-md-inline-block apropos" href="<?php echo get_site_url()."#apropos";?>">
      <span class="point-4">À</span> propos de nous
      </a>
      <a class="d-md-inline-block exemples" href="<?php echo get_site_url(). '#exemples';?>">
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

  <div class="position-relative overflow-hidden m-4  blog-header">
   
  </div>

</header>

<div class="bloc-titre-blog text-center">
    <h1 class="titre-blog"><span class="point-1">L</span>e blog de Paradisiak <span class="point-1">!</span></h1>
</div>


<img src="<?php echo (get_template_directory_uri(). '/assets/img/footer_image.png');?>" class="img-fluid" alt="..." width="100%" height="10%">
<?php
  get_footer();
?>
</body>
</html>







