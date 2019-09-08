<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package orthoLatresne
 */

?>





	<!--</div>--><!-- #content -->



<div class="popup mentions">
    <div class="popupcontent mentions animated fadeInDown">
      <div class="fermernl">
          <!--<button class="btnfermernl">X</button>-->
         <button class="btnfermernl"><i class="fas fa-times"></i></button>
        </div>
      <div class="row">
          <div class="col-12">
            <h3>Mentions légales</h3>
<p>
La loi nº 2004-575 du 21 juin 2004 pour la confiance dans l’économie numérique fait obligation au propriétaire d’un site web de porter certaines informations à la connaissance du public : <br />
Raison sociale : <br />
Numéro RPPS : <br />
Siège social : <br />
Téléphone : <br />
Siret : <br />
Responsable du site web : <br />
<br />
Ce site est conçu à titre purement informatif et est destiné à tout type de public. Il a été réalisé selon la charte ordinale de qualité relative aux sites Internet et ratifiée par le praticien.<br />
Ces informations permettent également de présenter le cabinet.<br />
<br />
Tous les éléments de ce site web sont protégés par la législation sur le droit d’auteur. Par conséquent, toute reproduction totale ou partielle, utilisation, modification, etc sont interdites sans l’autorisation écrite préalable soit du docteur  soit des ayant-droits des éléments concernés.
</p>
          </div>
                        
      </div>
  </div>
</div>


<div class="popup credits">
    <div class="popupcontent credits animated fadeInDown">
      <div class="fermernl">
          <!--<button class="btnfermernl">X</button>-->
         <button class="btnfermernl"><i class="fas fa-times"></i></button>
        </div>
      <div class="row">
          <div class="col-12">
            <h3>Crédits</h3>
<p>
Design : <a href="http://www.mcgdesign.fr/" target="blank">MCG</a><br />
Développement : <a href="https://madmind.fr" target="blank">Mathieu Dussault</a>
</p>
          </div>
                        
      </div>
  </div>
</div>


<?php     if (  is_page( 'lorthodontie' ) ) { ?>


<footer class="d-none inverse">
  <div class="container-fluid inverse">
    <div class="row">
      <div class="col-sm-6">
        <img src="<?php bloginfo('stylesheet_directory');?>/img/logofooterblanc.png" alt="" />
      </div>
      <div class="col-sm-6 text-right">
        05 56 20 65 20 <br>
        contact@orthodontie-latresne.fr<br>
        2, rue augustinot 33360 Latresne<br>
        <a href="javascript:$('.popup.credits').show();" class="liencredits">Crédit</a> | <a href="javascript:$('.popup.mentions').show();"  class="lienmentions">Mentions Légales</a>
      </div>
    </div>
  </div>
</footer>


<?php   } else { ?>

<footer class="d-none">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6">
        <img src="<?php bloginfo('stylesheet_directory');?>/img/logofooterblanc.png" alt="" />
      </div>
      <div class="col-sm-6 text-right">
        05 56 20 65 20 <br>
        contact@orthodontie-latresne.fr<br>
        2, rue augustinot 33360 Latresne<br>
        <a href="javascript:$('.popup.credits').show();" class="liencredits">Crédit</a> | <a href="javascript:$('.popup.mentions').show();"  class="lienmentions">Mentions Légales</a>
      </div>
    </div>
  </div>
</footer>


<?php  } ?>

<a href="#top" class="d-none"  id="backtotop" title="Retourner en haut de la page" style="display: block;"></a>



<!--</div>--><!-- #page -->







<?php wp_footer(); ?>

</body>
</html>
