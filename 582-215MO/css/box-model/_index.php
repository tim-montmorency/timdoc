<?php
/**
 * @type     article
 * @title    Box-model
 * @icon     images/icon.png
 * @abstract En CSS, chaque élément constituant une page est une boîte rectangulaire.
 */
?>

<p class="spacer">En CSS, chaque élément constituant une page est une boîte rectangulaire</p>

<p>Qu’il s’agisse d’un texte, d'une image ou encore de n’importe quel autre élément, une boîte rectangulaire l’englobe toujours. Ce concept est appelé le Box model 📦.</p>

<p>Par exemple, voici un extrait du site de Radio-Canada. Afin de démontrer que chaque élément est bel et bien une boite rectangulaire, une bordure jaune a été ajoutée en CSS à tous les éléments de ladite page.</p>

<img src="images/box-model-radio-canada.jpg">

<p>La boite en CSS est constituée de 4 parties:</p>

<ol>
  <li>Le <strong>contenu</strong> la zone de base définie par le texte/image ou encore le <incode>width</incode> et le <incode>height</incode>.</li>
  <li>La <strong>marge</strong> intérieure <incode>padding</incode> l’espace vide entre le contenu et sa bordure.</li>
  <li>La <strong>bordure</strong> <incode>border</incode> la bordure entourant l’élément. </li>
  <li>La <strong>marge extérieure</strong> <incode>margin</incode> l’espace entre la boîte et celles à proximité.</li>
</ol>

<img src="images/box-model.png">

<p>Par défaut, lorsque les propriétés <incode>width</incode> ou <incode>height</incode> sont attribuées à un élément, seules la largeur et la hauteur du contenu de l'élément sont impactées. Autrement dit, pour obtenir la dimension réelle de l'élément, il faut ajouter la marge intérieure <em>(padding)</em> et la bordure <em>(border)</em>.</p>

<warning>La marge extérieure n’affecte pas la dimension réelle d’un élément puisque cet espace se trouve à l’extérieur de celui-ci.</warning>

<p>Par exemple, si le contenu d'un élément a une largeur 200px et une marge intérieure <em>(padding)</em> de 50px, sa dimension réelle est donc de 300px.</p>

<table>
  <tr>
    <th>Valeur</th>
    <th>Propriété</th>
  </tr>
  <tr>
    <td>200px</td>
    <td>width</td>
  </tr>
  <tr>
    <td>50px</td>
    <td>padding-left</td>
  </tr>
  <tr>
    <td>50px</td>
    <td>padding-right</td>
  </tr>
  <tr>
    <td><strong>300px</strong></td>
    <td><strong>Total</strong></td>
  </tr>
</table>

<doclink href="https://developer.mozilla.org/fr/docs/Learn/CSS/Building_blocks/The_box_model">box-model</doclink>
<doclink href="https://www.w3schools.com/css/css_boxmodel.asp">box-model</doclink>

<dots></dots>

<exercice href="exercices/marc-seguin"></exercice>