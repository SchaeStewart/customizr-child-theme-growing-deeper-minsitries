<?php
/* Write your awesome functions below */
function themify_custom_enqueue_child_theme_styles()
{
    wp_enqueue_style('parent-theme-css', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('child-style', get_stylesheet_uri(), array('theme-style'));
}

add_action('wp_enqueue_scripts', 'themify_custom_enqueue_child_theme_styles', 11);
add_filter('tc_navbar_wrapper_class', 'rdc_navbar_wrapper_class');
function rdc_navbar_wrapper_class()
{
    return array('navbar-wrapper', 'clearfix', 'span12');
}


//we add the action with priority set to 5 => it will be displayed in first position (before the slider if any)
add_action('__after_header', 'scs_add_content_after_header', 20);
function scs_add_content_after_header() {

    if (is_front_page() == TRUE) {
        ?>
        <div id="headerImgWrapper">
            <img id="headerImg"
                 src="http://www.growingdeeperministries.org/wp-content/uploads/2016/09/tree-roots-and-girl-smaller.png"
                 width="90%">
        </div>
<!--        <style>-->
<!--            #headerImgWrapper {-->
<!--                width: 90%;-->
<!--                height: auto;-->
<!--                margin: auto;-->
<!--            }-->
<!---->
<!--            #headerImg {-->
<!--                display: block;-->
<!--                margin: auto;-->
<!--                width: 60%;-->
<!--            }-->
<!--        </style>-->
        <?php
    }
?>
<?php
}