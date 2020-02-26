// Zero Void 2020-02-24 Mon

$("#part").children("li").click(function(){
    $(this).children("a").children("i").toggle();
    if (!$(this).children().hasClass("show") || $(this).children().hasClass("collapsing")) {
        var lastActived = $(this).parent().children("li") && $(this).parent().children("li").children(".show");
        lastActived.parent().children("a").children("i").toggle();
    }
});