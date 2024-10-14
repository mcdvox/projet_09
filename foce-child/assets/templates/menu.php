<!-- Création du menu et des ses éléments -->
<!-- <div id="menu_burger" class="nav_burger"> -->
  <!-- Bouton icône fermeture du menu burger -->
  <!-- <a id="closeMenu" href="#">
    <span></span>
    <span></span>
  </a> -->
  <!-- Eléments du menu burger -->
  <!-- <ul class="burger">
    <img class="logo_menu" src="<?php //echo get_stylesheet_directory_uri() . '/assets/images/logo_menu.png'; ?> " alt="Logo site">
    <img class="orchid_menu" src="<?php //echo get_stylesheet_directory_uri() . '/assets/images/orchid.png'; ?> " alt="Orchidée violette">
    <img class="kawaneko_menu" src="<?php //echo get_stylesheet_directory_uri() . '/assets/images/kawaneko.png'; ?> " alt="Chat bleu">
    <img class="marguerite_menu" src="<?php //echo get_stylesheet_directory_uri() . '/assets/images/Sunflower_menu.png'; ?> " alt="Fleur blanche">
    <img class="random_flower_menu" src="<?php //echo get_stylesheet_directory_uri() . '/assets/images/random_flower_menu.png'; ?> " alt="Orchidée violette 2">
        <li><a class="link_menu" href="#story">Histoire</a></li>
        <li><a class="link_menu" href="#characters">Personnages</a></li>
        <li><a class="link_menu" href="#place">Lieu</a></li>
        <li><a class="link_menu" href="#studio">Studio Koukaki</a></li>
    <img class="flower_menu" src="<?php //echo get_stylesheet_directory_uri() . '/assets/images/flower_menu.png'; ?> " alt="Fleurs oranges">
    <img class="jaakuna_menu" src="<?php //echo get_stylesheet_directory_uri() . '/assets/images/jaakuna.png'; ?> " alt="Chat noire">
    <img class="orenjiiro_menu" src="<?php //echo get_stylesheet_directory_uri() . '/assets/images/orenjiiro.png'; ?> " alt="Chat orange">
    <img class="hibiscus" src="<?php //echo get_stylesheet_directory_uri() . '/assets/images/hibiscus_footer.png'; ?> " alt="image d'une fleur hibiscus">
        <li><a href="#" style="font-size: 15px;">STUDIO KOUKAKI </a></li>
  </ul>        
</div> -->

<!-- Bouton icône ouverture du menu burger -->
<!-- <a href="#" id="openMenu">
  <span class="burger-icon">
    <span></span>
    <span></span>
    <span></span>
  </span>
</a> -->

<!-- Bouton menu burger -->
<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
    <div class="line firstLine"></div>
    <div class="line secondLine"></div>
    <div class="line thirdLine"></div>
</button>
<!-- Titre du site -->
<li class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></li>
<!-- Menu de Navigation -->
<ul class="openNav navbarLinks">
    <img class="navbar_logo"src="<?php echo get_stylesheet_directory_uri() . '/assets/images/logo_menu.png'; ?> " alt="Logo site">
    <img class="orchid_menu" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/orchid.png'; ?> " alt="Orchidée violette">
    <img class="kawaneko_menu" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/kawaneko.png'; ?> " alt="Chat bleu">
    <img class="marguerite_menu" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/Sunflower_menu.png'; ?> " alt="Fleur blanche">
    <img class="random_flower_menu" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/random_flower_menu.png'; ?> " alt="Orchidée violette 2">
    <li class="navStory"><a href="#story">Histoire</a></li>
    <li class="navCharacters"><a href="#characters">Personnages</a></li>
    <li class="navPlace"><a href="#place">Lieu</a></li>
    <li class="navStudio"><a href="#studio">Studio Koukaki</a></li>
    <img class="flower_menu" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/flower_menu.png'; ?> " alt="Fleurs oranges">
    <img class="jaakuna_menu" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/jaakuna.png'; ?> " alt="Chat noire">
    <img class="orenjiiro_menu" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/orenjiiro.png'; ?> " alt="Chat orange">
    <img class="hibiscus" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/hibiscus_footer.png'; ?> " alt="image d'une fleur hibiscus">
    <li><a href="#" style="font-size: 15px;">STUDIO KOUKAKI </a></li>
</ul>