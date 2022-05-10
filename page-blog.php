<!-- Page blog -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="google-site-verification" content="h853uzLKUoZUqwcp0rxEHpDu75O5XbAuuvvOqtb3mzo"/>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
  <nav class="navbar navbar-default navbar-expand-md d-flex container flex-column flex-md-row justify-content-between">
        <a class="py-1" href="<?php echo get_site_url();?>" aria-label="Product" >
          <img src="<?php echo (get_template_directory_uri(). '/assets/logo/logo-large.png');?>"  alt="" height="76" width="211"> 
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
  <img src="<?php echo (get_template_directory_uri(). '/assets/img/footer_image.png');?>" class="img-fluid" alt="..." width="100%" height="15%">
</header>

<div class="bloc-titre-blog text-center">
    <h1 class="titre-blog"><span class="point-1">L</span>e blog de Paradisiak <span class="point-1">!</span></h1>
</div>

<main class="container">
  <div class="row g-5">
    <div class="col-md-8">
            
      <?php
      $args = array(
          'posts_per_page'   => -1,
          'offset'           => 0,
          'orderby'          => 'date',
          'order'            => 'desc',
          'post_type'        => 'post',

        );
      $myposts = get_posts( $args );

        foreach ( $myposts as $post ) : setup_postdata( $post );
      ?>

        <div class="row mb-2">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
              <div class="col p-4 d-flex flex-column position-static">
                <strong class="d-inline-block mb-2 point-2"><?php the_category();?></strong>
                <h3 class="mb-2"><?php the_title(); ?></h3>
                <div class="mb-3 text-muted">Publié le <?php the_date(); ?> par <strong><?php the_author();?></strong></div>
                <p class="card-text mb-auto"><?php the_excerpt(); ?></p>
                <a href="<?php the_permalink();?>" class="stretched-link">Lire la suite</a>
              </div>
              <div class="col-auto d-none d-lg-block">
                <img class="rounded mx-auto d-block" src="<?php the_post_thumbnail_url('medium'); ?>" alt="image" width="350" height="100%">
              </div>
            </div>
          </div>


        <?php endforeach; wp_reset_postdata(); ?>

        </div>

    <div class="col-md-4">
      <div class="position-sticky" style="top: 2rem;">
        <div class="p-4 mb-3 bg-light rounded box-pourquoi">
          <h4 class="idee-site">Catégories</h4>
            <ol class="list-unstyled mb-0 text-center">
            <li><a class="categorie" href="#">Ici</a></li>
            </ol>
          <p class="mb-0"></p>
        </div>
            <div class="text-center"><br><br>
                <a class="lien-contagct-blog" href="<?php echo $page_contact; ?>">
                      <button type="button" class="btn btn-success btn-lg text-white">Demandez un devis </button>
                </a>
            </div>
        <div class="p-4 box-pourquoi">
          <h4 class="idee-site">Archives sur notre blog</h4>
          <ol class="list-unstyled mb-0 text-center">
            <li><a class="categorie" href="#">Ici</a></li>
          </ol>
        </div>  
        </div>
      </div>
    </div>
  </div>
</main>
<br><br><br>
  <img src="<?php echo (get_template_directory_uri(). '/assets/img/footer_image.png');?>" class="img-fluid" alt="..." width="100%" height="10%">
<?php
  get_footer();
?>
</body>
</html>







