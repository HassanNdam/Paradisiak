<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-6Q517JNPYH"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'G-6Q517JNPYH');
    </script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?php echo(get_template_directory_uri() . '/assets/css/404.css') ?>">
    <link rel="icon" href="<?php echo(get_template_directory_uri() . '/assets/icone/favicone.png') ?>" sizes="16x16 32x32 48x48 64x64" >
</head>
<body class="bg-purple">
        
        <div class="stars">
            <div class="custom-navbar">
                <div class="brand-logo">
                    <img src="<?php echo(get_template_directory_uri() . '/assets/icone/favicone.png') ?>" width="40px">
                </div>
                <div class="navbar-links">
                    <ul>
                      <li><a href="<?php echo $page_contact; ?>" class="btn-request">Contactez Paradisiak</a></li>
                    </ul>
                </div>
            </div>
            <div class="central-body">
                <h1 class="titre-404">404</h1>
                <p class="page-existe">Oups! Cette page n'existe pas! </p>
                <a href="<?php echo get_site_url(); ?>" class="btn-go-home">ACCUEIL</a>
            </div>
            <div class="objects">
                <img class="object_rocket" src="http://salehriaz.com/404Page/img/rocket.svg" width="40px">
                <div class="earth-moon">
                    <img class="object_earth" src="http://salehriaz.com/404Page/img/earth.svg" width="100px">
                    <img class="object_moon" src="http://salehriaz.com/404Page/img/moon.svg" width="80px">
                </div>
                <div class="box_astronaut">
                    <img class="object_astronaut" src="<?php echo(get_template_directory_uri() . '/assets/icone/favicone.png') ?>" width="140px">
                </div>
            </div>
            <div class="glowing_stars">
                <div class="star"></div>
                <div class="star"></div>
                <div class="star"></div>
                <div class="star"></div>
                <div class="star"></div>
                <div class="star"></div>
                <div class="star"></div>
                <div class="star"></div>
                <div class="star"></div>
                <div class="star"></div>
            </div>
        </div>
</body>
</html>





