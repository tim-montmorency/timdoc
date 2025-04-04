<?php 
/**
 * @type     article
 * @title    13-Morphage SVG 
 * @icon     ../images/icon.webp
 * @abstract MorphSVG: Transition entre 2 formes distinctes
 * @index    300
 * @ref      web/cadriciels/gsap
 */
?>

<grostitre>Introduction à morphSVG</grostitre>

<p>MorphSVGPlugin vous permet de faire une transition de forme, d'une forme SVG à un autre.</p>
<dots></dots>

<grostitre>Installation de morphSVG</grostitre>

<p>Comme pour tout plugiciel&nbsp;<em>(plugin)</em>&nbsp;GSAP, afin d'avoir accès à ses fonctionnalités, il est
    nécessaire d'avoir incorporé la librairie GSAP préalablement et d'ajouter ensuite le plugiciel dans le&nbsp;projet.
</p>
<p>Pour ce faire, il est&nbsp;possible:</p>
<ul>

    <li>
        <p>D'utiliser un&nbsp;<a href="https://codepen.io/GreenSock/full/JjPwRob"  target="_blank">lien hébergé en ligne</a> (comme ce pluciels-ci n'est pas gratuit, allez cocher le plugiciel dans l'onglet codePen, ensuite cliquer sur le bouton "Copy URL" en bas, à côté de <em>MorphSVGPlugin</em> et ajouter dans une balise <incode>script</incode>). Cependant, il ne sera utilisable qu'en local (sur votre ordi) ou directement sur codePen.</p>
    </li>
</ul>
<p>Une fois chargé, il est conseillé d'indiquer à GSAP que MorphSVG est disponible en inscrivant la ligne de
    code&nbsp;suivante:</p>

    <highlight lang="JavaScript">gsap.registerPlugin(MorphSVGPlugin);</highlight>

<warning><em>MorphSVGPlugin</em> n'est pas gratuit. Pour l'utiliser dans un projet hébergé sur un serveur Web, vous devez être membre du <a href="https://greensock.com/club/" target="_blank" rel="noopener noreferrer">Club GSAP</a></strong>. Heureusement vous pouvez tout de même l'utiliser en local ou encore sur CodePen en ajoutant les liens des plugiciels GSAP nécessaires <a href="https://codepen.io/GreenSock/full/JjPwRob" target="_blank" rel="noopener noreferrer">fournis ici</a> .</warning>


<dots></dots>

<grostitre>Le principe de base</grostitre>
<p>Dans une balise SVG, vous devez avoir 2 tracés (path) différents. Bien les identifier chacun ait avec un id ou une classe unique. </p>

<highlight lang="html">
<svg id="svg2" viewBox="9 80 800 400" style="enable-background:new 9 80 800 400;">
  <path id="circle" class="st1" d="M490.1,280.649c0,44.459-36.041,80.5-80.5,80.5s-80.5-36.041-80.5-80.5s36.041-80.5,80.5-80.5 S490.1,236.19,490.1,280.649z"/>
  <path id="hippo" class="st1" d="M148.802,244.876c2.737-36.735,16.107-69.079,40.099-97.061 c27.038-31.596,60.924-47.386,101.629-47.386c15.481,0,38.483,2.447,69.024,7.287c30.541,4.886,53.533,7.278,69.033,7.278 c23.693,0,57.868,8.847,102.526,26.477c7.914,3.009,17.471,11.239,28.701,24.59c6.381,7.886,16.256,19.769,29.616,35.568 c3.036,2.139,6.998,5.316,11.865,9.595c4.859,4.223,8.194,6.063,9.997,5.456c0.616-1.84,2.149-4.4,4.578-7.735 c1.214-1.225,1.962-1.832,2.261-1.832c0.935,0.607,1.831,1.215,2.747,1.832c0.906,0.616,1.205,2.419,0.906,5.456 c-0.616,5.474-0.906,7.138-0.906,4.998c-0.327,3.056-0.757,5.008-1.373,5.952c-3.952,6.671-5.485,11.847-4.55,15.472 c0.916,3.325,3.765,8.669,8.642,15.958c4.868,7.287,7.586,12.761,8.193,16.405c-0.299,2.728-0.43,7.119-0.43,13.211l-4.568,11.379 c0,8.512,9.865,23.114,29.616,43.78c9.436,4.223,14.117,18.826,14.117,43.714c0,19.47-16.089,29.167-48.273,29.167 c-4.26,0-8.81-0.13-13.678-0.467c-3.335-1.196-8.203-2.56-14.575-4.074c-7.586-0.934-12.761-3.494-15.48-7.773 c-4.877-6.95-12.781-13.509-23.711-19.581c-1.823-0.878-4.485-4.223-7.979-10.016c-3.503-5.774-6.615-9.418-9.333-10.949 c-2.719-1.495-6.68-1.813-11.856-0.878c-8.81,1.494-13.677,2.261-14.574,2.261c-2.139,0-5.25-0.598-9.343-1.831 c-4.11-1.215-7.054-1.831-8.893-1.831c-2.112,9.735-2.589,19.152-1.364,28.252c0.298,2.448,1.831,4.428,4.559,5.923 c4.27,3.046,6.531,4.709,6.849,5.045c2.718,2.111,5.615,5.605,8.642,10.445c0.616,1.849-0.523,4.952-3.419,9.342 c-2.887,4.41-5.223,7.008-7.063,7.736c-1.813,0.785-5.765,1.178-11.847,1.178c-8.82,0-12.295,0.131-10.464,0.43 c-12.145-1.831-18.984-2.878-20.516-3.158c-7.587-1.532-14.126-3.943-19.582-7.305c-2.756-1.813-5.913-10.333-9.557-25.524 c-3.681-16.406-6.717-26.272-9.137-29.635c-0.598-0.896-1.355-1.326-2.261-1.326c-1.533,0-4.045,1.494-7.53,4.559 c-3.494,2.99-5.858,4.652-7.054,5.008c-4.242,17.9-6.4,26.402-6.4,25.468c0,7.007,1.972,12.892,5.924,17.77 c3.943,4.858,8.063,9.567,12.323,14.107c5.157,5.774,7.736,10.782,7.736,15.042c0,2.41-0.748,4.521-2.28,6.372 c-6.381,7.885-17.022,11.847-31.905,11.847c-16.713,0-27.644-2.28-32.792-6.839c-6.699-5.774-10.949-11.865-12.762-18.199 c-0.298-1.533-1.055-6.091-2.28-13.678c-0.607-4.578-1.98-7.287-4.082-8.184c-6.101-0.916-13.687-2.578-22.778-5.007 c-1.841-1.215-3.811-4.26-5.942-9.118c-3.933-9.399-6.83-15.789-8.661-19.134c-9.128-4.56-23.702-9.698-43.761-15.453 c-0.916,1.831-1.345,4.373-1.345,7.718c3.335,4.26,8.343,10.8,15.032,19.581c5.466,7.288,8.203,14.295,8.203,20.965 c0,12.781-8.203,19.134-24.609,19.134c-12.453,0-20.955-0.878-25.523-2.709c-6.671-2.728-12.295-9.136-16.854-19.134 c-7.596-16.742-11.847-26.159-12.762-28.27c-4.868-11.231-8.204-21.133-10.006-29.653c-1.233-6.055-3.064-15.35-5.485-27.804 c-2.121-10.296-5.456-18.358-10.015-24.132C155.332,279.36,147.578,260.665,148.802,244.876z"/>
</svg>
</highlight>

<p>Il faudra penser, via CSS, à cacher la visibilité du deuxième tracé (path).</p>

<highlight lang="css">#hippo{
  visibility:hidden;
}</highlight>


<p>Par la suite, il suffit d'animer le premier tracé (path) avec la propriété <incode>morphSVG</incode>. La valeur de <incode>morphSVG</incode> sera l'élément HTML correspondant au 2e tracé (path).</p>

<highlight lang="javaScript">gsap.to("#circle", {
    morphSVG: "#hippo"
}</highlight>


<p>Voici la démo</p>

<codepen id="GRYyZOb" tab="js,result" height="500"></codepen>

<dots></dots>


<p><em>MorphSVGPlugin</em> trouve le tracé (path) avec l'id "#circle" et le tracé (path) avec l'identifiant "#hippo" et trouve automatiquement comment ajouter suffisamment de points au cercle et les positionner correctement afin d'obtenir une transition en douceur vers la forme hippo. Il va déchiffrer toutes les données du 2e tracés, les convertir en béziers cubiques, et les subdiviser dynamiquement si nécessaire, en ajoutant des points pour que les quantités de points de début et de fin correspondent (mais visuellement, c'est la même chose). Tout cela se fait de manière transparente sous le capot du plucigiel. </p>

<p>Et comme <em>MorphSVGPlugin</em> est étroitement intégré à GSAP, l'enchaînement de plusieurs morphages est un jeu d'enfant. Regardez comme il est facile de transformer un cercle en hippopotame, en étoile et en éléphant via une timeline.</p>

<codepen id="WNadQaz" tab="js,result" height="500"></codepen>

<dots></dots>
<grostitre>Utilisation d'un objet</grostitre>


<p>Il est possible de raffiner le comportement d'une animation morphSVG. Pour ce faire, il faut utiliser un objet
    JavaScript <span class='inline-code'>{}</span> pouvant contenir plusieurs propriétés et valeurs plutôt qu'une valeur texte comme dans l'exemple&nbsp;précédent.</p>

<p>Par exemple, convertissons la valeur textuelle de l'exemple en&nbsp;objet.</p>

<codepen id="bGmapLV" tab="js,result" height="500"></codepen>

<p>On remarque que la propriété permettant de définir le tracé de fin est maintenant spécifiée et
    s'appelle&nbsp;<incode>shape</incode>.</p>

<dots></dots>

<grostitre>Évitez les brouillons avec shapeIndex</grostitre>

<p>Afin que votre forme ne se mélange pas en chiffon avant de reformer l'autre forme, il est parfois nécessaire de spécifier quel point de départ est relié à quel point final dans la nouvelle forme.  Pour cela, il faut utiliser la propriété <incode>shapeIndex</incode>.</p>

<highlight lang="javaScript">gsap.to("#square", {
  duration: 3, 
  morphSVG:{
    shape:"#star", 
    shapeIndex:5
  }
});</highlight>

<p>Cependant, il n'est pas toujours évident de savoir quel point ira avec quel point, c'est pourquoi je vous recommande de:</p>

<ol>
  <li>faire un fork du codePen suivant</li>
  <li>conserver la fonction JavaScript qui est déjà écrite, nommée <incode>findShapeIndex()</incode></li>
  <li>ajouter vos propre forme svg dans le HTML (en identifiant les 2 tracé (path))</li>
  <li>animer vos 2 formes avec la méthode <incode>to()</incode> et la propriété <incode>morphSVG</incode></li>
  <li>appeler la fonction findShapeIndex() en passant vos 2 formes en paramètre afin de déceler quel serait le meilleur point <incode>shapeIndex</incode></li>
  <li>vous pouvez utiliser la boite + et - dans l'interface pour tester et trouver vous même le meilleur point de référence pour <incode>shapeIndex</incode></li>
</ol>

<codepen id="qBJpbom" tab="result" height="500"></codepen>

<p>Autre exemples:</p>

<codepen id="mdzpVKL" tab="result" height="850"></codepen>

