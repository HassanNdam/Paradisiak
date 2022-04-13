

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


<header class="site-header">
  <nav class="navbar navbar-expand-md container d-flex flex-column flex-md-row justify-content-between">
      <a class="py-1 " href="<?php echo get_site_url();?>" aria-label="Product" style="margin-Left:-47px">
            <img src="<?php echo (get_template_directory_uri(). '/assets/logo/logo-large.png');?>"  alt="" height="65" width="200"> 
      </a>

      <a class="d-none d-md-inline-block apropos" href="#apropos">
      <span class="point-4">À</span> propos de nous
      </a>
      <a class="d-none d-md-inline-block exemples" href="<?php echo $page_exemples ?>">
      <span class="point-2">E</span>xemples
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
          <h1 class="site-carriere"> Une idée de site carrière ? </h1>
          <div class="">
          <br>
          <p class="lead fw-normal">Contactez <strong> Paradisiak</strong></p>
          </div>
        </div>
       </div>
  </div>
</header>

<h2 class="devis-titre-contact">Demandez un devis pour votre site carrière !</h2>

<?php 
   Envoi_Mail();
?>

<div class="container block-contact border rounded-2">
  <div class="row">
      <div class="col-sm-8">
        <form class="row g-3" method="POST" action="<?php echo $page_contact ?>" >
          <div class="col-md-6">
            <label for="nom" class="form-label">Nom</label>
            <input type="text" class="form-control" id="nom" name="nom" maxlength="50" placeholder="Nom">
          </div>
          <div class="col-md-6">
            <label for="telephone" class="form-label">Téléphone</label>
            <input type="tel" class="form-control" id="telephone" name="telephone" name="telephone" maxlength="13"  placeholder="Téléphone" >
          </div>
          <div class="col-6">
            <label for="societe" class="form-label">Société</label>
            <input type="text" class="form-control" id="societe" name="societe" maxlength="50" placeholder="Société">
          </div>
          <div class="col-6">
            <label for="email" class="form-label">Adresse e-mail</label><span class="point-5"> *</span>
            <input type="email" class="form-control" id="email" name="email" maxlength="50" required placeholder="Adresse email">
          </div>
          <div class="mb-3">
            <label for="message" class="form-label">Message</label>
            <textarea class="form-control" id="message" rows="4" placeholder="Message"></textarea>
          </div>
          <div class="col-12">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="gridCheck" required>
              <label class="form-check-label" for="gridCheck">
              En soumettant ce formulaire, j'accepte que les informations saisies soient utilisées pour me recontacter dans le cadre de la relation commerciale qui peut découler de cette demande.
              </label>
            </div>
          </div>
          <div class="col-12 text-center envoi-mail">
            <button type="submit" class="btn btn-success" name="envoyer">Envoyer</button>
          </div>
        </form>
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
