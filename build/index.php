<?php
include('includes/essential/header.php')
?>
<div class="grid-y medium-grid-frame">
  <div class="cell shrink header medium-cell-block-container">
    <?php include('includes/elements/header.php') ?>
  </div>
  <div class="cell medium-auto medium-cell-block-container">
    <div class="grid-x">
      <?php
      include('includes/elements/sidebar.php');
      ?>
      <div class="cell medium-10 medium-cell-block-y">
        <?php
        include('includes/elements/searchbar.php');
        include('includes/elements/body.php');
        ?>
      </div>
    </div>
  </div>
  <?php include('includes/elements/footer.php') ?>
</div>
<?php
include('includes/essential/footer.php')
?>
