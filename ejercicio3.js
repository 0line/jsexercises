$(document).ready(function(){
    var e_countbutton = 0;
    $("#idclick").on('click',function(){
        $("#nclick").html((e_countbutton++));
    });
});