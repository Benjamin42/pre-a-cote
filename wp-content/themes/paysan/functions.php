<?php

//remove_filter( 'the_content', 'wpautop' );
//remove_filter( 'the_excerpt', 'wpautop' );

add_action( 'widgets_init', 'my_register_sidebars' );
function my_register_sidebars() {
    /* Register the 'primary' sidebar. */
    register_sidebar(
        array(
            'id'            => 'primary',
            'name'          => __( 'Primary Sidebar' ),
            'description'   => __( 'A short description of the sidebar of me.' ),
        )
    );
    /* Repeat register_sidebar() code for additional sidebars. */
}

function get_post_categories($post, $size="-30") {
    $cat = get_post_meta($post->ID, 'categorie', true);
    $split = explode(",", $cat);
    $icons = "";
    for ($i = 0; $i < sizeof($split); $i++) {
        $icons .= "<div class=\"icon" . $size . " icon-" . $split[$i] . "\" ></div>";
    }
    return $icons;
}

function get_post_produits($post, $escape=false) {
    $value = get_post_meta($post->ID, 'produits', true);
    if ($escape) {
        $value = str_replace("'", "\\'", $value);
    }
    return $value;
}

function get_post_full_adresse($post) {
    $value = get_post_meta($post->ID, 'adresse_rue', true) . " " . get_post_meta($post->ID, 'adresse_codepostal', true) . " " . get_post_meta($post->ID, 'adresse_ville', true);
    $value = str_replace("'", "\\'", $value);
    return $value;
}

function get_post_title_linked($post, $escape=false) {
    $title = get_post_title($post, $escape);

    $value = get_post_link($post, $title);
    if ($value == "") {
        $value = $title;
    }
    return $value;
}

function get_post_link($post, $text) {
    $value = "";
    if ($post->post_content != "") {
        $value = "<a href=\"./?page_id=" . $post->ID . "\">" . $text . "</a>";
    }
    return $value;
}

function get_post_title($post, $escape=false) {
    if ($escape) {
        return str_replace("'", "\\'", $post->post_title);
    } else {
        return $post->post_title;
    }
}

function is_parent($post, $parent_title) {
    return $post->post_parent > 0 && get_post( $post->post_parent )->post_name == $parent_title;
}

?>
