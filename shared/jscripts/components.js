/******************************************************
 *                     Main App                       *
 ******************************************************/
const app = Vue.createApp({
    data() { return { tableOfContents: [] } },
    methods: {
        addToTableOfContents(id, name) {
            this.tableOfContents.push({
                id: id,
                name: name,
            });
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
        <div id="contents_table">
            <div class="contents_table__table">
                <a href="#top"><strong>Table des matières</strong></a>
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
            <div class="grostitre__chain" @click="click($event)"><svg viewBox="0 0 24 24"><path d="M17 7h-4v2h4c1.65 0 3 1.35 3 3s-1.35 3-3 3h-4v2h4c2.76 0 5-2.24 5-5s-2.24-5-5-5zm-6 8H7c-1.65 0-3-1.35-3-3s1.35-3 3-3h4V7H7c-2.76 0-5 2.24-5 5s2.24 5 5 5h4v-2zm-3-4h8v2H8z"></path></svg></div>
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
    props: ['src', 'spacer'],
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
        return {
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
    },
    template: `
        <div :class="'mediafile' + this.space">
            <div class="mediafile__icon" :style="'background-image: url(\\'' + this.icon + '\\')'">&nbsp;</div>
            <div class="mediafile__text"><slot/></div>
            <div class="mediafile__chain" @click="click($event)"><svg viewBox="0 0 24 24"><path d="M17 7h-4v2h4c1.65 0 3 1.35 3 3s-1.35 3-3 3h-4v2h4c2.76 0 5-2.24 5-5s-2.24-5-5-5zm-6 8H7c-1.65 0-3-1.35-3-3s1.35-3 3-3h4V7H7c-2.76 0-5 2.24-5 5s2.24 5 5 5h4v-2zm-3-4h8v2H8z"></path></svg></div>
            <div class="mediafile__linkcopied">Lien copié &#x2713;</div>
        </div>
        <div :class="'mediafile__link' + this.space"><input readonly type="text" class="mediafile__link-text" :value="this.link"></div>`
});



/******************************************************
 *                 Composante Codepen                 *
 ******************************************************/
app.component('codepen', {
    props: ['id', 'title', 'tab'],
    data() {
        var defaulttab = 'html,result';
        if(typeof this.tab != 'undefined') defaulttab = this.tab;
        defaulttab = encodeURIComponent(defaulttab);
        let remark = '';
        if(typeof this.$slots.default != 'undefined') {
            remark = this.$slots.default()[0].children;
        }
        return {
            user: 'ZmotriN',
            theme: '39618',
            defaulttab: defaulttab,
            remark: remark
        }
    },
    template: `
        <iframe
            :src="'https://codepen.io/' + user + '/embed/' + id + '?default-tab=' + defaulttab + '&theme-id=' + theme"    
            class="codepen"
            scrolling="no"
            frameborder="no"
            loading="lazy"
            allowtransparency="true"
            allowfullscreen="true"
        ></iframe><span class="codepen-remark" v-if="this.remark != ''">{{ remark }}</span>`
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
                    <em>EXERCICE</em><br>
                    <span class="exercice-title">{{ name }}</span><br>
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
                    <em>OUTIL</em><br>
                    <span class="tool-title">{{ name }}</span><br>
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
        </video>`
});


/******************************************************
 *                Composante Highlight                *
 ******************************************************/
 app.component('highlight', {
    props: ['lang'],
    template: `<pre class="highlight"><code :class="'language-' + this.lang"><slot /></code></pre>`
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
            progressbar: null
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
            let progress = (total / this.checks.length * 100).toFixed(0);
            this.progressbar.style.backgroundSize = progress + '% 100%';
        }
    },
    template: `
        <div class="checklist">
            <div :id="this.hash + '-progressbar'" class="progressbar"></div>
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
            src: [name + '.mp3', name + '.webm'],
            onend: this.onend,
            preload: true
        });

        return {
            id: id,
            name: name,
            duration: track.Duration,
            sound: sound,
            playing: false,
            progress: 0,
            playInt: null
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
        <div class="audioplayer">
            <div :class="'audioplayer__button' + (this.playing ? ' pause' : '')" @click="click()"></div>
            <div class="audioplayer__waveform" :style="'background-image: url(\\'' + this.name + '.png\\')'" @click="seek($event)">
                <div class="audioplayer__progress" :style="'width: ' + this.progress + '%;'"></div>
            </div>
        </div>`
});



/******************************************************
 *                     Mount App                      *
 ******************************************************/
app.config.compilerOptions.whitespace = 'preserve';
app.mount('body');
hljs.highlightAll();