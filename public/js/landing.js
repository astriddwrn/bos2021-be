$( ".shadow-bsFf" ).hover(
    function () {
    $(this).children( ".ff-img" ).css( "filter", "grayscale(0%)" );
}, function() {
    $(this).children( ".ff-img" ).css( "filter", "grayscale(100%)" );
}
);

