<?php
/**
 * @type     article
 * @title    Z-index
 * @icon     images/icon.webp
 * @abstract Order d'apparition des éléments dans le flux
 */
?>

<p class="spacer">Par défaut, le flux de la page, ou en anglais <em>page flow</em>, fait en sorte qu'une balise HTML se positionne toujours par-dessus celles qui la précède. Ainsi, dans le cas où deux balises se superposent, celle apparaissant en dernier dans le code affichera par-dessus la première.</p>

<codepen id="wvxxmbW" tab="result" height="340"></codepen>

<p>Il est cependant possible de modifier l'ordre d'empilement des balises en spécifiant une valeur de <incode>z-index</incode>. Attention, seules les balises ayant la propriété CSS <incode>position</incode> de défini à une valeur autre que <incode>static</incode> sont impactés par <incode>z-index</incode>.</p>

<p>Dans l'exemple ci-dessous, <incode>z-index: 1</incode> est ajouté à l'élément vert 🟩. Remarquez cependant comment cette propriété n'a aucun effet tant qu'une position n'est pas définie.</p>

<codepen id="MWBBVMr" tab="result" height="340"></codepen>

<dots></dots>


<grostitre>Contexte d'empilement</grostitre>

<p>Les éléments partageant un même parent peuvent être déplacés en avant ou en arrière les uns des autres grâce à <incode>z-index</incode>, c'est ce que l'on appelle le contexte d'empilement.</p>

<p>Cependant, quand un parent à une position autre que <incode>static</incode> de défini, il créer un nouveau contexte d'empilement pour ses enfants. Ce contexte limite la portée du <incode>z-index</incode> des enfants à ce parent. Autrement dit, si le carré bleu est par-dessus le carré vert et que ce dernier contient un carré rouge, même si ce carré avait un z-index d'un million, celui-ci resterait sous le carré bleu puisque son contexte d'empilement est limité à son parent, soit le carré vert.</p>

<doclink href="https://developer.mozilla.org/fr/docs/Web/CSS/z-index">z-index</doclink>
<doclink href="https://www.w3schools.com/cssref/pr_pos_z-index.asp">z-index</doclink>

<dots></dots>

<exercice href="exercices/mains-de-monstres/"></exercice>

<dots></dots>

