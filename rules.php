<?php
    $title = 'Rules | Gaucho Football';
    $pick_games_active = false;
    $view_picks_active = false;
    $rules_active = true;
    $help_active = false;
    require './_includes/header.php';
?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
                <h1>Rules</h1>
                <div class="panel panel-default login-container-outer clearfix">
                    <div class="panel panel-default login-container-inner">
                        <h3>By using this website you agree to the following rules. Failure to comply with these rules may result in the removal of your picks, or the removal of your account.</h3>
                        <ul class="rules-list">
                            <li><strong>All picks are final.</strong> Once you submit your picks for a week, those picks cannot be modified.</li>
                            <li><strong>Picks for each week are due by Sunday at 10:00am PST.</strong> Picks submitted later than 10:00am on Sunday will be rejected.</li>
                            <li>In the event of a tie in the number of wins in a week, <strong>the total points scored on Monday night will be used for a tie&ndash;breaker.</strong> The player who guesses <strong>CLOSEST</strong> to the total combined points scored on Monday night will be determined the winner.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include './_includes/footer.php'; ?>
