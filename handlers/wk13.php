<?php
require '../_includes/handler-header.php';

if (!empty($_POST['wk13gm1']) && !empty($_POST['wk13gm2']) && !empty($_POST['wk13gm3']) &&
    !empty($_POST['wk13gm4']) && !empty($_POST['wk13gm5']) && !empty($_POST['wk13gm6']) &&
    !empty($_POST['wk13gm7']) && !empty($_POST['wk13gm8']) && !empty($_POST['wk13gm9']) &&
    !empty($_POST['wk13gm10']) && !empty($_POST['wk13gm11']) && !empty($_POST['wk13gm12']) &&
    !empty($_POST['wk13gm13']) && !empty($_POST['wk13gm14']) && !empty($_POST['wk13gm15']) &&
    !empty($_POST['wk13-tiebreaker']) && !empty($_SESSION['LoggedIn']) &&
    !empty($_SESSION['Username'])) {
    $username = $_SESSION['Username'];
    $wk13gm1 = mysql_real_escape_string($_POST['wk13gm1']);
    $wk13gm2 = mysql_real_escape_string($_POST['wk13gm2']);
    $wk13gm3 = mysql_real_escape_string($_POST['wk13gm3']);
    $wk13gm4 = mysql_real_escape_string($_POST['wk13gm4']);
    $wk13gm5 = mysql_real_escape_string($_POST['wk13gm5']);
    $wk13gm6 = mysql_real_escape_string($_POST['wk13gm6']);
    $wk13gm7 = mysql_real_escape_string($_POST['wk13gm7']);
    $wk13gm8 = mysql_real_escape_string($_POST['wk13gm8']);
    $wk13gm9 = mysql_real_escape_string($_POST['wk13gm9']);
    $wk13gm10 = mysql_real_escape_string($_POST['wk13gm10']);
    $wk13gm11 = mysql_real_escape_string($_POST['wk13gm11']);
    $wk13gm12 = mysql_real_escape_string($_POST['wk13gm12']);
    $wk13gm13 = mysql_real_escape_string($_POST['wk13gm13']);
    $wk13gm14 = mysql_real_escape_string($_POST['wk13gm14']);
    $wk13gm15 = mysql_real_escape_string($_POST['wk13gm15']);
    $tiebreaker = mysql_real_escape_string($_POST['wk13-tiebreaker']);
    $due_date = strtotime('2015-12-06T13:00:00-05:00');
    $submission_time = strtotime('now');
    $check_user_submission = mysql_query("SELECT wk13Complete FROM wk13 WHERE Username = '".$username."'");
    $submission_response_array = mysql_fetch_array($check_user_submission);

    if ($submission_response_array[0] == 1) {
        echo '<div class="alert alert-danger" role="alert"><strong>Error:</strong> You have already submitted your Week 13 picks. All submissions are final.</div>';
    } else if ($submission_time > $due_date) {
        echo '<div class="alert alert-danger" role="alert"><strong>Error:</strong> Your submission is too late. The first game of Week 13 has already started. Please try again next week.</div>';
    } else {
        $submit_wk13 = mysql_query("INSERT INTO wk13 (Username, wk13gm1, wk13gm2, wk13gm3, wk13gm4, wk13gm5, wk13gm6, wk13gm7, wk13gm8,
            wk13gm9, wk13gm10, wk13gm11, wk13gm12, wk13gm13, wk13gm14, wk13gm15, MondayTotalPoints,
            wk13Complete)
            VALUES('".$username."', '".$wk13gm1."', '".$wk13gm2."', '".$wk13gm3."', '".$wk13gm4."',
            '".$wk13gm5."', '".$wk13gm6."', '".$wk13gm7."', '".$wk13gm8."', '".$wk13gm9."',
            '".$wk13gm10."', '".$wk13gm11."', '".$wk13gm12."', '".$wk13gm13."', '".$wk13gm14."',
            '".$wk13gm15."', '".$tiebreaker."', true)");

        if ($submit_wk13) {
            echo '<div class="alert alert-success"><strong>Success!</strong> Your Week 13 picks have been recorded. <a href="../view-picks.php">Click here to view all picks.</a></div>';
        } else {
            echo '<div class="alert alert-danger" role="alert"><strong>Error:</strong> Your Week 13 submission has failed. <a href="../index.php">Please go back and try again.</a></div>';
        }
    }

} else {
    echo '<div class="alert alert-danger" role="alert"><strong>Error:</strong> Your selections for Week 13 are incomplete. <a href="../index.php">Please go back and try again.</a></div>';
}

include '../_includes/handler-footer.php';
