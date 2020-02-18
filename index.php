<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./index.css">
    <title>SHAPPY | Student Information</title>
</head>
<body>
  <?php
    include_once "./header/header.php"
  ?>
  <div class="container">
    <h1>Student Information</h1>
    <form>
        <input type="text" name="reg_no" placeholder="Registration Number">
        <input type="text" name="dept" placeholder="Department">
        <input type="text" name="app_name" placeholder="Student's Name">
        <input type="text" name="gender" placeholder="Gender">
        <input type="text" name="ssc_roll" placeholder="SSC Roll">
        <input type="text" name="hsc_roll" placeholder="HSC Roll">
        <input type="text" name="school" placeholder="School">
        <input type="text" name="college" placeholder="College">
        <input type="text" name="ssc_grp" placeholder="SSC Group">
        <input type="text" name="hsc_grp" placeholder="HSC Group">
        <input type="text" name="ssc_year" placeholder="SSC Year">
        <input type="text" name="hsc_year" placeholder="HSC Year">
        <input type="text" name="f_name" placeholder="Father's Name">
        <input type="text" name="m_name" placeholder="Mother's Name">
        <button type="submit">Submit</button>
    </form>
  </div>
  <script src="./index.js"></script>
</body>
</html>