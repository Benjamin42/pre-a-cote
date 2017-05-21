<?php
    require_once 'functions.php';
?>

<?php get_header(); ?> <!-- ouvrir header,php --> </body> </html>



<?php if (is_front_page()) {
    $colL = "col-md-8";
} else {
    $colL = "col-md-12";
} ?>

<div class="row" xmlns="http://www.w3.org/1999/html">
    <div class="<?php echo $colL; ?>">


            <?php if (have_posts()) : ?>

                <?php while (have_posts()) : the_post(); ?>
                    <div class="post" id="post-<?php the_ID(); ?>">
                        <?php if (!is_front_page()) : ?>
                            <h2 class="title-color">
                                <?php if ( is_page() && is_parent($post,  "produits")) :
                                    echo get_post_categories($post, "") . " ";
                                endif; ?>
                                <?php the_title(); ?>
                            </h2>
                        <?php endif; ?>

                        <?php if ( is_page() && is_parent($post,  "producteurs")) : ?>
                            <!-- Partie gauche : le contenu -->
                            <div class="col-md-8">
                                <div class="panel">
                                    <?php the_content("read more", true); ?>
                                </div>
                            </div>

                            <!-- Partie droite : la carte et les coordonnées -->
                            <div class="col-md-4">
                                <div class="panel">

                                    <?php echo get_post_categories($post) . " <b>Produits</b> : " . get_post_produits($post, true) . "</br>"; ?>

                                    <h3 class="title-color">Infos pratiques</h3>

                                    <h4><i class="glyphicon glyphicon-pencil">&nbsp;</i>Plus d'infos</h4>
                                    <?php if (get_post_meta($post->ID, 'email', true) != "") : ?>
                                        <p>Par mail : <a href="mailto:<?php echo get_post_meta(184, 'email', true); ?>" ><?php echo get_post_meta($post->ID, 'email', true); ?></a></p>
                                    <?php endif; ?>
                                    <?php if (get_post_meta($post->ID, 'telephone', true) != "") : ?>
                                        <p>Par téléphone : <?php echo get_post_meta(184, 'telephone', true); ?></p>
                                    <?php endif; ?>
                                    <?php if (get_post_meta($post->ID, 'website', true) != "") : ?>
                                        <p>Site web : <a target="_blank" href="<?php echo get_post_meta(184, 'website', true); ?>"><?php echo get_post_meta($post->ID, 'website', true); ?></a></p>
                                    <?php endif; ?>

                                    <h4><i class="glyphicon glyphicon-home">&nbsp;</i>Adresse</h4>
                                    <?php $fullAddress = get_post_meta($post->ID, 'adresse_rue', true) . " " . get_post_meta($post->ID, 'adresse_codepostal', true) . " " . get_post_meta($post->ID, 'adresse_ville', true); ?>

                                    <p><?php echo $fullAddress; ?></p>

                                    <div id="map-canvas" style="height: 300px; width: 300px;" class="map"></div>
                                    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDIt0UOzmMBSaklD-XUtSqATQKaRp4HF5E&#038;callback=MapApiLoaded">
                                    </script>

                                    <script type="text/javascript">
                                        function MapApiLoaded() {
                                            createMap("<?php echo $fullAddress; ?>", 14).then(function (map) {
                                                google.maps.event.addListenerOnce(map, 'idle', function () {
                                                    var adresse = "<?php echo $fullAddress; ?>";
                                                    var title = "Le magasin";
                                                    var text = "";
                                                    addMarker(map, adresse, title, text);
                                                });
                                            });
                                        }
                                    </script>
                                </div>
                            </div>

                        <?php else : ?>
                            <!-- else : le contenu en 1 seules partie -->
                            <div class="panel">
                                <?php the_content("read more", true); ?>
                            </div>
                        <?php endif; ?>

                    </div>
                <?php endwhile; ?>

            <?php endif; ?>

    </div>

    <?php if (is_front_page()) {
        get_sidebar();
    } ?>


</div>


<?php get_footer(); ?> <!-- ouvrir header,php --> </body> </html>


</div>

</body>