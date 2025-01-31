<?php

/**
 * @type     article
 * @title    Flexbox
 * @icon     images/icon.webp
 * @abstract flex-direction, justify-content, align-items, align-self
 */

?>

<grostitre style="display: none">Introduction</grostitre>

<p>Contrairement aux autres valeurs de <a href="../display/">display</a> qui influencent uniquement l'affichage des éléments par rapport aux autres dans la page, la propriété <incode>display: flex;</incode> ou <incode>display: inline-flex;</incode> influence aussi l'affichage de ses enfants en les positionnant dans un corridor sur l'axe des X ou Y, en modifiant leur dimension, leur ordre, etc. afin de remplir l'espace disponible le plus adéquatement possible.</p>

<grostitre>flex-direction</grostitre>

<p>Comme son nom l'indique, la valeur de cette propriété définit la direction qu'auront ses enfants.</p>

<p>Valeurs possibles:</p>

<ul>
    <li>
        <incode>row</incode>➡️ <em>(par défaut)</em>
    </li>
    <li>
        <incode>row-reverse</incode>⬅️
    </li>
    <li>
        <incode>column</incode>⬇️
    </li>
    <li>
        <incode>column-reverse </incode>⬆️
    </li>
</ul>

<h3>flex-direction: row vs column</h3>

<codepen id="JjVYpNx" tab="result"></codepen>

<span class="remark">
    <br>À gauche, flex-direction: row;<br>
    À droite, flex-direction: column;<br>
</span>

<h3>flex-direction: row-reverse vs column-reverse</h3>

<codepen id="MWBQJmZ" tab="result"></codepen>

<span class="remark">
    <br>À gauche, flex-direction: row-reverse;<br>
    À droite, flex-direction: column-reverse;<br>
</span><br>

<doclink href="https://developer.mozilla.org/fr/docs/Web/CSS/flex-direction">flex-direction</doclink>
<doclink href="https://www.w3schools.com/cssref/css3_pr_flex-direction.php">flex-direction</doclink><br><br>


<exercice href="exercices/flexbox-zombie-chapitre-1/"></exercice>

<grostitre>justify-content</grostitre>

<p>Un peu comme Word ou Google Doc, flexbox vous permet de justifier votre contenu horizontalement ↔️ afin atteindre l'affichage désiré.</p>

<p>Possibilités:</p>

<ul>
    <li>
        <incode>flex-start</incode><em>(par défaut)</em>
    </li>
    <li>
        <incode>flex-end</incode>
    </li>
    <li>
        <incode>space-between</incode>
    </li>
    <li>
        <incode>space-around</incode>
    </li>
    <li>
        <incode>space-evenly</incode>
    </li>
    <li>
        etc.
    </li>
</ul>


<h3><incode>justify-content: flex-start</incode> vs <incode>justify-content: flex-end</incode></h3>

<codepen id="ZEZbxEw" tab="result"></codepen>

<span class="remark">
    <br>À gauche, justify-content: flex-start;<br>
    À droite, justify-content: flex-end;<br>
</span><br>

<h3><incode>justify-content: center</incode> vs <incode>justify-content: space-between</incode></h3>
.
<codepen id="JjVYLWG" tab="result"></codepen>

<span class="remark">
    <br>À gauche, justify-content: center;<br>
    À droite, justify-content: space-between;<br>
</span><br>

<h3><incode>justify-content: space-around</incode> vs <incode>justify-content: space-evenly</incode> </h3>

<codepen id="ExJVEma" tab="result"></codepen>

<span class="remark">
    <br>À gauche, justify-content: space-around;<br>
    À droite, justify-content: space-evenly;<br>
</span><br>

<p>Ces deux valeurs peuvent se ressembler dans un espace restreint, mais remarquer comment avec <incode>justify-content: space-around;</incode> chaque élément a un espace équivalent à gauche et à droite et comment l'espace de chacun des éléments s'additionne.</p>

<img src="images/justify-content-space-around.png" alt="justify-content-space-around">

<p>Tandis qu'en <incode>justify-content: space-evenly;</incode> l'espace n'est pas additionné, mais plutôt jumelé afin de créer des espaces identiques entre chaque élément.</p>

<img src="images/justify-content-space-evenly.png" alt="justify-content-space-evenly">

<exercice href="exercices/flexbox-zombie-chapitre-2/"></exercice>

<grostitre>align-items</grostitre>

<p>Dans la même lignée que <a href="#justify-content">justify-content</a>, mais cette fois à la verticale ↕️.</p>

<p>Possibilités:</p>

<ul>
    <li>
        <incode>stretch</incode><em>(par défaut)</em>
    </li>
    <li>
        <incode>flex-start</incode>
    </li>
    <li>
        <incode>flex-end</incode>
    </li>
    <li>
        <incode>center</incode>
    </li>
    <li>
        etc.
    </li>
</ul>

<h3>align-items: stretch vs center</h3>

<codepen id="ZEZbxoz" tab="result"></codepen>

<span class="remark">
    <br>À gauche, align-items: stretch;<br>
    À droite, align-items: center;<br>
</span><br>

<h3>align-items: flex-start vs flex-end</h3>

<codepen id="LYvpdrx" tab="result"></codepen>

<span class="remark">
    <br>À gauche, align-items: flex-start;<br>
    À gauche, align-items: flex-end;<br>
</span><br>

<doclink href="https://developer.mozilla.org/fr/docs/Web/CSS/align-items">flex-direction</doclink>
<doclink href="https://www.w3schools.com/cssref/css3_pr_align-items.php">flex-direction</doclink><br><br>

<exercice href="exercices/flexbox-zombie-chapitre-3/"></exercice>

<info style="display: flex; align-items: center;">
    <div style="font-size: 40px; line-height: .8; margin-right: 20px;">😅</div>
    <div>
        <incode>justify-content</incode> et <incode>align-items</incode> sont l’équivalent de brancher une clé USB en CSS. Deux ou trois tentatives sont souvent requises avant d’obtenir le résultat espéré.
    </div>
</info>

<dots></dots>

<grostitre>align-self</grostitre>

<p>La propriété <incode>align-self</incode> est pratiquement identique à la propriété <a href="align-items"> align-items</a> à la différence qu'elle s'applique sur un élément en particulier, <b>et non le parent</b>, afin de l'aligner de façon différente aux autres.</p>

<p>Elle accepte aussi les valeurs:</p>

<ul>
    <li>
        <incode>stretch</incode>
    </li>
    <li>
        <incode>flex-start</incode>
    </li>
    <li>
        <incode>flex-end</incode>
    </li>
    <li>
        <incode>center</incode>
    </li>
    <li>etc.</li>
</ul>

<codepen id="dyLYmBV" tab="css,result"></codepen>

<doclink href="https://developer.mozilla.org/fr/docs/Web/CSS/align-self">flex-direction</doclink>
<doclink href="https://www.w3schools.com/cssref/css3_pr_align-self.php">flex-direction</doclink><br><br>

<exercice href="exercices/flexbox-zombie-chapitre-4/"></exercice>

<grostitre>Inspecteur 🕵️‍♂️</grostitre>

<p>L'inspecteur est d'une aide précieuse lorsque l'on manipule les éléments flexbox. Dans le DOM tree, les éléments en <incode>display: flex;</incode> ou <incode>display: inline-flex;</incode> sont mis en évidence grâce à un badge contenant le mot <em>"flex"</em>. Lorsque cliqué, ce badge met en évidence la zone prise dans la page par le flexbox en question.</p>

<p>Lorsque l'on examine les propriétés CSS appliquées à cet élément on remarque à la droite de la propriété <incode>display</incode> un icône rappelant une grille. Lorsque cliqué, cet icône affiche différentes propriétés en lien avec flexbox, par exemple: <incode>flex-direction</incode>, <incode>justify-content</incode>, <incode>align-items</incode>, etc. Les valeurs disponibles pour ces propriétés sont illustrées avec des icônes permettant d'identifier ou de tester rapidement la valeur souhaitée.</p>

<!-- <video playsinline src="videos/flex-inspecteur.mp4" autoplay="true" muted="true" loop="true"></video><br><br><br> -->
<clipasset src="./videos/flex-inspecteur.mp4"></clipasset>

<dots></dots>

<exercice href="exercices/flexbox-scrabble-potter/"></exercice>

<exercice href="exercices/flexbox-froggy-niveau-1-a-13/"></exercice>

<exercice href="exercices/flexbox-defense-niveau-1-a-9/"></exercice>


<dots></dots>

<grostitre>Résumé vidéo</grostitre>

<youtube src="K74l26pE4YA"></youtube>