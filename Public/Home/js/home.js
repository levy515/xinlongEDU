/**
 * Created by liwei on 2016/12/26.
 */
$(function(){
    $(".class-group-sub a").hover(function() {
        var $parent = $(this).parents(".class-group-con");
        $parent.find(".class-group-sub-group").removeClass("on");
        var bh = $(this).attr("data-bh");
        $parent.find(".class-group-sub-group[data-bh='" + bh + "']").addClass("on");
        $parent.find(".class-group-sub li a").removeClass("on");
        $(this).addClass("on");
    }, function() {
    });
});