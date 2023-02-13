<?php 
$cta_section = get_field("cta_section");
$cta_section_title = $cta_section['section_title'];
$cta_section_describe = $cta_section['section_describe'];
$cta_section_primary_btn = $cta_section['primary_button'];
$cta_section_secondary_btn = $cta_section['secondary_button'];
$cta_section_bg_color = $cta_section['background_color_section'];
?>

<section class="cta_section" style="background-color:<?php echo $cta_section_bg_color; ?>">
    <div class="cta_section__inner cont mx-auto color-white grid">
        <h3>
            <?php echo $cta_section_title; ?>
        </h3>
        
        <?php echo $cta_section_describe; ?>
        
        <div class="cta_section__buttons flex">
            <a class="secondary_btn" href="<?php echo esc_url( $cta_section_secondary_btn['url'] ); ?>"><?php echo esc_html( $cta_section_secondary_btn['title'] ); ?></a>
            <a class="primary_btn" href="<?php echo esc_url( $cta_section_primary_btn['url'] ); ?>"><?php echo esc_html( $cta_section_primary_btn['title'] ); ?></a>
        </div>
    </div>
</section>