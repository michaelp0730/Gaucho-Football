<?php
    $title = 'Help | Gaucho Football';
    $pick_games_active = false;
    $view_picks_active = false;
    $rules_active = false;
    $help_active = true;
    require './_includes/header.php';
?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-sm-offset-3 col-md-8 col-md-offset-2">
                <h1>Help</h1>
                <div class="panel panel-default login-container-outer clearfix">
                    <div class="panel panel-default login-container-inner">
                    <?php
                        if(!empty($_POST['message'])) {
                            $Name = $_SESSION['Username'];
                            $email = mysql_query("SELECT EmailAddress FROM users WHERE Username = '".$Name."'");
                            $recepient = "pellegrinimichael@gmail.com";
                            $mail_body = $_POST['message'];
                            $subject = "Message from " . $Name . " on Gaucho Football";
                            $header = "From: ". $Name . " <" . $email . ">\r\n";

                            mail($recipient, $subject, $mail_body, $header);
                            echo '<div class="alert alert-success"><strong>Success!</strong> Your message was sent.</div>';
                        } else {
                    ?>
                        <h3>Need help with something? Send us a message and we'll get back to you ASAP.</h3>
                        <form method="POST" action="help.php" name="help-form" id="help-form">
                            <div>
                                <label for="message">Message:</label>
                                <textarea name="message"></textarea>
                            </div>
                            <div>
                                <input type="submit" name="help-submit" id="help-submit" value="Send" class="btn btn-primary" />
                            </div>
                        </form>
                    <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include './_includes/footer.php'; ?>