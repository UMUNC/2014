<?php
/**
 * Created by JetBrains PhpStorm.
 * User: xianwang
 * Date: 3/16/14
 * Time: 6:06 PM
 * To change this template use File | Settings | File Templates.
 */

function connect_db () {
    $db = "127.0.0.1";
    $username = "root";
    $password = "";
    if (!($link = mysql_connect($db, $username, $password))) {
        return ("");
    }
    else {
        return ($link);
    }
}
