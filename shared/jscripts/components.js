/******************************************************
 *                     Main App                       *
 ******************************************************/
const app = Vue.createApp({
    data() {
        let darkmode = localStorage.getItem('darkmode') === 'true';
        return {
            sounds: false,
            codepens: [],
            tableOfContents: [],
            lightswitchon: null,
            lightswitchoff: null,
            darkmode: darkmode,
            theme: null
        }
    },
    mounted() {
        this.theme = this.darkmode ? 'dark' : 'light';
        document.body.className = this.darkmode ? 'dark' : 'light';
        this.$refs.lightswitch.className = this.darkmode ? 'lightswitch--off' : 'lightswitch--on';
        if(this.sounds) {
            this.lightswitchoff = new Howl({ src: [shared + 'sounds/lightswitch-off.webm', shared + 'sounds/lightswitch-off.mp3'], preload: true });
            this.lightswitchon = new Howl({src: [shared + 'sounds/lightswitch-on.webm', shared + 'sounds/lightswitch-on.mp3'], preload: true });
        }
    },
    methods: {
        goToTop(){
            document.location.href = "#top";
        },
        lightswitch(){
            if(this.$refs.lightswitch.className == 'lightswitch--on') {
                this.$refs.lightswitch.className = 'lightswitch--off';
                localStorage.setItem('darkmode', 'true');
                document.body.className = 'dark';
                this.theme = 'dark';
                this.codepens.forEach((cp) => { cp.lightSwitchOff(); });
                if(this.sounds) {
                    this.lightswitchon.stop();
                    this.lightswitchoff.play();
                }
            } else {
                this.$refs.lightswitch.className = 'lightswitch--on';
                localStorage.setItem('darkmode', 'false');
                document.body.className = 'light';
                this.theme = 'light';
                this.codepens.forEach((cp) => { cp.lightSwitchOn(); });
                if(this.sounds) {
                    this.lightswitchoff.stop();
                    this.lightswitchon.play();
                }
            }
        },
        addToTableOfContents(id, name) {
            this.tableOfContents.push({
                id: id,
                name: name,
            });
        },
        addToCodePens(comp) {
            this.codepens.push(comp);
        },
    }
});


/******************************************************
 *           Composante Table des matières            *
 ******************************************************/
app.component('tabledesmatieres', {
    data() { return { list: '' } },
    created() {
        this.$nextTick(() => {
            let lis = '';
            this.$root.tableOfContents.forEach(el => { lis += '<li><a href="#' + el.id + '">' + el.name + '</a></li>'; });
            this.list = lis;
        });
    },
    template: `
        <div id="contents_table" v-if="this.list != ''">
            <div class="contents_table__table">
                <a href="#top" class="no-underline"><strong>Table des matières</strong></a>
                <ul v-html="list"></ul>
            </div>
        </div>
        `
});


/******************************************************
 *               Composante Gros Titre                *
 ******************************************************/
app.component('grostitre', {
    data() {
        let slug = lowslug(this.$slots.default()[0].children);
        return { id: slug }
    },
    created() {
        this.$root.addToTableOfContents(this.id, this.$slots.default()[0].children);
    },
    methods: {
        click(event) {
            var link = window.location.origin + window.location.pathname + '#' + this.id;
            navigator.clipboard.writeText(link);
            let target = event.currentTarget;
            target.classList.add('copied');
            setTimeout(() => {
                target.classList.remove('copied');
            }, 1000);
        },
    },
    template: `
        <div class="grostitre">
            <a :id="this.id"></a>
            <h1><slot /></h1>
            <div class="grostitre__chain" @click="click($event)"><svg fill="currentColor" viewBox="0 0 24 24"><path d="M17 7h-4v2h4c1.65 0 3 1.35 3 3s-1.35 3-3 3h-4v2h4c2.76 0 5-2.24 5-5s-2.24-5-5-5zm-6 8H7c-1.65 0-3-1.35-3-3s1.35-3 3-3h4V7H7c-2.76 0-5 2.24-5 5s2.24 5 5 5h4v-2zm-3-4h8v2H8z"></path></svg></div>
            <div class="grostitre__linkcopied">Lien copié &#x2713;</div>
        </div>`
});


/******************************************************
 *                  Composante Info                   *
 ******************************************************/
 app.component('info', {
    template: `
        <div class="info">
            <div class="info__bubble"></div>
            <slot/>
        </div>`
});



/******************************************************
 *                 Composante Warning                 *
 ******************************************************/
 app.component('warning', {
    template: `
        <div class="warning">
            <div class="warning__bubble"></div>
            <slot/>
        </div>`
});


/******************************************************
 *                  Composante Alert                  *
 ******************************************************/
 app.component('alert', {
    template: `
        <div class="alert">
            <div class="alert__bubble"></div>
            <slot/>
        </div>`
});


/******************************************************
 *                Composante Mediafile                *
 ******************************************************/
 app.component('mediafile', {
    props: ['src', 'spacer', 'addr'],
    data() {
        let space = this.spacer == 'true' ? ' spacerr' : '';
        try { var url = new URL(this.src); }
        catch(e){ var url = new URL(this.src, document.baseURI); }
        switch(url.href.split('.').pop().toLocaleLowerCase()) {
            case 'svg': var icon = 'type-svg.png'; break;
            case 'jpg': var icon = 'type-jpg.png'; break;
            case 'png': var icon = 'type-png.png'; break;
            case 'zip': var icon = 'type-zip.png'; break;
            default:    var icon = 'type-file.png';
        }
        
        let addr = true;
        if(typeof this.addr != 'undefined' && this.addr == 'false') addr = false;

        return {
            isaddr: addr,
            space: space,
            link: url.href,
            icon: shared + 'images/' + icon
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
        focus(event){
            event.currentTarget.select();
        }
    },
    template: `
        <div :class="'mediafile' + this.space">
            <div class="mediafile__icon" :style="'background-image: url(\\'' + this.icon + '\\')'">&nbsp;</div>
            <div class="mediafile__text"><slot/></div>
            <div class="mediafile__chain" @click="click($event)"><svg fill="currentColor" viewBox="0 0 24 24"><path d="M17 7h-4v2h4c1.65 0 3 1.35 3 3s-1.35 3-3 3h-4v2h4c2.76 0 5-2.24 5-5s-2.24-5-5-5zm-6 8H7c-1.65 0-3-1.35-3-3s1.35-3 3-3h4V7H7c-2.76 0-5 2.24-5 5s2.24 5 5 5h4v-2zm-3-4h8v2H8z"></path></svg></div>
            <div class="mediafile__linkcopied">Lien copié &#x2713;</div>
        </div>
        <div v-if="this.isaddr" :class="'mediafile__link' + this.space"><input readonly type="text" class="mediafile__link-text" :value="this.link" @focus="focus($event)"></div>
        <div class="mediafile__spacer"></div>`

});



/******************************************************
 *                 Composante Codepen                 *
 ******************************************************/
app.component('codepen', {
    props: ['id', 'title', 'tab', 'height'],
    data() {
        var defaulttab = 'html,result';
        var height = 400;
        if(typeof this.tab != 'undefined') defaulttab = this.tab;
        if(typeof this.height != 'undefined') height = this.height;
        
        defaulttab = encodeURIComponent(defaulttab);
        let remark = '';
        if(typeof this.$slots.default != 'undefined') {
            remark = this.$slots.default()[0].children;
        }
        this.$root.addToCodePens(this);
        let theme = this.$root.darkmode ? '43847' : '39618';
        return {
            user: 'tim-momo',
            theme: theme,
            bheight: height,
            defaulttab: defaulttab,
            remark: remark
        }
    },
    methods: {
        lightSwitchOn() {
            this.theme = '39618';
        },
        lightSwitchOff() {
            this.theme = '43847';
        },
    },
    template: `
    <div class="codepen-container">
        <iframe
            :src="'https://codepen.io/' + user + '/embed/' + id + '?default-tab=' + defaulttab + '&theme-id=' + theme"
            class="codepen"
            scrolling="no"
            frameborder="no"
            loading="lazy"
            allowtransparency="true"
            allowfullscreen="true"
            :style="'height: ' + bheight + 'px;'"
         ></iframe><span class="codepen-remark" v-if="this.remark != ''">{{ remark }}</span>
    </div>`
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
    template: `
        <a class="exercice" target="_blank" :href="this.url">
            <div class="exercice-container">
                <div class="exercice-thumb" :style="'background-image: url(\\'' + this.thumb + '\\')'"></div>
                <div class="exercice-abstract">
                    <em class="exercice-label">EXERCICE</em>
                    <span class="exercice-title">{{ name }}</span>
                    <span class="exercice-description">{{ description }}</span>
                </div>
            </div>
        </a>`
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
    template: `
        <a class="tool" target="_blank" :href="this.url">
            <div class="tool-container">
                <div class="tool-abstract">
                    <em class="tool-label">OUTIL</em>
                    <span class="tool-title">{{ name }}</span>
                    <span class="tool-description">{{ description }}</span>
                </div>
                <div class="tool-thumb" :style="'background-image: url(\\'' + this.thumb + '\\')'"></div>
            </div>
        </a>`
});


/******************************************************
 *                Composante Knowmore                 *
 ******************************************************/
 app.component('knowmore', {
    props: ['href'],
    template: `
        <a class="knowmore" target="_blank" :href="this.href">
            <div class="knowmore__title">&#128214; EN SAVOIR PLUS</div>
            <div class="knowmore__abstract"><slot/></div>
        </a>`
});


/******************************************************
 *                Composante Doclink                  *
 ******************************************************/
app.component('doclink', {
    props: ['href', 'spacer'],
    data() {
        let site = '';
        try {
            let url = new URL(this.href);
            switch(url.hostname) {
                case 'www.w3schools.com': site = 'w3schools'; break;
                case 'developer.mozilla.org': site = 'mozilla'; break;
                case 'codepen.io': site = 'codepen'; break;
                case 'css-tricks.com': site = 'csstricks'; break;
                case 'getbootstrap.com': site = 'bootstrap'; break;
            }
        } catch(e) {
            if(this.href.split('.').pop().toLocaleLowerCase() == 'zip') site = 'zipfile';
            else site = '';
        }
        if(this.spacer == 'true')  site += ' spacer';
        return { class: site }
    },
    template: `
        <a :class="'doclink ' + this.class" target="_blank" :href="this.href">
            <div class="doclink-container">
                <div class="doclink-icon"></div>
                <span class="doclink-title"><slot /></span>
            </div>
        </a>`
});


/******************************************************
 *                  Composante Dots                   *
 ******************************************************/
app.component('dots', {
    template: `
        <div class="dots">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="currentColor">
                <rect width="256" height="128" fill="none"/>
                <circle cx="128" cy="128" r="6"/>
                <circle cx="64" cy="128" r="6"/>
                <circle cx="192" cy="128" r="6"/>
            </svg>
        </div>`
});


/******************************************************
 *                  Composante Color                  *
 ******************************************************/
 app.component('color', {
    props: ['spacer'],
    data() {
        let color = this.$slots.default()[0].children;
        let invert = invertColor(color);
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
    template: `
        <span :class="'color' + this.space + this.clicked" :style="'color: ' + this.invert + '; background-color: ' + this.color + ';'" @click="click()">
            {{ text }}
        </span>`
});


/******************************************************
 *                  Composante Clip                   *
 ******************************************************/
app.component('clip', {
    props: ['src'],
    data() {
        var url = new URL(this.src, document.baseURI);
        let name = url.pathname.split('.').shift();
        let id = name.split('/').pop();
        let details = syncjson(name + '.json');
        let track = undefined;
        details.media.track.forEach(elm => { if(elm['@type'] == 'Video') { track = elm; }});
        if(track == undefined) return {};
        else return {
            id: id,
            name: name,
            width: track.Width,
            height: track.Height
        }
    },
    template: `
        <div class="video-container">
            <video
                :id="this.id"
                :width="this.width"
                :height="this.height"
                :poster="this.name + '.jpg'"
                data-setup='{"fluid": true}'
                class="video-js"
                controls
                preload="auto"
            >
                <source :src="this.src" type="video/mp4" />
            </video>
        </div>`
});


/******************************************************
 *                Composante Highlight                *
 ******************************************************/
 app.component('highlight', {
    props: ['lang'],
    template: `<pre class="highlight"><code :class="'language-' + this.lang"><slot /></code></pre>`
});


/******************************************************
 *                  Composante Swiper                 *
 ******************************************************/
 app.component('swiper', {
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
        modalimage(){
            this.modal.style.backgroundImage = "url('" + this.images[this.swiper.activeIndex] + "')";
        },
        fullscreen(){
            this.modalimage();
            this.modal.classList.add("swiper-modal--show");
            this.show = true;
        },
        close(){
            this.modal.classList.remove("swiper-modal--show");
            this.show = false;
        },
        hotkeys(event){
            if(this.show) {
                if (event.key === 'Escape' && !(event.ctrlKey || event.altKey || event.shiftKey)) {
                    this.close();
                } else if(event.key === 'ArrowRight') {
                    this.swiper.slideNext();
                    this.modalimage();
                } else if(event.key === 'ArrowLeft') {
                    this.swiper.slidePrev();
                    this.modalimage();
                }
            }
        }
    },
    template: `
        <div class="swiper-container">
            <div class="swiper-modal" :id="'swiper-modal-' + this.hash" @click="close()"></div>
            <div :id="'swiper-' + this.hash" style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper swiper-main">
                <div class="swiper-wrapper" v-html="slides"></div>
                <div :id="'swiper-button-next-' + this.hash" class="swiper-button-next"></div>
                <div :id="'swiper-button-prev-' + this.hash" class="swiper-button-prev"></div>
                <div :id="'swiper-pagination-' + this.hash" class="swiper-pagination"></div>
                <div title="Navigue avec les flèches de ton clavier en plein écran" class="swiper-fullscreen" @click="fullscreen()"></div>
            </div>
            <div :id="'swiper-thumbs-' + this.hash" class="swiper swiper-thumbs">
                <div class="swiper-wrapper" v-html="thslides"></div>
            </div>
        </div>`
});


/******************************************************
 *                Composante Checklist                *
 ******************************************************/
 app.component('checklist', {
    data(){
        var text = '';
        this.$slots.default().forEach(elm => {
            if(typeof elm.type == "string"){
                var props = '';
                for(i in elm.props) props += ' ' + i + '="' + elm.props[i] + '"';
                text += '<' + elm.type + props + '>' + elm.children + '</' + elm.type + '>';
            }else {
                text += elm.children;
            }
        });
        var lines = [];
        text.trim().split('\n').map(v => { lines.push(v.trim()); });
        var hash = this.getHash(lines.join());
        let cookieValue = localStorage.getItem('checklist-' + hash);
        if(typeof cookieValue == 'string') {
            var checks = cookieValue.split(',').map((val) => { return parseInt(val); });
            if(checks.length != lines.length){
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
            progressbar: null,
            progress: 0
        }
    },
    created() {
        this.$nextTick(() => {
            this.progressbar = document.getElementById(this.hash + '-progressbar');
            this.updateProgressBar();
        });
    },
    methods: {
        getHash(str) {
            return cyrb53(window.location.pathname + str);
        },
        click(event,i) {
            let target = event.currentTarget;
            if(this.checks[i]) {
                this.checks[i] = 0;
                target.classList.remove('checked');
            } else {
                this.checks[i] = 1;
                target.classList.add('checked');
            }
            this.updateProgressBar();
            localStorage.setItem('checklist-' + this.hash, this.checks.join(','));
        },
        updateProgressBar() {
            let total = 0;
            this.checks.forEach(val => { total += val; });
            this.progress = (total / this.checks.length * 100).toFixed(0);
        }
    },
    template: `
        <div class="checklist">
            <div class="pourcentage">{{ progress }}%</div>
            <div :id="this.hash + '-progressbar'" class="progressbar" :style="'background-size: ' + this.progress + '% 100%;'"></div>
            <ol>
                <li v-for="(line, i) in this.list" :class="this.checks[i]?'checked':''" @click="click($event,i)" v-html="line"></li>
            </ol>
        </div>`
});


/******************************************************
 *              Composante Audioplayer                *
 ******************************************************/
 app.component('audioplayer', {
    props: ['src'],
    data() {
        var url = new URL(this.src, document.baseURI);
        let name = url.pathname.split('.').shift();
        let id = name.split('/').pop();
        let details = syncjson(name + '.json');
        let track = undefined;
        details.media.track.forEach(elm => { if(elm['@type'] == 'Audio') { track = elm; }});
        if(track == undefined) return {};
        var sound = new Howl({
            src: [url.pathname, name + '.webm'],
            onend: this.onend,
            preload: true
        });
        return {
            id: id,
            name: name,
            duration: track.Duration,
            sound: sound,
            playing: false,
            playInt: null,
            progress: 0
        }
    },
    methods: {
        onend() {
            this.playing = false;
            clearInterval(this.playInt);
            this.progress = 0;
        },
        click() {
            if(this.playing) {
                this.sound.pause();
                this.playing = false;
                clearInterval(this.playInt);
            } else {
                this.sound.play();
                this.playing = true;
                this.playInt = setInterval(this.pos, 50);
            }
        },
        pos() {
            let prog = (this.sound.seek() / this.duration * 100).toFixed(2);
            if(prog !== this.progress) this.progress = prog;
        },
        seek(e){
            let newpos = ((e.clientX - e.currentTarget.offsetLeft) / e.currentTarget.offsetWidth) * this.duration;
            this.sound.seek(newpos);
            if(!this.playing) {
                this.sound.play();
                this.playing = true;
                this.playInt = setInterval(this.pos, 50);
            }
        }
    },
    template: `
    <div class="audioplayer-container">
        <div class="audioplayer">
            <div :class="'audioplayer__button' + (this.playing ? ' pause' : '')" @click="click()"></div>
            <div class="audioplayer__waveform" :style="'background-image: url(\\'' + this.name + '.png\\')'" @click="seek($event)">
                <div class="audioplayer__progress" :style="'width: ' + this.progress + '%;'"></div>
            </div>
        </div>
    </div>`
});



/******************************************************
 *                     Mount App                      *
 ******************************************************/
app.config.compilerOptions.whitespace = 'preserve';
app.mount('body');
hljs.highlightAll();
