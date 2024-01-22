<?php
/**
 * @type     article
 * @title    Details & Summary
 * @icon     images/icon.png
 * @abstract Les balises &lt;details&gt; et &lt;summary&gt;
 * @ref      web/html
 */
?>

<p class="spacer">Les balises <incode>&lt;details&gt;</incode> et <incode>&lt;summary&gt;</incode> permettent d'afficher/masquer un contenu en fonction du clique de l'utilisateur, le tout sans même avoir recours à du JavaScript. Ces balises sont utilisées notamment pour créer des FAQ, des questions quiz, etc.</p>

<dots></dots>


<grostitre>Details</grostitre>

<p>La balise <incode>&lt;details&gt;</incode> sert à englober le contenu devant être affiché/masqué. Par défaut, le contenu est masqué et au clic de l'utilisateur, il se révèle.</p>

<p>Par exemple:</p>

<codepen id="abaomOG" tab="html,result" height="340"></codepen>

<p>Lorsque la balise <incode>&lt;details&gt;</incode> est ouverte, le navigateur lui ajoute l&#39;attribut <incode>open</incode>. Ainsi, il est possible de spécifier qu&#39;une balise <incode>&lt;details&gt;</incode> devrait être ouverte par défaut en lui ajoutant cet attribut.</p>

<p>Par exemple:</p>

<codepen id="MWqgjao" tab="html,result" height="340"></codepen>

<p>Il est aussi possible de se baser sur cet attribut afin de spécifier des styles différents selon si la balise <incode>&lt;details&gt;</incode> est ouverte ou fermée.</p>

<p>Par exemple, lui spécifier un fond vert, mais uniquement lorsque la balise est ouverte:</p>

<codepen id="oNPvzjQ" tab="html,result" height="340"></codepen>

<doclink href="https://developer.mozilla.org/fr/docs/Web/HTML/Element/details">details</doclink>
<doclink href="https://www.w3schools.com/tags/tag_details.asp">details</doclink>

<dots></dots>


<grostitre>Summary</grostitre>

<p>La balise <incode>&lt;summary&gt;</incode> placée à l'intérieur de la balise <incode>&lt;details&gt;</incode> permet de spécifier le texte affiché par défaut plutôt que la mention <em>"Details"</em>.</p>

<p>Par exemple:</p>

<codepen id="rNZBMxY" tab="html,result" height="340"></codepen>

<doclink href="https://developer.mozilla.org/fr/docs/Web/HTML/Element/summary">summary</doclink>
<doclink href="https://www.w3schools.com/tags/tag_summary.asp">summary</doclink>

<dots></dots>

<exercice href="exercices/quiz-marc-labreche/"></exercice>

<dots></dots>