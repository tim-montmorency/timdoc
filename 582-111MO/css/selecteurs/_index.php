<?php
/**
 * @type     article
 * @title    Sélecteurs
 * @icon     images/icon.png
 * @abstract balise, #, ., combinaison, descendant
 * @ref      web/css
 */
?>


<p class="spacer">Les sélecteurs CSS permettent de cibler des éléments dans une page afin de leur appliquer des styles. Ainsi il est possible d'améliorer leur lisibilité ou de leur donner une personnalité.</p>


<grostitre>Type</grostitre>

<p>Les sélecteurs de type ciblent les éléments en fonction d'une balise.<br><br>Par exemple, la règle suivante:</p>

<highlight lang="css">em { ... }</highlight>
<p>Permet de sélectionner les éléments utilisant la balise <span class="inline-code">&lt;em&gt;</span>.</p>

<codepen id="NWByMKE" height="220"></codepen>

<warning>Bien que cette méthode est fonctionnelle et simple, il est déconseillé de styler un élément en fonction de sa balise, afin de garder une distinction entre son rôle sémantique et son apparence.</warning>

<dots></dots>


<grostitre>ID</grostitre>

<p>Les sélecteurs d'identifiant unique ou ID, permettent de cibler un élément en fonction de son id.</p>

<p>Par exemple, la règle suivante:</p>

<highlight lang="css">#no1 { ... }</highlight>

<p>Permet de modifier l'apparence de l'élément ayant l'id <span class="inline-code">no1</span>.</p>

<codepen id="yLqvjjY" height="220"></codepen>

<warning>Styler un élément en fonction de son id est généralement une mauvaise idée. Même si un élément est unique actuellement, rien ne garantit qu’il le sera toujours.</warning>

<dots></dots>


<grostitre>Classe</grostitre>

<p>Les sélecteurs de classe ciblent les éléments partageant une classe commune.</p>

<p>Par exemple, la règle suivante:</p>

<highlight lang="css">.element { ... }</highlight>

<p>Permet de sélectionner tous les éléments partageant la classe <span class="inline-code">element</span>.</p>

<codepen id="GRBQGwp" height="220"></codepen>

<info>Les classes existent spécifiquement pour styliser des éléments. Elles sont performantes, flexibles et réutilisables. Utilisez-les!</info>

<dots></dots>


<grostitre>Combinaisons</grostitre>

<p>Lorsque deux sélecteurs sont <strong>collés</strong> <em>(sans espace entre eux)</em>, seuls les éléments possédant <strong>les deux sélecteurs</strong> sont retournés.</p>

<p>Par exemple, la règle suivante:</p>

<highlight lang="css">span.element { ... }</highlight>

<p>Permet de sélectionner les éléments avec la classe <span class="inline-code">.element</span>, mais uniquement si la classe est appliquée sur un<span class="inline-code">&lt;span&gt;</span>.</p>

<codepen id="bGjLKPW" height="220"></codepen>

<p>Un élément peut avoir plusieurs classes.</p>

<p>Par exemple, <span class="inline-code">&lt;div class="msg important"&gt;</span> cet élément possède la classe <span class="inline-code">.msg</span>, ainsi que la classe <span class="inline-code">.important</span>. Il est donc possible de sélectionner uniquement les messages qui possèdent ces deux classes avec <span class="inline-code">.msg.important { ... }</span>.</p>

<dots></dots>


<grostitre>Descendants</grostitre>

<p>À l'opposée des <a href="#combinaisons">combinaisons</a>, les descendants ont un <strong>espace entre les sélecteurs</strong> permettant ainsi d'indiquer que seuls les descendants du premier sélecteur devraient être ciblés.</p>

<p>Par exemple, la règle suivante:</p>

<highlight lang="css">.group .element { ... }</highlight>

<p>Permet de sélectionner les éléments avec la classe <span class="inline-code">.element</span>, mais uniquement s'ils sont enfants d'une balise possédant la classe <span class="inline-code">.group</span>.</p>

<codepen id="YzjejGw" height="220"></codepen>

<p>Dans l'exemple précédent, <span class="inline-code">.group</span> est ce que l'on appel le parent de <span class="inline-code">.element</span>.</p>

<p>Cependant, plusieurs balises auraient pu séparer <span class="inline-code">.group</span> de ses descendants <span class="inline-code">.element</span> sans problème. Tout comme plusieurs générations peuvent séparer une personne de ses ancètres, elle n'en reste pas moins sa descendance.</p>

<dots></dots>

<tool href="tools/selectors-explained"></tool>

<exercice href="exercices/css-diner"></exercice>

<dots></dots>