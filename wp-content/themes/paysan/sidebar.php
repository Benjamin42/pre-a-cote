<div class="col-md-4">
    <div class="panel">
        <h3 class="beauty-green">Nos actus</h3>
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
</div>