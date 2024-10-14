<!-- Restructuration de la partie Personnages -->
<?php
$args = array(
    'post_type' => 'characters',
    'posts_per_page' => -1,
    'meta_key' => '_main_char_field',
    'orderby' => 'meta_value_num',
);
$characters_query = new WP_Query($args);
?>
<article id="characters">
    <div class="main-character">
        <h3 class="slidingTitle"><span>Les </span><span>personnages</span></h3>
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <?php
                // On parcourt tous les articles récupérés par la requête
                while ( $characters_query->have_posts() ) { 
                    $characters_query->the_post();
                    // On crée un conteneur pour chaque slide du carrousel
                    echo '<div class="swiper-slide">';
                    echo '<figure>';
                    // On affiche la vignette de l'article actuel en taille complète
                    echo get_the_post_thumbnail( get_the_ID(), 'full' );
                    // On affiche le titre de l'article en tant que légende de l'image.
                    echo '<figcaption>';
                    the_title();
                    echo'</figcaption>';
                    echo '</figure>';
                    echo '</div>';
                };
                ?>
            </div>
        </div>
</article>
