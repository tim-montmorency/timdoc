<?php
/**
 * @type     article
 * @title    Métadonnées
 * @icon     images/icon.png
 * @abstract type, title, description, image, url, etc.
 * @ref      web/html
 */
?>

<p class="spacer">Il existe plusieurs types de balises <incode>&lt;meta&gt;</incode>. Certaines servent à définir le comportement d'une page, tandis que d'autres permettent de bonifier la page avec certaines informations.</p>

<p>Voyons quelques-unes des balises <incode>&lt;meta&gt;</incode> les plus communes.</p>

<dots></dots>


<grostitre>Charset</grostitre>

<p>Cette balise définit l'encodage des caractères du document. Autrement dit, les caractères supportés sur une page. De nos jours, la valeur <incode>UTF-8</incode> est pratiquement toujours attribuée à cet élément puisqu'elle offre un jeu de caractères universels, incluant la majorité des caractères spéciaux des différentes langues <em>(accents, cédille, etc.)</em>.</p>

<p>Par exemple:</p>

<highlight lang="html">&lt;meta charset=&quot;utf-8&quot;&gt;</highlight>

<p>Si un plus ancien encodage ne supportant pas les accents était utilisé, comme le <incode>ASCII</incode>, les mots accentués, tel que: <em>"Québec"</em>, afficheraient alors ainsi:</p>

<highlight lang="text">QuÃ©bec</highlight>

<info>ASCII a été inventé en 1968 par des anglophones. UTF-8 est arrivé en 1996, soit 28 ans plus tard.</info>

<warning>Cette balise doit être placée au tout début de la balise <incode>&lt;head&gt;</incode> afin de spécifier l’encodage des caractères avant l’apparition d’une première valeur textuelle <em>(title, description, etc.)</em></warning>

<dots></dots>


<grostitre>Viewport</grostitre>

<p>Cette balise spécifie la dimension de référence de la fenêtre <em>(viewport)</em> sur les appareils mobiles 📱. Par défaut, cette balise est généralement initialisée avec les valeurs suivantes:</p>

<highlight lang="html">&lt;meta name=&quot;viewport&quot; content=&quot;width=device-width, initial-scale=1&quot;&gt;</highlight>

<h3>Width</h3>

<p>Dans ce code, la partie <incode>width=device-width</incode> indique que la largeur de la fenêtre doit correspondre à la largeur de la fenêtre de l'appareil lui-même.</p>

<p>Sans cette valeur, l'appareil mobile tentera de déterminer la largeur du site par lui-même afin de le rendre entièrement visible dans la page, quite à effectuer un zoom arrière ou avant.</p>

<p>Par exemple, voici site contenant une image de 450px de large et un <incode>max-width: 100%</incode> suivis d'un texte sans largeur de défini. Ce même site est affiché sur desktop à gauche, sur mobile sans viewport au centre et avec un viewport à droite.</p>

<img src="images/meta-viewport.png">

<p>L'image étant plus large que le cadre des appareils mobiles <em>(375px)</em> et le texte n'ayant pas de largeur spécifiée, l'affichage variera en fonction de l'absence ou la présence du meta viewport.</p>

<p>Au centre, le navigateur tente de déterminer par lui-même la largeur de fenêtre <em>(viewport)</em> optimale et donc effectue un zoom arrière. Tandis qu'à gauche, la largeur de la fenêtre <em>(viewport)</em> est configurée afin de correspondre à la largeur du cadre de l'appareil. L'image respecte donc sa propriété <incode>max-width: 100%</incode> afin de prendre une largeur de 375px.</p>

<h3>Initial-scale</h3>

<p>La partie <incode>initial-scale=1</incode> contenu dans la valeur de cette balise indique que la page ne doit pas être agrandie ou réduite au chargement initial de la page. Si désiré, il serait possible d'effectuer un zoom avant grâce à <incode>initial-scale=2</incode> ou encore un zoom arrière à l'aide de <incode>initial-scale=0.5</incode>.</p>

<h3>Minimum-scale & maximum-scale</h3>

<p>Ces parties permettent de définir le zoom minimal ou maximal permis sur une page.</p>

<h3>User-scalable</h3>

<p>Lorsque cette partie est présente et qu'elle est définie à <incode>no</incode>, par exemple <incode>user-scalable: no</incode>, il est impossible pour l'usager d'agrandir ou de rapetisser la page en utilisant les fonctionnalités de zoom.</p>

<warning>L’utilisation du <incode>user-scalable=no</incode> est déconseillé puisqu’elle peut causer des problèmes d’accessibilité.</warning>

<dots></dots>


<grostitre>Description</grostitre>

<p>La balise <incode>&lt;meta name=&quot;description&quot;&gt;</incode> permet de fournir une brève description d'approximativement 155 caractères qui sera affichée sur les moteurs de recherche et qui sera utilisée par les navigateurs au moment de la création d'un favoris.</p>

<p>Par exemple:</p>

<highlight lang="html">&lt;meta name=&quot;description&quot; content=&quot;Programme de Techniques d&#39;intégration multimédia du Collège Montmorency situé à Laval, Québec.&quot;&gt;</highlight>

<p>Génèrera l'aperçu suivant sur Google:</p>

<img src="images/google-tim-montmorency.png">

<dots></dots>


<grostitre>Keywords</grostitre>

<p>La balise <incode>&lt;meta name=&quot;keywords&quot;&gt;</incode> permet de définir des mots-clés associés à la page courante.</p>

<p>Par exemple:</p>

<highlight lang="html">&lt;meta property=&quot;keywords&quot; content=&quot;Audio, Vidéo, Animation, Programmation, 3D&quot;&gt;</highlight>

<info>Jadis très important, les keywords ont perdu beaucoup de leur influence ces dernières années.</info>

<dots></dots>


<grostitre>Langage</grostitre>

<p>la balise <incode>&lt;meta name=&quot;langage&quot;&gt;</incode> permet de spécifier la langue de la page affichée sous un <a target="_blank" href="https://fr.wikipedia.org/wiki/Liste_des_codes_ISO_639-1">format ISO 639-1</a> <em>(2 caractères)</em>.</p>

<p>Par exemple pour un site en français:</p>

<highlight lang="html">&lt;meta name=&quot;langage&quot; content=&quot;FR&quot;&gt;</highlight>

<info>De plus en plus ce meta est abandonné et la langue est spécifiée sur la balise <incode>&lt;html&gt;</incode> elle-même grâce à l’attribut lang. Par exemple, <incode>&lt;html lang=&quot;fr&quot;&gt;</incode>.</info>

<dots></dots>


<grostitre>Copyright</grostitre>

<p>Comme son nom l'indique, la balise <incode>&lt;meta name=&quot;copyright&quot;&gt;</incode> permet de spécifier que les médias et textes contenus sur une page appartiennent à une personne ou une entité.</p>

<p>Par exemple:</p>

<highlight lang="html">&lt;meta name=&quot;copyright&quot; content=&quot;Collège Montmorency&quot;&gt;</highlight>

<dots></dots>


<grostitre>Author</grostitre>

<p>La balise <incode>&lt;meta name=&quot;author&quot;&gt;</incode> permet de donner le crédit à la personne ou la compagnie aillant réaliser une page web.</p>

<p>Par exemple:</p>

<highlight lang="html">&lt;meta name=&quot;author&quot; content=&quot;Elmon Musk&quot;&gt;</highlight>

<dots></dots>


<grostitre>Robots</grostitre>

<p>La balise <incode>&lt;meta name=&quot;robots&quot;&gt;</incode> permet d'indiquer aux robots d'exploration des moteurs de recherche <em>(Google, Bing, Yahoo)</em> comment une page devrait être indexée.</p>

<p>Voici quelques-unes des valeurs possibles:</p>

<ul>
  <li><incode>index</incode> indexer la page <em>(par défaut, autrement dit, même si ce meta est omis, la page sera indexée)</em>.</li>
  <li><incode>noindex</incode> ne pas indexer la page.</li>
  <li><incode>nofollow</incode> na pas indexer aucun lien.</li>
  <li><incode>noimageindex</incode> ne pas indexer les images.</li>
</ul>

<p>Par exemple:</p>

<highlight lang="html">&lt;meta name=&quot;robots&quot; content=&quot;noindex&quot;&gt;</highlight>

<dots></dots>