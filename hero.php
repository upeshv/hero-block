<?php
/**
 * Hero Module
 * @author Upesh
 */

// Enable Hero Module
$enable__hero_module = get_field( 'enable_hero_module' );

// Hero Title
$hero__title = get_field( 'hero_title' );

// Hero Text
$hero__text = get_field( 'hero_text' );

// Hero Background Image
$hero__bg = get_field( 'hero_background_image' ); // Hero Background Image Array 
$hero__bg_url = esc_url($hero__bg['url']); // Image url from bg image array

// Hero Foreground Image
$hero__fg = get_field( 'hero_foreground_image' ); // Hero Foreground Image Array 
$hero__fg_alt = esc_attr($hero__fg['alt']); // Image Alt from fg image array
$hero__fg_url = esc_url($hero__fg['url']); // Image url from fg image array

?>

<!-- Hero Module Architecture -->
<?php if($enable__hero_module) : ?>
  <div class="hero" data-module="hero">
    <div class="container">
      <div class="hero-wrapper" <?php echo ($hero__bg) ? 'style="background-image:url(' . $hero__bg_url . ')"' : ''; ?> > <!-- Background image -->
        <div class="hero-wrapper__block">

          <!-- Headline -->
          <?php if($hero__title) : ?>
            <h1><?php _e($hero__title, 'barrel-wordpress-test'); ?></h1>
          <?php endif; ?>

          <!-- Main Text -->
          <?php if($hero__text) : ?>
            <p><?php _e($hero__text, 'barrel-wordpress-test'); ?></p>
          <?php endif; ?>

        </div>
        <div class="hero-wrapper__block">
          <div class="post__image">

            <!-- Foreground image -->
            <?php if($hero__fg) : ?>
              <img src="<?php echo $hero__fg_url; ?>" alt="<?php echo $hero__fg_alt; ?>" />
            <?php endif; ?>

          </div>
        </div>
      </div>
    </div>
  </div>
<?php endif; ?>