<?php

iconv_set_encoding("internal_encoding", "UTF-8");
iconv_set_encoding("output_encoding", "UTF-8");

// Validate password
$password = $_POST['password'];
if ($password != "hendiaodemima") {
    echo "wrong password";
    exit(1);
}

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

// Define filename for download
$filename = "umunc_register_" . "2014_national_" . date('Ymd') . ".csv";

// Define CSV header row
$header = array(
    "姓名",
    "性别",
    "年龄",
    "在读学校",
    "在读年级",
    "代表类别",
    "代表团名称",
    "领队姓名",
    "指导老师姓名",
    "指导老师联系电话",
    "紧急联络人",
    "紧急联络人电话",
    "代表手机",
    "备选手机",
    "QQ",
    "微信",
    "邮箱",
    "模联年龄",
    "模联履历",
    "是否参加过UMUNC会议",
    "参加的会议名称",
    "委员会志愿",
    "注册时间");

// Define HTTP header
header("Content-Disposition: attachment; filename=\"$filename\"");
header("Content-Type: text/csv; charset=UTF-8");

// Begin output process
// Connect to database server
if (!($link = connect_db())) {
    echo "connect to database error";
    exit(1);
}

// Select database
mysql_select_db("umunc_v2");
mysql_query("SET CHARACTER SET utf8");
mysql_query("SET NAMES utf8");
mysql_query("SET character_set_client=utf8");
mysql_query("SET character_set_connection=utf8");

// Begin sql query
$query = "select * from national_2014";
if (!$result = mysql_query($query)) {
    print ("query failed " . mysql_error());
    exit(1);
}

// Define output stream
$out = fopen("php://output", 'w');

// Write header row to CSV
fputcsv($out, $header);

// write data line by line
while ($row = mysql_fetch_row($result)) {
    fputcsv($out, $row);
}

fclose($out);
echo "Success. End of output.";
exit(0);
?>