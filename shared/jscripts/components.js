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
        </div>`
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
        <div class="title">
            <a :id="this.id"></a>
            <h1><slot /></h1>
            <div class="chain" @click="click($event)"><svg viewBox="0 0 24 24"><path d="M17 7h-4v2h4c1.65 0 3 1.35 3 3s-1.35 3-3 3h-4v2h4c2.76 0 5-2.24 5-5s-2.24-5-5-5zm-6 8H7c-1.65 0-3-1.35-3-3s1.35-3 3-3h4V7H7c-2.76 0-5 2.24-5 5s2.24 5 5 5h4v-2zm-3-4h8v2H8z"></path></svg></div>
            <div class="linkcopied">Lien copié &#x2713;</div>
        </div>`
});



/******************************************************
 *                Composante Mediafile                *
 ******************************************************/
 app.component('mediafile', {
    props: ['src'],
    data() {
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
        <div class="mediafile">
            <div class="mediafile__icon" :style="'background-image: url(\\'' + this.icon + '\\')'">&nbsp;</div>
            <div class="mediafile__text"><slot/></div>
            <div class="mediafile__chain" @click="click($event)"><svg viewBox="0 0 24 24"><path d="M17 7h-4v2h4c1.65 0 3 1.35 3 3s-1.35 3-3 3h-4v2h4c2.76 0 5-2.24 5-5s-2.24-5-5-5zm-6 8H7c-1.65 0-3-1.35-3-3s1.35-3 3-3h4V7H7c-2.76 0-5 2.24-5 5s2.24 5 5 5h4v-2zm-3-4h8v2H8z"></path></svg></div>
            <div class="mediafile__linkcopied">Lien copié &#x2713;</div>
        </div>
        <div class="mediafile__link"><input readonly type="text" class="mediafile__link-text" :value="this.link"></div>`
});



/******************************************************
 *                 Composante Codepen                 *
 ******************************************************/
app.component('codepen', {
    props: ['id', 'title', 'tab'],
    data() {
        var defaulttab = 'html,result';
        console.log(typeof this.tab);
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
    props: ['id'],
    data() {
        let exroot = 'exercices/' + this.id + '/';
        let exdetails = syncjson(exroot + 'details.json');
        let url = typeof exdetails.url == 'undefined' ? exroot : exdetails.url;
        return {
            name: exdetails.name,
            description: exdetails.description,
            url: url
        }
    },
    template: `
        <a class="exercice" target="_blank" :href="this.url">
            <div class="exercice-container">
                <div class="exercice-thumb" :style="'background-image: url(\\'exercices/' + this.id + '/images/thumb.jpg\\')'"></div>
                <div class="exercice-abstract">
                    <em>EXERCICE</em><br>
                    <span class="exercice-title">{{ name }}</span><br>
                    <span class="exercice-description">{{ description }}</span>
                </div>
            </div>
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
        } catch(e) { site = ''; }
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
        <div class="spacer">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="currentColor">
                <rect width="256" height="128" fill="none"/>
                <circle cx="128" cy="128" r="6"/>
                <circle cx="64" cy="128" r="6"/>
                <circle cx="192" cy="128" r="6"/>
            </svg>
        </div>`
});


/******************************************************
 *                  Composante Clip                   *
 ******************************************************/
app.component('clip', {
    props: ['src'],
    data() {
        let name = this.src.split('.').shift();
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
 *                     Mount App                      *
 ******************************************************/
app.config.compilerOptions.whitespace = 'preserve';
app.mount('body');
hljs.highlightAll();