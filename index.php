<?php include_once "./base/head.php" ?>

<link rel="stylesheet" href="./assets/css/index.css?v=<?php echo time(); ?>">

<?php include_once "./index/post.php" ?>
<?php include_once './index/popup.php' ?>

<div class="container">
  <h1>New Information</h1>
  <?php include_once './index/error.php' ?>
  <?php include_once './index/form.php' ?>
  <button id='delete'>DELETE</button>
</div>



<script src="./assets/js/index.js"></script>

<?php include_once "./base/footer.php" ?>