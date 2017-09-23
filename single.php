<?php
$post = $wp_query->post;

if (in_category('4')) {
    include(TEMPLATEPATH . '/single_alojamientos.php');
} else {
    include(TEMPLATEPATH . '/single_default.php');
}


?>

