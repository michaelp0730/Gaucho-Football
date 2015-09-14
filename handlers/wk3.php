<?php
require '../_includes/handler-header.php';

if (!empty($_POST['wk3gm1']) && !empty($_POST['wk3gm2']) && !empty($_POST['wk3gm3']) &&
    !empty($_POST['wk3gm4']) && !empty($_POST['wk3gm5']) && !empty($_POST['wk3gm6']) &&
    !empty($_POST['wk3gm7']) && !empty($_POST['wk3gm8']) && !empty($_POST['wk3gm9']) &&
    !empty($_POST['wk3gm10']) && !empty($_POST['wk3gm11']) && !empty($_POST['wk3gm12']) &&
    !empty($_POST['wk3gm13']) && !empty($_POST['wk3gm14']) && !empty($_POST['wk3gm15']) && 
    !empty($_POST['wk3-tiebreaker']) && !empty($_SESSION['LoggedIn']) && !empty($_SESSION['Username'])) {
    $username = $_SESSION['Username'];
    $wk3gm1 = mysql_real_escape_string($_POST['wk3gm1']);
    $wk3gm2 = mysql_real_escape_string($_POST['wk3gm2']);
    $wk3gm3 = mysql_real_escape_string($_POST['wk3gm3']);
    $wk3gm4 = mysql_real_escape_string($_POST['wk3gm4']);
    $wk3gm5 = mysql_real_escape_string($_POST['wk3gm5']);
    $wk3gm6 = mysql_real_escape_string($_POST['wk3gm6']);
    $wk3gm7 = mysql_real_escape_string($_POST['wk3gm7']);
    $wk3gm8 = mysql_real_escape_string($_POST['wk3gm8']);
    $wk3gm9 = mysql_real_escape_string($_POST['wk3gm9']);
    $wk3gm10 = mysql_real_escape_string($_POST['wk3gm10']);
    $wk3gm11 = mysql_real_escape_string($_POST['wk3gm11']);
    $wk3gm12 = mysql_real_escape_string($_POST['wk3gm12']);
    $wk3gm13 = mysql_real_escape_string($_POST['wk3gm13']);
    $wk3gm14 = mysql_real_escape_string($_POST['wk3gm14']);
    $wk3gm15 = mysql_real_escape_string($_POST['wk3gm15']);
    $tiebreaker = mysql_real_escape_string($_POST['wk3-tiebreaker']);
    $due_date = strtotime('2015-09-27T13:00:00-04:00');
    $submission_time = strtotime('now');
    $check_user_submission = mysql_query("SELECT wk3Complete FROM wk3 WHERE Username = '".$username."'");
    $submission_response_array = mysql_fetch_array($check_user_submission);

    if ($submission_response_array[0] == 1) {
        echo '<div class="alert alert-danger" role="alert"><strong>Error:</strong> You have already submitted your Week 3 picks. All submissions are final.</div>';
    } else if ($submission_time > $due_date) {
        echo '<div class="alert alert-danger" role="alert"><strong>Error:</strong> Your submission is too late. The first game of Week 3 has already started. Please try again next week.</div>';
    } else {
        $submit_wk3 = mysql_query("INSERT INTO wk3 (Username, wk3gm1, wk3gm2, wk3gm3, wk3gm4,
            wk3gm5, wk3gm6, wk3gm7, wk3gm8, wk3gm9, wk3gm10, wk3gm11, wk3gm12, wk3gm13, wk3gm14, wk3gm15,
            MondayTotalPoints, wk3Complete)
            VALUES('".$username."', '".$wk3gm1."', '".$wk3gm2."', '".$wk3gm3."', '".$wk3gm4."',
            '".$wk3gm5."', '".$wk3gm6."', '".$wk3gm7."', '".$wk3gm8."', '".$wk3gm9."',
            '".$wk3gm10."', '".$wk3gm11."', '".$wk3gm12."', '".$wk3gm13."', '".$wk3gm14."', '".$wk3gm15."',
            '".$tiebreaker."', true)");

        if ($submit_wk3) {
            echo '<div class="alert alert-success"><strong>Success!</strong> Your Week 3 picks have been recorded. <a href="../view-picks.php">Click here to view all picks.</a></div>';
        } else {
            echo '<div class="alert alert-danger" role="alert"><strong>Error:</strong> Your Week 3 submission has failed. <a href="../index.php">Please go back and try again.</a></div>';
        }
    }

} else {
    echo '<div class="alert alert-danger" role="alert"><strong>Error:</strong> Your selections for Week 3 are incomplete. <a href="../index.php">Please go back and try again.</a></div>';
}

include '../_includes/handler-footer.php';
