<?php 
$footer = get_field('footer');
    $first_row = $footer['first_row'];
        $logo = $first_row['logo'];
        $text_under_logo = $first_row['text_under_logo'];
        $data_contact = $first_row['contact_data'];
        $mail_button = $first_row['mail_button'];
        $contact_button = $first_row['contact_button'];
    $second_row = $footer['social_media_row'];
        $facebook_link = $second_row['facebook']['facebook_link'];
        $facebook_icon = $second_row['facebook']['facebook_icon'];

        $instagram_link = $second_row['instagram']['ig_link'];
        $instagram_icon = $second_row['instagram']['ig_icon'];

        $linkedin_link = $second_row['linkedin']['linkedin_link'];
        $linkedin_icon = $second_row['linkedin']['linkedin_icon'];

        $twitter_link = $second_row['twitter']['twitter_link'];
        $twitter_icon = $second_row['twitter']['twitter_icon'];
?>


<footer class="footer">
    <div class="footer_inner cont mx-auto grid">
        <div class="footer_columns grid">
            <div class="logo_describe_column">
                <div class="footer_logo">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                        <?php
                        if ( function_exists( 'the_custom_logo' ) ) {
                            the_custom_logo();
                        }
                        ?>
                    </a>
                </div>
                <div class="footer_describe">
                    <p class="font-size-regular"><?php echo $text_under_logo; ?></p> 
                </div>
            </div>
            <div class="quick_links_column">
                <div class="quick_links_header">
                    <h3 class="font-weight-medium">
                        <?= __('Quick links') ?>
                    </h3>
                </div>
                <div class="quick_links_menu">
                    <?php 
                        wp_nav_menu( 
                            array( 
                                'theme_location' => 'primary_footer', 
                                'container' => false, 
                                'menu_class' => 'nav-menu' 
                            ) 
                        ); 
                    ?>
                </div>
            </div>
            <div class="contact_column">
                <div class="contact_header">
                    <h3 class="font-weight-medium"><?= __('Contact us') ?></h3>
                </div>
                <div class="contact_details">
                    <?php echo $data_contact; ?>
                </div>
                <div class="contact_buttons flex">
                    <a class="footer_btn" href="<?php echo esc_url( $mail_button['url'] ); ?>"><img src="wp-content\themes\wlasnymotyw\files\assets\images\mail.png"><?php echo esc_html( $mail_button['title'] ); ?></a>
                    <a class="footer_btn" href="<?php echo esc_url( $contact_button['url'] ); ?>"><img src="wp-content\themes\wlasnymotyw\files\assets\images\call.png"><?php echo esc_html( $contact_button['title'] ); ?></a>
                </div>
            </div>
        </div>
        <div class="footer_social_media flex">
            <div class="social_media_box flex">
                <a href="<?php echo esc_url( $facebook_link['url'] ); ?>"><img src="<?php echo esc_url($facebook_icon['url']); ?>" alt="<?php echo esc_attr($facebook_icon['alt']); ?>" /></a>
                <a href="<?php echo esc_url( $instagram_link['url'] ); ?>"><img src="<?php echo esc_url($instagram_icon['url']); ?>" alt="<?php echo esc_attr($instagram_icon['alt']); ?>" /></a>
                <a href="<?php echo esc_url( $linkedin_link['url'] ); ?>"><img src="<?php echo esc_url($linkedin_icon['url']); ?>" alt="<?php echo esc_attr($linkedin_icon['alt']); ?>" /></a>
                <a href="<?php echo esc_url( $twitter_link['url'] ); ?>"><img src="<?php echo esc_url($twitter_icon['url']); ?>" alt="<?php echo esc_attr($twitter_icon['alt']); ?>" /></a>
            </div>
        </div>
        <div class="footer_creator flex">
            <p class="m-0"><?= __('© 2023 Blue Owl. All rights reserved') ?></p> 
        </div>
    </div>
</footer>