<?php
require '../_includes/handler-header.php';

if (!empty($_POST['wk8gm1']) && !empty($_POST['wk8gm2']) && !empty($_POST['wk8gm3']) &&
    !empty($_POST['wk8gm4']) && !empty($_POST['wk8gm5']) && !empty($_POST['wk8gm6']) &&
    !empty($_POST['wk8gm7']) && !empty($_POST['wk8gm8']) && !empty($_POST['wk8gm9']) &&
    !empty($_POST['wk8gm10']) && !empty($_POST['wk8gm11']) && !empty($_POST['wk8gm12']) &&
    !empty($_POST['wk8-tiebreaker']) && !empty($_SESSION['LoggedIn']) &&
    !empty($_SESSION['Username'])) {
    $username = $_SESSION['Username'];
    $wk8gm1 = mysql_real_escape_string($_POST['wk8gm1']);
    $wk8gm2 = mysql_real_escape_string($_POST['wk8gm2']);
    $wk8gm3 = mysql_real_escape_string($_POST['wk8gm3']);
    $wk8gm4 = mysql_real_escape_string($_POST['wk8gm4']);
    $wk8gm5 = mysql_real_escape_string($_POST['wk8gm5']);
    $wk8gm6 = mysql_real_escape_string($_POST['wk8gm6']);
    $wk8gm7 = mysql_real_escape_string($_POST['wk8gm7']);
    $wk8gm8 = mysql_real_escape_string($_POST['wk8gm8']);
    $wk8gm9 = mysql_real_escape_string($_POST['wk8gm9']);
    $wk8gm10 = mysql_real_escape_string($_POST['wk8gm10']);
    $wk8gm11 = mysql_real_escape_string($_POST['wk8gm11']);
    $wk8gm12 = mysql_real_escape_string($_POST['wk8gm12']);
    $tiebreaker = mysql_real_escape_string($_POST['wk8-tiebreaker']);
    $due_date = strtotime('2015-11-01T13:00:00-05:00');
    $submission_time = strtotime('now');
    $check_user_submission = mysql_query("SELECT wk8Complete FROM wk8 WHERE Username = '".$username."'");
    $submission_response_array = mysql_fetch_array($check_user_submission);

    if ($submission_response_array[0] == 1) {
        echo '<div class="alert alert-danger" role="alert"><strong>Error:</strong> You have already submitted your Week 8 picks. All submissions are final.</div>';
    } else if ($submission_time > $due_date) {
        echo '<div class="alert alert-danger" role="alert"><strong>Error:</strong> Your submission is too late. The first game of Week 8 has already started. Please try again next week.</div>';
    } else {
        $submit_wk8 = mysql_query("INSERT INTO wk8 (Username, wk8gm1, wk8gm2, wk8gm3,
            wk8gm4, wk8gm5, wk8gm6, wk8gm7, wk8gm8, wk8gm9, wk8gm10, wk8gm11,
            wk8gm12,MondayTotalPoints, wk8Complete)
            VALUES('".$username."', '".$wk8gm1."', '".$wk8gm2."', '".$wk8gm3."',
            '".$wk8gm4."', '".$wk8gm5."', '".$wk8gm6."', '".$wk8gm7."', '".$wk8gm8."',
            '".$wk8gm9."', '".$wk8gm10."', '".$wk8gm11."', '".$wk8gm12."','".$tiebreaker."', true)");

        if ($submit_wk8) {
            echo '<div class="alert alert-success"><strong>Success!</strong> Your Week 8 picks have been recorded. <a href="../view-picks.php">Click here to view all picks.</a></div>';
        } else {
            echo '<div class="alert alert-danger" role="alert"><strong>Error:</strong> Your Week 8 submission has failed. <a href="../index.php">Please go back and try again.</a></div>';
        }
    }

} else {
    echo '<div class="alert alert-danger" role="alert"><strong>Error:</strong> Your selections for Week 8 are incomplete. <a href="../index.php">Please go back and try again.</a></div>';
}

include '../_includes/handler-footer.php';
