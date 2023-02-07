<?php
/**
 * @type     article
 * @title    Formulaire
 * @icon     images/icon.png
 * @abstract text, label, form, submit
 */
?>

<p class="spacer">Les formulaires sont un incontournable du web, ils sont présents sur la majorité des sites et sont constitués de plusieurs balise. Voyons quelques une des balises de base permettant de réaliser un formulaire.</p>

<dots></dots>


<grostitre>Input text</grostitre>

<p>Génère un champ texte sur une seule ligne. Ce champ est parfait pour les informations textuelles à caractère généralistes.</p>

<p>Le type <incode>text</incode> est le type par défaut de la balise <incode>&lt;input&gt;</incode>. Si aucun type n'est spécifié ou que le <incode>type</incode> utilisé n'est pas reconnu par le navigateur, celui-ci assumera automatiquement qu'il s'agit d'un champ texte.</p>

<codepen id="BaPEVEy" tab="html,result" height="200"></codepen>

<doclink href="https://developer.mozilla.org/fr/docs/Web/HTML/Element/input/text">input text</doclink>
<doclink href="https://www.w3schools.com/tags/att_input_type_text.asp">input text</doclink>

<p>Plusieurs attributs sont disponibles sur les champs texte. Voyons quelques-uns des plus populaires.</p>

<h3>Value</h3>

<p>L'attribut <incode>value</incode> permet de définir la valeur par défaut d'un champ.</p>

<p>Par exemple, si des répondants doivent indiquer leur pays de résidence et que la majorité répondront Canada  🇨🇦, il est possible de prépopuler le formulaire avec cette valeur.</p>

<codepen id="mdjgjVb" tab="html,result" height="200"></codepen>

<doclink href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/input#htmlattrdefvalue">value</doclink>
<doclink href="https://www.w3schools.com/tags/att_input_value.asp">value</doclink>

<h3>Placeholder</h3>

<p>L'attribut <incode>placeholder</incode> permet d'afficher un exemple de valeur possible à saisir dans le champ. Bien que visible, cette valeur n'est pas réellement présente dans le champ contrairement à l'attribut <incode>value</incode>. Qui plus est, cette valeur disparaitra dès que l'utilisateur commencera à inscrire une nouvelle valeur.</p>

<p>Par exemple, pour indiquer que le nom du pays est requis et que le nom complet est désiré <em>(Canada)</em> et non l'abréviation <em>(Can)</em>, il est possible d'utiliser cet attribut.</p>

<codepen id="dyjLjWB" tab="html,result" height="200"></codepen>

<p>Le style du placeholder est modifiable via le pseudo-élément <incode>::placeholder</incode>. Dans l'exemple précédent, afin de différencier le placeholder du texte normal, la couleur bleue lui est attribuée.</p>

<p>Tant que le <incode>placeholder</incode> est visible <em>(que l'usager n'a pas inscrit de nouvelle valeur)</em>, le champ aura la pseudo-classe <incode>:placeholder-shown</incode> permettant de changer l'apparence du champ. Dans l'exemple précédent, le champ à une bordure bleue tant qu'une nouvelle valeur n'est pas inscrite grâce à cette pseudo-classe.</p>

<doclink href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/input#attr-placeholder">placeholder</doclink>
<doclink href="https://www.w3schools.com/tags/att_input_placeholder.asp">placeholder</doclink>



