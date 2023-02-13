<?php 

$header = get_field('header');
$header_button = $header['menu_button'];

?>

<header id="header">
    <div class="header cont mx-auto grid">
        <div class="header_logo_menu flex">
            <div class="header_logo">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                    <?php
                    if ( function_exists( 'the_custom_logo' ) ) {
                        the_custom_logo();
                    }
                    ?>
                </a>
            </div>
            <div class="header_menu">
            <?php 
                wp_nav_menu( 
                    array( 
                        'theme_location' => 'primary_menu', 
                        'container' => true, 
                        'menu_class' => 'nav-menu-header' 
                    ) 
                ); 
            ?>
            
            </div>
        </div>
        <div class="header_button_search flex">
            <div class="header_button flex">
                <a class="menu_header_button flex" href="<?php echo esc_url( $header_button['url'] ); ?>"><?php echo esc_html( $header_button['title'] ); ?></a>
            </div>
            <div class="header_search flex">
                <form class="flex" action="search.php" method="get">
                    <input type="text" name="query" placeholder="Search">
                    <button class="search_button" type="submit">
                        <img src="wp-content\themes\wlasnymotyw\files\assets\images\search.png">
                    </button>
                </form>
            </div>
        </div>
    
        
    </div>
</header>



