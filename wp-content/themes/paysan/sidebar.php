<div class="col-md-4">
    <div class="panel">
        <h3 class="title-color">Nos actus</h3>
        <ul style="padding: 10px">
            <?php
                $recentPosts = new WP_Query();
                $recentPosts->query('showposts=5');
            ?>
            <?php while ($recentPosts->have_posts()) : $recentPosts->the_post(); ?>
                <li style="list-style-type: none;">
                    <a href="<?php the_permalink() ?>" style="color: grey">
                        <span class="label label-default"><?php the_time('j/m/Y') ?></span>&nbsp;<?php the_title(); ?></span>
                    </a>
                </li>
            <?php endwhile; ?>
        </ul>
    </div>

    <div class="panel">
        <h3 class="title-color">La presse parle de nous</h3>

        <ul style="padding: 10px; list-style-type: none;">
            <li>La montagne : <a target="_blank" href="http://www.lamontagne.fr/brive-la-gaillarde/ruralite/agriculture/2016/09/09/une-trentaine-de-producteurs-se-sont-associes-pour-creer-un-magasin-a-louest-de-brive_12063861.html">lire l'article <span class="glyphicon glyphicon-new-window"></span></a></li>
            <li>L'echo.info : <a target="_blank" href="http://www.l-echo.info/article/brive-gaillarde/2016-05-17/produits-qualite-en-vente-directe-41962.html" >lire l'article <span class="glyphicon glyphicon-new-window"></span></a></li>
        </ul>
    </div>
</div>