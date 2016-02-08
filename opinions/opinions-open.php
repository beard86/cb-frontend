<?php
// Page Setup
$title = 'Opinions';
$bodyclass = 'opinions';
include '../includes/header.php';
include '../includes/nav.php';
?>
    <!-- Main container -->
    <div class="container">
        <?php include '../includes/bread-crumb.php'; ?>
        <blockquote class="large qpad-bottom">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed maximus,
            dolor ac, orci tortor rutrum felis, quis nec consectetur ante nunc id&nbsp;&nbsp;leo.
        </blockquote>
        <?php include '../modules/m16.php' ?>
        <div class="divide-line">
            <hr class="short-black">
        </div>
        <blockquote class="large qpad-bottom">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed maximus,
            dolor ac, orci tortor rutrum felis, quis nec consectetur ante nunc id&nbsp;&nbsp;leo.
        </blockquote>

        <h2>Peter Clive Charrington</h2>
        <h4>Global Head</h4>

        <div class="divide-line">
            <hr class="short-black">
        </div>
        <p>
            Mauris quis risus dapibus ligula facilisis ultricies. Mauris accumsan, ex eget dictum volutpat, sem justo
            fermentum elit, et tincidunt purus leo ac magna. Vestibulum aliquet luctus massa id volutpat. Vivamus tempus
            in velit sed ullamcorper. Aenean volutpat nulla ut tincidunt pharetra. Sed efficitur velit dictum enim
            mattis laoreet. Nam in nisi vitae velit facilisis tempor. Donec feugiat dolor ex. Nam suscipit pretium nibh,
            eget maximus metus luctus at. Aliquam erat volutpat. Aenean ultrices, nibh quis pharetra euismod, leo dolor
            mollis metus, id iaculis augue magna at felis.
        </p>
        <h4><a href="##" class="pink rel"><span class="social pad-right-md"></span>Share opinion post</a></h4>
        <?php include '../modules/m18.php'; ?>
        <?php include '../modules/m27.php'; ?>

    </div><!-- Main container -->

    <!--INCLUDE FOOTER-->
<?php
include '../includes/video-takeover.php';

include '../includes/region-select.php';

include '../includes/mega-menu.php';

include '../includes/sign-in.php';

include '../includes/search.php';

include '../includes/contact-us.php';

include '../includes/footer.php';

?>