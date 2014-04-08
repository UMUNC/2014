/**
 * Created with JetBrains PhpStorm.
 * User: xianwang
 * Date: 4/7/14
 * Time: 9:58 PM
 * To change this template use File | Settings | File Templates.
 */

$(document).ready(function(){

    $("#attend_name").hide();

    $("#attend_yes").click(function(){
        $("#attend_name").fadeIn();
    });

    $("#attend_no").click(function(){

        var input_field = $("#attend_name");

        input_field.fadeOut("slow", function(){
            input_field.val("");
        });
    });

});

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
else if (isNaN(parseFloat(document.info_form.del_time.value))) {
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
