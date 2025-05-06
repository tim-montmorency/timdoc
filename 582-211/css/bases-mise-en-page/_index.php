<?php
/**
 * @type     article
 * @title    Mise en page
 * @icon     images/icon.webp
 * @abstract Bases de la mise en page CSS
 */
?>
<grostitre>Balises de base</grostitre>
<p>Les balises de base d'une page classique: <br><br>
    <incode>html, body, header, main, footer</incode> etc.
</p>

<br>
<p>Les balises qu'on voient souvent en entête (pas nécessairement dans cet ordre mais voici un exemple) :</p>
<highlight lang='html'>
    <header>
        <a href="#" class="logo">
            <img src="logo.svg" alt="Texte du logo">
        </a>
        <button id="burger-toggler">☰</button>
        <nav>
            <ul>
                <li><a href="#">Page1</a></li>
                <li><a href="#">Page2</a></li>
                <li><a href="#">Page3</a></li>
            </ul>
        </nav>
    </header>


</highlight>
<dots></dots>
<grostitre>Limiter la largeur de la page</grostitre>


<h3 class="">🎯 <strong>Pourquoi limiter la largeur du contenu (avec <code>max-width</code>) ?</strong></h3>
<ol>
    <li class="" style="">
        <p class=""><strong>💡 Lisibilité :</strong></p>
        <ul>
            <li class="" style="">
                <p class="">Des lignes trop longues fatiguent l'œil. On recommande généralement entre <strong>50 et 75
                        caractères par ligne</strong> pour le confort de lecture. Si ton contenu s’étale sur un écran 4K
                    sans limite de largeur, chaque ligne peut faire plus de 200 caractères : <strong>c’est
                        éprouvant</strong> à lire.</p>
            </li>
        </ul>
    </li>
    <li class="" style="">
        <p class=""><strong>📐 Hiérarchie visuelle :</strong></p>
        <ul>
            <li class="" style="">
                <p class="">Une page trop large peut diluer la structure : les blocs de texte ou de contenu peuvent
                    paraître éparpillés, et l’utilisateur perd ses repères. Un <code>max-width</code> permet de
                    recentrer le contenu et de mieux organiser l’espace.</p>
            </li>
        </ul>
    </li>
    <li class="" style="">
        <p class=""><strong>🧭 Guidage de l’utilisateur :</strong></p>
        <ul>
            <li class="" style="">
                <p class="">Un conteneur bien limité permet de <strong>canaliser l’attention</strong> vers le contenu
                    important, sans que l'œil ne se perde sur les côtés. Cela favorise une lecture en <strong>F</strong>
                    ou en <strong>Z</strong>, des schémas de lecture bien établis.</p>
            </li>
        </ul>
    </li>
    <li class="" style="">
        <p class=""><strong>📱 Cohérence responsive :</strong></p>
        <ul>
            <li class="" style="">
                <p class="">En fixant un <code>max-width</code>, tu gardes un <strong>design fluide mais
                        contenu</strong> : il s’adapte aux petits écrans tout en restant cohérent sur les très grands.
                </p>
            </li>
        </ul>
    </li>
</ol>

<h3 class="">✅ <strong>Bonnes pratiques</strong></h3>
<ul>
    <li class="" style="">
        <p class="">Utiliser une <code>max-width</code> autour de <strong>1200px à 1440px</strong> pour le conteneur
            principal (<incode>main</incode>, <incode>.container</incode>, etc.). <br>
            👉 Exemple :</p>

<highlight lang='css'>.container {
    width: 100%;
    max-width: 1440px;
    margin: 0 auto;
    padding: 0 1rem;
}</highlight>
    </li>
    <li class="" style="">
       Sur les très grands écrans (ex. 1920px+), prévoir des <em>marges latérales équilibrées</em> à droite et à gauche du conteneur de la page.
    </li>
    <li class="" style="">
        Adapter le <incode>max-width</incode> selon le type de contenu :
        <ul>
            <li class="" style="">
               <strong>Texte courant</strong> (articles, blog) : ~700–900px pour favoriser la lecture.
            </li>
            <li class="" style="">
                <strong>App web ou tableaux de données</strong> : plus large (jusqu’à 1440px), car le
                    contenu est plus technique et moins linéaire.
            </li>
        </ul>
    </li>
    <li class="" style="">
       Si nécessaire, créer des <em>breakpoints pour les très grands écrans</em> afin d'éviter une
            impression de "vide" ou des interfaces trop compactes au centre.
    </li>
</ul>

<h3>Résumé à propos de la largeur maximum</h3>
<p class=""> Même avec les écrans très larges comme dans vos laboratoire au collège et avec le CSS moderne et les outils de layout comme <em>Grid</em> ou <em>Flexbox</em>, <strong>le confort utilisateur reste la priorité</strong>. Et cela passe encore par :</p>
<ul>
    <li class="" style="">
       une lecture fluide,
    </li>
    <li class="" style="">
       une structure claire,
    </li>
    <li class="" style="">
      et une interface qui <strong>ne se perd pas dans l’espace disponible</strong>.
    </li>
</ul>