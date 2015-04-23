<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title><?php echo $title ?></title>
        <link rel="stylesheet" href="<?php echo Kohana::$base_url?>public/bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="<?php echo Kohana::$base_url ?>public/style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <?php echo $navbar ?>
        <?php echo $countent ?>
    </body>
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="<?php echo Kohana::$base_url ?>public/bootstrap/js/bootstrap.min.js"></script>
</html>