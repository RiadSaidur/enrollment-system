<div class="backdrop">
  <div class="popup">
    <h2>Are you sure?</h2>
    <form class="ctas" method="post" action="<?php echo "/index/delete/?reg_no=".$_GET['reg_no'] ?>">
      <!-- <div class="ctas"> -->
        <button id='sure' type='submit' name="submit">Delete</button>
        <button id="nope">Cancel</button>
      <!-- </div> -->
    </form>
  </div>
</div>