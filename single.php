<?php
  $post = $wp_query->post;
  if (in_category('3')) {
      include(get_template_directory().'/single-recipes.php');
  } else {
      include(get_template_directory().'/single-default.php');
  } 
?>
