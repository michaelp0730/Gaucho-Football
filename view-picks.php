<?php
    $title = 'View Picks | Gaucho Football';
    $pick_games_active = false;
    $view_picks_active = true;
    require '_includes/header.php';
?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-sm-offset-3 col-md-8 col-md-offset-2">
            <?php if (!empty($_SESSION['LoggedIn']) && !empty($_SESSION['Username'])) { ?>
                <h1>View Picks</h1>
                <div id="view-picks-container"></div>
            <?php } ?>
            </div>
        </div>
    </div>
<?php include './_includes/footer.php'; ?>