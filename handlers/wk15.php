<?php
require '../_includes/handler-header.php';

if (!empty($_POST['wk15gm1']) && !empty($_POST['wk15gm2']) && !empty($_POST['wk15gm3']) && !empty($_POST['wk15gm4']) &&
    !empty($_POST['wk15gm5']) && !empty($_POST['wk15gm6']) && !empty($_POST['wk15gm7']) && !empty($_POST['wk15gm8']) &&
    !empty($_POST['wk15gm9']) && !empty($_POST['wk15gm10']) && !empty($_POST['wk15gm11']) && !empty($_POST['wk15gm12']) &&
    !empty($_POST['wk15gm13']) && !empty($_POST['wk15gm14']) && !empty($_POST['wk15gm15']) && !empty($_POST['wk15gm16']) &&
    !empty($_POST['wk15-tiebreaker']) && !empty($_SESSION['LoggedIn']) && !empty($_SESSION['Username'])) {
    $username = $_SESSION['Username'];
    $wk15gm1 = mysql_real_escape_string($_POST['wk15gm1']);
    $wk15gm2 = mysql_real_escape_string($_POST['wk15gm2']);
    $wk15gm3 = mysql_real_escape_string($_POST['wk15gm3']);
    $wk15gm4 = mysql_real_escape_string($_POST['wk15gm4']);
    $wk15gm5 = mysql_real_escape_string($_POST['wk15gm5']);
    $wk15gm6 = mysql_real_escape_string($_POST['wk15gm6']);
    $wk15gm7 = mysql_real_escape_string($_POST['wk15gm7']);
    $wk15gm8 = mysql_real_escape_string($_POST['wk15gm8']);
    $wk15gm9 = mysql_real_escape_string($_POST['wk15gm9']);
    $wk15gm10 = mysql_real_escape_string($_POST['wk15gm10']);
    $wk15gm11 = mysql_real_escape_string($_POST['wk15gm11']);
    $wk15gm12 = mysql_real_escape_string($_POST['wk15gm12']);
    $wk15gm13 = mysql_real_escape_string($_POST['wk15gm13']);
    $wk15gm14 = mysql_real_escape_string($_POST['wk15gm14']);
    $wk15gm15 = mysql_real_escape_string($_POST['wk15gm15']);
    $wk15gm16 = mysql_real_escape_string($_POST['wk15gm16']);
    $tiebreaker = mysql_real_escape_string($_POST['wk15-tiebreaker']);
    $due_date = strtotime('2014-12-11T20:25:00-04:00');
    $submission_time = strtotime('now');
    $check_user_submission = mysql_query("SELECT wk15Complete FROM wk15 WHERE Username = '".$username."'");
    $submission_response_array = mysql_fetch_array($check_user_submission);

    if ($submission_response_array[0] == 1) {
        echo '<div class="alert alert-danger" role="alert"><strong>Error:</strong> You have already submitted your Week 15 picks. All submissions are final.</div>';
    } else if ($submission_time > $due_date) {
        echo '<div class="alert alert-danger" role="alert"><strong>Error:</strong> Your submission is too late. The first game of Week 15 has already started. Please try again next week.</div>';
    } else {
        $submit_wk15 = mysql_query("INSERT INTO wk15 (Username, wk15gm1, wk15gm2, wk15gm3, wk15gm4, wk15gm5, wk15gm6, wk15gm7, wk15gm8,
            wk15gm9, wk15gm10, wk15gm11, wk15gm12, wk15gm13, wk15gm14, wk15gm15, wk15gm16, MondayTotalPoints, wk15Complete)
            VALUES('".$username."', '".$wk15gm1."', '".$wk15gm2."', '".$wk15gm3."', '".$wk15gm4."', '".$wk15gm5."', '".$wk15gm6."',
            '".$wk15gm7."', '".$wk15gm8."', '".$wk15gm9."', '".$wk15gm10."', '".$wk15gm11."', '".$wk15gm12."', '".$wk15gm13."', '".$wk15gm14."', '".$wk15gm15."',
            '".$wk15gm16."', '".$tiebreaker."', true)");

        if ($submit_wk15) {
            echo '<div class="alert alert-success"><strong>Success!</strong> Your Week 15 picks have been recorded. <a href="../view-picks.php">Click here to view all picks.</a></div>';
        } else {
            echo '<div class="alert alert-danger" role="alert"><strong>Error:</strong> Your Week 15 submission has failed. <a href="../index.php">Please go back and try again.</a></div>';
        }
    }

} else {
    echo '<div class="alert alert-danger" role="alert"><strong>Error:</strong> Your selections for Week 15 are incomplete. <a href="../index.php">Please go back and try again.</a></div>';
}

include '../_includes/handler-footer.php';