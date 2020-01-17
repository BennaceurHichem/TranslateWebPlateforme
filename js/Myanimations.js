$(function(){

//make var for this animation to make it easer to modify 
var effects = 'animated slideInLeft';
var effectsEnd = 'animationend onAnimationEnd mozAnimationEnd xebkitAnimationEnd';


$('#submit_div').hover(function(){

    $(this).addClass(effects).one(effectsEnd,function(){

        $(this).removeClass(effects);
    });



});


});