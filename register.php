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
    $del_name = $_POST['del_name'];
    $del_sex = $_POST['del_sex'];
    $del_age = $_POST['del_age'];
    $del_school = $_POST['del_school'];
    $del_grade = $_POST['del_grade'];
    $del_class = $_POST['del_class'];
    $del_mob1 = $_POST['del_mob1'];
    $del_mob2 = $_POST['del_mob2'];
    $del_qq = $_POST['del_qq'];
    $del_wechat = $_POST['del_wechat'];
    $del_email = $_POST['del_email'];
    $del_time = $_POST['del_time'];
    $del_resume = $_POST['del_resume'];
    $del_ever_attend = $_POST['del_ever_attend'];
    $del_attend_name = "";
    foreach($_POST['del_attend_name'] as $name)
    {
        $del_attend_name .= $name;
        $del_attend_name .= ", ";
    }
    $del_choice = $_POST['del_choice'];

    // sql string
    $val = "'$del_name', '$del_sex', '$del_age', '$del_school', '$del_grade', '$del_class', '$del_mob1', '$del_mob2', '$del_qq', '$del_wechat', '$del_email', '$del_time', '$del_resume', '$del_ever_attend', '$del_attend_name', '$del_choice', now()";

    // Connect to database server
    if (!($link = connect_db())) {
        echo "connect to database error";
        exit(1);
    }

    // Select database
    mysql_select_db("umunc_v2");
    mysql_query("SET character_set_client=utf8");
    mysql_query("SET character_set_connection=utf8");

    // Insert into database
    if (!($result = mysql_query("insert into national_2014 values ($val)"))) {
        //print ("query failed " . mysql_error());
        echo "query failed";
        exit(1);
    }

    // Return success
    echo "success";
}
else {
    // Return error
    echo "no http post";
}
?>