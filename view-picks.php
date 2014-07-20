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
                <div class="alert alert-info" role="alert">
                    Alert - You won't be able to view everyone's picks for a particular week until you have entered your own picks for that week.
                </div>
                <div id="view-picks-container">
                    <div id="view-picks-wk1-accordion" class="panel-group">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#view-picks-wk1-accordion" href="#view-picks-wk1-panel">
                                        Week 1
                                        <span class="dates">September 4, 7, 8 - 2014</span>
                                    </a>
                                </h4>
                            </div>

                            <div id="view-picks-wk1-panel" class="panel-collapse collapse in">
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table id="wk1-picks" class="table table-condensed table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Username</th>

                                                    <th>
                                                        <div>GB</div>
                                                        <div>@</div>
                                                        <div>SEA</div>
                                                    </th>

                                                    <th>
                                                        <div>NO</div>
                                                        <div>@</div>
                                                        <div>ATL</div>
                                                    </th>

                                                    <th>
                                                        <div>MIN</div>
                                                        <div>@</div>
                                                        <div>STL</div>
                                                    </th>

                                                    <th>
                                                        <div>CLE</div>
                                                        <div>@</div>
                                                        <div>PIT</div>
                                                    </th>

                                                    <th>
                                                        <div>JAX</div>
                                                        <div>@</div>
                                                        <div>PHI</div>
                                                    </th>

                                                    <th>
                                                        <div>OAK</div>
                                                        <div>@</div>
                                                        <div>NYJ</div>
                                                    </th>

                                                    <th>
                                                        <div>CIN</div>
                                                        <div>@</div>
                                                        <div>BAL</div>
                                                    </th>

                                                    <th>
                                                        <div>BUF</div>
                                                        <div>@</div>
                                                        <div>CHI</div>
                                                    </th>

                                                    <th>
                                                        <div>WSH</div>
                                                        <div>@</div>
                                                        <div>HOU</div>
                                                    </th>

                                                    <th>
                                                        <div>TEN</div>
                                                        <div>@</div>
                                                        <div>KC</div>
                                                    </th>

                                                    <th>
                                                        <div>NE</div>
                                                        <div>@</div>
                                                        <div>MIA</div>
                                                    </th>

                                                    <th>
                                                        <div>CAR</div>
                                                        <div>@</div>
                                                        <div>TB</div>
                                                    </th>

                                                    <th>
                                                        <div>SF</div>
                                                        <div>@</div>
                                                        <div>DAL</div>
                                                    </th>

                                                    <th>
                                                        <div>IND</div>
                                                        <div>@</div>
                                                        <div>DEN</div>
                                                    </th>

                                                    <th>
                                                        <div>NYG</div>
                                                        <div>@</div>
                                                        <div>DET</div>
                                                    </th>

                                                    <th>
                                                        <div>SD</div>
                                                        <div>@</div>
                                                        <div>ARI</div>
                                                    </th>

                                                    <th>Monday Total Points</th>
                                                    <th>Total Wins</th>
                                                </tr>
                                            </thead>
                                            <?php
                                            $username = $_SESSION['Username'];
                                            $show_wk1_query = mysql_query("SELECT wk1Complete FROM wk1 WHERE Username = '".$username."'");
                                            $wk1_query = mysql_query("SELECT * FROM wk1 GROUP BY Username");
                                            if (mysql_result($show_wk1_query, 0) == 1) {
                                            ?>
                                            <tbody>
                                            <?php while ($wk1row = mysql_fetch_array($wk1_query, MYSQL_NUM)) {
                                                $wk1_total_wins = 0;
                                            ?>
                                                <tr>
                                                    <td class="<?php if ($wk1row[0] == '') { echo 'success'; } ?>"><?php echo $wk1row[0]; ?> </td>
                                                    <td class="<?php if ($wk1row[1] == '') { echo 'success'; $wk1_total_wins++; } ?>"><?php echo $wk1row[1]; ?> </td>
                                                    <td class="<?php if ($wk1row[2] == '') { echo 'success'; $wk1_total_wins++; } ?>"><?php echo $wk1row[2]; ?> </td>
                                                    <td class="<?php if ($wk1row[3] == '') { echo 'success'; $wk1_total_wins++; } ?>"><?php echo $wk1row[3]; ?> </td>
                                                    <td class="<?php if ($wk1row[4] == '') { echo 'success'; $wk1_total_wins++; } ?>"><?php echo $wk1row[4]; ?> </td>
                                                    <td class="<?php if ($wk1row[5] == '') { echo 'success'; $wk1_total_wins++; } ?>"><?php echo $wk1row[5]; ?> </td>
                                                    <td class="<?php if ($wk1row[6] == '') { echo 'success'; $wk1_total_wins++; } ?>"><?php echo $wk1row[6]; ?> </td>
                                                    <td class="<?php if ($wk1row[7] == '') { echo 'success'; $wk1_total_wins++; } ?>"><?php echo $wk1row[7]; ?> </td>
                                                    <td class="<?php if ($wk1row[8] == '') { echo 'success'; $wk1_total_wins++; } ?>"><?php echo $wk1row[8]; ?> </td>
                                                    <td class="<?php if ($wk1row[9] == '') { echo 'success'; $wk1_total_wins++; } ?>"><?php echo $wk1row[9]; ?> </td>
                                                    <td class="<?php if ($wk1row[10] == '') { echo 'success'; $wk1_total_wins++; } ?>"><?php echo $wk1row[10]; ?> </td>
                                                    <td class="<?php if ($wk1row[11] == '') { echo 'success'; $wk1_total_wins++; } ?>"><?php echo $wk1row[11]; ?> </td>
                                                    <td class="<?php if ($wk1row[12] == '') { echo 'success'; $wk1_total_wins++; } ?>"><?php echo $wk1row[12]; ?> </td>
                                                    <td class="<?php if ($wk1row[13] == '') { echo 'success'; $wk1_total_wins++; } ?>"><?php echo $wk1row[13]; ?> </td>
                                                    <td class="<?php if ($wk1row[14] == '') { echo 'success'; $wk1_total_wins++; } ?>"><?php echo $wk1row[14]; ?> </td>
                                                    <td class="<?php if ($wk1row[15] == '') { echo 'success'; $wk1_total_wins++; } ?>"><?php echo $wk1row[15]; ?> </td>
                                                    <td class="<?php if ($wk1row[16] == '') { echo 'success'; $wk1_total_wins++; } ?>"><?php echo $wk1row[16]; ?> </td>
                                                    <td class="<?php if ($wk1row[17] == '') { echo 'success'; $wk1_total_wins++; } ?>"><?php echo $wk1row[17]; ?> </td>
                                                    <td><?php echo $wk1_total_wins; ?></td>
                                                </tr>
                                            <?php } ?>
                                            </tbody>
                                            <?php } ?>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="view-picks-wk2-accordion" class="panel-group">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#view-picks-wk2-accordion" href="#view-picks-wk2-panel">
                                        Week 2
                                        <span class="dates">September 11, 14, 15 - 2014</span>
                                    </a>
                                </h4>
                            </div>

                            <div id="view-picks-wk2-panel" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table id="wk2-picks" class="table table-condensed table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Username</th>

                                                    <th>
                                                        <div>PIT</div>
                                                        <div>@</div>
                                                        <div>BAL</div>
                                                    </th>

                                                    <th>
                                                        <div>MIA</div>
                                                        <div>@</div>
                                                        <div>BUF</div>
                                                    </th>

                                                    <th>
                                                        <div>JAX</div>
                                                        <div>@</div>
                                                        <div>WSH</div>
                                                    </th>

                                                    <th>
                                                        <div>DAL</div>
                                                        <div>@</div>
                                                        <div>TEN</div>
                                                    </th>

                                                    <th>
                                                        <div>ARI</div>
                                                        <div>@</div>
                                                        <div>NYG</div>
                                                    </th>

                                                    <th>
                                                        <div>NE</div>
                                                        <div>@</div>
                                                        <div>MIN</div>
                                                    </th>

                                                    <th>
                                                        <div>NO</div>
                                                        <div>@</div>
                                                        <div>CLE</div>
                                                    </th>

                                                    <th>
                                                        <div>ATL</div>
                                                        <div>@</div>
                                                        <div>CIN</div>
                                                    </th>

                                                    <th>
                                                        <div>DET</div>
                                                        <div>@</div>
                                                        <div>CAR</div>
                                                    </th>

                                                    <th>
                                                        <div>STL</div>
                                                        <div>@</div>
                                                        <div>TB</div>
                                                    </th>

                                                    <th>
                                                        <div>SEA</div>
                                                        <div>@</div>
                                                        <div>SD</div>
                                                    </th>

                                                    <th>
                                                        <div>HOU</div>
                                                        <div>@</div>
                                                        <div>OAK</div>
                                                    </th>

                                                    <th>
                                                        <div>NYJ</div>
                                                        <div>@</div>
                                                        <div>GB</div>
                                                    </th>

                                                    <th>
                                                        <div>KC</div>
                                                        <div>@</div>
                                                        <div>DEN</div>
                                                    </th>

                                                    <th>
                                                        <div>CHI</div>
                                                        <div>@</div>
                                                        <div>SF</div>
                                                    </th>

                                                    <th>
                                                        <div>PHI</div>
                                                        <div>@</div>
                                                        <div>IND</div>
                                                    </th>

                                                    <th>Monday Total Points</th>
                                                    <th>Total Wins</th>
                                                </tr>
                                            </thead>
                                            <?php
                                            $username = $_SESSION['Username'];
                                            $show_wk2_query = mysql_query("SELECT wk2Complete FROM wk2 WHERE Username = '".$username."'");
                                            $wk2_query = mysql_query("SELECT * FROM wk2 GROUP BY Username");
                                            if (mysql_result($show_wk2_query, 0) == 1) {
                                            ?>
                                            <tbody>
                                            <?php while ($wk2row = mysql_fetch_array($wk2_query, MYSQL_NUM)) {
                                                $wk2_total_wins = 0;
                                            ?>
                                                <tr>
                                                    <td class="<?php if ($wk2row[0] == '') { echo 'success'; } ?>"><?php echo $wk2row[0]; ?> </td>
                                                    <td class="<?php if ($wk2row[1] == '') { echo 'success'; $wk2_total_wins++; } ?>"><?php echo $wk2row[1]; ?> </td>
                                                    <td class="<?php if ($wk2row[2] == '') { echo 'success'; $wk2_total_wins++; } ?>"><?php echo $wk2row[2]; ?> </td>
                                                    <td class="<?php if ($wk2row[3] == '') { echo 'success'; $wk2_total_wins++; } ?>"><?php echo $wk2row[3]; ?> </td>
                                                    <td class="<?php if ($wk2row[4] == '') { echo 'success'; $wk2_total_wins++; } ?>"><?php echo $wk2row[4]; ?> </td>
                                                    <td class="<?php if ($wk2row[5] == '') { echo 'success'; $wk2_total_wins++; } ?>"><?php echo $wk2row[5]; ?> </td>
                                                    <td class="<?php if ($wk2row[6] == '') { echo 'success'; $wk2_total_wins++; } ?>"><?php echo $wk2row[6]; ?> </td>
                                                    <td class="<?php if ($wk2row[7] == '') { echo 'success'; $wk2_total_wins++; } ?>"><?php echo $wk2row[7]; ?> </td>
                                                    <td class="<?php if ($wk2row[8] == '') { echo 'success'; $wk2_total_wins++; } ?>"><?php echo $wk2row[8]; ?> </td>
                                                    <td class="<?php if ($wk2row[9] == '') { echo 'success'; $wk2_total_wins++; } ?>"><?php echo $wk2row[9]; ?> </td>
                                                    <td class="<?php if ($wk2row[10] == '') { echo 'success'; $wk2_total_wins++; } ?>"><?php echo $wk2row[10]; ?> </td>
                                                    <td class="<?php if ($wk2row[11] == '') { echo 'success'; $wk2_total_wins++; } ?>"><?php echo $wk2row[11]; ?> </td>
                                                    <td class="<?php if ($wk2row[12] == '') { echo 'success'; $wk2_total_wins++; } ?>"><?php echo $wk2row[12]; ?> </td>
                                                    <td class="<?php if ($wk2row[13] == '') { echo 'success'; $wk2_total_wins++; } ?>"><?php echo $wk2row[13]; ?> </td>
                                                    <td class="<?php if ($wk2row[14] == '') { echo 'success'; $wk2_total_wins++; } ?>"><?php echo $wk2row[14]; ?> </td>
                                                    <td class="<?php if ($wk2row[15] == '') { echo 'success'; $wk2_total_wins++; } ?>"><?php echo $wk2row[15]; ?> </td>
                                                    <td class="<?php if ($wk2row[16] == '') { echo 'success'; $wk2_total_wins++; } ?>"><?php echo $wk2row[16]; ?> </td>
                                                    <td class="<?php if ($wk2row[17] == '') { echo 'success'; $wk2_total_wins++; } ?>"><?php echo $wk2row[17]; ?> </td>
                                                    <td><?php echo $wk2_total_wins; ?></td>
                                                </tr>
                                            <?php } ?>
                                            </tbody>
                                            <?php } ?>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="view-picks-wk3-accordion" class="panel-group">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#view-picks-wk3-accordion" href="#view-picks-wk3-panel">
                                        Week 3
                                        <span class="dates">September 18, 21, 22 - 2014</span>
                                    </a>
                                </h4>
                            </div>

                            <div id="view-picks-wk3-panel" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table id="wk3-picks" class="table table-condensed table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Username</th>

                                                    <th>
                                                        <div>TB</div>
                                                        <div>@</div>
                                                        <div>ATL</div>
                                                    </th>

                                                    <th>
                                                        <div>SD</div>
                                                        <div>@</div>
                                                        <div>BUF</div>
                                                    </th>

                                                    <th>
                                                        <div>DAL</div>
                                                        <div>@</div>
                                                        <div>STL</div>
                                                    </th>

                                                    <th>
                                                        <div>WSH</div>
                                                        <div>@</div>
                                                        <div>PHI</div>
                                                    </th>

                                                    <th>
                                                        <div>HOU</div>
                                                        <div>@</div>
                                                        <div>NYG</div>
                                                    </th>

                                                    <th>
                                                        <div>MIN</div>
                                                        <div>@</div>
                                                        <div>NO</div>
                                                    </th>

                                                    <th>
                                                        <div>TEN</div>
                                                        <div>@</div>
                                                        <div>CIN</div>
                                                    </th>

                                                    <th>
                                                        <div>BAL</div>
                                                        <div>@</div>
                                                        <div>CLE</div>
                                                    </th>

                                                    <th>
                                                        <div>GB</div>
                                                        <div>@</div>
                                                        <div>DET</div>
                                                    </th>

                                                    <th>
                                                        <div>IND</div>
                                                        <div>@</div>
                                                        <div>JAX</div>
                                                    </th>

                                                    <th>
                                                        <div>OAK</div>
                                                        <div>@</div>
                                                        <div>NE</div>
                                                    </th>

                                                    <th>
                                                        <div>SF</div>
                                                        <div>@</div>
                                                        <div>ARI</div>
                                                    </th>

                                                    <th>
                                                        <div>DEN</div>
                                                        <div>@</div>
                                                        <div>SEA</div>
                                                    </th>

                                                    <th>
                                                        <div>KC</div>
                                                        <div>@</div>
                                                        <div>MIA</div>
                                                    </th>

                                                    <th>
                                                        <div>PIT</div>
                                                        <div>@</div>
                                                        <div>CAR</div>
                                                    </th>

                                                    <th>
                                                        <div>CHI</div>
                                                        <div>@</div>
                                                        <div>NYJ</div>
                                                    </th>

                                                    <th>Monday Total Points</th>
                                                    <th>Total Wins</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>

                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="view-picks-wk4-accordion" class="panel-group">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#view-picks-wk4-accordion" href="#view-picks-wk4-panel">
                                        Week 4
                                        <span class="dates">September 25, 28, 29 - 2014</span>
                                    </a>
                                </h4>
                            </div>

                            <div id="view-picks-wk4-panel" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table id="wk4-picks" class="table table-condensed table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Username</th>

                                                    <th>
                                                        <div>NYG</div>
                                                        <div>@</div>
                                                        <div>WSH</div>
                                                    </th>

                                                    <th>
                                                        <div>GB</div>
                                                        <div>@</div>
                                                        <div>CHI</div>
                                                    </th>

                                                    <th>
                                                        <div>BUF</div>
                                                        <div>@</div>
                                                        <div>HOU</div>
                                                    </th>

                                                    <th>
                                                        <div>TEN</div>
                                                        <div>@</div>
                                                        <div>IND</div>
                                                    </th>

                                                    <th>
                                                        <div>CAR</div>
                                                        <div>@</div>
                                                        <div>BAL</div>
                                                    </th>

                                                    <th>
                                                        <div>DET</div>
                                                        <div>@</div>
                                                        <div>NYJ</div>
                                                    </th>

                                                    <th>
                                                        <div>TB</div>
                                                        <div>@</div>
                                                        <div>PIT</div>
                                                    </th>

                                                    <th>
                                                        <div>MIA</div>
                                                        <div>@</div>
                                                        <div>OAK</div>
                                                    </th>

                                                    <th>
                                                        <div>JAX</div>
                                                        <div>@</div>
                                                        <div>SD</div>
                                                    </th>

                                                    <th>
                                                        <div>PHI</div>
                                                        <div>@</div>
                                                        <div>SF</div>
                                                    </th>

                                                    <th>
                                                        <div>ATL</div>
                                                        <div>@</div>
                                                        <div>MIN</div>
                                                    </th>

                                                    <th>
                                                        <div>NO</div>
                                                        <div>@</div>
                                                        <div>DAL</div>
                                                    </th>

                                                    <th>
                                                        <div>NE</div>
                                                        <div>@</div>
                                                        <div>KC</div>
                                                    </th>

                                                    <th>Monday Total Points</th>
                                                    <th>Total Wins</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>

                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="view-picks-wk5-accordion" class="panel-group">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#view-picks-wk5-accordion" href="#view-picks-wk5-panel">
                                        Week 5
                                        <span class="dates">October 2, 5, 6 - 2014</span>
                                    </a>
                                </h4>
                            </div>

                            <div id="view-picks-wk5-panel" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table id="wk5-picks" class="table table-condensed table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Username</th>

                                                    <th>
                                                        <div>MIN</div>
                                                        <div>@</div>
                                                        <div>GB</div>
                                                    </th>

                                                    <th>
                                                        <div>CHI</div>
                                                        <div>@</div>
                                                        <div>CAR</div>
                                                    </th>

                                                    <th>
                                                        <div>CLE</div>
                                                        <div>@</div>
                                                        <div>TEN</div>
                                                    </th>

                                                    <th>
                                                        <div>STL</div>
                                                        <div>@</div>
                                                        <div>PHI</div>
                                                    </th>

                                                    <th>
                                                        <div>ATL</div>
                                                        <div>@</div>
                                                        <div>NYG</div>
                                                    </th>

                                                    <th>
                                                        <div>TB</div>
                                                        <div>@</div>
                                                        <div>NO</div>
                                                    </th>

                                                    <th>
                                                        <div>HOU</div>
                                                        <div>@</div>
                                                        <div>DAL</div>
                                                    </th>

                                                    <th>
                                                        <div>BUF</div>
                                                        <div>@</div>
                                                        <div>DET</div>
                                                    </th>

                                                    <th>
                                                        <div>BAL</div>
                                                        <div>@</div>
                                                        <div>IND</div>
                                                    </th>

                                                    <th>
                                                        <div>PIT</div>
                                                        <div>@</div>
                                                        <div>JAX</div>
                                                    </th>

                                                    <th>
                                                        <div>ARI</div>
                                                        <div>@</div>
                                                        <div>DEN</div>
                                                    </th>

                                                    <th>
                                                        <div>KC</div>
                                                        <div>@</div>
                                                        <div>SF</div>
                                                    </th>

                                                    <th>
                                                        <div>NYJ</div>
                                                        <div>@</div>
                                                        <div>SD</div>
                                                    </th>

                                                    <th>
                                                        <div>CIN</div>
                                                        <div>@</div>
                                                        <div>NE</div>
                                                    </th>

                                                    <th>
                                                        <div>SEA</div>
                                                        <div>@</div>
                                                        <div>WSH</div>
                                                    </th>

                                                    <th>Monday Total Points</th>
                                                    <th>Total Wins</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>

                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="view-picks-wk6-accordion" class="panel-group">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#view-picks-wk6-accordion" href="#view-picks-wk6-panel">
                                        Week 6
                                        <span class="dates">October 9, 12, 13 - 2014</span>
                                    </a>
                                </h4>
                            </div>

                            <div id="view-picks-wk6-panel" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table id="wk6-picks" class="table table-condensed table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Username</th>

                                                    <th>
                                                        <div>IND</div>
                                                        <div>@</div>
                                                        <div>HOU</div>
                                                    </th>

                                                    <th>
                                                        <div>CHI</div>
                                                        <div>@</div>
                                                        <div>ATL</div>
                                                    </th>

                                                    <th>
                                                        <div>JAX</div>
                                                        <div>@</div>
                                                        <div>TEN</div>
                                                    </th>

                                                    <th>
                                                        <div>BAL</div>
                                                        <div>@</div>
                                                        <div>TB</div>
                                                    </th>

                                                    <th>
                                                        <div>DEN</div>
                                                        <div>@</div>
                                                        <div>NYJ</div>
                                                    </th>

                                                    <th>
                                                        <div>DET</div>
                                                        <div>@</div>
                                                        <div>MIN</div>
                                                    </th>

                                                    <th>
                                                        <div>NE</div>
                                                        <div>@</div>
                                                        <div>BUF</div>
                                                    </th>

                                                    <th>
                                                        <div>CAR</div>
                                                        <div>@</div>
                                                        <div>CIN</div>
                                                    </th>

                                                    <th>
                                                        <div>PIT</div>
                                                        <div>@</div>
                                                        <div>CLE</div>
                                                    </th>

                                                    <th>
                                                        <div>GB</div>
                                                        <div>@</div>
                                                        <div>MIA</div>
                                                    </th>

                                                    <th>
                                                        <div>SD</div>
                                                        <div>@</div>
                                                        <div>OAK</div>
                                                    </th>

                                                    <th>
                                                        <div>DAL</div>
                                                        <div>@</div>
                                                        <div>SEA</div>
                                                    </th>

                                                    <th>
                                                        <div>WSH</div>
                                                        <div>@</div>
                                                        <div>ARI</div>
                                                    </th>

                                                    <th>
                                                        <div>NYG</div>
                                                        <div>@</div>
                                                        <div>PHI</div>
                                                    </th>

                                                    <th>
                                                        <div>SF</div>
                                                        <div>@</div>
                                                        <div>STL</div>
                                                    </th>

                                                    <th>Monday Total Points</th>
                                                    <th>Total Wins</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>

                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="view-picks-wk7-accordion" class="panel-group">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#view-picks-wk7-accordion" href="#view-picks-wk7-panel">
                                        Week 7
                                        <span class="dates">October 16, 19, 20 - 2014</span>
                                    </a>
                                </h4>
                            </div>

                            <div id="view-picks-wk7-panel" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table id="wk7-picks" class="table table-condensed table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Username</th>

                                                    <th>
                                                        <div>NYJ</div>
                                                        <div>@</div>
                                                        <div>NE</div>
                                                    </th>

                                                    <th>
                                                        <div>ATL</div>
                                                        <div>@</div>
                                                        <div>BAL</div>
                                                    </th>

                                                    <th>
                                                        <div>TEN</div>
                                                        <div>@</div>
                                                        <div>WSH</div>
                                                    </th>

                                                    <th>
                                                        <div>SEA</div>
                                                        <div>@</div>
                                                        <div>STL</div>
                                                    </th>

                                                    <th>
                                                        <div>CLE</div>
                                                        <div>@</div>
                                                        <div>JAX</div>
                                                    </th>

                                                    <th>
                                                        <div>CIN</div>
                                                        <div>@</div>
                                                        <div>IND</div>
                                                    </th>

                                                    <th>
                                                        <div>MIN</div>
                                                        <div>@</div>
                                                        <div>BUF</div>
                                                    </th>

                                                    <th>
                                                        <div>MIA</div>
                                                        <div>@</div>
                                                        <div>CHI</div>
                                                    </th>

                                                    <th>
                                                        <div>NO</div>
                                                        <div>@</div>
                                                        <div>DET</div>
                                                    </th>

                                                    <th>
                                                        <div>CAR</div>
                                                        <div>@</div>
                                                        <div>GB</div>
                                                    </th>

                                                    <th>
                                                        <div>KC</div>
                                                        <div>@</div>
                                                        <div>SD</div>
                                                    </th>

                                                    <th>
                                                        <div>ARI</div>
                                                        <div>@</div>
                                                        <div>OAK</div>
                                                    </th>

                                                    <th>
                                                        <div>NYG</div>
                                                        <div>@</div>
                                                        <div>DAL</div>
                                                    </th>

                                                    <th>
                                                        <div>SF</div>
                                                        <div>@</div>
                                                        <div>DEN</div>
                                                    </th>

                                                    <th>
                                                        <div>HOU</div>
                                                        <div>@</div>
                                                        <div>PIT</div>
                                                    </th>

                                                    <th>Monday Total Points</th>
                                                    <th>Total Wins</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>

                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="view-picks-wk8-accordion" class="panel-group">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#view-picks-wk8-accordion" href="#view-picks-wk8-panel">
                                        Week 8
                                        <span class="dates">October 23, 26, 27 - 2014</span>
                                    </a>
                                </h4>
                            </div>

                            <div id="view-picks-wk8-panel" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table id="wk8-picks" class="table table-condensed table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Username</th>

                                                    <th>
                                                        <div>SD</div>
                                                        <div>@</div>
                                                        <div>DEN</div>
                                                    </th>

                                                    <th>
                                                        <div>DET</div>
                                                        <div>@</div>
                                                        <div>ATL</div>
                                                    </th>

                                                    <th>
                                                        <div>MIN</div>
                                                        <div>@</div>
                                                        <div>TB</div>
                                                    </th>

                                                    <th>
                                                        <div>BUF</div>
                                                        <div>@</div>
                                                        <div>NYJ</div>
                                                    </th>

                                                    <th>
                                                        <div>CHI</div>
                                                        <div>@</div>
                                                        <div>NE</div>
                                                    </th>

                                                    <th>
                                                        <div>SEA</div>
                                                        <div>@</div>
                                                        <div>CAR</div>
                                                    </th>

                                                    <th>
                                                        <div>MIA</div>
                                                        <div>@</div>
                                                        <div>JAX</div>
                                                    </th>

                                                    <th>
                                                        <div>BAL</div>
                                                        <div>@</div>
                                                        <div>CIN</div>
                                                    </th>

                                                    <th>
                                                        <div>HOU</div>
                                                        <div>@</div>
                                                        <div>TEN</div>
                                                    </th>

                                                    <th>
                                                        <div>STL</div>
                                                        <div>@</div>
                                                        <div>KC</div>
                                                    </th>

                                                    <th>
                                                        <div>PHI</div>
                                                        <div>@</div>
                                                        <div>ARI</div>
                                                    </th>

                                                    <th>
                                                        <div>IND</div>
                                                        <div>@</div>
                                                        <div>PIT</div>
                                                    </th>

                                                    <th>
                                                        <div>OAK</div>
                                                        <div>@</div>
                                                        <div>CLE</div>
                                                    </th>

                                                    <th>
                                                        <div>GB</div>
                                                        <div>@</div>
                                                        <div>NO</div>
                                                    </th>

                                                    <th>
                                                        <div>WSH</div>
                                                        <div>@</div>
                                                        <div>DAL</div>
                                                    </th>

                                                    <th>Monday Total Points</th>
                                                    <th>Total Wins</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>

                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="view-picks-wk9-accordion" class="panel-group">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#view-picks-wk9-accordion" href="#view-picks-wk9-panel">
                                        Week 9
                                        <span class="dates">October 30, November 2, 3 - 2014</span>
                                    </a>
                                </h4>
                            </div>

                            <div id="view-picks-wk9-panel" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table id="wk9-picks" class="table table-condensed table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Username</th>

                                                    <th>
                                                        <div>NO</div>
                                                        <div>@</div>
                                                        <div>CAR</div>
                                                    </th>

                                                    <th>
                                                        <div>TB</div>
                                                        <div>@</div>
                                                        <div>CLE</div>
                                                    </th>

                                                    <th>
                                                        <div>ARI</div>
                                                        <div>@</div>
                                                        <div>DAL</div>
                                                    </th>

                                                    <th>
                                                        <div>PHI</div>
                                                        <div>@</div>
                                                        <div>HOU</div>
                                                    </th>

                                                    <th>
                                                        <div>NYJ</div>
                                                        <div>@</div>
                                                        <div>KC</div>
                                                    </th>

                                                    <th>
                                                        <div>JAX</div>
                                                        <div>@</div>
                                                        <div>CIN</div>
                                                    </th>

                                                    <th>
                                                        <div>SD</div>
                                                        <div>@</div>
                                                        <div>MIA</div>
                                                    </th>

                                                    <th>
                                                        <div>WSH</div>
                                                        <div>@</div>
                                                        <div>MIN</div>
                                                    </th>

                                                    <th>
                                                        <div>STL</div>
                                                        <div>@</div>
                                                        <div>SF</div>
                                                    </th>

                                                    <th>
                                                        <div>DEN</div>
                                                        <div>@</div>
                                                        <div>NE</div>
                                                    </th>

                                                    <th>
                                                        <div>OAK</div>
                                                        <div>@</div>
                                                        <div>SEA</div>
                                                    </th>

                                                    <th>
                                                        <div>BAL</div>
                                                        <div>@</div>
                                                        <div>PIT</div>
                                                    </th>

                                                    <th>
                                                        <div>IND</div>
                                                        <div>@</div>
                                                        <div>NYG</div>
                                                    </th>

                                                    <th>Monday Total Points</th>
                                                    <th>Total Wins</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>

                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="view-picks-wk10-accordion" class="panel-group">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#view-picks-wk10-accordion" href="#view-picks-wk10-panel">
                                        Week 10
                                        <span class="dates">November 6, 9, 10 - 2014</span>
                                    </a>
                                </h4>
                            </div>

                            <div id="view-picks-wk10-panel" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table id="wk10-picks" class="table table-condensed table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Username</th>

                                                    <th>
                                                        <div>CLE</div>
                                                        <div>@</div>
                                                        <div>CIN</div>
                                                    </th>

                                                    <th>
                                                        <div>KC</div>
                                                        <div>@</div>
                                                        <div>BUF</div>
                                                    </th>

                                                    <th>
                                                        <div>MIA</div>
                                                        <div>@</div>
                                                        <div>DET</div>
                                                    </th>

                                                    <th>
                                                        <div>DAL</div>
                                                        <div>@</div>
                                                        <div>JAX</div>
                                                    </th>

                                                    <th>
                                                        <div>SF</div>
                                                        <div>@</div>
                                                        <div>NO</div>
                                                    </th>

                                                    <th>
                                                        <div>TEN</div>
                                                        <div>@</div>
                                                        <div>BAL</div>
                                                    </th>

                                                    <th>
                                                        <div>PIT</div>
                                                        <div>@</div>
                                                        <div>NYJ</div>
                                                    </th>

                                                    <th>
                                                        <div>ATL</div>
                                                        <div>@</div>
                                                        <div>TB</div>
                                                    </th>

                                                    <th>
                                                        <div>DEN</div>
                                                        <div>@</div>
                                                        <div>OAK</div>
                                                    </th>

                                                    <th>
                                                        <div>STL</div>
                                                        <div>@</div>
                                                        <div>ARI</div>
                                                    </th>

                                                    <th>
                                                        <div>NYG</div>
                                                        <div>@</div>
                                                        <div>SEA</div>
                                                    </th>

                                                    <th>
                                                        <div>CHI</div>
                                                        <div>@</div>
                                                        <div>GB</div>
                                                    </th>

                                                    <th>
                                                        <div>CAR</div>
                                                        <div>@</div>
                                                        <div>PHI</div>
                                                    </th>

                                                    <th>Monday Total Points</th>
                                                    <th>Total Wins</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>

                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="view-picks-wk11-accordion" class="panel-group">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#view-picks-wk11-accordion" href="#view-picks-wk11-panel">
                                        Week 11
                                        <span class="dates">November 13, 16, 17 - 2014</span>
                                    </a>
                                </h4>
                            </div>

                            <div id="view-picks-wk11-panel" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table id="wk11-picks" class="table table-condensed table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Username</th>

                                                    <th>
                                                        <div>BUF</div>
                                                        <div>@</div>
                                                        <div>MIA</div>
                                                    </th>

                                                    <th>
                                                        <div>MIN</div>
                                                        <div>@</div>
                                                        <div>CHI</div>
                                                    </th>

                                                    <th>
                                                        <div>HOU</div>
                                                        <div>@</div>
                                                        <div>CLE</div>
                                                    </th>

                                                    <th>
                                                        <div>PHI</div>
                                                        <div>@</div>
                                                        <div>GB</div>
                                                    </th>

                                                    <th>
                                                        <div>SEA</div>
                                                        <div>@</div>
                                                        <div>KC</div>
                                                    </th>

                                                    <th>
                                                        <div>ATL</div>
                                                        <div>@</div>
                                                        <div>CAR</div>
                                                    </th>

                                                    <th>
                                                        <div>CIN</div>
                                                        <div>@</div>
                                                        <div>NO</div>
                                                    </th>

                                                    <th>
                                                        <div>TB</div>
                                                        <div>@</div>
                                                        <div>WSH</div>
                                                    </th>

                                                    <th>
                                                        <div>DEN</div>
                                                        <div>@</div>
                                                        <div>STL</div>
                                                    </th>

                                                    <th>
                                                        <div>SF</div>
                                                        <div>@</div>
                                                        <div>NYG</div>
                                                    </th>

                                                    <th>
                                                        <div>OAK</div>
                                                        <div>@</div>
                                                        <div>SD</div>
                                                    </th>

                                                    <th>
                                                        <div>DET</div>
                                                        <div>@</div>
                                                        <div>ARI</div>
                                                    </th>

                                                    <th>
                                                        <div>NE</div>
                                                        <div>@</div>
                                                        <div>IND</div>
                                                    </th>

                                                    <th>
                                                        <div>PIT</div>
                                                        <div>@</div>
                                                        <div>TEN</div>
                                                    </th>

                                                    <th>Monday Total Points</th>
                                                    <th>Total Wins</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>

                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="view-picks-wk12-accordion" class="panel-group">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#view-picks-wk12-accordion" href="#view-picks-wk12-panel">
                                        Week 12
                                        <span class="dates">November 20, 23, 24 - 2014</span>
                                    </a>
                                </h4>
                            </div>

                            <div id="view-picks-wk12-panel" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table id="wk12-picks" class="table table-condensed table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Username</th>

                                                    <th>
                                                        <div>KC</div>
                                                        <div>@</div>
                                                        <div>OAK</div>
                                                    </th>

                                                    <th>
                                                        <div>CLE</div>
                                                        <div>@</div>
                                                        <div>ATL</div>
                                                    </th>

                                                    <th>
                                                        <div>TEN</div>
                                                        <div>@</div>
                                                        <div>PHI</div>
                                                    </th>

                                                    <th>
                                                        <div>DET</div>
                                                        <div>@</div>
                                                        <div>NE</div>
                                                    </th>

                                                    <th>
                                                        <div>GB</div>
                                                        <div>@</div>
                                                        <div>MIN</div>
                                                    </th>

                                                    <th>
                                                        <div>JAX</div>
                                                        <div>@</div>
                                                        <div>IND</div>
                                                    </th>

                                                    <th>
                                                        <div>CIN</div>
                                                        <div>@</div>
                                                        <div>HOU</div>
                                                    </th>

                                                    <th>
                                                        <div>NYJ</div>
                                                        <div>@</div>
                                                        <div>BUF</div>
                                                    </th>

                                                    <th>
                                                        <div>TB</div>
                                                        <div>@</div>
                                                        <div>CHI</div>
                                                    </th>

                                                    <th>
                                                        <div>ARI</div>
                                                        <div>@</div>
                                                        <div>SEA</div>
                                                    </th>

                                                    <th>
                                                        <div>STL</div>
                                                        <div>@</div>
                                                        <div>SD</div>
                                                    </th>

                                                    <th>
                                                        <div>MIA</div>
                                                        <div>@</div>
                                                        <div>DEN</div>
                                                    </th>

                                                    <th>
                                                        <div>WSH</div>
                                                        <div>@</div>
                                                        <div>SF</div>
                                                    </th>

                                                    <th>
                                                        <div>DAL</div>
                                                        <div>@</div>
                                                        <div>NYG</div>
                                                    </th>

                                                    <th>
                                                        <div>BAL</div>
                                                        <div>@</div>
                                                        <div>NO</div>
                                                    </th>

                                                    <th>Monday Total Points</th>
                                                    <th>Total Wins</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>

                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="view-picks-wk13-accordion" class="panel-group">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#view-picks-wk13-accordion" href="#view-picks-wk13-panel">
                                        Week 13
                                        <span class="dates">November 27, 30, December 1 - 2014</span>
                                    </a>
                                </h4>
                            </div>

                            <div id="view-picks-wk13-panel" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table id="wk13-picks" class="table table-condensed table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Username</th>

                                                    <th>
                                                        <div>CHI</div>
                                                        <div>@</div>
                                                        <div>DET</div>
                                                    </th>

                                                    <th>
                                                        <div>PHI</div>
                                                        <div>@</div>
                                                        <div>DAL</div>
                                                    </th>

                                                    <th>
                                                        <div>SEA</div>
                                                        <div>@</div>
                                                        <div>SF</div>
                                                    </th>

                                                    <th>
                                                        <div>WSH</div>
                                                        <div>@</div>
                                                        <div>IND</div>
                                                    </th>

                                                    <th>
                                                        <div>TEN</div>
                                                        <div>@</div>
                                                        <div>HOU</div>
                                                    </th>

                                                    <th>
                                                        <div>CLE</div>
                                                        <div>@</div>
                                                        <div>BUF</div>
                                                    </th>

                                                    <th>
                                                        <div>SD</div>
                                                        <div>@</div>
                                                        <div>BAL</div>
                                                    </th>

                                                    <th>
                                                        <div>NYG</div>
                                                        <div>@</div>
                                                        <div>JAX</div>
                                                    </th>

                                                    <th>
                                                        <div>CIN</div>
                                                        <div>@</div>
                                                        <div>TB</div>
                                                    </th>

                                                    <th>
                                                        <div>OAK</div>
                                                        <div>@</div>
                                                        <div>STL</div>
                                                    </th>

                                                    <th>
                                                        <div>NO</div>
                                                        <div>@</div>
                                                        <div>PIT</div>
                                                    </th>

                                                    <th>
                                                        <div>CAR</div>
                                                        <div>@</div>
                                                        <div>MIN</div>
                                                    </th>

                                                    <th>
                                                        <div>ARI</div>
                                                        <div>@</div>
                                                        <div>ATL</div>
                                                    </th>

                                                    <th>
                                                        <div>NE</div>
                                                        <div>@</div>
                                                        <div>GB</div>
                                                    </th>

                                                    <th>
                                                        <div>DEN</div>
                                                        <div>@</div>
                                                        <div>KC</div>
                                                    </th>

                                                    <th>
                                                        <div>MIA</div>
                                                        <div>@</div>
                                                        <div>NYJ</div>
                                                    </th>

                                                    <th>Monday Total Points</th>
                                                    <th>Total Wins</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>

                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="view-picks-wk14-accordion" class="panel-group">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#view-picks-wk14-accordion" href="#view-picks-wk14-panel">
                                        Week 14
                                        <span class="dates">December 4, 7, 8 - 2014</span>
                                    </a>
                                </h4>
                            </div>

                            <div id="view-picks-wk14-panel" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table id="wk14-picks" class="table table-condensed table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Username</th>

                                                    <th>
                                                        <div>DAL</div>
                                                        <div>@</div>
                                                        <div>CHI</div>
                                                    </th>

                                                    <th>
                                                        <div>PIT</div>
                                                        <div>@</div>
                                                        <div>CIN</div>
                                                    </th>

                                                    <th>
                                                        <div>STL</div>
                                                        <div>@</div>
                                                        <div>WSH</div>
                                                    </th>

                                                    <th>
                                                        <div>NYG</div>
                                                        <div>@</div>
                                                        <div>TEN</div>
                                                    </th>

                                                    <th>
                                                        <div>CAR</div>
                                                        <div>@</div>
                                                        <div>NO</div>
                                                    </th>

                                                    <th>
                                                        <div>NYJ</div>
                                                        <div>@</div>
                                                        <div>MIN</div>
                                                    </th>

                                                    <th>
                                                        <div>BAL</div>
                                                        <div>@</div>
                                                        <div>MIA</div>
                                                    </th>

                                                    <th>
                                                        <div>IND</div>
                                                        <div>@</div>
                                                        <div>CLE</div>
                                                    </th>

                                                    <th>
                                                        <div>TB</div>
                                                        <div>@</div>
                                                        <div>DET</div>
                                                    </th>

                                                    <th>
                                                        <div>HOU</div>
                                                        <div>@</div>
                                                        <div>JAX</div>
                                                    </th>

                                                    <th>
                                                        <div>BUF</div>
                                                        <div>@</div>
                                                        <div>DEN</div>
                                                    </th>

                                                    <th>
                                                        <div>KC</div>
                                                        <div>@</div>
                                                        <div>ARI</div>
                                                    </th>

                                                    <th>
                                                        <div>SEA</div>
                                                        <div>@</div>
                                                        <div>PHI</div>
                                                    </th>

                                                    <th>
                                                        <div>SF</div>
                                                        <div>@</div>
                                                        <div>OAK</div>
                                                    </th>

                                                    <th>
                                                        <div>NE</div>
                                                        <div>@</div>
                                                        <div>SD</div>
                                                    </th>

                                                    <th>
                                                        <div>ATL</div>
                                                        <div>@</div>
                                                        <div>GB</div>
                                                    </th>

                                                    <th>Monday Total Points</th>
                                                    <th>Total Wins</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>

                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="view-picks-wk15-accordion" class="panel-group">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#view-picks-wk15-accordion" href="#view-picks-wk15-panel">
                                        Week 15
                                        <span class="dates">December 11, 14, 15 - 2014</span>
                                    </a>
                                </h4>
                            </div>

                            <div id="view-picks-wk15-panel" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table id="wk15-picks" class="table table-condensed table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Username</th>

                                                    <th>
                                                        <div>ARI</div>
                                                        <div>@</div>
                                                        <div>STL</div>
                                                    </th>

                                                    <th>
                                                        <div>PIT</div>
                                                        <div>@</div>
                                                        <div>ATL</div>
                                                    </th>

                                                    <th>
                                                        <div>WSH</div>
                                                        <div>@</div>
                                                        <div>NYG</div>
                                                    </th>

                                                    <th>
                                                        <div>MIA</div>
                                                        <div>@</div>
                                                        <div>NE</div>
                                                    </th>

                                                    <th>
                                                        <div>OAK</div>
                                                        <div>@</div>
                                                        <div>KC</div>
                                                    </th>

                                                    <th>
                                                        <div>HOU</div>
                                                        <div>@</div>
                                                        <div>IND</div>
                                                    </th>

                                                    <th>
                                                        <div>JAX</div>
                                                        <div>@</div>
                                                        <div>BAL</div>
                                                    </th>

                                                    <th>
                                                        <div>GB</div>
                                                        <div>@</div>
                                                        <div>BUF</div>
                                                    </th>

                                                    <th>
                                                        <div>TB</div>
                                                        <div>@</div>
                                                        <div>CAR</div>
                                                    </th>

                                                    <th>
                                                        <div>CIN</div>
                                                        <div>@</div>
                                                        <div>CLE</div>
                                                    </th>

                                                    <th>
                                                        <div>MIN</div>
                                                        <div>@</div>
                                                        <div>DET</div>
                                                    </th>

                                                    <th>
                                                        <div>NYJ</div>
                                                        <div>@</div>
                                                        <div>TEN</div>
                                                    </th>

                                                    <th>
                                                        <div>DEN</div>
                                                        <div>@</div>
                                                        <div>SD</div>
                                                    </th>

                                                    <th>
                                                        <div>SF</div>
                                                        <div>@</div>
                                                        <div>SEA</div>
                                                    </th>

                                                    <th>
                                                        <div>DAL</div>
                                                        <div>@</div>
                                                        <div>PHI</div>
                                                    </th>

                                                    <th>
                                                        <div>NO</div>
                                                        <div>@</div>
                                                        <div>CHI</div>
                                                    </th>

                                                    <th>Monday Total Points</th>
                                                    <th>Total Wins</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>

                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="view-picks-wk16-accordion" class="panel-group">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#view-picks-wk16-accordion" href="#view-picks-wk16-panel">
                                        Week 16
                                        <span class="dates">December 18, 20, 21 - 2014</span>
                                    </a>
                                </h4>
                            </div>

                            <div id="view-picks-wk16-panel" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table id="wk16-picks" class="table table-condensed table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Username</th>

                                                    <th>
                                                        <div>TEN</div>
                                                        <div>@</div>
                                                        <div>JAX</div>
                                                    </th>

                                                    <th>
                                                        <div>SD</div>
                                                        <div>@</div>
                                                        <div>SF</div>
                                                    </th>

                                                    <th>
                                                        <div>PHI</div>
                                                        <div>@</div>
                                                        <div>WSH</div>
                                                    </th>

                                                    <th>
                                                        <div>MIN</div>
                                                        <div>@</div>
                                                        <div>MIA</div>
                                                    </th>

                                                    <th>
                                                        <div>BAL</div>
                                                        <div>@</div>
                                                        <div>HOU</div>
                                                    </th>

                                                    <th>
                                                        <div>DET</div>
                                                        <div>@</div>
                                                        <div>CHI</div>
                                                    </th>

                                                    <th>
                                                        <div>CLE</div>
                                                        <div>@</div>
                                                        <div>CAR</div>
                                                    </th>

                                                    <th>
                                                        <div>ATL</div>
                                                        <div>@</div>
                                                        <div>NO</div>
                                                    </th>

                                                    <th>
                                                        <div>GB</div>
                                                        <div>@</div>
                                                        <div>TB</div>
                                                    </th>

                                                    <th>
                                                        <div>KC</div>
                                                        <div>@</div>
                                                        <div>PIT</div>
                                                    </th>

                                                    <th>
                                                        <div>NE</div>
                                                        <div>@</div>
                                                        <div>NYJ</div>
                                                    </th>

                                                    <th>
                                                        <div>NYG</div>
                                                        <div>@</div>
                                                        <div>STL</div>
                                                    </th>

                                                    <th>
                                                        <div>BUF</div>
                                                        <div>@</div>
                                                        <div>OAK</div>
                                                    </th>

                                                    <th>
                                                        <div>IND</div>
                                                        <div>@</div>
                                                        <div>DAL</div>
                                                    </th>

                                                    <th>
                                                        <div>SEA</div>
                                                        <div>@</div>
                                                        <div>ARI</div>
                                                    </th>

                                                    <th>
                                                        <div>DEN</div>
                                                        <div>@</div>
                                                        <div>CIN</div>
                                                    </th>

                                                    <th>Monday Total Points</th>
                                                    <th>Total Wins</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>

                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="view-picks-wk17-accordion" class="panel-group">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#view-picks-wk17-accordion" href="#view-picks-wk17-panel">
                                        Week 17
                                        <span class="dates">December 28 - 2014</span>
                                    </a>
                                </h4>
                            </div>

                            <div id="view-picks-wk17-panel" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table id="wk17-picks" class="table table-condensed table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Username</th>

                                                    <th>
                                                        <div>CAR</div>
                                                        <div>@</div>
                                                        <div>ATL</div>
                                                    </th>

                                                    <th>
                                                        <div>CLE</div>
                                                        <div>@</div>
                                                        <div>BAL</div>
                                                    </th>

                                                    <th>
                                                        <div>DAL</div>
                                                        <div>@</div>
                                                        <div>WSH</div>
                                                    </th>

                                                    <th>
                                                        <div>IND</div>
                                                        <div>@</div>
                                                        <div>TEN</div>
                                                    </th>

                                                    <th>
                                                        <div>DET</div>
                                                        <div>@</div>
                                                        <div>GB</div>
                                                    </th>

                                                    <th>
                                                        <div>JAX</div>
                                                        <div>@</div>
                                                        <div>HOU</div>
                                                    </th>

                                                    <th>
                                                        <div>SD</div>
                                                        <div>@</div>
                                                        <div>KC</div>
                                                    </th>

                                                    <th>
                                                        <div>NYJ</div>
                                                        <div>@</div>
                                                        <div>MIA</div>
                                                    </th>

                                                    <th>
                                                        <div>CHI</div>
                                                        <div>@</div>
                                                        <div>MIN</div>
                                                    </th>

                                                    <th>
                                                        <div>BUF</div>
                                                        <div>@</div>
                                                        <div>NE</div>
                                                    </th>

                                                    <th>
                                                        <div>PHI</div>
                                                        <div>@</div>
                                                        <div>NYG</div>
                                                    </th>

                                                    <th>
                                                        <div>CIN</div>
                                                        <div>@</div>
                                                        <div>PIT</div>
                                                    </th>

                                                    <th>
                                                        <div>NO</div>
                                                        <div>@</div>
                                                        <div>TB</div>
                                                    </th>

                                                    <th>
                                                        <div>OAK</div>
                                                        <div>@</div>
                                                        <div>DEN</div>
                                                    </th>

                                                    <th>
                                                        <div>ARI</div>
                                                        <div>@</div>
                                                        <div>SF</div>
                                                    </th>

                                                    <th>
                                                        <div>STL</div>
                                                        <div>@</div>
                                                        <div>SEA</div>
                                                    </th>

                                                    <th>Monday Total Points</th>
                                                    <th>Total Wins</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>

                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
            </div>
        </div>
    </div>
<?php include './_includes/footer.php'; ?>