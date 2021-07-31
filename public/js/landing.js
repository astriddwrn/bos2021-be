/* Fun Fact */
$(".shadow-bsFf").hover(
    function () {
    $(this).children( ".ff-img" ).css( "filter", "grayscale(0%)" );
}, function() {
    $(this).children( ".ff-img" ).css( "filter", "grayscale(100%)" );
}
);


/* FAQ */
$('.arrow').click(function () {
    $(this).parent().siblings(".bot").slideToggle();
    $(this).parent().toggleClass("top-active");
    $(this).toggleClass("arrow-active");
});

$(document).ready(function(){
    let sayCurrNum = 0;
    $('.say-btn').click(function(){
        let sayThisNum = $(this).index();
        $('.say-btn img').removeClass('say-pic-active');
        $(this).find('img').addClass('say-pic-active');
        $('.say-card').removeClass('say-card-visible');
        $('.say-card').eq(sayThisNum).addClass('say-card-visible');
    });

});

 // Event JS
 let eventCurrNum = 0;
 $(".carousel-event .next").click(function(){
     if($(this).hasClass('non-clickable')){
         return false;
     }
     $(".carousel-event .slide").eq(eventCurrNum).addClass('slide-left');
     eventCurrNum++;
     eventCurrNum>5 ? eventCurrNum=0 : '';
     let a=eventCurrNum;
     let b=eventCurrNum;
     a -=2;
     a==-2 ? a=4 : '';
     a==-1 ? a=5 : '';
     b +=1;
     b>5 ? b=0 : '';
     $(".carousel-event .slide").eq(a).removeClass('slide-left').addClass('slide-behind');
     $(".carousel-event .slide").eq(eventCurrNum).removeClass('slide-right');
     $(".carousel-event .slide").eq(b).removeClass('slide-behind').addClass('slide-right');
     $(".dot-cont-event div").removeClass('on');
     $(".dot-cont-event div").eq(eventCurrNum).addClass('on');

     $('.carousel-event .next, .carousel-event .prev').addClass('non-clickable');
     setTimeout(function(){
          $('.carousel-event .next, .carousel-event .prev').removeClass('non-clickable');
     },1000);

 });
 $(".carousel-event .prev").click(function(){
     if($(this).hasClass('non-clickable')){
         return false;
     }
     $(".carousel-event .slide").eq(eventCurrNum).addClass('slide-right');
     eventCurrNum--;
     eventCurrNum<0 ? eventCurrNum=5 : '';
     let a=eventCurrNum;
     let b=eventCurrNum;
     a +=2;
     a==7 ? a=1 : '';
     a==6 ? a=0 : '';
     b -=1;
     b<0 ? b=5 : '';
     $(".carousel-event .slide").eq(a).removeClass('slide-right').addClass('slide-behind');
     $(".carousel-event .slide").eq(eventCurrNum).removeClass('slide-left');
     $(".carousel-event .slide").eq(b).removeClass('slide-behind').addClass('slide-left');
     $(".dot-cont-event div").removeClass('on');
     $(".dot-cont-event div").eq(eventCurrNum).addClass('on');

     $('.carousel-event .next, .carousel-event .prev').addClass('non-clickable');
     setTimeout(function(){
          $('.carousel-event .next, .carousel-event .prev').removeClass('non-clickable');
     },1000);
 });
