<?php
    $title = 'Gaucho Football';
    $pick_games_active = true;
    $view_picks_active = false;
    $forum_active = false;
    $rules_active = false;
    $help_active = false;
    require './_includes/header.php';
?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
            <?php
            if (!empty($_SESSION['LoggedIn']) && !empty($_SESSION['Username'])) {
            ?>
                <h1>Pick Games</h1>
                <div id="home-alert" class="alert alert-info" role="alert">
                    Sophia wins week 17! Thanks for a great season!
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
                    echo '<meta http-equiv="refresh" content="1" />';
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
