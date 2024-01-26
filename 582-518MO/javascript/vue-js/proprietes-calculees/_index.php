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


<highlight lang='html'>{ { amount * 0.8 } }</highlight>
<small style="color: #999; font-size: 70%;">Ne pas mettre un espace entre les deux accolades ouvrantes ni entre les deux accolades fermantes.</small>



<br>
<p>Bien que ces expressions soient pratiques, elles ne sont destinées qu'aux opérations simples, car elles peuvent rapidement porter à confusion: </p>


<ul>
    <li>Pourquoi ce montant est-il multiplié par 0.8? </li>
    <li>Quelle devise tente-t-on d'afficher?</li>
</ul>

<p>Heureusement, les propriétés calculées permettent d'éviter de complexifier inutilement les templates HTML en permettant de retirer toute expression logique de ceux-ci. </p>

<p>Par exemple, la donnée suivante 👇 exprime clairement que l'information affichée correspond à un montant converti en dollars américains 🇺🇸. Aucune expression mathématique ne vient polluer le template:</p>

<highlight lang='html'>{ { amountToUSD } }</highlight>
<small style="color: #999; font-size: 70%;">Ne pas mettre un espace entre les deux accolades ouvrantes ni entre les deux accolades fermantes.</small>



<p><br>Pour obtenir une donnée propre comme celle-ci, sans expression, il faut ajouter un objet intitulé <incode>computed</incode> à l'app Vue. Cet objet contient à son tour différentes propriétés. Chacune de ces propriétés se base sur une ou plusieurs données se trouvant dans <incode>data</incode> et leur appliquent un traitement quelconque. </p>

<p>Par exemple, multiplier une donnée par 0.8. </p>

<highlight lang='javascript'>computed: {
  amountToUSD() {
    return this.amount * 0.8;
  }
}</highlight>



<p>La grande force des propriétés calculées est qu'elles <strong>surveillent en permanence les données sur lesquelles elles se basent</strong>. Ainsi, si l'une de ces données vient à changer, par exemple le montant, le résultat de la propriété calculé se mettra automatiquement à jour en se basant sur la valeur de celle-ci.</p><p>Par exemple, la valeur en dollars américains se met automatiquement à jour lorsque le montant en dollars canadien change, puisqu'il s'agit d'une propriété calculée.</p>

<figure>

    <p class="codepen" data-height="300" data-theme-id="44431" data-default-tab="html,result" data-slug-hash="qBgKjVK" data-user="tim-momo" style="height: 300px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
    <span>See the Pen <a href="https://codepen.io/tim-momo/pen/qBgKjVK">
    Vue propriété calculé - Convertisseur de devise</a> by TIM Montmorency (<a href="https://codepen.io/tim-momo">@tim-momo</a>)
    on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
    <script async src="https://cpwebassets.codepen.io/assets/embed/ei.js"></script>



    <figcaption class="caption caption--codepen">
       Modifiez le montant de base en CAD🇨🇦 afin de voir le montant en USD🇺🇸 être recalculé automatiquement.

    </figcaption> 
</figure>

<br><br>
<doclink href='https://vuejs.org/guide/essentials/computed.html'>Propriétés calculées</doclink>


<br><br>
<aside class="exercice-card">
    <div class="exercice-card__content">
      <em class="exercice-card__tagline">Exercice</em><br class="exercice-card__break">
      <a href="../../../exercices/vue-luchador/" target="_blank" class="exercice-card__title">
        Propriété calculée -&nbsp;Luchador
      </a>
      <p class="exercice-card__description">Pour cet exercice, vous allez créer une petite démo permettant de déterminer votre nom de luchador en fonction de votre jour et mois de&nbsp;n...</p>
    </div>

</aside>
  
