function getPass() {
	document.getElementById('pass').value = autoCreate(8);
}

function autoCreate(plength) {
	var chair = "abcdefghijklmnopqrstubwsyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890";
	var password = '';
	for(i = 0; i < plength; i++) {
		password+=chair.charAt(Math.floor(
			Math.random()*chair.length));
	}

	return password;
}