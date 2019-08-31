<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package orthoLatresne
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<!--<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">-->

	

	<meta charset="utf-8">
  <!--<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php wp_head(); ?>
  <title>Orthodontie Lastresne</title>


</head>

<body <?php body_class(); ?>>
<!--<div id="page" class="site">-->
	<!--<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'ortholatresne' ); ?></a>-->




<div class="container-loader">
	<div class="aucentre text-center">
		<span class="loader align-middle"></span>
	</div>
</div>


<header class="d-none fixed-top <?php if (  is_front_page() ) { echo " hp"; }?>" id="top"> <!--  sticky-top-->

  <div class="container-fluid">
    <div class="row">
      <div class="<?php if (  is_front_page() ) { echo " col-md-4"; }?> col-6">
       <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php bloginfo('stylesheet_directory');?>/img/logo<?php if (  is_front_page() ) { echo "-hp"; }?>.png" alt="Orhodontie Latresne"></a>
     </div>
     <div class="col-6 <?php if (  is_front_page() ) { echo "offset-md-2"; }?> docteurs">
       D<sup>r</sup> BAZERT Cédric<br>
       D<sup>r</sup> DUMÉ Bénédicte
     </div>
  </div>
</div>



<?php     if (  is_front_page() ) { ?>
</header>

<div style="text-align: center; margin-top: 114px; margin-bottom: 15px;" class="d-none animated fadeInDown" id="bienvenue">


    <div class="container-fluid">
    <div class="row">
      <div class="col-8 offset-2">

    <img src="<?php bloginfo('stylesheet_directory');?>/img/bienvenue.png" alt="bienvenue" class="bienvenue">


         </div>
  </div>
</div>


		
</div>
<?php } ?>


<nav class="navbar d-none" >


  <div class="navbar-collapse" id="navbarSupportedContent"> 

		<?php
		wp_nav_menu( array(
			'theme_location' => 'menu-1',
			'menu_id'        => 'primary-menu',
			'container'      => false,
			'depth'          => 2,
			'menu_class'     => 'navbar-nav', //  ml-auto
			'walker'         => new Bootstrap_NavWalker(),
			'fallback_cb'    => 'Bootstrap_NavWalker::fallback',
		) );
		?>
	
<!--

    <ul class="navbar-nav"> 


      <li class="nav-item">
        <a class="nav-link" href="cabinet.html">
        	<img src="<?php bloginfo('stylesheet_directory');?>/img/menu_cabinet.png" alt="Le cabinet" ><span class="texte-menu"><br>Le cabinet</span>
    	</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="conseils.html">
        	<img src="<?php bloginfo('stylesheet_directory');?>/img/menu_conseils.png" alt="Les conseils"><span class="texte-menu"><br>Les conseils</span>
    	</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="ortho.html">
        	<img src="<?php bloginfo('stylesheet_directory');?>/img/menu_ortho.png" alt="L'orthodontie adulte"><span class="texte-menu"><br>L'orthodontie</span>
    	</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.html">
        	<img src="<?php bloginfo('stylesheet_directory');?>/img/menu_contact.png" alt="Contact" ><span class="texte-menu"><br>Contact</span>
    	</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="urgence.html">
        	<img src="<?php bloginfo('stylesheet_directory');?>/img/menu_urgence.png" alt="En cas d'urgence"><span class="texte-menu"><br>En cas d'urgence</span>
        </a>
      </li>   
      <li class="nav-item">
        <a class="nav-link" href="acces.html">
        	<img src="<?php bloginfo('stylesheet_directory');?>/img/menu_patient.png" alt="Accès patient" ><span class="texte-menu"><br>Accès patient</span>
        </a>
      </li>         


    </ul>

-->

  </div>
</nav>



<?php     if (  !is_front_page() ) { ?>
</header>
<?php } ?>




	<!--<div id="content" class="site-content">-->
