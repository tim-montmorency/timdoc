<?php
/**
 * @type     article
 * @title    Image
 * @icon     images/icon.png
 * @abstract La balise &lt;img&gt; permet d'afficher une image
 */
?>


<p class="spacer">La balise <incode>&lt;img&gt;</incode> permet d'afficher une image. Seul son attribut <incode>src</incode> est obligatoire puisqu'il spécifie <a href="../../autres/chemins/">le chemin</a> vers l'image à afficher.</p>

<p>Par exemple:</p>

<codepen id="KKBbwYW" tab="html,result" height="340"></codepen>

<dots></dots>


<grostitre>Alt</grostitre>

<p>L'attribut <incode>alt</incode>, bien que non obligatoire, est fortement recommandé puisqu'il permet de fournir une description alternative dans le cas où l'image ne puisse être chargée <em>(chemin brisé)</em>.</p>

<p>Par exemple:</p>

<codepen id="bGjONPe" tab="html,result" height="340"></codepen>

<p>Il permet aussi aux lecteurs ayant recours à un assistant vocal d'avoir une brève description du contenu de l'image. Il est donc conseillé d'être concis et d'éviter les termes vagues.</p>

<p>👌</p>

<highlight lang="html">&lt;img src="image.png" alt="carré vert, bleu et rouge"&gt;</highlight>

<p>🚫</p>

<highlight lang="html">&lt;img src="image.png" alt="image"&gt;</highlight>

<info>Si l’image ne contient pas de contenu informatif, mais uniquement esthétique, par exemple une image d’une ligne diagonale utilisée entre deux blocs de contenu, il est suggéré d’inscrire <incode>alt=""</incode> afin d’indiquer que l’image est purement décorative.</info>

<dots></dots>


<grostitre>Width & Height</grostitre>

<p>Les attributs <incode>width</incode> et <incode>height</incode> permettent de spécifier la dimension intrinsèque de l'image. C'est à dire sa dimension d'origine si celle-ci n'était pas manipulée en CSS. Ces attributs ne doivent pas spécifier d'unité de mesure. Le navigateur assumera automatiquement que ces valeurs sont exprimées en pixels <em>(px)</em>.</p>

<p>Par exemple:</p>

<codepen id="qByLdWL" tab="html,result" height="340"></codepen>

<p>Spécifier la dimension intrinsèque d'une image permet au navigateur d'afficher une page plus rapidement. Sans ces attributs, le navigateur doit attendre que l'image ait terminé de charger afin d'obtenir ses dimensions et ensuite calculer l'espace à y allouer. Si ces informations sont déjà fournies via des attributs, le navigateur peut calculer le rendu de la page de façon ininterrompu.</p>

<p>👌</p>

<highlight lang="html">&lt;img src="image.png" width="100" height="100"&gt;</highlight>

<p>🚫</p>

<highlight lang="html">&lt;img src="image.png" width="100px" height="100px"&gt;</highlight>

<dots></dots>


<grostitre>Classe et ID</grostitre>

<p>Comme toute balise HTML, il est possible d'attribuer une classe ou un id à une image afin de pouvoir la manipuler en CSS ou JavaScript par la suite.</p>

<dots></dots>


<grostitre>Loading</grostitre>

<p>L'attribut <incode>loading</incode> permet d'indiquer la priorité de chargement d'une image. Par défaut, le navigateur tente de charger toutes images en accordant une légère priorité à celles visibles au chargement de la page dans la fenêtre. Cependant il est possible de lui spécifier différentes valeurs:</p>

<ul>
    <li><incode>auto</incode> comportement normal, soit l'équivalent de ne pas mettre l'attribut.</li>
    <li><incode>lazy</incode> attendre que l'image soit sur le point d'être visible avant de la chargée. Donc si un usager ne fait jamais défiler la page jusqu'à celle-ci, l'image ne sera jamais chargée. Cette option permet d'accélérer le chargement de la page 🏁.</li>
    <li><incode>eager</incode> indique de charger l'image le plus rapidement possible, peu importe sa position dans la page.</li>
</ul>

<p>Par exemple, pour faire du <em>"lazy-loading"</em>:</p>

<codepen id="PoBXqPZ" tab="html,result" height="340"></codepen>

<warning>Si une image est visible au chargement de la page, il est recommandé de ne pas lui ajouter l’attribut <incode>loading="lazy"</incode> afin de forcer son chargement le plus rapidement possible.</warning>

<doclink href="https://developer.mozilla.org/fr/docs/Web/HTML/Element/Img">img</doclink>
<doclink href="https://www.w3schools.com/tags/tag_img.asp">img</doclink>

<dots></dots>

