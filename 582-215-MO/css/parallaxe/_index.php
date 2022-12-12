<?php 
/**
 * @type     article
 * @title    Parallaxe
 * @icon     images/icon.png
 * @abstract Créer un effet de profondeur
 */
?>

<p>Une parallaxe consiste à créer un effet de profondeur en déplaçant des éléments à des vitesses différentes. Ainsi, les éléments se déplaçant plus rapidement sont perçus comme étant plus près, alors que ceux se déplaçant plus lentement sont perçus comme étant plus loin.</p>
<p>Walt Disney fut l'un des pionniers à ce niveau grâce à son invention le MultiPlane. Cette technologie permet de déplacer à des vitesses différentes plusieurs éléments d'un dessin animé recréant ainsi l'aspect de profondeur perçu dans la vie réelle.</p>

<clip src="videos/walt-disneys-multiplane.mp4"></clip>

<p>Le même principe est applicable en CSS.</p>

<codepen id="LYroEPB"></codepen>

<grostitre>Exemples de sites</grostitre>

<ul>
    <li><a target="_blank" href="https://the-goonies.webflow.io/">The Story of the Goonies</a> <em>(axe des Z)</em></li>
    <li><a target="_blank" href="https://drinkcann.com/">CANN</a> <em>(axe des Y)</em></li>
    <li><a target="_blank" href="https://longshotfeatures.com/">Longshot</a> <em>(axe des X)</em></li>
    <li><a target="_blank" href="http://www.firewatchgame.com/">Firewatch</a></li>
    <li><a target="_blank" href="http://www.mdmoch.com/index.php">Marcin Dmoch</a></li>
</ul>

<dots></dots>

<grostitre>Perspective & axe des Z</grostitre>

<p>Pour créer un effet similaire en CSS, il est nécessaire de configurer une perspective. Cette perspective est l'équivalent de spécifier à quelle distance en pixels se trouve le point de vue de l'utilisateur de ce qui est affiché.</p>
<p>Par exemple:</p>

<highlight lang="css">.parallax {
    perspective: 100px;
}
</highlight>

<p>Ce code indique que le point de vue de l'utilisateur se trouve à une distance équivalente à 100px de ce qui est affiché dans .parallax.</p>
<p>Une fois cette perspective configurée, le positionnement des éléments sur l'axe des Z peut être utilisé afin de rapprocher ou d'éloigner un élément de l'utilisateur.</p>

<highlight lang="css">.back {
    transform: translateZ(-100px);
}

.front {
    transform: translateZ(0);
}
</highlight>

<p>Par exemple:</p>

<codepen id="mdKYymb">Remarquez comment l’élément en arrière-plan est plus loin, donc parait plus petit.</codepen>

<dots></dots>

<grostitre>Correction de la profondeur</grostitre>

<p>Les éléments plus éloignés paraissent logiquement plus petits. Cependant, cette particularité est nuisible dans le cadre d'une parallaxe. Pour y remédier, il est nécessaire d'agrandir les éléments proportionnellement à l'aide d'un <span class="inline-code">scale()</span> afin de leur redonner leur taille d'origine.
<p>Pour calculer le <span class="inline-code">scale()</span> adéquat, il faut utiliser la formule suivante:</p>

<highlight lang="css">translateZ * -1 / perspective + 1</highlight>

<p>Par exemple, pour l'élément <span class="inline-code">.back</span> avec un translateZ de -100px:</p>

<highlight lang="css">-100 * -1 / 100 + 1; // 2</highlight>

<highlight lang="css">.back {
  transform: translateZ(-100px) scale(2);
}</highlight>

<p>Ainsi l'élément retrouvera sa taille de base.</p>

<codepen id="RwJmNMw"></codepen>

<dots></dots>

<grostitre>Vitesse de défilement</grostitre>

<p>Plus un élément est loin du point de départ sur l'axe des Z (0), plus celui-ci se déplacera lentement.</p>

<p>Shout out à Keith Clark qui a grandement inspiré cet article avec son billet <a target="_blank" href="https://keithclark.co.uk/articles/pure-css-parallax-websites/">Pure CSS Parallax Website</a>.</p>

<dots></dots>

<exercice id="parallaxe-jupiter"></exercice>

<dots></dots>
