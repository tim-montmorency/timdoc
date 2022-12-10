<?php print_header(); ?>

<p>Contrairement aux autres valeurs de display qui influencent uniquement l'affichage des éléments par rapport aux autres dans la page, la propriété <span class="inline-code">display: flex;</span> ou <span class="inline-code">display: inline-flex;</span> influence aussi l'affichage de ses enfants en les positionnant dans un corridor sur l'axe des X ou Y, en modifiant leur dimension, leur ordre, etc. afin de remplir l'espace disponible le plus adéquatement possible.</p>

<grostitre name="flex-direction" id="flex-direction"></grostitre>
<p>Comme son nom l'indique, la valeur de cette propriété définit la direction qu'auront ses enfants.<br><br>Valeurs possibles:</p>
<ul>
    <li><span class="inline-code">row</span> &#8594; <em>(défaut)</em></li>
    <li><span class="inline-code">row-reverse</span> &#8592;</li>
    <li><span class="inline-code">column</span> &#8595;</li>
    <li><span class="inline-code">column-reverse</span> &#8593;</li>
</ul>

<h2>flex-direction: row vs column</h2>
<codepen id="xxzQBzN"></codepen>

<h2>flex-direction: row-reverse vs column-reverse</h2>
<codepen id="WNyYBpN"></codepen>

<doclink title="flex-direction" href="https://www.w3schools.com/cssref/css3_pr_flex-direction.php"></doclink>
<doclink title="flex-direction" href="https://developer.mozilla.org/fr/docs/Web/CSS/flex-direction"></doclink>

<exercice id="flexbox-zombie-part-1"></exercice>

<dots></dots>

<grostitre name="justify-content" id="justify-content"></grostitre>
<p>Un peu comme Word ou Google Doc, flexbox vous permet de justifier votre contenu horizontalement ↔️ afin atteindre l'affichage désiré.<br><br>Possibilités:<br></p>
<ul>
    <li><span class="inline-code">flex-start</span> <em>(défaut)</em></li>
    <li><span class="inline-code">flex-end</span></li>
    <li><span class="inline-code">center</span></li>
    <li><span class="inline-code">space-between</span></li>
    <li><span class="inline-code">space-around</span></li>
    <li><span class="inline-code">space-evenly</span></li>
    <li>etc.</li>
</ul>

<h2>justify-content: flex-start vs flex-end</h2>
<codepen id="qBKgLMO"></codepen>

<h2>justify-content: center vs space-between</h2>
<codepen id="wvXNRQy"></codepen>

<h2>Justify-content : space-around vs space-evenly</h2>
<codepen id="QWxYzzV"></codepen>

<p>Ces deux valeurs peuvent se ressembler dans un espace restreint, mais remarquer comment avec <span class="inline-code">justify-content: space-around;</span> chaque élément a un espace équivalent à gauche et à droite et comment l'espace de chacun des éléments s'additionne.</p>
<img src="images/justify-content-space-around.png">
<p>Tandis qu'en <span class="inline-code">justify-content: space-evenly;</span> l'espace n'est pas additionné, mais plutôt jumelé afin de créer des espaces identiques entre chaque élément.</p>
<img src="images/justify-content-space-evenly.png">

<exercice id="flexbox-zombie-part-2"></exercice>

<dots></dots>

<grostitre name="align-items" id="align-items"></grostitre>

<p>Dans la même lignée que <a href="#justify-content">justify-content</a>, mais cette fois à la verticale ↕️.<br><br>Possibilités:</p>
<ul>
    <li><span class="inline-code">stretch</span> <em>(défaut)</em></li>
    <li><span class="inline-code">flex-start</span></li>
    <li><span class="inline-code">flex-end</span></li>
    <li><span class="inline-code">center</span></li>
    <li>etc.</li>
</ul>

<h2>align-items: stretch vs center</h2>
<codepen id="OJEqJqM"></codepen>

<h2>align-items: flex-start vs flex-end</h2>
<codepen id="JjZzjzw"></codepen>

<doclink title="align-items" href="https://www.w3schools.com/cssref/css3_pr_align-items.php"></doclink>
<doclink title="align-items" href="https://developer.mozilla.org/fr/docs/Web/CSS/align-items"></doclink>

<exercice id="flexbox-zombie-part-3"></exercice>

<p><span class="inline-code">justify-content</span> et <span class="inline-code">align-items</span> sont l'équivalent de brancher une clé USB en CSS. Deux ou trois tentatives sont souvent requises avant d’obtenir le résultat espéré.</p>

<dots></dots>

<grostitre name="align-self" id="align-self"></grostitre>

<p>La propriété <span class="inline-code">align-self</span> est pratiquement identique à la propriété <a href="#align-items">align-items</a> à la différence qu'elle s'applique sur un élément en particulier, <strong>et non le parent</strong>, afin de l'aligner de façon différente aux autres.<br><br>Elle accepte aussi les valeurs:</p>
<ul>
    <li><span class="inline-code">auto</span> <em>(défaut)</em></li>
    <li><span class="inline-code">stretch</span></li>
    <li><span class="inline-code">flex-start</span></li>
    <li><span class="inline-code">flex-end</span></li>
    <li><span class="inline-code">center</span></li>
    <li>etc.</li>
</ul>

<codepen id="LYrapJM"></codepen>

<doclink title="align-self" href="https://www.w3schools.com/cssref/css3_pr_align-self.php"></doclink>
<doclink title="align-self" href="https://developer.mozilla.org/fr/docs/Web/CSS/align-self"></doclink>

<exercice id="flexbox-zombie-part-4"></exercice>

<dots></dots>

<grostitre name="Inspecteur" id="inspecteur"></grostitre>

<p>L'inspecteur est d'une aide précieuse lorsque l'on manipule les éléments flexbox. Dans le DOM tree, les éléments en <span class="inline-code">display: flex;</span> ou <span class="inline-code">display: inline-flex;</span> sont mis en évidence grâce à un badge contenant le mot "flex". Lorsque cliqué, ce badge met en évidence la zone prise dans la page par le flexbox en question.</p>
<p>Lorsque l'on examine les propriétés CSS appliquées à cet élément on remarque à la droite de la propriété <span class="inline-code">display</span> un icône rappelant une grille. Lorsque cliqué, cet icône affiche différentes propriétés en lien avec flexbox, par exemple: <span class="inline-code">flex-direction</span>, <span class="inline-code">justify-content</span>, <span class="inline-code">align-items</span>, etc. Les valeurs disponibles pour ces propriétés sont illustrées avec des icônes permettant d'identifier ou de tester rapidement la valeur souhaitée.</p>
<clip src="videos/flex-inspecteur.mp4"></clip>

<dots></dots>

<exercice id="flexbox-scrabble-potter"></exercice>
<exercice id="flexbox-froggy"></exercice>
<exercice id="flexbox-defense"></exercice>

<dots></dots>

<grostitre name="Résumé vidéo" id="resume-video"></grostitre>
<clip src="videos/css_flexbox_in_100_seconds.mp4"></clip>

<dots></dots>

<?php print_footer(); ?>