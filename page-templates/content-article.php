
<main class="container">
<div class="text-start single-article">
    <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?php echo get_site_url();?>">Accueil</a></li>
        <li class="breadcrumb-item"><a href="<?php echo $page_blog; ?>">Notre blog</a></li>
        <li class="breadcrumb-item active" aria-current="page"><?php echo the_title();?></li>
    </ol>
    </nav>
    <h1 class="titre-article "><?php echo the_title();?></h1>
</div>

<div class="container text-center">
    <img class="rounded-3 border img-fluid single-thumbnail col-md-6" src="<?php the_post_thumbnail_url('thumbnails'); ?>" alt="image" max-width="" max-height="">
</div>

<div class="row g-5 espace-article">
    <div class="col-md-8">
    <article class="blog-post">
    <p class="blog-post-meta"> Publié le <?php the_date();?> par <strong> <?php the_author();?></strong></p>
        <hr>
        
      </article>

            <?php

            the_content();

            ?>
    </div>

    <div class="col-md-4">
      <div class="position-sticky" style="top: 2rem;">
        <!-- <div class="p-4 mb-3 bg-light border rounded box-pourquoi">
          <h4 class="idee-site">Catégories</h4>
            <ol class="list-unstyled mb-0 text-center">
            <li><a class="categorie" href="#">Ici </a></li> 
                     <?php the_category(); ?>
                         <?php the_tags();?>
            </ol>
          <p class="mb-0"></p>
        </div> -->
            <div class="text-center"><br><br>
                <a class="lien-contagct-blog" href="<?php echo $page_contact; ?>">
                      <button type="button" class="btn btn-success btn-lg text-white">Demandez un devis </button>
                </a>
            </div>
        <!-- <div class="p-4 box-pourquoi border">
          <h4 class="idee-site">Nos archives</h4>
          <ol class="list-unstyled mb-0 text-center">
            <li><a class="categorie" href="#">Ici</a></li>
          </ol>
        </div>   -->
        </div>
      </div>
    </div>
  </div>
  </main>