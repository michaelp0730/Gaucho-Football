<?php
require '../_includes/handler-header.php';

if (!empty($_POST['wk11gm1']) && !empty($_POST['wk11gm2']) && !empty($_POST['wk11gm3']) && !empty($_POST['wk11gm4']) &&
    !empty($_POST['wk11gm5']) && !empty($_POST['wk11gm6']) && !empty($_POST['wk11gm7']) && !empty($_POST['wk11gm8']) &&
    !empty($_POST['wk11gm9']) && !empty($_POST['wk11gm10']) && !empty($_POST['wk11gm11']) && !empty($_POST['wk11gm12']) &&
    !empty($_POST['wk11gm13']) && !empty($_POST['wk11gm14']) && !empty($_POST['wk11-tiebreaker']) && !empty($_SESSION['LoggedIn']) && !empty($_SESSION['Username'])) {
    $username = $_SESSION['Username'];
    $wk11gm1 = mysql_real_escape_string($_POST['wk11gm1']);
    $wk11gm2 = mysql_real_escape_string($_POST['wk11gm2']);
    $wk11gm3 = mysql_real_escape_string($_POST['wk11gm3']);
    $wk11gm4 = mysql_real_escape_string($_POST['wk11gm4']);
    $wk11gm5 = mysql_real_escape_string($_POST['wk11gm5']);
    $wk11gm6 = mysql_real_escape_string($_POST['wk11gm6']);
    $wk11gm7 = mysql_real_escape_string($_POST['wk11gm7']);
    $wk11gm8 = mysql_real_escape_string($_POST['wk11gm8']);
    $wk11gm9 = mysql_real_escape_string($_POST['wk11gm9']);
    $wk11gm10 = mysql_real_escape_string($_POST['wk11gm10']);
    $wk11gm11 = mysql_real_escape_string($_POST['wk11gm11']);
    $wk11gm12 = mysql_real_escape_string($_POST['wk11gm12']);
    $wk11gm13 = mysql_real_escape_string($_POST['wk11gm13']);
    $wk11gm14 = mysql_real_escape_string($_POST['wk11gm14']);
    $tiebreaker = mysql_real_escape_string($_POST['wk11-tiebreaker']);
    $due_date = strtotime('2014-11-13T20:25:00-05:00');
    $submission_time = strtotime('now');
    $check_user_submission = mysql_query("SELECT wk11Complete FROM wk11 WHERE Username = '".$username."'");
    $submission_response_array = mysql_fetch_array($check_user_submission);

    if ($submission_response_array[0] == 1) {
        echo '<div class="alert alert-danger" role="alert"><strong>Error:</strong> You have already submitted your Week 11 picks. All submissions are final.</div>';
    } else if ($submission_time > $due_date) {
        echo '<div class="alert alert-danger" role="alert"><strong>Error:</strong> Your submission is too late. The first game of Week 11 has already started. Please try again next week.</div>';
    } else {
        $submit_wk11 = mysql_query("INSERT INTO wk11 (Username, wk11gm1, wk11gm2, wk11gm3, wk11gm4, wk11gm5, wk11gm6, wk11gm7, wk11gm8,
            wk11gm9, wk11gm10, wk11gm11, wk11gm12, wk11gm13, wk11gm14, MondayTotalPoints, wk11Complete)
            VALUES('".$username."', '".$wk11gm1."', '".$wk11gm2."', '".$wk11gm3."', '".$wk11gm4."', '".$wk11gm5."', '".$wk11gm6."',
            '".$wk11gm7."', '".$wk11gm8."', '".$wk11gm9."', '".$wk11gm10."', '".$wk11gm11."', '".$wk11gm12."', '".$wk11gm13."', '".$wk11gm14."', '".$tiebreaker."', true)");

        if ($submit_wk11) {
            echo '<div class="alert alert-success"><strong>Success!</strong> Your Week 11 picks have been recorded. <a href="../view-picks.php">Click here to view all picks.</a></div>';
        } else {
            echo '<div class="alert alert-danger" role="alert"><strong>Error:</strong> Your Week 11 submission has failed. <a href="../index.php">Please go back and try again.</a></div>';
        }
    }

} else {
    echo '<div class="alert alert-danger" role="alert"><strong>Error:</strong> Your selections for Week 11 are incomplete. <a href="../index.php">Please go back and try again.</a></div>';
}

include '../_includes/handler-footer.php';
