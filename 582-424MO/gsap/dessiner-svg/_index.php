<?php 
/**
 * @type     article
 * @title    10-Dessiner SVG
 * @icon     images/icon.svg
 * @abstract DrawSVG: Dessiner un tracé SVG par animation GSAP
 * @index    550
 */
?>


<p>D'abord ajoutons une nouvelle notion: la méthode GSAP qui permet d'initialiser les positions et autres propriétés de
    vos éléments avant d'être animés. La méthode <code>set()</code>. Voir la page <a
        href="../objet-et-methodes/index.html#methode-set" target="_blank" rel="noopener noreferrer">Objet GSAP
        méthodes</a> pour en savoir plus.</p>


 <dots></dots>

<grostitre>Introduction à drawSVG</grostitre>

<p>DrawSVGPlugin vous permet de révéler (ou de cacher) progressivement le trait d'un SVG <code>&lt;path&gt;</code>, <code>&lt;line&gt;</code>, <code>&lt;polyline&gt;</code>, <code>&lt;polygon&gt;</code>, <code>&lt;rect&gt;</code> ou <code>&lt;ellipse&gt;</code>. Vous pouvez même animer vers l'extérieur en début le trait à partir du centre (ou de n'importe quelle position). Pour ce faire, drawSVG contrôle les propriétés CSS <a href="https://developer.mozilla.org/fr/docs/Web/SVG/Attribute/stroke-dashoffset" target="_blank" rel="noopener noreferrer">stroke-dashoffset</a>  et <a href="https://developer.mozilla.org/fr/docs/Web/SVG/Attribute/stroke-dasharray" target="_blank" rel="noopener noreferrer">stroke-dasharray</a>.</p>
<dots></dots>

<grostitre>Installation de drawSVG</grostitre>



<p>Comme pour tout plugiciel&nbsp;<em>(plugin)</em>&nbsp;GreenSock, afin d'avoir accès à ses fonctionnalités, il est
    nécessaire d'avoir incorporé la librairie GSAP préalablement et d'ajouter ensuite le plugiciel dans le&nbsp;projet.
</p>
<p>Pour ce faire, il est&nbsp;possible:</p>
<ul>
    <li>
        <p>De le télécharger sur le&nbsp;<a
                href="https://greensock.com/docs/v3/Installation?checked=core,drawSVG#download" target="_blank">Site
                de&nbsp;GreenSock</a> et l'installer dans votre propre projet.</p>
    </li>
    <li>
        <p>D'utiliser un&nbsp;<a href="https://greensock.com/docs/v3/Installation?checked=core,drawSVG#CDN"  target="_blank">CDN</a></p>
    </li>
</ul>
<p>Une fois chargé, il est conseillé d'indiquer à GSAP que MotionPath est disponible en inscrivant la ligne de
    code&nbsp;suivante:</p>

    <highlight lang='JavaScript'>gsap.registerPlugin(DrawSVGPlugin);</highlight>

<warning>DrawSVG n'est pas gratuit. Pour l'utiliser dans un projet hébergé sur un serveur Web, vous devez être membre du <a href="https://greensock.com/club/" target="_blank" rel="noopener noreferrer">Club GreenSock</a></strong>. Heureusement vous pouvez tout de même l'utiliser en local ou encore sur CodePen en ajoutant les liens des plugiciels GSAP nécessaires <a href="https://codepen.io/GreenSock/full/JjPwRob" target="_blank" rel="noopener noreferrer">fournis ici</a> .</warning>


<dots></dots>

<grostitre>Le principe de base</grostitre>

<p class="codepen" data-height="480" data-theme-id="44168" data-default-tab="result" data-slug-hash="ExdmrwY" data-user="tim-momo" style="height: 480px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
  <span>See the Pen <a href="https://codepen.io/tim-momo/pen/ExdmrwY">
  GSAP DrawSVG - Démo de base</a> by TIM Montmorency (<a href="https://codepen.io/tim-momo">@tim-momo</a>)
  on <a href="https://codepen.io">CodePen</a>.</span>
</p>


<p><code>drawSVG:</code> peut contenir 1 ou 2 valeurs. </p>

<p>À la base, ce sont 2 valeurs, séparées par un espace, pour définir une partie de votre ligne, un segment de celle-ci.</p>

<ul>
    <li>Ce peut-être des longueurs absolues (longueurs en pixels sans écrire l'unité) comme par exemple
    <code>"20&nbsp;350".</code>.</li>
    <li>Ou des pourcentages tel que <code>"40%&nbsp;60%"</code>. Dans ce cas, il faudra ajouter l'unité&nbsp;%</li>
    <li>Si vous utilisez une seule valeur, notez que la valeur de départ sera définie par défaut à <code>0</code>.<br> Donc
    si on écrit que la valeur <code>"100%"</code> seule, ce sera donc équivalent à <code>"0&nbsp;100%"</code> ou la
    valeur <code>true</code>. La ligne sera alors entièrement visible.</li>
</ul>



<dots></dots>



<p>Dans l'exemple précédent, on change dynamiquement les valeurs du début et fin de la partie visible du tracé SVG (path).</p>
<p>Si on souhaite voir un tracé se dessiner du début à la fin, on définit <avec la méthode code>set()</code> les propriétés initiales.</p>
<p>Ensuite, sur le clique du bouton par exemple, on active l'animation avec la méthode <code>to()</code>, conjointement avec la propriété <code>drawSVG</code>.</p>

<p class="codepen" data-height="400" data-theme-id="44431" data-default-tab="js,result" data-slug-hash="OJBmKjy" data-user="tim-momo" style="height: 400px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
  <span>See the Pen <a href="https://codepen.io/tim-momo/pen/OJBmKjy">
  GSAP DrawSVG - Démo 1 - set</a> by TIM Montmorency (<a href="https://codepen.io/tim-momo">@tim-momo</a>)
  on <a href="https://codepen.io">CodePen</a>.</span>
</p>

<p>On peut aussi simplement utiliser un <code>fromTo()</code> </p>
<p class="codepen" data-height="400" data-theme-id="44431" data-default-tab="js,result" data-slug-hash="XWxRGjK" data-user="tim-momo" style="height: 400px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
  <span>See the Pen <a href="https://codepen.io/tim-momo/pen/XWxRGjK">
  GSAP DrawSVG - Démo 1</a> by TIM Montmorency (<a href="https://codepen.io/tim-momo">@tim-momo</a>)
  on <a href="https://codepen.io">CodePen</a>.</span>
</p>


<dots></dots>

<grostitre>SVG multi-formes/multi-lignes</grostitre>

<p>Comment animer de nombreux traits et échelonner (stagger) les animations ?</p>
<p>L'avantage d'avoir <em>DrawSVGPlugin</em> intégré à GSAP est que vous pouvez l'utiliser pour créer rapidement des effets complexes et avoir un contrôle total sur l'animation (<code>pause</code>, <code>resume</code>, <code>reverse</code>, <code>seek</code> etc.)</p>
<p>Supposons que vous ayez 20 éléments SVG auxquels la classe <code>.dessine-moi</code> a été appliquée et que vous souhaitiez les dessiner de manière décalée, vous pourriez le faire :</p>

<highlight lang='JavaScript'>//Dessinera tous les éléments qui ont la classe "dessine-moi" avec un décalage de début de 0.1 seconde.
gsap.from(".draw-me", {
    duration:1, 
    stagger: 0.1, 
    drawSVG: 0
});</highlight>



<dots></dots>

<doclink href='https://greensock.com/docs/v3/Plugins/DrawSVGPlugin'>Plugiciel drawSVG</doclink>


 <script async src="https://cpwebassets.codepen.io/assets/embed/ei.js"></script>