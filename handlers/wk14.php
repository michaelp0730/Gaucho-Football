<?php
require '../_includes/handler-header.php';

if (!empty($_POST['wk14gm1']) && !empty($_POST['wk14gm2']) && !empty($_POST['wk14gm3']) && !empty($_POST['wk14gm4']) &&
    !empty($_POST['wk14gm5']) && !empty($_POST['wk14gm6']) && !empty($_POST['wk14gm7']) && !empty($_POST['wk14gm8']) &&
    !empty($_POST['wk14gm9']) && !empty($_POST['wk14gm10']) && !empty($_POST['wk14gm11']) && !empty($_POST['wk14gm12']) &&
    !empty($_POST['wk14gm13']) && !empty($_POST['wk14gm14']) && !empty($_POST['wk14gm15']) && !empty($_POST['wk14gm16']) &&
    !empty($_POST['wk14-tiebreaker']) && !empty($_SESSION['LoggedIn']) && !empty($_SESSION['Username'])) {
    $username = $_SESSION['Username'];
    $wk14gm1 = mysql_real_escape_string($_POST['wk14gm1']);
    $wk14gm2 = mysql_real_escape_string($_POST['wk14gm2']);
    $wk14gm3 = mysql_real_escape_string($_POST['wk14gm3']);
    $wk14gm4 = mysql_real_escape_string($_POST['wk14gm4']);
    $wk14gm5 = mysql_real_escape_string($_POST['wk14gm5']);
    $wk14gm6 = mysql_real_escape_string($_POST['wk14gm6']);
    $wk14gm7 = mysql_real_escape_string($_POST['wk14gm7']);
    $wk14gm8 = mysql_real_escape_string($_POST['wk14gm8']);
    $wk14gm9 = mysql_real_escape_string($_POST['wk14gm9']);
    $wk14gm10 = mysql_real_escape_string($_POST['wk14gm10']);
    $wk14gm11 = mysql_real_escape_string($_POST['wk14gm11']);
    $wk14gm12 = mysql_real_escape_string($_POST['wk14gm12']);
    $wk14gm13 = mysql_real_escape_string($_POST['wk14gm13']);
    $wk14gm14 = mysql_real_escape_string($_POST['wk14gm14']);
    $wk14gm15 = mysql_real_escape_string($_POST['wk14gm15']);
    $wk14gm16 = mysql_real_escape_string($_POST['wk14gm16']);
    $tiebreaker = mysql_real_escape_string($_POST['wk14-tiebreaker']);
    $due_date = strtotime('2014-12-04T20:25:00-04:00');
    $submission_time = strtotime('now');
    $check_user_submission = mysql_query("SELECT * FROM wk14 WHERE Username = '".$username."'");

    if ($submission_time > $due_date) {
        echo '<div class="alert alert-danger" role="alert"><strong>Error:</strong> Your submission is too late. The first game of Week 14 has already started. Please try again next week.</div>';
    } else {
        $submit_wk14 = mysql_query("INSERT INTO wk14 (Username, wk14gm1, wk14gm2, wk14gm3, wk14gm4, wk14gm5, wk14gm6, wk14gm7, wk14gm8,
            wk14gm9, wk14gm10, wk14gm11, wk14gm12, wk14gm13, wk14gm14, wk14gm15, wk14gm16, MondayTotalPoints, wk14Complete)
            VALUES('".$username."', '".$wk14gm1."', '".$wk14gm2."', '".$wk14gm3."', '".$wk14gm4."', '".$wk14gm5."', '".$wk14gm6."',
            '".$wk14gm7."', '".$wk14gm8."', '".$wk14gm9."', '".$wk14gm10."', '".$wk14gm11."', '".$wk14gm12."', '".$wk14gm13."', '".$wk14gm14."', '".$wk14gm15."',
            '".$wk14gm16."', '".$tiebreaker."', true)");

        if ($submit_wk14) {
            echo '<div class="alert alert-success"><strong>Success!</strong> Your Week 14 picks have been recorded. <a href="../view-picks.php">Click here to view all picks.</a></div>';
        } else {
            echo '<div class="alert alert-danger" role="alert"><strong>Error:</strong> Your Week 14 submission has failed. <a href="../index.php">Please go back and try again.</a></div>';
        }
    }

} else {
    echo '<div class="alert alert-danger" role="alert"><strong>Error:</strong> Your selections for Week 14 are incomplete. <a href="../index.php">Please go back and try again.</a></div>';
}

include '../_includes/handler-footer.php';