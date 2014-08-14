<?php
$base_colours = array(
  'green',
  'lime',
  'fuchsia', 
  'orange',
);

$tones = array(
  'light90',
  'light80', 
  'light70',  
  'light60',
  'light50',
  'light40',
  'light30',
  'light20',  
  'light10',    
  'base',            
  'dark10',     
  'dark20',
  'dark30',
  'dark40',
  'dark50',
  'dark60',
  'dark70',
  'dark80',
  'dark90',
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

    <?php foreach ($base_colours as $colour) : ?>
    <div class="col">
      <?php foreach ($tones as $tone) : ?>
      <div class="box <?php echo $colour.'-'.$tone ?>">
        <textarea>colour(<?php echo $colour ?>,<?php echo $tone ?>)</textarea>
      </div>
      <?php endforeach ?>
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