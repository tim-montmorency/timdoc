<?php 
/**
 * @type     article
 * @title    Éléments de formulaire
 * @icon     ../images/icon.webp
 * @abstract v-model: une relation entre une donnée et les input, select etc.
 * @index    85
 * @ref      web/cadriciels/vuejs
 */
?>

<p><incode>v-model</incode> permet de créer une relation bidirectionnelle entre une donnée et un élément de formulaire <em>(input, select, textarea, etc.)</em>.</p>

<warning><incode>v-model</incode> ignore la valeur initiale attribuée à un élément de formulaire. La synchronisation entre l’élément et la donnée ne débute que lors de la première modification de&nbsp;l’élément.</warning>

<p><incode>v-model</incode> se base sur différentes propriétés afin d’attribuer une valeur à une donnée.</p>

<ul>
    <li><strong>Champ texte</strong>: l’attribut <incode>value</incode> du champs</li>
    <li><strong>Boîtes à cocher et boutons radio:</strong> l’attribut <incode>checked</incode></li>
    <li><strong>Menu déroulant: </strong>l’attribut <incode>value</incode> de l’option sélectionnée</li>
</ul>

<dots></dots>
<grostitre>Champ texte</grostitre>
<p>Les champs textes synchronisent la valeur contenue dans l'attribut <incode>value</incode> avec la donnée qui lui est associée dans l'app.</p>
<p>Par exemple, la donnée <incode>msg</incode> change de valeur en fonction du changement de value dans le champ suivant.
</p>

<highlight lang="html">&lt;input type=&quot;text&quot; v-model=&quot;msg&quot; /&gt;
&lt;h1&gt;{ { msg } }&lt;/h1&gt;</highlight>
<small style="color: #999; font-size: 70%;">Ne pas mettre un espace entre les deux accolades ouvrantes ni entre les deux accolades fermantes.</small>

<br><br>
<figure>
    <codepen id="vYbpNBN" tab="html,result" height="400"></codepen>
    <figcaption class="caption caption--codepen">
        Modifier la valeur dans le champ texte mettra à jour le titre sans besoin d’aucune fonction JavaScript.
    </figcaption>
</figure>



<br>
<doclink href="https://vuejs.org/guide/essentials/forms.html#text">Champs texte</doclink>







<dots></dots>
<grostitre>Boite à cocher</grostitre>
<p>Les boites à cocher synchronisent l’attribut <incode>checked</incode> avec la donnée qui leur est associée.</p>

<highlight lang="html">&lt;input type=&quot;checkbox&quot; v-model=&quot;msg&quot; /&gt;
&lt;h1&gt;Afficher le meme: { { msg } }&lt;/h1&gt;
</highlight>

<small style="color: #999; font-size: 70%;">Ne pas mettre un espace entre les deux accolades ouvrantes ni entre les deux accolades fermantes.</small>
    <br><br>

<codepen id="GRzyOaO" tab="html,result" height="500"></codepen>

<p>Leur usage est tout indiqué entre autres pour déterminer si un élément devrait être affiché ou masqué à l'aide d'un
    <incode>v-if</incode>.</p>
<doclink href="https://vuejs.org/guide/essentials/forms.html#checkbox">Boite à cocher</doclink>


<dots></dots>
<grostitre>Boutons radio</grostitre>


<p>Les boutons radio synchronisent l’attribut <incode>value</incode> du bouton qui est coché avec la donnée qui leur est associée.</p>

<highlight lang="html">&lt;input type=&quot;radio&quot; id=&quot;option&quot; v-model=&quot;msg&quot; value=&quot;Texte 1&quot; /&gt;
&lt;input type=&quot;radio&quot; id=&quot;option&quot; v-model=&quot;msg&quot; value=&quot;Texte 2&quot; /&gt;
&lt;h1&gt;{ { msg } }&lt;/h1&gt;</highlight>
<small style="color: #999; font-size: 70%;">Ne pas mettre un espace entre les deux accolades ouvrantes ni entre les deux accolades fermantes.</small>


    <br><br>

<codepen id="JjxZJor" tab="html,result" height="500"></codepen>

<br>
<doclink href="https://vuejs.org/guide/essentials/forms.html#radio">Boutons radio</doclink>





<dots></dots>
<grostitre>Menu déroulant</grostitre>

<p>Les menus déroulants synchronisent l’attribut <incode>value</incode> de l'option sélectionnée avec la donnée qui leur est associée.</p>

<highlight lang="html">&lt;select v-model=&quot;msg&quot;&gt;
  &lt;option value=&quot;Texte 1&quot;&gt;Écouteurs&lt;/option&gt;
  &lt;option value=&quot;Texte 2&quot;&gt;Squid Game&lt;/option&gt;
&lt;/select&gt;
&lt;h1&gt;{ { msg } }&lt;/h1&gt;</highlight>
<small style="color: #999; font-size: 70%;">Ne pas mettre un espace entre les deux accolades ouvrantes ni entre les deux accolades fermantes.</small>
<br>

<codepen id="OJdEgmK" tab="html,result" height="500"></codepen>

<doclink href="https://vuejs.org/guide/essentials/forms.html#select">Menu déroulant</doclink>
