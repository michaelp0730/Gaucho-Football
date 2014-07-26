<?php
require '../_includes/handler-header.php';

if (!empty($_POST['wk9gm1']) && !empty($_POST['wk9gm2']) && !empty($_POST['wk9gm3']) && !empty($_POST['wk9gm4']) &&
    !empty($_POST['wk9gm5']) && !empty($_POST['wk9gm6']) && !empty($_POST['wk9gm7']) && !empty($_POST['wk9gm8']) &&
    !empty($_POST['wk9gm9']) && !empty($_POST['wk9gm10']) && !empty($_POST['wk9gm11']) && !empty($_POST['wk9gm12']) &&
    !empty($_POST['wk9gm13']) && !empty($_POST['wk9-tiebreaker']) && !empty($_SESSION['LoggedIn']) && !empty($_SESSION['Username'])) {
    $username = $_SESSION['Username'];
    $wk9gm1 = mysql_real_escape_string($_POST['wk9gm1']);
    $wk9gm2 = mysql_real_escape_string($_POST['wk9gm2']);
    $wk9gm3 = mysql_real_escape_string($_POST['wk9gm3']);
    $wk9gm4 = mysql_real_escape_string($_POST['wk9gm4']);
    $wk9gm5 = mysql_real_escape_string($_POST['wk9gm5']);
    $wk9gm6 = mysql_real_escape_string($_POST['wk9gm6']);
    $wk9gm7 = mysql_real_escape_string($_POST['wk9gm7']);
    $wk9gm8 = mysql_real_escape_string($_POST['wk9gm8']);
    $wk9gm9 = mysql_real_escape_string($_POST['wk9gm9']);
    $wk9gm10 = mysql_real_escape_string($_POST['wk9gm10']);
    $wk9gm11 = mysql_real_escape_string($_POST['wk9gm11']);
    $wk9gm12 = mysql_real_escape_string($_POST['wk9gm12']);
    $wk9gm13 = mysql_real_escape_string($_POST['wk9gm13']);
    $tiebreaker = mysql_real_escape_string($_POST['wk9-tiebreaker']);
    $due_date = strtotime('2014-10-30T20:25:00-04:00');
    $submission_time = strtotime('now');
    $check_user_submission = mysql_query("SELECT wk9Complete FROM wk9 WHERE Username = '".$username."'");
    $submission_response_array = mysql_fetch_array($check_user_submission);

    if ($submission_response_array[0] == 1) {
        echo '<div class="alert alert-danger" role="alert"><strong>Error:</strong> You have already submitted your Week 9 picks. All submissions are final.</div>';
    } else if ($submission_time > $due_date) {
        echo '<div class="alert alert-danger" role="alert"><strong>Error:</strong> Your submission is too late. The first game of Week 9 has already started. Please try again next week.</div>';
    } else {
        $submit_wk9 = mysql_query("INSERT INTO wk9 (Username, wk9gm1, wk9gm2, wk9gm3, wk9gm4, wk9gm5, wk9gm6, wk9gm7, wk9gm8,
            wk9gm9, wk9gm10, wk9gm11, wk9gm12, wk9gm13, MondayTotalPoints, wk9Complete)
            VALUES('".$username."', '".$wk9gm1."', '".$wk9gm2."', '".$wk9gm3."', '".$wk9gm4."', '".$wk9gm5."', '".$wk9gm6."',
            '".$wk9gm7."', '".$wk9gm8."', '".$wk9gm9."', '".$wk9gm10."', '".$wk9gm11."', '".$wk9gm12."', '".$wk9gm13."', '".$tiebreaker."', true)");

        if ($submit_wk9) {
            echo '<div class="alert alert-success"><strong>Success!</strong> Your Week 9 picks have been recorded. <a href="../view-picks.php">Click here to view all picks.</a></div>';
        } else {
            echo '<div class="alert alert-danger" role="alert"><strong>Error:</strong> Your Week 9 submission has failed. <a href="../index.php">Please go back and try again.</a></div>';
        }
    }

} else {
    echo '<div class="alert alert-danger" role="alert"><strong>Error:</strong> Your selections for Week 9 are incomplete. <a href="../index.php">Please go back and try again.</a></div>';
}

include '../_includes/handler-footer.php';