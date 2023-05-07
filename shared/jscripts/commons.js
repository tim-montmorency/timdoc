/******************************************************
 *                Get a sync json file                *
 ******************************************************/
const syncjson = (url) => {
	try {
		const request = new XMLHttpRequest();
		request.open('GET', url, false);
		request.send(null);
		return JSON.parse(request.responseText);
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
const invertColor = (hex, bw) => {
    if (hex.indexOf('#') === 0) hex = hex.slice(1);
    if (hex.length === 3) hex = hex[0] + hex[0] + hex[1] + hex[1] + hex[2] + hex[2];
    if (hex.length !== 6) return false;
    var r = parseInt(hex.slice(0, 2), 16), g = parseInt(hex.slice(2, 4), 16), b = parseInt(hex.slice(4, 6), 16);
    if (bw) return (r * 0.299 + g * 0.587 + b * 0.114) > 186 ? '#000000' : '#FFFFFF';
    r = (255 - r).toString(16);
    g = (255 - g).toString(16);
    b = (255 - b).toString(16);
    return "#" + pad(r) + pad(g) + pad(b);
}


/******************************************************
 *                  Zero Leading Pad                  *
 ******************************************************/
const pad = (num, size) => {
	size = size || 2;
	var s = "000000000" + num;
	return s.substr(s.length-size);
}


/******************************************************
 *                  Link to data URL                  *
 ******************************************************/
const toDataURL = async (url) => {
	const blob = await fetch(url).then(res => res.blob());
	return URL.createObjectURL(blob);
}


/******************************************************
 *                    Download URL                    *
 ******************************************************/
 const download = async (url) => {
    const a = document.createElement("a");
    a.href = await toDataURL(url);
    a.download = (new URL(url)).href.replace(/^.*(\\|\/|\:)/, '');
    document.body.appendChild(a);
    a.click();
    document.body.removeChild(a);
}


/******************************************************
 *                     Load theme                     *
 ******************************************************/
// setTimeout(() => { document.body.className = localStorage.getItem('darkmode') === 'true' ? 'dark' : 'light'; }, 1);
