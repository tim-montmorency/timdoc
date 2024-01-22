<?php
/**
 * @type     article
 * @title    Formulaire avancé
 * @icon     images/icon.png
 * @abstract number, password, email, tel, date, etc.
 * @ref      web/html
 */
?>

<p class="spacer">En 2008, alors que HTML5 voyait le jour, les formulaires furent bonifiés avec de nouvelles balises simplifiant la vie des développeurs et des internautes. En voici quelques unes des plus communes parmi celles-ci.</p>

<dots></dots>

<grostitre>Number</grostitre>

<p>Parfait pour les valeurs numériques 🔢, ce champ empêche l'usager d'entrer des valeurs alphabétique et ajoute des flèches permettant d'incrémenter / décrémenter le nombre saisi ↕️.</p>

<p>Il permet entre autre d'éviter qu'un usager entre le texte <em>"deux"</em> plutôt que le chiffre <em>"2"</em> afin d'indiquer le nombre de pizzas désirées.</p>

<codepen id="PoBMXjZ" tab="html,result" height="340"></codepen>

<span class="remark">Remarquez les flèches qui apparaissent lorsque le champs est survolé.</span>

<h3>Attributs de number</h3>

<ul>
    <li><incode>name</incode> nom de référence lorsque le formulaire est soumis.</li>
    <li><incode>min</incode> et <incode>max</incode> permettent de spécifier un nombre minimal et maximal à respecter.</li>
    <li><incode>step</incode> définit la granularité. Autrement dit, le saut entre chaque valeur. Par défaut, la valeur de step est à 1. Cependant, il est possible de modifier cette valeur. Par exemple, <incode>step: 2</incode> fait en sorte que les valeurs 0, 2, 4, 6, 8 et 10 sont possibles, mais non la valeur 9.</li>
    <li><incode>disabled</incode> permet d'afficher en lecture seule le champ number.</li>
</ul>

<h3>Mobile</h3>

<p>Sur mobile, lorsque ce champ reçoit le focus, un pavé numérique est affiché à la place du traditionnel clavier alphanumérique, simplifiant ainsi l'entrée de données à l'usager.</p>

<img src="images/input-number.jpg">

<doclink href="https://developer.mozilla.org/fr/docs/Web/HTML/Element/input/number">input number</doclink>
<doclink href="https://www.w3schools.com/tags/att_input_type_number.asp">input number</doclink>

<dots></dots>


<grostitre>Range</grostitre>

<p>Permets de choisir une valeur entre deux extrémités. Leur usage est approprié lorsqu'une valeur approximative est suffisante.</p>

<p>Par exemple, choisir plus ou moins de sauce sur une pizza est plus intuitif à l'aide de ce type de contrôle que de spécifier une quantité en millilitres🥫:</p>

<codepen id="dyjxwRB" tab="html,result" height="340"></codepen>

<h3>Attributs de range</h3>

<ul>
    <li><incode>name</incode> nom de référence lorsque le formulaire est soumis.</li>
    <li><incode>min</incode> et <incode>max</incode> permettent de spécifier un nombre minimal et maximal à respecter.</li>
    <li><incode>step</incode> définit la granularité. Autrement dit, le saut entre chaque valeur. Par exemple, <incode>step: 100</incode> fait en sorte que les valeurs 0, 100, 200, 300, etc. sont possibles, mais non la valeur 150.</li>
    <li><incode>disabled</incode> permet d'afficher en lecture seule un widget range.</li>
</ul>

<doclink href="https://developer.mozilla.org/fr/docs/Web/HTML/Element/input/range">input range</doclink>
<doclink href="https://www.w3schools.com/tags/att_input_type_range.asp">input range</doclink>

<dots></dots>


<grostitre>Password</grostitre>

<p>Comme son nom l'indique, ce champ conviens aux mots de passe 🔑. Il permet entre autre d'entrer son mot de passe en toute discrétion, puisque les caractères affichés à l'écran sont remplacés par des <incode>•</incode>.</p>

<codepen id="QWBezMg" tab="html,result" height="340"></codepen>

<h3>Mobile</h3>

<p>Sur mobile, les boutons 😀 et 🎙 sont retirés puisque la majorités des mots de passe ne supportent pas les émojis et que l'utilisation du dictaphone implique forcément de dire son mot de passe à voix haute, ce qui peut causer des enjeux de confidentialité.</p>

<img src="images/input-password.jpg" alt="">

<doclink href="https://developer.mozilla.org/fr/docs/Web/HTML/Element/Input/password">input password</doclink>
<doclink href="https://www.w3schools.com/tags/att_input_type_password.asp">input password</doclink>

<dots></dots>


<grostitre>Email</grostitre>

<p>Comme son nom l'indique, ce champ est conçu afin de gérer les courriels ✉️. Il ajoute automatiquement les pseudo-classes <incode>:valid</incode> et <incode>:invalid</incode> en fonction du texte qui lui est inséré, permettant ainsi d'ajuster le visuel du champ en CSS afin de fournir une rétroaction à l'utilisateur.</p>

<codepen id="xxJvmLm" tab="html,result" height="340"></codepen>

<warning>À moins d’être requis <em>(avoir l’attribut <incode>required</incode>)</em>, un champ de type email vide est considéré comme étant valide puisqu’il est théoriquement optionel.</warning>

<h3>Mobile</h3>

<p>Sur mobile, le bouton 🎙 du clavier est remplacé par les boutons <incode>@</incode> et <incode>.</incode> qui sont plus pratiques puisqu'ils sont systématiquement présent dans une adresse courriel.</p>

<img src="images/input-email.jpg">

<doclink href="https://developer.mozilla.org/fr/docs/Web/HTML/Element/input/email">input email</doclink>
<doclink href="https://www.w3schools.com/tags/att_input_type_email.asp">input email</doclink>

<dots></dots>


<grostitre>Tel</grostitre>

<p>Évidemment, ce champ est conçu pour les numéros de téléphone 📞. Les navigateurs suggèreront généralement des numéros précédemment entrés afin de faire sauver du temps à l'usager.</p>

<p>Contrairement au <a href="#email">champ de type email</a>, ce champ ne fait aucune validation par défaut, puisque les numéros de téléphone varient grandement de format d'un pays à l'autre.</p>

<codepen id="NWBQeap" tab="html,result" height="340"></codepen>

<h3>Attributs de tel</h3>

<ul>
    <li><incode>inputmode="decimal"</incode> affichent un pavé numérique agrémenté des symboles <incode>+*#</incode> sur les appareils mobile afin de simplifier la vie de l'usager.</li>
    <li><incode>disabled</incode> permet d'afficher en lecture seule le champ de téléphone.</li>
</ul>

<h3>Mobile</h3>

<p>Lorsque l'attribut <incode>inputmode="decimal"</incode> est ajouté au champs téléphone.</p>

<img src="images/input-tel.jpg">

<doclink href="https://developer.mozilla.org/fr/docs/Web/HTML/Element/input/tel">input tel</doclink>
<doclink href="https://www.w3schools.com/tags/att_input_type_tel.asp">input tel</doclink>

<dots></dots>


<grostitre>Search</grostitre>

<p>Ce champ est conçu pour les barres de recherche 🔍. Il ajoute automatiquement une croix permettant d'effacer rapidement le texte saisi ❌. ce qui s'avère souvent utile dans le cadre d'une recherche. Certains navigateurs proposent même une autocomplétition sur ces champs avec des valeurs précédemment utilisées.</p>

<codepen id="wvxVRPo" tab="html,result" height="340"></codepen>

<h3>Mobile</h3>

<p>Sur mobile, le clavier est pratiquement identique à celui par défaut outre la présence du bouton <incode>.</incode> qui est ajouté.</p>

<img src="images/input-search.jpg">

<doclink href="https://developer.mozilla.org/fr/docs/Web/HTML/Element/input/search">input search</doclink>
<doclink href="https://www.w3schools.com/tags/att_input_type_search.asp">input search</doclink>

<dots></dots>


<grostitre>Date</grostitre>

<p>Permets, comme son nom l'indique, de sélectionner une date dans un calendrier 📅.</p>

<codepen id="qByeLVw" tab="html,result" height="340"></codepen>

<h3>Attributs de date</h3>

<ul>
    <li><incode>min</incode> et <incode>max</incode> permettent de spécifier une date minimale et maximale à respecter. Par exemple, <incode>min="1980-01-01"</incode> fait en sorte qu'aucune date inférieure au 1er janvier 1980 ne puisse être sélectionnée.</li>
    <li><incode>disabled</incode> permet d'afficher en lecture seule l'outil de sélection de date.</li>
</ul>

<h3>Mobile</h3>

<p>Sur mobile, un calendrier ou une molette de date comme sur l'image suivante sera affiché.</p>

<img src="images/input-date.jpg">

<doclink href="https://developer.mozilla.org/fr/docs/Web/HTML/Element/input/date">input date</doclink>
<doclink href="https://www.w3schools.com/tags/att_input_type_date.asp">input date</doclink>

<dots></dots>


<grostitre>Time</grostitre>

<p>Permets de saisir une heure 🕰.</p>

<codepen id="poZMqpp" tab="html,result" height="340"></codepen>

<h3>Attributs de time</h3>

<ul>
    <li>Les attributs <incode>min</incode> et <incode>max</incode> permettent de spécifier une heure minimale et maximale à respecter. Par exemple, <incode>min="09:00"</incode> fait en sorte qu'aucune heure avant 9am ne puisse être sélectionnée.</li>
    <li><incode>disabled</incode> permet d'afficher en lecture seule l'outil de sélection d'heure.</li>
</ul>

<h3>Mobile</h3>

<p>Sur mobile, une horloge ou une molette d'heures comme sur l'image suivante sera affichée.</p>

<img src="images/input-time.jpg">

<doclink href="https://developer.mozilla.org/fr/docs/Web/HTML/Element/input/time">input time</doclink>
<doclink href="https://www.w3schools.com/tags/att_input_type_time.asp">input time</doclink>

<dots></dots>


<grostitre>Color</grostitre>

<p>Permet de choisir une couleur à l'aide d'un sélecteur de couleurs <em>(colors picker)</em> 🎨, plutôt que d'avoir a entrer un code hexadécimal, RGB ou autre.</p>

<codepen id="QWBezmM" tab="html,result" height="340"></codepen>

<h3>Attributs de color</h3>

<ul>
    <li><incode>name</incode> nom de référence lorsque le formulaire est soumis.</li>
    <li><incode>value</incode> code de la couleur par défaut. Si cet attribut est omis, la couleur utilisée par défaut sera <em>(noir ⬛️)</em>.</li>
    <li><incode>disabled</incode> permet d'afficher en lecture seule l'outil de sélection de couleur.</li>
</ul>

<doclink href="https://developer.mozilla.org/fr/docs/Web/HTML/Element/input/color">input color</doclink>
<doclink href="https://www.w3schools.com/tags/att_input_type_color.asp">input color</doclink>

<dots></dots>

<exercice href="exercices/among-us/"></exercice>

<dots></dots>





