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
                <a class="navbar-brand" href="../index.php">Gaucho Football</a>
            </div>
            <div id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="../index.php">Pick Games</a></li>
                    <li><a href="../view-picks.php">View Picks</a></li>
                    <li><a href="../rules.php">Rules</a></li>
                    <li><a href="../help.php">Help</a></li>
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