<?php

$opinion = get_field('opinion_section');
$opinion_header = $opinion['section_header'];
$first_opinion = $opinion['opinions']['first_opinion'];
  $first_opinion_text = $first_opinion['opinion_text'];
  $first_opinion_name = $first_opinion['name_surname'];
  $first_opinion_position = $first_opinion['position'];
$second_opinion = $opinion['opinions']['second_opinion'];
  $second_opinion_text = $second_opinion['opinion_text'];
  $second_opinion_name = $second_opinion['name_surname'];
  $second_opinion_position = $second_opinion['position'];
$third_opinion = $opinion['opinions']['third_opinion'];
  $third_opinion_text = $third_opinion['opinion_text'];
  $third_opinion_name = $third_opinion['name_surname'];
  $third_opinion_position = $third_opinion['position'];
$detail_block_header = $opinion['details_block']['header'];
$detail_block_describe = $opinion['details_block']['short_description'];
$detail_block_sec_btn = $opinion['details_block']['secondary_button'];
$detail_block_prim_btn = $opinion['details_block']['primary_button'];



?>

<section class="opinion_section">
    <div class="opinion_section__inner cont mx-auto">
      <div class="opinion_section__header">
          <h3 class="font-size-title m-0"><?php echo $opinion_header; ?></h3>
      </div>
      <div class="opinion_section__opinion_box grid">
          <div id="splide" class="relative">
            <div class="splide__track">
              <ul class="splide__list">
                <div class="splide__slide">
                  <p>
                      <?php echo $first_opinion_text; ?>
                  </p>
                  <p>
                      <?php echo $first_opinion_name; ?>
                  </p>
                  <p>
                      <?php echo $first_opinion_position; ?>
                  </p>
                </div>
                <div class="splide__slide">
                <p>
                      <?php echo $second_opinion_text; ?>
                  </p>
                  <p>
                      <?php echo $second_opinion_name; ?>
                  </p>
                  <p>
                      <?php echo $second_opinion_position; ?>
                  </p>
                </div>
                <div class="splide__slide">
                <p>
                      <?php echo $third_opinion_text; ?>
                  </p>
                  <p>
                      <?php echo $third_opinion_name; ?>
                  </p>
                  <p>
                      <?php echo $third_opinion_position; ?>
                  </p>
                </div>
              </ul>
            </div>
          </div>
          <div class="describe grid">
            <h3 class="font-size-title color-white m-0">
              <?php echo $detail_block_header; ?>
            </h3>
            <p class="color-white font-size-medium m-0"><?php echo $detail_block_describe; ?></p>
              
          
            <div class="buttons_inner flex">
              <a class="secondary_btn" href="<?php echo esc_url( $detail_block_sec_btn['url'] ); ?>"><?php echo esc_html( $detail_block_sec_btn['title'] ); ?></a>
              <a class="primary_btn" href="<?php echo esc_url( $detail_block_prim_btn['url'] ); ?>" ><?php echo esc_html( $detail_block_prim_btn['title'] ); ?></a>
            </div>
            
          </div>
      </div>
    

    </div>
</section>

<script>
  document.addEventListener( 'DOMContentLoaded', function () {
    new Splide( '#splide', {
      type: 'loop',
      perPage: 1,
      focus: 'center',
      autoplay: true,
      speed: 400,
      arrows: false,
    }).mount();
  });
</script>