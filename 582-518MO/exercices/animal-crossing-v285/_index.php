<?php
/**
 * @type     exercice
 * @title    Animal Crossing
 * @icon     images/thumb.png
 * @abstract Recréer un module permettant de choisir parmi des villageois dans Animal Crossing.
 */
?>

<p>Pour cet exercice, vous devrez recréer un module permettant de choisir parmi des villageois dans <a target="_blank" href="https://www.animal-crossing.com/">Animal&nbsp;Crossing</a>.</p>

<p>Aperçu du résultat 👇</p>
<small>Pour contrôler la vidéo, clic-droit et "Afficher toute les commandes".</small>
<clipasset src="medias/demo-animalcrossing.mp4"></clipasset>
<dots></dots>
<grostitre>Matériel</grostitre>
<h3 class="heading heading--h3" id="Médias 🖼️">Médias 🖼️</h3>



<mediafile src="medias/bg.jpg">Arrière-plan</mediafile>
<!-- <mediafile src="https://tim-montmorency.com/timdoc/582-518MO/exercices/animal-crossing-v285/medias/helpers.scss">_helpers.scss</mediafile>
<small>Si vous n'arrivez pas à le télécharger, copiez l'url ci-dessus, ouvrez un nouvel onglet et collez l'url dans la barre d'url du navigateur + ENTER. Copiez ensuite le contenu de la page, ouvrez un nouveau fichier dans Visual Studio Code, collez le contenu. Enregistrer le fichier sous ce nom : <em>_helpers.scss</em>.</small> -->


<warning>Pour cet examen, vous devrez travailler avec Visual Studio Code. Par contre, vous devez désactiver toutes les extensions VS Code. Je vais passer voir chacun de vos postes de travail, vérifier si vous avez tout désactivé. Donc vous comprenez que pour l'examen, vous ne devez PAS compiler le SASS avec l'extention Live Sass Compiler ni utiliser Live Server.</warning>

<grostitre>Configurations</grostitre>
<checklist>Via le terminal de VS Code, créez un projet Vite et nommez le <em>nomfamille-prenom_exa285</em> tout en minuscules. Par exemple: <em>ouellet_marie-michelle_exa285</em>. 
Faites en sorte que votre projet supporte SASS puisque nous l'utiliserons dans les prochaines étapes.
Ouvrez maintenant le dossier de projet avec le logiciel Visual Studio Code.
&nbsp;<span class="red-label">À SAVOIR</span> : Si vous êtes incapable de réaliser cette étape, il vous sera permis d'utiliser Live Sass Compiler et Live Server pour faire un projet dans Visual Studio Code sans passer par un projet "Vite". Vous allez être évalué en conséquence mais au moins vous pourrez aller de l'avant pour les prochaines étapes. Si tel est le cas, créez un fichier index.html, un fichier style.scss et un fichier script.js dans votre dossier de projet bien nommé.
Dans votre fichier HTML, changez le contenu de la balise <em>title</em> pour votre nom complet (prénom et nom).
Dans votre fichier HTML, remplacez le la ligne <em>div id="app"</em> par:</checklist>

<highlight lang="html">&lt;div class=&quot;characters&quot;&gt;
  &lt;div class=&quot;villager villager--rowan&quot;&gt;
    &lt;img src=&quot;https://tim-montmorency.com/timdoc/582-518MO/exercices/animal-crossing-v285/medias/1.png&quot;&gt;
  &lt;/div&gt;
  &lt;div class=&quot;villager villager--aurora&quot;&gt;
    &lt;img src=&quot;https://tim-montmorency.com/timdoc/582-518MO/exercices/animal-crossing-v285/medias/2.png&quot;&gt;
  &lt;/div&gt;
  &lt;div class=&quot;villager villager--bettina&quot;&gt;
    &lt;img src=&quot;https://tim-montmorency.com/timdoc/582-518MO/exercices/animal-crossing-v285/medias/3.png&quot;&gt;
  &lt;/div&gt;
  &lt;div class=&quot;villager villager--leonardo&quot;&gt;
    &lt;img src=&quot;https://tim-montmorency.com/timdoc/582-518MO/exercices/animal-crossing-v285/medias/4.png&quot;&gt;
  &lt;/div&gt;
  &lt;div class=&quot;villager villager--marina  villager--active&quot;&gt;
    &lt;img src=&quot;https://tim-montmorency.com/timdoc/582-518MO/exercices/animal-crossing-v285/medias/5.png&quot;&gt; 
  &lt;/div&gt;
  &lt;div class=&quot;villager villager--blaire&quot;&gt;
    &lt;img src=&quot;https://tim-montmorency.com/timdoc/582-518MO/exercices/animal-crossing-v285/medias/6.png&quot;&gt; 
  &lt;/div&gt;
  &lt;div class=&quot;villager villager--sprocket&quot;&gt;
    &lt;img src=&quot;https://tim-montmorency.com/timdoc/582-518MO/exercices/animal-crossing-v285/medias/7.png&quot;&gt;
  &lt;/div&gt;
  &lt;div class=&quot;villager villager--hornsby&quot;&gt;
    &lt;img src=&quot;https://tim-montmorency.com/timdoc/582-518MO/exercices/animal-crossing-v285/medias/8.png&quot;&gt; 
  &lt;/div&gt;
  &lt;div class=&quot;villager villager--mira&quot;&gt;
    &lt;img src=&quot;https://tim-montmorency.com/timdoc/582-518MO/exercices/animal-crossing-v285/medias/9.png&quot;&gt;
  &lt;/div&gt;
  &lt;div class=&quot;villager villager--claude&quot;&gt;
    &lt;img src=&quot;https://tim-montmorency.com/timdoc/582-518MO/exercices/animal-crossing-v285/medias/10.png&quot;&gt;
  &lt;/div&gt;
  &lt;div class=&quot;villager villager--cube&quot;&gt;
    &lt;img src=&quot;https://tim-montmorency.com/timdoc/582-518MO/exercices/animal-crossing-v285/medias/11.png&quot;&gt;
  &lt;/div&gt;
  &lt;div class=&quot;villager villager--sylvana&quot;&gt;
    &lt;img src=&quot;https://tim-montmorency.com/timdoc/582-518MO/exercices/animal-crossing-v285/medias/12.png&quot;&gt;  
  &lt;/div&gt;
&lt;/div&gt;</highlight>

<warning>Vous n’avez PAS le droit de modifier le code HTML ci-dessus&nbsp;👆</warning>

<checklist>
  Supprimez les styles CSS qui se trouve dans le fichier créé par vite. Débutez avec un fichier vide.
  Créez un partial nommé helpers et sauvegardez le dans un sous-dossier nommé de façon pertinente pour ce type de fichier. 
  Dans ce fichier, collez le code suivant:
</checklist>
<highlight lang='css'>$primary: #7D80DA;

$biggerVillersArr : 'bettina', 'leonardo', 'hornsby', 'sylvana';

@mixin card {
  background-color: $primary;
  border-radius: 10px;
  transition: transform 0.5s cubic-bezier(.14,1.41,.78,1.17);
}</highlight>

<warning>Vous n’avez PAS le droit de modifier le code SCSS ci-dessus&nbsp;👆</warning>




<alert>Pour la suite, dans votre code, vous devez obligatoirement ajouter une ligne de commentaire pour définir à quelle étape des requis le bloc de code correspond. Voici un exemple:</alert>

<highlight lang="css">/*** Requis #1 ***/ 
.timeline{
    color: purple;
    border: 1px solid blue;
}
.year{
    font-size: 40px;
    font-weight: 900;
}
</highlight>

<alert>S'il y a plus d'un endroit distinct où vous devez ajouter du code pour un requis spécifique, vous pouvez dupliquer le commentaire autant de fois que nécessaire. Voicu un exemple:</alert>

<highlight lang="css">/*** Requis #1 ***/ 
.timeline{
    color: purple;
    border: 1px solid blue;
}

/*** Requis #4 ***/ 
.month{
    text-decoration: underline;
}

/*** Requis #1 ***/ 
.year{
    font-size: 40px;
    font-weight: 900;
}

</highlight>

<dots></dots>
<grostitre>Requis SCSS et CSS grid</grostitre>
<checklist>Ajoutez l'image d'arrière-plan à la page. Celle-ci doit couvrir l'entièreté de la page.
Le bloc contenant tous les personnages doit prendre toute la largeur de l'écran, jusqu'à maximum de 1000px de large, être centré horizontalement dans la page ↔️ et avoir une marge intérieure de 20px de tous les côtés.<br><br>Attention de faire en sorte que la dimension totale soit bien de 1000px incluant les marges intérieures.
Importez <incode>_helpers.scss</incode> dans votre code selon la méthode appropriée.
Appliquez le mixin card à chacun des villageois.
Affichez un maximum de villageois par rangée. Ils doivent prendre tout l'espace disponible <em>(ne pas laisser d'espace vide en fin de rangée)</em> et ne jamais devenir plus petit que 200px de large. 
Les villageois doivent avoir une hauteur de 300px, une gouttière 15px entre eux. Vous devez aussi centrer horizontalement l'image dans la carte de chaque villageois (pour centrer l'image, utiliser la technique de votre choix).
Utilisez une boucle en SCSS afin de sélectionner chacun des villageois contenu du tableau <incode>$biggerVillersArr</incode> qui provient du fichier <incode>_helpers.scss</incode>. À partir de 1000px et plus, faites en sorte que les villageois de ce tableau prennent deux colonnes de large plutôt qu'une seule comme les autres villageois.
Utilisez une boucle <em>for</em> en SCSS afin de sélectionner chacun des villageois. À l'intérieur de cette boucle créez deux variables SCSS qui contiendront des couleurs que nous utiliserons plus tard pour créer des dégradés.
Votre première variable SCSS doit contenir la couleur de la variable <incode>$primary</incode> du fichier <incode>_helpers.scss</incode>. Cependant, le <em>hue</em> de cette couleur devra être altéré de 25 par itération de boucle. Ainsi le <em>hue</em> de la couleur dans cette variable pour le 1<sup>er</sup> villageois sera de 25, pour le 2<sup>e</sup> de 50, pour le 3<sup>e</sup> de 75, etc. <br> <small>Petit indice ici, pour modifier le hue d'une couleur, vous devez utiliser une fonctionnalité provenant du module de couleur SASS.</small><br><br>Pour tester votre boucle et votre variable, vous pouvez temporairement changer la couleur de fond du villageois par celle-ci. 
Votre deuxième variable SCSS doit avoir la même valeur de <em>hue</em> que votre première variable SCSS, mais avec un extra <em>hue</em> de 50. Autrement dit le <em>hue</em> de la couleur contenue dans cette variable pour le 1<sup>er</sup> villageois sera de 75, pour le 2<sup>e</sup> de 100, pour le 3<sup>e</sup> de 125, etc.
Toujours dans votre boucle SCSS, créez un dégradé de haut en bas à partir des couleurs contenues dans les 2 variables SCSS que vous venez de créer.
Utilisez l'imbrication SASS afin de créer la classe modificateur <incode>villager--active</incode>. Celle-ci doit faire grossir de 105% le villageois qui contient cette classe ainsi qu'ajouter une bordure de 5px de couleur #ffa500;
Dans le fichier JavaScript, faites en sorte que lorsqu'un villageois reçoit un clic, on lui ajoute la classe <incode>villager--active</incode>. Attention, il ne peut y avoir qu'un seul villageois actif à la fois. Autrement dit, cette classe ne doit jamais être sur deux villageois en même temps.
</checklist>

<!-- Ancien #12, #13 et #14 (retiré)
 Créez maintenant une boucle SCSS à partir de la variable <incode>$villagersArr</incode> contenue dans le fichier <incode>_helpers.scss</incode> afin de sélectionner chaque villageois.
À l'intérieur de cette boucle, faites afficher le nom de chacun des villageois en blanc ⚪️ sur un fond noir semi-transparent ⚫️. Cet affichage devra apparaitre au bas de chaque villageois (voir l'aperçu au haut de cette page). 
Le texte doit-être centré, avoir une marge intérieure de 10px de tous les côtés. 
-->


<dots></dots>
<grostitre>Remise</grostitre>

<ul>
  <li>Exécutez la commande Vite permettant d'optimiser vos fichiers.</li>
  <li>Supprimez le dossier <code>node_modules</code> de votre projet.</li>
  <li>Compressez ensuite votre dossier de travail en <a target="_blank" rel="noopener noreferrer" href="https://www.ezyzip.com/">fichier&nbsp;zip 🗜</a></li>
  <li>Envoyez-moi un <a target="_blank" rel="noopener noreferrer"  href="https://teams.microsoft.com/l/chat/0/0?users=mariem.ouellet@cmontmorency.qc.ca">message privé sur Teams</a> contenant votre fichier&nbsp;zip.</li>
  <li>Avant de quitter la classe, venez me voir afin que je valide que j'ai bien reçu votre envoi.</li>
</ul>