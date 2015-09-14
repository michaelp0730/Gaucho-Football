<?
    require './_includes/forum_functions.php';
    $title = 'Forum | Gaucho Football';
    $pick_games_active = false;
    $view_picks_active = false;
    $forum_active = true;
    $rules_active = false;
    $help_active = false;
    require './_includes/header.php';
    $user_email = $_SESSION["EmailAddress"];
    $checklogin = mysql_query("SELECT * FROM users WHERE EmailAddress = '".$user_email."'");

    // Get current user's ID
    if (mysql_num_rows($checklogin) == 1) {
        $row = mysql_fetch_array($checklogin);
        $user_id = $row["UserID"];
    }

    // Handle POST request
    if (!empty($_POST["new-post"]) ) {
        $body = substr($_POST["new-post"], 0, 255);
        add_post($user_id, $body);
        $_SESSION["message"] = "Your post has been added!";
    }

    $all_posts = get_all_posts();
?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
            <? if (!empty($_SESSION['LoggedIn']) && !empty($_SESSION['Username'])) { ?>
                <h1>Gaucho Football Forum</h1>
                <div class="col-md-5">
                    <h4>Create a post</h4>
                    <form id="posts-form" method="POST" action="forum.php">
                        <textarea id="new-post" name="new-post"></textarea>
                        <div>
                            <p id="character-count" class="right"></p>
                            <input type="submit" name="submit-post" id="submit-post" value="Submit" class="btn btn-primary" />
                        </div>
                    </form>
                </div>
                <div class="col-md-7">
                <? foreach ($all_posts as $post): ?>
                    <div class="media">
                        <div class="media-left">
                            <?
                                $post_user_id = $post["user_id"];
                                $post_user = get_user($post_user_id);
                                $post_user_email = $post_user[0]["EmailAddress"];
                                $size = 64;
                                $grav_url = "http://www.gravatar.com/avatar/" . md5( strtolower( trim( $post_user_email ) ) ) . "?d=" . "&s=" . $size;
                            ?>
                            <img class="media-object" src="<? echo $grav_url; ?>" alt="" />
                            <? echo($post_user[0]["Username"]); ?>
                        </div>
                        <div class="media-body" data-post-id="<? echo($post['id']); ?>">
                            <small><? echo($post["stamp"]); ?></small>
                            <p><? echo($post["body"]); ?></p>
                        </div>
                    </div>
                <? endforeach ?>
                </div>
            <? } else { ?>
                <h3><a href="./index.php">Home</a></h3>
            <? } ?>
            </div>
        </div>
    </div>
<? include './_includes/footer.php'; ?>
