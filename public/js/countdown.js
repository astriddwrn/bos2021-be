
// DATE UTC FORMAT (Year, Month-1, Date, Hour-5, Minutes, Seconds)
var date = new Date(Date.UTC(2021, 6, 15, 8, 00, 60));
var now = new Date();
var diff = (date.getTime()/1000) - (now.getTime()/1000);


var clock = $('.clock').FlipClock(diff,{
      clockFace: 'DailyCounter',
      countdown: true,
});