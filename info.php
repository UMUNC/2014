<?php
/**
 * Created by JetBrains PhpStorm.
 * User: xianwang
 * Date: 3/16/14
 * Time: 3:18 PM
 * To change this template use File | Settings | File Templates.
 */

include("common.php");

$javascript = "
    <script language='javascript'>

        function check() {
            if (document.info_form.del_name.value == '') {
                alert ('请输入你的姓名 Please input your name');
                document.info_form.del_name.focus();
                return false;
            }
            else if (document.info_form.del_sex.options[0].selected) {
                alert ('请选择你的性别 Please select your sex');
                document.info_form.del_sex.focus();
                return false;
            }
            else if (isNaN(parseFloat(document.info_form.del_age.value))) {
                alert ('年龄请输入数字 Please input a number for age');
                document.info_form.del_name.focus();
                return false;
            }
            else if (document.info_form.del_school.value == '') {
                alert ('请输入你的在读学校 Please input your school');
                document.info_form.del_school.focus();
                return false;
            }
            else if (document.info_form.del_grade.options[0].selected) {
                alert ('请选择你的在读年级 Please select your grade');
                document.info_form.del_grade.focus();
                return false;
            }
            else if (document.info_form.del_class.options[0].selected) {
                alert ('请选择你的代表类别 Please select your delegation class');
                document.info_form.del_grade.focus();
                return false;
            }
            else if (document.info_form.del_mob1.value == '') {
                alert ('请至少填一个手机号 Please input at least one mobile phone number');
                document.info_form.del_mob1.focus();
                return false;
            }
            else if (document.info_form.del_qq.value == '') {
                alert ('请输入你的QQ号 Please input your QQ number');
                document.info_form.del_qq.focus();
                return false;
            }
            else if (document.info_form.del_email.value == '') {
                alert ('请输入你的电子邮箱 Please input your email address');
                document.info_form.del_email.focus();
                return false;
            }
            else if (document.info_form.del_time.value == '') {
                alert ('请输入你的模联年龄 Please input your time in ModelUN');
                document.info_form.del_time.focus();
                return false;
            }
            else if (document.info_form.del_resume.value == '') {
                alert ('请填写你的模联简历 Please fill out your ModelUN resume');
                document.info_form.del_resume.focus();
                return false;
            }
            else if (!(document.info_form.del_ever_attend[0].checked || document.info_form.del_ever_attend[1].checked)) {
                alert ('我们重视你始终如一的关注，请告诉我们你是否参加过UMUNC的会议 We appreciate your everlasting commitment. ' +
                 'Please let us know your experience with UMUNC.');
                return false;
            }
            else if (document.info_form.del_choice.options[0].selected) {
                alert ('请告诉我们你最想去的委员会 Please let us know which committee do you want to go most');
                document.info_form.del_choice.focus();
                return false;
            }
            else {
                return true;
            }
        }
    </script>
        ";

begin_html($title = "UMUNC Application", $javascript = $javascript);

?>

<br>

<form name="info_form" method="post" action="status.php" accept-charset="utf-8">
    <table class="info_table">
        <tr>
            <td colspan=2>
                <p>
                    Please fill out the form below <strong class="stress">in Chinese</strong>. Every entry is required for you to sign up for the conference.
                    Contact method (including mobile phone number, QQ, WeChat, and email)
                    you fill in this form will be used for us to reach you.
                </p>
                <p>
                    Thank you for your support! You participation is deeply appreciated!
                </p>
            </td>
        </tr>

        <?php
        form_row("姓名 Name", "<input type='text' name='del_name' size='20' maxlength='40' required>");
        form_row("性别 Sex",
            "<select name='del_sex' required>
             <option value='none'> &nbsp; &lt;请选择 Select One> &nbsp; </option>
             <option value='male'>男 Male</option>
             <option value='female'>女 Female</option>
             </select>");
        form_row("年龄 Age", "<input type='text' name='del_age' size='20' maxlength='3' required>");
        form_row("在读学校 School", "<input type='text' name='del_school' size='20' maxlength='150' required>");
        form_row("在读年级 Grade",
            "<select name='del_grade'>
             <option value='none'> &nbsp; &lt;请选择 Select One> &nbsp; </option>
             <option value='mid-school'>初中及以下 Middle school and under</option>
             <option value='g10'>高一 Grade 10</option>
             <option value='g11'>高二 Grade 11</option>
             <option value='g12'>高三 Grade 12</option>
             <option value='college'>大学及以上 College and above</option>
             </select>");
        form_row("代表类别 Delegation Class",
            "<select name='del_class'>
             <option value='none'> &nbsp; &lt;请选择 Select One> &nbsp; </option>
             <option value='group'>代表团 Group Delegation</option>
             <option value='single'>个人代表 Single Delegation</option>
             </select>");
        print "<tr>";
        print "<td class='right'><p>联系方式 Contact Method<p></td>";
        print "</tr>";
        form_row("手机 Mobile Phone", "<input type='text' name='del_mob1' size='20' maxlength='20' required>");
        form_row("备选手机 Alternative Mobile Phone", "<input type='text' name='del_mob2' size='20' maxlength='20'>");
        form_row("QQ", "<input type='text' name='del_qq' size='20' maxlength='20' required>");
        form_row("微信 WeChat", "<input type='text' name='del_wechat' size='20' maxlength='20'>");
        form_row("邮箱 Email", "<input type='email' name='del_email' size='20' maxlength='30' required>");
        form_row("模联年龄 (接触模联的时间) Time in ModelUN", "<input type='text' name='del_time' size='20' maxlength='20' required>");
        print "<tr>";
        print "<td width='50%' valign='top' align='right'>模联履历 ModelUN Resume</td>";
        print "<td><textarea name='del_resume' cols='50' rows='15' required></textarea></td>";
        print "</tr>";
        form_row("是否参加过UMUNC组织过的会议 Have you ever attended a UMUNC Conference?",
            "
            <table>
            <tr class='choice'>
            <td>
            <input type='radio' name='del_ever_attend' value='yes'>
            </td>
            <td>是 Yes</td>
            <td>
            <input type='radio' name='del_ever_attend' value='no'>
            </td>
            <td>否 No</td>
            </table>
            ");
        form_row("委员会志愿 Choice of Committee",
            "<select name='del_choice'>
             <option value='none'> &nbsp; &lt;请选择 Select One> &nbsp; </option>
             <option value='gaus'>高斯系统 General Assembly United System (GAUS)</option>
             <option value='cabinet'>内阁系统 Cabinet System</option>
             </select>");
        form_row("&nbsp;",
            "<input type='submit' value='下一步 Next>>' onclick='return check()'> &nbsp;
            <input type='reset' value='清空/重置 Reset'>"
        );
        ?>

    </table>
</form>

<?php

end_html();

?>
