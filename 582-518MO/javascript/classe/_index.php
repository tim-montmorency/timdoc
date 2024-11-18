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


<!--<p>Cette approche peut sembler intimidante de prime abord, mais en fait, elle s’apparente à la façon dont l’être humain pense 🧠</p> -->


<p>Par exemple, chaque item sur une liste d’épicerie pourrait être un objet avec différentes propriétés, telles&nbsp;que:</p>


<ul>
    <li>Un nom</li>
    <li>Une catégorie d'aliment (fruit, légume, viande, légumineuse...)</li>
    <li>Un statut indiquant si l'item est dans le panier ou&nbsp;non</li>
    <li>Etc.</li>
</ul>


<dots></dots>
<p>La liste d’épicerie pourrait contenir plusieurs éléments, mais ils partageraient tous les mêmes propriétés de&nbsp;base.</p><p>Par exemple:</p>

<highlight lang='js'>
const tacos = {
  nom: “🌮”,
  categorie: "cereale",
  dansLePanier: false,
} 
 
const tomate = {
  nom: “🍅”,
  categorie: "legume",
  dansLePanier: false,
}
</highlight>


<p>Chaque objet partage les mêmes propriétés&nbsp;<em>(nom, categorie et dansLePanier)</em>, mais a des valeurs différentes. Ainsi, il est possible d’interroger chaque élément afin de savoir s’il est&nbsp;<incode>dansLePanier</incode>&nbsp;ou&nbsp;non.</p>



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
  constructor(nom, categorie) {
    this.nom = nom;
    this.categorie = categorie;
    this.dansLePanier = false;
  }
}</highlight>




<ul>
    <li>La <strong>classe</strong> à un nom représentatif du type d’objet qu’elle crée&nbsp;<incode>ItemEpicerie</incode>.</li>
    <li>Le <strong>constructeur</strong> s’attend à recevoir en paramètre un élément intitulé&nbsp;<incode>nom</incode>.</li>
    <li>La <strong>propriété</strong> <incode>this.nom</incode>&nbsp;doit correspondre à l’élément&nbsp;<incode>nom</incode>&nbsp;reçu en&nbsp;paramètre.</li>
    <li>La <strong>propriété</strong> <incode>this.categorie</incode>&nbsp;doit correspondre à l’élément&nbsp;<incode>categorie</incode>&nbsp;reçu en&nbsp;paramètre.</li>
    <li>Finalement, la propriété&nbsp;<incode>dansLePanier</incode>&nbsp;est initialisée avec la valeur par défaut&nbsp;<incode>false</incode>.</li>
</ul>
<doclink href='https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Operators/class'>Classe JavaScript</doclink>



<dots></dots>
<grostitre>Instanciation</grostitre>

<p>Pour créer un objet à partir d’une classe, il faut l’instancier. Autrement dit, il faut utiliser le mot réservé&nbsp;<incode>new</incode>&nbsp;pour annoncer qu’un nouvel élément s’apprête à être déclaré. Il faut ensuite spécifier le nom de la classe à utiliser pour créer l’élément et optionnellement, lui fournir des paramètres à&nbsp;utiliser.</p>

<p>Par exemple, il est possible de recréer l’élément tacos&nbsp;ainsi:</p>

<highlight lang='js'>new ItemEpicerie(“🌮”);</highlight>


<info>Remarquez comment le nom “🌮” est passé en paramètre. Si un ou des paramètres sont définis lors de l’instanciation d’un objet, ils sont automatiquement passés au&nbsp;constructeur.</info>




<p>Cette instanciation retournera l’objet suivant 👇.</p>

<highlight lang='javaScript'>{
  nom: “🌮”,
  categorie: "careale",
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
  constructor(nom, categorie) {
    this.nom = nom;
    this.categorie = categorie;
    this.dansLePanier = false;
  }
  
  creerHTML() {
    this.el = document.createElement('div');
    this.el.innerText = this.nom + "(" this categorie + ")";
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
<doclink href='https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Functions/Method_definitions'>Méthode d'une classe JavaScript</doclink>


<br><br>
<h3 id="À l’extérieur de la classe">À l’extérieur de la classe</h3>

<highlight lang='js'>const tacos = new ItemEpicerie(“🌮”);
tacos.creerHTML();</highlight>

<codepen id="GRVLjJJ" tab="js,result" height="500"></codepen>




<br><br>
<h3 class="heading heading--h3" id="À l’intérieur de la classe">À l’intérieur de la classe</h3>

<p>Par exemple, dans le constructeur si l’on souhaite que cette méthode soit appelée à chaque fois qu’un élément est&nbsp;créé.</p>

<codepen id="qBewadg" tab="js,result" height="500"></codepen>


<br><br>

<h3 class="heading heading--h3" id="À partir d’un événement défini dans la classe">À partir d’un événement défini dans la classe</h3>

<p>Par exemple, lorsque l’élément&nbsp;<incode>el</incode>&nbsp;est cliqué, appeler une méthode permettant de faire alterner la valeur de la propriété&nbsp;<incode>dansLePanier</incode>&nbsp;de&nbsp;<incode>true</incode>&nbsp;à&nbsp;<incode>false</incode>&nbsp;et vice-versa.</p>

<info>Afin de rendre le changement perceptible, ajoutons ou retirons la classe <incode>.barre</incode> sur l’élément en fonction de la valeur&nbsp;<incode>dansLePanier</incode>.</info>

<codepen id="PoMgGPZ" tab="js,result" height="500"></codepen>

<exercice href='../../exercices/classe-mario-blocks/'></exercice>




  
<dots></dots>
<grostitre>Multiples instances</grostitre>
<p>Concevoir son code en orienté objet offre la flexibilité de créer rapidement et facilement plusieurs objets&nbsp;similaires.</p><p>Par exemple, il serait possible de créer plusieurs éléments d'une liste d’épicerie à partir d’un champ texte et d’un bouton, en créant un nouvel item à partir de la valeur dans le champ texte lorsque le bouton est&nbsp;appuyé.</p>



<codepen id="VwoNKeo" tab="js,result" height="500"></codepen>

<exercice href='../../exercices/classe-chats/'></exercice>

  



<dots></dots>
<grostitre>Sous-classe</grostitre>

<p>Une sous-classe est en quelque sorte un remix d’une autre classe. On part d’une classe existante et on lui apporte des&nbsp;modifications. 🎛️</p><p>Par exemple, il est possible de partir de la classe&nbsp;<incode>ItemEpicerie</incode>&nbsp;pour créer la classe&nbsp;<incode>ItemEpicerieEpice</incode>&nbsp;en utilisant le mot réservé&nbsp;<incode>extends</incode>&nbsp;comme&nbsp;suit:</p>



<highlight lang='js'>
class ItemEpicerieEpice extends ItemEpicerie {
  constructor(nom, categorie) {
    super(`🌶️ 🔥 ${nom}`, categorie);
  }
}
</highlight>


<p><incode>super('🌶️ 🔥 ${nom}')</incode>&nbsp;indique de créer l’objet à partir de la classe originale. L’objet possède donc toutes les mêmes propriétés et méthodes qu’un objet créé avec&nbsp;<incode>ItemEpicerie</incode>, mais peut être bonifié, comme dans cet exemple où le nom est préfixé par des émojis indiquant que la nourriture est&nbsp;épicé.</p>



<codepen id="WNVWGwj" tab="js,result" height="500"></codepen>
<doclink href='https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Classes/extends'>Extends class</doclink>
<doclink href='https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Operators/super'>super()</doclink>

<exercice href='../../exercices/classe-space-invaders/'></exercice>

