<?php include './_config/base.php'; ?>
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
  <link rel="stylesheet" type="text/css" href="css/normalize.css" />
  <link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" />
  <link rel="stylesheet" type="text/css" href="css/custom.css" />
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
                    <li class="active"><a href="index.php">Pick Games</a></li>
                    <li><a href="view-picks.php">View Picks</a></li>
                    <li class="dropdown abs-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?=$_SESSION['Username']?> <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="logout.php">Sign Out</a></li>
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
            if (!empty($_SESSION['LoggedIn']) && !empty($_SESSION['Username'])) {
            ?>
                <h1>Pick Games</h1>
                <div class="alert alert-info" role="alert">
                    Alert - When choosing the total points tiebreaker on Monday night for Week 1, go with the late game (SD @ ARI).
                </div>
                <div id="schedule-container"></div>
            <?php
            } elseif (!empty($_POST['username']) && !empty($_POST['password'])) {
                $username = mysql_real_escape_string($_POST['username']);
                $password = md5(mysql_real_escape_string($_POST['password']));
                $checklogin = mysql_query("SELECT * FROM users WHERE Username = '".$username."' AND Password = '".$password."'");

                if(mysql_num_rows($checklogin) == 1) {
                    $row = mysql_fetch_array($checklogin);
                    $email = $row['EmailAddress'];
                    $_SESSION['Username'] = $username;
                    $_SESSION['EmailAddress'] = $email;
                    $_SESSION['LoggedIn'] = 1;

                    echo '<h1>Success</h1>';
                    echo '<p>We are now redirecting you to the member area.</p>';
                    echo '<meta http-equiv="refresh" content="2" />';
                } else {
                    echo "<h1>Error</h1>";
                    echo "<p>Sorry, your account could not be found. Please <a href=\"index.php\">click here to try again.</a></p>";
                }
            } else { // show login form
            ?>
                <h1>Welcome to Gaucho Football</h1>
                <h6>Please login, or <a href="register.php">click here to register.</a></h6>
                <div class="panel panel-default login-container-outer clearfix">
                    <form method="post" action="index.php" name="loginform" id="loginform">
                        <div class="panel panel-default login-container-inner">
                            <h3>Login</h3>
                            <div>
                                <label for="username">Username:</label><br />
                                <input type="text" name="username" id="username" />
                            </div>
                            <div>
                                <label for="password">Password:</label><br />
                                <input type="password" name="password" id="password" />
                            </div>
                            <div>
                                <input type="submit" name="login" id="login" value="Submit" class="btn btn-primary" />
                            </div>
                        </div>
                    </form>
                </div>
            <?php } ?>
            </div>
        </div>
    </div>

<?php include './_includes/footer.php'; ?>
