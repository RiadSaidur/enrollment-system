<?php include_once "./base/head.php" ?>

<link rel="stylesheet" href="../assets/css/allstudents.css?v=<?php echo time(); ?>">

<div class="container">
  <h1>Registered Student List</h1>
  <ul>
    <li>
      <span>Reg No.</span><span>Name</span><span>Department</span>
    </li>

    <?php include_once './allstudents/loopStudents.php' ?>

  </ul>
</div>

<?php include_once "./base/footer.php" ?>