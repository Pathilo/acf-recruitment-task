<?php 
get_header(); 

echo '<h1 class="visually_hidden">TestSite</h1>';
foreach([
    "front_page/tiles_section" => null,
    "front_page/cta_section" => null,
    "front_page/opinion_section" => null,
    
] as $part => $args) get_template_part("template-parts/$part", null, $args);

get_footer(); 
?>