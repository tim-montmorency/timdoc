<?php
/**
 * @type     article
 * @title    Imbrication CSS
 * @icon     images/thumb.png
 * @abstract Qu'est-ce que l'imbrication CSS (CSS Nesting) ?
 */
?>



<grostitre>Qu'est-ce que l'imbrication CSS (CSS Nesting) ?</grostitre>

<p>L'imbrication CSS permet d'écrire des règles imbriquées, un peu comme les balises HTML (concept parent-enfant). Elle simplifie la gestion des styles pour des éléments qui partagent une structure hiérarchique, en rendant le code plus lisible et plus maintenable.</p>
<h4>Exemple de base sans imbrication CSS :</h4>


<highlight lang='css'>
nav {
    background-color: #f8f8f8;
}

nav ul {
    list-style: none;
    padding: 0;
}

nav ul li {
    display: inline-block;
    margin: 0 10px;
}
</highlight>

<h4>Avec l'imbrication CSS> :</h4>

<highlight lang='css'>nav {
    background-color: #f8f8f8;

    ul {
        list-style: none;
        padding: 0;

        li {
            display: inline-block;
            margin: 0 10px;
        }
    }
}</highlight>





<dots></dots>
<grostitre>Syntaxe de l'imbrication CSS</grostitre>
<ol>
    <li>Les sélecteurs imbriqués doivent être contenus dans une règle parent.</li>
    <li>Utilisez <incode>&amp;</incode> pour faire référence au parent dans des sélecteurs complexes (comme des
        pseudo-classes ou des combinaisons).</li>
</ol>
<h4>Exemple avec <incode>&amp;</incode> :</h4>
<highlight lang='css'>button {
    background: blue;
    color: white;

    &:hover {
        background: darkblue;
    }

    &.primary {
        border: 2px solid white;
    }
}</highlight>





<h4>Résultat compilé :</h4>
<highlight lang='css'>button {
    background: blue;
    color: white;
}

button:hover {
    background: darkblue;
}

button.primary {
    border: 2px solid white;
}</highlight>



<dots></dots>
<grostitre>Avantages de l'imbrication CSS</grostitre>
<ol>
    <li><strong>Lisibilité accrue :</strong> Le style reflète la structure HTML sous-jacente.</li>
    <li><strong>Code plus concis :</strong> Réduit la répétition des sélecteurs parents.</li>
    <li><strong>Facilité de maintenance :</strong> Les styles hiérarchiques sont groupés.</li>
</ol>
<dots></dots>
<grostitre>Limitations et précautions</grostitre>
<ol>
    <li><strong>Profondeur d'imbrication :</strong> Évitez de trop imbriquer vos styles (recommandation :
        <strong>pas plus de 3 niveaux</strong>). Une structure complexe peut être difficile à lire et entraîner des
        problèmes de performance.
    </li>
    <li><strong>Complexité accrue :</strong> Des règles trop imbriquées peuvent devenir difficiles à comprendre si
        elles ne sont pas bien documentées.</li>
    <li><strong>Performance :</strong> Bien que l'imbrication elle-même soit performante, l'utilisation abusive de
        sélecteurs complexes peut ralentir le rendu.</li>
</ol>
<dots></dots>
<grostitre>Support des navigateurs (début 2025)</grostitre>
<p>L'imbrication CSS est une spécification relativement récente et fait partie des modules CSS travaillant avec le
    <strong>CSS Nesting Module Level 1</strong>.
</p>
<h4>Actuellement :</h4>
<ul>
    <li><strong>Support natif :</strong> Il est pris en charge par plusieurs navigateurs modernes comme
        <strong>Chrome 112+</strong>, <strong>Edge 112+</strong>, et <strong>Safari 16.4+</strong>.
    </li>
    <li><strong>Non supporté :</strong> Il peut ne pas fonctionner correctement sur des versions plus anciennes ou
        des navigateurs comme Internet Explorer (obsolète) ou d'autres moteurs non à jour.</li>
</ul>
<h4>Solution pour la compatibilité :</h4>
<p>Si vous voulez utiliser l'imbrication CSS en production :</p>
<ol>
    <li>Utilisez un outil comme <strong>PostCSS</strong> avec un plugin pour la transpiler en CSS classique.</li>
    <li>Vérifiez le support avec des outils comme <strong>Can I Use</strong> : <a rel="noopener" target="_new"
            style="--streaming-animation-state: var(--batch-play-state-1); --animation-rate: var(--batch-play-rate-1);"><span
                style="--animation-count: 1; --streaming-animation-state: var(--batch-play-state-2);">CSS</span><span
                style="--animation-count: 2; --streaming-animation-state: var(--batch-play-state-2);">
                Nesting</span><span
                style="--animation-count: 3; --streaming-animation-state: var(--batch-play-state-2);">
                Support</span></a>.</li>
</ol>
<dots></dots>






<grostitre>Exemple pratique</grostitre>
<h4>HTML :</h4>
<highlight lang='css'><div class="card">
    <h2>Article</h2>
    <p>Contenu de l'article</p>
    <a href="#">Lire la suite</a>
</div></highlight>

<h4>CSS avec imbrication :</h4>

<highlight lang='css'>.card {
    background-color: #fff;
    border: 1px solid #ddd;
    padding: 20px;

    h2 {
        color: #333;
        margin-bottom: 10px;
    }

    p {
        color: #666;
    }

    a {
        color: blue;

        &:hover {
            color: darkblue;
            text-decoration: underline;
        }
    }
}</highlight>




<h4>Résultat sans imbrication (transpilé ou manuel) :</h4>
<highlight lang='css'>.card {
    background-color: #fff;
    border: 1px solid #ddd;
    padding: 20px;
}

.card h2 {
    color: #333;
    margin-bottom: 10px;
}

.card p {
    color: #666;
}

.card a {
    color: blue;
}

.card a:hover {
    color: darkblue;
    text-decoration: underline;
}</highlight>



<dots></dots>
<grostitre>Conclusion : Faut-il l'utiliser ?</grostitre>
<ul>
    <li>
        <p><strong>Oui</strong>, si :</p>
        <ul>
            <li>Vous travaillez sur un projet moderne où tous les navigateurs cibles le prennent en charge.</li>
            <li>Vous utilisez des outils qui gèrent la transpilation pour la rétrocompatibilité.</li>
        </ul>
    </li>
    <li>
        <p><strong>Non</strong>, si :</p>
        <ul>
            <li>Vous ciblez des environnements obsolètes ou ne pouvez pas garantir le support.</li>
            <li>Vous débutez avec CSS et n'êtes pas encore familier avec les bases comme la spécificité.</li>
        </ul>
    </li>
</ul>


<alert>
    <p>En date d'aujourd'hui, est-ce qu'il est risqué que l'imbrication CSS ne soit pas supporté par certains
        navigateurs et appareils?</p>

    <p><a href="https://caniuse.com/css-nesting" target="_blank">Can I use "CSS nesting" ?</a></p>
</alert>
