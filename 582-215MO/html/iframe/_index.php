<?php
/**
 * @type     article
 * @title    iFrame
 * @icon     images/icon.png
 * @abstract youtube, vimeo, google map, etc.
 */
?>

<p class="spacer">La balise <incode>&lt;iframe&gt;</incode> <em>(inline frame)</em> permet d'afficher une page HTML à l'intérieur d'une autre page. Bien que visible à l'écran, cette page imbriquée bénéficie de son propre contexte d'exécution. Ainsi, les styles et scripts de la page parent n'ont aucun effet sur la page enfant et vice versa.</p>

<dots></dots>


<grostitre>Src</grostitre>

<p>Seul l'attribut <incode>src</incode> est obligatoire puisqu'il spécifie le chemin vers la page à afficher.</p>

<highlight lang="html">&lt;iframe src=&quot;https://site.com&quot;&gt;&lt;/iframe&gt;</highlight>

<dots></dots>


<grostitre>Title</grostitre>

<p>L'attribut <incode>title</incode>, bien que non obligatoire, est fortement recommandé puisqu'il permet de fournir une description du contenu du iFrame aux personnes utilisant une assistance vocale afin de naviguer sur la page.</p>

<highlight lang="html">&lt;iframe src=&quot;https://site.com&quot; title=&quot;Démo iFrame&quot;&gt;&lt;/iframe&gt;</highlight>

<dots></dots>


<grostitre>Width & Height</grostitre>

<p>Les attributs <incode>width</incode> et <incode>height</incode> permettent de spécifier la dimension du iFrame. Par défaut si ces attributs ne sont pas spécifiés un iFrame aura une dimension de 300x150px. Ces attributs ne doivent pas spécifier d'unité de mesure. Le navigateur assumera automatiquement que ces valeurs sont exprimées en pixels <em>(px)</em>.</p>

<highlight lang="html">&lt;iframe src=&quot;https://site.com&quot; width=&quot;600&quot; height=&quot;450&quot;&gt;&lt;/iframe&gt;</highlight>

<dots></dots>


<grostitre>Classe & ID</grostitre>

<p>Comme toute balise HTML, il est possible d'attribuer une classe ou un id à un iFrame afin de pouvoir le manipuler en CSS ou JavaScript par la suite.</p>

<highlight lang="html">&lt;iframe src=&quot;https://site.com&quot; class=&quot;demo&quot;&gt;&lt;/iframe&gt;</highlight>

<dots></dots>


<grostitre>Loading</grostitre>

<p>L'attribut <incode>loading</incode> permet d'indiquer la priorité de chargement d'un iFrame. Par défaut, le navigateur tente de charger tous les iFrames en accordant une légère priorité à ceux visibles au chargement de la page dans la fenêtre. Cependant il est possible de lui spécifier différentes valeurs:</p>

<ul>
    <li><incode>auto</incode> comportement normal, soit l'équivalent de ne pas mettre l'attribut.</li>
    <li><incode>lazy</incode> attendre que le iFrame soit sur le point d'être visible avant de le chargé. Donc si un usager ne fait jamais défiler la page jusqu'à celui-ci, le iFrame ne sera jamais chargé. Cette option permet d'accélérer le chargement de la page 🏁.</li>
    <li><incode>eager</incode> indique de charger le iFrame le plus rapidement possible, peu importe sa position dans la page.</li>
</ul>

<highlight lang="html">&lt;iframe src=&quot;https://site.com&quot; loading=&quot;lazy&quot;&gt;&lt;/iframe&gt;</highlight>

<dots></dots>


<grostitre>Utilisation</grostitre>

<p>Les iFrames sont particulièrement utiles afin d'incorporer certains éléments appartenant à d'autres sites. Par exemple:</p>

<ul>
    <li>Les cartes Google Map 📍</li>
    <li>Les vidéos Youtube et Viméo 🎬</li>
    <li>Les aperçus de page de plusieurs réseaux sociaux <em>(Facebook, Twitter, etc.)</em></li>
</ul>

<p>Par exemple, le code suivant imbrique une carte situant le collège Montmorency:</p>

<highlight lang="html">&lt;iframe src=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2793.5485899861956!2d-73.72064708431346!3d45.559405635106366!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4cc9223815890e79%3A0xe7408a77564697c4!2sColl%C3%A8ge%20Montmorency!5e0!3m2!1sfr!2sca!4v1617136763120!5m2!1sfr!2sca&quot; 
        width=&quot;600&quot; 
        height=&quot;450&quot; 
        loading=&quot;lazy&quot;&gt;&lt;/iframe&gt;</highlight>

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2793.5485899861956!2d-73.72064708431346!3d45.559405635106366!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4cc9223815890e79%3A0xe7408a77564697c4!2sColl%C3%A8ge%20Montmorency!5e0!3m2!1sfr!2sca!4v1617136763120!5m2!1sfr!2sca" width="600" height="450" style="border:0;  width: 770px; aspect-ratio: 3/2; margin-left: -25px; margin-right: -25px;" allowfullscreen="" loading="lazy"></iframe><br><br>

<doclink href="https://developer.mozilla.org/fr/docs/Web/HTML/Element/iframe">iFrame</doclink>
<doclink href="https://www.w3schools.com/tags/tag_iframe.ASP">iFrame</doclink>

<dots></dots>









