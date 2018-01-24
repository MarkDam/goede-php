function time() {
	var currentTime = new Date();

	var currentHours = currentTime.getHours();
	var currentMinutes = currentTime.getMinutes();
	var currentSeconds = currentTime.getSeconds();

	currentMinutes = (currentMinutes < 10 ? "0" : "") + currentMinutes;
	currentSeconds = (currentSeconds < 10 ? "0" : "") + currentSeconds;

	var currentTimeString = currentHours + ":" + currentMinutes + ":" + currentSeconds;

	document.getElementById("time").innerHTML = currentTimeString;
}

function update() {
	time();
	clearInterval(timeInt);
	var timeInt;
	timeInt = setInterval('time()', 1000);
}
