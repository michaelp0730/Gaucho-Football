<?php
require '../_includes/handler-header.php';

if (!empty($_POST['wk12gm1']) && !empty($_POST['wk12gm2']) && !empty($_POST['wk12gm3']) && !empty($_POST['wk12gm4']) &&
    !empty($_POST['wk12gm5']) && !empty($_POST['wk12gm6']) && !empty($_POST['wk12gm7']) && !empty($_POST['wk12gm8']) &&
    !empty($_POST['wk12gm9']) && !empty($_POST['wk12gm10']) && !empty($_POST['wk12gm11']) && !empty($_POST['wk12gm12']) &&
    !empty($_POST['wk12gm13']) && !empty($_POST['wk12gm14']) && !empty($_POST['wk12gm15']) && !empty($_POST['wk12-tiebreaker']) &&
    !empty($_SESSION['LoggedIn']) && !empty($_SESSION['Username'])) {
    $username = $_SESSION['Username'];
    $wk12gm1 = mysql_real_escape_string($_POST['wk12gm1']);
    $wk12gm2 = mysql_real_escape_string($_POST['wk12gm2']);
    $wk12gm3 = mysql_real_escape_string($_POST['wk12gm3']);
    $wk12gm4 = mysql_real_escape_string($_POST['wk12gm4']);
    $wk12gm5 = mysql_real_escape_string($_POST['wk12gm5']);
    $wk12gm6 = mysql_real_escape_string($_POST['wk12gm6']);
    $wk12gm7 = mysql_real_escape_string($_POST['wk12gm7']);
    $wk12gm8 = mysql_real_escape_string($_POST['wk12gm8']);
    $wk12gm9 = mysql_real_escape_string($_POST['wk12gm9']);
    $wk12gm10 = mysql_real_escape_string($_POST['wk12gm10']);
    $wk12gm11 = mysql_real_escape_string($_POST['wk12gm11']);
    $wk12gm12 = mysql_real_escape_string($_POST['wk12gm12']);
    $wk12gm13 = mysql_real_escape_string($_POST['wk12gm13']);
    $wk12gm14 = mysql_real_escape_string($_POST['wk12gm14']);
    $wk12gm15 = mysql_real_escape_string($_POST['wk12gm15']);
    $tiebreaker = mysql_real_escape_string($_POST['wk12-tiebreaker']);
    $due_date = strtotime('2014-11-20T20:25:00-04:00');
    $submission_time = strtotime('now');
    $check_user_submission = mysql_query("SELECT * FROM wk12 WHERE Username = '".$username."'");

    if ($submission_time > $due_date) {
        echo '<div class="alert alert-danger" role="alert"><strong>Error:</strong> Your submission is too late. The first game of Week 12 has already started. Please try again next week.</div>';
    } else {
        $submit_wk12 = mysql_query("INSERT INTO wk12 (Username, wk12gm1, wk12gm2, wk12gm3, wk12gm4, wk12gm5, wk12gm6, wk12gm7, wk12gm8,
            wk12gm9, wk12gm10, wk12gm11, wk12gm12, wk12gm13, wk12gm14, wk12gm15, MondayTotalPoints, wk12Complete)
            VALUES('".$username."', '".$wk12gm1."', '".$wk12gm2."', '".$wk12gm3."', '".$wk12gm4."', '".$wk12gm5."', '".$wk12gm6."',
            '".$wk12gm7."', '".$wk12gm8."', '".$wk12gm9."', '".$wk12gm10."', '".$wk12gm11."', '".$wk12gm12."', '".$wk12gm13."', '".$wk12gm14."', '".$wk12gm15."', '".$tiebreaker."', true)");

        if ($submit_wk12) {
            echo '<div class="alert alert-success"><strong>Success!</strong> Your Week 12 picks have been recorded. <a href="../view-picks.php">Click here to view all picks.</a></div>';
        } else {
            echo '<div class="alert alert-danger" role="alert"><strong>Error:</strong> Your Week 12 submission has failed. <a href="../index.php">Please go back and try again.</a></div>';
        }
    }

} else {
    echo '<div class="alert alert-danger" role="alert"><strong>Error:</strong> Your selections for Week 12 are incomplete. <a href="../index.php">Please go back and try again.</a></div>';
}

include '../_includes/handler-footer.php';