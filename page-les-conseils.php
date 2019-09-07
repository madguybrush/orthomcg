<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package orthoLatresne
 */

get_header();
?>




<div class="d-none text-center" id="bienvenue">
  <img src="<?php if (get_the_post_thumbnail_url()) { echo get_the_post_thumbnail_url(); } ?>" alt="les conseils" style="max-width: 100%; margin: 1.5rem;padding: 1.5rem; width:200px;">
</div>

<?php
$ligne1 = get_field('ligne1');
$bloc1 = $ligne1['bloc1'];
$titre1 = $bloc1['titre'];
$texte1 = $bloc1['texte'];
$photo1 = $ligne1['photo1'];


?>



<nav class="mb-1" id="sousmenuconseils" style="text-align: center; background-color: rgba(255,255,255, .9);">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-3"> <a href="#videoancre" alt="" class="bleu">Les bons gestes</a> </div>
      <div class="col-sm-3"><a href="#conseilsancre" alt="" class="rouge"><b>Les fiches conseils</b></a> </div>
    </div>
  </div>

</nav>


<div  id="conseils" class="container-fluid nopacity">


  <div class="row" id="bongestes">

    <div class="col-md-6 ligne2" >
      <div class="blocrouge">
        <h1><?php echo $titre1;  ?></h1>
        <p><?php echo $texte1; ?></p>
      </div>
    </div>

    <div class="col-md-6 text-left ligne2">
      <img src="<?php echo $photo1;?>" alt="" class="imagecabinet">
    </div>

  </div>
  <span class="anchor" id="videoancre"></span>
  <div class="row mb-5 carte" id="videos">

    <?php

// check if the repeater field has rows of data
    if( have_rows('videos') ):
      ?>

      <div class="col-6 col-sm-4 text-left bloc">
        <div class="bgblanc bleu ">
         <b>Retrouvez ici toutes nos vidéos pour vous aider à pratiquer les bons gestes. <br>
         Pour toutes informations n'hésitez pas à nous contacter.   </b>
       </div>
     </div>


     <?php

  // loop through the rows of data

     $i=0;

     while ( have_rows('videos') ) : the_row();

        // display a sub field value
      //  the_sub_field('nom');

      $count = count(get_field('videos'));

      $video = get_sub_field('video');
      $titre = get_sub_field('titre');
      $color  = get_sub_field('couleur');

      $i++;

      ?>



      <div class="col-6 col-sm-4 text-center bloc2" >
        <a href="javascript:$('#video<?php echo $i; ?>').show(); $('.video').not('#video<?php echo $i; ?>').hide(); $('video').get(0).pause(); $('video').get(1).pause(); $('video').get(2).pause(); $('video').get(3).pause(); $('video').get(4).pause(); $(document).scrollTop( $('#videoancre<?php echo $i; ?>').offset().top);" class="bg<?php echo $color; ?> <?php if ($color == 'jaune')  { echo "bleu";} else { echo "jaune";} ?> carte ">
         <?php echo $titre; ?> <?php //echo $count; ?>
       </a>
       <!--  <div class="arrow-downbleu"></div>-->
     </div>


     <?php
   endwhile;

 else :

    // no rows found

 endif;

 ?>



 <?php
 if( have_rows('videos') ):

  ?>
  <!--<div class="row mb-5" id="vids">-->

    <?php

    $i=0;

    while ( have_rows('videos') ) : the_row();


      $count = count(get_field('videos'));

      $video = get_sub_field('video');


      $i++;

      ?>



      <div class="col-8 offset-2 text-center video" id="video<?php echo $i ?>" style="padding: 0px;"> <!-- col-12  padding 4 -->
        <span class="anchor" id="videoancre<?php echo $i ?>"></span>
        <video class="video-fluid videopresentation" poster="" controls="controls" id="movie<?php echo $i ?>"> 
          <source src="<?php echo $video; ?>" type="video/mp4">
            <!-- poster="https://bordeaux.alternative-urbaine.com/wp-content/themes/alternative-urbaine-bordeaux-V2/img/videoposter.jpg" -->
          </video>
        </div>


        <?php
      endwhile;

      ?>

      <!--</div>-->

      <?php

    endif;

    ?>


<!--
  <div class="col-4 text-left bloc2">
    <a href="javascript:$('#video1').show();$('#video2').hide();$('#video3').hide();$('.arrow-downbleu').show();$('.arrow-downrouge').hide();$('.arrow-downjaune').hide();" class="bgbleu jaune carte">
       Le brossage
      </a>
      <div class="arrow-downbleu"></div> 
    </div>
    <div class="col-4  text-center bloc2">
      <a href="javascript:$('#video1').hide();$('#video2').show();$('#video3').hide();$('.arrow-downbleu').hide();$('.arrow-downrouge').show();$('.arrow-downjaune').hide();" class="bgrouge carte" id="mid">
          Les élastiques
      </a>
       <div class="arrow-downrouge"></div>
    </div>
    <div class="col-4 text-center bloc2">
      <a href="javascript:$('#video1').hide();$('#video2').hide();$('#video3').show();$('.arrow-downbleu').hide();$('.arrow-downrouge').hide();$('.arrow-downjaune').show();" class="bgjaune bleu carte">
         Nettoyer son appareil dentaire
     </a>
       <div class="arrow-downjaune"></div>
    </div>


    <div class="col-12  text-center" id="video1">
     <div class="col-12 video-responsive "> 
        <iframe width="560" height="315" src="https://www.youtube.com/embed/I6s14R2t0rs" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
     </div>
    </div>


    <div class="col-12  text-center " id="video2">
     <div class="col-12 video-responsive "> 
        <iframe width="420" height="315" src=" https://www.dailymotion.com/embed/video/xpy0jf" frameborder="0" allowfullscreen ></iframe> 
     </div>
    </div>



    <div class="col-12 text-center" id="video3">

         <video class="video-fluid videopresentation" poster="https://bordeaux.alternative-urbaine.com/wp-content/themes/alternative-urbaine-bordeaux-V2/img/videoposter.jpg" controls="controls" >
            <source src="https://bordeaux.alternative-urbaine.com/wp-content/themes/alternative-urbaine-bordeaux-V2/img/aub.mp4" type="video/mp4">
        </video>

    </div>

  -->

  
</div>





<span class="anchor" id="conseilsancre"></span>
<div class="row mb-5 carte" id="fichesconseils">

  <?php

// check if the repeater field has rows of data
  if( have_rows('fiches') ):
    ?>


    <div class="col-6 col-sm-4 text-left bloc">
      <div class="bgblanc bleu ">
       <b>Retrouvez ici toutes nos fiches conseils à télécharger. <br>
       Pour toutes questions supplémentaires n'hésitez pas à nous contacter.   </b>
     </div>
   </div>

   <?php

   while ( have_rows('fiches') ) : the_row();

    $count = count(get_field('fiches'));

    $pdf = get_sub_field('pdf');
    $titre = get_sub_field('titre');
    $color  = get_sub_field('couleur');



    ?>


<div class="col-6 col-sm-4  text-center bloc">
 <a href="<?php echo $pdf; ?>" class="bg<?php echo $color; ?> <?php if ($color == 'jaune')  { echo "bleu";} else { echo "jaune";} ?>" download> 
   <?php echo $titre; ?>
   <img src="<?php bloginfo('stylesheet_directory');?>/img/file-download-solid-<?php if ($color == 'jaune')  { echo "bleu";} else { echo "jaune";}?>.svg" alt="" style="color: white; width: 20px;">
 </a>
</div>


    <?php
  endwhile;


endif;

?>


<!--
<div class="col-6 col-sm-4  text-center bloc">
 <a href="" class="bgjaune bleu">
   L'appareil multi-bague
   <img src="file-download-solid-bleu.svg" alt="" style="color: white; width: 20px;">
 </a>
</div>

<div class="col-6 col-sm-4  text-center bloc">
  <a href="" class="bgrouge">
   Contention
   <img src="file-download-solid.svg" alt="" style="color: white; width: 20px;">
 </a>
</div>



<div class="col-6 col-sm-4 text-center bloc">
  <a href="" class="bgbleu jaune">
   Quad Hélix numérisé
   <img src="file-download-solid-jaune.svg" alt="" style="color: white; width: 20px;">
 </a>
</div>

<div class="col-6 col-sm-4 text-center bloc">
 <a href="" class="bgrouge">
   Appareil de Herbst
   <img src="file-download-solid.svg" alt="" style="color: white; width: 20px;">
 </a>
</div>

<div class="col-6 col-sm-4  text-center bloc">
  <a href="" class="bgjaune bleu">
   Disjoncteur numérisé
   <img src="file-download-solid-bleu.svg" alt="" style="color: white; width: 20px;">
 </a>   
</div>



<div class="col-6 col-sm-4 text-left bloc">
 <a href="" class="bgjaune bleu">
   Quad Hélix 
   <img src="file-download-solid-bleu.svg" alt="" style="color: white; width: 20px;">
 </a>
</div>

<div class="col-6 col-sm-4 text-center bloc">
  <a href="" class="bgbleu jaune">
   Masque de Delaire
   <br>
   <img src="file-download-solid-jaune.svg" alt="" style="color: white; width: 20px;">
 </a>
</div>

<div class="col-6 col-sm-4  text-center bloc">
  <a href="" class="bgrouge">
   Disjoncteur 
   <br>
   <img src="file-download-solid.svg" alt="" style="color: white; width: 20px;">
 </a>
</div>

-->



</div>



</div>


<?php
get_sidebar();
get_footer();
