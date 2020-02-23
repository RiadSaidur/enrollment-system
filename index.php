<?php
  include './config/config.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./index.css?v=<?php echo time(); ?>">
    <title>SHAPPY | <?php print $PAGE_TITLE ?></title>
</head>
<body>
  <?php include "./includes/header.php" ?>
  <?php include "./includes/toolbar.php" ?>
  <span class="container">
    <h1>Student Information</h1>
    <form method="POST">
      <input type="number" name="reg_no" placeholder="Registration Number">
      <label for="department">
        Department:
        <select name="department_name" id="department">
          <option value="CSE">CSE</option>
          <option value="ECE">ECE</option>
          <option value="BBA">BBA</option>
        </select>
      </label>
      <input type="text" name="std_name" placeholder="Student's Name">
      <label for="gender">
        Gender:
        <select name="gender" id="gender">
          <option value="male">Male</option>
          <option value="female">Female</option>
        </select>
      </label>
      <input type="number" name="hsc_gpa" placeholder="GPA">
      <input type="number" name="hsc_roll" placeholder="HSC Roll">
      <input type="text" name="college" placeholder="College">
      <input type="text" name="hsc_group" placeholder="HSC Group">
      <input type="number" name="hsc_year" placeholder="HSC Year">
      <input type="text" name="f_name" placeholder="Father's Name">
      <input type="text" name="m_name" placeholder="Mother's Name">
      <button type="submit">Submit</button>
    </form>
  </div>
  <script src="./index.js"></script>
</body>
</html>