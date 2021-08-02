// DATE UTC FORMAT (Year, Month-1, Date, Hour-5, Minutes, Seconds)
var date = new Date(Date.UTC(2021, 7, 2, 10, 00, 60));
var now = new Date();
var diff = (date.getTime()/1000) - (now.getTime()/1000);


var clock = $('.clock').FlipClock(diff,{
      clockFace: 'DailyCounter',
      countdown: true,
});

$( ".close" ).click(function() {
    $("#succeed-notif").css("display", "none");
    $("#failed-notif").css("display", "none");
  });

$( "#sendBtn" ).hover(
    function () {
    $( "#changeClr" ).attr( "fill", "#FBFBFB" );
}, function() {
    $( "#changeClr" ).attr( "fill", "#0054A5" );
}
);
