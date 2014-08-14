<?php
$base_colours = array(
  'green',
  'lime',
  'fuchsia', 
  'orange',
);

$tones = array(
  'lightest',   
  'lighter',    
  'base',            
  'darker',     
  'darkest',
);
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
  <div class="wrapper">
  <?php foreach ($base_colours as $colour) : ?><?php foreach ($tones as $tone) : ?><div class="box <?php echo $colour.'-'.$tone ?>"><textarea>colour(<?php echo $colour ?>,<?php echo $tone ?>)</textarea></div><?php endforeach ?><?php endforeach ?>
</div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/jquery-2.1.1.min.js"><\/script>')</script>
<script>
  jQuery(document).ready(function($) {
    $('.box').click(function() {
      $(this).children('textarea').select();
    });
  });
  </script>
</body>
</html>