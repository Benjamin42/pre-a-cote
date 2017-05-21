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
        <?php
            $page = get_post(224);
        ?>

        <h3 class="title-color"><?php echo $page->post_title; ?></h3>

        <?php echo $page->post_content; ?>
    </div>
</div>