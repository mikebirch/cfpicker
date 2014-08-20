<?php

/* 
 *
 * Configuration 
 *
 */

 // set your base colour names and also in base.scss
$base_colours = array(
  'c-green',
  'c-lime',
  'c-fuchsia', 
  'c-orange',
);

// set the increment value here and also in colour.scss
$increment = 1; 

?>
<!DOCTYPE html>
<html>
<head>
  <meta name="charset" charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Palette</title>
  <link rel="stylesheet" type="text/css" href="css/colour.css">
</head>
<body>
  <h1>cfpicker</h1>
  <p>A handy colour picker for designing in the browser with Sass. Clicking on a colour selects the text so that you can copy and paste it into your editor.</p>
  <p>Read the associated <a href="/blog/colour-picker-for-sass">blog post</a>.</p>
  <p>View on <a href="https://github.com/mikebirch/cfpicker">GitHub</a>.</p>

   <?php foreach ($base_colours as $colour) : ?>
    <div class="col">
    <?php for($i=(100/$increment)-1; $i>0; $i--): ?>
      <?php $percentage = $i * $increment ?>
      <div class="box <?php echo $colour.'-tint-'.$percentage ?>">
        <textarea>tint(<?php echo $colour ?>,<?php echo $percentage ?>)</textarea>
      </div>
    <?php endfor; ?>
    <div class="box <?php echo $colour.'-base' ?>">
      <textarea><?php echo '$' . $colour ?></textarea>
    </div>
    <?php for($i=1; $i<(100/$increment); $i++): ?>
      <?php $percentage = $i * $increment ?>
      <div class="box <?php echo $colour.'-shade-'.$percentage ?>">
        <textarea>shade(<?php echo $colour ?>,<?php echo $percentage ?>)</textarea>
      </div>
    <?php endfor; ?>
    </div>
  <?php endforeach ?>

  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/jquery-2.1.1.min.js"><\/script>')</script>
  <script>
    jQuery(document).ready(function($) {
      $('.box').click(function() {
        $('.active').removeClass('active');
        $(this).addClass('active');
        $(this).children('textarea').select();
      });
    });
  </script>
</body>
</html>