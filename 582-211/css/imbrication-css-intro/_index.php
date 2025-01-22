<?php
/**
 * @type     article
 * @title    Imbrication CSS (intro)
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
<grostitre>Autre exemple pratique</grostitre>
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
<alert>
    <p>En date d'aujourd'hui, est-ce qu'il est risqué que l'imbrication CSS ne soit pas supporté par certains
        navigateurs et appareils?</p>

    <p><a href="https://caniuse.com/css-nesting" target="_blank">Can I use "CSS nesting" ?</a></p>
</alert>
