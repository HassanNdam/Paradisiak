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
                            <span class="facilitez-texte">Facilitez</span> la recherche à vos candidats grâce à des moteurs de recherche personnalisées :
                            <span class="text-italic">recherche par lieu, mot clefs, typologie de métiers…</span>
                        <p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="h-100 text-white bg-white rounded-3">
                    <div class="row">
                        <img src="<?php echo(get_template_directory_uri() . '/assets/portfolio/exemple1.png') ?>" class="img-fluid" alt="Exemple de site" >
                    </div>
                </div>
            </div>
        </div>
        <div class="row align-items-md-stretch">
            <div class="col-md-6">
                <div class="h-100 text-white bg-white  rounded-3">
                    <div class="row">
                        <img src="<?php echo(get_template_directory_uri() . '/assets/portfolio/exemple2.png') ?>" class="img-fluid" alt="Exemple de site" >
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




<?php

include("page-templates/page-footer.php");

?>
