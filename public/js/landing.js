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
