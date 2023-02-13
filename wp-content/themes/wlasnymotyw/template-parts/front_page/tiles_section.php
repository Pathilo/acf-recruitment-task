<?php
$tiles_section = get_field("tiles_section");
    $first_tile = $tiles_section["first_tile"];
        $first_tile_background = $first_tile["tile_background"];
        $first_tile_link = $first_tile["details_link"];
        $first_tile_title = $first_tile["tile_title"];
    $second_tile = $tiles_section["second_tile"];
        $second_tile_background = $second_tile["tile_background"];
        $second_tile_link = $second_tile["details_link"];
        $second_tile_title = $second_tile["tile_title"];
    $third_tile = $tiles_section["third_tile"];
        $third_tile_background = $third_tile["tile_background"];
        $third_tile_link = $third_tile["details_link"];
        $third_tile_title = $third_tile["tile_title"];
    $fourth_tile = $tiles_section["fourth_tile"];
        $fourth_tile_background = $fourth_tile["tile_background"];
        $fourth_tile_link = $fourth_tile["details_link"];
        $fourth_tile_title = $fourth_tile["tile_title"];
    $fifth_tile = $tiles_section["fifth_tile"];
        $fifth_tile_background = $fifth_tile["tile_background"];
        $fifth_tile_link = $fifth_tile["details_link"];
        $fifth_tile_title = $fifth_tile["tile_title"];
    $sixth_tile = $tiles_section["sixth_tile"];
        $sixth_tile_background = $sixth_tile["tile_background"];
        $sixth_tile_link = $sixth_tile["details_link"];
        $sixth_tile_title = $sixth_tile["tile_title"];
    

?>
<section class="tiles_section__container">
    <div class="tiles_section__inner grid color-white">

    <div id="splide2" class="relative">
            <div class="splide__track">
              <ul class="splide__list">

        <a href="<?php echo esc_url( $first_tile_link['url'] ); ?>" class="splide__slide tiles_section">
            <div class="single_tile_box relative" style="background-image: url('<?= $first_tile_background['url'] ?>')">
                <h3 class="single_tile_title relative"><?php echo $first_tile_title; ?></h3>
            </div>
        </a>
        <a href="<?php echo esc_url( $second_tile_link['url'] ); ?>" class="splide__slide tiles_section">
            <div class="single_tile_box relative" style="background-image: url('<?= $second_tile_background['url'] ?>')">
                <h3 class="single_tile_title relative"><?php echo $second_tile_title; ?></h3>
            </div>
        </a>
        <a href="<?php echo esc_url( $third_tile_link['url'] ); ?>" class="splide__slide tiles_section">
            <div class="single_tile_box relative" style="background-image: url('<?= $third_tile_background['url'] ?>')">
                <h3 class="single_tile_title relative"><?php echo $third_tile_title; ?></h3>           
            </div>
        </a>
        <a href="<?php echo esc_url( $third_tile_link['url'] ); ?>" class="splide__slide tiles_section">
            <div class="single_tile_box relative" style="background-image: url('<?= $fourth_tile_background['url'] ?>')">
                <h3 class="single_tile_title relative"><?php echo $fourth_tile_title; ?></h3>
            </div>
        </a>
        <a href="<?php echo esc_url( $third_tile_link['url'] ); ?>" class="splide__slide tiles_section">
            <div class="single_tile_box relative" style="background-image: url('<?= $fifth_tile_background['url'] ?>')">
                <h3 class="single_tile_title relative"><?php echo $fifth_tile_title; ?></h3>
            </div>
        </a>
        <a href="<?php echo esc_url( $third_tile_link['url'] ); ?>" class="splide__slide tiles_section">
            <div class="single_tile_box relative" style="background-image: url('<?= $sixth_tile_background['url'] ?>')">
                <h3 class="single_tile_title relative"><?php echo $sixth_tile_title; ?></h3>
            </div>
        </a>

              </ul>
            </div>
    </div>

    </div>
</section>
<script>
document.addEventListener( 'DOMContentLoaded', function () {
  var slider = new Splide( '#splide2', {
    type: 'loop',
    perPage: 1,
    focus: 'center',
    autoplay: true,
    speed: 400,
    arrows: false,
  });

  var checkWidth = function() {
    if (window.innerWidth < 992) {
      slider.mount();
    } else {
      slider.destroy();
    }
  };

  window.addEventListener('resize', checkWidth);
  checkWidth();
});
</script>
