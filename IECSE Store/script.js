var animationNameone = 'animated bounce';
var animationNametwo = 'animated flipOutY';
var removeAnimation = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend'

$(document).ready(function(){
  $(".fh").parent().on("click", function(){
    $(this).addClass(animationNameone).one(removeAnimation, function(){
      $(this).removeClass(animationNameone);
    });
  });

  $(".row img").on("click", function(){
    $(this).addClass(animationNametwo).one(removeAnimation, function(){
      $(this).removeClass(animationNametwo);
    });
  });
});
