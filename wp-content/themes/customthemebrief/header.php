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

    <nav class="navbar_container">
      <?php wp_nav_menu([
        'menu' => 'header',
      ]); ?>
      <div class="navlogo"></div>
    </nav>
