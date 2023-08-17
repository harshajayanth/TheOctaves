$(document).ready(function () {

    $("#workpage,#contactpage,#gallerytabs").hide();

    $("#home").click(function (){
        $("#workpage,#contactpage,#gallerytabs").fadeOut();
        $("#homepage").fadeIn();
    })

    $("#work").click(function (){
        $("#homepage,#contactpage").fadeOut();
        $("#workpage,#gallerytabs").fadeIn();
    })

    $("#contact").click(function (){
        $("#workpage,#homepage,#gallerytabs").fadeOut();
        $("#contactpage").fadeIn();
    })

});