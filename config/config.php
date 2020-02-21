<?php
  switch($_SERVER['SCRIPT_NAME']) {
    case '/customs/enrollment-system/index.php':
      $CURR_PAGE = "Home";
      $PAGE_TITLE = "Home";
      break;
    case '/customs/enrollment-system/newstudent.php':
      $CURR_PAGE = "New Student";
      $PAGE_TITLE = "Home";
      break;
    case '/customs/enrollment-system/allstudents.php':
      $CURR_PAGE = "All Students";
      $PAGE_TITLE = "Student Information";
      break;
    case '/customs/enrollment-system/about.php':
      $CURR_PAGE = 'About';
      $PAGE_TITLE = "ABout";
      break;
    default:
      $CURR_PAGE = "Home";
      $PAGE_TITLE = "Home";
      break;
  }
?>