<?php
/**
 * The template for displaying front page.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package understrap
 */

/*if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}*/

get_header();

?>



<div  id="hp" class="container-fluid d-none">
  


<?php

// check if the repeater field has rows of data
if( have_rows('images_accueil') ):

?>

  <div class="row">

<?php
 	// loop through the rows of data
    while ( have_rows('images_accueil') ) : the_row();

        // display a sub field value
        //the_sub_field('images_accueil');
        $image = get_sub_field('images');

        ?>
<div class="col-sm-6 text-right">
<img src="<?php echo $image;?>" alt="dentiste latresne">
</div>

 <?php

    endwhile;

?>

  </div>

<?php

//else :

    // no rows found



endif;

?>



</div>

<?php get_footer(); ?>