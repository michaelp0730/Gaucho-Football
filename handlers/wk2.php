<?php
require '../_includes/handler-header.php';

if (!empty($_POST['wk2gm1']) && !empty($_POST['wk2gm2']) && !empty($_POST['wk2gm3']) &&
    !empty($_POST['wk2gm4']) && !empty($_POST['wk2gm5']) && !empty($_POST['wk2gm6']) &&
    !empty($_POST['wk2gm7']) && !empty($_POST['wk2gm8']) && !empty($_POST['wk2gm9']) &&
    !empty($_POST['wk2gm10']) && !empty($_POST['wk2gm11']) && !empty($_POST['wk2gm12']) &&
    !empty($_POST['wk2gm13']) && !empty($_POST['wk2gm14']) && !empty($_POST['wk2gm15']) &&
    !empty($_POST['wk2-tiebreaker']) && !empty($_SESSION['LoggedIn']) &&
    !empty($_SESSION['Username'])) {
    $username = $_SESSION['Username'];
    $wk2gm1 = mysql_real_escape_string($_POST['wk2gm1']);
    $wk2gm2 = mysql_real_escape_string($_POST['wk2gm2']);
    $wk2gm3 = mysql_real_escape_string($_POST['wk2gm3']);
    $wk2gm4 = mysql_real_escape_string($_POST['wk2gm4']);
    $wk2gm5 = mysql_real_escape_string($_POST['wk2gm5']);
    $wk2gm6 = mysql_real_escape_string($_POST['wk2gm6']);
    $wk2gm7 = mysql_real_escape_string($_POST['wk2gm7']);
    $wk2gm8 = mysql_real_escape_string($_POST['wk2gm8']);
    $wk2gm9 = mysql_real_escape_string($_POST['wk2gm9']);
    $wk2gm10 = mysql_real_escape_string($_POST['wk2gm10']);
    $wk2gm11 = mysql_real_escape_string($_POST['wk2gm11']);
    $wk2gm12 = mysql_real_escape_string($_POST['wk2gm12']);
    $wk2gm13 = mysql_real_escape_string($_POST['wk2gm13']);
    $wk2gm14 = mysql_real_escape_string($_POST['wk2gm14']);
    $wk2gm15 = mysql_real_escape_string($_POST['wk2gm15']);
    $tiebreaker = mysql_real_escape_string($_POST['wk2-tiebreaker']);
    $due_date = strtotime('2015-09-20T13:00:00-04:00');
    $submission_time = strtotime('now');
    $check_user_submission = mysql_query("SELECT wk2Complete FROM wk2 WHERE Username = '".$username."'");
    $submission_response_array = mysql_fetch_array($check_user_submission);

    if ($submission_response_array[0] == 1) {
        echo '<div class="alert alert-danger" role="alert"><strong>Error:</strong> You have already submitted your Week 2 picks. All submissions are final.</div>';
    } else if ($submission_time > $due_date) {
        echo '<div class="alert alert-danger" role="alert"><strong>Error:</strong> Your submission is too late. The first game of Week 2 has already started. Please try again next week.</div>';
    } else {
        $submit_wk2 = mysql_query("INSERT INTO wk2 (Username, wk2gm1, wk2gm2, wk2gm3, wk2gm4,
            wk2gm5, wk2gm6, wk2gm7, wk2gm8, wk2gm9, wk2gm10, wk2gm11, wk2gm12, wk2gm13, wk2gm14,
            wk2gm15, MondayTotalPoints, wk2Complete)
            VALUES('".$username."', '".$wk2gm1."', '".$wk2gm2."', '".$wk2gm3."', '".$wk2gm4."',
            '".$wk2gm5."', '".$wk2gm6."', '".$wk2gm7."', '".$wk2gm8."', '".$wk2gm9."',
            '".$wk2gm10."', '".$wk2gm11."', '".$wk2gm12."', '".$wk2gm13."', '".$wk2gm14."',
            '".$wk2gm15."', '".$tiebreaker."', true)");

        if ($submit_wk2) {
            echo '<div class="alert alert-success"><strong>Success!</strong> Your Week 2 picks have been recorded. <a href="../view-picks.php">Click here to view all picks.</a></div>';
        } else {
            echo '<div class="alert alert-danger" role="alert"><strong>Error:</strong> Your Week 2 submission has failed. <a href="../index.php">Please go back and try again.</a></div>';
        }
    }

} else {
    echo '<div class="alert alert-danger" role="alert"><strong>Error:</strong> Your selections for Week 2 are incomplete. <a href="../index.php">Please go back and try again.</a></div>';
}

include '../_includes/handler-footer.php';
