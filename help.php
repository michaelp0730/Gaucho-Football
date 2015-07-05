<?php
$title = 'Help | Gaucho Football';
$pick_games_active = false;
$view_picks_active = false;
$forum_active = false;
$rules_active = false;
$help_active = true;
require './_includes/header.php';

$Name = $_SESSION['Username'];
$body = "Name: $Name
Email: {$_POST['email']}
Message: {$_POST['message']}";
?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
                <h1>Help</h1>
                <div class="panel panel-default login-container-outer clearfix">
                    <div class="panel panel-default login-container-inner">
                    <?php
                        if(!empty($_POST['message']) && !empty($_POST['email'])) {
                            mail("pellegrinimichael@gmail.com", "Message from " . $Name . " on Gaucho Football", "$body");
                            echo '<div class="alert alert-success"><strong>Success!</strong> Your message was sent.</div>';
                        } else {
                    ?>
                        <h3>Need help with something? Send us a message and we'll get back to you ASAP.</h3>
                        <form method="POST" action="help.php" name="help-form" id="help-form">
                            <div>
                                <label for="email">Your email address:</label><br />
                                <input type="text" name="email" id="email" />
                            </div>
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