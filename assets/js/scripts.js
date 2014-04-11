/**
 * Created with JetBrains PhpStorm.
 * User: xianwang
 * Date: 4/7/14
 * Time: 9:58 PM
 * To change this template use File | Settings | File Templates.
 */

$(document).ready(function(){

    // Handle the radio-input field relation
    $("#attend_name").hide();

    $("#attend_yes").click(function(){
        $("#attend_name").fadeIn();
    });

    $("#attend_no").click(function(){
        $("#attend_name").hide();
    });

    // Handle the delegation contact field relation
    $("#name_team").hide();
    $("#team_label").hide();
    $("#leader").hide();
    $("#sup").hide();
    $("#sup_mob").hide();

    $("[name=del_class]").on('change', function(){
        if ($("[name=del_class] option:selected").val() == "group") {
            $("#name_team").fadeIn();
            $("#team_label").fadeIn();
            $("#leader").fadeIn();
            $("#sup").fadeIn();
            $("#sup_mob").fadeIn();
        }
        else {
            $("#name_team").hide();
            $("#team_label").hide();
            $("#leader").hide();
            $("#sup").hide();
            $("#sup_mob").hide();
        }
    });

    // Handle input validation, error popup, and success message
    // Hide Ajax elements
    $("#error_banner").hide();
    $("#success_message").hide();

    $("#info").submit(function(ev){

        ev.preventDefault();

        // Validate input
        var error = check();
        //console.log("error msg: %s", error);
        if (error != "") {
            var error_banner = $("#error_banner");

            error_banner.hide();
            error_banner.html(error);
            error_banner.fadeIn(function(){
                $('html, body').animate({ scrollTop: error_banner.offset().top }, 'slow');
            });
        }
        else {
            $("#error_banner").hide();

            var post_data = $("#info").serialize();
            $.ajax({
                type:       'POST',
                url:        'register.php',
                data:       post_data,
                dataType:   'text',
                success:    function(text) {
                    if (text == "success") {
                        $("#info").hide();
                        $("#success_message").fadeIn();
                    }
                    else {
                        console.log(text);
                    }
                },
                error:      function(text) {
                    console.log("Ajax error:");
                    console.log(text);
                }
            });
        }
    });
});

// Check email
function isEmail(email) {
    var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    return regex.test(email);
}

function check() {

    var error_message = "";

    if ($("[name=del_name]").val() == "") {
        error_message += '<div class="alert alert-danger fade in"><strong>Oh snap! </strong>你没有输入姓名</div>';
    }
    if ($("[name=del_sex] option:selected").val() == "none") {
        error_message += '<div class="alert alert-danger fade in"><strong>Oh snap! </strong>你没有选择性别(抱歉我们不接受第三性别。。-_-|)</div>';
    }
    if (isNaN(parseFloat($("[name=del_age]").val()))) {
        error_message += '<div class="alert alert-danger fade in"><strong>Oh snap! </strong>年龄不是数字</div>';
    }
    if ($("[name=del_school]").val() == "") {
        error_message += '<div class="alert alert-danger fade in"><strong>Oh snap! </strong>你没有输入在读学校</div>';
    }
    if ($("[name=del_grade] option:selected").val() == "none") {
        error_message += '<div class="alert alert-danger fade in"><strong>Oh snap! </strong>你没有选择你的年级</div>';
    }
    if ($("[name=del_class] option:selected").val() == "none") {
        error_message += '<div class="alert alert-danger fade in"><strong>Oh snap! </strong>你没有选择代表类别</div>';
    }
    if ($("[name=del_class] option:selected").val() == "group") {
        if ($("[name=team_name]").val() == "") {
            error_message += '<div class="alert alert-danger fade in"><strong>Oh snap! </strong>你没有输入代表团名称</div>';
        }
        if ($("[name=team_leader]").val() == "") {
            error_message += '<div class="alert alert-danger fade in"><strong>Oh snap! </strong>你没有输入领队(首席代表)姓名</div>';
        }
        if ($("[name=team_su]").val() == "") {
            error_message += '<div class="alert alert-danger fade in"><strong>Oh snap! </strong>你没有输入指导老师姓名</div>';
        }
        if ($("[name=team_su_mob]").val() == "") {
            error_message += '<div class="alert alert-danger fade in"><strong>Oh snap! </strong>你没有输入指导老师联系电话</div>';
        }
        if ($("[name=del_name]").val() == "") {
            error_message += '<div class="alert alert-danger fade in"><strong>Oh snap! </strong>你没有输入姓名</div>';
        }
    }
    if ($("[name=del_emg]").val() == "") {
        error_message += '<div class="alert alert-danger fade in"><strong>Oh snap! </strong>你没有输入监护人</div>';
    }
    if ($("[name=del_emg_mob]").val() == "") {
        error_message += '<div class="alert alert-danger fade in"><strong>Oh snap! </strong>你没有输入监护人手机</div>';
    }
    if (isNaN(parseFloat($("[name=del_emg_mob]").val()))) {
        error_message += '<div class="alert alert-danger fade in"><strong>Oh snap! </strong>监护人手机号不是数字</div>';
    }
    if (isNaN(parseFloat($("[name=del_mob1]").val()))) {
        error_message += '<div class="alert alert-danger fade in"><strong>Oh snap! </strong>手机号不是数字</div>';
    }
    if (isNaN(parseFloat($("[name=del_qq]").val()))) {
        error_message += '<div class="alert alert-danger fade in"><strong>Oh snap! </strong>QQ号不是数字</div>';
    }
    if (!(isEmail($("[name=del_email]").val()))) {
        error_message += '<div class="alert alert-danger fade in"><strong>Oh snap! </strong>邮箱的格式不对</div>';
    }
    if ($("[name=del_time]").val() == "") {
        error_message += '<div class="alert alert-danger fade in"><strong>Oh snap! </strong>你没有输入模联年龄</div>';
    }
    if ($("[name=del_choice] option:selected").val() == "none") {
        error_message += '<div class="alert alert-danger fade in"><strong>Oh snap! </strong>你没有选择意向委员会</div>';
    }

    //console.log("msgin: %s", error_message);
    return error_message;
}
