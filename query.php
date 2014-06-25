<?php
/**
 * Created by JetBrains PhpStorm.
 * User: xianwang
 * Date: 4/9/14
 * Time: 11:04 AM
 * To change this template use File | Settings | File Templates.
 */

// Connect to database
function connect_db () {
    $db = "localhost";
    $username = "root";
    $password = "BabyBibo1117";
    if (!($link = mysql_connect($db, $username, $password))) {
        return ("");
    }
    else {
        return ($link);
    }
}

// Begin process

if ($_POST) {

    // Retrieve HTTP variables
    $id_num = $_POST['id_number'];

    // Connect to database server
    if (!($link = connect_db())) {
        echo "connect to database error";
        exit(1);
    }

    // Begin querying
    // Select database
    mysql_select_db("umunc_v2");
    mysql_query("SET CHARACTER SET utf8");
    mysql_query("SET NAMES utf8");
    mysql_query("SET character_set_client=utf8");
    mysql_query("SET character_set_connection=utf8");


    // Get delegate's name from database
    $query = "select del_name from delegate_all where id_num = '$id_num'";
    if (!($result = mysql_query($query))) {
        //print ("query failed " . mysql_error());
        echo "query failed";
        exit(1);
    }
    $del_name = mysql_fetch_row($result);
    //echo "name is: " . $del_name[0];


    // Get delegate's system using the name
    $query = "select system from delegate_alloc where del_name = '$del_name[0]'";
    if (!($result = mysql_query($query))) {
        //print ("query failed " . mysql_error());
        echo "query failed";
        exit(1);
    }
    $system = mysql_fetch_row($result);
    $sys = $system[0];
    //echo "system is: " . $sys;

    // Get delegate's allocation using the name
    $query = "select representation, pos_original, pos_chn, name_original, name_chn from delegate_alloc where del_name = '$del_name[0]'";
    if (!($result = mysql_query($query)))
    {
        // print ("query failed " . mysql_error());
        echo "query failed";
        exit(1);
    }
    $alloc = mysql_fetch_row($result);


    // Return the allocation if success
    echo json_encode(array("system" => $sys, "alloc" => $alloc));
}
else {
    // Return error
    echo "no http post";
}
?>