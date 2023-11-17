<?php 
/**
 * @type     article
 * @title    Éléments de formulaire
 * @icon     images/ico-vue.png
 * @abstract v-model: une relation entre une donnée et les input, select etc.
 * @index 85
 */
?>

<p><code>v-model</code> permet de créer une relation bidirectionnelle entre une donnée et un élément de formulaire <em>(input, select, textarea, etc.)</em>.</p>

<warning><code>v-model</code> ignore la valeur initiale attribuée à un élément de formulaire. La synchronisation entre l’élément et la donnée ne débute que lors de la première modification de&nbsp;l’élément.</warning>

<p><code>v-model</code> se base sur différentes propriétés afin d’attribuer une valeur à une donnée.</p>

<ul>
    <li><strong>Champ texte</strong>: l’attribut <code>value</code> du champs</li>
    <li><strong>Boîtes à cocher et boutons radio:</strong> l’attribut <code>checked</code></li>
    <li><strong>Menu déroulant: </strong>l’attribut <code>value</code> de l’option sélectionnée</li>
</ul>

<dots></dots>
<grostitre>Champ texte</grostitre>
<p>Les champs textes synchronisent la valeur contenue dans l'attribut <code>value</code> avec la donnée qui lui est associée dans l'app.</p>
<p>Par exemple, la donnée <code>msg</code> change de valeur en fonction du changement de value dans le champ suivant.
</p>

<highlight lang='html'>&lt;input type=&quot;text&quot; v-model=&quot;msg&quot; /&gt;
&lt;h1&gt;{ { msg } }&lt;/h1&gt;</highlight>
<small style="color: #999; font-size: 70%;">Ne pas mettre un espace entre les deux accolades ouvrantes ni entre les deux accolades fermantes.</small>

<br><br>
<figure>
    <p class="codepen" data-height="400" data-theme-id="44431" data-default-tab="html,result" data-slug-hash="vYbpNBN" data-user="tim-momo" style="height: 400px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;"><span>See the Pen <a href="https://codepen.io/tim-momo/pen/vYbpNBN">Untitled</a> by TIM Montmorency (<a href="https://codepen.io/tim-momo">@tim-momo</a>) on <a href="https://codepen.io">CodePen</a>.</span></p>
    <script async src="https://cpwebassets.codepen.io/assets/embed/ei.js"></script>
    <figcaption class="caption caption--codepen">
        Modifier la valeur dans le champ texte mettra à jour le titre sans besoin d’aucune fonction JavaScript.
    </figcaption>
</figure>



<br>
<doclink href='https://vuejs.org/guide/essentials/forms.html#text'>Champs texte</doclink>







<dots></dots>
<grostitre>Boite à cocher</grostitre>
<p>Les boites à cocher synchronisent l’attribut <code>checked</code> avec la donnée qui leur est associée.</p>

<highlight lang='html'>&lt;input type=&quot;checkbox&quot; v-model=&quot;msg&quot; /&gt;
&lt;h1&gt;Afficher le meme: { { msg } }&lt;/h1&gt;
</highlight>

<small style="color: #999; font-size: 70%;">Ne pas mettre un espace entre les deux accolades ouvrantes ni entre les deux accolades fermantes.</small>
    <br><br>

<p class="codepen" data-height="400" data-theme-id="44431" data-default-tab="html,result" data-slug-hash="GRzyOaO" data-user="tim-momo" style="height: 400px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
  <span>See the Pen <a href="https://codepen.io/tim-momo/pen/GRzyOaO">
  Vue | v-model champ texte</a> by TIM Montmorency (<a href="https://codepen.io/tim-momo">@tim-momo</a>)
  on <a href="https://codepen.io">CodePen</a>.</span>
</p>

<p>Leur usage est tout indiqué entre autres pour déterminer si un élément devrait être affiché ou masqué à l'aide d'un
    <code>v-if</code>.</p>
<div class="tags-list">
    <div class="tags-list__wrapper">
        <ul class="tags-list__list">
            <li class="tags-list__item">
                <a href="https://v3.vuejs.org/guide/forms.html#checkbox" target="_blank" rel="noopener noreferrer"
                    class="tags-list__link tags-list__link--auto">Boite à cocher</a>
            </li>

        </ul>
    </div>
</div>

<h2 class="heading heading--h2" id="Boutons radio">Boutons radio<a href="#Boutons radio" aria-hidden="true"
        class="heading__anchor" data-module="CopyToClipboard"
        data-text="https://smnarnold.com/cours/vue/elements-de-formulaire#Boutons radio" data-snackbar="Lien copié.">
        <span class="heading__anchor__wrapper">
            <svg viewBox="0 0 24 24">
                <path
                    d="M17 7h-4v2h4c1.65 0 3 1.35 3 3s-1.35 3-3 3h-4v2h4c2.76 0 5-2.24 5-5s-2.24-5-5-5zm-6 8H7c-1.65 0-3-1.35-3-3s1.35-3 3-3h4V7H7c-2.76 0-5 2.24-5 5s2.24 5 5 5h4v-2zm-3-4h8v2H8z">
                </path>
            </svg>
        </span>
    </a>
</h2>

<p>Les boutons radio synchronisent l’attribut <code>value</code> du bouton qui est coché avec la donnée qui leur est
    associée.</p>
<pre><code class="hljs xml"><span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"radio"</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"option"</span> <span class="hljs-attr">v-model</span>=<span class="hljs-string">"msg"</span> <span class="hljs-attr">value</span>=<span class="hljs-string">"Texte 1"</span> /&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">type</span>=<span class="hljs-string">"radio"</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"option"</span> <span class="hljs-attr">v-model</span>=<span class="hljs-string">"msg"</span> <span class="hljs-attr">value</span>=<span class="hljs-string">"Texte 2"</span> /&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">h1</span>&gt;</span>{{ msg }}<span class="hljs-tag">&lt;/<span class="hljs-name">h1</span>&gt;</span></code></pre>
<div class="codepen" data-module="CodePen">
    <div class="codepen__wrapper">
        <span class="codepen__forced-height" style="padding-bottom: calc(34% + 36px);"></span>

        <div class="cp_embed_wrapper"><iframe allowfullscreen="true" allowpaymentrequest="true" allowtransparency="true"
                class="cp_embed_iframe " frameborder="0" height="100%" width="100%" name="cp_embed_3" scrolling="no"
                src="https://codepen.io/smnarnold/embed/e4cc73edf09054110b09299789c294d3?height=100%25&amp;theme-id=39618&amp;user=smnarnold&amp;slug-hash=e4cc73edf09054110b09299789c294d3&amp;default-tab=html%2Cresult&amp;name=cp_embed_3"
                style="width: 100%; overflow:hidden; display:block;" title="CodePen Embed" loading="lazy"
                id="cp_embed_e4cc73edf09054110b09299789c294d3"></iframe></div>
    </div>


</div>
<div class="tags-list">
    <div class="tags-list__wrapper">
        <ul class="tags-list__list">
            <li class="tags-list__item">
                <a href="https://v3.vuejs.org/guide/forms.html#radio" target="_blank" rel="noopener noreferrer"
                    class="tags-list__link tags-list__link--auto">Boutons radio</a>
            </li>

        </ul>
    </div>
</div>

<h2 class="heading heading--h2" id="Menu déroulant">Menu déroulant<a href="#Menu déroulant" aria-hidden="true"
        class="heading__anchor" data-module="CopyToClipboard"
        data-text="https://smnarnold.com/cours/vue/elements-de-formulaire#Menu déroulant" data-snackbar="Lien copié.">
        <span class="heading__anchor__wrapper">
            <svg viewBox="0 0 24 24">
                <path
                    d="M17 7h-4v2h4c1.65 0 3 1.35 3 3s-1.35 3-3 3h-4v2h4c2.76 0 5-2.24 5-5s-2.24-5-5-5zm-6 8H7c-1.65 0-3-1.35-3-3s1.35-3 3-3h4V7H7c-2.76 0-5 2.24-5 5s2.24 5 5 5h4v-2zm-3-4h8v2H8z">
                </path>
            </svg>
        </span>
    </a>
</h2>

<p>Les menus déroulants synchronisent l’attribut <code>value</code> de l'option sélectionnée avec la donnée qui leur est
    associée.</p>
<pre><code class="hljs xml"><span class="hljs-tag">&lt;<span class="hljs-name">select</span> <span class="hljs-attr">v-model</span>=<span class="hljs-string">"msg"</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">option</span> <span class="hljs-attr">value</span>=<span class="hljs-string">"Texte 1"</span>&gt;</span>Écouteurs<span class="hljs-tag">&lt;/<span class="hljs-name">option</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-name">option</span> <span class="hljs-attr">value</span>=<span class="hljs-string">"Texte 2"</span>&gt;</span>Squid Game<span class="hljs-tag">&lt;/<span class="hljs-name">option</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">select</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">h1</span>&gt;</span>{{ msg }}<span class="hljs-tag">&lt;/<span class="hljs-name">h1</span>&gt;</span></code></pre>
<div class="codepen" data-module="CodePen">
    <div class="codepen__wrapper">
        <span class="codepen__forced-height" style="padding-bottom: calc(34% + 36px);"></span>

        <div class="cp_embed_wrapper"><iframe allowfullscreen="true" allowpaymentrequest="true" allowtransparency="true"
                class="cp_embed_iframe " frameborder="0" height="100%" width="100%" name="cp_embed_4" scrolling="no"
                src="https://codepen.io/smnarnold/embed/0a8611e7b5b21069c588fb363548b31c?height=100%25&amp;theme-id=39618&amp;user=smnarnold&amp;slug-hash=0a8611e7b5b21069c588fb363548b31c&amp;default-tab=html%2Cresult&amp;name=cp_embed_4"
                style="width: 100%; overflow:hidden; display:block;" title="CodePen Embed" loading="lazy"
                id="cp_embed_0a8611e7b5b21069c588fb363548b31c"></iframe></div>
    </div>


</div>
<div class="tags-list">
    <div class="tags-list__wrapper">
        <ul class="tags-list__list">
            <li class="tags-list__item">
                <a href="https://v3.vuejs.org/guide/forms.html#select" target="_blank" rel="noopener noreferrer"
                    class="tags-list__link tags-list__link--auto">Menu déroulant</a>
            </li>

        </ul>
    </div>
</div>


</div>
</div>