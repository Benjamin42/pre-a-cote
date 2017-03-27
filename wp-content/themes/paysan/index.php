<?php get_header(); ?> <!-- ouvrir header,php --> </body> </html>

<?php if (is_front_page()) {
    $colL = "col-md-8";
} else {
    $colL = "col-md-12";
} ?>

<div class="row" xmlns="http://www.w3.org/1999/html">
    <div class="<?php echo $colL; ?>">

        <div class="panel">
            <?php if (have_posts()) : ?>

                <?php while (have_posts()) : the_post(); ?>
                    <div class="post" id="post-<?php the_ID(); ?>">
                        <?php if (!is_page()) : ?>
                            <h2 class="beauty-green"><?php the_title(); ?></h2>
                        <?php endif; ?>

                        <div class="post_content"> <?php the_content("read more", true); ?> </div>

                        <p class="postmetadata">
                            Dernière mise à jour le <?php the_time('j F Y') ?> par <?php the_author() ?>
                            <?php edit_post_link('Editer', ' &#124; ', ''); ?>
                        </p>

                    </div>
                <?php endwhile; ?>

            <?php endif; ?>
        </div>
    </div>
    
    <?php if (is_front_page()) {
        get_sidebar();
    } ?>


</div>

</div>

</body>