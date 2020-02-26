<?php
  switch($_SERVER['SCRIPT_NAME']) {
    case '/index.php':
      $CURR_PAGE = "Home";
      $PAGE_TITLE = "Home";
      break;
    case '/newstudent.php':
      $CURR_PAGE = "New Student";
      $PAGE_TITLE = "Home";
      break;
    case '/allstudents.php':
      $CURR_PAGE = "All Students";
      $PAGE_TITLE = "Student List";
      break;
    case '/about.php':
      $CURR_PAGE = 'About';
      $PAGE_TITLE = "ABout";
      break;
    default:
      $CURR_PAGE = "";
      $PAGE_TITLE = "Not Found";
      break;
  }
?>