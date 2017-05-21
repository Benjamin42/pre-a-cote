<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">
    <link href="<?php echo get_template_directory_uri(); ?>/img/themes/paysan/img/logo-modif.png" rel="icon" />
    <title><?php bloginfo('name') ?><?php if (is_404()) : ?> &raquo; <?php _e('Not Found') ?><?php elseif (is_home()) : ?> &raquo; <?php bloginfo('description') ?><?php else : ?><?php wp_title() ?><?php endif ?></title>

    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>"/>
    <meta name="generator" content="WordPress <?php bloginfo('version'); ?>"/>
    <!-- leave this for stats -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen"/>
    <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>"/>
    <link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>"/>
    <link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>"/>
    <link rel="pingback"
          href="<?php bloginfo('pingback_url'); ?>"/><?php wp_head(); ?>   <?php wp_get_archives('type=monthly&format=link'); ?> <?php //comments_popup_script(); <?php wp_head(); ?>


    <link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/css/commons.css" rel="stylesheet">

    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/navigation.js"></script>
</head>
<body>

<div class="container">

    <!-- Bandeau -->
    <header>
        <div class="row">
            <div>
                <center>
                    <img style="margin-bottom: 10px; margin-top: -20px" width="150px" src="<?php echo get_template_directory_uri(); ?>/img/logo-modif.png"/>
                    <!--
                    <h3 class="beauty" style="margin-top: 20px;">Votre magasin de producteurs&nbsp;<img width="30px"
                                                                              src="<?php echo get_template_directory_uri(); ?>/img/coccinelle.png"/>
                    </h3>
                    -->
                </center>
            </div>

        </div>
    </header>

    <!-- Menu -->
    <nav class="navbar navbar-default beauty" style="font-size: 24px;">
        <div class="container-fluid">
            <?php
            $defaults = array(
                'theme_location' => '',
                'menu' => '',
                'container' => 'div',
                'container_class' => 'collapse navbar-collapse',
                'container_id' => 'myNavbar',
                'menu_class' => 'nav navbar-nav',
                'menu_id' => '',
                'echo' => true,
                'fallback_cb' => 'wp_page_menu',
                'link_before' => '',
                'link_after' => '',
                'depth' => 0,
                'walker' => '',
                'items_wrap'     => '
                    <ul id="%1$s" class="%2$s">%3$s</ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="?page_id=515"><i class="glyphicon glyphicon-envelope" >&nbsp;</i></a></li>
                        <li><a href="https://www.facebook.com/lepredacote/" target="_blank"><img class="icon-facebook"></a></li>
                    </ul>'
            );
            wp_nav_menu($defaults);
            ?>
        </div>
    </nav>

    <script>
        $(document).ready(function() {
            $(".current-menu-item").addClass("active");
        });

        function openModal(att) {
            $("#id-modal-img").attr("src", "");
            $("#id-modal-img").attr("class", att);
            $('#myModal').modal();
        }

        function openModalImg(elem) {
            $("#id-modal-img").attr("class", "");
            $("#id-modal-img").attr("src", elem.attr("src"));
            $('#myModal').modal();
        }
    </script>

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <center>
                        <img id="id-modal-img" style="width:600px;">
                    </center>
                </div>
            </div>
        </div>
    </div>