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

<div id="makecourse-container">

    <div id="makecourse-course">

        <div id="makecourse-course-inputs">
            <form id="course" action="makecourse.php" method="POST">
                <div class="course-inputs">
                    <input id="cousrename" type="text" name="name" placeholder="Course Name">
                    <input id="coursedesc" type="text" name="description" placeholder="Course Description">
                    <input id="cousreoperatopn" type="hidden" name="operation" value="">
                </div>
                <div class="course-buttons">
                    <button type="reset"  class="glyphicon glyphicon-repeat" id="cousreclear" title="Clear"></button>
                    <?php
                    $msg = "";
                    $course = new course("", "", "");
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $msg = "";
                        $msg = $course->checkcourse();
                        $_POST = array();
                    }
                    ?>
                    <button type="submit" id="cousreadd" class=" glyphicon glyphicon-plus" title="Add"></button>
                    <!--                    <button id="cousreedit" class="glyphicon glyphicon-pencil" title="Edit"></button>-->

                    <span class=error>
                        <?php
                        if (isset($msg)) {
                            echo "<br>&nbsp;&nbsp;&nbsp;&nbsp;";
                            echo $msg;
                        }
                        ?></span> 
                </div>
            </form>
        </div>

        <div id="makecourse-course-table">

            <?php course::showcourse(); ?>
        </div>
    </div>
</div>



