<?php
require '../_includes/handler-header.php';

if (!empty($_POST['wk5gm1']) && !empty($_POST['wk5gm2']) && !empty($_POST['wk5gm3']) &&
    !empty($_POST['wk5gm4']) && !empty($_POST['wk5gm5']) && !empty($_POST['wk5gm6']) &&
    !empty($_POST['wk5gm7']) && !empty($_POST['wk5gm8']) && !empty($_POST['wk5gm9']) &&
    !empty($_POST['wk5gm10']) && !empty($_POST['wk5gm11']) && !empty($_POST['wk5gm12']) &&
    !empty($_POST['wk5gm13']) && !empty($_POST['wk5-tiebreaker']) && !empty($_SESSION['LoggedIn']) &&
    !empty($_SESSION['Username'])) {
    $username = $_SESSION['Username'];
    $wk5gm1 = mysql_real_escape_string($_POST['wk5gm1']);
    $wk5gm2 = mysql_real_escape_string($_POST['wk5gm2']);
    $wk5gm3 = mysql_real_escape_string($_POST['wk5gm3']);
    $wk5gm4 = mysql_real_escape_string($_POST['wk5gm4']);
    $wk5gm5 = mysql_real_escape_string($_POST['wk5gm5']);
    $wk5gm6 = mysql_real_escape_string($_POST['wk5gm6']);
    $wk5gm7 = mysql_real_escape_string($_POST['wk5gm7']);
    $wk5gm8 = mysql_real_escape_string($_POST['wk5gm8']);
    $wk5gm9 = mysql_real_escape_string($_POST['wk5gm9']);
    $wk5gm10 = mysql_real_escape_string($_POST['wk5gm10']);
    $wk5gm11 = mysql_real_escape_string($_POST['wk5gm11']);
    $wk5gm12 = mysql_real_escape_string($_POST['wk5gm12']);
    $wk5gm13 = mysql_real_escape_string($_POST['wk5gm13']);
    $tiebreaker = mysql_real_escape_string($_POST['wk5-tiebreaker']);
    $due_date = strtotime('2014-10-02T20:25:00-04:00');
    $submission_time = strtotime('now');
    $check_user_submission = mysql_query("SELECT wk5Complete FROM wk5 WHERE Username = '".$username."'");
    $submission_response_array = mysql_fetch_array($check_user_submission);

    if ($submission_response_array[0] == 1) {
        echo '<div class="alert alert-danger" role="alert"><strong>Error:</strong> You have already submitted your Week 5 picks. All submissions are final.</div>';
    } else if ($submission_time > $due_date) {
        echo '<div class="alert alert-danger" role="alert"><strong>Error:</strong> Your submission is too late. The first game of Week 5 has already started. Please try again next week.</div>';
    } else {
        $submit_wk5 = mysql_query("INSERT INTO wk5 (Username, wk5gm1, wk5gm2, wk5gm3, wk5gm4,
            wk5gm5, wk5gm6, wk5gm7, wk5gm8, wk5gm9, wk5gm10, wk5gm11, wk5gm12, wk5gm13,
            MondayTotalPoints, wk5Complete)
            VALUES('".$username."', '".$wk5gm1."', '".$wk5gm2."', '".$wk5gm3."', '".$wk5gm4."',
            '".$wk5gm5."', '".$wk5gm6."', '".$wk5gm7."', '".$wk5gm8."', '".$wk5gm9."',
            '".$wk5gm10."', '".$wk5gm11."', '".$wk5gm12."', '".$wk5gm13."', '".$tiebreaker."',
            true)");

        if ($submit_wk5) {
            echo '<div class="alert alert-success"><strong>Success!</strong> Your Week 5 picks have been recorded. <a href="../view-picks.php">Click here to view all picks.</a></div>';
        } else {
            echo '<div class="alert alert-danger" role="alert"><strong>Error:</strong> Your Week 5 submission has failed. <a href="../index.php">Please go back and try again.</a></div>';
        }
    }

} else {
    echo '<div class="alert alert-danger" role="alert"><strong>Error:</strong> Your selections for Week 5 are incomplete. <a href="../index.php">Please go back and try again.</a></div>';
}

include '../_includes/handler-footer.php';
