<?php
/**
 * The off-canvas menu uses the Off-Canvas Component
 *
 * For more info: http://jointswp.com/docs/off-canvas-menu/
 */

$nav = (is_page_template('template-full-width.php')) ? '' : '/'; 
?>

<video class="bgvid" id="bgvid" playsinline autoplay muted loop>
  <source src="https://assets.everybabycountsnv.org/wp-content/uploads/2018/11/02102320/ebc_bg.mp4" type="video/mp4">
</video>
<div class="marquee-image"></div>
<div class="grid-container nav-container">
  <div class="grid-x">
    <div class="small-6 medium-2 large-2 cell">
      <div class="ebc_logo"><a href="/"></a></div>
    </div>
    <div class="small-6 medium-10 large-10 cell nav">
      <div class="show-for-small-only">
        <button class="hamburger hamburger--spin" id="hamburger" type="button">
          <span class="hamburger-box">
            <span class="hamburger-inner"></span>
          </span>
        </button>
      </div>
      
      <ul id="mainnav" class="mainnav">
        <li><a href="<?php echo $nav; ?>#action-block1">about</a></li>
        <li><a href="<?php echo $nav; ?>#petition-block">sign the petition</a></li>
        <li><a href="<?php echo $nav; ?>#letter-block">send a letter</a></li>
        <li><a href="<?php echo $nav; ?>#share-block">share the cause</a></li>
      </ul>
    </div>
  </div>
</div>