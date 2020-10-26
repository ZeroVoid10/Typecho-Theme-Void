// Zero Void 2020-02-24 Mon


(function($) {
    // 小窗口左右侧边栏弹出
    // FIXME: 短时间多次调用会出现显示过程异常
    var pop_left_panel = function(){
        var asider = $("#app-asider");
        var col = $(".app-content"), 
            footer = $(".app-footer");
        $(".show-main").toggle();
        if (asider.hasClass("pop-l-sm")) {
            col.removeClass("move-left");
            footer.removeClass("move-left");
            $("#pop-left-panel>a>svg").removeClass("rotate-0");

            asider.addClass("slideInLeft");
            col.addClass("move-right");
            footer.addClass("move-right");
            asider.toggleClass("pop-l-sm");
            $("#pop-left-panel>a>svg").addClass("rotate-cw-180");
            setTimeout(function(){
                asider.removeClass("slideInLeft");
            }, 1000);
        } else {
            col.removeClass("move-right");
            footer.removeClass("move-right");
            $("#pop-left-panel>a>svg").removeClass("rotate-cw-180");

            asider.addClass("slideOutLeft");
            col.addClass("move-left");
            footer.addClass("move-left");
            $("#pop-left-panel>a>svg").addClass("rotate-0");
            setTimeout(function(){
                asider.toggleClass("pop-l-sm");
                asider.removeClass("slideOutLeft");
            }, 1000);
        }
    }
    $("#pop-left-panel").click(pop_left_panel);
    // $("#pop-right-panel").click(pop_right_panel);
    $(".show-main").click(pop_left_panel);

    $(window).resize(function() {
        console.log($(window).width());
        if ($(window).width() > 768 && $(".app-content").hasClass("move-right")) {
            $(".app-content").removeClass("move-right");
            $(".app-footer").removeClass("move-right");
        }
        if ($(window).width() <= 768) {
            $("#app-asider").addClass("pop-l-sm");
        }
    })

    // 手风琴侧边栏 icon转换
    $("#part").children("li").click(function(){
        $(this).children("a").children("i").toggle();
        if (!$(this).children().hasClass("show") || $(this).children().hasClass("collapsing")) {
            var lastActived = $(this).parent().children("li") && $(this).parent().children("li").children(".show");
            lastActived.parent().children("a").children("i").toggle();
        }
    })

    // login
    $("#loginform").submit(function(event) {
        function login_enable() {
            $("#login-button").attr("disabled", !1).fadeTo("slow", 1);
        }
        event.preventDefault();
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

        console.log($(this).serializeArray());
        $.ajax({
            url: $(this).attr("action"),
            type: $(this).attr("method"),
            data: $(this).serializeArray(),
            error: function() {
                $.message({
                    title: ThemeConst.LOGIN_TITLE,
                    message: ThemeConst.LOGIN_SUBMIT_ERROR,
                    type: "error",
                });
                login_enable();
                return 1;
            },
            success: function(data) {
                // console.log(data);
                data = $.parseHTML(data);
                $("#login-button").removeClass("active");
                $("#login-spin").removeClass("d-inline-block");
                try {
                    if ($("#logged-in", data).length <= 0) {
                        $.message({
                            title: ThemeConst.LOGIN_TITLE,
                            message: ThemeConst.LOGIN_SUBMIT_INFO,
                            type: "error",
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
