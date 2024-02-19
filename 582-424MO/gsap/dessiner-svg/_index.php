<?php 
/**
 * @type     article
 * @title    11-Dessiner SVG
 * @icon     ../images/icon.webp
 * @abstract DrawSVG: Dessiner un tracé SVG par animation GSAP
 * @index    500
 * @ref      web/cadriciels/gsap
 */
?>


<p>D'abord ajoutons une nouvelle notion: la méthode GSAP qui permet d'initialiser les positions et autres propriétés de
    vos éléments avant d'être animés. La méthode <incode>set()</incode>. Voir la page <a
        href="../objet-et-methodes/index.html#methode-set" target="_blank" rel="noopener noreferrer">Objet GSAP
        méthodes</a> pour en savoir plus.</p>


 <dots></dots>

 <p>Il sera important pour ce segment de comprendre un peu la nature d'un SVG, pour en savoir plus, consulter cette documentation très complète sur le sujet (naviguer le sous-sujet avec le menu de gauche, traduire en français avec le menu de langue en haut à droite).</p>
 <doclink href="https://developer.mozilla.org/en-US/docs/Web/SVG/Tutorial/Fills_and_Strokes">SVG remplissage et contour</doclink>
 <dots></dots>

<grostitre>Introduction à drawSVG</grostitre>

<p>DrawSVGPlugin vous permet de révéler (ou de cacher) progressivement le trait d'un SVG <incode>&lt;path&gt;</incode>, <incode>&lt;line&gt;</incode>, <incode>&lt;polyline&gt;</incode>, <incode>&lt;polygon&gt;</incode>, <incode>&lt;rect&gt;</incode> ou <incode>&lt;ellipse&gt;</incode>. Vous pouvez même animer vers l'extérieur en début le trait à partir du centre (ou de n'importe quelle position). Pour ce faire, drawSVG contrôle les propriétés CSS <a href="https://developer.mozilla.org/fr/docs/Web/SVG/Attribute/stroke-dashoffset" target="_blank" rel="noopener noreferrer">stroke-dashoffset</a>  et <a href="https://developer.mozilla.org/fr/docs/Web/SVG/Attribute/stroke-dasharray" target="_blank" rel="noopener noreferrer">stroke-dasharray</a>.</p>
<dots></dots>

<grostitre>Installation de drawSVG</grostitre>



<p>Comme pour tout plugiciel&nbsp;<em>(plugin)</em>&nbsp;GreenSock, afin d'avoir accès à ses fonctionnalités, il est
    nécessaire d'avoir incorporé la librairie GSAP préalablement et d'ajouter ensuite le plugiciel dans le&nbsp;projet.
</p>
<p>Pour ce faire, il est&nbsp;possible:</p>
<ul>

    <li>
        <p>D'utiliser un&nbsp;<a href="https://greensock.com/docs/v3/Installation?checked=core,drawSVG#codepen"  target="_blank">lien hébergé en ligne</a> (comme ce pluciels-ci n'est pas gratuit, allez copier le lien dans l'onglet codePen, vous cliquiez sur le bouton "Copy URL" en bas, à côté de DrawSVGPlugin et l'ajoutez dans une balise <incode>script</incode>). Cependant, il ne sera utilisable qu'en local (sur votre ordi) ou directement sur codePen.</p>
    </li>
</ul>
<p>Une fois chargé, il est conseillé d'indiquer à GSAP que MotionPath est disponible en inscrivant la ligne de
    code&nbsp;suivante:</p>

    <highlight lang="JavaScript">gsap.registerPlugin(DrawSVGPlugin);</highlight>

<warning>DrawSVG n'est pas gratuit. Pour l'utiliser dans un projet hébergé sur un serveur Web, vous devez être membre du <a href="https://greensock.com/club/" target="_blank" rel="noopener noreferrer">Club GreenSock</a></strong>. Heureusement vous pouvez tout de même l'utiliser en local ou encore sur CodePen en ajoutant les liens des plugiciels GSAP nécessaires <a href="https://codepen.io/GreenSock/full/JjPwRob" target="_blank" rel="noopener noreferrer">fournis ici</a> .</warning>


<dots></dots>

<grostitre>Le principe de base</grostitre>

<codepen id="ExdmrwY" notab="true" height="480"></codepen>

<p><incode>drawSVG:</incode> peut contenir 1 ou 2 valeurs. </p>

<p>À la base, ce sont 2 valeurs, séparées par un espace, pour définir une partie de votre ligne, un segment de celle-ci.</p>

<ul>
    <li>Ce peut-être des longueurs absolues (longueurs en pixels sans écrire l'unité) comme par exemple
    <incode>"20&nbsp;350".</incode>.</li>
    <li>Ou des pourcentages tel que <incode>"40%&nbsp;60%"</incode>. Dans ce cas, il faudra ajouter l'unité&nbsp;%</li>
    <li>Si vous utilisez une seule valeur, notez que la valeur de départ sera définie par défaut à <incode>0</incode>.<br> Donc
    si on écrit que la valeur <incode>"100%"</incode> seule, ce sera donc équivalent à <incode>"0&nbsp;100%"</incode> ou la
    valeur <incode>true</incode>. La ligne sera alors entièrement visible.</li>
</ul>



<dots></dots>



<p>Dans l'exemple précédent, on change dynamiquement les valeurs du début et fin de la partie visible du tracé SVG (path).</p>
<p>Si on souhaite voir un tracé se dessiner du début à la fin, on définit <avec la méthode code>set()</code> les propriétés initiales.</p>
<p>Ensuite, sur le clique du bouton par exemple, on active l'animation avec la méthode <incode>to()</incode>, conjointement avec la propriété <incode>drawSVG</incode>.</p>

<codepen id="OJBmKjy" tab="js,result" height="440"></codepen>

<p>On peut aussi simplement utiliser un <incode>fromTo()</incode> </p>

<codepen id="XWxRGjK" tab="js,result" height="440"></codepen>

<dots></dots>

<grostitre>SVG multi-formes/multi-lignes</grostitre>

<p>Comment animer de nombreux traits et échelonner (stagger) les animations ?</p>
<p>L'avantage d'avoir <em>DrawSVGPlugin</em> intégré à GSAP est que vous pouvez l'utiliser pour créer rapidement des effets complexes et avoir un contrôle total sur l'animation (<incode>pause</incode>, <incode>resume</incode>, <incode>reverse</incode>, <incode>seek</incode> etc.)</p>
<p>Supposons que vous ayez 20 éléments SVG auxquels la classe <incode>.dessine-moi</incode> a été appliquée et que vous souhaitiez les dessiner de manière décalée, vous pourriez le faire :</p>

<highlight lang="JavaScript">
//Dessinera tous les éléments qui ont la classe "dessine-moi" avec un décalage de début de 0.1 seconde.
gsap.from(".dessine-moi", {
    duration:1, 
    stagger: 0.1, 
    drawSVG: 0
});
</highlight>

<p>De même vous pourriez faire une timeline en animant le dessin de plusieurs lignes (paths) une après l'autre.  Et pourquoi pas...  finir avec un remplissage?</p>

<codepen id="mdzwbEO" tab="js,result" height="600"></codepen>

<dots></dots>

<doclink href="https://greensock.com/docs/v3/Plugins/DrawSVGPlugin">Plugiciel drawSVG</doclink>
