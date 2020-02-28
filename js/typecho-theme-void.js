// Zero Void 2020-02-24 Mon

$("#part").children("li").click(function(){
    $(this).children("a").children("i").toggle();
    if (!$(this).children().hasClass("show") || $(this).children().hasClass("collapsing")) {
        var lastActived = $(this).parent().children("li") && $(this).parent().children("li").children(".show");
        lastActived.parent().children("a").children("i").toggle();
    }
});

(function($) {
    // login
    $("#login-button").click(function(event) {
        // $("#login-button").attr("disabled", !0).fadeTo("slow", .5);
        function login_enable() {
            $("#login-button").attr("disabled", !1).fadeTo("slow", 1);
        }
        // event.preventDefault();
        $("#login-button").attr("disabled", !0).fadeTo("slow", .5);
        var username = $("#login-username").val(),
            password = $("#login-password").val();
        // check for empty input username & password
        if (username == "") {
            $.message({
                title: ThemeConst.LOGIN_TITLE,
                message: ThemeConst.LOGIN_USERNAME_INFO,
                type: "warning",
            }),
            $("#login-username").focus();
            login_enable();
            return 1;
        }
        if (password == "") {
            $.message({
                title: ThemeConst.LOGIN_TITLE,
                message: ThemeConst.LOGIN_PASSWORD_INFO,
                type: "warning",
            });
            $("#login-password").focus();
            login_enable();
            return 1;
        }
        $("#login-button").addClass("active");
        $("#login-spin").addClass("d-inline-block");

        $.ajax({
            url: $(this).attr("action"),
            type: $(this).attr("method"),
            data: $(this).serializeArray(),
            error: function() {
                $.message({
                    title: ThemeConst.LOGIN_TITLE,
                    message: ThemeConst.LOGIN_SUBMIT_ERROR,
                    type: "error"
                });
                login_enable();
                return 1;
            },
            success: function(data) {
                data = $.parseHTML(data);
                $("#login-button").removeClass("active");
                $("#login-spin").removeClass("d-inline-block");
                try {
                    if ($("#logged-in", data).length <= 0) {
                        $.message({
                            title: ThemeConst.LOGIN_TITLE,
                            message: ThemeConst.LOGIN_SUBMIT_INFO,
                            type: "error"
                        });
                        login_enable();
                        return 1;
                    }
                    data = $("#login-entry", data).html();
                    $("#login-entry").html(data);
                    $.message({
                        title: ThemeConst.LOGIN_TITLE,
                        message: ThemeConst.LOGIN_SUBMIT_SUCCESS,
                        type: "success"
                    });
                } catch(event) {
                    alert("请到控制台查看错误信息");
                }
            }
        });
        /*
            success: function(c) {
                c = a.parseHTML(c),
                a("#login-submit").removeClass("active");

                // a("#spin-login").removeClass("show inline");
                try {
                    // if (a("#Logged-in", c).length <= 0)
                    //     return a.message({
                    //         title: ThemeConst.LOGIN_TITLE,
                    //         message: ThemeConst.LOGIN_SUBMIT_INFO,
                    //         type: "error"
                    //     }),
                    //     b(),
                    //     !1;
                    // c = a("#easyLogin", c).html(),
                    // a("#easyLogin").html(c),
                    a.message({
                        title: ThemeConst.LOGIN_TITLE,
                        message: ThemeConst.LOGIN_SUBMIT_SUCCESS + '&nbsp;<a onclick="location.reload();">' + ThemeConst.CLICK_TO_REFRESH + "</a>",
                        type: "success"
                    })
                } catch (a) {
                    alert("按下F12，查看输出错误信息")
                }
            }
        }),
        !1)*/
    })
})(jQuery),
console.log("\n %c Typecho-Theme-Void v0.1 %c by Zero Void | www.zerovoid.xyz ", "color:#eee;background:#444;padding:5px 0;", "color:#444;background:#eee;padding:5px 0;");
