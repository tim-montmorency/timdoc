<?php
/**
 * @type     article
 * @title    Formulaire
 * @icon     images/icon.png
 * @abstract text, label, form, submit
 * @ref      web/html
 */
?>

<p class="spacer">Les formulaires sont un incontournable du web, ils sont présents sur la majorité des sites et sont constitués de plusieurs balise. Voyons quelques une des balises de base permettant de réaliser un formulaire.</p>

<dots></dots>


<grostitre>Input text</grostitre>

<p>Génère un champ texte sur une seule ligne. Ce champ est parfait pour les informations textuelles à caractère généralistes.</p>

<em><p>Le type <incode>text</incode> est le type par défaut de la balise <incode>&lt;input&gt;</incode>.</em> Si aucun type n'est spécifié ou que le <incode>type</incode> utilisé n'est pas reconnu par le navigateur, celui-ci assumera automatiquement qu'il s'agit d'un champ texte.</p>

<codepen id="BaPEVEy" tab="html,result" height="200"></codepen>

<doclink href="https://developer.mozilla.org/fr/docs/Web/HTML/Element/input/text">input text</doclink>
<doclink href="https://www.w3schools.com/tags/att_input_type_text.asp">input text</doclink>

<p>Plusieurs attributs sont disponibles sur les champs texte. Voyons quelques-uns des plus populaires.</p>

<h3>Value</h3>

<em>
    <p>L'attribut <incode>value</incode> permet de définir la valeur par défaut d'un champ.</p>
</em>

<p>Par exemple, si des répondants doivent indiquer leur pays de résidence et que la majorité répondront Canada  🇨🇦, il est possible de prépopuler le formulaire avec cette valeur.</p>

<codepen id="mdjgjVb" tab="html,result" height="200"></codepen>

<doclink href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/input#htmlattrdefvalue">value</doclink>
<doclink href="https://www.w3schools.com/tags/att_input_value.asp">value</doclink>

<h3>Placeholder</h3>

<em><p>L'attribut <incode>placeholder</incode> permet d'afficher un exemple de valeur possible à saisir dans le champ.</em> Bien que visible, cette valeur n'est pas réellement présente dans le champ contrairement à l'attribut <incode>value</incode>. Qui plus est, cette valeur disparaitra dès que l'utilisateur commencera à inscrire une nouvelle valeur.</p>

<p>Par exemple, pour indiquer que le nom du pays est requis et que le nom complet est désiré <em>(Canada)</em> et non l'abréviation <em>(Can)</em>, il est possible d'utiliser cet attribut.</p>

<codepen id="dyjLjWB" tab="html,result" height="200"></codepen>

<doclink href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/input#attr-placeholder">placeholder</doclink>
<doclink href="https://www.w3schools.com/tags/att_input_placeholder.asp">placeholder</doclink>

<h3>Readonly</h3>

<em><p>L'attribut <incode>readonly</incode> permet d'indiquer à l'aide d'un booléen <em>(true/false)</em> si un champ est en lecture seule <em>(impossible à modifier)</em>.</em> Si l'attribut <incode>readonly</incode> est ajouté sans booléen, le navigateur considèrera que le champ est en lecture seule, soit un équivalent de <incode>readonly="true"</incode>.</p>

<p>Par exemple, un formulaire de modification de profil permettant de mettre à jour ses informations personnelles et de voir son nom d'usager, mais ne permettant pas de modifier ce dernier.</p>

<codepen id="abjrdor" tab="html,result" height="200"></codepen>

<doclink href="https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes/readonly">readonly</doclink>
<doclink href="https://www.w3schools.com/tags/att_input_readonly.asp">readonly</doclink>

<h3>Required</h3>

<em><p>L'attribut <incode>required</incode> permet d'indiquer à l'aide d'un booléen <em>(true/false)</em> si un champ est requis.</em> Si l'attribut required est ajouté sans booléen, le navigateur considèrera que le champ est requis, soit un équivalent de <incode>required="true"</incode>.</p>

<p>Par exemple, un champ non requis vs un champ requis:</p>

<codepen id="VwBOeYv" tab="html,result" height="200"></codepen>

<doclink href="https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes/required">required</doclink>
<doclink href="https://www.w3schools.com/tags/att_input_required.asp">required</doclink>

<h3>Minlength & Maxlength</h3>

<em>
    <p>Les attributs <incode>minlength</incode> & <incode>maxlength</incode> permettent de définir un nombre minimal et maximal de caractères pouvant-être inscrit dans un champ.</p>
</em>

<p>Par exemple, un champ de code postal acceptant de 3 à 6 caractères:</p>

<codepen id="PoBvZqm" tab="html,result" height="200"></codepen>

<doclink href="https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes/minlength">minlength</doclink>
<doclink href="https://www.w3schools.com/tags/att_input_minlength.asp">minlength</doclink>
<doclink href="https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes/maxlength">maxlength</doclink>
<doclink href="https://www.w3schools.com/tags/att_input_maxlength.asp">maxlength</doclink>

<dots></dots>


<grostitre>Label</grostitre>

<em>
    <p>Les libellés ou <incode>&lt;label&gt;</incode> permettent d'indiquer le rôle d'un élément <em>(ex: un champ texte)</em> au sein d'un formulaire.
</em> Le libellé peut être associé à un élément de formulaire via l'attribut <incode>for</incode> ou encore en plaçant l'élément de formulaire à l'intérieur même de la balise <incode>&lt;label&gt;</incode>.<p>

<p>Par exemple, les deux méthodes suivantes de définition de libellé sont valides:</p>

<codepen id="BaPejjd" tab="html,result" height="340"></codepen>

<h3>For</h3>

<em>
    <p>L'attribut <incode>for</incode> permet d'associer un élément avec son libellé.
</em> Pour se faire, sa valeur doit correspondre au <incode>id</incode> de l'élément qu'il désigne.</p>

<info>Lorsqu’un libellé est cliqué, le focus est automatiquement attribué à l’élément qu’il désigne.</info>

<doclink href="https://developer.mozilla.org/fr/docs/Web/HTML/Element/Label">label</doclink>
<doclink href="https://www.w3schools.com/tags/tag_label.asp">label</doclink>

<dots></dots>


<grostitre>Form</grostitre>

<em>
    <p>La balise <incode>&lt;form&gt;</incode> regroupe tous les éléments d'un formulaire.</p>
</em>

<codepen id="GRBaoqW" tab="html,result" height="340"></codepen>

<h3>Attributs de form</h3>

<ul>
    <li><incode>action</incode> permets de spécifier l'url où les informations du formulaire doivent être soumises.</li>
    <li>
        <incode>method</incode> <u>méthode http</u> utilisée par le navigateur afin de soumettre le formulaire. Ses valeurs peuvent-être
        <ul>
            <li><incode>GET</incode> <em>(par défaut)</em> stock les informations du formulaire dans l'URL après le symbole <incode>?</incode>.</li>
            <li><incode>POST</incode> envois les informations du formulaire dans la requête soumise à la page. Les informations ne sont donc pas visibles.</li>
        </ul>
    </li>
</ul>

<warning>Il est impossible d’avoir un formulaire à l’intérieur d’un autre formulaire.</warning>

<doclink href="https://developer.mozilla.org/fr/docs/Web/HTML/Element/Form">form</doclink>
<doclink href="https://www.w3schools.com/tags/tag_form.asp">form</doclink>

<dots></dots>


<grostitre>Input submit</grostitre>

<em>
    <p>Génère un bouton permettant de soumettre un formulaire.</p>
</em>

<codepen id="BaPeLpm" tab="html,result" height="340"></codepen>

<h3>Value</h3>

<p>L'attribut <incode>value</incode> définit le texte à l'intérieur du bouton généré.</p>

<doclink href="https://developer.mozilla.org/fr/docs/Web/HTML/Element/Input/submit">input submit</doclink>
<doclink href="https://www.w3schools.com/tags/att_input_type_submit.asp">input submit</doclink>

<dots></dots>

<exercice href="exercices/carte-de-credit/"></exercice>

<dots></dots>