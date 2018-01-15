<?php
include 'inti.php';
include $tem . 'header.php';
?>

<?php
if (isset($_SESSION["name"]) && $_SESSION["name"] != "") {

    include $tem . 'loginnav.php';
} else {
    header("location: login.php");
}
?>

<div>
    <div id="course-list">
        <?php course::showcourselist(); ?>
    </div>
    <div>

    </div>
</div>
