<?php
  switch($_SERVER['SCRIPT_NAME']) {
    case '/index.php':
      $CURR_PAGE = "Home";
      $PAGE_TITLE = "Home";
      break;
    case '/search.php':
      $CURR_PAGE = "Search";
      $PAGE_TITLE = "Search";
      break;
    case '/allstudents.php':
      $CURR_PAGE = "All Students";
      $PAGE_TITLE = "Student List";
      break;
    default:
      $CURR_PAGE = "";
      $PAGE_TITLE = "Not Found";
      break;
  }
?>