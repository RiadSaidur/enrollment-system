<?php include_once("./config/config.php"); ?>

<nav>
  <ul class="menu">
    <li><a class=" <?php if($CURR_PAGE == 'Home') { ?> active <?php } ?>" href="/"><img src="./assets/house.svg" alt=""><span> Home</span></a></li>
    <li><a class=" <?php if($CURR_PAGE == 'New Student') { ?> active <?php } ?>"><img src="./assets/feather-blue-book.svg" alt="New"><span> New Student</span></a></li>
    <li><a class=" <?php if($CURR_PAGE == 'All Students') { ?> active <?php } ?>" href="./allstudents.php"><img src="./assets/address.svg" alt="All"><span> All Students</span></a></li>
    <li><a class=" <?php if($CURR_PAGE == 'About') { ?> active <?php } ?>"><img src="./assets/information.svg" alt="About"><span> About</span></a></li>
  </ul>
  <button><img src="./assets/left-arrow.svg" alt="collapse"><span> Collapse</span></button>
</nav>

<script src="./js/toolbar.js"></script>