<?php
require '../_includes/handler-header.php';

if (!empty($_POST['wk10gm1']) && !empty($_POST['wk10gm2']) && !empty($_POST['wk10gm3']) &&
    !empty($_POST['wk10gm4']) && !empty($_POST['wk10gm5']) && !empty($_POST['wk10gm6']) &&
    !empty($_POST['wk10gm7']) && !empty($_POST['wk10gm8']) && !empty($_POST['wk10gm9']) &&
    !empty($_POST['wk10gm10']) && !empty($_POST['wk10gm11']) && !empty($_POST['wk10gm12']) &&
    !empty($_POST['wk10gm13']) && !empty($_POST['wk10-tiebreaker']) &&
    !empty($_SESSION['LoggedIn']) && !empty($_SESSION['Username'])) {
    $username = $_SESSION['Username'];
    $wk10gm1 = mysql_real_escape_string($_POST['wk10gm1']);
    $wk10gm2 = mysql_real_escape_string($_POST['wk10gm2']);
    $wk10gm3 = mysql_real_escape_string($_POST['wk10gm3']);
    $wk10gm4 = mysql_real_escape_string($_POST['wk10gm4']);
    $wk10gm5 = mysql_real_escape_string($_POST['wk10gm5']);
    $wk10gm6 = mysql_real_escape_string($_POST['wk10gm6']);
    $wk10gm7 = mysql_real_escape_string($_POST['wk10gm7']);
    $wk10gm8 = mysql_real_escape_string($_POST['wk10gm8']);
    $wk10gm9 = mysql_real_escape_string($_POST['wk10gm9']);
    $wk10gm10 = mysql_real_escape_string($_POST['wk10gm10']);
    $wk10gm11 = mysql_real_escape_string($_POST['wk10gm11']);
    $wk10gm12 = mysql_real_escape_string($_POST['wk10gm12']);
    $wk10gm13 = mysql_real_escape_string($_POST['wk10gm13']);
    $tiebreaker = mysql_real_escape_string($_POST['wk10-tiebreaker']);
    $due_date = strtotime('2015-11-15T13:00:00-05:00');
    $submission_time = strtotime('now');
    $check_user_submission = mysql_query("SELECT wk10Complete FROM wk10 WHERE Username = '".$username."'");
    $submission_response_array = mysql_fetch_array($check_user_submission);

    if ($submission_response_array[0] == 1) {
        echo '<div class="alert alert-danger" role="alert"><strong>Error:</strong> You have already submitted your Week 10 picks. All submissions are final.</div>';
    } else if ($submission_time > $due_date) {
        echo '<div class="alert alert-danger" role="alert"><strong>Error:</strong> Your submission is too late. The first game of Week 10 has already started. Please try again next week.</div>';
    } else {
        $submit_wk10 = mysql_query("INSERT INTO wk10 (Username, wk10gm1, wk10gm2, wk10gm3, wk10gm4,
            wk10gm5, wk10gm6, wk10gm7, wk10gm8, wk10gm9, wk10gm10, wk10gm11, wk10gm12, wk10gm13,
            MondayTotalPoints, wk10Complete)
            VALUES('".$username."', '".$wk10gm1."', '".$wk10gm2."', '".$wk10gm3."', '".$wk10gm4."',
            '".$wk10gm5."', '".$wk10gm6."', '".$wk10gm7."', '".$wk10gm8."', '".$wk10gm9."',
            '".$wk10gm10."', '".$wk10gm11."', '".$wk10gm12."', '".$wk10gm13."', '".$tiebreaker."',
            true)");

        if ($submit_wk10) {
            echo '<div class="alert alert-success"><strong>Success!</strong> Your Week 10 picks have been recorded. <a href="../view-picks.php">Click here to view all picks.</a></div>';
        } else {
            echo '<div class="alert alert-danger" role="alert"><strong>Error:</strong> Your Week 10 submission has failed. <a href="../index.php">Please go back and try again.</a></div>';
        }
    }

} else {
    echo '<div class="alert alert-danger" role="alert"><strong>Error:</strong> Your selections for Week 10 are incomplete. <a href="../index.php">Please go back and try again.</a></div>';
}

include '../_includes/handler-footer.php';
