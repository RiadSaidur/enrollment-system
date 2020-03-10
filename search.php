<?php require_once './config/config.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/header.css?v=<?php echo time(); ?>">
  <link rel="stylesheet" href="./css/search.css?v=<?php echo time(); ?>">
  <link rel="icon" href="./assets/search.svg">
  <title>SHAPPY | <?php print $PAGE_TITLE ?></title>
</head>
<body>
  <?php require_once './global/header.php' ?>
  <?php include_once "./global/toolbar.php" ?>
  <div class="container">
    <?php include_once "./search/filters.php" ?>
    <?php include_once "./search/searchfield.php" ?>
  </div>
  <script src="./js/search.js"></script>
</body>
</html>