<?php
    if (!empty($_POST['wk1gm1']) && !empty($_POST['wk1gm2']) && !empty($_POST['wk1gm3']) && !empty($_POST['wk1gm4']) &&
        !empty($_POST['wk1gm5']) && !empty($_POST['wk1gm6']) && !empty($_POST['wk1gm7']) && !empty($_POST['wk1gm8']) &&
        !empty($_POST['wk1gm9']) && !empty($_POST['wk1gm10']) && !empty($_POST['wk1gm11']) && !empty($_POST['wk1gm12']) &&
        !empty($_POST['wk1gm13']) && !empty($_POST['wk1gm14']) && !empty($_POST['wk1gm15']) && !empty($_POST['wk1gm16']) &&
        !empty($_POST['wk1-tiebreaker'])) {
        $wk1gm1 = mysql_real_escape_string($_POST['wk1gm1']);
        $wk1gm2 = mysql_real_escape_string($_POST['wk1gm2']);
        $wk1gm3 = mysql_real_escape_string($_POST['wk1gm3']);
        $wk1gm4 = mysql_real_escape_string($_POST['wk1gm4']);
        $wk1gm5 = mysql_real_escape_string($_POST['wk1gm5']);
        $wk1gm6 = mysql_real_escape_string($_POST['wk1gm6']);
        $wk1gm7 = mysql_real_escape_string($_POST['wk1gm7']);
        $wk1gm8 = mysql_real_escape_string($_POST['wk1gm8']);
        $wk1gm9 = mysql_real_escape_string($_POST['wk1gm9']);
        $wk1gm10 = mysql_real_escape_string($_POST['wk1gm10']);
        $wk1gm11 = mysql_real_escape_string($_POST['wk1gm11']);
        $wk1gm12 = mysql_real_escape_string($_POST['wk1gm12']);
        $wk1gm13 = mysql_real_escape_string($_POST['wk1gm13']);
        $wk1gm14 = mysql_real_escape_string($_POST['wk1gm14']);
        $wk1gm15 = mysql_real_escape_string($_POST['wk1gm15']);
        $wk1gm16 = mysql_real_escape_string($_POST['wk1gm16']);


    } else {
        echo '<div class="alert alert-danger" role="alert"><strong>Error:</strong> Your selections for Week 1 are incomplete. <a href="../index.php">Please go back and try again.</a></div>';
    }
?>