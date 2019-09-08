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




<div style="background-color: #0079A5;" class="d-none text-center" id="bienvenue">
    <img src="<?php if (get_the_post_thumbnail_url()) { echo get_the_post_thumbnail_url(); } ?>" alt="l'orthodontie" style="max-width: 100%; margin: 1.5rem;padding: 1.5rem; width:200px;">
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

$ligne4 = get_field('ligne4');
$bloc4 = $ligne4['bloc4'];
$titre4 = $bloc4['titre'];
$texte4 = $bloc4['texte'];
$photo4 = $ligne4['photo4'];

?>



<div  id="ortho" class="nopacity pb-5">
  
<div class="container-fluid">
  <div class="row pb-5">

    <div class="col-md-6 ligne" >
      <div class="blocblanc">
          <h1><?php echo $titre1; ?></h1>
          <p><?php echo $texte1; ?></p>
      </div>
    </div>

    <div class="col-md-6 text-left ligne">
       <img src="<?php echo $photo1;?>" alt="" class="imagecabinet">
    </div>


    <div class="col-md-6 text-left ligne">
       <img src="<?php echo $photo2;?>" alt="" class="imagecabinet">
    </div>

    <div class="col-md-6 ligne" >
      <div class="blocblanc">
          <h1><?php echo $titre2; ?></h1>
          <p><?php echo $texte2; ?></p>
      </div>
    </div>
    <div class="col-md-6 ligne" >
      <div class="blocblanc">
          <h1><?php echo $titre3; ?></h1>
          <p><?php echo $texte3; ?></p>
      </div>
    </div>
    <div class="col-md-6 text-left ligne">
       <img src="<?php echo $photo3;?>" alt="" class="imagecabinet">
    </div>
        <div class="col-md-6 text-left ligne">
       <img src="<?php echo $photo4;?>" alt="" class="imagecabinet">
    </div>
    <div class="col-md-6 ligne" >
      <div class="blocblanc">
          <h1><?php echo $titre4; ?></h1>
          <p><?php echo $texte4; ?></p>
      </div>
    </div>


</div>
</div>
</div>





<?php
get_sidebar();
get_footer();
