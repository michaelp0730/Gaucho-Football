<?php
require '../_includes/handler-header.php';

if (!empty($_POST['wk17gm1']) && !empty($_POST['wk17gm2']) && !empty($_POST['wk17gm3']) && !empty($_POST['wk17gm4']) &&
    !empty($_POST['wk17gm5']) && !empty($_POST['wk17gm6']) && !empty($_POST['wk17gm7']) && !empty($_POST['wk17gm8']) &&
    !empty($_POST['wk17gm9']) && !empty($_POST['wk17gm10']) && !empty($_POST['wk17gm11']) && !empty($_POST['wk17gm12']) &&
    !empty($_POST['wk17gm13']) && !empty($_POST['wk17gm14']) && !empty($_POST['wk17gm15']) && !empty($_POST['wk17gm16']) &&
    !empty($_POST['wk17gm17']) && !empty($_POST['wk17-tiebreaker']) && !empty($_SESSION['LoggedIn']) && !empty($_SESSION['Username'])) {
    $username = $_SESSION['Username'];
    $wk17gm1 = mysql_real_escape_string($_POST['wk17gm1']);
    $wk17gm2 = mysql_real_escape_string($_POST['wk17gm2']);
    $wk17gm3 = mysql_real_escape_string($_POST['wk17gm3']);
    $wk17gm4 = mysql_real_escape_string($_POST['wk17gm4']);
    $wk17gm5 = mysql_real_escape_string($_POST['wk17gm5']);
    $wk17gm6 = mysql_real_escape_string($_POST['wk17gm6']);
    $wk17gm7 = mysql_real_escape_string($_POST['wk17gm7']);
    $wk17gm8 = mysql_real_escape_string($_POST['wk17gm8']);
    $wk17gm9 = mysql_real_escape_string($_POST['wk17gm9']);
    $wk17gm10 = mysql_real_escape_string($_POST['wk17gm10']);
    $wk17gm11 = mysql_real_escape_string($_POST['wk17gm11']);
    $wk17gm12 = mysql_real_escape_string($_POST['wk17gm12']);
    $wk17gm13 = mysql_real_escape_string($_POST['wk17gm13']);
    $wk17gm14 = mysql_real_escape_string($_POST['wk17gm14']);
    $wk17gm15 = mysql_real_escape_string($_POST['wk17gm15']);
    $wk17gm16 = mysql_real_escape_string($_POST['wk17gm16']);
    $wk17gm17 = mysql_real_escape_string($_POST['wk17gm17']);
    $tiebreaker = mysql_real_escape_string($_POST['wk17-tiebreaker']);
    $due_date = strtotime('2014-12-28T13:00:00-04:00');
    $submission_time = strtotime('now');
    $check_user_submission = mysql_query("SELECT * FROM wk17 WHERE Username = '".$username."'");

    if ($submission_time > $due_date) {
        echo '<div class="alert alert-danger" role="alert"><strong>Error:</strong> Your submission is too late. The first game of Week 17 has already started. Please try again next week.</div>';
    } else {
        $submit_wk17 = mysql_query("INSERT INTO wk17 (Username, wk17gm1, wk17gm2, wk17gm3, wk17gm4, wk17gm5, wk17gm6, wk17gm7, wk17gm8,
            wk17gm9, wk17gm10, wk17gm11, wk17gm12, wk17gm13, wk17gm14, wk17gm15, wk17gm16, wk17gm17, MondayTotalPoints, wk17Complete)
            VALUES('".$username."', '".$wk17gm1."', '".$wk17gm2."', '".$wk17gm3."', '".$wk17gm4."', '".$wk17gm5."', '".$wk17gm6."',
            '".$wk17gm7."', '".$wk17gm8."', '".$wk17gm9."', '".$wk17gm10."', '".$wk17gm11."', '".$wk17gm12."', '".$wk17gm13."', '".$wk17gm14."', '".$wk17gm15."', '".$wk17gm16."', '".$wk17gm17."', '".$tiebreaker."', true)");

        if ($submit_wk17) {
            echo '<div class="alert alert-success"><strong>Success!</strong> Your Week 17 picks have been recorded. <a href="../view-picks.php">Click here to view all picks.</a></div>';
        } else {
            echo '<div class="alert alert-danger" role="alert"><strong>Error:</strong> Your Week 17 submission has failed. <a href="../index.php">Please go back and try again.</a></div>';
        }
    }

} else {
    echo '<div class="alert alert-danger" role="alert"><strong>Error:</strong> Your selections for Week 17 are incomplete. <a href="../index.php">Please go back and try again.</a></div>';
}

include '../_includes/handler-footer.php';