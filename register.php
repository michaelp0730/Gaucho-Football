<?php
    $title = 'Register | Gaucho Football';
    $pick_games_active = false;
    $view_picks_active = false;
    $rules_active = false;
    $help_active = false;
    require './_includes/header.php';
?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-sm-offset-3 col-md-8 col-md-offset-2">
                <h1>Register</h1>
                <div class="panel panel-default login-container-outer clearfix">
                    <div class="panel panel-default login-container-inner">
                    <?php
                        if(!empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['confirm-password'])) {
                            $username = mysql_real_escape_string($_POST['username']);
                            $password = md5(mysql_real_escape_string($_POST['password']));
                            $confirm_password = md5(mysql_real_escape_string($_POST['confirm-password']));
                            $email = mysql_real_escape_string($_POST['email']);
                            $checkusername = mysql_query("SELECT * FROM users WHERE Username = '".$username."'");
                            $checkemail = mysql_query("SELECT * FROM users WHERE EmailAddress = '".$email."'");

                            if ($password !== $confirm_password) {
                                echo '<div class="alert alert-danger" role="alert"><strong>Error:</strong> The passwords you entered did not match. <a href="register.php">Please go back and try again.</a></div>';
                            } elseif (mysql_num_rows($checkusername) == 1) {
                                echo '<div class="alert alert-danger" role="alert"><strong>Error:</strong> That username is taken. <a href="register.php">Please go back and try again.</a></div>';
                            } elseif (mysql_num_rows($checkemail) == 1) {
                                echo '<div class="alert alert-danger" role="alert"><strong>Error:</strong> That email address has already been registered. <a href="register.php">Please go back and try again.</a></div>';
                            } else {
                                $registerquery = mysql_query("INSERT INTO users (Username, Password, EmailAddress) VALUES('".$username."', '".$password."', '".$email."')");
                                if ($registerquery) {
                                    echo '<div class="alert alert-success"><strong>Success!</strong> Your account was successfully created. Please <a href="index.php">click here to login.</a></div>';
                                } else {
                                    echo '<div class="alert alert-danger" role="alert"><strong>Error:</strong> Your registration failed. <a href="register.php">Please go back and try again.</a></div>';
                                }
                            }
                        } else {
                    ?>
                        <form method="POST" action="register.php" name="registerForm" id="registerForm">
                            <div>
                                <label for="username">Username:</label><br />
                                <input type="text" name="username" id="username" />
                            </div>
                            <div>
                                <label for="email">Email:</label><br />
                                <input type="text" name="email" id="email" />
                            </div>
                            <div>
                                <label for="password">Password:</label><br />
                                <input type="password" name="password" id="password" />
                            </div>
                            <div>
                                <label for="confirm-password">Confirm Password:</label><br />
                                <input type="password" name="confirm-password" id="confirm-password" />
                            </div>
                            <div>
                                <input type="submit" name="register" id="register" value="Register" class="btn btn-primary" />
                            </div>
                        </form>
                    <?php
                        }
                    ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include './_includes/footer.php'; ?>