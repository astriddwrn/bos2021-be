$( ".shadow-bsFf" ).hover(
    function () {
    $(this).children( ".ff-img" ).css( "filter", "grayscale(0%)" );
}, function() {
    $(this).children( ".ff-img" ).css( "filter", "grayscale(100%)" );
}
);


$('.arrow').click(function () {
    $(this).parent().siblings(".bot").slideToggle();
    $(this).parent().toggleClass("top-active");
    $(this).toggleClass("arrow-active");
});
