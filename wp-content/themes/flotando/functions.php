<?php

function translate_date($date)
{
    $eng = [
        'January', 'February', 'March', 'April', 'May', 'June',
        'July', 'August', 'September', 'October', 'November', 'December'
    ];
    $spa = [
        'Enero', 'febrero', 'Marzo', 'Abril', 'Mayo', 'junio',
        'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'
    ];
    return str_replace($eng, $spa, $date);
}

function the_chilean_time()
{
    ob_start();
    the_time('d \d\e F \d\e Y');
    $time = ob_get_clean();
    return translate_date($time);
}

include_once 'inc/constants.php';

// NAV MENU
require_once 'inc/wp_bootstrap_navwalker.php';
register_nav_menus( array(
    'primary' => __( 'Header Menu', 'main' ),
) );

/**
 * Generates a single header tag.
 *
 * @param string $type Tag type. 'css' for a link tag and 'js' for a script tag.
 * @param string $url Location of the resource.
 */
function rimy_header_tag ( $type, $url ) {
    if ( $type == 'css' ) {
        echo str_replace ('%URL%', $url, PATTERN_STYLE );
    } elseif ( $type == 'js' ) {
        echo str_replace( '%URL%', $url, PATTERN_SCRIPT );
    }
    echo "\n";
}


/**
 * Creates a set of import headers. It receives any amount of parameters, but only checks for 'jquery', 'bootstrap'
 * and 'fontawesome'.
 */
function rimy_load_lib () {
    $libs = func_get_args();

    if ( in_array( 'jquery', $libs ) || in_array( 'bootstrap', $libs ) ) {
        rimy_header_tag( 'js', ASSETS_LIB_URL . 'js/jquery-1.12.1.min.js' );
    }
    if ( in_array( 'bootstrap', $libs ) ) {
        rimy_header_tag( 'js', ASSETS_LIB_URL . 'js/bootstrap.min.js' );
        rimy_header_tag( 'css', ASSETS_LIB_URL . 'css/bootstrap.min.css' );
    }
    if ( in_array( 'fontawesome', $libs ) ) {
        rimy_header_tag( 'css', ASSETS_LIB_URL . 'css/font-awesome.css' );
    }
    if ( in_array( 'scrollto', $libs ) ) {
        rimy_header_tag( 'js', ASSETS_LIB_URL . 'js/jquery.scrollTo.min.js' );
    }

}


/**
 * Creates the breadcrumb
 */
function the_breadcrumb () {
    if (!is_home()) {
        echo '<div class="container-fluid breadcrumb-row"><ol class="breadcrumb container">';
        echo '<li><a href="' . home_url() . '">';
        bloginfo('name');
        echo '</a></li>';
        if (is_category() || is_single()) {
            echo '<li><a href="#">Blog</a></li>';
            if (is_single()) {
                echo '<li class="active">';
                the_title();
                echo '</li>';
            }
        } elseif (is_page()) {
            echo '<li class="active">';
            echo the_title();
            echo '</li>';
        }
        echo '</ol></div>';
    }
}