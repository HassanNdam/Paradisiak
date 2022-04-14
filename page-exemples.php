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
                <div class="h-100 text-dark bg-white rounded-3">
                    <div class="row">
                        <p class="lead texte-bloc-exemples">
                            <span class="facilitez-texte">Facilitez</span> la recherche à vos candidats grâce à des moteurs de recherche personnalisées.
                            <span class="text-italic">Recherche par lieu, mot clefs, typologie de métiers…</span>
                        <p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="h-100 text-white bg-white rounded-3">
                    <div class="row">
                        <img src="<?php echo(get_template_directory_uri() . '/assets/portfolio/Exemple1.png') ?>" class="img-fluid" alt="Exemple de site" >
                    </div>
                </div>
            </div>
        </div>
        <div class="row align-items-md-stretch">
            <div class="col-md-6">
                <div class="h-100 text-white bg-white  rounded-3">
                    <div class="row">
                        <img src="<?php echo(get_template_directory_uri() . '/assets/portfolio/Exemple2.png') ?>" class="img-fluid" alt="Exemple de site" >
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="h-100 text-dark bg-white rounded-3">
                    <div class="row">
                        <p class="lead texte-bloc-exemples">
                        <span class="captez-texte">Captez</span> l’attention de vos futurs candidats en choisissant des visuels, des couleurs répondant à votre charte graphique.
                        Photos, pictogrammes, logo, police de caractère…
                        <p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row align-items-md-stretch espace-bloc-exemples" >
            <div class="col-md-6">
                <div class="h-100 text-dark bg-white rounded-3">
                    <div class="row">
                        <p class="lead texte-bloc-exemples">
                        <span class="simplifiez-texte">Simplifiez</span> l’action de candidater depuis n’importe quel support (smartphone, tablette) grâce au responsive design
                        <p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="h-100 text-dark bg-white rounded-3">
                    <div class="row">
                    <BR><BR><img src="<?php echo(get_template_directory_uri() . '/assets/portfolio/PC-exemple.png') ?>" class="img-fluid" alt="" height="300" width="500">
                    </div>
                </div>
            </div>
        </div>
        <hr class="featurette-divider">
    </div>
</div>


    <h2 class="texte-confiance">Ils font confiance à <span class="point-1">Paradisiak !</span></h2>
            
    <div class="container bloc-nos-clients">
            <div class="row text-center block-confiance">
                <div class="col">
                    <a href="https://recrutement.intersport.fr/" target="_blank">
                     <img src="<?php echo(get_template_directory_uri() . '/assets/logo/logo_is.svg') ?>" class="img-fluid" alt="">
                    </a>
                </div>
                <div class="col">
                    <a href="https://emploi.pichet.fr/" target="_blank">
                        <img src="<?php echo(get_template_directory_uri() . '/assets/logo/logo-pichet.svg') ?>" class="img-fluid" alt="">
                    </a>
                </div>
                <div class="col">
                    <a href="https://admr76.candidater.fr/" target="_blank">
                            <img src="<?php echo(get_template_directory_uri() . '/assets/logo/logo-admr.png') ?>" class="img-fluid" alt="">
                    </a>
                 </div>
            </div>
            <div class="row text-center block-confiance">
                <div class="col">
                    <a href="https://1001repas.candidater.fr/" target="_blank">
                            <img src="<?php echo(get_template_directory_uri() . '/assets/logo/1001repas.png') ?>" class="img-fluid" alt="">
                    </a>
                 </div>
                 <div class="col">
                    <a href="https://recrutement.agglo-compiegne.fr/" target="_blank">
                            <img src="<?php echo(get_template_directory_uri() . '/assets/logo/mairi.png') ?>" class="img-fluid" alt="">
                    </a>
                 </div>
                 <div class="col">
                    <a href="https://chelles.candidater.fr/" target="_blank">
                            <img src="<?php echo(get_template_directory_uri() . '/assets/logo/logo-chelles.png') ?>" class="img-fluid" alt="">
                    </a>
                 </div>
            </div>
            <div class="row text-center block-confiance">
                <div class="col">
                    <a href="https://soredes.candidater.fr/" target="_blank">
                     <img src="<?php echo(get_template_directory_uri() . '/assets/logo/logo-soredes.png') ?>" class="img-fluid" alt="">
                    </a>
                </div>
                <div class="col">
                    <a href="http://martinetinvest.candidater.fr/" target="_blank">
                        <img src="<?php echo(get_template_directory_uri() . '/assets/logo/logo-martinet.png') ?>" class="img-fluid" alt="">
                    </a>
                 </div>
                <div class="col">
                    <a href="https://ville-issy.candidater.fr/" target="_blank">
                            <img src="<?php echo(get_template_directory_uri() . '/assets/logo/logo-issy3.png') ?>" class="img-fluid" alt="">
                    </a>
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
