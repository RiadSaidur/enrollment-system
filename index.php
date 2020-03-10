<?php require_once './config/config.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/index.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="./css/header.css?v=<?php echo time(); ?>">
    <link rel="icon" href="./assets/house.svg">
    <title>SHAPPY | <?php print $PAGE_TITLE ?></title>
</head>
<body>
  <?php include_once "./global/header.php" ?>
  <?php include_once "./global/toolbar.php" ?>
  <div class="container">
    <h1>New Student Information</h1>
    <?php include_once './index/error.php' ?>
    <?php include_once './index/form.php' ?>
  </div>
  <script src="./js/index.js"></script>
</body>
</html>