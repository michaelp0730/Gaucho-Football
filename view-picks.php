<?php
    $title = 'View Picks | Gaucho Football';
    $pick_games_active = false;
    $view_picks_active = true;
    $rules_active = false;
    $help_active = false;
    $now = strtotime('now');
    require '_includes/header.php';
?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
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

                            <div id="view-picks-wk1-panel" class="panel-collapse collapse<?php echo(($now < strtotime("9 September 2014")) ? ' in' : ''); ?>">
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
                                                    <td class="<?php if ($wk1row[17] == '') { echo 'success'; } ?>"><?php echo $wk1row[17]; ?> </td>
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

                            <div id="view-picks-wk2-panel" class="panel-collapse collapse<?php echo(($now > strtotime("8 September 2014") && $now < strtotime("16 September 2014")) ? ' in' : ''); ?>">
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
                                                    <td class="<?php if ($wk2row[17] == '') { echo 'success'; } ?>"><?php echo $wk2row[17]; ?> </td>
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

                            <div id="view-picks-wk3-panel" class="panel-collapse collapse<?php echo(($now > strtotime("15 September 2014") && $now < strtotime("23 September 2014")) ? ' in' : ''); ?>">
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
                                            <?php
                                            $username = $_SESSION['Username'];
                                            $show_wk3_query = mysql_query("SELECT wk3Complete FROM wk3 WHERE Username = '".$username."'");
                                            $wk3_query = mysql_query("SELECT * FROM wk3 GROUP BY Username");
                                            if (mysql_result($show_wk3_query, 0) == 1) {
                                            ?>
                                            <tbody>
                                            <?php while ($wk3row = mysql_fetch_array($wk3_query, MYSQL_NUM)) {
                                                $wk3_total_wins = 0;
                                            ?>
                                                <tr>
                                                    <td class="<?php if ($wk3row[0] == '') { echo 'success'; } ?>"><?php echo $wk3row[0]; ?> </td>
                                                    <td class="<?php if ($wk3row[1] == '') { echo 'success'; $wk3_total_wins++; } ?>"><?php echo $wk3row[1]; ?> </td>
                                                    <td class="<?php if ($wk3row[2] == '') { echo 'success'; $wk3_total_wins++; } ?>"><?php echo $wk3row[2]; ?> </td>
                                                    <td class="<?php if ($wk3row[3] == '') { echo 'success'; $wk3_total_wins++; } ?>"><?php echo $wk3row[3]; ?> </td>
                                                    <td class="<?php if ($wk3row[4] == '') { echo 'success'; $wk3_total_wins++; } ?>"><?php echo $wk3row[4]; ?> </td>
                                                    <td class="<?php if ($wk3row[5] == '') { echo 'success'; $wk3_total_wins++; } ?>"><?php echo $wk3row[5]; ?> </td>
                                                    <td class="<?php if ($wk3row[6] == '') { echo 'success'; $wk3_total_wins++; } ?>"><?php echo $wk3row[6]; ?> </td>
                                                    <td class="<?php if ($wk3row[7] == '') { echo 'success'; $wk3_total_wins++; } ?>"><?php echo $wk3row[7]; ?> </td>
                                                    <td class="<?php if ($wk3row[8] == '') { echo 'success'; $wk3_total_wins++; } ?>"><?php echo $wk3row[8]; ?> </td>
                                                    <td class="<?php if ($wk3row[9] == '') { echo 'success'; $wk3_total_wins++; } ?>"><?php echo $wk3row[9]; ?> </td>
                                                    <td class="<?php if ($wk3row[10] == '') { echo 'success'; $wk3_total_wins++; } ?>"><?php echo $wk3row[10]; ?> </td>
                                                    <td class="<?php if ($wk3row[11] == '') { echo 'success'; $wk3_total_wins++; } ?>"><?php echo $wk3row[11]; ?> </td>
                                                    <td class="<?php if ($wk3row[12] == '') { echo 'success'; $wk3_total_wins++; } ?>"><?php echo $wk3row[12]; ?> </td>
                                                    <td class="<?php if ($wk3row[13] == '') { echo 'success'; $wk3_total_wins++; } ?>"><?php echo $wk3row[13]; ?> </td>
                                                    <td class="<?php if ($wk3row[14] == '') { echo 'success'; $wk3_total_wins++; } ?>"><?php echo $wk3row[14]; ?> </td>
                                                    <td class="<?php if ($wk3row[15] == '') { echo 'success'; $wk3_total_wins++; } ?>"><?php echo $wk3row[15]; ?> </td>
                                                    <td class="<?php if ($wk3row[16] == '') { echo 'success'; $wk3_total_wins++; } ?>"><?php echo $wk3row[16]; ?> </td>
                                                    <td class="<?php if ($wk3row[17] == '') { echo 'success'; } ?>"><?php echo $wk3row[17]; ?> </td>
                                                    <td><?php echo $wk3_total_wins; ?></td>
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

                            <div id="view-picks-wk4-panel" class="panel-collapse collapse<?php echo(($now > strtotime("22 September 2014") && $now < strtotime("30 September 2014")) ? ' in' : ''); ?>">
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
                                            <?php
                                            $username = $_SESSION['Username'];
                                            $show_wk4_query = mysql_query("SELECT wk4Complete FROM wk4 WHERE Username = '".$username."'");
                                            $wk4_query = mysql_query("SELECT * FROM wk4 GROUP BY Username");
                                            if (mysql_result($show_wk4_query, 0) == 1) {
                                            ?>
                                            <tbody>
                                            <?php while ($wk4row = mysql_fetch_array($wk4_query, MYSQL_NUM)) {
                                                $wk4_total_wins = 0;
                                            ?>
                                                <tr>
                                                    <td class="<?php if ($wk4row[0] == '') { echo 'success'; } ?>"><?php echo $wk4row[0]; ?> </td>
                                                    <td class="<?php if ($wk4row[1] == '') { echo 'success'; $wk4_total_wins++; } ?>"><?php echo $wk4row[1]; ?> </td>
                                                    <td class="<?php if ($wk4row[2] == '') { echo 'success'; $wk4_total_wins++; } ?>"><?php echo $wk4row[2]; ?> </td>
                                                    <td class="<?php if ($wk4row[3] == '') { echo 'success'; $wk4_total_wins++; } ?>"><?php echo $wk4row[3]; ?> </td>
                                                    <td class="<?php if ($wk4row[4] == '') { echo 'success'; $wk4_total_wins++; } ?>"><?php echo $wk4row[4]; ?> </td>
                                                    <td class="<?php if ($wk4row[5] == '') { echo 'success'; $wk4_total_wins++; } ?>"><?php echo $wk4row[5]; ?> </td>
                                                    <td class="<?php if ($wk4row[6] == '') { echo 'success'; $wk4_total_wins++; } ?>"><?php echo $wk4row[6]; ?> </td>
                                                    <td class="<?php if ($wk4row[7] == '') { echo 'success'; $wk4_total_wins++; } ?>"><?php echo $wk4row[7]; ?> </td>
                                                    <td class="<?php if ($wk4row[8] == '') { echo 'success'; $wk4_total_wins++; } ?>"><?php echo $wk4row[8]; ?> </td>
                                                    <td class="<?php if ($wk4row[9] == '') { echo 'success'; $wk4_total_wins++; } ?>"><?php echo $wk4row[9]; ?> </td>
                                                    <td class="<?php if ($wk4row[10] == '') { echo 'success'; $wk4_total_wins++; } ?>"><?php echo $wk4row[10]; ?> </td>
                                                    <td class="<?php if ($wk4row[11] == '') { echo 'success'; $wk4_total_wins++; } ?>"><?php echo $wk4row[11]; ?> </td>
                                                    <td class="<?php if ($wk4row[12] == '') { echo 'success'; $wk4_total_wins++; } ?>"><?php echo $wk4row[12]; ?> </td>
                                                    <td class="<?php if ($wk4row[13] == '') { echo 'success'; $wk4_total_wins++; } ?>"><?php echo $wk4row[13]; ?> </td>
                                                    <td class="<?php if ($wk4row[14] == '') { echo 'success'; } ?>"><?php echo $wk4row[14]; ?> </td>
                                                    <td><?php echo $wk4_total_wins; ?></td>
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

                            <div id="view-picks-wk5-panel" class="panel-collapse collapse<?php echo(($now > strtotime("29 September 2014") && $now < strtotime("07 October 2014")) ? ' in' : ''); ?>">
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
                                            <?php
                                            $username = $_SESSION['Username'];
                                            $show_wk5_query = mysql_query("SELECT wk5Complete FROM wk5 WHERE Username = '".$username."'");
                                            $wk5_query = mysql_query("SELECT * FROM wk5 GROUP BY Username");
                                            if (mysql_result($show_wk5_query, 0) == 1) {
                                            ?>
                                            <tbody>
                                            <?php while ($wk5row = mysql_fetch_array($wk5_query, MYSQL_NUM)) {
                                                $wk5_total_wins = 0;
                                            ?>
                                                <tr>
                                                    <td class="<?php if ($wk5row[0] == '') { echo 'success'; } ?>"><?php echo $wk5row[0]; ?> </td>
                                                    <td class="<?php if ($wk5row[1] == '') { echo 'success'; $wk5_total_wins++; } ?>"><?php echo $wk5row[1]; ?> </td>
                                                    <td class="<?php if ($wk5row[2] == '') { echo 'success'; $wk5_total_wins++; } ?>"><?php echo $wk5row[2]; ?> </td>
                                                    <td class="<?php if ($wk5row[3] == '') { echo 'success'; $wk5_total_wins++; } ?>"><?php echo $wk5row[3]; ?> </td>
                                                    <td class="<?php if ($wk5row[4] == '') { echo 'success'; $wk5_total_wins++; } ?>"><?php echo $wk5row[4]; ?> </td>
                                                    <td class="<?php if ($wk5row[5] == '') { echo 'success'; $wk5_total_wins++; } ?>"><?php echo $wk5row[5]; ?> </td>
                                                    <td class="<?php if ($wk5row[6] == '') { echo 'success'; $wk5_total_wins++; } ?>"><?php echo $wk5row[6]; ?> </td>
                                                    <td class="<?php if ($wk5row[7] == '') { echo 'success'; $wk5_total_wins++; } ?>"><?php echo $wk5row[7]; ?> </td>
                                                    <td class="<?php if ($wk5row[8] == '') { echo 'success'; $wk5_total_wins++; } ?>"><?php echo $wk5row[8]; ?> </td>
                                                    <td class="<?php if ($wk5row[9] == '') { echo 'success'; $wk5_total_wins++; } ?>"><?php echo $wk5row[9]; ?> </td>
                                                    <td class="<?php if ($wk5row[10] == '') { echo 'success'; $wk5_total_wins++; } ?>"><?php echo $wk5row[10]; ?> </td>
                                                    <td class="<?php if ($wk5row[11] == '') { echo 'success'; $wk5_total_wins++; } ?>"><?php echo $wk5row[11]; ?> </td>
                                                    <td class="<?php if ($wk5row[12] == '') { echo 'success'; $wk5_total_wins++; } ?>"><?php echo $wk5row[12]; ?> </td>
                                                    <td class="<?php if ($wk5row[13] == '') { echo 'success'; $wk5_total_wins++; } ?>"><?php echo $wk5row[13]; ?> </td>
                                                    <td class="<?php if ($wk5row[14] == '') { echo 'success'; $wk5_total_wins++; } ?>"><?php echo $wk5row[14]; ?> </td>
                                                    <td class="<?php if ($wk5row[15] == '') { echo 'success'; $wk5_total_wins++; } ?>"><?php echo $wk5row[15]; ?> </td>
                                                    <td class="<?php if ($wk5row[16] == '') { echo 'success'; } ?>"><?php echo $wk5row[16]; ?> </td>
                                                    <td><?php echo $wk5_total_wins; ?></td>
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

                            <div id="view-picks-wk6-panel" class="panel-collapse collapse<?php echo(($now > strtotime("06 October 2014") && $now < strtotime("14 October 2014")) ? ' in' : ''); ?>">
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
                                            <?php
                                            $username = $_SESSION['Username'];
                                            $show_wk6_query = mysql_query("SELECT wk6Complete FROM wk6 WHERE Username = '".$username."'");
                                            $wk6_query = mysql_query("SELECT * FROM wk6 GROUP BY Username");
                                            if (mysql_result($show_wk6_query, 0) == 1) {
                                            ?>
                                            <tbody>
                                            <?php while ($wk6row = mysql_fetch_array($wk6_query, MYSQL_NUM)) {
                                                $wk6_total_wins = 0;
                                            ?>
                                                <tr>
                                                    <td class="<?php if ($wk6row[0] == '') { echo 'success'; } ?>"><?php echo $wk6row[0]; ?> </td>
                                                    <td class="<?php if ($wk6row[1] == '') { echo 'success'; $wk6_total_wins++; } ?>"><?php echo $wk6row[1]; ?> </td>
                                                    <td class="<?php if ($wk6row[2] == '') { echo 'success'; $wk6_total_wins++; } ?>"><?php echo $wk6row[2]; ?> </td>
                                                    <td class="<?php if ($wk6row[3] == '') { echo 'success'; $wk6_total_wins++; } ?>"><?php echo $wk6row[3]; ?> </td>
                                                    <td class="<?php if ($wk6row[4] == '') { echo 'success'; $wk6_total_wins++; } ?>"><?php echo $wk6row[4]; ?> </td>
                                                    <td class="<?php if ($wk6row[5] == '') { echo 'success'; $wk6_total_wins++; } ?>"><?php echo $wk6row[5]; ?> </td>
                                                    <td class="<?php if ($wk6row[6] == '') { echo 'success'; $wk6_total_wins++; } ?>"><?php echo $wk6row[6]; ?> </td>
                                                    <td class="<?php if ($wk6row[7] == '') { echo 'success'; $wk6_total_wins++; } ?>"><?php echo $wk6row[7]; ?> </td>
                                                    <td class="<?php if ($wk6row[8] == '') { echo 'success'; $wk6_total_wins++; } ?>"><?php echo $wk6row[8]; ?> </td>
                                                    <td class="<?php if ($wk6row[9] == '') { echo 'success'; $wk6_total_wins++; } ?>"><?php echo $wk6row[9]; ?> </td>
                                                    <td class="<?php if ($wk6row[10] == '') { echo 'success'; $wk6_total_wins++; } ?>"><?php echo $wk6row[10]; ?> </td>
                                                    <td class="<?php if ($wk6row[11] == '') { echo 'success'; $wk6_total_wins++; } ?>"><?php echo $wk6row[11]; ?> </td>
                                                    <td class="<?php if ($wk6row[12] == '') { echo 'success'; $wk6_total_wins++; } ?>"><?php echo $wk6row[12]; ?> </td>
                                                    <td class="<?php if ($wk6row[13] == '') { echo 'success'; $wk6_total_wins++; } ?>"><?php echo $wk6row[13]; ?> </td>
                                                    <td class="<?php if ($wk6row[14] == '') { echo 'success'; $wk6_total_wins++; } ?>"><?php echo $wk6row[14]; ?> </td>
                                                    <td class="<?php if ($wk6row[15] == '') { echo 'success'; $wk6_total_wins++; } ?>"><?php echo $wk6row[15]; ?> </td>
                                                    <td class="<?php if ($wk6row[16] == '') { echo 'success'; } ?>"><?php echo $wk6row[16]; ?> </td>
                                                    <td><?php echo $wk6_total_wins; ?></td>
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

                            <div id="view-picks-wk7-panel" class="panel-collapse collapse<?php echo(($now > strtotime("13 October 2014") && $now < strtotime("21 October 2014")) ? ' in' : ''); ?>">
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
                                            <?php
                                            $username = $_SESSION['Username'];
                                            $show_wk7_query = mysql_query("SELECT wk7Complete FROM wk7 WHERE Username = '".$username."'");
                                            $wk7_query = mysql_query("SELECT * FROM wk7 GROUP BY Username");
                                            if (mysql_result($show_wk7_query, 0) == 1) {
                                            ?>
                                            <tbody>
                                            <?php while ($wk7row = mysql_fetch_array($wk7_query, MYSQL_NUM)) {
                                                $wk7_total_wins = 0;
                                            ?>
                                                <tr>
                                                    <td class="<?php if ($wk7row[0] == '') { echo 'success'; } ?>"><?php echo $wk7row[0]; ?> </td>
                                                    <td class="<?php if ($wk7row[1] == '') { echo 'success'; $wk7_total_wins++; } ?>"><?php echo $wk7row[1]; ?> </td>
                                                    <td class="<?php if ($wk7row[2] == '') { echo 'success'; $wk7_total_wins++; } ?>"><?php echo $wk7row[2]; ?> </td>
                                                    <td class="<?php if ($wk7row[3] == '') { echo 'success'; $wk7_total_wins++; } ?>"><?php echo $wk7row[3]; ?> </td>
                                                    <td class="<?php if ($wk7row[4] == '') { echo 'success'; $wk7_total_wins++; } ?>"><?php echo $wk7row[4]; ?> </td>
                                                    <td class="<?php if ($wk7row[5] == '') { echo 'success'; $wk7_total_wins++; } ?>"><?php echo $wk7row[5]; ?> </td>
                                                    <td class="<?php if ($wk7row[6] == '') { echo 'success'; $wk7_total_wins++; } ?>"><?php echo $wk7row[6]; ?> </td>
                                                    <td class="<?php if ($wk7row[7] == '') { echo 'success'; $wk7_total_wins++; } ?>"><?php echo $wk7row[7]; ?> </td>
                                                    <td class="<?php if ($wk7row[8] == '') { echo 'success'; $wk7_total_wins++; } ?>"><?php echo $wk7row[8]; ?> </td>
                                                    <td class="<?php if ($wk7row[9] == '') { echo 'success'; $wk7_total_wins++; } ?>"><?php echo $wk7row[9]; ?> </td>
                                                    <td class="<?php if ($wk7row[10] == '') { echo 'success'; $wk7_total_wins++; } ?>"><?php echo $wk7row[10]; ?> </td>
                                                    <td class="<?php if ($wk7row[11] == '') { echo 'success'; $wk7_total_wins++; } ?>"><?php echo $wk7row[11]; ?> </td>
                                                    <td class="<?php if ($wk7row[12] == '') { echo 'success'; $wk7_total_wins++; } ?>"><?php echo $wk7row[12]; ?> </td>
                                                    <td class="<?php if ($wk7row[13] == '') { echo 'success'; $wk7_total_wins++; } ?>"><?php echo $wk7row[13]; ?> </td>
                                                    <td class="<?php if ($wk7row[14] == '') { echo 'success'; $wk7_total_wins++; } ?>"><?php echo $wk7row[14]; ?> </td>
                                                    <td class="<?php if ($wk7row[15] == '') { echo 'success'; $wk7_total_wins++; } ?>"><?php echo $wk7row[15]; ?> </td>
                                                    <td class="<?php if ($wk7row[16] == '') { echo 'success'; } ?>"><?php echo $wk7row[16]; ?> </td>
                                                    <td><?php echo $wk7_total_wins; ?></td>
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

                            <div id="view-picks-wk8-panel" class="panel-collapse collapse<?php echo(($now > strtotime("20 October 2014") && $now < strtotime("28 October 2014")) ? ' in' : ''); ?>">
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
                                            <?php
                                            $username = $_SESSION['Username'];
                                            $show_wk8_query = mysql_query("SELECT wk8Complete FROM wk8 WHERE Username = '".$username."'");
                                            $wk8_query = mysql_query("SELECT * FROM wk8 GROUP BY Username");
                                            if (mysql_result($show_wk8_query, 0) == 1) {
                                            ?>
                                            <tbody>
                                            <?php while ($wk8row = mysql_fetch_array($wk8_query, MYSQL_NUM)) {
                                                $wk8_total_wins = 0;
                                            ?>
                                                <tr>
                                                    <td class="<?php if ($wk8row[0] == '') { echo 'success'; } ?>"><?php echo $wk8row[0]; ?> </td>
                                                    <td class="<?php if ($wk8row[1] == '') { echo 'success'; $wk8_total_wins++; } ?>"><?php echo $wk8row[1]; ?> </td>
                                                    <td class="<?php if ($wk8row[2] == '') { echo 'success'; $wk8_total_wins++; } ?>"><?php echo $wk8row[2]; ?> </td>
                                                    <td class="<?php if ($wk8row[3] == '') { echo 'success'; $wk8_total_wins++; } ?>"><?php echo $wk8row[3]; ?> </td>
                                                    <td class="<?php if ($wk8row[4] == '') { echo 'success'; $wk8_total_wins++; } ?>"><?php echo $wk8row[4]; ?> </td>
                                                    <td class="<?php if ($wk8row[5] == '') { echo 'success'; $wk8_total_wins++; } ?>"><?php echo $wk8row[5]; ?> </td>
                                                    <td class="<?php if ($wk8row[6] == '') { echo 'success'; $wk8_total_wins++; } ?>"><?php echo $wk8row[6]; ?> </td>
                                                    <td class="<?php if ($wk8row[7] == '') { echo 'success'; $wk8_total_wins++; } ?>"><?php echo $wk8row[7]; ?> </td>
                                                    <td class="<?php if ($wk8row[8] == '') { echo 'success'; $wk8_total_wins++; } ?>"><?php echo $wk8row[8]; ?> </td>
                                                    <td class="<?php if ($wk8row[9] == '') { echo 'success'; $wk8_total_wins++; } ?>"><?php echo $wk8row[9]; ?> </td>
                                                    <td class="<?php if ($wk8row[10] == '') { echo 'success'; $wk8_total_wins++; } ?>"><?php echo $wk8row[10]; ?> </td>
                                                    <td class="<?php if ($wk8row[11] == '') { echo 'success'; $wk8_total_wins++; } ?>"><?php echo $wk8row[11]; ?> </td>
                                                    <td class="<?php if ($wk8row[12] == '') { echo 'success'; $wk8_total_wins++; } ?>"><?php echo $wk8row[12]; ?> </td>
                                                    <td class="<?php if ($wk8row[13] == '') { echo 'success'; $wk8_total_wins++; } ?>"><?php echo $wk8row[13]; ?> </td>
                                                    <td class="<?php if ($wk8row[14] == '') { echo 'success'; $wk8_total_wins++; } ?>"><?php echo $wk8row[14]; ?> </td>
                                                    <td class="<?php if ($wk8row[15] == '') { echo 'success'; $wk8_total_wins++; } ?>"><?php echo $wk8row[15]; ?> </td>
                                                    <td class="<?php if ($wk8row[16] == '') { echo 'success'; } ?>"><?php echo $wk8row[16]; ?> </td>
                                                    <td><?php echo $wk8_total_wins; ?></td>
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

                            <div id="view-picks-wk9-panel" class="panel-collapse collapse<?php echo(($now > strtotime("27 October 2014") && $now < strtotime("04 November 2014")) ? ' in' : ''); ?>">
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
                                            <?php
                                            $username = $_SESSION['Username'];
                                            $show_wk9_query = mysql_query("SELECT wk9Complete FROM wk9 WHERE Username = '".$username."'");
                                            $wk9_query = mysql_query("SELECT * FROM wk9 GROUP BY Username");
                                            if (mysql_result($show_wk9_query, 0) == 1) {
                                            ?>
                                            <tbody>
                                            <?php while ($wk9row = mysql_fetch_array($wk9_query, MYSQL_NUM)) {
                                                $wk9_total_wins = 0;
                                            ?>
                                                <tr>
                                                    <td class="<?php if ($wk9row[0] == '') { echo 'success'; } ?>"><?php echo $wk9row[0]; ?> </td>
                                                    <td class="<?php if ($wk9row[1] == '') { echo 'success'; $wk9_total_wins++; } ?>"><?php echo $wk9row[1]; ?> </td>
                                                    <td class="<?php if ($wk9row[2] == '') { echo 'success'; $wk9_total_wins++; } ?>"><?php echo $wk9row[2]; ?> </td>
                                                    <td class="<?php if ($wk9row[3] == '') { echo 'success'; $wk9_total_wins++; } ?>"><?php echo $wk9row[3]; ?> </td>
                                                    <td class="<?php if ($wk9row[4] == '') { echo 'success'; $wk9_total_wins++; } ?>"><?php echo $wk9row[4]; ?> </td>
                                                    <td class="<?php if ($wk9row[5] == '') { echo 'success'; $wk9_total_wins++; } ?>"><?php echo $wk9row[5]; ?> </td>
                                                    <td class="<?php if ($wk9row[6] == '') { echo 'success'; $wk9_total_wins++; } ?>"><?php echo $wk9row[6]; ?> </td>
                                                    <td class="<?php if ($wk9row[7] == '') { echo 'success'; $wk9_total_wins++; } ?>"><?php echo $wk9row[7]; ?> </td>
                                                    <td class="<?php if ($wk9row[8] == '') { echo 'success'; $wk9_total_wins++; } ?>"><?php echo $wk9row[8]; ?> </td>
                                                    <td class="<?php if ($wk9row[9] == '') { echo 'success'; $wk9_total_wins++; } ?>"><?php echo $wk9row[9]; ?> </td>
                                                    <td class="<?php if ($wk9row[10] == '') { echo 'success'; $wk9_total_wins++; } ?>"><?php echo $wk9row[10]; ?> </td>
                                                    <td class="<?php if ($wk9row[11] == '') { echo 'success'; $wk9_total_wins++; } ?>"><?php echo $wk9row[11]; ?> </td>
                                                    <td class="<?php if ($wk9row[12] == '') { echo 'success'; $wk9_total_wins++; } ?>"><?php echo $wk9row[12]; ?> </td>
                                                    <td class="<?php if ($wk9row[13] == '') { echo 'success'; $wk9_total_wins++; } ?>"><?php echo $wk9row[13]; ?> </td>
                                                    <td class="<?php if ($wk9row[14] == '') { echo 'success'; } ?>"><?php echo $wk9row[14]; ?> </td>
                                                    <td><?php echo $wk9_total_wins; ?></td>
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

                            <div id="view-picks-wk10-panel" class="panel-collapse collapse<?php echo(($now > strtotime("03 November 2014") && $now < strtotime("11 November 2014")) ? ' in' : ''); ?>">
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
                                            <?php
                                            $username = $_SESSION['Username'];
                                            $show_wk10_query = mysql_query("SELECT wk10Complete FROM wk10 WHERE Username = '".$username."'");
                                            $wk10_query = mysql_query("SELECT * FROM wk10 GROUP BY Username");
                                            if (mysql_result($show_wk10_query, 0) == 1) {
                                            ?>
                                            <tbody>
                                            <?php while ($wk10row = mysql_fetch_array($wk10_query, MYSQL_NUM)) {
                                                $wk10_total_wins = 0;
                                            ?>
                                                <tr>
                                                    <td class="<?php if ($wk10row[0] == '') { echo 'success'; } ?>"><?php echo $wk10row[0]; ?> </td>
                                                    <td class="<?php if ($wk10row[1] == '') { echo 'success'; $wk10_total_wins++; } ?>"><?php echo $wk10row[1]; ?> </td>
                                                    <td class="<?php if ($wk10row[2] == '') { echo 'success'; $wk10_total_wins++; } ?>"><?php echo $wk10row[2]; ?> </td>
                                                    <td class="<?php if ($wk10row[3] == '') { echo 'success'; $wk10_total_wins++; } ?>"><?php echo $wk10row[3]; ?> </td>
                                                    <td class="<?php if ($wk10row[4] == '') { echo 'success'; $wk10_total_wins++; } ?>"><?php echo $wk10row[4]; ?> </td>
                                                    <td class="<?php if ($wk10row[5] == '') { echo 'success'; $wk10_total_wins++; } ?>"><?php echo $wk10row[5]; ?> </td>
                                                    <td class="<?php if ($wk10row[6] == '') { echo 'success'; $wk10_total_wins++; } ?>"><?php echo $wk10row[6]; ?> </td>
                                                    <td class="<?php if ($wk10row[7] == '') { echo 'success'; $wk10_total_wins++; } ?>"><?php echo $wk10row[7]; ?> </td>
                                                    <td class="<?php if ($wk10row[8] == '') { echo 'success'; $wk10_total_wins++; } ?>"><?php echo $wk10row[8]; ?> </td>
                                                    <td class="<?php if ($wk10row[9] == '') { echo 'success'; $wk10_total_wins++; } ?>"><?php echo $wk10row[9]; ?> </td>
                                                    <td class="<?php if ($wk10row[10] == '') { echo 'success'; $wk10_total_wins++; } ?>"><?php echo $wk10row[10]; ?> </td>
                                                    <td class="<?php if ($wk10row[11] == '') { echo 'success'; $wk10_total_wins++; } ?>"><?php echo $wk10row[11]; ?> </td>
                                                    <td class="<?php if ($wk10row[12] == '') { echo 'success'; $wk10_total_wins++; } ?>"><?php echo $wk10row[12]; ?> </td>
                                                    <td class="<?php if ($wk10row[13] == '') { echo 'success'; $wk10_total_wins++; } ?>"><?php echo $wk10row[13]; ?> </td>
                                                    <td class="<?php if ($wk10row[14] == '') { echo 'success'; } ?>"><?php echo $wk10row[14]; ?> </td>
                                                    <td><?php echo $wk10_total_wins; ?></td>
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

                            <div id="view-picks-wk11-panel" class="panel-collapse collapse<?php echo(($now > strtotime("10 November 2014") && $now < strtotime("18 November 2014")) ? ' in' : ''); ?>">
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
                                            <?php
                                            $username = $_SESSION['Username'];
                                            $show_wk11_query = mysql_query("SELECT wk11Complete FROM wk11 WHERE Username = '".$username."'");
                                            $wk11_query = mysql_query("SELECT * FROM wk11 GROUP BY Username");
                                            if (mysql_result($show_wk11_query, 0) == 1) {
                                            ?>
                                            <tbody>
                                            <?php while ($wk11row = mysql_fetch_array($wk11_query, MYSQL_NUM)) {
                                                $wk11_total_wins = 0;
                                            ?>
                                                <tr>
                                                    <td class="<?php if ($wk11row[0] == '') { echo 'success'; } ?>"><?php echo $wk11row[0]; ?> </td>
                                                    <td class="<?php if ($wk11row[1] == '') { echo 'success'; $wk11_total_wins++; } ?>"><?php echo $wk11row[1]; ?> </td>
                                                    <td class="<?php if ($wk11row[2] == '') { echo 'success'; $wk11_total_wins++; } ?>"><?php echo $wk11row[2]; ?> </td>
                                                    <td class="<?php if ($wk11row[3] == '') { echo 'success'; $wk11_total_wins++; } ?>"><?php echo $wk11row[3]; ?> </td>
                                                    <td class="<?php if ($wk11row[4] == '') { echo 'success'; $wk11_total_wins++; } ?>"><?php echo $wk11row[4]; ?> </td>
                                                    <td class="<?php if ($wk11row[5] == '') { echo 'success'; $wk11_total_wins++; } ?>"><?php echo $wk11row[5]; ?> </td>
                                                    <td class="<?php if ($wk11row[6] == '') { echo 'success'; $wk11_total_wins++; } ?>"><?php echo $wk11row[6]; ?> </td>
                                                    <td class="<?php if ($wk11row[7] == '') { echo 'success'; $wk11_total_wins++; } ?>"><?php echo $wk11row[7]; ?> </td>
                                                    <td class="<?php if ($wk11row[8] == '') { echo 'success'; $wk11_total_wins++; } ?>"><?php echo $wk11row[8]; ?> </td>
                                                    <td class="<?php if ($wk11row[9] == '') { echo 'success'; $wk11_total_wins++; } ?>"><?php echo $wk11row[9]; ?> </td>
                                                    <td class="<?php if ($wk11row[10] == '') { echo 'success'; $wk11_total_wins++; } ?>"><?php echo $wk11row[10]; ?> </td>
                                                    <td class="<?php if ($wk11row[11] == '') { echo 'success'; $wk11_total_wins++; } ?>"><?php echo $wk11row[11]; ?> </td>
                                                    <td class="<?php if ($wk11row[12] == '') { echo 'success'; $wk11_total_wins++; } ?>"><?php echo $wk11row[12]; ?> </td>
                                                    <td class="<?php if ($wk11row[13] == '') { echo 'success'; $wk11_total_wins++; } ?>"><?php echo $wk11row[13]; ?> </td>
                                                    <td class="<?php if ($wk11row[14] == '') { echo 'success'; $wk11_total_wins++; } ?>"><?php echo $wk11row[14]; ?> </td>
                                                    <td class="<?php if ($wk11row[15] == '') { echo 'success'; } ?>"><?php echo $wk11row[15]; ?> </td>
                                                    <td><?php echo $wk11_total_wins; ?></td>
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

                            <div id="view-picks-wk12-panel" class="panel-collapse collapse<?php echo(($now > strtotime("17 November 2014") && $now < strtotime("25 November 2014")) ? ' in' : ''); ?>">
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
                                            <?php
                                            $username = $_SESSION['Username'];
                                            $show_wk12_query = mysql_query("SELECT wk12Complete FROM wk12 WHERE Username = '".$username."'");
                                            $wk12_query = mysql_query("SELECT * FROM wk12 GROUP BY Username");
                                            if (mysql_result($show_wk12_query, 0) == 1) {
                                            ?>
                                            <tbody>
                                            <?php while ($wk12row = mysql_fetch_array($wk12_query, MYSQL_NUM)) {
                                                $wk12_total_wins = 0;
                                            ?>
                                                <tr>
                                                    <td class="<?php if ($wk12row[0] == '') { echo 'success'; } ?>"><?php echo $wk12row[0]; ?> </td>
                                                    <td class="<?php if ($wk12row[1] == '') { echo 'success'; $wk12_total_wins++; } ?>"><?php echo $wk12row[1]; ?> </td>
                                                    <td class="<?php if ($wk12row[2] == '') { echo 'success'; $wk12_total_wins++; } ?>"><?php echo $wk12row[2]; ?> </td>
                                                    <td class="<?php if ($wk12row[3] == '') { echo 'success'; $wk12_total_wins++; } ?>"><?php echo $wk12row[3]; ?> </td>
                                                    <td class="<?php if ($wk12row[4] == '') { echo 'success'; $wk12_total_wins++; } ?>"><?php echo $wk12row[4]; ?> </td>
                                                    <td class="<?php if ($wk12row[5] == '') { echo 'success'; $wk12_total_wins++; } ?>"><?php echo $wk12row[5]; ?> </td>
                                                    <td class="<?php if ($wk12row[6] == '') { echo 'success'; $wk12_total_wins++; } ?>"><?php echo $wk12row[6]; ?> </td>
                                                    <td class="<?php if ($wk12row[7] == '') { echo 'success'; $wk12_total_wins++; } ?>"><?php echo $wk12row[7]; ?> </td>
                                                    <td class="<?php if ($wk12row[8] == '') { echo 'success'; $wk12_total_wins++; } ?>"><?php echo $wk12row[8]; ?> </td>
                                                    <td class="<?php if ($wk12row[9] == '') { echo 'success'; $wk12_total_wins++; } ?>"><?php echo $wk12row[9]; ?> </td>
                                                    <td class="<?php if ($wk12row[10] == '') { echo 'success'; $wk12_total_wins++; } ?>"><?php echo $wk12row[10]; ?> </td>
                                                    <td class="<?php if ($wk12row[11] == '') { echo 'success'; $wk12_total_wins++; } ?>"><?php echo $wk12row[11]; ?> </td>
                                                    <td class="<?php if ($wk12row[12] == '') { echo 'success'; $wk12_total_wins++; } ?>"><?php echo $wk12row[12]; ?> </td>
                                                    <td class="<?php if ($wk12row[13] == '') { echo 'success'; $wk12_total_wins++; } ?>"><?php echo $wk12row[13]; ?> </td>
                                                    <td class="<?php if ($wk12row[14] == '') { echo 'success'; $wk12_total_wins++; } ?>"><?php echo $wk12row[14]; ?> </td>
                                                    <td class="<?php if ($wk12row[15] == '') { echo 'success'; $wk12_total_wins++; } ?>"><?php echo $wk12row[15]; ?> </td>
                                                    <td class="<?php if ($wk12row[16] == '') { echo 'success'; } ?>"><?php echo $wk12row[16]; ?> </td>
                                                    <td><?php echo $wk12_total_wins; ?></td>
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

                            <div id="view-picks-wk13-panel" class="panel-collapse collapse<?php echo(($now > strtotime("24 November 2014") && $now < strtotime("02 December 2014")) ? ' in' : ''); ?>">
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
                                            <?php
                                            $username = $_SESSION['Username'];
                                            $show_wk13_query = mysql_query("SELECT wk13Complete FROM wk13 WHERE Username = '".$username."'");
                                            $wk13_query = mysql_query("SELECT * FROM wk13 GROUP BY Username");
                                            if (mysql_result($show_wk13_query, 0) == 1) {
                                            ?>
                                            <tbody>
                                            <?php while ($wk13row = mysql_fetch_array($wk13_query, MYSQL_NUM)) {
                                                $wk13_total_wins = 0;
                                            ?>
                                                <tr>
                                                    <td class="<?php if ($wk13row[0] == '') { echo 'success'; } ?>"><?php echo $wk13row[0]; ?> </td>
                                                    <td class="<?php if ($wk13row[1] == '') { echo 'success'; $wk13_total_wins++; } ?>"><?php echo $wk13row[1]; ?> </td>
                                                    <td class="<?php if ($wk13row[2] == '') { echo 'success'; $wk13_total_wins++; } ?>"><?php echo $wk13row[2]; ?> </td>
                                                    <td class="<?php if ($wk13row[3] == '') { echo 'success'; $wk13_total_wins++; } ?>"><?php echo $wk13row[3]; ?> </td>
                                                    <td class="<?php if ($wk13row[4] == '') { echo 'success'; $wk13_total_wins++; } ?>"><?php echo $wk13row[4]; ?> </td>
                                                    <td class="<?php if ($wk13row[5] == '') { echo 'success'; $wk13_total_wins++; } ?>"><?php echo $wk13row[5]; ?> </td>
                                                    <td class="<?php if ($wk13row[6] == '') { echo 'success'; $wk13_total_wins++; } ?>"><?php echo $wk13row[6]; ?> </td>
                                                    <td class="<?php if ($wk13row[7] == '') { echo 'success'; $wk13_total_wins++; } ?>"><?php echo $wk13row[7]; ?> </td>
                                                    <td class="<?php if ($wk13row[8] == '') { echo 'success'; $wk13_total_wins++; } ?>"><?php echo $wk13row[8]; ?> </td>
                                                    <td class="<?php if ($wk13row[9] == '') { echo 'success'; $wk13_total_wins++; } ?>"><?php echo $wk13row[9]; ?> </td>
                                                    <td class="<?php if ($wk13row[10] == '') { echo 'success'; $wk13_total_wins++; } ?>"><?php echo $wk13row[10]; ?> </td>
                                                    <td class="<?php if ($wk13row[11] == '') { echo 'success'; $wk13_total_wins++; } ?>"><?php echo $wk13row[11]; ?> </td>
                                                    <td class="<?php if ($wk13row[12] == '') { echo 'success'; $wk13_total_wins++; } ?>"><?php echo $wk13row[12]; ?> </td>
                                                    <td class="<?php if ($wk13row[13] == '') { echo 'success'; $wk13_total_wins++; } ?>"><?php echo $wk13row[13]; ?> </td>
                                                    <td class="<?php if ($wk13row[14] == '') { echo 'success'; $wk13_total_wins++; } ?>"><?php echo $wk13row[14]; ?> </td>
                                                    <td class="<?php if ($wk13row[15] == '') { echo 'success'; $wk13_total_wins++; } ?>"><?php echo $wk13row[15]; ?> </td>
                                                    <td class="<?php if ($wk13row[16] == '') { echo 'success'; $wk13_total_wins++; } ?>"><?php echo $wk13row[16]; ?> </td>
                                                    <td class="<?php if ($wk13row[17] == '') { echo 'success'; } ?>"><?php echo $wk13row[17]; ?> </td>
                                                    <td><?php echo $wk13_total_wins; ?></td>
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

                            <div id="view-picks-wk14-panel" class="panel-collapse collapse<?php echo(($now > strtotime("01 December 2014") && $now < strtotime("09 December 2014")) ? ' in' : ''); ?>">
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
                                            <?php
                                            $username = $_SESSION['Username'];
                                            $show_wk14_query = mysql_query("SELECT wk14Complete FROM wk14 WHERE Username = '".$username."'");
                                            $wk14_query = mysql_query("SELECT * FROM wk14 GROUP BY Username");
                                            if (mysql_result($show_wk14_query, 0) == 1) {
                                            ?>
                                            <tbody>
                                            <?php while ($wk14row = mysql_fetch_array($wk14_query, MYSQL_NUM)) {
                                                $wk14_total_wins = 0;
                                            ?>
                                                <tr>
                                                    <td class="<?php if ($wk14row[0] == '') { echo 'success'; } ?>"><?php echo $wk14row[0]; ?> </td>
                                                    <td class="<?php if ($wk14row[1] == '') { echo 'success'; $wk14_total_wins++; } ?>"><?php echo $wk14row[1]; ?> </td>
                                                    <td class="<?php if ($wk14row[2] == '') { echo 'success'; $wk14_total_wins++; } ?>"><?php echo $wk14row[2]; ?> </td>
                                                    <td class="<?php if ($wk14row[3] == '') { echo 'success'; $wk14_total_wins++; } ?>"><?php echo $wk14row[3]; ?> </td>
                                                    <td class="<?php if ($wk14row[4] == '') { echo 'success'; $wk14_total_wins++; } ?>"><?php echo $wk14row[4]; ?> </td>
                                                    <td class="<?php if ($wk14row[5] == '') { echo 'success'; $wk14_total_wins++; } ?>"><?php echo $wk14row[5]; ?> </td>
                                                    <td class="<?php if ($wk14row[6] == '') { echo 'success'; $wk14_total_wins++; } ?>"><?php echo $wk14row[6]; ?> </td>
                                                    <td class="<?php if ($wk14row[7] == '') { echo 'success'; $wk14_total_wins++; } ?>"><?php echo $wk14row[7]; ?> </td>
                                                    <td class="<?php if ($wk14row[8] == '') { echo 'success'; $wk14_total_wins++; } ?>"><?php echo $wk14row[8]; ?> </td>
                                                    <td class="<?php if ($wk14row[9] == '') { echo 'success'; $wk14_total_wins++; } ?>"><?php echo $wk14row[9]; ?> </td>
                                                    <td class="<?php if ($wk14row[10] == '') { echo 'success'; $wk14_total_wins++; } ?>"><?php echo $wk14row[10]; ?> </td>
                                                    <td class="<?php if ($wk14row[11] == '') { echo 'success'; $wk14_total_wins++; } ?>"><?php echo $wk14row[11]; ?> </td>
                                                    <td class="<?php if ($wk14row[12] == '') { echo 'success'; $wk14_total_wins++; } ?>"><?php echo $wk14row[12]; ?> </td>
                                                    <td class="<?php if ($wk14row[13] == '') { echo 'success'; $wk14_total_wins++; } ?>"><?php echo $wk14row[13]; ?> </td>
                                                    <td class="<?php if ($wk14row[14] == '') { echo 'success'; $wk14_total_wins++; } ?>"><?php echo $wk14row[14]; ?> </td>
                                                    <td class="<?php if ($wk14row[15] == '') { echo 'success'; $wk14_total_wins++; } ?>"><?php echo $wk14row[15]; ?> </td>
                                                    <td class="<?php if ($wk14row[16] == '') { echo 'success'; $wk14_total_wins++; } ?>"><?php echo $wk14row[16]; ?> </td>
                                                    <td class="<?php if ($wk14row[17] == '') { echo 'success'; } ?>"><?php echo $wk14row[17]; ?> </td>
                                                    <td><?php echo $wk14_total_wins; ?></td>
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

                            <div id="view-picks-wk15-panel" class="panel-collapse collapse<?php echo(($now > strtotime("08 December 2014") && $now < strtotime("16 December 2014")) ? ' in' : ''); ?>">
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
                                            <?php
                                            $username = $_SESSION['Username'];
                                            $show_wk15_query = mysql_query("SELECT wk15Complete FROM wk15 WHERE Username = '".$username."'");
                                            $wk15_query = mysql_query("SELECT * FROM wk15 GROUP BY Username");
                                            if (mysql_result($show_wk15_query, 0) == 1) {
                                            ?>
                                            <tbody>
                                            <?php while ($wk15row = mysql_fetch_array($wk15_query, MYSQL_NUM)) {
                                                $wk15_total_wins = 0;
                                            ?>
                                                <tr>
                                                    <td class="<?php if ($wk15row[0] == '') { echo 'success'; } ?>"><?php echo $wk15row[0]; ?> </td>
                                                    <td class="<?php if ($wk15row[1] == '') { echo 'success'; $wk15_total_wins++; } ?>"><?php echo $wk15row[1]; ?> </td>
                                                    <td class="<?php if ($wk15row[2] == '') { echo 'success'; $wk15_total_wins++; } ?>"><?php echo $wk15row[2]; ?> </td>
                                                    <td class="<?php if ($wk15row[3] == '') { echo 'success'; $wk15_total_wins++; } ?>"><?php echo $wk15row[3]; ?> </td>
                                                    <td class="<?php if ($wk15row[4] == '') { echo 'success'; $wk15_total_wins++; } ?>"><?php echo $wk15row[4]; ?> </td>
                                                    <td class="<?php if ($wk15row[5] == '') { echo 'success'; $wk15_total_wins++; } ?>"><?php echo $wk15row[5]; ?> </td>
                                                    <td class="<?php if ($wk15row[6] == '') { echo 'success'; $wk15_total_wins++; } ?>"><?php echo $wk15row[6]; ?> </td>
                                                    <td class="<?php if ($wk15row[7] == '') { echo 'success'; $wk15_total_wins++; } ?>"><?php echo $wk15row[7]; ?> </td>
                                                    <td class="<?php if ($wk15row[8] == '') { echo 'success'; $wk15_total_wins++; } ?>"><?php echo $wk15row[8]; ?> </td>
                                                    <td class="<?php if ($wk15row[9] == '') { echo 'success'; $wk15_total_wins++; } ?>"><?php echo $wk15row[9]; ?> </td>
                                                    <td class="<?php if ($wk15row[10] == '') { echo 'success'; $wk15_total_wins++; } ?>"><?php echo $wk15row[10]; ?> </td>
                                                    <td class="<?php if ($wk15row[11] == '') { echo 'success'; $wk15_total_wins++; } ?>"><?php echo $wk15row[11]; ?> </td>
                                                    <td class="<?php if ($wk15row[12] == '') { echo 'success'; $wk15_total_wins++; } ?>"><?php echo $wk15row[12]; ?> </td>
                                                    <td class="<?php if ($wk15row[13] == '') { echo 'success'; $wk15_total_wins++; } ?>"><?php echo $wk15row[13]; ?> </td>
                                                    <td class="<?php if ($wk15row[14] == '') { echo 'success'; $wk15_total_wins++; } ?>"><?php echo $wk15row[14]; ?> </td>
                                                    <td class="<?php if ($wk15row[15] == '') { echo 'success'; $wk15_total_wins++; } ?>"><?php echo $wk15row[15]; ?> </td>
                                                    <td class="<?php if ($wk15row[16] == '') { echo 'success'; $wk15_total_wins++; } ?>"><?php echo $wk15row[16]; ?> </td>
                                                    <td class="<?php if ($wk15row[17] == '') { echo 'success'; } ?>"><?php echo $wk15row[17]; ?> </td>
                                                    <td><?php echo $wk15_total_wins; ?></td>
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

                            <div id="view-picks-wk16-panel" class="panel-collapse collapse<?php echo(($now > strtotime("15 December 2014") && $now < strtotime("22 December 2014")) ? ' in' : ''); ?>">
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
                                            <?php
                                            $username = $_SESSION['Username'];
                                            $show_wk16_query = mysql_query("SELECT wk16Complete FROM wk16 WHERE Username = '".$username."'");
                                            $wk16_query = mysql_query("SELECT * FROM wk16 GROUP BY Username");
                                            if (mysql_result($show_wk16_query, 0) == 1) {
                                            ?>
                                            <tbody>
                                            <?php while ($wk16row = mysql_fetch_array($wk16_query, MYSQL_NUM)) {
                                                $wk16_total_wins = 0;
                                            ?>
                                                <tr>
                                                    <td class="<?php if ($wk16row[0] == '') { echo 'success'; } ?>"><?php echo $wk16row[0]; ?> </td>
                                                    <td class="<?php if ($wk16row[1] == '') { echo 'success'; $wk16_total_wins++; } ?>"><?php echo $wk16row[1]; ?> </td>
                                                    <td class="<?php if ($wk16row[2] == '') { echo 'success'; $wk16_total_wins++; } ?>"><?php echo $wk16row[2]; ?> </td>
                                                    <td class="<?php if ($wk16row[3] == '') { echo 'success'; $wk16_total_wins++; } ?>"><?php echo $wk16row[3]; ?> </td>
                                                    <td class="<?php if ($wk16row[4] == '') { echo 'success'; $wk16_total_wins++; } ?>"><?php echo $wk16row[4]; ?> </td>
                                                    <td class="<?php if ($wk16row[5] == '') { echo 'success'; $wk16_total_wins++; } ?>"><?php echo $wk16row[5]; ?> </td>
                                                    <td class="<?php if ($wk16row[6] == '') { echo 'success'; $wk16_total_wins++; } ?>"><?php echo $wk16row[6]; ?> </td>
                                                    <td class="<?php if ($wk16row[7] == '') { echo 'success'; $wk16_total_wins++; } ?>"><?php echo $wk16row[7]; ?> </td>
                                                    <td class="<?php if ($wk16row[8] == '') { echo 'success'; $wk16_total_wins++; } ?>"><?php echo $wk16row[8]; ?> </td>
                                                    <td class="<?php if ($wk16row[9] == '') { echo 'success'; $wk16_total_wins++; } ?>"><?php echo $wk16row[9]; ?> </td>
                                                    <td class="<?php if ($wk16row[10] == '') { echo 'success'; $wk16_total_wins++; } ?>"><?php echo $wk16row[10]; ?> </td>
                                                    <td class="<?php if ($wk16row[11] == '') { echo 'success'; $wk16_total_wins++; } ?>"><?php echo $wk16row[11]; ?> </td>
                                                    <td class="<?php if ($wk16row[12] == '') { echo 'success'; $wk16_total_wins++; } ?>"><?php echo $wk16row[12]; ?> </td>
                                                    <td class="<?php if ($wk16row[13] == '') { echo 'success'; $wk16_total_wins++; } ?>"><?php echo $wk16row[13]; ?> </td>
                                                    <td class="<?php if ($wk16row[14] == '') { echo 'success'; $wk16_total_wins++; } ?>"><?php echo $wk16row[14]; ?> </td>
                                                    <td class="<?php if ($wk16row[15] == '') { echo 'success'; $wk16_total_wins++; } ?>"><?php echo $wk16row[15]; ?> </td>
                                                    <td class="<?php if ($wk16row[16] == '') { echo 'success'; $wk16_total_wins++; } ?>"><?php echo $wk16row[16]; ?> </td>
                                                    <td class="<?php if ($wk16row[17] == '') { echo 'success'; } ?>"><?php echo $wk16row[17]; ?> </td>
                                                    <td><?php echo $wk16_total_wins; ?></td>
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

                            <div id="view-picks-wk17-panel" class="panel-collapse collapse<?php echo(($now > strtotime("21 December 2014") && $now < strtotime("01 January 2015")) ? ' in' : ''); ?>">
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
                                            <?php
                                            $username = $_SESSION['Username'];
                                            $show_wk17_query = mysql_query("SELECT wk17Complete FROM wk17 WHERE Username = '".$username."'");
                                            $wk17_query = mysql_query("SELECT * FROM wk17 GROUP BY Username");
                                            if (mysql_result($show_wk17_query, 0) == 1) {
                                            ?>
                                            <tbody>
                                            <?php while ($wk17row = mysql_fetch_array($wk17_query, MYSQL_NUM)) {
                                                $wk17_total_wins = 0;
                                            ?>
                                                <tr>
                                                    <td class="<?php if ($wk17row[0] == '') { echo 'success'; } ?>"><?php echo $wk17row[0]; ?> </td>
                                                    <td class="<?php if ($wk17row[1] == '') { echo 'success'; $wk17_total_wins++; } ?>"><?php echo $wk17row[1]; ?> </td>
                                                    <td class="<?php if ($wk17row[2] == '') { echo 'success'; $wk17_total_wins++; } ?>"><?php echo $wk17row[2]; ?> </td>
                                                    <td class="<?php if ($wk17row[3] == '') { echo 'success'; $wk17_total_wins++; } ?>"><?php echo $wk17row[3]; ?> </td>
                                                    <td class="<?php if ($wk17row[4] == '') { echo 'success'; $wk17_total_wins++; } ?>"><?php echo $wk17row[4]; ?> </td>
                                                    <td class="<?php if ($wk17row[5] == '') { echo 'success'; $wk17_total_wins++; } ?>"><?php echo $wk17row[5]; ?> </td>
                                                    <td class="<?php if ($wk17row[6] == '') { echo 'success'; $wk17_total_wins++; } ?>"><?php echo $wk17row[6]; ?> </td>
                                                    <td class="<?php if ($wk17row[7] == '') { echo 'success'; $wk17_total_wins++; } ?>"><?php echo $wk17row[7]; ?> </td>
                                                    <td class="<?php if ($wk17row[8] == '') { echo 'success'; $wk17_total_wins++; } ?>"><?php echo $wk17row[8]; ?> </td>
                                                    <td class="<?php if ($wk17row[9] == '') { echo 'success'; $wk17_total_wins++; } ?>"><?php echo $wk17row[9]; ?> </td>
                                                    <td class="<?php if ($wk17row[10] == '') { echo 'success'; $wk17_total_wins++; } ?>"><?php echo $wk17row[10]; ?> </td>
                                                    <td class="<?php if ($wk17row[11] == '') { echo 'success'; $wk17_total_wins++; } ?>"><?php echo $wk17row[11]; ?> </td>
                                                    <td class="<?php if ($wk17row[12] == '') { echo 'success'; $wk17_total_wins++; } ?>"><?php echo $wk17row[12]; ?> </td>
                                                    <td class="<?php if ($wk17row[13] == '') { echo 'success'; $wk17_total_wins++; } ?>"><?php echo $wk17row[13]; ?> </td>
                                                    <td class="<?php if ($wk17row[14] == '') { echo 'success'; $wk17_total_wins++; } ?>"><?php echo $wk17row[14]; ?> </td>
                                                    <td class="<?php if ($wk17row[15] == '') { echo 'success'; $wk17_total_wins++; } ?>"><?php echo $wk17row[15]; ?> </td>
                                                    <td class="<?php if ($wk17row[16] == '') { echo 'success'; $wk17_total_wins++; } ?>"><?php echo $wk17row[16]; ?> </td>
                                                    <td class="<?php if ($wk17row[17] == '') { echo 'success'; } ?>"><?php echo $wk17row[17]; ?> </td>
                                                    <td><?php echo $wk17_total_wins; ?></td>
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
                </div>
            <?php } ?>
            </div>
        </div>
    </div>
<?php include './_includes/footer.php'; ?>