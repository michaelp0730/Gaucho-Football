<?php
require '../_includes/handler-header.php';

if (!empty($_POST['wk7gm1']) && !empty($_POST['wk7gm2']) && !empty($_POST['wk7gm3']) &&
    !empty($_POST['wk7gm4']) && !empty($_POST['wk7gm5']) && !empty($_POST['wk7gm6']) &&
    !empty($_POST['wk7gm7']) && !empty($_POST['wk7gm8']) && !empty($_POST['wk7gm9']) &&
    !empty($_POST['wk7gm10']) && !empty($_POST['wk7gm11']) && !empty($_POST['wk7gm12']) &&
    !empty($_POST['wk7-tiebreaker']) && !empty($_SESSION['LoggedIn']) &&
    !empty($_SESSION['Username'])) {
    $username = $_SESSION['Username'];
    $wk7gm1 = mysql_real_escape_string($_POST['wk7gm1']);
    $wk7gm2 = mysql_real_escape_string($_POST['wk7gm2']);
    $wk7gm3 = mysql_real_escape_string($_POST['wk7gm3']);
    $wk7gm4 = mysql_real_escape_string($_POST['wk7gm4']);
    $wk7gm5 = mysql_real_escape_string($_POST['wk7gm5']);
    $wk7gm6 = mysql_real_escape_string($_POST['wk7gm6']);
    $wk7gm7 = mysql_real_escape_string($_POST['wk7gm7']);
    $wk7gm8 = mysql_real_escape_string($_POST['wk7gm8']);
    $wk7gm9 = mysql_real_escape_string($_POST['wk7gm9']);
    $wk7gm10 = mysql_real_escape_string($_POST['wk7gm10']);
    $wk7gm11 = mysql_real_escape_string($_POST['wk7gm11']);
    $wk7gm12 = mysql_real_escape_string($_POST['wk7gm12']);
    $tiebreaker = mysql_real_escape_string($_POST['wk7-tiebreaker']);
    $due_date = strtotime('2015-10-25T13:00:00-04:00');
    $submission_time = strtotime('now');
    $check_user_submission = mysql_query("SELECT wk7Complete FROM wk7 WHERE Username = '".$username."'");
    $submission_response_array = mysql_fetch_array($check_user_submission);

    if ($submission_response_array[0] == 1) {
        echo '<div class="alert alert-danger" role="alert"><strong>Error:</strong> You have already submitted your Week 7 picks. All submissions are final.</div>';
    } else if ($submission_time > $due_date) {
        echo '<div class="alert alert-danger" role="alert"><strong>Error:</strong> Your submission is too late. The first game of Week 7 has already started. Please try again next week.</div>';
    } else {
        $submit_wk7 = mysql_query("INSERT INTO wk7 (Username, wk7gm1, wk7gm2, wk7gm3, wk7gm4,
            wk7gm5, wk7gm6, wk7gm7, wk7gm8, wk7gm9, wk7gm10, wk7gm11, wk7gm12, MondayTotalPoints,
            wk7Complete)
            VALUES('".$username."', '".$wk7gm1."', '".$wk7gm2."', '".$wk7gm3."', '".$wk7gm4."',
            '".$wk7gm5."', '".$wk7gm6."', '".$wk7gm7."', '".$wk7gm8."', '".$wk7gm9."',
            '".$wk7gm10."', '".$wk7gm11."', '".$wk7gm12."', '".$tiebreaker."', true)");

        if ($submit_wk7) {
            echo '<div class="alert alert-success"><strong>Success!</strong> Your Week 7 picks have been recorded. <a href="../view-picks.php">Click here to view all picks.</a></div>';
        } else {
            echo '<div class="alert alert-danger" role="alert"><strong>Error:</strong> Your Week 7 submission has failed. <a href="../index.php">Please go back and try again.</a></div>';
        }
    }

} else {
    echo '<div class="alert alert-danger" role="alert"><strong>Error:</strong> Your selections for Week 7 are incomplete. <a href="../index.php">Please go back and try again.</a></div>';
}

include '../_includes/handler-footer.php';
