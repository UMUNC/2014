<?php
/**
 * Created by JetBrains PhpStorm.
 * User: xianwang
 * Date: 3/16/14
 * Time: 3:18 PM
 * To change this template use File | Settings | File Templates.
 */

function begin_html($title = "", $javascript = "") {
    print "
<!DOCTYPE html>
<html>
<meta http-equiv='content-type' content='text/html' charset='utf-8'>
<head>
    <title>$title</title>
    <link rel='stylesheet' type='text/css' href='custom.css'>
        ";

    if ($javascript != ""){
        print "
            $javascript
            ";
    }
    print "
</head>
<body>
";
}

function end_html() {
    print "

    <br>

    <p class='center'>
        Copyright &copy 2014 U Model United Nations Corporation
    </p>

</body>
</html>
        ";
}

function form_row($left,$right) {
    print "
	<tr>
		<td width='50%' valign='top' align='right'>$left</td>
		<td>$right</td>
	</tr>";
}