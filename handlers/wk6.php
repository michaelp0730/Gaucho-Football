<?php
require '../_includes/handler-header.php';

if (!empty($_POST['wk6gm1']) && !empty($_POST['wk6gm2']) && !empty($_POST['wk6gm3']) && !empty($_POST['wk6gm4']) &&
    !empty($_POST['wk6gm5']) && !empty($_POST['wk6gm6']) && !empty($_POST['wk6gm7']) && !empty($_POST['wk6gm8']) &&
    !empty($_POST['wk6gm9']) && !empty($_POST['wk6gm10']) && !empty($_POST['wk6gm11']) && !empty($_POST['wk6gm12']) &&
    !empty($_POST['wk6gm13']) && !empty($_POST['wk6gm14']) && !empty($_POST['wk6gm15']) && !empty($_POST['wk6-tiebreaker']) &&
    !empty($_SESSION['LoggedIn']) && !empty($_SESSION['Username'])) {
    $username = $_SESSION['Username'];
    $wk6gm1 = mysql_real_escape_string($_POST['wk6gm1']);
    $wk6gm2 = mysql_real_escape_string($_POST['wk6gm2']);
    $wk6gm3 = mysql_real_escape_string($_POST['wk6gm3']);
    $wk6gm4 = mysql_real_escape_string($_POST['wk6gm4']);
    $wk6gm5 = mysql_real_escape_string($_POST['wk6gm5']);
    $wk6gm6 = mysql_real_escape_string($_POST['wk6gm6']);
    $wk6gm7 = mysql_real_escape_string($_POST['wk6gm7']);
    $wk6gm8 = mysql_real_escape_string($_POST['wk6gm8']);
    $wk6gm9 = mysql_real_escape_string($_POST['wk6gm9']);
    $wk6gm10 = mysql_real_escape_string($_POST['wk6gm10']);
    $wk6gm11 = mysql_real_escape_string($_POST['wk6gm11']);
    $wk6gm12 = mysql_real_escape_string($_POST['wk6gm12']);
    $wk6gm13 = mysql_real_escape_string($_POST['wk6gm13']);
    $wk6gm14 = mysql_real_escape_string($_POST['wk6gm14']);
    $wk6gm15 = mysql_real_escape_string($_POST['wk6gm15']);
    $tiebreaker = mysql_real_escape_string($_POST['wk6-tiebreaker']);
    $due_date = strtotime('2014-10-09T20:25:00-04:00');
    $submission_time = strtotime('now');
    $check_user_submission = mysql_query("SELECT wk6Complete FROM wk6 WHERE Username = '".$username."'");
    $submission_response_array = mysql_fetch_array($check_user_submission);

    if ($submission_response_array[0] == 1) {
        echo '<div class="alert alert-danger" role="alert"><strong>Error:</strong> You have already submitted your Week 6 picks. All submissions are final.</div>';
    } else if ($submission_time > $due_date) {
        echo '<div class="alert alert-danger" role="alert"><strong>Error:</strong> Your submission is too late. The first game of Week 6 has already started. Please try again next week.</div>';
    } else {
        $submit_wk6 = mysql_query("INSERT INTO wk6 (Username, wk6gm1, wk6gm2, wk6gm3, wk6gm4, wk6gm5, wk6gm6, wk6gm7, wk6gm8,
            wk6gm9, wk6gm10, wk6gm11, wk6gm12, wk6gm13, wk6gm14, wk6gm15, MondayTotalPoints, wk6Complete)
            VALUES('".$username."', '".$wk6gm1."', '".$wk6gm2."', '".$wk6gm3."', '".$wk6gm4."', '".$wk6gm5."', '".$wk6gm6."',
            '".$wk6gm7."', '".$wk6gm8."', '".$wk6gm9."', '".$wk6gm10."', '".$wk6gm11."', '".$wk6gm12."', '".$wk6gm13."', '".$wk6gm14."', '".$wk6gm15."', '".$tiebreaker."', true)");

        if ($submit_wk6) {
            echo '<div class="alert alert-success"><strong>Success!</strong> Your Week 6 picks have been recorded. <a href="../view-picks.php">Click here to view all picks.</a></div>';
        } else {
            echo '<div class="alert alert-danger" role="alert"><strong>Error:</strong> Your Week 6 submission has failed. <a href="../index.php">Please go back and try again.</a></div>';
        }
    }

} else {
    echo '<div class="alert alert-danger" role="alert"><strong>Error:</strong> Your selections for Week 6 are incomplete. <a href="../index.php">Please go back and try again.</a></div>';
}

include '../_includes/handler-footer.php';