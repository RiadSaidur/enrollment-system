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
  <div class="container">
    <h1>Student Information</h1>
    <form>
      <input type="number" name="reg_no" placeholder="Registration Number">
      <label for="department">
        Department:
        <select name="department" id="department">
          <option value="CSE">CSE</option>
          <option value="ECE">ECE</option>
          <option value="BBA">BBA</option>
        </select>
      </label>
      <input type="text" name="app_name" placeholder="Student's Name">
      <div class="gender">
        <label for="male"><input type="radio" id="male" name="gender" value="male">Male</label>
        <label for="female"><input type="radio" id="female" name="gender" value="female">Female</label>
      </div>
      <input type="number" name="gpa" placeholder="GPA">
      <input type="number" name="hsc_roll" placeholder="HSC Roll">
      <input type="text" name="college" placeholder="College">
      <input type="text" name="hsc_grp" placeholder="HSC Group">
      <input type="number" name="hsc_year" placeholder="HSC Year">
      <input type="text" name="f_name" placeholder="Father's Name">
      <input type="text" name="m_name" placeholder="Mother's Name">
      <button type="submit">Submit</button>
    </form>
  </div>
  <script src="./index.js"></script>
</body>
</html>