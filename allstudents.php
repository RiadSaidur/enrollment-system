<?php require_once './config/config.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="./assets/address.svg">
  <link rel="stylesheet" href="./css/header.css?v=<?php echo time(); ?>">
  <link rel="stylesheet" href="./css/allstudents.css?v=<?php echo time(); ?>">
  <title>SHAPPY | <?php print $PAGE_TITLE ?></title>
</head>
<body>
  <?php require_once './global/header.php' ?>
  <?php include_once "./global/toolbar.php" ?>
  <div class="container">
    <h1>Registered Student List</h1>
    <ul>
      <li>
        <span>Reg No.</span><span>Name</span><span>Department</span>
      </li>
    </ul>
  </div>
  <script src="./js/allstudents.js"></script>
</body>
</html>