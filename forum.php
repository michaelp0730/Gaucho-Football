<?php
    require './_includes/forum_functions.php';
    $title = 'Forum | Gaucho Football';
    $pick_games_active = false;
    $view_picks_active = false;
    $forum_active = true;
    $rules_active = false;
    $help_active = false;
    require './_includes/header.php';
    $user_email = $_SESSION['EmailAddress'];
    $checklogin = mysql_query("SELECT * FROM users WHERE EmailAddress = '".$user_email."'");

    // Get current user's ID
    if (mysql_num_rows($checklogin) == 1) {
        $row = mysql_fetch_array($checklogin);
        $user_id = $row['UserID'];
    }

    // Handle POST request
    if (!empty($_POST['new-post']) ) {
        $body = substr($_POST['new-post'], 0, 255);
        add_post($user_id, $body);
        $_SESSION['message'] = "Your post has been added!";
    }

    $all_posts = get_all_posts();
    var_dump($all_posts);

    //var_dump($_SESSION);
?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
            <?php if (!empty($_SESSION['LoggedIn']) && !empty($_SESSION['Username'])) { ?>
                <h1>Gaucho Football Forum</h1>
                <div class="col-md-5">
                    <h4>Create a post</h4>
                    <form id="posts-form" method="POST" action="forum.php">
                        <textarea id="new-post" name="new-post"></textarea>
                        <div>
                            <input type="submit" name="submit-post" id="submit-post" value="Submit" class="btn btn-primary" />
                        </div>
                    </form>
                </div>
                <div class="col-md-7">
                    <div class="media">
                        <div class="media-left">
                            <a href="#">
                                <?php
                                    $email = $_SESSION["EmailAddress"];
                                    $size = 64;
                                    $grav_url = "http://www.gravatar.com/avatar/" . md5( strtolower( trim( $email ) ) ) . "?d=" . "&s=" . $size;
                                ?>
                                <img class="media-object" src="<?php echo $grav_url; ?>" alt="" />
                            </a>
                        </div>
                        <div class="media-body">
                            <p>Proin eget tortor risus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.</p>
                        </div>
                    </div>
                </div>
            <?php } ?>
            </div>
        </div>
    </div>
<?php include './_includes/footer.php'; ?>
