<?php 
/**
 * @type     article
 * @title    Classes JavaScript
 * @icon     images/classe-js3.png
 * @abstract Les classes JS sont des modèles pour des objets JS
 * @index    80
 * @ref      web/javascript
 */
?>

<p>La programmation orientée objet, ou en anglais&nbsp;<em>Object-oriented programming (OOP)</em>, est une structure de code dans laquelle chaque élément est un objet. Chaque donnée est une propriété et chaque action est une méthode sur l’objet correspondant à son&nbsp;élément.</p>


<p>Cette approche peut sembler intimidante de prime abord, mais en fait, elle s’apparente à la façon dont l’être humain pense 🧠</p>


<p>Par exemple, chaque item sur une liste d’épicerie pourrait être un objet avec différentes propriétés, telles&nbsp;que:</p>


<ul>
    <li>Un nom</li>
    <li>Un statut indiquant si l'item est dans le panier ou&nbsp;non</li>
    <li>Etc.</li>
</ul>


<dots></dots>
<p>La liste d’épicerie pourrait contenir plusieurs éléments, mais ils partageraient tous les mêmes propriétés de&nbsp;base.</p><p>Par exemple:</p>

<highlight lang='js'>
const tacos = {
  nom: “🌮”,
  dansLePanier: false,
} 
 
const tomate = {
  nom: “🍅”,
  dansLePanier: false,
}
</highlight>


<p>Chaque objet partage les mêmes propriétés&nbsp;<em>(nom et dansLePanier)</em>, mais a des valeurs différentes. Ainsi, il est possible d’interroger chaque élément afin de savoir s’il est&nbsp;<incode>dansLePanier</incode>&nbsp;ou&nbsp;non.</p>



<dots></dots>
<p>À l’heure actuelle, la meilleure façon de programmer en orienté objet est d’utiliser des classes. Chaque classe permet de créer un certain type d’objet. Tous les objets créés à partir d’une même classe partagent les mêmes propriétés et méthodes, ce qui assure une cohérence entre chacun de ces&nbsp;objets.</p><p>Une classe de base ressemble à&nbsp;ceci:</p>
<highlight lang='js'>
class NomDeMaClasse {
  constructor() {
  }
}
</highlight>

<ul>
    <li>Le mot&nbsp;<incode>class</incode>&nbsp;indique qu'une classe s'apprête à être&nbsp;définie.</li>
    <li><incode>NomDeMaClasse</incode>&nbsp;correspond au nom donné à la&nbsp;classe.</li>
    <li><incode>constructor</incode>&nbsp;est une méthode spéciale appelée automatiquement lorsqu'un nouvel objet est créé à partir de la classe. Il permets de définir les propriétés de base du nouvel&nbsp;objet.</li>
</ul>



<aside class="note note--info">
  <div class="note__wrapper">
        <p>Remarquez comment par convention un <strong>nom de classes commence toujours par une&nbsp;majuscule</strong>.</p>

  </div>
</aside>



<p>Par exemple, si une classe devait permettre de créer des items dans une liste d’épicerie, elle ressemblerait probablement à quelque chose comme&nbsp;ceci:</p>

<highlight lang='javascript'>class ItemEpicerie {
  constructor(nom) {
    this.nom = nom;
    this.dansLePanier = false;
  }
}</highlight>




<ul>
    <li>La classe à un nom représentatif du type d’objet qu’elle crée&nbsp;<incode>ItemEpicerie</incode>.</li>
    <li>Le constructeur s’attend à recevoir en paramètre un élément intitulé&nbsp;<incode>nom</incode>.</li>
    <li>Le constructeur définit que le nom de l’objet créé&nbsp;<incode>this.nom</incode>&nbsp;doit correspondre à l’élément&nbsp;<incode>nom</incode>&nbsp;reçu en&nbsp;paramètre.</li>
    <li>Finalement, la propriété&nbsp;<incode>dansLePanier</incode>&nbsp;est initialisée avec la valeur par défaut&nbsp;<incode>false</incode>.</li>
</ul>



<dots></dots>
<grostitre>Instanciation</grostitre>

<p>Pour créer un objet à partir d’une classe, il faut l’instancier. Autrement dit, il faut utiliser le mot réservé&nbsp;<incode>new</incode>&nbsp;pour annoncer qu’un nouvel élément s’apprête à être déclaré. Il faut ensuite spécifier le nom de la classe à utiliser pour créer l’élément et optionnellement, lui fournir des paramètres à&nbsp;utiliser.</p>

<p>Par exemple, il est possible de recréer l’élément tacos&nbsp;ainsi:</p>

<highlight lang='js'>new ItemEpicerie(“🌮”);</highlight>


<info>Remarquez comment le nom “🌮” est passé en paramètre. Si un ou des paramètres sont définis lors de l’instanciation d’un objet, ils sont automatiquement passés au&nbsp;constructeur.</info>




<p>Cette instanciation retournera l’objet suivant 👇.</p>

<highlight lang='javaScript'>{
  nom: “🌮”,
  dansLePanier: false,
}</highlight>

<p>Si l’objet doit être accessible après sa création, il est nécessaire de le stocker dans une variable. Par&nbsp;exemple:</p>

<highlight lang='js'>const tacos = new ItemEpicerie(“🌮”);</highlight>



<p>Ainsi, il est possible d'accéder au statut l’objet comme&nbsp;suit:</p>


<highlight lang='js'>console.log(tacos.dansLePanier); // false</highlight>




<dots></dots>
<grostitre>Méthodes</grostitre>
<p>Pour ajouter une action à un objet, on définit ce que l’on appel une une méthode. Les méthodes sont des fonctions au même titre que le constructeur. Cependant, contrairement au constructeur, elles ne sont pas appelés automatiquement. Il faut donc les appeler manuellement au moment&nbsp;désiré.</p><p>Par exemple, pour créer un élément HTML correspondant notre l’item d’épicerie, il serait possible de créer une&nbsp;méthode.</p>

<highlight lang='js'>class ItemEpicerie {
  constructor(nom) {
    this.nom = nom;
    this.dansLePanier = false;
  }
  
  creerHTML() {
    this.el = document.createElement('div');
    this.el.innerText = this.nom;
    document.body.appendChild(this.el);
  }
}</highlight>



<p>Cette méthode se créée premièrement une propriété el qui contiendra un div.<br>Le div, via sa référence&nbsp;<incode>this.el</incode>, se fait ensuite insérer un texte. Ce texte correspond au nom de l’élément. Par exemple:&nbsp;“🌮”.</p>
          <aside class="note note--warn">
  <div class="note__wrapper">
        <p>Les classes ne requièrent pas de , pour séparer leurs&nbsp;méthodes.</p>

  </div>
</aside>



<p>Par elle-même, cette méthode ne fait rien, puisqu’elle n’est pas appelée. Il faut donc définir un appel. Cet appel pourrait être fait à différents&nbsp;endroits.</p>




<h3 class="heading heading--h3" id="À l’extérieur de la classe">À l’extérieur de la classe</h3>

<highlight lang='js'>const tacos = new ItemEpicerie(“🌮”);
tacos.creerHTML();</highlight>




<div class="codepen" data-module="CodePen">
  <div class="codepen__wrapper">
    <span class="codepen__forced-height" style="padding-bottom: calc(34% + 36px);"></span>

    <div class="cp_embed_wrapper"><iframe allowfullscreen="true" allowpaymentrequest="true" allowtransparency="true" class="cp_embed_iframe " frameborder="0" height="100%" width="100%" name="cp_embed_1" scrolling="no" src="https://codepen.io/smnarnold/embed/0acaf3023a8bac0833cbc26784261e19?height=100%25&amp;theme-id=39618&amp;user=smnarnold&amp;slug-hash=0acaf3023a8bac0833cbc26784261e19&amp;default-tab=js%2Cresult&amp;name=cp_embed_1" style="width: 100%; overflow:hidden; display:block;" title="CodePen Embed" loading="lazy" id="cp_embed_0acaf3023a8bac0833cbc26784261e19"></iframe></div>
  </div>  

</div>




<h3 class="heading heading--h3" id="À l’intérieur de la classe">À l’intérieur de la classe</h3>

<p>Par exemple, dans le constructeur si l’on souhaite que cette méthode soit appelée à chaque fois qu’un élément est&nbsp;créé.</p>
<div class="codepen" data-module="CodePen">
  <div class="codepen__wrapper">
    <span class="codepen__forced-height" style="padding-bottom: calc(34% + 36px);"></span>

    <div class="cp_embed_wrapper"><iframe allowfullscreen="true" allowpaymentrequest="true" allowtransparency="true" class="cp_embed_iframe " frameborder="0" height="100%" width="100%" name="cp_embed_2" scrolling="no" src="https://codepen.io/smnarnold/embed/e6c88587aae0216ac0cd513211e9f9f0?height=100%25&amp;theme-id=39618&amp;user=smnarnold&amp;slug-hash=e6c88587aae0216ac0cd513211e9f9f0&amp;default-tab=js%2Cresult&amp;name=cp_embed_2" style="width: 100%; overflow:hidden; display:block;" title="CodePen Embed" loading="lazy" id="cp_embed_e6c88587aae0216ac0cd513211e9f9f0"></iframe></div>
  </div>  

</div>





<h3 class="heading heading--h3" id="À partir d’un événement défini dans la classe">À partir d’un événement défini dans la classe</h3>

<p>Par exemple, lorsque l’élément&nbsp;<incode>el</incode>&nbsp;est cliqué, appeler une méthode permettant de faire alterner la valeur de la propriété&nbsp;<incode>dansLePanier</incode>&nbsp;de&nbsp;<incode>true</incode>&nbsp;à&nbsp;<incode>false</incode>&nbsp;et vice-versa.</p>

<info>Afin de rendre le changement perceptible, ajoutons ou retirons la classe <incode>.barre</incode> sur l’élément en fonction de la valeur&nbsp;<incode>dansLePanier</incode>.</info>




<div class="codepen" data-module="CodePen">
  <div class="codepen__wrapper">
    <span class="codepen__forced-height" style="padding-bottom: calc(34% + 36px);"></span>

    <div class="cp_embed_wrapper"><iframe allowfullscreen="true" allowpaymentrequest="true" allowtransparency="true" class="cp_embed_iframe " frameborder="0" height="100%" width="100%" name="cp_embed_3" scrolling="no" src="https://codepen.io/smnarnold/embed/9e86ab4977839c5613038445ef93e48f?height=100%25&amp;theme-id=39618&amp;user=smnarnold&amp;slug-hash=9e86ab4977839c5613038445ef93e48f&amp;default-tab=js%2Cresult&amp;name=cp_embed_3" style="width: 100%; overflow:hidden; display:block;" title="CodePen Embed" loading="lazy" id="cp_embed_9e86ab4977839c5613038445ef93e48f"></iframe></div>
  </div>  
</div>


<aside class="exercice-card">
    <div class="exercice-card__content">
      <em class="exercice-card__tagline">Exercice</em><br class="exercice-card__break">
      <a href="/exercices/javascript/classe-mario-blocks" target="_blank" class="exercice-card__title">
        Classe - Mario&nbsp;Blocks
      </a>

            <p class="exercice-card__description">Pour cet exercice nous allons créer une “map” de blocs basée sur le premier jeu Super Mario Bros du Nintendo qui popularisa plusieurs&nbsp;pri...</p>
          </div>

        <picture class="exercice-card__preview">
      <source srcset="/img/asset/YXNzZXRzL3BhZ2UtcHJldmlld3MvY2xhc3Nlcy1tYXJpby1ibG9jcy5wbmc=?w=620&amp;s=50d33405345966e785a4c74c5710c19c" media="(max-width: 575px) and (min-resolution: 2dppx)">
      <source srcset="/img/asset/YXNzZXRzL3BhZ2UtcHJldmlld3MvY2xhc3Nlcy1tYXJpby1ibG9jcy5wbmc=?w=310&amp;s=c1d465a575a7cb2b8b719715b811058e" media="(max-width: 575px)">
      <source srcset="/img/asset/YXNzZXRzL3BhZ2UtcHJldmlld3MvY2xhc3Nlcy1tYXJpby1ibG9jcy5wbmc=?w=370&amp;s=4f864ff1db8ba4a87ce221d5bd699954" media="(min-resolution: 2dppx)">
      <img src="/img/asset/YXNzZXRzL3BhZ2UtcHJldmlld3MvY2xhc3Nlcy1tYXJpby1ibG9jcy5wbmc=?w=185&amp;s=eb173adfc4bd7881140fac75462cdcd4" width="" height="" loading="lazy" class="exercice-card__image" style="object-position: 50% 50%;">
    </picture>
</aside>


  
<dots></dots>
<grostitre>Multiples instances</grostitre>
<p>Concevoir son code en orienté objet offre la flexibilité de créer rapidement et facilement plusieurs objets&nbsp;similaires.</p><p>Par exemple, il serait possible de créer plusieurs éléments d'une liste d’épicerie à partir d’un champ texte et d’un bouton, en créant un nouvel item à partir de la valeur dans le champ texte lorsque le bouton est&nbsp;appuyé.</p>
<div class="codepen" data-module="CodePen">
  <div class="codepen__wrapper">
    <span class="codepen__forced-height" style="padding-bottom: calc(34% + 36px);"></span>

    <div class="cp_embed_wrapper"><iframe allowfullscreen="true" allowpaymentrequest="true" allowtransparency="true" class="cp_embed_iframe " frameborder="0" height="100%" width="100%" name="cp_embed_4" scrolling="no" src="https://codepen.io/smnarnold/embed/ac03009458a907ad106fb662478beb38?height=100%25&amp;theme-id=39618&amp;user=smnarnold&amp;slug-hash=ac03009458a907ad106fb662478beb38&amp;default-tab=js%2Cresult&amp;name=cp_embed_4" style="width: 100%; overflow:hidden; display:block;" title="CodePen Embed" loading="lazy" id="cp_embed_ac03009458a907ad106fb662478beb38"></iframe></div>
  </div>  
</div>


<aside class="exercice-card">
    <div class="exercice-card__content">
      <em class="exercice-card__tagline">Exercice</em><br class="exercice-card__break">
      <a href="/exercices/javascript/classe-chats" target="_blank" class="exercice-card__title">
        Classe -&nbsp;Chats
      </a>

            <p class="exercice-card__description">Pour cet exercice vous nous allons utiliser les classes JavaScript afin de créer un générateur de chats à 9&nbsp;vies 😸.</p>
          </div>

        <picture class="exercice-card__preview">
      <source srcset="/img/asset/YXNzZXRzL3BhZ2UtcHJldmlld3MvY2xhc3NlLWNoYXQtOS12aWVzLnBuZw==?w=620&amp;s=0805b45c30bf56372f845e86ec2f59df" media="(max-width: 575px) and (min-resolution: 2dppx)">
      <source srcset="/img/asset/YXNzZXRzL3BhZ2UtcHJldmlld3MvY2xhc3NlLWNoYXQtOS12aWVzLnBuZw==?w=310&amp;s=ab0ff14960fa62e7145f304988373e3a" media="(max-width: 575px)">
      <source srcset="/img/asset/YXNzZXRzL3BhZ2UtcHJldmlld3MvY2xhc3NlLWNoYXQtOS12aWVzLnBuZw==?w=370&amp;s=2084b6ce07167a14716d8bd4ed2a45b8" media="(min-resolution: 2dppx)">
      <img src="/img/asset/YXNzZXRzL3BhZ2UtcHJldmlld3MvY2xhc3NlLWNoYXQtOS12aWVzLnBuZw==?w=185&amp;s=857995879402adc2d87a03c5d919d2c7" width="" height="" loading="lazy" class="exercice-card__image" style="object-position: 50% 50%;">
    </picture>
</aside>
  



<dots></dots>
<grostitre>Sous-classe</grostitre>

<p>Une sous-classe est en quelque sorte un remix d’une autre classe. On part d’une classe existante et on lui apporte des&nbsp;modifications. 🎛️</p><p>Par exemple, il est possible de partir de la classe&nbsp;<incode>ItemEpicerie</incode>&nbsp;pour créer la classe&nbsp;<incode>ItemEpicerieEpice</incode>&nbsp;en utilisant le mot réservé&nbsp;<incode>extends</incode>&nbsp;comme&nbsp;suit:</p><pre><code class="hljs javascript"><span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">ItemEpicerieEpice</span> <span class="hljs-keyword">extends</span> <span class="hljs-title">ItemEpicerie</span> </span>{
  <span class="hljs-function"><span class="hljs-title">constructor</span>(<span class="hljs-params">nom</span>)</span> {
    <span class="hljs-built_in">super</span>(<span class="hljs-string">`🌶️ 🔥 <span class="hljs-subst">${nom}</span>`</span>);
  }
}</incode></pre>


<p><incode>super('🌶️ 🔥 ${nom}')</incode>&nbsp;indique de créer l’objet à partir de la classe originale. L’objet possède donc toutes les mêmes propriétés et méthodes qu’un objet créé avec&nbsp;<incode>ItemEpicerie</incode>, mais peut être bonifié, comme dans cet exemple où le nom est préfixé par des émojis indiquant que la nourriture est&nbsp;épicé.</p>


<div class="codepen" data-module="CodePen">
  <div class="codepen__wrapper">
    <span class="codepen__forced-height" style="padding-bottom: calc(34% + 36px);"></span>

    <div class="cp_embed_wrapper"><iframe allowfullscreen="true" allowpaymentrequest="true" allowtransparency="true" class="cp_embed_iframe " frameborder="0" height="100%" width="100%" name="cp_embed_5" scrolling="no" src="https://codepen.io/smnarnold/embed/0a6257c571e03f41a9cbade301f641cc?height=100%25&amp;theme-id=39618&amp;user=smnarnold&amp;slug-hash=0a6257c571e03f41a9cbade301f641cc&amp;default-tab=js%2Cresult&amp;name=cp_embed_5" style="width: 100%; overflow:hidden; display:block;" title="CodePen Embed" loading="lazy" id="cp_embed_0a6257c571e03f41a9cbade301f641cc"></iframe></div>
  </div>  
</div>




<aside class="exercice-card">
    <div class="exercice-card__content">
      <em class="exercice-card__tagline">Exercice</em><br class="exercice-card__break">
      <a href="/exercices/javascript/classe-space-invaders" target="_blank" class="exercice-card__title">
        Classe - Space&nbsp;Invaders
      </a>

            <p class="exercice-card__description">Pour cet exercice nous allons créer un générateur d’extra-terrestres inspiré d’un des jeux les plus célèbres et influents de l’histoire,&nbsp;...</p>
          </div>

        <picture class="exercice-card__preview">
      <source srcset="/img/asset/YXNzZXRzL3BhZ2UtcHJldmlld3MvY2xhc3NlLXNwYWNlLWludmFkZXJzLnBuZw==?w=620&amp;s=cbfccf30d0a05415d39ee9a1d1ae75b3" media="(max-width: 575px) and (min-resolution: 2dppx)">
      <source srcset="/img/asset/YXNzZXRzL3BhZ2UtcHJldmlld3MvY2xhc3NlLXNwYWNlLWludmFkZXJzLnBuZw==?w=310&amp;s=11e35fd25f533df678b52d0c4fbb5955" media="(max-width: 575px)">
      <source srcset="/img/asset/YXNzZXRzL3BhZ2UtcHJldmlld3MvY2xhc3NlLXNwYWNlLWludmFkZXJzLnBuZw==?w=370&amp;s=f4444f3e28ec5093580cffed047fa71f" media="(min-resolution: 2dppx)">
      <img src="/img/asset/YXNzZXRzL3BhZ2UtcHJldmlld3MvY2xhc3NlLXNwYWNlLWludmFkZXJzLnBuZw==?w=185&amp;s=40afb385c4371f81edaf7bbfc226e8fe" width="" height="" loading="lazy" class="exercice-card__image" style="object-position: 50% 50%;">
    </picture>
</aside>
  
