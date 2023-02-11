<?php
/**
 * @type     article
 * @title    Formulaire intermédiaire
 * @icon     images/icon.png
 * @abstract radio, checkbox, select, textarea
 */
?>

<p class="spacer">Heureusement, les formulaires ne se limitent pas aux <incode>&lt;input type=&quot;text&quot;&gt;</incode>. Ils acceptent une variété de champs adaptés a différents type d'information. Voyons quelques-uns de ces champs.</p>

<dots></dots>


<grostitre>Checkbox</grostitre>

<p>Les boîtes à cocher permettent de définir individuellement un statut booléen <em>(true/false)</em> pour une option ☑. Leur usage est approprié lorsque des choix optionnels sont disponibles.</p>

<p>Par exemple, si des options en extra sont offertes sur une pizza 🍕</p>

<codepen id="KKBORzq" tab="html,result" height="340"></codepen>

<h3>Attributs de checkbox</h3>

<ul>
    <li><incode>name</incode> nom de référence lorsque le formulaire est soumis.</li>
    <li><incode>checked</incode> permet de spécifier à l'aide d'un booléen <em>(true/false)</em> si l'option devrait être cochée ou non. Si aucune valeur n'est attribuée, la simple présence de l'attribut suffit à cocher l'élément.</li>
</ul>

<info>
    Lorsqu’une boite à cocher est cochée, la pseudo-classe <incode>:checked</incode> est ajoutée à l’élément, permettant ainsi de modifier l’apparence de l’élément en fonction de son statut.
    <br><br>
    Par exemple: <incode>.checkbox:checked { outline: solid 5px green; }</incode>
</info>

<ul>
    <li><incode>value</incode> cet attribut est optionnel. S'il n'est pas spécifié et que l'option <em>Olives</em> est cochée, la soumission du formulaire retourne <incode>olives: "on"</incode>. Si une <incode>value</incode> est spécifiée, comme dans le cas de l'option <em>Oignons</em>, le formulaire retourne <incode>oignons: "oui svp"</incode>.</li>
    <li><incode>disabled</incode> permet d'afficher en lecture seule une boite à cochée afin d'indiquer que bien qu'elle soit normalement disponible, elle ne l'est pas en ce moment.</li>
</ul>

<warning>Contrairement aux autres <incode>&lt;input&gt;</incode>, les boîtes à cocher ne sont incluses dans les soumissions du formulaire uniquement si celles-ci sont cochées ✅.</warning>

<exercice href="exercices/menu-hamburger/"></exercice>

<doclink href="https://developer.mozilla.org/fr/docs/Web/HTML/Element/input/checkbox">input checkbox</doclink>
<doclink href="https://www.w3schools.com/tags/att_input_type_checkbox.asp">input checkbox</doclink>

<dots></dots>


<grostitre>Radio</grostitre>

<p>Les boutons radio permettent de choisir <strong>une seule option</strong> parmi un groupe 🔘. Leur usage est approprié lorsque peu d'options sont disponibles ou qu'il est important que l'usager puisse voir toutes les options disponibles.</p>

<p>Par exemple, si seulement une option de pizza 🍕 peut-être sélectionnée:</p>

<codepen id="mdjNzpB" tab="html,result" height="340"></codepen>

<h3>Attributs de radio</h3>

<ul>
    <li><incode>name</incode> tous les boutons radio partageant le même <incode>name</incode> font partie d'un même groupe. Seul une option/un bouton radio parmi ce groupe peut être sélectionnée à la fois.<br><br>Par exemple, il est impossible de sélectionner les options <em>Végétarienne</em> et <em>Toute garnie</em> en même temps, puisqu'elles font toutes deux partie du groupe <incode>pizza</incode>.</li>
    <li><incode>checked</incode> permet de spécifier à l'aide d'un booléen <em>(true/false)</em> si l'élément doit-être sélectionné. Si aucune valeur n'est attribuée, la simple présence de l'attribut suffit à sélectionner l'élément.</li>
</ul>

<info>
    La présence ou absence de cet attribut est aussi utilisée en CSS afin d’appliquer des styles différents en fonction du statut de l’élément.
    <br><br>
    Par exemple: <incode>.radio:checked { outline: solid 5px green; }</incode>
</info>

<ul>
    <li><incode>value</incode> indique la valeur associée au bouton radio. Ainsi lorsque le formulaire est soumis, la valeur associée au <incode>name</incode> est celle de l'élément <incode>checked</incode>.<br><br>Par exemple, si le formulaire est soumis sans que les boutons radio soient touchés, la valeur reçue sera <incode>pizza: "toute-garnie"</incode>.</li>
    <li><incode>disabled</incode> permet d'afficher en lecture seule une option afin d'indiquer que bien qu'elle soit normalement disponible, celle-ci ne l'est pas en ce moment.</li>
</ul>

<exercice href="exercices/dragonball/"></exercice>

<doclink href="https://developer.mozilla.org/fr/docs/Web/HTML/Element/input/radio">input radio</doclink>
<doclink href="https://www.w3schools.com/tags/att_input_type_radio.asp">input radio</doclink>

<dots></dots>


<grostitre>Select</grostitre>

<p>Les <incode>&lt;select&gt;</incode> permettent de choisir une seule option parmi un groupe 🔽. Leur usage est approprié lorsque plusieurs options sont disponibles et qu'il n'est pas nécessaire pour l'usager de tous les voir.</p>

<p>Par exemple, pour choisir une plage horaire de livraison, il n'est pas nécessaire une fois sa plage trouvée de voir les autres options:</p>

<codepen id="JjBgmeb" tab="html,result" height="340"></codepen>

<h3>Attributs de select</h3>

<ul>
    <li><incode>name</incode> nom de référence lorsque le formulaire est soumis.</li>
    <li><incode>multiple</incode> permet la sélection de plusieurs options.</li>
    <li><incode>disabled</incode> permet d'afficher en lecture seule le <incode>&lt;select&gt;</incode>.</li>
</ul>

<h3>Attributs d'option</h3>

<ul>
    <li><incode>value</incode> indique la valeur associée au <incode>&lt;select&gt;</incode>. Ainsi lorsque le formulaire est soumis, la valeur associée au <incode>name</incode> est celle de l'option sélectionnée.</li>
    <li><incode>selected</incode> permet de spécifier à l'aide d'un booléen <em>(true/false)</em> si l'option devrait être sélectionnée. Si aucune valeur n'est attribuée, la simple présence de l'attribut suffit à sélectionner l'élément.</li>
    <li><incode>disabled</incode> permet d'afficher en lecture seule une option en particulier. Par exemple, la page horaire 15h dans l'exemple précédent est visible, mais n'est pas sélectionnable.</li>
</ul>

<exercice href="exercices/twitter/"></exercice>

<doclink href="https://developer.mozilla.org/fr/docs/Web/HTML/Element/select">select</doclink>
<doclink href="https://www.w3schools.com/tags/tag_select.asp">select</doclink>

<dots></dots>


























