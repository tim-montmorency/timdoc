<?php 
/**
 * @type     article
 * @title    boucle forEach()
 * @icon     images/icon.svg
 * @abstract Facilite l'analyse ou le traitement des éléments d'un tableau/NodeList 
 * @index    80
 * @ref      web/javascript
 */
?>

<p>La boucle <code>forEach()</code> permet de traitement l'ensemble des entrées dans un tableau/NodeList de façon simple. Elle est particulièrement efficace pour traiter le résultat d'une requête <a rel="noopener noreferrer" href="../querySelectorAll/">querySelectorAll()</a>. </p>

<p>Par exemple, une variable contenant tous les éléments possédant la classe <code>.book</code>:</p>

<highlight lang='javascript'>const booksArr = document.querySelectorAll('.book');
// NodeList(3) [div.book, div.book, div.book]</highlight>



<p>Le résultat de cette requête est une <code>NodeList</code> qui est en quelques sorte un tableau simplifié. </p>

<p>Pour afficher tous les éléments un à un dans la console avec une boucle <code>for()</code>, il faudrait procéder de la sorte:</p>


<highlight lang='javascript'>for (let index = 0; index < booksArr.length; index++) {
  const book = booksArr[index];
  console.log(book);
}</highlight>



<p>Heureusement, il est possible de simplifier le tout via une boucle <code>forEach()</code>.</p>

<p>Par exemple:</p>

<highlight lang='javascript'>booksArr.forEach(function(book) {
  console.log(book)
});</highlight>




<dots></dots>
<grostitre>Anatomie</grostitre>

<p>Voyons les parties constituant la boucle&nbsp;<code>forEach</code>.</p>
<h3 class="heading heading--h3" id="booksArr">booksArr</h3>

<p>Nom du tableau ou NodeList à parcourir.</p>
<h3 class="heading heading--h3" id=".forEach()">.forEach()</h3>

<p>Se traduisant littéralement par <em>"pour chaque"</em>, permets d'indiquer que chaque entrée constituant le tableau doit être accéder séparément.</p>
<h3 class="heading heading--h3" id="function(book)">function(book)</h3>

<p>Fonction anonyme à exécuter pour chaque entrée dans le tableau. Le mot <code>book</code> est un paramètre passé à la fonction contenant à chaque itération de la boucle l'entrée courante. Soit l'équivalent de <code>const book = booksArr[index];</code></p>

<p>Dans cet exemple, la paramètre a été nommé <code>book</code>, puisqu'il est logique d'appeler une entrée dans un tableau de livres, un <em>livre</em>. Cependant, il est important de comprendre qu'il s'agit d'un nom arbitraire. Le paramètre aurait pu porter le nom de votre choix.</p>

<p>Par exemple le code suivant produit exactement le même résultat même si le nom du paramètre est différent:</p>

<highlight lang='javascript'>booksArr.forEach(function(batman) {
  console.log(batman)
});</highlight>     




<h3 class="heading heading--h3" id="{...}">{...}</h3>

<p>Les parenthèses contiennent le code à exécuter à chaque itération de la boucle.</p><p>Dans cet exemple, le code consiste simplement à afficher l'entrée courante dans la console .</p>

<!-- 
<aside class="exercice-card">
<div class="exercice-card__content">
<em class="exercice-card__tagline">Exercice</em><br class="exercice-card__break">
<a href="/web/20231209052317/https://smnarnold.com/exercices/javascript/boucle-foreach-pokemon" target="_blank" class="exercice-card__title">
  Boucle forEach() -&nbsp;Pokémon
</a>

<p class="exercice-card__description">Pour cet exercice vous devez attrapez tous les Pokémon de la page et itérer sur chaqu’un d’entre eux via une boucle&nbsp;forEach().</p>
    </div>
  <picture class="exercice-card__preview">
<source srcset="/web/20231209052317im_/https://smnarnold.com/img/asset/YXNzZXRzL3BhZ2UtcHJldmlld3MvZm9yRWFjaC1wb2tlbW9ucy5qcGc=?w=620&amp;s=9ca72f38dabb1933810d8e21fa016f80" media="(max-width: 575px) and (min-resolution: 2dppx)">
<source srcset="/web/20231209052317im_/https://smnarnold.com/img/asset/YXNzZXRzL3BhZ2UtcHJldmlld3MvZm9yRWFjaC1wb2tlbW9ucy5qcGc=?w=310&amp;s=38f60e0fc582053035b34d337f86ae06" media="(max-width: 575px)">
<source srcset="/web/20231209052317im_/https://smnarnold.com/img/asset/YXNzZXRzL3BhZ2UtcHJldmlld3MvZm9yRWFjaC1wb2tlbW9ucy5qcGc=?w=370&amp;s=4d14e4fb4396b6c199a4ebf9de8a486e" media="(min-resolution: 2dppx)">
<img src="/web/20231209052317im_/https://smnarnold.com/img/asset/YXNzZXRzL3BhZ2UtcHJldmlld3MvZm9yRWFjaC1wb2tlbW9ucy5qcGc=?w=185&amp;s=0947377d49b1539428212a88ab40ccae" width="" height="" loading="lazy" class="exercice-card__image" style="object-position: 50% 50%;">
</picture>
</aside>

-->


<dots></dots>
<grostitre>Index</grostitre>
<p>Si désiré, il est possible de spécifier un deuxième paramètre dans la fonction d'une boucle&nbsp;<code>forEach()</code>. Ce deuxième paramètre correspond à l'index courant dans la&nbsp;boucle.</p>

<p>Par exemple:</p>

<highlight lang='javascript'>const officeArr = ["Pam", "Jim", "Dwight"];

officeArr.forEach(function(who, index) {
  console.log(who, index);
});

// Pam, 0
// Jim, 1
// Dwight, 2
</highlight>




<doclink href='https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Global_Objects/Array/forEach'>forEach()</doclink>

<doclink href='https://www.w3schools.com/jsref/jsref_foreach.asp'>forEach()</doclink>


<!--               <aside class="exercice-card">
    <div class="exercice-card__content">
      <em class="exercice-card__tagline">Exercice</em><br class="exercice-card__break">
      <a href="/web/20231209052317/https://smnarnold.com/exercices/javascript/boucle-foreach-votes" target="_blank" class="exercice-card__title">
        Boucle forEach() -&nbsp;Votes
      </a>

            <p class="exercice-card__description">Pour cet exercice, vous devrez faire en sorte que des jetons de vote change de côté lorsqu’ils sont cliqués 👍 ou&nbsp;👎.</p>
          </div>

        <picture class="exercice-card__preview">
      <source srcset="/web/20231209052317im_/https://smnarnold.com/img/asset/YXNzZXRzL3BhZ2UtcHJldmlld3MvZm9yZWFjaC12b3Rlcy5qcGc=?w=620&amp;s=fed1826fcf09e171572d5a82bc07142f" media="(max-width: 575px) and (min-resolution: 2dppx)">
      <source srcset="/web/20231209052317im_/https://smnarnold.com/img/asset/YXNzZXRzL3BhZ2UtcHJldmlld3MvZm9yZWFjaC12b3Rlcy5qcGc=?w=310&amp;s=382bef014e3302c8500a8613fa4baa00" media="(max-width: 575px)">
      <source srcset="/web/20231209052317im_/https://smnarnold.com/img/asset/YXNzZXRzL3BhZ2UtcHJldmlld3MvZm9yZWFjaC12b3Rlcy5qcGc=?w=370&amp;s=be1a51597b0420c03d41c351e1af47bb" media="(min-resolution: 2dppx)">
      <img src="/web/20231209052317im_/https://smnarnold.com/img/asset/YXNzZXRzL3BhZ2UtcHJldmlld3MvZm9yZWFjaC12b3Rlcy5qcGc=?w=185&amp;s=5ebac5557aa4be2c63faf21e060135fd" width="" height="" loading="lazy" class="exercice-card__image" style="object-position: 50% 50%;">
    </picture>
      </aside>
   -->
