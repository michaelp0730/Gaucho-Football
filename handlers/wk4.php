<?php
require '../_includes/handler-header.php';

if (!empty($_POST['wk4gm1']) && !empty($_POST['wk4gm2']) && !empty($_POST['wk4gm3']) &&
    !empty($_POST['wk4gm4']) && !empty($_POST['wk4gm5']) && !empty($_POST['wk4gm6']) &&
    !empty($_POST['wk4gm7']) && !empty($_POST['wk4gm8']) && !empty($_POST['wk4gm9']) &&
    !empty($_POST['wk4gm10']) && !empty($_POST['wk4gm11']) && !empty($_POST['wk4gm12']) &&
    !empty($_POST['wk4gm13']) && !empty($_POST['wk4-tiebreaker']) && !empty($_SESSION['LoggedIn']) &&
    !empty($_SESSION['Username'])) {
    $username = $_SESSION['Username'];
    $wk4gm1 = mysql_real_escape_string($_POST['wk4gm1']);
    $wk4gm2 = mysql_real_escape_string($_POST['wk4gm2']);
    $wk4gm3 = mysql_real_escape_string($_POST['wk4gm3']);
    $wk4gm4 = mysql_real_escape_string($_POST['wk4gm4']);
    $wk4gm5 = mysql_real_escape_string($_POST['wk4gm5']);
    $wk4gm6 = mysql_real_escape_string($_POST['wk4gm6']);
    $wk4gm7 = mysql_real_escape_string($_POST['wk4gm7']);
    $wk4gm8 = mysql_real_escape_string($_POST['wk4gm8']);
    $wk4gm9 = mysql_real_escape_string($_POST['wk4gm9']);
    $wk4gm10 = mysql_real_escape_string($_POST['wk4gm10']);
    $wk4gm11 = mysql_real_escape_string($_POST['wk4gm11']);
    $wk4gm12 = mysql_real_escape_string($_POST['wk4gm12']);
    $wk4gm13 = mysql_real_escape_string($_POST['wk4gm13']);
    $tiebreaker = mysql_real_escape_string($_POST['wk4-tiebreaker']);
    $due_date = strtotime('2015-10-04T13:00:00-04:00');
    $submission_time = strtotime('now');
    $check_user_submission = mysql_query("SELECT wk4Complete FROM wk4 WHERE Username = '".$username."'");
    $submission_response_array = mysql_fetch_array($check_user_submission);

    if ($submission_response_array[0] == 1) {
        echo '<div class="alert alert-danger" role="alert"><strong>Error:</strong> You have already submitted your Week 4 picks. All submissions are final.</div>';
    } else if ($submission_time > $due_date) {
        echo '<div class="alert alert-danger" role="alert"><strong>Error:</strong> Your submission is too late. The first game of Week 4 has already started. Please try again next week.</div>';
    } else {
        $submit_wk4 = mysql_query("INSERT INTO wk4 (Username, wk4gm1, wk4gm2, wk4gm3, wk4gm4,
            wk4gm5, wk4gm6, wk4gm7, wk4gm8, wk4gm9, wk4gm10, wk4gm11, wk4gm12, wk4gm13,
            MondayTotalPoints, wk4Complete)
            VALUES('".$username."', '".$wk4gm1."', '".$wk4gm2."', '".$wk4gm3."', '".$wk4gm4."',
            '".$wk4gm5."', '".$wk4gm6."', '".$wk4gm7."', '".$wk4gm8."', '".$wk4gm9."',
            '".$wk4gm10."', '".$wk4gm11."', '".$wk4gm12."', '".$wk4gm13."', '".$tiebreaker."',
            true)");

        if ($submit_wk4) {
            echo '<div class="alert alert-success"><strong>Success!</strong> Your Week 4 picks have been recorded. <a href="../view-picks.php">Click here to view all picks.</a></div>';
        } else {
            echo '<div class="alert alert-danger" role="alert"><strong>Error:</strong> Your Week 4 submission has failed. <a href="../index.php">Please go back and try again.</a></div>';
        }
    }

} else {
    echo '<div class="alert alert-danger" role="alert"><strong>Error:</strong> Your selections for Week 4 are incomplete. <a href="../index.php">Please go back and try again.</a></div>';
}

include '../_includes/handler-footer.php';
