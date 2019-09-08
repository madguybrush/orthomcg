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
    <img src="<?php if (get_the_post_thumbnail_url()) { echo get_the_post_thumbnail_url(); } ?>" alt="<?php the_title(); ?>" style="max-width: 100%; margin: 1.5rem;padding: 1.5rem; width:200px;">
</div>


<div id="conseils" class="container-fluid nopacity">

<div class="carte row mb-5">
  <div class="col-12 bleu text-center">
<?php echo get_post_field('post_content'); ?>
</div>
</div> 

</div>

<?php
get_sidebar();
get_footer();
