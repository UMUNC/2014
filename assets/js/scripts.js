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

        var input_field = $("#attend_name");

        input_field.fadeOut("slow", function(){
            input_field.val("");
        });
    });

    // Handle input validation, error popup, and success message
    // Hide Ajax elements
    $("#error_banner").hide();
    $("#success_message").hide();
    $("#button_back").hide();

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
                        error_banner.hide();
                        $("#info").hide();
                        $("#success_message").fadeIn();
                        $("#button_back").fadeIn();
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

function check() {

    var error_message = "";

    if ($("[name=del_sex] option:selected").val() == "none") {
    error_message += '<div class="alert alert-danger fade in"><strong>Oh snap!</strong>你没有选择性别(抱歉我们不接受第三性别。。)</div>';
    }
    if (isNaN(parseFloat($("[name=del_age]").val()))) {
    error_message += '<div class="alert alert-danger fade in"><strong>Oh snap!</strong>年龄不是数字</div>';
    }
    if ($("[name=del_grade] option:selected").val() == "none") {
    error_message += '<div class="alert alert-danger fade in"><strong>Oh snap!</strong>你没有选择你的年级</div>';
    }
    if ($("[name=del_class] option:selected").val() == "none") {
    error_message += '<div class="alert alert-danger fade in"><strong>Oh snap!</strong>你没有选择代表类别</div>';
    }
    if (isNaN(parseFloat($("[name=del_mob1]").val()))) {
        error_message += '<div class="alert alert-danger fade in"><strong>Oh snap!</strong>手机号不是数字</div>';
    }
    if (isNaN(parseFloat($("[name=del_qq]").val()))) {
        error_message += '<div class="alert alert-danger fade in"><strong>Oh snap!</strong>QQ号不是数字</div>';
    }
    if ($("[name=del_choice] option:selected").val() == "none") {
    error_message += '<div class="alert alert-danger fade in"><strong>Oh snap!</strong>你没有选择意向委员会</div>';
    }

    //console.log("msgin: %s", error_message);
    return error_message;
}
