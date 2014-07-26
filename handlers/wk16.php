<?php
require '../_includes/handler-header.php';

if (!empty($_POST['wk16gm1']) && !empty($_POST['wk16gm2']) && !empty($_POST['wk16gm3']) && !empty($_POST['wk16gm4']) &&
    !empty($_POST['wk16gm5']) && !empty($_POST['wk16gm6']) && !empty($_POST['wk16gm7']) && !empty($_POST['wk16gm8']) &&
    !empty($_POST['wk16gm9']) && !empty($_POST['wk16gm10']) && !empty($_POST['wk16gm11']) && !empty($_POST['wk16gm12']) &&
    !empty($_POST['wk16gm13']) && !empty($_POST['wk16gm14']) && !empty($_POST['wk16gm15']) && !empty($_POST['wk16gm16']) &&
    !empty($_POST['wk16-tiebreaker']) && !empty($_SESSION['LoggedIn']) && !empty($_SESSION['Username'])) {
    $username = $_SESSION['Username'];
    $wk16gm1 = mysql_real_escape_string($_POST['wk16gm1']);
    $wk16gm2 = mysql_real_escape_string($_POST['wk16gm2']);
    $wk16gm3 = mysql_real_escape_string($_POST['wk16gm3']);
    $wk16gm4 = mysql_real_escape_string($_POST['wk16gm4']);
    $wk16gm5 = mysql_real_escape_string($_POST['wk16gm5']);
    $wk16gm6 = mysql_real_escape_string($_POST['wk16gm6']);
    $wk16gm7 = mysql_real_escape_string($_POST['wk16gm7']);
    $wk16gm8 = mysql_real_escape_string($_POST['wk16gm8']);
    $wk16gm9 = mysql_real_escape_string($_POST['wk16gm9']);
    $wk16gm10 = mysql_real_escape_string($_POST['wk16gm10']);
    $wk16gm11 = mysql_real_escape_string($_POST['wk16gm11']);
    $wk16gm12 = mysql_real_escape_string($_POST['wk16gm12']);
    $wk16gm13 = mysql_real_escape_string($_POST['wk16gm13']);
    $wk16gm14 = mysql_real_escape_string($_POST['wk16gm14']);
    $wk16gm15 = mysql_real_escape_string($_POST['wk16gm15']);
    $wk16gm16 = mysql_real_escape_string($_POST['wk16gm16']);
    $tiebreaker = mysql_real_escape_string($_POST['wk16-tiebreaker']);
    $due_date = strtotime('2014-12-18T20:25:00-04:00');
    $submission_time = strtotime('now');
    $check_user_submission = mysql_query("SELECT wk16Complete FROM wk16 WHERE Username = '".$username."'");
    $submission_response_array = mysql_fetch_array($check_user_submission);

    if ($submission_response_array[0] == 1) {
        echo '<div class="alert alert-danger" role="alert"><strong>Error:</strong> You have already submitted your Week 16 picks. All submissions are final.</div>';
    } else if ($submission_time > $due_date) {
        echo '<div class="alert alert-danger" role="alert"><strong>Error:</strong> Your submission is too late. The first game of Week 16 has already started. Please try again next week.</div>';
    } else {
        $submit_wk16 = mysql_query("INSERT INTO wk16 (Username, wk16gm1, wk16gm2, wk16gm3, wk16gm4, wk16gm5, wk16gm6, wk16gm7, wk16gm8,
            wk16gm9, wk16gm10, wk16gm11, wk16gm12, wk16gm13, wk16gm14, wk16gm15, wk16gm16, MondayTotalPoints, wk16Complete)
            VALUES('".$username."', '".$wk16gm1."', '".$wk16gm2."', '".$wk16gm3."', '".$wk16gm4."', '".$wk16gm5."', '".$wk16gm6."',
            '".$wk16gm7."', '".$wk16gm8."', '".$wk16gm9."', '".$wk16gm10."', '".$wk16gm11."', '".$wk16gm12."', '".$wk16gm13."', '".$wk16gm14."', '".$wk16gm15."',
            '".$wk16gm16."', '".$tiebreaker."', true)");

        if ($submit_wk16) {
            echo '<div class="alert alert-success"><strong>Success!</strong> Your Week 16 picks have been recorded. <a href="../view-picks.php">Click here to view all picks.</a></div>';
        } else {
            echo '<div class="alert alert-danger" role="alert"><strong>Error:</strong> Your Week 16 submission has failed. <a href="../index.php">Please go back and try again.</a></div>';
        }
    }

} else {
    echo '<div class="alert alert-danger" role="alert"><strong>Error:</strong> Your selections for Week 16 are incomplete. <a href="../index.php">Please go back and try again.</a></div>';
}

include '../_includes/handler-footer.php';