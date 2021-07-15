import FlipClock from 'flipclock';

const el = document.querySelector('.clock');

const clock = new FlipClock(el, new Date, {
	face: 'HourCounter'
});