<?php include '../_config/base.php'; ?>
<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gaucho Football</title>
    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif] -->
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600" />
    <link rel="stylesheet" type="text/css" href="../css/normalize.css" />
    <link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="../css/custom.css" />
</head>
<body>
<?php
    if (!empty($_SESSION['LoggedIn']) && !empty($_SESSION['Username'])) {
?>
    <nav class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">Gaucho Football</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="../index.php">Pick Games</a></li>
                    <li><a href="view-picks.php">View Picks</a></li>
                    <li class="dropdown abs-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?=$_SESSION['Username']?> <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="../logout.php">Sign Out</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
<?php } ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-sm-offset-3 col-md-8 col-md-offset-2">
<?php
    if (!empty($_POST['wk1gm1']) && !empty($_POST['wk1gm2']) && !empty($_POST['wk1gm3']) && !empty($_POST['wk1gm4']) &&
        !empty($_POST['wk1gm5']) && !empty($_POST['wk1gm6']) && !empty($_POST['wk1gm7']) && !empty($_POST['wk1gm8']) &&
        !empty($_POST['wk1gm9']) && !empty($_POST['wk1gm10']) && !empty($_POST['wk1gm11']) && !empty($_POST['wk1gm12']) &&
        !empty($_POST['wk1gm13']) && !empty($_POST['wk1gm14']) && !empty($_POST['wk1gm15']) && !empty($_POST['wk1gm16']) &&
        !empty($_POST['wk1-tiebreaker']) && !empty($_SESSION['LoggedIn']) && !empty($_SESSION['Username'])) {
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
        $tiebreaker = mysql_real_escape_string($_POST['wk1-tiebreaker']);
        $format = 'Y-m-d H:i:s';
        //$due_date = new DateTime::createFromFormat($format, '2014-09-04T20:30:00-04:00');
        $submission_time = new DateTime('now');

        if ($submission_time < $due_date) {
            echo '<div class="alert alert-danger" role="alert"><strong>Error:</strong> Your submission is too late. The first game of Week 1 has already started. Please try again next week.</div>';
        } else {
            echo '<div class="alert alert-success"><strong>Success!</strong> Your Week 1 picks have been recorded. <a href="../view-picks.php">Click here to view all picks.</a></div>';
        }

    } else {
        echo '<div class="alert alert-danger" role="alert"><strong>Error:</strong> Your selections for Week 1 are incomplete. <a href="../index.php">Please go back and try again.</a></div>';
    }
?>
            </div>
        </div>
    </div>
    <footer class="main-footer">
        Copyright &copy; <?php echo (date('Y') == 2014) ? '2014' : '2014 - ' . date('Y'); ?> | PellegriniPage.com | All Rights Reserved
    </footer>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js" type="text/javascript"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>
</html>