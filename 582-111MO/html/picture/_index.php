<?php
/**
 * @type     article
 * @title    Picture
 * @icon     images/icon.png
 * @abstract Définir plusieurs sources à une image
 */
?>

<p class="spacer">La balise <incode>&lt;picture&gt;</incode> permet de définir plusieurs sources à une balise <incode>&lt;img&gt;</incode>. Cet fonctionnalité permet de spécifier certaines sources d'images mieux adaptées à l'écran de l'utilisateur.</p>

<p>Par exemple, une balise <incode>&lt;img&gt;</incode> de base est utilisée à gauche. Remarquez comment le sujet perd de son importance lorsqu'il est affiché dans un format étroit. Tandis qu'à droite, une balise <incode>&lt;picture&gt;</incode> permet de changer la source de ladite image afin d'afficher une version au cadrage plus serré sur le sujet lorsque l'écran est étroit.</p>

<codepen id="yLqGpYN" tab="result"></codepen>

<span class="remark">Jean Leloup<br>
Photo: Valérian Mazataud <a target="_blank" href="https://www.ledevoir.com/culture/musique/554861/jean-leloup">Le Devoir</a>
</span>

<p>Pour définir une <incode>&lt;picture&gt;</incode> de base, il suffit de spécifier une balise <incode>&lt;img&gt;</incode> à l'intérieur de celle-ci.</p>

<p>Par exemple:</p>

<highlight lang="html">&lt;picture&gt;
  &lt;img src="img.jpg"&gt;
&lt;/picture&gt;</highlight>

<p>Cet exemple minimaliste affichera toujours la balise <incode>&lt;img&gt;</incode> avec son contenu original inclus dans l'attribut <incode>src</incode>. Bref, l'incorporation de la balise <incode>&lt;picture&gt;</incode> n'aura aucun effet.</p>

<warning>Il ne peut y avoir qu’une seule balise <incode>&lt;img&gt;</incode> à l’intérieur d’une balise <incode>&lt;picture&gt;</incode>.</warning>

<dots></dots>


<grostitre>Sources & conditions</grostitre>

<p>Il est possible de spécifier une ou plusieurs sources alternatives grâce à la balise <incode>&lt;source&gt;</incode>.</p>

<p>Par exemple:</p>

<highlight lang="html">&lt;picture&gt;
    &lt;source srcset=&quot;img-large.jpg&quot; media=&quot;(min-width: 1000px)&quot;&gt;
    &lt;img src=&quot;img.jpg&quot;&gt;
&lt;/picture&gt;</highlight>

<p>Lorsque des <incode>&lt;source&gt;</incode> sont présentes, le navigateur les parcours une à la suite de l&#39;autre et dès qu&#39;une d&#39;entre elles voit sa condition être respectée, la valeur de son <incode>srcset</incode> est attribuée au <incode>src</incode> de la balise <incode>&lt;img&gt;</incode> voisine.</p>

<p>Bref, si l'écran à une largeur équivalente ou supérieure à 1000px, <incode>img-large.jpg</incode> sera affichée, sinon <incode>img.jpg</incode> sera utilisée.</p>

<p>Il est possible d'utiliser l'ensemble des conditions offertes dans les <a href="../../css/media-queries/">média queries CSS</a>.</p>

<warning>Les balises <incode>&lt;source&gt;</incode> doivent-être inscrites avant la balise <incode>&lt;img&gt;</incode>.</warning>

<dots></dots>


<grostitre>Utilité</grostitre>

<ul>
    <li>Recadrer une image selon l'espace disponible.</li>
    <li>Afficher une image dans une résolution correspondant à celle de l'écran de l'utilisateur.</li>
    <li>Afficher des images mieux agencées au thème de l'utilisateur foncé ou clair.</li>
    <li>Éviter d'afficher des GIFs animés aux individus ayant spécifiés préférer éviter autant que possible les animations.</li>
    <li>Fournir une image optimisée pour l'impression.</li>
</ul>

<doclink href="https://developer.mozilla.org/fr/docs/Web/HTML/Element/picture">picture</doclink>
<doclink href="https://www.w3schools.com/tags/tag_picture.asp">picture</doclink>

<dots></dots>


<exercice href="exercices/ant-man/"></exercice>

<dots></dots>





