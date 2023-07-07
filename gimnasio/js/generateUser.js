function getUser() {
	document.getElementById('users').value = autoCreate(8);
}

function autoCreate(plength) {
	var chars = "abcdefghijklmnopqrstubwsyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890";
	var user = '';
	for(i = 0; i < plength; i++) {
		user+=chars.charAt(Math.floor(
			Math.random()*chars.length));
	}

	return user;
}