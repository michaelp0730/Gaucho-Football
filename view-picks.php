<?php
    $title = 'View Picks | Gaucho Football';
    $pick_games_active = false;
    $view_picks_active = true;
    require '_includes/header.php';
?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-sm-offset-3 col-md-8 col-md-offset-2">
            <?php
            if (!empty($_SESSION['LoggedIn']) && !empty($_SESSION['Username'])) {
            ?>
                <h1>View Picks</h1>
                <div id="view-picks-container"></div>
            <?php
            }
            ?>
            </div>
        </div>
    </div>

    <script id="view-picks-template" type="text/x-handlebars-template">
    {{#each weeks}}
        <div id="view-picks-{{id}}-accordion" class="panel-group">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#view-picks-{{id}}-accordion" href="#view-picks-{{id}}-panel">
                            {{week}}
                            <span class="dates">{{dates}}</span>
                        </a>
                    </h4>
                </div>

                <div id="view-picks-{{id}}-panel" class="panel-collapse collapse">
                    <div class="panel-body">
                    This is a test.
                    </div>
                </div>
            </div>
        </div>
    {{/each}}
    </script>

<?php include './_includes/footer.php'; ?>