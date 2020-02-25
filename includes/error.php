<?php
  if (isset($_REQUEST['q'])) {
    if($_REQUEST['q'] == 'false') echo '<p class="error msg">Fuck</p>';
    elseif ($_REQUEST['q'] == 'true') echo '<p class="success msg">Fuck</p>';
  }
?>