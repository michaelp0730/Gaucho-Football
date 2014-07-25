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
            <div class="col-xs-12 col-sm-6 col-sm-offset-3 col-md-8 col-md-offset-2">
                <h1>Rules</h1>
                <div class="panel panel-default login-container-outer clearfix">
                    <div class="panel panel-default login-container-inner">
                        <h3>By using this website you agree to the following rules. Failure to comply with these rules may result in the removal of your picks, or the removal of your account.</h3>
                        <ul class="rules-list">
                            <li><strong>All picks are final.</strong> Once you submit your picks for a week, those picks are final and cannot be modified.</li>
                            <li><strong>Picks for each week are due by Thursday at 5:30pm PST.</strong> Picks submitted later than 5:30pm on Thursday will be rejected.</li>
                            <li><strong>The total points scored on Monday night will be used for a tie&ndash;breaker.</strong> In the event of a tie in number of wins in a week, the player who guesses <strong>CLOSEST</strong> to the actual number of total points scored by both teams combined on Monday night will be determined the winner.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include './_includes/footer.php'; ?>