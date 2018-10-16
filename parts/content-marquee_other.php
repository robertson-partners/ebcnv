<?php
/**
 * The template part for marquee content
 */
?>

<div class="grid-container">
  <div class="grid-x">
    <div class="large-9 cell marquee-content <?php echo (is_page_template('template-full-width.php')) ? 'home' : 'other'; ?>">
      <h1><?php the_title(); ?></h1>
    </div>
    <div class="large-3 cell"></div>
  </div>
</div>