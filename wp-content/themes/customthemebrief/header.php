<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kevin, Luke</title>
    <?php wp_head(); ?>
</head>
<body>
  <div class="navbar_container">
    <nav>
      <img src="weblogo.jpg"/>
      <?php wp_nav_menu([
      'menu' => 'header',
      ]); ?>
    </nav>
  </div>