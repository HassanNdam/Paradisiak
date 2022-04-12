<?php
/**
Page des exemples de site
 *
 */

include 'page-header.php'; 

?>

<div class="container-fluid page-site-exemples">
<div class="container">
    <div class="row align-items-md-stretch espace-bloc-exemples" >
      <div class="col-md-6">
        <div class="h-100 text-white bg-light border rounded-3 hovereffect">
            <div class="row">
                <img src="<?php echo(get_template_directory_uri() . '/assets/portfolio/compiegne.png') ?>" class="img-fluid" alt="Compiegne">
                <div class="overlay">
                          <a class="info" href="https://agglo-compiegne.candidater.fr/" target="_blank">
                             Voir le site web
                          </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="h-100 text-white bg-light border rounded-3 hovereffect">
            <div class="row">
                <img src="<?php echo(get_template_directory_uri() . '/assets/portfolio/DMR_.png') ?>" class="img-fluid" alt="DMR" >
                <div class="overlay">
                          <a class="info" href="https://admr76.candidater.fr/" target="_blank">
                             Voir le site web
                          </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row align-items-md-stretch espace-bloc-exemples">
    <div class="col-md-6">
        <div class="h-100 text-white bg-light border rounded-3 hovereffect">
            <div class="row">
                <img src="<?php echo(get_template_directory_uri() . '/assets/portfolio/Chelles.png') ?>" class="img-fluid" alt="Chelles" >
                <div class="overlay">
                          <a class="info" href="https://chelles.candidater.fr/" target="_blank">
                             Voir le site web
                          </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="h-100 text-white bg-light border rounded-3 hovereffect">
            <div class="row">
                <img src="<?php echo(get_template_directory_uri() . '/assets/portfolio/Soderes.png') ?>" class="img-fluid" alt="Soredes" >
                <div class="overlay">
                          <a class="info" href="https://soredes.candidater.fr/" target="_blank">
                             Voir le site web
                          </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row align-items-md-stretch espace-bloc-exemples">
    <div class="col-md-6">
        <div class="h-100 text-white bg-light border rounded-3 hovereffect">
            <div class="row">
                <img src="<?php echo(get_template_directory_uri() . '/assets/portfolio/milleetunrepas.png') ?>" class="img-fluid" alt="Milleetunrepas" >
                <div class="overlay">
                          <a class="info" href="https://1001repas.candidater.fr/" target="_blank">
                             Voir le site web
                          </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="h-100 text-white bg-light border rounded-3 hovereffect">
            <div class="row">
                <img src="<?php echo(get_template_directory_uri() . '/assets/portfolio/ISSY.png') ?>" class="img-fluid" alt="Intersport" >
                <div class="overlay">
                          <a class="info" href="https://ville-issy.candidater.fr/" target="_blank">
                             Voir le site web
                          </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row align-items-md-stretch espace-bloc-exemples">
    <div class="col-md-6">
        <div class="h-100 text-white bg-light border rounded-3 hovereffect">
            <div class="row">
                <img src="<?php echo(get_template_directory_uri() . '/assets/portfolio/Relais.png') ?>" class="img-fluid" alt="Relais" >
                <div class="overlay">
                          <a class="info" href="https://relaisassur.candidater.fr/" target="_blank">
                             Voir le site web
                          </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="h-100 text-white bg-light border rounded-3 hovereffect">
            <div class="row">
                <img src="<?php echo(get_template_directory_uri() . '/assets/portfolio/Martinet.png') ?>" class="img-fluid" alt="Martinet" >
                <div class="overlay">
                          <a class="info" href="http://martinetinvest.candidater.fr/" target="_blank">
                             Voir le site web
                          </a>
                </div>
            </div>
        </div>
    </div>
  </div>
</div>
</div>
<p class="un-site">
    <a class="je-veux-un-site-exemple" href="<?php echo $page_contact; ?>">
              <button type="button" class="btn btn-success">Demander un devis </button>
    </a> 
</p>

<?php

include("page-templates/page-footer.php");

?>
