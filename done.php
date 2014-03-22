<?php
/**
 * Created by JetBrains PhpStorm.
 * User: xianwang
 * Date: 3/17/14
 * Time: 10:24 AM
 * To change this template use File | Settings | File Templates.
 */

include ("common.php");
include ("validate.php");
include ("connect.php");

# Retrieve Passed Variables
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
$del_choice = $_POST['del_choice'];

## validate variables

$num_bad = 0;
$error = "";
$es = "你没有输入一个有效的";

if (! (validate_chn_string($del_name, 1) || validate_string_hyphen($del_name, 1))) {
    $num_bad++;
    $error .=  "$es";
    $error .= "姓名<br>";
}

if (! (validate_string($del_sex, 1) && $del_sex != "none")) {
    $num_bad++;
    $error .= "你没有选择你的性别<br>";
}

if (! validate_num($del_age, 1, 3)) {
    $num_bad++;
    $error .=  "$es";
    $error .= "年龄<br>";
}

if (! (validate_string_hyphen($del_school, 1) || validate_chn_string($del_school, 1))) {
    $num_bad++;
    $error .=  "$es";
    $error .= "在读学校<br>";
}

if (! (validate_string($del_grade, 1) && $del_grade != "none")) {
    $num_bad++;
    $error .= "你没有选择你的在读年级<br>";
}

if (! (validate_string($del_class, 1) && $del_class != "none")) {
    $num_bad++;
    $error .= "你没有选择你的代表类别<br>";
}

if (! validate_num($del_mob1, 1, 15)) {
    $num_bad++;
    $error .=  "$es";
    $error .= "手机号码<br>";
}

if (! (validate_num($del_mob2, 1, 15) || $del_mob2 == "")) {
    $num_bad++;
    $error .= "$es";
    $error .= "备选手机号码<br>";
}

if (! validate_num($del_qq, 1, 15)) {
    $num_bad++;
    $error .= "$es";
    $error .= "QQ号码<br>";
}

if (! (validate_chn_string($del_wechat, 1) || validate_string_hyphen($del_wechat, 1) || $del_wechat == "")) {
    $num_bad++;
    $error .= "$es";
    $error .= "微信<br>";
}

if (! validate_email($del_email)) {
    $num_bad++;
    $error .=  "$es";
    $error .= "电子邮箱<br>";
}

if (! (validate_string_hyphen($del_time, 1) || validate_chn_string($del_time, 1))) {
    $num_bad++;
    $error .=  "$es";
    $error .= "模联年龄<br>";
}

if ($del_ever_attend == "") {
    $num_bad++;
    $error .= "你没有输入你是否参加过UMUNC组织的会议<br>";
}

if (! (validate_string($del_choice, 1) && $del_choice != "none")) {
    $num_bad++;
    $error .= "你没有选择意向委员会<br>";
}

if ($num_bad > 0) {
    begin_html("错误");
    print"
<table width='780' align='center'>
<tr>
<td>
<p>
<b>
$error
<br />
请回到上一页并做出必要的改动。

</b>
</p>
</td>
</tr>
</table>
";
    end_html();
    exit(1);
}

// When no error occurs

begin_html("Thank you!");

if (!($link = connect_db())) {
    exit(1);
}

mysql_select_db("umunc") || exit(1);
mysql_query("SET character_set_client=utf8");
mysql_query("SET character_set_connection=utf8");

?>
Your paritipation is deeply appreciated!