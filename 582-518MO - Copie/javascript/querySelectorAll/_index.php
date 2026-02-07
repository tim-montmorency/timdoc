<?php 
/**
 * @type     article
 * @title    querySelectorAll
 * @icon     images/icon.svg
 * @abstract Recherche tous les éléments correspondant au sélecteur et retourne une NodeList (tableau d'éléments).
 * @index    80
 * @ref      web/javascript
 */
?>


<p><incode>querySelectorAll()</incode>&nbsp;permet d'effectuer une recherche dans un élément du DOM et retourne un <a target="_blank" rel="noopener noreferrer" href="https://developer.mozilla.org/fr/docs/Web/API/NodeList">NodeList</a> <em>(similaire à un tableau)</em> correspondant au sélecteur lui étant passé. Si aucun élément n'est trouvé, il retourne un NodeList vide <incode>[]</incode>.</p><p>Par exemple dans le code HTML suivant:</p>

<highlight lang='html'><div class="game">Halo</div>
<div class="game">Resident Evil</div>
<div class="game">Hitman</div></highlight>


<p>Si une requête est effectué afin de trouver les éléments possédant la classe&nbsp;<incode>.game</incode></p>

<highlight lang='javascript'>let gamesArr = document.querySelectorAll('.game');</highlight>


<p>La NodeList suivante est retournée:</p>

<highlight lang='javascript'>NodeList(3) [div.game, div.game, div.game]</highlight>



<dots></dots>
<grostitre>Anatomie</grostitre>

<p>Décortiquons les parties composant cette requête.</p>
<h3 class="heading heading--h3" id="let gamesArr">let gamesArr</h3>

<p>Le résultat de la requête est stocké dans une variable afin de pouvoir y accéder plus tard.</p>
<h3 class="heading heading--h3" id="document">document</h3>

<p>Correspond à l'élément dans laquelle la recherche doit être effectuée.</p>

<p>Dans cet exemple, la recherche s'effectue à partir du document en entier. Il aurait possible d'être plus précis en partant d'un élément moins global. Par exemple, effectuer un recherche à partir d'une variable contenant un élément retourné par une requête <a target="_blank" rel="noopener noreferrer" href="../queryselector">querySelector()</a>.</p>

<highlight lang='javascript'>featuredGames.documentQuerySelectorAll('.game');</highlight>



<h3 class="heading heading--h3" id="querySelectorAll('.game')">querySelectorAll('.game')</h3>

<p>Indique qu'un ou plusieurs éléments ayant la classe&nbsp;<incode>.game</incode>&nbsp;doivent-être trouvés à l'intérieur de l'élément précédent&nbsp;<em>(</em><incode>document</incode><em>)</em>.</p>

<p>Heureusement, tous les&nbsp;<a rel="noopener noreferrer" href="https://tim-montmorency.com/timdoc/582-111MO/css/selecteurs/">sélecteurs CSS</a>&nbsp;sont supportés par&nbsp;<incode>querySelectorAll()</incode>. Il est donc possible d'utiliser les mêmes sélecteurs en CSS qu'en JavaScript ✨.</p>


<warning>
  <p>Même si un seul élément est trouvé, celui-ci n’est pas retourné directement. Peu importe la quantité d’éléments trouvés <incode>(0, 1, 500)</incode> une NodeList est toujours&nbsp;retournée.</p>
</warning>

<doclink href='https://developer.mozilla.org/fr/docs/Web/API/Document/querySelectorAll'>querySelectorAll</doclink>

<doclink href='https://www.w3schools.com/jsref/met_document_queryselectorall.asp'>querySelectorAll</doclink>



<!-- 
   <aside class="exercice-card">
    <div class="exercice-card__content">
      <em class="exercice-card__tagline">Exercice</em><br class="exercice-card__break">
      <a href="/web/20231209045317/https://smnarnold.com/exercices/javascript/queryselectorall-schtroumpfs" target="_blank" class="exercice-card__title">
        QuerySelectorAll() -&nbsp;Schtroumpfs
      </a>

            <p class="exercice-card__description">Pour cet exercice vous devez sélectionner toues les Schtroumpfs à l’aide d’une requête querySelectorAll(), mais attention de ne pas&nbsp;sélec...</p>
          </div>

        <picture class="exercice-card__preview">
      <source srcset="/web/20231209045317im_/https://smnarnold.com/img/asset/YXNzZXRzL3BhZ2UtcHJldmlld3MvcXVlcnlzZWxlY3RvcmFsbC1zY2h0cm91bXBmcy5qcGc=?w=620&amp;s=0de80281623564735930beb6889c0534" media="(max-width: 575px) and (min-resolution: 2dppx)">
      <source srcset="/web/20231209045317im_/https://smnarnold.com/img/asset/YXNzZXRzL3BhZ2UtcHJldmlld3MvcXVlcnlzZWxlY3RvcmFsbC1zY2h0cm91bXBmcy5qcGc=?w=310&amp;s=276e38203cf2260a8cd49a739a6f4784" media="(max-width: 575px)">
      <source srcset="/web/20231209045317im_/https://smnarnold.com/img/asset/YXNzZXRzL3BhZ2UtcHJldmlld3MvcXVlcnlzZWxlY3RvcmFsbC1zY2h0cm91bXBmcy5qcGc=?w=370&amp;s=ca9257490e9000910c57835a7d328b82" media="(min-resolution: 2dppx)">
      <img src="/web/20231209045317im_/https://smnarnold.com/img/asset/YXNzZXRzL3BhZ2UtcHJldmlld3MvcXVlcnlzZWxlY3RvcmFsbC1zY2h0cm91bXBmcy5qcGc=?w=185&amp;s=195cc4310ed15407b196bcfdf3f119a0" width="" height="" loading="lazy" class="exercice-card__image" style="object-position: 50% 50%;">
    </picture>
      </aside>
  

              <aside class="exercice-card">
    <div class="exercice-card__content">
      <em class="exercice-card__tagline">Exercice</em><br class="exercice-card__break">
      <a href="/web/20231209045317/https://smnarnold.com/exercices/javascript/queryselectorall-star-wars" target="_blank" class="exercice-card__title">
        QuerySelectorAll() - Star&nbsp;Wars
      </a>

            <p class="exercice-card__description">Pour cet exercice vous devez sélectionner à l’aide de querySelectorAll() tous les personnages du côté obscur de la&nbsp;force.</p>
          </div>

        <picture class="exercice-card__preview">
      <source srcset="/web/20231209045317im_/https://smnarnold.com/img/asset/YXNzZXRzL3BhZ2UtcHJldmlld3MvcXVlcnlzZWxlY3RvcmFsbC1zdGFyd2Fycy5qcGc=?w=620&amp;s=abe5f75f32ec8cdcd0300dc816271f27" media="(max-width: 575px) and (min-resolution: 2dppx)">
      <source srcset="/web/20231209045317im_/https://smnarnold.com/img/asset/YXNzZXRzL3BhZ2UtcHJldmlld3MvcXVlcnlzZWxlY3RvcmFsbC1zdGFyd2Fycy5qcGc=?w=310&amp;s=93cf85ce06a2c26fb4d4ec300fe6c30d" media="(max-width: 575px)">
      <source srcset="/web/20231209045317im_/https://smnarnold.com/img/asset/YXNzZXRzL3BhZ2UtcHJldmlld3MvcXVlcnlzZWxlY3RvcmFsbC1zdGFyd2Fycy5qcGc=?w=370&amp;s=34183909366a7de26cd8a81c92bfdced" media="(min-resolution: 2dppx)">
      <img src="/web/20231209045317im_/https://smnarnold.com/img/asset/YXNzZXRzL3BhZ2UtcHJldmlld3MvcXVlcnlzZWxlY3RvcmFsbC1zdGFyd2Fycy5qcGc=?w=185&amp;s=8cec34584093ce8b28623a4731e34dff" width="" height="" loading="lazy" class="exercice-card__image" style="object-position: 50% 50%;">
    </picture>
      </aside>
  

              <aside class="exercice-card">
    <div class="exercice-card__content">
      <em class="exercice-card__tagline">Exercice</em><br class="exercice-card__break">
      <a href="/web/20231209045317/https://smnarnold.com/exercices/javascript/queryselectorall-canadiens" target="_blank" class="exercice-card__title">
        QuerySelectorAll() -&nbsp;Canadiens
      </a>

            <p class="exercice-card__description">Pour cet exercice, vous devez sélectionner tous les joueurs du Canadiens de Montréal pour ensuite bouclez sur les attaquants seulement&nbsp;🏒.</p>
          </div>

        <picture class="exercice-card__preview">
      <source srcset="/web/20231209045317im_/https://smnarnold.com/img/asset/YXNzZXRzL3BhZ2UtcHJldmlld3MvcXVlcnlzZWxlY3RvcmFsbC1jYW5hZGllbnMuanBn?w=620&amp;s=a894449bd1e3ddb8df6b9abfede0db99" media="(max-width: 575px) and (min-resolution: 2dppx)">
      <source srcset="/web/20231209045317im_/https://smnarnold.com/img/asset/YXNzZXRzL3BhZ2UtcHJldmlld3MvcXVlcnlzZWxlY3RvcmFsbC1jYW5hZGllbnMuanBn?w=310&amp;s=804316afe4ed112140d3fca3ae29d056" media="(max-width: 575px)">
      <source srcset="/web/20231209045317im_/https://smnarnold.com/img/asset/YXNzZXRzL3BhZ2UtcHJldmlld3MvcXVlcnlzZWxlY3RvcmFsbC1jYW5hZGllbnMuanBn?w=370&amp;s=77cb21bba6c90afed07281530c6165a4" media="(min-resolution: 2dppx)">
      <img src="/web/20231209045317im_/https://smnarnold.com/img/asset/YXNzZXRzL3BhZ2UtcHJldmlld3MvcXVlcnlzZWxlY3RvcmFsbC1jYW5hZGllbnMuanBn?w=185&amp;s=51564392433d427b993e3566c326041f" width="" height="" loading="lazy" class="exercice-card__image" style="object-position: 50% 50%;">
    </picture>
      </aside>

-->
           