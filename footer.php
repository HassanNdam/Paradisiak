

<footer>
  <div class="row">
    <div class="col-6 col-md">
      <a href="<?php echo get_site_url();?>" alt="Aller sur la page d'accueil" title="Aller sur la page d'accueil">
      <img src="<?php echo (get_template_directory_uri(). '/assets/icone/favicone.png');?>" class="img-fluid" alt="..." width="33%" height="10%">
      </a>
    </div>
    <div class="col-6 col-md">
      <h5>Bureaux</h5>
      <ul class="list-unstyled text-small">
        <p>Paradisiak<br>
        10 rue du Colisée<br>
					75008 Paris</p>
      </ul>
    </div>
    <div class="col-6 col-md">
      <h5>Contact commercial</h5>
      <ul class="list-unstyled text-small">
        <p>Tél : +33 145 260 873</p>
      </ul>
    </div>
    <div class="col-6 col-md">
      <h5>Nous-suivre : </h5>
      <!-- <ul class="list-unstyled text-small"> -->
      <div class="col footer-picto">
              <a href="https://www.linkedin.com/company/agenceparadisiak/about/?viewAsMember=true" target="_blank" >
              <img src="<?php echo (get_template_directory_uri(). '/assets/icone/linkedin.png');?>" class="img-fluid" alt="" width="30" >
              </a>
              <a href="https://www.tiktok.com/@agenceparadisiak?lang=fr" target="_blank">
              <img src="<?php echo (get_template_directory_uri(). '/assets/icone/tiktok-logo.svg');?>" class="img-fluid" alt="" width="30" >
              </a>
              <a href="https://www.instagram.com/agenceparadisiak/" target="_blank">
              <img src="<?php echo (get_template_directory_uri(). '/assets/icone/insta.webp');?>" class="img-fluid" alt="" width="30" >
              </a>
      </div>
       <!-- </ul> -->
     </div>
    <div class="d-flex justify-content-center py-4 my-4 border-top">
      <p> Copyright © <a class ="coypwrights"href="https://paradisiak.com/" alt="Réalisé par Paradisiak"> Paradisiak</a>  © 2022 Tous droits réservés</p>
      <a href="#">
      <i class="material-icons mobile-icone-top">keyboard_arrow_up</i>
      </a> 
    </div>
</footer>
    
<?php 
wp_footer();
?>  

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" defer integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" defer integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script> 
<script src="<?php echo(get_template_directory_uri() . '/assets/js/main.js') ?>" defer></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-6Q517JNPYH"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'G-6Q517JNPYH');
</script>

</body>
</html>
