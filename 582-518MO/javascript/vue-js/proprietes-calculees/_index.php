<?php 
/**
 * @type     article
 * @title    Propriétés calculées
 * @icon     ../images/icon.webp
 * @abstract Faire des expressions de base dans un template Vue
 * @index    80
 * @ref      web/cadriciels/vuejs
 */
?>
<p>Il est possible de faire des expressions de base dans un template Vue.&nbsp;</p><p>Par exemple, afin de convertir une devise en une autre 💵:</p>


<highlight lang="html">{ { amount * 0.8 } }</highlight>
<small style="color: #999; font-size: 70%;">Ne pas mettre un espace entre les deux accolades ouvrantes ni entre les deux accolades fermantes.</small>



<br>
<p>Bien que ces expressions soient pratiques, elles ne sont destinées qu'aux opérations simples, car elles peuvent rapidement porter à confusion: </p>


<ul>
    <li>Pourquoi ce montant est-il multiplié par 0.8? </li>
    <li>Quelle devise tente-t-on d'afficher?</li>
</ul>

<p>Heureusement, les propriétés calculées permettent d'éviter de complexifier inutilement les templates HTML en permettant de retirer toute expression logique de ceux-ci. </p>

<p>Par exemple, la donnée suivante 👇 exprime clairement que l'information affichée correspond à un montant converti en dollars américains 🇺🇸. Aucune expression mathématique ne vient polluer le template:</p>

<highlight lang="html">{ { amountToUSD } }</highlight>
<small style="color: #999; font-size: 70%;">Ne pas mettre un espace entre les deux accolades ouvrantes ni entre les deux accolades fermantes.</small>



<p><br>Pour obtenir une donnée propre comme celle-ci, sans expression, il faut ajouter un objet intitulé <incode>computed</incode> à l'app Vue. Cet objet contient à son tour différentes propriétés. Chacune de ces propriétés se base sur une ou plusieurs données se trouvant dans <incode>data</incode> et leur appliquent un traitement quelconque. </p>

<p>Par exemple, multiplier une donnée par 0.8. </p>

<highlight lang="javascript">computed: {
  amountToUSD() {
    return this.amount * 0.8;
  }
}</highlight>



<p>La grande force des propriétés calculées est qu'elles <strong>surveillent en permanence les données sur lesquelles elles se basent</strong>. Ainsi, si l'une de ces données vient à changer, par exemple le montant, le résultat de la propriété calculé se mettra automatiquement à jour en se basant sur la valeur de celle-ci.</p><p>Par exemple, la valeur en dollars américains se met automatiquement à jour lorsque le montant en dollars canadien change, puisqu'il s'agit d'une propriété calculée.</p>

<figure>

    <codepen id="qBgKjVK" tab="html,result" height="300"></codepen>

    <figcaption class="caption caption--codepen">
       Modifiez le montant de base en CAD🇨🇦 afin de voir le montant en USD🇺🇸 être recalculé automatiquement.

    </figcaption> 
</figure>

<br><br>
<doclink href="https://vuejs.org/guide/essentials/computed.html">Propriétés calculées</doclink>

<br><br>

<exercice href="../../../exercices/vue-luchador/"></exercice>
