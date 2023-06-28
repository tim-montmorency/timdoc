<?php
/**
 * @type     article
 * @title    Ancre
 * @icon     images/icon.png
 * @abstract balise &lt;a&gt;
 */
?>

<p>La balise d'ancre <incode>&lt;a&gt;</incode> permet de connecter différentes ressources entre elles. Elle est généralement utilisée afin d'établir un lien vers un autre site web ou encore vers une section d'une page, mais elle peut aussi déclencher l'ouverture d'une fenêtre de courriel, un appel téléphonique, le téléchargement de fichiers, etc.<br><br>

L'attribut <incode>href</incode> est l'attribut principal de la balise <incode>&lt;a&gt;</incode>. Il permet de définir la cible d'une ancre. Voyons cibles les plus courantes.</p>

<grostitre>Vers une page</grostitre>

<p>Pour faire un lien vers une page, il suffit de spécifier l'url du site en question dans le <incode>href</incode>.</p>

<p>Par exemple:</p>

<highlight lang="html">&lt;a href=&quot;https://site.com&quot;&gt;Site&lt;/a&gt;</highlight>

<h3 style="color: gold">Target</h3>

<p>Il est possible de choisir si un lien devrait s'ouvrir dans l'onglet courant du navigateur ou encore dans un onglet distinct. Pour ce faire, il suffit d'ajouter l'attribut <incode>target</incode> à une ancre.</p>

<ul>
    <li><incode>li_self</incode> <em>(par défaut)</em> ouvre dans le même onglet.</li>
    <li><incode>_blank</incode> ouvre dans un nouvel onglet.</li>
</ul>

<p>Par exemple:</p>

<highlight lang="html">&lt;a href=&quot;https://site.com&quot; target=&quot;_blank&quot;&gt;Site&lt;/a&gt;</highlight>

<dots></dots>

<grostitre>Vers une section de page</grostitre>

<p>Pour pointer vers une section de la page courante, il suffit dans le <incode>href</incode> de faire référence à l'id de l'élément désiré et de le préfixer avec un <incode>#</incode>.</p>

<p>Par exemple, pour qu'une ancre pointe vers l'élément ayant l'id section2, il est possible de faire:</p>

<highlight lang="html">&lt;a href=&quot;#section2&quot;&gt;Lien vers la section 2&lt;/a&gt;

&lt;div id=&quot;section1&quot;&gt;Section 1&lt;/div&gt;
&lt;div id=&quot;section2&quot;&gt;Section 2&lt;/div&gt;
&lt;div id=&quot;section3&quot;&gt;Section 3&lt;/div&gt;</highlight>

<p>Pour pointer vers une section d'une autre page, il suffit d'ajouter l'URL de la page en question avant le <incode>#</incode>.</p>

<p>Par exemple:</p>

<highlight lang="html">&lt;a href=&quot;https://site.com#section2&quot;&gt;Site&lt;/a&gt;</highlight>

<warning>Seul un id peut-être utilisé pour pointer vers un élément, car les autres sélecteurs peuvent faire référence à plusieurs éléments, tandis que celui-ci est unique.</warning>

<h3>Scroll-behavior</h3>

<p>Par défaut, lorsque l'on pointe vers une section de page, le navigateur saute directement au id ciblé. Cependant, il est possible de faire en sorte que la page défile vers le id en question en spécifiant la propriété <incode>scroll-behavior: smooth</incode> à l'élément HTML.</p>

<p>Par exemple, cliquez sur les boutons 1 et 2 pour sauter d'une section à l'autre et refaite le, mais en changeant la valeur de scroll-behavior.</p>

<codepen id="MWzpajX">Scroll-Behavior</codepen>

<dots></dots>

<grostitre>Composer un courriel ✉️</grostitre>

<p>L'attribut <incode>href</incode> peut aussi contenir une adresse courriel préfixée par: <incode>mailto:</incode> afin d'indiquer au service de courrielleur de l'usager <em>(Outlook, Gmail, etc.)</em> de générer un nouveau message prêt à être rédigé.</p>

<p>Par exemple:</p>

<highlight lang="html">&lt;a href=&quot;mailto:exemple@gmail.com&quot;&gt;Écrivez-moi!&lt;/a&gt;</highlight>

<dots></dots>

<grostitre>Démarrer un appel 📞</grostitre>

<p>L'attribut <incode>href</incode> peut aussi contenir un numéro de téléphone préfixée par: <incode>tel:</incode> afin d'indiquer que le système d'exploitation devrait devrait déclencher un appel au numéro mentionné si cette fonctionnalité est supportée par celui-ci.</p>

<p>Par exemple:</p>

<highlight lang="html">&lt;a href=&quot;tel:5551234567&quot;&gt;Appelez-moi!&lt;/a&gt;</highlight>

<info>Surtout pratique pour les appareils mobiles 📱</info>

<doclink href="https://developer.mozilla.org/fr/docs/Web/HTML/Element/a">a</doclink>
<doclink href="https://www.w3schools.com/tags/tag_a.asp">a</doclink>

