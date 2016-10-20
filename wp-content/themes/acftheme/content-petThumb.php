<?php
/**
 * The template used for displaying feature pets
 *
 * @package WordPress
 * @subpackage Advance Custom Fields
 */
?>
<div id="pet-<?php the_ID(); ?>" class="pet-thumb">
  <div class="pet-image-holder">
    <?php
    if ( has_post_thumbnail() ) {
      the_post_thumbnail();
    }
    ?>
  </div>
  <div class="info">
    <?php the_title( '<h4 class="entry-title">', '</h4>' ); ?>
    <span>
      Age: <?php the_field('age'); ?> years old
    </span>
    <span>
      Weight: <?php the_field('weight'); ?>Kg
    </span>
    <span>
      Type: <?php the_field('type'); ?>
    </span>
    <span>
      <?php
      // vars
      $field_sex = get_field_object('sex');
      $value_sex = $field_sex['value'];
      $label_sex = $field_sex['choices'][ $value_sex ];
      ?>
      Sex: <?php echo $label_sex; ?>
    </span>
    <a href=" <?php the_permalink(); ?> ">Check it out!</a>
  </div>
</div>
