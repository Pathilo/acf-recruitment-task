<?php
get_header();

echo '';

echo '
    <article class="page cont mx-auto">
        <h1 class="page__title">'.get_the_title().'</h1>

        '.get_the_content().'
    </article>
';


get_footer();
?>