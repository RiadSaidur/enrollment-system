<?php //include_once("./config/config.php"); ?>

<nav>
  <ul class="menu">
    <li>
      <a class=" <?php if($CURR_PAGE == 'Home') { ?> active <?php } ?>" href="/"><img src="./assets/icons/house.svg" alt="">
        <span> Home</span>
      </a>
    </li>
    <li>
      <a class=" <?php if($CURR_PAGE == 'Search') { ?> active <?php } ?>"  href="./search.php">
        <img src="../assets/icons/search.svg" alt="New">
        <span> Search</span>
      </a>
    </li>
    <li>
      <a class=" <?php if($CURR_PAGE == 'All Students') { ?> active <?php } ?>" href="./allstudents.php">
        <img src="../assets/icons/address.svg" alt="All">
        <span> All Students</span>
      </a>
    </li>
  </ul>
  <button><img src="./assets/icons/left-arrow.svg" alt="collapse"><span> Collapse</span></button>
</nav>

<script src="./js/toolbar.js"></script>