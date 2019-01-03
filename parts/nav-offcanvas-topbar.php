<?php
/**
 * The off-canvas menu uses the Off-Canvas Component
 *
 * For more info: http://jointswp.com/docs/off-canvas-menu/
 */

$nav = (is_page_template('template-full-width.php') || is_page_template('template-full-width-es.php')) ? '' : '/'; 
?>

<?php if ($nav == ''){ ?>
  <video class="bgvid" id="bgvid" playsinline autoplay muted loop>
    <source src="https://assets.everybabycountsnv.org/wp-content/uploads/2018/11/02102320/ebc_bg.mp4" type="video/mp4">
  </video>
<?php } ?>

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
        <?php if (is_page_template('template-full-width.php')) { ?>
          <li><a href="<?php echo $nav; ?>#action-block1" tabindex="1">about</a></li>
          <li><a href="<?php echo $nav; ?>#petition-block" tabindex="2">sign the petition</a></li>
          <li><a href="<?php echo $nav; ?>#letter-block" tabindex="3">send a letter</a></li>
          <li><a href="<?php echo $nav; ?>#share-block" tabindex="4">share the cause</a></li>
          <li><a href="/es">en español</a></li>
        <?php } else if (is_page_template('template-full-width-es.php')) { ?>
          <li class="es-nav"><a href="<?php echo $nav; ?>#action-block1" tabindex="1">acerca de nosotros</a></li>
          <li class="es-nav"><a href="<?php echo $nav; ?>#petition-block" tabindex="2">firme la petición</a></li>
          <li class="es-nav"><a href="<?php echo $nav; ?>#letter-block" tabindex="3">envie una carta</a></li>
          <li class="es-nav"><a href="<?php echo $nav; ?>#share-block" tabindex="4">comparta la causa</a></li>
          <li class="es-nav"><a href="/">en inglés</a></li>
        <?php } else { ?>
          <li><a href="<?php echo $nav; ?>#action-block1" tabindex="1">about</a></li>
          <li><a href="<?php echo $nav; ?>#petition-block" tabindex="2">sign the petition</a></li>
          <li><a href="<?php echo $nav; ?>#letter-block" tabindex="3">send a letter</a></li>
          <li><a href="<?php echo $nav; ?>#share-block" tabindex="4">share the cause</a></li>
          <li><a href="/es">en español</a></li>
        <?php } ?>
        
      </ul>
    </div>
  </div>
</div>