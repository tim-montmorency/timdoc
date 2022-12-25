/******************************************************
 *                Get a sync json file                *
 ******************************************************/
const syncjson = (url) => {
	try {
		const request = new XMLHttpRequest();
		request.open('GET', url, false);
		request.send(null);
		var elms = JSON.parse(request.responseText);
		return elms;
	} catch (e) {
		return false;
	}
}


/******************************************************
 *           Convert decimal to hex string            *
 ******************************************************/
const decimalToHexString = (number) => {
	if (number < 0) number = 0xFFFFFFFF + number + 1;
	return number.toString(16).toUpperCase();
}


/******************************************************
 *                   CYRB53 Hashing                   *
 ******************************************************/
const cyrb53 = (str, seed = 0) => {
	let h1 = 0xdeadbeef ^ seed,
	h2 = 0x41c6ce57 ^ seed;
	for (let i = 0, ch; i < str.length; i++) {
		ch = str.charCodeAt(i);
		h1 = Math.imul(h1 ^ ch, 2654435761);
		h2 = Math.imul(h2 ^ ch, 1597334677);
	}
	h1 = Math.imul(h1 ^ (h1 >>> 16), 2246822507) ^ Math.imul(h2 ^ (h2 >>> 13), 3266489909);
	h2 = Math.imul(h2 ^ (h2 >>> 16), 2246822507) ^ Math.imul(h1 ^ (h1 >>> 13), 3266489909);
	return decimalToHexString(4294967296 * (2097151 & h2) + (h1 >>> 0));
};


/******************************************************
 *             Slug Diacritical Removing              *
 ******************************************************/
const lowslug = (str) => {
	return str
		.trim()
		.normalize("NFD")
		.replace(/[\u0300-\u036f]/g, "")
		.toLowerCase()
		.replace(/[^a-z0-9\s\-]/g, "")
		.replace(/[\s\t]+/g, "-")
	;
}


/******************************************************
 *                Hex Color Inversion                 *
 ******************************************************/
const invertColor = (hexTripletColor) => {
	var color = hexTripletColor;
	color = color.substring(1);
	color = parseInt(color, 16);
	color = 0xFFFFFF ^ color;
	color = color.toString(16);
	color = ("000000" + color).slice(-6);
	color = "#" + color;
	return color;
}


/******************************************************
 *                     Load theme                     *
 ******************************************************/
// setTimeout(() => { document.body.className = localStorage.getItem('darkmode') === 'true' ? 'dark' : 'light'; }, 1);
