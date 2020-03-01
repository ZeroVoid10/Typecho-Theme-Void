
$.extend({
    message: function(msg) {
        var _msg = {
            title: "title",
            message: "操作成功",
            time: "3000",
            type: "success",
            show_close: !0,
            auto_close: !0,
            on_close: function() {}
        };
        "string" == typeof msg && (_msg.message = msg);
        "object" == typeof msg && (_msg = $.extend({}, _msg, msg));
        var body = $("body"), close_icon = _msg.show_close ? '<div class="message__close">×</div>':'',
            title = "" !== _msg.title ? '<h2 class="message__title">' + _msg.title + "</h2>" : "",
            pop_window = $('<div class="message animated slideInRight"><i class="message__icon message__'
                + _msg.type + '"></i><div class="message__container">' + title 
                + '<div class="message__content">' + _msg.message + '</div>' + close_icon
                + "</div></div>");
        var timeout;
        var out_func = function() {
            pop_window.addClass("slideOutRight");
            pop_window.one("animationend", function(){
                pop_window.remove();
                _msg.on_close(_msg);
                clearTimeout(timeout);
            })
        };
        $(".message").remove();
        body.append(pop_window);
        body.on("click", ".message__close", function(event){
            out_func();
        });
        _msg.auto_close && (timeout = setTimeout(function(){
            out_func();
        }, _msg.time));
    }
});