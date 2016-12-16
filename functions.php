<?php

// TAGLINE //
// center the Tagline
add_filter('tc_tagline_class', 'rdc_tagline_class');
function rdc_tagline_class() {
    return 'span12';
}


// START OF Adding a multi-line tagline
add_filter( 'tc_tagline_text', 'my_tagline_text' );
function my_tagline_text($html) {
    $myExtraTaglines = '
<h2 class="inside site-description span12">Ephesians 3:17-19</h2>';
    $html = $html . $myExtraTaglines;
    return $html;
}

