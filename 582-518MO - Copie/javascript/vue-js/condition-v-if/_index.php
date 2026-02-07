<?php 
/**
 * @type     article
 * @title    Conditions v-if
 * @icon     ../images/icon.webp
 * @abstract Le rendu conditionnel ou autre condition d'affichage
 * @index    86
 * @ref      web/cadriciels/vuejs
 */
?>



<grostitre>Rendu conditionnel</grostitre>

<p>Certains éléments sont pertinents à afficher uniquement lorsqu'ils contiennent une valeur.</p>

<p>Par exemple, une bulle permettant d'afficher la date de naissance d'une personne n'est désirable que s'il y a une date à afficher. Si cette information n'est pas fournie, avoir une bulle vide est indésirable:</p>

<highlight lang="html">&lt;div class=&quot;bubble&quot; v-if=&quot;birth&quot;&gt;{ { birth } }&lt;/div&gt;</highlight>

<small style="color: #999; font-size: 70%;">Ne pas mettre un espace entre les deux accolades ouvrantes ni entre les deux accolades fermantes.</small>
<br><br><br>

<codepen id="OJrKZbw" tab="html,result" height="700"></codepen>

<doclink href="https://v3.vuejs.org/guide/conditional.html">Rendu conditionnel</doclink>




<dots></dots>
<grostitre>Autre condition</grostitre>

<p>Outre le fait de vérifier si une donnée est vide ou non, il est aussi possible d'ajouter une condition de comparaison directement dans <em>v-if</em>.</p>

<p>Par exemple:</p>

<highlight lang="html">&lt;div class=&quot;bubble&quot; v-if=&quot;birth>=2000&quot;&gt;{ { birth } }&lt;/div&gt;</highlight>
<small style="color: #999; font-size: 70%;">Ne pas mettre un espace entre les deux accolades ouvrantes ni entre les deux accolades fermantes.</small>

<p>Ou encore comparer la valeur de deux paramètres:</p>

<highlight lang="html">&lt;div class=&quot;bubble&quot; v-if=&quot;firstName==lastName&quot;&gt;{ { firstName } }&lt;/div&gt;</highlight>
<small style="color: #999; font-size: 70%;">Ne pas mettre un espace entre les deux accolades ouvrantes ni entre les deux accolades fermantes.</small>

