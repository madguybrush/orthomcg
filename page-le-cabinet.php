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




<div style="text-align: center; " class="d-none" id="bienvenue">
    <img src="<?php if (get_the_post_thumbnail_url()) { echo get_the_post_thumbnail_url(); } ?>" alt="le cabinet" style="max-width: 100%; margin: 1.5rem;padding: 1.5rem; width:200px;">
</div>

<?php
$ligne1 = get_field('ligne1');
$bloc1 = $ligne1['bloc1'];
$titre1 = $bloc1['titre'];
$texte1 = $bloc1['texte'];
$photo1 = $ligne1['photo1'];

$ligne2 = get_field('ligne2');
$bloc2 = $ligne2['bloc2'];
$titre2 = $bloc2['titre'];
$texte2 = $bloc2['texte'];
$photo2 = $ligne2['photo2'];

$ligne3 = get_field('ligne3');
$bloc3 = $ligne3['bloc3'];
$titre3 = $bloc3['titre'];
$texte3 = $bloc3['texte'];
$photo3 = $ligne3['photo3'];

?>


<div  id="cabinet" class="container-fluid nopacity">
  
  <div class="row mb-5">

    <div class="col-md-6 ligne" >
      <div class="blocrouge">
          <h1><?php echo $titre1; //print_r($bloc1); ?></h1>
          <p><?php echo $texte1; ?></p>
      </div>
    </div>

    <div class="col-md-6 text-left ligne">
      <!--<img src="image2hp.jpg" alt="" class="imagecabinet">-->
       <img src="<?php echo $photo1; //bloginfo('stylesheet_directory');?>" alt="" class="imagecabinet">
    </div>

    <div class="col-md-6 text-right ligne">
     <!-- <img src="image4hp.jpg" alt="" class="imagecabinet">-->
      <img src="<?php bloginfo('stylesheet_directory');?>/img/cabinet2.jpg" alt="" class="imagecabinet">
    </div>

    <div class="col-md-6 ligne">
       <div class="blocbleu">
          <h1><?php echo $titre2; ?></h1>
          <p><?php echo $texte2; ?></p>
      </div>
    </div>




    <div class="col-md-6 ligne ">
       <div class="blocjaune bleu">
          <h1 class="bleu"><?php echo $titre3; ?></h1>
          <p><?php echo $texte3; ?></p>

      </div>
      <!-- <img src="flechejaune.png" class="flechejaune">-->


       <div class="arrow-downjaune2" ></div>
    </div>

      <div class="col-md-6 text-left ligne">
         <img src="<?php bloginfo('stylesheet_directory');?>/img/cabinet3.jpg" alt="" class="imagecabinet">
      <!--<img src="image4hp.jpg" alt="" class="imagecabinet">-->
    </div>

  </div>






  <div class="row mb-5">


<?php

// check if the repeater field has rows of data
if( have_rows('lequipe') ):

  // loop through the rows of data
    while ( have_rows('lequipe') ) : the_row();

        // display a sub field value
      //  the_sub_field('nom');

   $photo = get_sub_field('photo');
      $nom = get_sub_field('nom');
      $texte1 = get_sub_field('texte1');
      $texte2 = get_sub_field('texte2');
      $color  = get_sub_field('couleur');

?>

    <div class="col-md-6 text-center ligne mt-4" ontouchstart="this.classList.toggle('hover');">
      <div class="flip-container">
       <div class="flipper">

         <div class="front" >
          <img src="<?php echo $photo; ?>" alt="">  
        </div>

         <div class="back">
         
            <div class="box"> 

              <?php if ($color == "bleu"){ ?>

              <div class="content" id="circleblue">
               <h2 class="jaune"><?php echo $nom; ?></h2>
               <p>
                 <span><?php echo $texte1; ?></span>
                 <?php echo $texte2; ?>
               </p>
              </div>

              <?php } else if ($color == "rouge"){ ?>

              <div class="content" id="circlered">
               <h2 class="jaune"><?php echo $nom; ?></h2>
               <p>
                 <span><?php echo $texte1; ?></span>
                 <?php echo $texte2; ?>
               </p>
              </div>

              <?php } else { ?>

              <div class="content" id="circlejaune">
               <h2><?php echo $nom; ?></h2>
               <p class="bleu">
                 <span><?php echo $texte1; ?></span>
                 <?php echo $texte2; ?>
               </p>
              </div>

              <?php } ?>

            </div>

          </div>

       </div>
     </div>
    </div>


<?php
    endwhile;

else :

    // no rows found

endif;

?>




    
        <div class="col-md-6 text-center ligne mt-4" ontouchstart="this.classList.toggle('hover');">
      <div class="flip-container">
       <div class="flipper">
         <div class="front" >
            <img src="<?php bloginfo('stylesheet_directory');?>/img/equipe8.png" alt="">   
        </div>
         <div class="back">
           
          <div class='box'> 
              
              <div class='content' id="circleblue">
<img src="<?php bloginfo('stylesheet_directory');?>/img/equipe9.png" alt=""  style="width:100%"> 
           <!--      <h2 class="jaune"></h2>
                <p><span> </span></p>-->
              </div>
            </div>     
          </div>
       </div>
     </div>
    </div>



</div>







</div>






<?php
get_sidebar();
get_footer();
