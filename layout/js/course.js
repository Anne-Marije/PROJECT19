$(document).ready(function () {
    $("td").parent().hover(function () {
        $(this).find("button").toggle();
    });
});

function del(id) {
    window.location.href = "deletecourse.php?id=" + id;
}
function showsubcourses(courseID) {
    $('#subcourse' + courseID).slideToggle('slow');

}
