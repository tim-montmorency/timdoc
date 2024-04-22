<?php 
/**
 * @type     article
 * @title    10-Texte
 * @icon     ../images/icon.webp
 * @abstract Animation du texte avec l'extension TextPlugin
 * @index    525
 * @ref      web/cadriciels/gsap
 */
?>

<grostitre>Intro TextPlugin</grostitre>
<p>TextPlugin est un plugiciel&nbsp;<em>(plugin)</em>&nbsp;développé par&nbsp;<a
        href="https://gsap.com/" target="_blank">GSAP</a>&nbsp;permettant d'animer du texte.</p>
<p>Voici par exemple une animation utilisant TextPlugin:</p>
<codepen id="JjVeNBZ" tab="result" height="640"></codepen>



<dots></dots>
<grostitre>Installation</grostitre>
<p>Comme pour tout plugiciel&nbsp;<em>(plugin)</em>&nbsp;GSAP, afin d'avoir accès à ses fonctionnalités, il est nécessaire d'avoir incorporé la librairie GSAP préalablement et d'ajouter ensuite le plugiciel dans le&nbsp;projet.</p> 



<h3>Pour ce faire, il est&nbsp;possible d'utiliser une des 3 techniques ci-bas :</h3>
<ul>
    <li>
        De le <a href="https://gsap.com/docs/v3/Installation/?checked=core%2CtextPlugin&tab=cdn&module=esm&method=private+registry&tier=free&club=false&require=false&trial=true#grab-the-files" target="_blank">télécharger sur le site de
           GSAP (bouton Get GSAP)</a>, 📥 l'inclure dans votre dossier de projet et ajouter à la fois le fichier
        <em>gsap-public/minified/gsap.min.js</em> si ce n'était pas déjà fait. De plus, vous ajouterez le plugiciel
        scrollTrigger avec <em>gsap-public/minified/ScrollTrigger.min.js</em>.<br><small>Prioriser toujours les versions
            minifiées qui sont plus performantes lors du chargement de la page.</small>
    </li>
    <li>
        D'utiliser un&nbsp;<a href="https://gsap.com/docs/v3/Installation?tab=cdn&module=esm&method=private+registry&tier=free&club=false&require=false&trial=true&plugins=TextPlugin#install-helper"
            target="_blank">Content Delivery Network (CDN)</a> (onglet CDN), comme vous avez l'habitude de faire. Vous devez y cocher la boîte à cocher du plugiciel <em>Text</em>, et plus bas, aller copier les 2 balises <span class='inline-code'>script</span> générées (une pour le coeur de gsap et l'autre pour le plugiciel TextPlugin) et les coller dans votre/vos page(s) HTML qui contiendront des animations GSAP.
    </li>
    <li>De partir des&nbsp;<a href="https://codepen.io/GreenSock/full/23d3979528b262cb07da37f6a7c7dd76" target="_blank">gabarits de base CodePen</a>. Vous devez copier le lien de GSAP Core et celui de <em>Text</em> et, sur votre CodePen via <em>Settings/JS/Add External Scripts</em>, y coller successivement les liens.</li>
</ul>

<p>Une fois chargé, il est conseillé d'indiquer à GSAP que TextPlugin est disponible en inscrivant la ligne de
    code&nbsp;suivante:</p>

<highlight lang="JavaScript">gsap.registerPlugin(TextPlugin);</highlight>







<dots></dots>
<grostitre>Le principe de base</grostitre>
<p>Remplace le contenu textuel d'un élément du DOM, un caractère à la fois (ou un mot à la fois si vous avez défini le délimiteur : " "). Ainsi, lorsque la transformation est terminée, le texte de l'élément du DOM a été complètement remplacé. Cela signifie également que si vous revenez en arrière ou redémarrez la transition, le texte sera inversé.</p>
<p>Voici un exemple simple de remplacement du texte dans monElement :</p>

<highlight lang='js'>// Remplace le texte de monElement par "Ceci est le nouveau texte" pendant 2 secondes
gsap.to(".monElement", {
  duration: 2,
  text: "Ceci est la suite de l'histoire.",
  ease: "none"
});</highlight>

<codepen id="MWRZwKw" tab="result" height="300"></codepen>

<h3>Autre exemple:</h3>
<codepen id="ExJGjyZ" tab="result" height="500"></codepen>


<dots></dots>
<grostitre>Utilisation d'un objet</grostitre>


<p>Il est possible de raffiner le comportement d'une animation de texte. Pour ce faire, il faut utiliser un objet JavaScript <span class='inline-code'>{}</span> pouvant contenir plusieurs propriétés et valeurs plutôt qu'une valeur textuelle comme dans l'exemple&nbsp;précédent</p>

<p>Par exemple, convertissons la valeur textuelle de l'exemple en&nbsp;objet.</p>

<highlight lang='js'>
gsap.to(".monElement", {
  duration: 1,
  text: {
    value: "Your new text"
  },
});
</highlight>

<dots></dots>
<grostitre>Propriétés spéciales</grostitre>
<h3>value</h3>
<p>OBLIGATOIRE lorsque text contient un objet <span class='inline-code'>{}</span>. C'est le texte de remplacement, comme <span class='inline-code'>"Ceci est la suite de l'histoire."</span></p>

<h3>delimiter</h3>
<p>Le delimiteur est le caractère qui doit être utilisé pour diviser le texte. La valeur par défaut est <span class='inline-code'>""</span>, de sorte que chaque caractère est isolé. Si vous préférez animer <em>mot par mot</em>, vous pouvez utiliser le caractère espace <span class='inline-code'>" "</span>. Si vous préférez animer <em>phrase par phrase</em>, vous pouvez utiliser le caractère point <span class='inline-code'>"."</span>. </p>

<h3>newClass</h3>
<p>Une classe CSS qui doit être appliquée au nouveau texte via une balise. Cela permet de différencier visuellement le nouveau texte de l'ancien, par exemple en le mettant en rouge ou en gras. Il suffit de créer une classe dans votre CSS et d'en passer le nom ici.</p>

<h3>speed</h3>
<p>Ajuste automatiquement la durée de la transition en fonction du nombre de changements dans le texte ; une valeur de <span class='inline-code'>1</span> est relativement lente, et une valeur de <span class='inline-code'>20</span> est très rapide. Sans cette fonctionnalité, vous devriez spécifier une durée pour la transition et il pourrait être difficile de deviner ce qui est bon (animer 10 caractères en 2 secondes est TRÈS différent d'en animer 500 dans le même laps de temps). En d'autres termes,  <span class='inline-code'>speed</span>vous permet de penser davantage en termes de "changements par unité de temps". Techniquement, la formule est "0,05 / speed * changements_de_texte".</p>


<doclink href='https://gsap.com/docs/v3/Plugins/TextPlugin/'>TextPlugin</doclink>






