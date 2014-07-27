<?php
    $title = 'Register | Gaucho Football';
    $pick_games_active = false;
    $view_picks_active = false;
    $rules_active = false;
    $help_active = false;
    require './_includes/header.php';
?>
<script>
var RecaptchaOptions = {
    theme : 'clean'
};
</script>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
                <h1>Register</h1>
                <div class="panel panel-default login-container-outer clearfix">
                    <div class="panel panel-default login-container-inner">
                        <form method="POST" action="process-registration.php" name="registerForm" id="registerForm">
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
                                <script src="https://www.google.com/recaptcha/api/challenge?k=6LfNi_cSAAAAAO5ouiluk2KU-0n5gTnBmRIdlpEH"></script>
                                <noscript>
                                    <iframe src="https://www.google.com/recaptcha/api/noscript?k=6LfNi_cSAAAAAO5ouiluk2KU-0n5gTnBmRIdlpEH" height="300" width="500" frameborder="0"></iframe><br />
                                </noscript>
                            </div>
                            <div>
                                <input type="submit" name="register" id="register" value="Register" class="btn btn-primary" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include './_includes/footer.php'; ?>