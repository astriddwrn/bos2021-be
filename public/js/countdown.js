
var countdownTime;

var compareTime = countdownTime;
// DATE UTC FORMAT (Year, Month-1, Date, Hour-5, Minutes, Seconds)

var date = new Date(Date.UTC(countdownTime.getFullYear(), countdownTime.getMonth(), countdownTime.getDate(), countdownTime.getHours(), countdownTime.getMinutes(), countdownTime.getSeconds()));

var now = new Date();
var diff = (date.getTime()/1000) - (now.getTime()/1000);

setInterval(function () {
    var time_now = new Date();
    var time_diff = (date.getTime()/1000) - (time_now .getTime()/1000);
    refreshCheck(time_diff);
}, 2000);

function refreshCheck(timed) {
    if(timed<=0){
        window.location.reload();
        location.href = link;
    }
}

var clock = $('.clock').FlipClock(diff,{
      clockFace: 'DailyCounter',
      countdown: true,
});
