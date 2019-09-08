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
    <img src="<?php if (get_the_post_thumbnail_url()) { echo get_the_post_thumbnail_url(); } ?>" alt="contact" style="max-width: 100%; margin: 1.5rem;padding: 1.5rem; width:200px;">
</div>

<?php
$ligne1 = get_field('ligne1');
$bloc1 = $ligne1['bloc1'];
$adresse = $bloc1['adresse'];
$photo1 = $ligne1['photo1'];

$ligne2 = get_field('ligne2');
$bloc2 = $ligne2['bloc2'];
$titre2 = $bloc2['titre'];
$adresse2 = $bloc2['adresse'];
$tel = $bloc2['telephone'];
$email = $bloc2['email'];
$horaires = $bloc2['horaires'];
$photo2 = $ligne2['photo2'];


?>

<div  id="contact" class="container-fluid nopacity">
  
  <div class="row mb-5">

    <div class="col-md-6 text-left ligne">
      <div class="blocmaps">
       <iframe width="100%"  frameborder="0" style="border:0"
  src="https://www.google.com/maps/embed/v1/place?key=AIzaSyDbi99T2VrVbt7msoAHT2zwTgxbjdVZ3yI
    &q=<?php echo $adresse; ?>" allowfullscreen>
</iframe>
</div>
    </div>


    <div class="col-md-6 text-left ligne">
       <img src="<?php echo $photo1; ?>" alt="" class="imagecabinet">
    </div>

    <div class="col-md-6 text-right ligne">
      <img src="<?php echo $photo2; ?>" alt="" class="imagecabinet">
    </div>

      <div class="col-md-6 ligne" >
      <div class="blocrouge">
          <h1><?php echo $titre2; ?></h1>
          <p style="text-align:center;"><?php echo $adresse2 . "<br />" . $tel . "<br />" . $email; ?></p>
          <br />
          <p><?php echo $horaires; ?></p>
      </div>
    </div>

   


    <div class="col-12 ligne">
       <div class="blocbleu2">
          <h1>Nous contacter</h1>

<?php echo do_shortcode(get_post_field('post_content')); ?>


</div>
    </div>


</div>



</div>






<?php
get_sidebar();
get_footer();
