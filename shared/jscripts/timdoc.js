/*!

████████╗██╗███╗   ███╗██████╗  ██████╗  ██████╗
╚══██╔══╝██║████╗ ████║██╔══██╗██╔═══██╗██╔════╝
   ██║   ██║██╔████╔██║██║  ██║██║   ██║██║
   ██║   ██║██║╚██╔╝██║██║  ██║██║   ██║██║
   ██║   ██║██║ ╚═╝ ██║██████╔╝╚██████╔╝╚██████╗
   ╚═╝   ╚═╝╚═╝     ╚═╝╚═════╝  ╚═════╝  ╚═════╝

*/


/******************************************************
 *                      Bind Event                    *
 ******************************************************/
const bind = (elm, evt, clb) => {
    if(typeof elm == 'string') {
        document.querySelectorAll(elm).forEach((item) => {
            item.addEventListener(evt, clb);
        });
    } else {
        elm.addEventListener(evt, clb);
    }
}


/******************************************************
 *                    Create Element                  *
 ******************************************************/
const create = (tag, classname=null) => {
    const elm = document.createElement(tag);
    if(classname) elm.className = classname;
    return elm;
}
HTMLElement.prototype.create = function(tag, classname=null) {
    const elm = create(tag, classname);
    this.append(elm);
    return elm;
}


/******************************************************
 *                    Get datetime                    *
 ******************************************************/
const now = () => {
    let now = new Date();
    let offset = now.getTimezoneOffset()
    now = new Date(now.getTime() - (offset*60*1000))
    return now.toISOString();
}


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
 *                     Browse File                    *
 ******************************************************/
const browse = (accept, clb=null) => {
    let inputElement = document.createElement("input");
    inputElement.type = "file";
    inputElement.accept = accept;
    if(clb) inputElement.addEventListener("change", clb)
    inputElement.dispatchEvent(new MouseEvent("click")); 
}


/******************************************************
 *                   Open JSON File                   *
 ******************************************************/
const openJsonFile = (clb=null) => {
    browse('application/json', (evt) => {
        let file = evt.target.files[0];
        if(file) {
            let reader = new FileReader();
            reader.readAsText(file, "UTF-8");
            reader.onload = (event) => {
                let data = JSON.parse(event.target.result);
                if(clb) clb(data);
            }
        }
    });
}


/******************************************************
 *           Convert decimal to hex string            *
 ******************************************************/
const decimalToHexString = (number) => {
    if (number < 0) number = 0xFFFFFFFF + number + 1;
    return number.toString(16).toUpperCase();
}


/******************************************************
 *            Convert bytes to hex string             *
 ******************************************************/
 const hex = (buffer) => {
    let hexCodes = [];
    let view = new DataView(buffer);
    for (let i = 0; i < view.byteLength; i += 4) {
        let value = view.getUint32(i)
        let stringValue = value.toString(16)
        let padding = '00000000'
        let paddedValue = (padding + stringValue).slice(-padding.length)
        hexCodes.push(paddedValue);
    }
    return hexCodes.join("");
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
 *                     MD5 Hashing                    *
 ******************************************************/
 const md5 = (inputString) => {
    const hc = "0123456789abcdef";
    const rh = (n) => {let j,s="";for(j=0;j<=3;j++) s+=hc.charAt((n>>(j*8+4))&0x0F)+hc.charAt((n>>(j*8))&0x0F);return s;}
    const ad = (x,y) => {let l=(x&0xFFFF)+(y&0xFFFF);let m=(x>>16)+(y>>16)+(l>>16);return (m<<16)|(l&0xFFFF);}
    const rl = (n,c) => {return (n<<c)|(n>>>(32-c));}
    const cm = (q,a,b,x,s,t) => {return ad(rl(ad(ad(a,q),ad(x,t)),s),b);}
    const ff = (a,b,c,d,x,s,t) => {return cm((b&c)|((~b)&d),a,b,x,s,t);}
    const gg = (a,b,c,d,x,s,t) => {return cm((b&d)|(c&(~d)),a,b,x,s,t);}
    const hh = (a,b,c,d,x,s,t) => {return cm(b^c^d,a,b,x,s,t);}
    const ii = (a,b,c,d,x,s,t) => {return cm(c^(b|(~d)),a,b,x,s,t);}
    const sb = (x) => {
        let i; let nblk = ((x.length + 8) >> 6) + 1; let blks = new Array(nblk * 16); for (i = 0; i < nblk * 16; i++) blks[i] = 0;
        for (i = 0; i < x.length; i++) blks[i >> 2] |= x.charCodeAt(i) << ((i % 4) * 8);
        blks[i >> 2] |= 0x80 << ((i % 4) * 8); blks[nblk * 16 - 2] = x.length * 8; return blks;
    }
     let i, x = sb("" + inputString), a = 1732584193, b = -271733879, c = -1732584194, d = 271733878, olda, oldb, oldc, oldd;
     for (i = 0; i < x.length; i += 16) {
        olda = a; oldb = b; oldc = c; oldd = d;
        a=ff(a,b,c,d,x[i+ 0], 7, -680876936);d=ff(d,a,b,c,x[i+ 1],12, -389564586);c=ff(c,d,a,b,x[i+ 2],17,  606105819);
        b=ff(b,c,d,a,x[i+ 3],22,-1044525330);a=ff(a,b,c,d,x[i+ 4], 7, -176418897);d=ff(d,a,b,c,x[i+ 5],12, 1200080426);
        c=ff(c,d,a,b,x[i+ 6],17,-1473231341);b=ff(b,c,d,a,x[i+ 7],22,  -45705983);a=ff(a,b,c,d,x[i+ 8], 7, 1770035416);
        d=ff(d,a,b,c,x[i+ 9],12,-1958414417);c=ff(c,d,a,b,x[i+10],17,     -42063);b=ff(b,c,d,a,x[i+11],22,-1990404162);
        a=ff(a,b,c,d,x[i+12], 7, 1804603682);d=ff(d,a,b,c,x[i+13],12,  -40341101);c=ff(c,d,a,b,x[i+14],17,-1502002290);
        b=ff(b,c,d,a,x[i+15],22, 1236535329);a=gg(a,b,c,d,x[i+ 1], 5, -165796510);d=gg(d,a,b,c,x[i+ 6], 9,-1069501632);
        c=gg(c,d,a,b,x[i+11],14,  643717713);b=gg(b,c,d,a,x[i+ 0],20, -373897302);a=gg(a,b,c,d,x[i+ 5], 5, -701558691);
        d=gg(d,a,b,c,x[i+10], 9,   38016083);c=gg(c,d,a,b,x[i+15],14, -660478335);b=gg(b,c,d,a,x[i+ 4],20, -405537848);
        a=gg(a,b,c,d,x[i+ 9], 5,  568446438);d=gg(d,a,b,c,x[i+14], 9,-1019803690);c=gg(c,d,a,b,x[i+ 3],14, -187363961);
        b=gg(b,c,d,a,x[i+ 8],20, 1163531501);a=gg(a,b,c,d,x[i+13], 5,-1444681467);d=gg(d,a,b,c,x[i+ 2], 9,  -51403784);
        c=gg(c,d,a,b,x[i+ 7],14, 1735328473);b=gg(b,c,d,a,x[i+12],20,-1926607734);a=hh(a,b,c,d,x[i+ 5], 4,    -378558);
        d=hh(d,a,b,c,x[i+ 8],11,-2022574463);c=hh(c,d,a,b,x[i+11],16, 1839030562);b=hh(b,c,d,a,x[i+14],23,  -35309556);
        a=hh(a,b,c,d,x[i+ 1], 4,-1530992060);d=hh(d,a,b,c,x[i+ 4],11, 1272893353);c=hh(c,d,a,b,x[i+ 7],16, -155497632);
        b=hh(b,c,d,a,x[i+10],23,-1094730640);a=hh(a,b,c,d,x[i+13], 4,  681279174);d=hh(d,a,b,c,x[i+ 0],11, -358537222);
        c=hh(c,d,a,b,x[i+ 3],16, -722521979);b=hh(b,c,d,a,x[i+ 6],23,   76029189);a=hh(a,b,c,d,x[i+ 9], 4, -640364487);
        d=hh(d,a,b,c,x[i+12],11, -421815835);c=hh(c,d,a,b,x[i+15],16,  530742520);b=hh(b,c,d,a,x[i+ 2],23, -995338651);
        a=ii(a,b,c,d,x[i+ 0], 6, -198630844);d=ii(d,a,b,c,x[i+ 7],10, 1126891415);c=ii(c,d,a,b,x[i+14],15,-1416354905);
        b=ii(b,c,d,a,x[i+ 5],21,  -57434055);a=ii(a,b,c,d,x[i+12], 6, 1700485571);d=ii(d,a,b,c,x[i+ 3],10,-1894986606);
        c=ii(c,d,a,b,x[i+10],15,   -1051523);b=ii(b,c,d,a,x[i+ 1],21,-2054922799);a=ii(a,b,c,d,x[i+ 8], 6, 1873313359);
        d=ii(d,a,b,c,x[i+15],10,  -30611744);c=ii(c,d,a,b,x[i+ 6],15,-1560198380);b=ii(b,c,d,a,x[i+13],21, 1309151649);
        a=ii(a,b,c,d,x[i+ 4], 6, -145523070);d=ii(d,a,b,c,x[i+11],10,-1120210379);c=ii(c,d,a,b,x[i+ 2],15,  718787259);
        b=ii(b,c,d,a,x[i+ 9],21, -343485551);a=ad(a,olda);b=ad(b,oldb);c=ad(c,oldc);d=ad(d,oldd);
    }
    return rh(a)+rh(b)+rh(c)+rh(d);
}


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
    let r = parseInt(hex.slice(0, 2), 16), g = parseInt(hex.slice(2, 4), 16), b = parseInt(hex.slice(4, 6), 16);
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
    let s = "000000000" + num;
    return s.substr(s.length - size);
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
 *                Download JSON Object                *
 ******************************************************/
const downloadJsonObject = (obj, filename) => {
    const a = document.createElement("a");
    a.href = "data:application/json;charset=utf-8," + encodeURIComponent(JSON.stringify(obj, null, "\t"));
    a.download = filename;
    document.body.appendChild(a);
    a.click();
    document.body.removeChild(a);
}


/******************************************************
 *            Highest common denominator              *
 ******************************************************/
const hcd = (a, b) => {
    do var r = a; while ((b = r % (a = b)) > 0);
    return a;
}


/******************************************************
 *            Select text from an element             *
 ******************************************************/
const selectElementText = (elm) => {
    let range = document.createRange();
    range.selectNodeContents(elm);
    let sel = window.getSelection();
    sel.removeAllRanges();
    sel.addRange(range);
}


/******************************************************
 *                       Modal                        *
 ******************************************************/
 class Modal {
    cont = null;
    opened = false;
    constructor(obj='') {
        this.cont = create('div', 'modal');
        if(typeof obj == 'string') this.cont.innerHTML = obj;
        else this.cont.append(obj);
        document.body.append(this.cont);
    }
    show(data=null) {
        this.opened = true;
        if(data) {
            if(typeof data == 'string') this.cont.innerHTML = data;
            else {
                while (this.cont.firstChild) this.cont.removeChild(this.cont.lastChild);
                this.cont.append(data);
            }
        }
        setTimeout(() => { this.cont.classList.add('show'); }, 1);
    }
    hide() {
        this.opened = false;
        this.cont.classList.remove('show');
    }
}


/******************************************************
 *                    Modal Message                   *
 ******************************************************/
 const MessageModal = {
    _modal: null,
    get modal() {
        if(!this._modal) {
            this._modal = new Modal();
            bind(this._modal.cont, 'mousedown', (evt) => { this._modal.hide(); });
            bind(document, 'keydown', (evt) => { if(this._modal.opened && (evt.key === 'Escape' && !(evt.ctrlKey || evt.altKey || evt.shiftKey))) { this._modal.hide(); } });
        }
        return this._modal;
    },
    setMessage(type, msg) { this.modal.show(`<div class="modal-message"><div class="infobubble ${type}"><div class="infobubble__bubble"></div>${msg}</div></div>`); },
    info(msg) { this.setMessage('info', msg); },
    warning(msg) { this.setMessage('warning', msg); },
    alert(msg) { this.setMessage('alert', msg); },
    bravo(msg) { this.setMessage('bravo', msg); },
    thumbsup(msg) { this.setMessage('thumbsup', msg); } 
}


/******************************************************
 *                   Modal Password                   *
 ******************************************************/
class PasswordModal extends Modal {
    password = null;
    input = null;
    clb = null;

    constructor(password) {
        let form = create('form', 'password-modal');
        form.innerHTML =
            `<table>` +
                `<thead>` +
                    `<tr>` +
                        `<th>Mot de passe</th>` +
                    `</tr>` +
                `</thead>` +
                `<tbody>` +
                    `<tr>` +
                        `<td><input style="width: 100%;" type="password" name="password" autocomplete="off" required></td>` +
                    `</tr>` +
                `</tbody>` +
                `<tfoot>` +
                    `<tr>` +
                        `<td>` +
                            `<input type="submit" name="save" value="Accéder">` +
                        `</td>` +
                    `</tr>` +
                `</tfoot>` +
            `</table>`;
        super(form);
        this.password = password;
        this.input = form.querySelector('input[name="password"]');
        bind(form, 'submit', (evt) => { evt.preventDefault(); this.save(); });
    }
    show(clb=null) {
        this.clb = clb;
        document.body.style.overflow = 'hidden';
        super.show();
        setTimeout(() => { this.input.focus(); }, 500);
    }
    hide() {
        document.body.style.overflow = 'auto';
        super.hide();
    }
    save() {
        if(md5(this.input.value) === this.password) {
            this.hide();
            if(this.clb) this.clb();
        } else {
            this.input.value = '';
            this.input.focus();
        }
    }
}


/******************************************************
 *                     Mount App                      *
 ******************************************************/
function timdocMount() {
    app.config.compilerOptions.whitespace = 'preserve';
    app.mount('body');
    hljs.highlightAll();
}


/******************************************************
 *                 Load Forced Theme                  *
 ******************************************************/
const darkmode_cache = 'darkmode_cache_1';
const urlParams = new URLSearchParams(window.location.search);
if (!localStorage.getItem('darkmode') || !localStorage.getItem(darkmode_cache)) {
    localStorage.setItem(darkmode_cache, 'true')
    if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches) {
        localStorage.setItem('darkmode', 'true');
    } else localStorage.setItem('darkmode', 'false');
}
if (urlParams.get('dark') !== null) localStorage.setItem('darkmode', 'true');
if (urlParams.get('light') !== null) localStorage.setItem('darkmode', 'false');


/******************************************************
 *                     Main App                       *
 ******************************************************/
const app = Vue.createApp({
    setup() {
        const meta = document.querySelector('meta[itemprop="digest"]');
        const digest = meta ? meta.content : null;
        return { digest }
    },
    data() {
        return {
            lightSwitches: [],
            tableOfContents: [],
            theme: localStorage.getItem('darkmode') === 'true' ? 'dark' : 'light'
        }
    },
    mounted() {
        const referer = new URL(document.referrer, document.baseURI);
        const breadcrumb = document.getElementById('breadcrumb');
        if (breadcrumb && /\/index\//g.test(referer.pathname))
            breadcrumb.classList.add('index');
        if (this.$refs.lightswitch != undefined)
            this.$refs.lightswitch.className = this.theme == 'dark' ? 'lightswitch--off' : 'lightswitch--on';
        window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', event => {
            if (event.matches) this.setDarkMode();
            else this.setLightMode();
        });
        if(this.digest && sessionStorage.getItem('digest-'+cyrb53(this.digest)) !== 'true') {
            document.body.classList.add('digest');
            (new PasswordModal(this.digest)).show(() => {
                sessionStorage.setItem('digest-'+cyrb53(this.digest), 'true');
                document.body.classList.remove('digest');
            });
        }
        this.$nextTick(() => {
            document.querySelectorAll('span.inline-code').forEach((elm) => {
                elm.addEventListener('click', (evt) => {
                    selectElementText(elm);
                    evt.preventDefault();
                    evt.stopPropagation();
                });
            });
        });
    },
    methods: {
        goToTop(path = null, index = null) {
            const referer = new URL(document.referrer, document.baseURI);
            if (index && /\/index\//g.test(referer.pathname)) {
                document.location.href = index;
            } else if (path) {
                document.location.href = path;
            } else {
                window.scrollTo(0, 0);
            }
        },
        registerLightSwitch(elm) {
            this.lightSwitches.push(elm);
        },
        lightswitch() {
            if (this.$refs.lightswitch.className == 'lightswitch--on') this.setDarkMode();
            else this.setLightMode();
        },
        setDarkMode() {
            this.theme = 'dark';
            document.body.classList.add('dark');
            document.body.classList.remove('light');
            localStorage.setItem('darkmode', 'true');
            if (this.$refs.lightswitch != undefined)
                this.$refs.lightswitch.className = 'lightswitch--off';
            this.lightSwitches.forEach((elm) => { elm.lightSwitchOff(); });
        },
        setLightMode() {
            this.theme = 'light';
            document.body.classList.add('light');
            document.body.classList.remove('dark');
            localStorage.setItem('darkmode', 'false');
            if (this.$refs.lightswitch != undefined)
                this.$refs.lightswitch.className = 'lightswitch--on';
            this.lightSwitches.forEach((elm) => { elm.lightSwitchOn(); });
        }
    }
});


/******************************************************
 *           Composante Table des matières            *
 ******************************************************/
app.component('tabledesmatieres', {
    template:
        `<div id="contents_table" v-if="this.$root.tableOfContents.length > 0">` +
            `<div class="contents_table__table">` +
                `<a href="#" class="no-underline"><strong>Table des matières</strong></a>` +
                `<ul>` +
                    `<li v-for="elm in this.$root.tableOfContents"><a :href="'#'+elm.id">{{ elm.name }}</a></li>` +
                `</ul>` +
            `</div>` +
        `</div>`
});


/******************************************************
 *               Composante Gros Titre                *
 ******************************************************/
app.component('grostitre', {
    data() {
        return { id: lowslug(this.$slots.default()[0].children) }
    },
    created() {
        this.$root.tableOfContents.push({
            id: this.id,
            name: this.$slots.default()[0].children
        });
    },
    methods: {
        click(event) {
            let link = window.location.origin + window.location.pathname + '#' + this.id;
            navigator.clipboard.writeText(link);
            let target = event.currentTarget;
            target.classList.add('copied');
            setTimeout(() => {
                target.classList.remove('copied');
            }, 1000);
        },
    },
    template:
        `<div class="grostitre">` +
            `<a :id="this.id"></a>` +
            `<h2><slot /></h2>` +
            `<div class="grostitre__chain" @click="click($event)">` +
                `<svg fill="currentColor" viewBox="0 0 24 24">` +
                    `<path d="M17 7h-4v2h4c1.65 0 3 1.35 3 3s-1.35 3-3 3h-4v2h4c2.76 0 5-2.24 5-5s-2.24-5-5-5zm-6 8H7c-1.65 0-3-1.35-3-3s1.35-3 3-3h4V7H7c-2.76 0-5 2.24-5 5s2.24 5 5 5h4v-2zm-3-4h8v2H8z"></path>` +
                `</svg>` +
            `</div>` +
            `<div class="grostitre__linkcopied">Lien copié &#x2713;</div>` +
        `</div>`
});


/******************************************************
 *                      Numbers                       *
 ******************************************************/
 app.component('zero', {
    props: ['size', 'color'],
    setup(props) {
        props.size || (props.size = 24);
        props.color || (props.color = 'currentColor');
    },
    template: `<svg xmlns="http://www.w3.org/2000/svg" :fill="this.color" class="number" :height="this.size" viewBox="0 0 16 16"><path d="M8 5C7 5 6.4 6 6.4 7.8v.4C6.4 10 7 11 8 11s1.6-1 1.6-3v-.3C9.6 6 9 5 8 5"/><path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-8 4.2c1.8 0 3-1.6 3-4v-.4c0-2.4-1.1-4-3-4s-3 1.6-3 4v.4c0 2.4 1.1 4 3 4"/></svg>`
});
app.component('one', {
    props: ['size', 'color'],
    setup(props) {
        props.size || (props.size = 24);
        props.color || (props.color = 'currentColor');
    },
    template: `<svg xmlns="http://www.w3.org/2000/svg" :fill="this.color" class="number" :height="this.size" viewBox="0 0 16 16"><path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M9.3 4H8L6 5.4v1.3l2-1.4V12h1.3z"/></svg>`
});
app.component('two', {
    props: ['size', 'color'],
    setup(props) {
        props.size || (props.size = 24);
        props.color || (props.color = 'currentColor');
    },
    template: `<svg xmlns="http://www.w3.org/2000/svg" :fill="this.color" class="number" :height="this.size" viewBox="0 0 16 16"><path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M6.65 6.24c0-.7.49-1.3 1.33-1.3.76 0 1.32.49 1.32 1.23 0 .7-.47 1.23-.9 1.7l-2.98 3.3V12h5.35v-1.1h-3.5v-.08L9.24 8.6l.1-.11c.69-.76 1.28-1.43 1.28-2.43 0-1.27-1.03-2.22-2.6-2.22-1.77 0-2.64 1.2-2.64 2.4v.07h1.27v-.07Z"/></svg>`
});
app.component('three', {
    props: ['size', 'color'],
    setup(props) {
        props.size || (props.size = 24);
        props.color || (props.color = 'currentColor');
    },
    template: `<svg xmlns="http://www.w3.org/2000/svg" :fill="this.color" class="number" :height="this.size" viewBox="0 0 16 16"><path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-8.08.41c.92 0 1.53.54 1.54 1.32.01.8-.62 1.36-1.59 1.36-.86-.01-1.48-.47-1.54-1.07H5.1c.05 1.18 1.05 2.14 2.76 2.14 1.65 0 2.95-.93 2.93-2.4a1.92 1.92 0 0 0-1.74-1.9v-.08c.6-.1 1.5-.74 1.49-1.87-.03-1.18-1.05-2.08-2.64-2.07-1.68.01-2.6.99-2.63 2.12h1.25c.04-.55.56-1.05 1.35-1.05.78 0 1.35.49 1.35 1.2s-.57 1.23-1.34 1.23h-.84v1.07h.88Z"/></svg>`
});
app.component('four', {
    props: ['size', 'color'],
    setup(props) {
        props.size || (props.size = 24);
        props.color || (props.color = 'currentColor');
    },
    template: `<svg xmlns="http://www.w3.org/2000/svg" :fill="this.color" class="number" :height="this.size" viewBox="0 0 16 16"><path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M7.52 5.06a78.84 78.84 0 0 0-2.54 4.26v1.12h3.87V12h1.26v-1.56h1v-1.1h-1V4H8.18zm-1.3 4.22v.05h2.63V5.06h-.07a66.05 66.05 0 0 0-2.55 4.22"/></svg>`
});
app.component('five', {
    props: ['size', 'color'],
    setup(props) {
        props.size || (props.size = 24);
        props.color || (props.color = 'currentColor');
    },
    template: `<svg xmlns="http://www.w3.org/2000/svg" :fill="this.color" class="number" :height="this.size" viewBox="0 0 16 16"><path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-8 4.16c1.73 0 2.92-1.12 2.92-2.8a2.46 2.46 0 0 0-2.56-2.6c-.9 0-1.44.43-1.61.69h-.07l.2-2.35h3.62V4H5.8l-.35 4.63h1.14c.2-.36.67-.8 1.44-.8.85 0 1.58.6 1.58 1.56 0 1.09-.78 1.68-1.57 1.68-.7 0-1.39-.3-1.53-1.03H5.28c.06 1.22 1.14 2.12 2.72 2.12Z"/></svg>`
});
app.component('six', {
    props: ['size', 'color'],
    setup(props) {
        props.size || (props.size = 24);
        props.color || (props.color = 'currentColor');
    },
    template: `<svg xmlns="http://www.w3.org/2000/svg" :fill="this.color" class="number" :height="this.size" viewBox="0 0 16 16"><path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8.21 3.86c-1.87 0-3.12 1.39-3.12 4.4 0 1.19.23 2.04.6 2.64a2.67 2.67 0 0 0 2.41 1.26c1.63 0 2.85-1.02 2.85-2.79a2.45 2.45 0 0 0-2.51-2.55c-1.13 0-1.75.61-1.98 1.16h-.08c-.02-1.95.72-3.04 1.8-3.04.8 0 1.22.46 1.31.81h1.3c-.07-.9-.97-1.9-2.58-1.9Zm-.1 4a1.5 1.5 0 0 0-1.56 1.58c0 1.03.7 1.63 1.56 1.63.86 0 1.55-.53 1.55-1.63a1.5 1.5 0 0 0-1.55-1.58"/></svg>`
});
app.component('seven', {
    props: ['size', 'color'],
    setup(props) {
        props.size || (props.size = 24);
        props.color || (props.color = 'currentColor');
    },
    template: `<svg xmlns="http://www.w3.org/2000/svg" :fill="this.color" class="number" :height="this.size" viewBox="0 0 16 16"><path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M5.37 5.11h3.97v.07L6.03 12h1.39l3.26-6.85V4H5.37v1.1Z"/></svg>`
});
app.component('eight', {
    props: ['size', 'color'],
    setup(props) {
        props.size || (props.size = 24);
        props.color || (props.color = 'currentColor');
    },
    template: `<svg xmlns="http://www.w3.org/2000/svg" :fill="this.color" class="number" :height="this.size" viewBox="0 0 16 16"><path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-5.03 1.8a2 2 0 0 0-1.65-1.99v-.06c.6-.2 1.34-.72 1.34-1.78 0-1.23-1.08-2.13-2.65-2.13s-2.66.9-2.66 2.12c0 1.05.7 1.6 1.33 1.79v.06c-.7.15-1.65.73-1.65 2 0 1.4 1.19 2.35 2.95 2.35 1.77 0 3-.96 3-2.36ZM6.62 6.1c0 .73.59 1.25 1.39 1.25s1.37-.52 1.37-1.26c0-.73-.58-1.23-1.37-1.23s-1.39.5-1.39 1.23Zm-.28 3.64c0 .84.72 1.41 1.67 1.41.94 0 1.65-.57 1.65-1.41S8.95 8.3 8.01 8.3c-.95 0-1.67.58-1.67 1.43"/></svg>`
});
app.component('nine', {
    props: ['size', 'color'],
    setup(props) {
        props.size || (props.size = 24);
        props.color || (props.color = 'currentColor');
    },
    template: `<svg xmlns="http://www.w3.org/2000/svg" :fill="this.color" class="number" :height="this.size" viewBox="0 0 16 16"><path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-8.22 4.15c2.1 0 3.12-1.47 3.12-4.3 0-3.15-1.46-4.02-2.97-4.02-1.63 0-2.87 1.02-2.87 2.73 0 1.7 1.17 2.67 2.56 2.67 1.06 0 1.7-.56 1.94-1.18h.07c.05 1.67-.47 3.02-1.83 3.02-.7 0-1.15-.36-1.25-.72h-1.3c.1.9.93 1.8 2.53 1.8Zm.11-3.98c.81 0 1.54-.52 1.54-1.59S8.76 4.9 7.87 4.9c-.84 0-1.52.62-1.52 1.66 0 1.08.71 1.61 1.54 1.61Z"/></svg>`
});


/******************************************************
 *                  Composante Info                   *
 ******************************************************/
app.component('info', {
    template: `<div class="infobubble info"><div class="infobubble__bubble"></div><slot/></div>`
});


/******************************************************
 *                 Composante Warning                 *
 ******************************************************/
app.component('warning', {
    template: `<div class="infobubble warning"><div class="infobubble__bubble"></div><slot/></div>`
});


/******************************************************
 *                  Composante Alert                  *
 ******************************************************/
app.component('alert', {
    template: `<div class="infobubble alert"><div class="infobubble__bubble"></div><slot/></div>`
});


/******************************************************
 *                  Composante Bravo                  *
 ******************************************************/
app.component('bravo', {
    template: `<div class="infobubble bravo"><div class="infobubble__bubble"></div><slot/></div>`
});


/******************************************************
 *                 Composante Thumbs Up               *
 ******************************************************/
app.component('thumbsup', {
    template: `<div class="infobubble thumbsup"><div class="infobubble__bubble"></div><slot/></div>`
});


/******************************************************
 *                  Composante Incode                 *
 ******************************************************/
app.component('incode', {
    template: `<span class="inline-code"><slot/></span>`
});


/******************************************************
 *                Composante Mediafile                *
 ******************************************************/
app.component('mediafile', {
    props: ['src', 'spacer', 'addr'],
    data() {
        let addr = (typeof this.addr != 'undefined' && this.addr == 'false') ? false : true;
        let space = this.spacer == 'true' ? ' spacerr' : '';
        try { var url = new URL(this.src); }
        catch (e) { var url = new URL(this.src, document.baseURI); }
        switch (url.href.split('.').pop().toLocaleLowerCase()) {
            case 'svg': var icon = 'type-svg.webp'; break;
            case 'jpg': var icon = 'type-jpg.webp'; break;
            case 'png': var icon = 'type-png.webp'; break;
            case 'webp': var icon = 'type-png.webp'; break;
            case 'zip': var icon = 'type-zip.webp'; break;
            case 'mp3': var icon = 'type-audio.webp'; break;
            default: var icon = 'type-file.webp';
        }
        return {
            isaddr: addr,
            space: space,
            link: url.href,
            icon: shared + 'images/types/' + icon
        }
    },
    methods: {
        click(event) {
            navigator.clipboard.writeText(this.link);
            let target = event.currentTarget;
            target.classList.add('copied');
            setTimeout(() => {
                target.classList.remove('copied');
            }, 1000);
        },
        download(event) {
            download(this.link);
            let target = event.currentTarget;
            target.classList.add('copied');
            setTimeout(() => {
                target.classList.remove('copied');
            }, 1000);
        },
        focus(event) {
            event.currentTarget.select();
        }
    },
    template:
        `<div :class="'mediafile' + this.space">` +
            `<div class="mediafile__icon" :style="'background-image: url(\\'' + this.icon + '\\')'">&nbsp;</div>` +
            `<div class="mediafile__text"><slot/></div>` +
            `<div class="mediafile__download" title="Télécharger" @click="download($event)"><svg fill="currentColor" viewBox="0 0 538 538"><path d="M463 466H75c-12 0-22 10-22 22v28c0 12 10 22 22 22h388c12 0 21-10 21-22v-28c1-12-9-22-21-22zm-209-38c4 4 10 6 15 6 6 0 11-2 15-6l147-147c9-9 9-22 0-31l-20-20c-8-9-22-9-31 0l-75 75V21c0-11-10-21-22-21h-28c-12 0-22 10-22 21v285l-75-76c-9-8-22-8-31 0l-20 20c-9 9-9 22 0 31l147 147z"/></svg></div>` +
            `<div class="mediafile__chain" title="Copier" @click="click($event)"><svg fill="currentColor" viewBox="0 0 24 24"><path d="M17 7h-4v2h4c1.65 0 3 1.35 3 3s-1.35 3-3 3h-4v2h4c2.76 0 5-2.24 5-5s-2.24-5-5-5zm-6 8H7c-1.65 0-3-1.35-3-3s1.35-3 3-3h4V7H7c-2.76 0-5 2.24-5 5s2.24 5 5 5h4v-2zm-3-4h8v2H8z"></path></svg></div>` +
            `<div class="mediafile__linkcopied">Lien copié &#x2713;</div>` +
        `</div>` +
        `<div v-if="this.isaddr" :class="'mediafile__link' + this.space"><input readonly type="text" class="mediafile__link-text" :value="this.link" @focus="focus($event)"></div>` +
        `<div v-if="this.isaddr" class="mediafile__spacer"></div>`
});


/******************************************************
 *                 Composante Codepen                 *
 ******************************************************/
app.component('codepen', {
    props: ['id', 'title', 'tab', 'height'],
    setup(props) {
        props.tab || (props.tab = 'html,result');
        props.height || (props.height = 400);
    },
    data() {
        let remark = '';
        if (typeof this.$slots.default != 'undefined') {
            remark = this.$slots.default()[0].children;
        }
        this.$root.registerLightSwitch(this);
        let theme = this.$root.theme == 'dark' ? '43847' : '44431';
        return {
            user: 'tim-momo',
            theme: theme,
            bheight: this.height,
            cheight: parseInt(this.height) + 2,
            defaulttab: encodeURIComponent(this.tab),
            remark: remark
        }
    },
    methods: {
        lightSwitchOn() {
            this.theme = '44431';
        },
        lightSwitchOff() {

            this.theme = '43847';
        },
    },
    template:
    `<div class="codepen-container" :style="'height: ' + cheight + 'px'">` +
        `<iframe :src="'https://codepen.io/' + user + '/embed/' + id + '?default-tab=' + defaulttab + '&theme-id=' + theme" class="codepen" scrolling="no" frameborder="no" loading="lazy" allowtransparency="true" allowfullscreen="true" :style="'height: ' + bheight + 'px;'"></iframe>` +
        // `<span class="codepen-remark" v-if="this.remark != ''">{{ remark }}</span>` +
    `</div>`
});


/******************************************************
 *                Composante Exercice                 *
 ******************************************************/
app.component('exercice', {
    props: ['href'],
    data() {
        let exroot = this.href.replace(/\/+$/, '') + '/';
        let exdetails = syncjson(exroot + 'exercice.json');
        let thumb = exroot + exdetails.icon;
        let url = typeof exdetails.url == 'undefined' ? exroot : exdetails.url;
        return {
            name: exdetails.title,
            description: exdetails.abstract,
            thumb: thumb,
            url: url
        }
    },
    template:
        `<a class="exercice" target="_blank" :href="this.url">` +
            `<div class="exercice-container">` +
                `<div class="exercice-thumb" :style="'background-image: url(\\'' + this.thumb + '\\')'"></div>` +
                `<div class="exercice-abstract">` +
                    `<em class="exercice-label">EXERCICE</em>` +
                    `<span class="exercice-title">{{ name }}</span>` +
                    `<span class="exercice-description">{{ description }}</span>` +
                `</div>` +
            `</div>` +
        `</a>`
});


/******************************************************
 *                  Composante Tool                   *
 ******************************************************/
app.component('tool', {
    props: ['href'],
    data() {
        let exroot = this.href.replace(/\/+$/, '') + '/';
        let exdetails = syncjson(exroot + 'tool.json');
        let thumb = exroot + exdetails.icon;
        let url = typeof exdetails.url == 'undefined' ? exroot : exdetails.url;
        return {
            name: exdetails.title,
            description: exdetails.abstract,
            thumb: thumb,
            url: url
        }
    },
    template:
        `<a class="tool" target="_blank" :href="this.url">` +
            `<div class="tool-container">` +
                `<div class="tool-abstract">` +
                    `<em class="tool-label">OUTIL</em>` +
                    `<span class="tool-title">{{ name }}</span>` +
                    `<span class="tool-description">{{ description }}</span>` +
                `</div>` +
                `<div class="tool-thumb" :style="'background-image: url(\\'' + this.thumb + '\\')'"></div>` +
            `</div>` +
        `</a>`
});


/******************************************************
 *                Composante Knowmore                 *
 ******************************************************/
app.component('knowmore', {
    props: ['href'],
    template:
        `<a class="knowmore" target="_blank" :href="this.href">` +
            `<div class="knowmore__title">&#128214; EN SAVOIR PLUS</div>` +
            `<div class="knowmore__abstract"><slot/></div>` +
        `</a>`
});


/******************************************************
 *                Composante Doclink                  *
 ******************************************************/
app.component('doclink', {
    props: ['href', 'spacer'],
    setup() {
        const domains = {
            "www.w3schools.com":                 "w3schools",
            "developer.mozilla.org":             "mozilla",
            "codepen.io":                        "codepen",
            "css-tricks.com":                    "csstricks",
            "getbootstrap.com":                  "bootstrap",
            "icons.getbootstrap.com":            "bootstrap",
            "fonts.google.com":                  "googlefonts",
            "fr.wikipedia.org":                  "wikipedia",
            "en.wikipedia.org":                  "wikipedia",
            "ogp.me":                            "ogp",
            "developers.facebook.com":           "facebook",
            "greensock.com":                     "greensock",
            "smnarnold.com":                     "smnarnold",
            "trello.com":                        "trello",
            "sass-lang.com":                     "sass",
            "developer.vuforia.com":             "vuforia",
            "cmontmorency365-my.sharepoint.com": "momo",
            "cmontmorency365.sharepoint.com":    "momo",
            "www.cmontmorency.qc.ca":            "momo",
            "teams.microsoft.com":               "momo",
            "ccti.cmontmorency.qc.ca":           "momo",
            "github.com":                        "github",
            "developers.google.com":             "google",
            "youtu.be":                          "youtube",
            "youtube.com":                       "youtube",
            "www.youtube.com":                   "youtube",
            "www.unity.com":                     "unity",
            "learn.unity.com":                   "unity",
            "id.unity.com":                      "unity",
            "assetstore.unity.com":              "unity",
            "unity.com":                         "unity",
            "vuejs.org":                         "vuejs",
            "v3.vuejs.org":                      "vuejs",
            "developer.wordpress.org":           "wordpress",
            "fr-ca.wordpress.org":               "wordpress",
            "fr.wordpress.org":                  "wordpress",
            "wordpress.org":                     "wordpress",
            "wordpress.com":                     "wordpress",
            "www.advancedcustomfields.com":      "wordpress",
            "npmjs.com":                         "npm",
            "docs.npmjs.com":                    "npm",
            "vimeo.com":                         "vimeo",
            "web.dev":                           "webdev",
        };
        return { domains }
    },
    data() {
        let site = '';
        try {
            let url = new URL(this.href);
            if(this.domains[url.hostname] !== undefined) site = this.domains[url.hostname];
        } catch (e) {
            if (this.href.split('.').pop().toLocaleLowerCase() == 'zip') site = 'zipfile';
        }
        if (this.spacer == 'true') site += ' spacer';
        return { class: site }
    },
    template:
        `<a :class="'doclink ' + this.class" target="_blank" rel="noopener noreferrer" :href="this.href">` +
            `<div class="doclink-container">` +
                `<div class="doclink-icon"></div>` +
                `<span class="doclink-title"><slot /></span>` +
            `</div>` +
        `</a>`
});


/******************************************************
 *                  Composante Dots                   *
 ******************************************************/
app.component('dots', {
    template:
        `<div class="dots">` +
            `<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="currentColor">` +
                `<rect width="256" height="128" fill="none"/>` +
                `<circle cx="128" cy="128" r="6"/>` +
                `<circle cx="64" cy="128" r="6"/>` +
                `<circle cx="192" cy="128" r="6"/>` +
            `</svg>` +
        `</div>`
});


/******************************************************
 *                  Composante Color                  *
 ******************************************************/
app.component('color', {
    props: ['spacer'],
    data() {
        let color = this.$slots.default()[0].children;
        let invert = invertColor(color, true);
        let space = this.spacer == 'true' ? ' spacer' : '';
        return {
            color: color,
            invert: invert,
            text: color,
            space: space,
            clicked: ''
        };
    },
    methods: {
        click() {
            navigator.clipboard.writeText(this.color);
            this.clicked = ' clicked';
            this.text = 'Copié!';
            setTimeout(() => {
                this.clicked = '';
                this.text = this.color;
            }, 2000);
        }
    },
    template:
        `<span :class="'color' + this.space + this.clicked" :style="'color: ' + this.invert + '; background-color: ' + this.color + ';'" @click="click()">` +
            `{{ text }}` +
        `</span>`
});


/******************************************************
 *                  Composante Clip                   *
 ******************************************************/
app.component('clip', {
    props: ['src', 'title'],
    data() {
        let url = new URL(this.src, document.baseURI);
        let name = url.pathname.split('.').shift();
        let id = name.split('/').pop();
        let details = syncjson(name + '.json');
        let track = undefined;
        let title = this.title ?? '';
        details.media.track.forEach(elm => { if (elm['@type'] == 'Video') { track = elm; } });
        if (track == undefined) return {};
        else {
            let denominator = hcd(track.Width, track.Height);
            let aspect = (track.Width / denominator) + '/' + (track.Height / denominator);
            return {
                id: id,
                name: name,
                title: title,
                width: track.Width,
                height: track.Height,
                aspect: aspect,
                thumbnail_url: name + '.jpg',
                playbtn: 'block',
                player: ''
            }
        }
    },
    methods: {
        play() {
            this.player = '<video id="' + this.id + '" width="100%" height="100%" autoplay="true" poster="' + this.thumbnail_url + '" data-setup=\'{"fluid": true}\' controls preload="auto"><source src="' + this.src + '" type="video/mp4" /></video>';
            this.playbtn = 'none';
        }
    },
    template:
        `<div class="oembed-wrapper" :style="'background-image: url(' + this.thumbnail_url + '); aspect-ratio: ' + this.aspect + ';'">` +
            `<div class="oembed-wrapper__title" :style="'display: ' + this.playbtn + ';'"><div>{{ title }}</div></div>` +
            `<div class="oembed-wrapper__play" @click="this.play();" :style="'display: ' + this.playbtn + ';'"></div>` +
            `<div class="oembed-wrapper__player" v-html="player"></div>` +
        `</div><br>`
});


/******************************************************
 *                Composante Clipasset                *
 ******************************************************/
app.component('clipasset', {
    props: ['src', 'mobile'],
    data() {
        let isMobile = false;
        if (typeof this.mobile != 'undefined') isMobile = true;
        return {
            isMobile: isMobile
        }
    },
    template: `<div class="video-asset-container"><video playsinline :src="this.src" autoplay="true" muted="true" loop="true" :class="'video-asset' + (isMobile ? ' mobile-width' : '')"></video></div`
});


/******************************************************
 *                 Composante Youtube                 *
 ******************************************************/
app.component('youtube', {
    props: ['src'],
    data() {
        let details = null;
        let defaultId = 'o-YBDTqX_ZU';
        if (/^[\w\-_]{10,12}$/.test(this.src)) {
            if (!(details = localStorage.getItem('youtube_' + this.src))) {
                if (!(details = this.getInfo(this.src))) {
                    details = this.getInfo(defaultId);
                } else {
                    localStorage.setItem('youtube_' + this.src, JSON.stringify(details));
                }
            } else {
                details = JSON.parse(details);
            }
        } else {
            details = syncjson(this.src);
        }
        let denominator = hcd(details.width, details.height);
        return {
            id: /\/embed\/([^\/]+)\?/g.exec(details.html)[1],
            title: details.title,
            width: details.width,
            height: details.height,
            aspect: (details.width / denominator) + '/' + (details.height / denominator),
            thumbnail_url: details.thumbnail_url,
            playbtn: 'block',
            player: ''
        }
    },
    methods: {
        getInfo(id) {
            return syncjson('https://www.youtube.com/oembed?url=https://www.youtube.com/watch?v=' + id + '&format=json')
        },
        play() {
            this.player = '<iframe width="100%" height="100%" src="https://www.youtube.com/embed/' + this.id + '?feature=oembed&autoplay=1" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>';
            this.playbtn = 'none';
        }
    },
    template:
        `<div class="oembed-wrapper" :style="'background-image: url('+this.thumbnail_url+'); aspect-ratio: '+ this.aspect+';'">` +
            `<div class="oembed-wrapper__title" :style="'display: '+this.playbtn+';'"><div>{{ title }}</div></div>` +
            `<div class="oembed-wrapper__play" @click="this.play();" :style="'display: '+this.playbtn+';'"></div>` +
            `<div class="oembed-wrapper__player" v-html="player"></div>` +
        `</div><br>`
});


/******************************************************
 *                  Composante Vimeo                  *
 ******************************************************/
app.component('vimeo', {
    props: ['src'],
    data() {
        let details = null;
        let defaultId = '844557780';
        if (!(details = localStorage.getItem('vimeo_' + this.src))) {
            if (!(details = this.getInfo(this.src))) {
                details = this.getInfo(defaultId);
            } else {
                localStorage.setItem('vimeo_' + this.src, JSON.stringify(details));
            }
        } else {
            details = JSON.parse(details);
        }
        let denominator = hcd(details.width, details.height);
        return {
            id: this.src,
            title: details.title,
            width: details.width,
            height: details.height,
            aspect: (details.width / denominator) + '/' + (details.height / denominator),
            thumbnail_url: details.thumbnail_url,
            playbtn: 'block',
            player: ''
        }
    },
    methods: {
        getInfo(id) {
            return syncjson('https://vimeo.com/api/oembed.json?url=https://vimeo.com/' + id);
        },
        play() {
            this.player = '<iframe src="https://player.vimeo.com/video/' + this.id + '?autoplay=1" width="100%" height="100%" frameborder="0" allow="autoplay; fullscreen; picture-in-picture"></iframe>'
            this.playbtn = 'none';
        }
    },
    template:
        `<div class="oembed-wrapper" :style="'background-image: url('+this.thumbnail_url+'); aspect-ratio: '+this.aspect+';'">` +
            `<div class="oembed-wrapper__title" :style="'display: '+this.playbtn+';'"><div>{{ title }}</div></div>` +
            `<div class="oembed-wrapper__play" @click="this.play();" :style="'display: '+this.playbtn+';'"></div>` +
            `<div class="oembed-wrapper__player" v-html="player"></div>` +
        `</div><br>`
});


/******************************************************
 *                Composante Highlight                *
 ******************************************************/
//https://github.com/highlightjs/highlight.js/blob/main/SUPPORTED_LANGUAGES.md
app.component('highlight', {
    props: ['lang', 'scroll'],
    template: `<pre class="highlight"><code :class="'language-' + this.lang + (this.scroll == 'true' ? ' scroll' : '')"><slot /></code></pre>`
});


/******************************************************
 *                 Composante Gallery                 *
 ******************************************************/
app.component('gallery', {
    data() {
        let images = [];
        let slides = [];
        let thslides = [];
        this.$slots.default()[0].children.trim().split('\n').forEach(elm => {
            let img = (new URL(elm.trim(), document.baseURI)).href;
            thslides.push('<div class="swiper-slide"><img src="' + img + '"></div>');
            slides.push('<div class="swiper-slide" style="background-image: url(\'' + img + '\')"><img src="' + img + '"></div>');
            images.push(img);
        });
        return {
            hash: cyrb53(images.join('')),
            thslides: thslides.join(''),
            slides: slides.join(''),
            images: images,
            swiper: null,
            thumbs: null,
            modal: null,
            show: false
        }
    },
    created() {
        this.$nextTick(() => {
            document.addEventListener('keydown', this.hotkeys);
            this.modal = document.getElementById('swiper-modal-' + this.hash);
            this.thumbs = new Swiper("#swiper-thumbs-" + this.hash, {
                spaceBetween: 10,
                slidesPerView: 'auto',
                freeMode: true,
                watchSlidesProgress: true,
            });
            this.swiper = new Swiper("#swiper-" + this.hash, {
                spaceBetween: 10,
                pagination: {
                    el: "#swiper-pagination-" + this.hash,
                    type: "fraction",
                },
                navigation: {
                    nextEl: "#swiper-button-next-" + this.hash,
                    prevEl: "#swiper-button-prev-" + this.hash,
                },
                thumbs: {
                    swiper: this.thumbs,
                },
            });
        });
    },
    methods: {
        modalimage() {
            this.modal.style.backgroundImage = "url('" + this.images[this.swiper.activeIndex] + "')";
        },
        fullscreen() {
            this.modalimage();
            this.modal.classList.add("swiper-modal--show");
            this.show = true;
        },
        close() {
            this.modal.classList.remove("swiper-modal--show");
            this.show = false;
        },
        hotkeys(event) {
            if (this.show) {
                if (event.key === 'Escape' && !(event.ctrlKey || event.altKey || event.shiftKey)) {
                    this.close();
                } else if (event.key === 'ArrowRight') {
                    this.swiper.slideNext();
                    this.modalimage();
                } else if (event.key === 'ArrowLeft') {
                    this.swiper.slidePrev();
                    this.modalimage();
                }
            }
        }
    },
    template:
        `<div class="swiper-container">` +
            `<div class="swiper-modal" :id="'swiper-modal-' + this.hash" @click="close()"></div>` +
            `<div :id="'swiper-' + this.hash" style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper swiper-main">` +
                `<div class="swiper-wrapper" v-html="slides"></div>` +
                `<div :id="'swiper-button-next-' + this.hash" class="swiper-button-next"></div>` +
                `<div :id="'swiper-button-prev-' + this.hash" class="swiper-button-prev"></div>` +
                `<div :id="'swiper-pagination-' + this.hash" class="swiper-pagination"></div>` +
                `<div title="Navigue avec les flèches de ton clavier en plein écran" class="swiper-fullscreen" @click="fullscreen()"></div>` +
            `</div>` +
            `<div :id="'swiper-thumbs-' + this.hash" class="swiper swiper-thumbs">` +
                `<div class="swiper-wrapper" v-html="thslides"></div>` +
            `</div>` +
        `</div>`
});


/******************************************************
 *                Composante Checklist                *
 ******************************************************/
app.component('checklist', {
    data() {
        var text = '';
        this.$slots.default().forEach(elm => {
            if (typeof elm.type == "string") {
                var props = '';
                for (i in elm.props) props += ' ' + i + '="' + elm.props[i] + '"';
                if (elm.type == 'br' || elm.type == 'img') text += '<' + elm.type + props + '>';
                else text += '<' + elm.type + props + '>' + elm.children + '</' + elm.type + '>';
            } else {
                text += elm.children;
            }
        });
        var lines = [];
        text.trim().split('\n').map(v => { lines.push(v.trim()); });
        var hash = this.getHash(lines.join());
        let cookieValue = localStorage.getItem('checklist-' + hash);
        if (typeof cookieValue == 'string') {
            var checks = cookieValue.split(',').map((val) => { return parseInt(val); });
            if (checks.length != lines.length) {
                checks = [];
                lines.forEach(() => { checks.push(0); });
            }
        } else {
            var checks = [];
            lines.forEach(() => { checks.push(0); });
        }
        return {
            hash: hash,
            list: lines,
            checks: checks,
            progress: 0
        }
    },
    created() {
        this.$nextTick(() => {
            let localurl = new URL(location.href, document.baseURI);
            this.$refs.checklist.querySelectorAll('a').forEach((elm) => {
                let targeturl = new URL(elm.href, document.baseURI);
                if(!(targeturl.hash && localurl.host == targeturl.host && localurl.pathname == targeturl.pathname)){
                    elm.target = "_blank";
                    elm.rel = "noopener noreferrer";
                }
                elm.addEventListener('click', (evt) => { evt.stopPropagation(); });
            });
            this.updateProgressBar();
        });
    },
    methods: {
        getHash(str) {
            return cyrb53(window.location.pathname + str);
        },
        click(event, i) {
            if (window.getSelection().toString().length !== 0) return;
            this.checks[i] = this.checks[i] ? 0 : 1;
            if (this.checks[i]) event.currentTarget.classList.add('checked');
            else event.currentTarget.classList.remove('checked');
            localStorage.setItem('checklist-' + this.hash, this.checks.join(','));
            this.updateProgressBar();
            
        },
        updateProgressBar() {
            let total = 0;
            this.checks.forEach(val => { total += val; });
            this.progress = (total / this.checks.length * 100).toFixed(0);
        }
    },
    template:
        `<div ref="checklist" class="checklist">` +
            `<div class="checklist__pourcentage">{{ progress }}%</div>` +
            `<div class="checklist__progressbar" :style="'background-size: ' + this.progress + '% 100%;'"></div>` +
            `<ol>` +
                `<li v-for="(line, i) in this.list" :class="this.checks[i]?'checked':''" @click="click($event,i)" v-html="line"></li>` +
            `</ol>` +
        `</div>`
});


/******************************************************
 *                  Composante Tune                   *
 ******************************************************/
 app.component('tune', {
    props: ['src'],
    data() {
        var url = new URL(this.src, document.baseURI);
        let name = url.pathname.split('.').shift();
        let sound = new Audio(url);
        sound.preload = 'auto';
        sound.addEventListener('play', () => { this.play(); });
        sound.addEventListener('pause', () => { this.pause(); });
        sound.addEventListener('ended', () => { this.ended(); });
        this.$root.registerLightSwitch(this);
        return {
            name: name,
            sound: sound,
            playInt: null
        }
    },
    methods: {
        click() {
            if (this.sound.paused) this.sound.play();
            else this.sound.pause();
        },
        play() {
            this.playing = true;
            this.$refs.button.classList.add('pause');
            this.playInt = setInterval(() => { this.time(); }, 50);
        },
        pause() {
            this.playing = false;
            this.$refs.button.classList.remove('pause');
            clearInterval(this.playInt);
        },
        ended() {
            this.$refs.progress.style.width = '0%';
        },
        seek(evt) {
            let rect = evt.currentTarget.getBoundingClientRect();
            let newpos = (evt.clientX - rect.left) / rect.width * this.sound.duration;
            this.sound.currentTime = newpos;
            if (this.sound.paused) this.sound.play();
        },
        time() {
            let progress = Math.round(this.sound.currentTime / this.sound.duration * 10000) / 100;
            this.$refs.progress.style.width = progress + '%';
        },
        lightSwitchOff() {
            this.$refs.waveform.style.backgroundImage = 'url('+this.name + '-dark.png)';
        },
        lightSwitchOn() {
            this.$refs.waveform.style.backgroundImage = 'url('+this.name + '-light.png)';
        }
    },
    template:
        `<div class="tune">` +
            `<div class="tune__button" ref="button" @click="this.click()"></div>` +
            `<div class="tune__waveform" ref="waveform" :style="'background-image: url(\\''+this.name+'-'+this.$root.theme+'.png\\')'" @click="this.seek">` +
                `<div class="tune__progress" ref="progress"></div>` +
            `</div>` +
        `</div>`
});


/******************************************************
 *                  Composante Quote                  *
 ******************************************************/
app.component('quote', {
    props: ['author', 'title', 'photo'],
    template:
        `<div class="quote">` +
            `<blockquote><slot/></blockquote>` +
            `<div class="quote__author">` +
                `<div class="quote__who">` +
                    `<div class="quote__name">— {{ author }}</div>` +
                    `<div class="quote__title">{{ title }}</div>` +
                `</div>` +
                `<div class="quote__photo">` +
                    `<img :src="this.photo">` +
                `</div>` +
            `</div>` +
        `</div>`
});


/******************************************************
 *                   Composante Wiki                  *
 ******************************************************/
app.component('wiki', {
    data() {
        let url = new URL(document.location);
        return {
            list: '',
            active: null,
            pages: new Array(),
            hash: cyrb53(url.host + url.pathname),
        }
    },
    created() {
        this.$nextTick(() => {
            if (this.pages.length == 0) return;
            setTimeout(() => {
                let activePage = localStorage.getItem('wiki-' + this.hash + '-active');
                if (activePage == null) this.setActivePage(this.pages[0].id);
                else this.setActivePage(activePage);
            }, 1);
            document.querySelectorAll('#wiki__pages a').forEach((elm) => {
                elm.rel = "noopener noreferrer";
                elm.target = '_blank';
            });
        });
    },
    methods: {
        registerPage(id, name) {
            this.pages.push({ id: id, name: name });
        },
        setActivePage(id, evt=null) {
            if (evt) evt.preventDefault();
            if (this.active != null) {
                document.getElementById('wiki-list__' + this.active).classList.remove('active');
                document.getElementById('wiki-page__' + this.active).classList.remove('active');
            }
            document.getElementById('wiki-list__' + id).classList.add('active');
            document.getElementById('wiki-page__' + id).classList.add('active');
            localStorage.setItem('wiki-' + this.hash + '-active', id);
            this.active = id;
            this.$refs.burger.classList.remove('show');
            this.$refs.list.classList.remove('show');
            window.scrollTo(0, 0);
        },
        toggleBurger() {
            if (this.$refs.burger.classList.contains('show')) {
                this.$refs.burger.classList.remove('show');
                this.$refs.list.classList.remove('show');
            } else {
                this.$refs.burger.classList.add('show');
                this.$refs.list.classList.add('show');
            }
        }
    },
    template:
        `<div id="wiki">` +
            `<div id="wiki__burger" ref="burger" @click="toggleBurger()"></div>` +
            `<div id="wiki__list" ref="list">` +
                `<ul>` +
                    `<li v-for="el in this.pages"><a :id="'wiki-list__' + el.id" @click="setActivePage(el.id, $event)" href="#">{{ el.name }}</a><span>&nbsp;&#x1f4da;</span></li>` +
                `</ul>` +
            `</div>` +
            `<div id="wiki__pages">` +
                `<slot/>` +
            `</div>` +
        `</div>`
});


app.component('wiki-page', {
    props: ['name', 'date'],
    data() {
        let url = new URL(document.location);
        let slug = lowslug(this.name);
        let d = new Date();
        let today = d.getFullYear() + '-' + pad(d.getMonth() + 1, 2) + '-' + pad(d.getDate(), 2);
        if ((this.date == undefined || today >= this.date) || url.host != 'tim-montmorency.com')
            this.$parent.registerPage(slug, (this.date != undefined && today < this.date ? '::' : '') + this.name);
        return {
            'slug': slug
        }
    },
    template:
        `<div :id="'wiki-page__' + this.slug" class="wiki__page">` +
            `<h1>{{ name }}</h1><br>` +
            `<slot/>` +
        `</div>`
});


/******************************************************
 *           Composante Correction / Barème           *
 ******************************************************/
app.component('correction', {
    props: ['scale', 'value'],
    data() {
        let scales = this.scale.split(',').map((val) => { return val.trim(); });
        let modal = new ModalCorrection();
        return {
            modal: modal,
            scales: scales,
            criterias: [],
            score: 0,
            score_txt: ''
        }
    },
    created() {
        this.$nextTick(() => {
            this.updateScore();
        });
    },
    methods: {
        registerCriteria(criteria) {
            this.criterias.push(criteria);
        },
        getId() {
            let url = new URL(location.href, document.baseURI);
            let data = url.pathname;
            data += JSON.stringify(this.scales);
            this.criterias.forEach((v,k) => { data += v.getLabel(); });
            return cyrb53(data);
        },
        updateScore() {
            let score = 0, total = 0;
            this.criterias.forEach((criteria) => {
                total += parseFloat(criteria.value);
                score += parseFloat(criteria.getValue());
            });
            let idx = score / total;
            this.score = +(idx * this.value).toFixed(2);
            this.score_txt = +(idx * 100).toFixed(2) + '% (' + this.score + '/' + this.value + ')';
        },
        clear() {
            this.criterias.forEach((criteria) => { criteria.clear(); });
            this.$refs.comment.classList.remove('show');
            this.updateScore();
        },
        copy() {
            navigator.clipboard.writeText(this.score);
        },
        open() {
            openJsonFile((data) => {
                this.clear();
                if(data.id == this.getId()) {
                    data.criterias.forEach((v, i) => { this.criterias[i].setValue(v.idx); });
                    this.$refs.commentContent.innerText = data.comment;
                    this.$refs.comment.classList.add('show');
                    this.updateScore();
                } else {
                    MessageModal.alert("La correction fournie ne correspond pas aux baramèmes.");
                }
            });
        },
        download(evt) {
            this.modal.show((data) => {
                let obj = {
                    id: this.getId(),
                    hash: '',
                    date: now(),
                    name: data.name,
                    comment: data.comment,
                    pourcentage: 0,
                    score: 0,
                    total: 0,
                    points: 0,
                    scale: +this.value,
                    scales: [],
                    criterias: []
                };
                for(i = this.scales.length-1; i >= 0; i--) obj.scales.push(this.scales[i]);
                this.criterias.forEach((v,k) => {
                    obj.total += parseFloat(v.value);
                    obj.score += parseFloat(v.getValue());
                    obj.criterias.push({
                        name: v.$refs.name.innerText,
                        label: this.scales[this.scales.length-1-v._value],
                        value: v.getValue(),
                        scale: +v.value,
                        idx: v._value,
                    });
                });
                obj.points = +(obj.score / obj.total * this.value).toFixed(2);
                obj.pourcentage = +(obj.points / obj.scale * 100).toFixed(2);
                obj.hash = cyrb53(obj.name+obj.date+obj.pourcentage);
                downloadJsonObject(obj, lowslug(obj.name) + ".json");
                // console.log(JSON.stringify(obj, null, "\t"));
            });
        },
    },
    template:
        `<div class="correction" ref="container">` +
            `<table>` +
                `<thead>` +
                    `<tr>` +
                        `<th>Critères</th>` +
                        `<th>Barèmes</th>` +
                    `</tr>` +
                `</thead>` +
                `<tbody>` +
                    `<slot></slot>` +
                    `<tr ref="comment" class="correction__comment">` +
                        `<td>Commentaires</td>` +
                        `<td ref="commentContent"></td>` +
                    `</tr>` +
                `</tbody>` +
                `<tfoot>` +
                    `<tr>` +
                        `<td>Total</td>` +
                        `<td>` +
                            `{{ this.score_txt }}` +
                            `<button class="btn__copy" @click="this.copy();" title="Copier">` +
                                `<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" fill="currentColor">` +
                                  `<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.5 14H19a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2h-7a2 2 0 0 0-2 2v1.5M5 10h7a2 2 0 0 1 2 2v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-7c0-1.1.9-2 2-2Z"/>` +
                                `</svg>` +
                            `</button>` +
                            `<button class="btn__clear" @click="this.clear();" title="Effacer">` +
                                `<svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 1024 1024" fill="currentColor">` +
                                    `<path d="m899 870-53-306h18c14 0 26-12 26-26V346c0-14-12-26-26-26H618V138c0-14-12-26-26-26H432c-14 0-26 12-26 26v182H160c-14 0-26 12-26 26v192c0 14 12 26 26 26h18l-53 306v4c0 14 11 26 26 26h727c14-3 24-16 21-30zM204 390h272V182h72v208h272v104H204V390zm468 440V674c0-4-4-8-8-8h-48c-4 0-8 4-8 8v156H416V674c0-4-4-8-8-8h-48c-4 0-8 4-8 8v156H203l45-260h528l45 260H672z"/>` +
                                `</svg>` +
                            `</button>` +
                            `<button class="btn__open" @click="this.open();" title="Ouvrir">` +
                                `<svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 -256 1950 1950">` +
                                    `<path fill="currentColor" d="M1811 838q0-35-53-35H670q-40 0-85 22-46 21-72 52l-294 363q-18 24-18 40 0 35 53 35h1088q40 0 86-22t71-53l294-363q18-22 18-39zM670 675h768V515q0-40-28-68t-68-28H766q-40 0-68-28t-28-68v-64q0-40-28-68t-68-28H254q-40 0-68 28t-28 68v853l256-315q44-53 116-87 72-35 140-35zm1269 163q0 62-46 120l-295 363q-43 53-116 88-73 34-140 34H254q-92 0-158-66t-66-158V259q0-92 66-158t158-66h320q92 0 158 66t66 158v32h544q92 0 158 66t66 158v160h192q54 0 99 25 45 24 67 70 15 32 15 68z"/>` +
                                `</svg>` +
                            `</button>` +
                            `<button class="btn__download" @click="this.download($event);" title="Télécharger">` +
                                `<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">` +
                                    `<path d="M21 14a1 1 0 0 0-1 1v4a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-4a1 1 0 0 0-2 0v4a3 3 0 0 0 3 3h14a3 3 0 0 0 3-3v-4a1 1 0 0 0-1-1Zm-9.7 1.7a1 1 0 0 0 .3.2 1 1 0 0 0 .8 0 1 1 0 0 0 .3-.2l4-4a1 1 0 0 0-1.4-1.4L13 12.6V3a1 1 0 0 0-2 0v9.6l-2.3-2.3a1 1 0 1 0-1.4 1.4Z"/>` +
                                `</svg>` +
                            `</button>` +
                        `</td>` +
                    `</tr>` +
                `</tfoot>` +
            `</table>` +
        `</div>`
});

app.component('criteria', {
    props: ['value'],
    data() {
        return {
            _value: 0,
            _target: null
        }
    },
    created() {
        this.$parent.registerCriteria(this);
    },
    methods: {
        setValue(i) {
            if (this._target) this._target.classList.remove('checked');
            this._target =  this.$refs.scales[this.$refs.scales.length - 1 - i];
            this._target.classList.add('checked');
            this._value = i;
        },
        click(event, i) {
            if (this._target) this._target.classList.remove('checked');
            event.currentTarget.classList.add('checked');
            this._target = event.currentTarget;
            this._value = i;
            this.$parent.updateScore();
        },
        getValue() {
            return this._value / (this.$parent.scales.length - 1) * this.value;
        },
        getLabel() {
            return this.$refs.name.innerText;
        },
        clear() {
            this._value = 0;
            if (this._target) {
                this._target.classList.remove('checked');
                this._target = null;
            }
        }
    },
    template:
        `<tr class="correction__criteria">` +
            `<td ref="name"><slot/></td>` +
            `<td>` +
                `<span ref="scales" class="correction__criteria__scale" v-for="(scale, i) in this.$parent.scales" v-html="scale" @click="click($event, this.$parent.scales.length - 1 - i)"></span>` +
            `</td>` +
        `</tr>`
});

class ModalCorrection extends Modal {

    form = null;
    name = null;
    comment = null;
    cancel = null;
    clb = null;

    constructor() {
        let form = create('form', 'correction-modal');
        form.innerHTML = 
            `<table>` +
                `<thead>` +
                    `<tr>` +
                        `<th colspan="2">Téléchargement de la correction</th>` +
                    `</tr>` +
                `</thead>` +
                `<tbody>` +
                    `<tr>` +
                        `<td>Nom:</td>` +
                        `<td><input style="width: 100%;" type="text" name="name" required></td>` +
                    `</tr>` +
                    `<tr>` +
                        `<td>Commentaire:</td>` +
                        `<td><textarea name="comment"></textarea></td>` +
                    `</tr>` +
                `</tbody>` +
                `<tfoot>` +
                    `<tr>` +
                        `<td colspan="2">` +
                            `<input type="submit" name="save" value="Télécharger">` +
                            `<input type="button" name="cancel" value="Annuler">` +
                        `</td>` +
                    `</tr>` +
                `</tfoot>` +
            `</table>`;
        super(form);
        this.form = form;
        this.name = this.form.querySelector('input[name="name"]');
        this.comment = this.form.querySelector('textarea[name="comment"]');
        this.form.querySelector('input[name="cancel"]').addEventListener('click', () => { this.hide(); });
        bind(this.form, 'submit', (evt) => { evt.preventDefault(); this.save(); });
        bind(this.cont, 'mousedown', (evt) => { if(this.opened && evt.target.classList.contains('modal')) { this.hide(); } });
        bind(document, 'keydown', (evt) => { if(this.opened && (evt.key === 'Escape' && !(evt.ctrlKey || evt.altKey || evt.shiftKey))) { this.hide(); } });
    }
    show(clb=null) {
        this.clb = clb;
        this.name.value = '';
        this.comment.value = '';
        super.show();
        setTimeout(() => { this.name.focus(); }, 200);
    }
    save() {
        this.hide();
        if(this.clb) {
            this.clb({
                name: this.name.value,
                comment: this.comment.value
            });
        }
    }
}


/******************************************************
 *                  Composante Timg                   *
 ******************************************************/
app.component('timg', {
    props: ['src', 'class', 'alt'],
    data() {
        this.$root.registerLightSwitch(this);
        return { source: this.src.replace(/\$t/g, this.$root.theme) }
    },
    methods: {
        lightSwitchOff() {
            this.source = this.src.replace(/\$t/g, this.$root.theme);
        },
        lightSwitchOn() {
            this.source = this.src.replace(/\$t/g, this.$root.theme);
        }
    },
    template: `<img :src="this.source" :alt="this.alt" :class="this.class">`
});
