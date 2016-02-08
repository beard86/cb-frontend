<?php
// Page Setup
$title = 'Tailored-advice';
//$bodyclass = 'search';
include 'includes/header.php';
include 'includes/nav.php';
?>
<div class="container">
    <?php include 'includes/bread-crumb.php'; ?>
    <?php include 'modules/m8.php';?>
    <?php include 'modules/m16.php';?>
    <?php include 'modules/m7.php';?>
    <?php include 'modules/m4.php';?>
    <?php include 'modules/m23.php';?>
    <?php include 'modules/m18.php';?>
    <?php include 'modules/m27.php';?>
</div>
<?php   
	include 'includes/video-takeover.php';

  include 'includes/region-select.php';

  include 'includes/mega-menu.php';

  include 'includes/sign-in.php';

  include 'includes/search.php';

  include 'includes/contact-us.php';

  //call script based on URL extension
  if (!empty($_GET['doaction']) && $_GET['doaction'] == contact ){
    echo '<script></script>';
  }

  include 'includes/footer.php';
?>