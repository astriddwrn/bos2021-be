
var countdownTime;

var compareTime = countdownTime;
// DATE UTC FORMAT (Year, Month-1, Date, Hour-5, Minutes, Seconds)

var date = new Date(Date.UTC(countdownTime.getFullYear(), countdownTime.getMonth(), countdownTime.getDate(), countdownTime.getHours(), countdownTime.getMinutes(), countdownTime.getSeconds()));

var now = new Date();
var diff = (date.getTime()/1000) - (now.getTime()/1000);

var clock = $('.clock').FlipClock(diff,{
      clockFace: 'DailyCounter',
      countdown: true,
});
