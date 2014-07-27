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
            <div class="col-xs-12 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
                <h1>Register</h1>
                <div class="panel panel-default login-container-outer clearfix">
                    <div class="panel panel-default login-container-inner">
<?php
require_once('./_includes/recaptchalib.php');
$privatekey = "6LfNi_cSAAAAADOEyqT9CjT6452JCBRYjdp1MBpw";
$resp = recaptcha_check_answer ($privatekey,
                                 $_SERVER["REMOTE_ADDR"],
                                 $_POST["recaptcha_challenge_field"],
                                 $_POST["recaptcha_response_field"]);
if (!$resp->is_valid) {
    // What happens when the CAPTCHA was entered incorrectly
    echo '<div class="alert alert-danger" role="alert"><strong>Error:</strong> The reCAPTCHA wasn\'t entered correctly. <a href="register.php">Please go back and try again.</a></div>';
} else {
    if (!empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['confirm-password'])) {
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
                mail("pellegrinimichael@gmail.com", "User " . $username . " registered on Gaucho Football", "Username: " . $username . "\nEmail: " . $email);
                echo '<div class="alert alert-success"><strong>Success!</strong> Your account has been created. Please <a href="index.php">click here to login.</a></div>';
            } else {
                echo '<div class="alert alert-danger" role="alert"><strong>Error:</strong> Your registration failed. <a href="register.php">Please go back and try again.</a></div>';
            }
        }
    } else {
        echo '<div class="alert alert-danger" role="alert"><strong>Error:</strong> Your registration form contained missing fields. <a href="register.php">Please go back and try again.</a></div>';
    }
}
?>
                    </div>
                </div>
            </div>
        </div>
    </div>