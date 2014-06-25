/**
 * Created with JetBrains PhpStorm.
 * User: xianwang
 * Date: 4/7/14
 * Time: 9:58 PM
 * To change this template use File | Settings | File Templates.
 */

$(document).ready(function(){

    // Handle input validation, error popup, and success message
    // Hide Ajax elements
    $("#error_banner").hide();
    //$("#id_num").hide();

    $("#start_message").hide();
    $("#cc").hide();
    $("#gcsc").hide();
    $("#mpc").hide();
    $("#gaus").hide();
    $("#eu").hide();
    $("#end_message").hide();
    $("#alloc").hide();
    $("#sorry").hide();

    $("#id_num").submit(function(ev){

        ev.preventDefault();

        // Validate input
        var error = check();
        //console.log("error msg: %s", error);
        if (error != "") {
            var error_banner = $("#error_banner");

            error_banner.hide();
            $("#sorry").hide();
            error_banner.html(error);
            error_banner.fadeIn();
        }
        else {
            $("#error_banner").hide();

            var post_data = $("#id_num").serialize();
            console.log(post_data);
            $.ajax({
                type:       'POST',
                url:        'query.php',
                data:       post_data,
                dataType:   'json',
                success:    function(json) {
                    if (json.alloc != false) {
                        console.log(json);
                        // Insert alloc
                        var return_val = json.alloc;
                        var content = "";
                        content += ("<td>" + return_val[5] + "</td>");
                        for (var i = 0; i < 5; i++) {
                            if (return_val[i] != null) {
                                content += ("<td>" + return_val[i] + "</td>");
                            }
                            else {
                                content += "<td></td>";
                            }
                        }

                        console.log(content);

                        $("#table_content").html(content);
                        // Display alloc
                        $("#alloc").fadeIn();
                        // Display message
                        $("#start_message").fadeIn();
                        if (json.system == "cc") {
                            $("#cc").fadeIn();
                        }
                        else if (json.system == "gcsc")
                        {
                            $("#gcsc").fadeIn();
                        }
                        else if (json.system == "mpc")
                        {
                            $("#mpc").fadeIn();
                        }
                        else if (json.system == "eu")
                        {
                            $("#eu").fadeIn();
                        }
                        else if (json.system == "gaus")
                        {
                            $("#gaus").fadeIn();
                        }
                        $("#end_message").fadeIn();
                    }
                    else {
                        $("#start_message").hide();
                        $("#cc").hide();
                        $("#gcsc").hide();
                        $("#mpc").hide();
                        $("#gaus").hide();
                        $("#eu").hide();
                        $("#end_message").hide();
                        $("#alloc").hide();
                        $("#sorry").hide();
                        error_banner = $("#error_banner");
                        error_banner.hide();
                        error_banner.html('<div class="alert alert-danger fade in"><strong>输入错误或记录不存在</strong></div>');
                        error_banner.fadeIn();
                        $("#sorry").fadeIn();
                    }
                },
                error:      function(json) {
                    console.log("Ajax error:");
                    console.log(json);
                }
            });
        }
    });
});


function check() {

    var error_message = "";

    if ($("[name=id_number]").val() == "") {
        error_message += '<div class="alert alert-danger fade in"><strong>Oh snap! </strong>你没有输入你的身份证号码</div>';
    }

    //console.log("msgin: %s", error_message);
    return error_message;
}
