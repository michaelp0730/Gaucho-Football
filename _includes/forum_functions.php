<?php

function add_post($userid, $body) {
    $sql = "insert into posts (user_id, body, stamp)
            values ($userid, '". mysql_real_escape_string($body). "',now())";

    $result = mysql_query($sql);
}

?>
