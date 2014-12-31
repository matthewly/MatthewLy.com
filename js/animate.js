$('blockquote').hover(function() {
    $(this).animate({
        height: '1500px'
    }, 500);
}, function() {
    $(this).animate({
        height: '270px'
    }, 500);
});

/*
var projectOnePosition = $('#projectOne').offset();
var projectTwoPosition = $('#projectTwo').offset();


$(function(){
    $("#projectOne").hover(function(){
        $(window).scroll(function(){
            if($(window).scrollTop() > projectTwoPosition.top-90){
                $('#projectTwo').css('position','fixed').css('top','90px');
            } else {
                $('#projectTwo').css('position','static');
            }
        });
    }, function(){
        $('#projectTwo').css('position', 'relative').css('top','200px').css('height','0px');
    });
});
*/


/*
$('#projectTwo').hover(function(){
    $(window).scroll(function(){
        if($(window).scrollTop() > projectOnePosition.top){
            $('#projectOne').css('position','fixed').css('top','90px');
        } else {
            $('#projectOne').css('position','static');
        }
    });
}, function() {
    $('#projectOne').css('position', 'relative').css('top', '200px');
});
*/
