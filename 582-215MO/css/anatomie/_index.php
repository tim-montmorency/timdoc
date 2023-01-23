<?php
/**
 * @type     article
 * @title    Anatomie d'une règle
 * @icon     images/icon.png
 * @abstract Structure, ancêtre, déclaration
 */
?>


<p class="spacer">Le but du CSS est d'indiquer au navigateur comment afficher différents éléments sur une page <em>(couleur, dimension, position, etc.)</em>. Pour ce faire, des règles CSS indiquant quels éléments devraient avoir quelle apparence sont utilisées.</p>

<p>Cet aspect peut paraitre simple, mais une règle CSS se découpe en divers sous-éléments. Afin d'éviter toute confusion et d'avoir des bases solide en CSS, il est préférable de connaitre la terminologie associée à ces sous-éléments.</p>

<dots></dots>


<grostitre>Règle CSS</grostitre>

<p>Une règle CSS est constituée d'un sélecteur CSS, d'accolades {…} et de tout ce qui se trouve entre elles.</p>

<p>Par exemple, voici une règle CSS simple:</p>

<highlight lang="css">p {
  font-size: 16px;
  font-family: Arial;
}</highlight>

<dots></dots>


<grostitre>Sélecteur</grostitre>

<p>Le sélecteur est ce qui se trouve avant l'accolade ouvrante. Il permet d'identifier quels éléments dans la page devraient être affectés par les styles se trouvant à l'intérieur desdites accolades.</p>

<p>Dans l'exemple précédent, <span class="inline-code">p</span> est le sélecteur indiquant que tous les paragraphes de la page devraient avoir une taille de police de 16px et utiliser la police Arial.</p>

<h2>Groupe de sélecteurs</h2>

<p>Un groupe de sélecteurs est le nom donné lorsque plusieurs sélecteurs sont présents avant une accolade.</p>

<p>Par exemple:</p>

<highlight lang="css">.article p {
  font-size: 16px;
  font-family: Arial;
}</highlight>

<p>Le groupe de sélecteurs dans l'exemple ci-dessus ☝️ est <span class="inline-code">.article p</span> indiquant que tous les paragraphes se trouvant à l'intérieur d'une balise ayant la classe <span class="inline-code">.article</span> doivent utiliser les styles entres définis entre accolades.</p>

<info>Dans un groupe de sélecteurs, les sélecteurs sont lus de droite à gauche ⬅️.<br><br>Autrement dit, dans l’exemple précédent, le navigateur sélectionnerait en premier temps tous les paragraphes de la page. Ensuite, il ne garderait que ceux ayant un ancêtre possédant la classe <span class="inline-code">.article</span>.</info>
<br>
<h2>Ancêtre</h2>

<p>Le ou les ancêtres sont les sélecteurs séparés par un espace se trouvant à gauche du dernier sélecteur.</p>

<p>Dans l'exemple précédent, il n'y a qu'un ancêtre, soit: <span class="inline-code">.article</span>. Autrement dit, seuls les paragraphes se trouvant à l'intérieur d'un élément HTML possédant cette classe seront ciblés par la règle CSS.</p>

<p>Un ancêtre est considéré comme étant un <strong>parent</strong> si le paragraphe est <strong>directement enfant</strong> de celui-ci.</p>

<p>Par exemple:</p>

<highlight lang="html">&lt;div class="article"&gt;
    &lt;p&gt;Lorem ipsum&lt;/p&gt;
&lt;/div&gt;</highlight>

<p>Dans la même lignée, un ancêtre peut être <strong>grands-parents si un seul élément les sépares</strong>.</p>

<p>Par exemple, la classe <span class="inline-code">.intro</span> est le parent et la classe <span class="inline-code">.article</span> est le grands-parents du paragraphe. Cependant <span class="inline-code">.intro</span> et .<span class="inline-code">article</span> sont tous deux des ancêtres du paragraphe.</p>

<highlight lang="html">&lt;div class="article"&gt;
    &lt;div class="intro"&gt;
        &lt;p&gt;Lorem ipsum&lt;/p&gt;
    &lt;/div&gt;
&lt;/div&gt;</highlight>

<p>Un sélecteur peut aussi être un <strong>arrière-grands-parents</strong> si <strong>deux éléments HTML les séparent</strong> et ainsi de suite.</p>


<info>
    Puisque les règles CSS sont lues de droite à gauche ⬅️, il n’est pas nécessaire de nommer tous les sélecteurs disponibles dans une règle CSS.
    <br><br>
    <span class="inline-code">.article p { ... }</span>
    sélectionenra tous les paragraphes à l’intérieur de l’élément avec la classe <span class="inline-code">.article</span>, même si <span class="inline-code">.intro</span> est omis.
</info>

<dots></dots>


<grostitre>Déclaration</grostitre>

<p>À l'intérieur des accolades se trouvent les instructions concernant l'apparence des éléments référencés par le sélecteur. Ces instructions portent le nom de <em>déclarations</em>.</p>

<p>Par exemple, le code suivant est une déclaration:</p>

<highlight lang="css">font-size: 16px;</highlight>

<p>L'ensemble des déclarations dans une règle CSS est quant à elle appelé un <strong>bloc de déclaration</strong>.</p>

<p>Par exemple:</p>

<highlight lang="css">font-size: 16px;
font-family: Arial;</highlight>

<dots></dots>

<grostitre>Propriété & Valeur</grostitre>

<p>Chaque <a href="#declaration">déclaration</a> est constituée d'une propriété et d'une valeur. La propriété étant le texte se trouvant avant les deux points <span class="inline-code">:</span> et indiquant l'aspect de l'élément devant être stylé.</p>


<p>Par exemple <span class="inline-code">font-size</span>, indiquant que la taille de la police des paragraphes doit-être altéré.</p>

<p>De l'autre côté du <span class="inline-code">:</span> se trouve la valeur. Par exemple, <span class="inline-code">16px</span> indiquant la taille à donner.</p>

<dots></dots>