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
<clipasset src='medias/animal-crossing-resultat.mp4'></clipasset>
<dots></dots>
<grostitre>Matériel</grostitre>
<h3 class="heading heading--h3" id="Médias 🖼️">Médias 🖼️</h3>



<mediafile src="medias/bg.jpg"> Arrière-plan</mediafile>
<mediafile src="medias/_helpers.scss">_helpers.scss</mediafile>

<grostitre>Configurations</grostitre>
<checklist>Créez et nommez un dossier de projet 📁 suivant la nomenclature suivante [nom_prenom_exa337] par exemple <em>ouellet_marie-michelle_exa337</em>.
Ouvrez maintenant le dossier de projet avec le logiciel Visual Studio Code.
Dans votre dossier de projet&nbsp;📁, ajoutez un fichier <em>index.html</em>&nbsp;📄 contenant les balises de base d'une page Web.
Ajoutez-y un sous-dossier <em>css</em>&nbsp;📁, dans lequel se trouvera une feuille de styles <em>styles.css</em>&nbsp;📄 qui sera générée par un fichier <em>.scss</em>&nbsp;📄 du même nom. Vous n'avez PAS le droit d'écrire directement dans le fichier <em>styles.css</em>.
Collez le code suivant dans votre fichier HTML:</checklist>

<highlight lang='html'>&lt;div class=&quot;characters&quot;&gt;
  &lt;div class=&quot;villager villager--rowan&quot;&gt;
    &lt;img src=&quot;https://tim-montmorency.com/timdoc/582-518MO/exercices/animal-crossing-v337/medias/1.png&quot;&gt;
  &lt;/div&gt;
  &lt;div class=&quot;villager villager--aurora villager--active&quot;&gt;
    &lt;img src=&quot;https://tim-montmorency.com/timdoc/582-518MO/exercices/animal-crossing-v337/medias/2.png&quot;&gt;
  &lt;/div&gt;
  &lt;div class=&quot;villager villager--bettina&quot;&gt;
    &lt;img src=&quot;https://tim-montmorency.com/timdoc/582-518MO/exercices/animal-crossing-v337/medias/3.png&quot;&gt;
  &lt;/div&gt;
  &lt;div class=&quot;villager villager--leonardo&quot;&gt;
    &lt;img src=&quot;https://tim-montmorency.com/timdoc/582-518MO/exercices/animal-crossing-v337/medias/4.png&quot;&gt;
  &lt;/div&gt;
  &lt;div class=&quot;villager villager--marina&quot;&gt;
    &lt;img src=&quot;https://tim-montmorency.com/timdoc/582-518MO/exercices/animal-crossing-v337/medias/5.png&quot;&gt;
  &lt;/div&gt;
  &lt;div class=&quot;villager villager--blaire&quot;&gt;
    &lt;img src=&quot;https://tim-montmorency.com/timdoc/582-518MO/exercices/animal-crossing-v337/medias/6.png&quot;&gt;
  &lt;/div&gt;
  &lt;div class=&quot;villager villager--sprocket&quot;&gt;
    &lt;img src=&quot;https://tim-montmorency.com/timdoc/582-518MO/exercices/animal-crossing-v337/medias/7.png&quot;&gt;
  &lt;/div&gt;
  &lt;div class=&quot;villager villager--hornsby&quot;&gt;
    &lt;img src=&quot;https://tim-montmorency.com/timdoc/582-518MO/exercices/animal-crossing-v337/medias/8.png&quot;&gt;
  &lt;/div&gt;
  &lt;div class=&quot;villager villager--mira&quot;&gt;
    &lt;img src=&quot;https://tim-montmorency.com/timdoc/582-518MO/exercices/animal-crossing-v337/medias/9.png&quot;&gt;
  &lt;/div&gt;
  &lt;div class=&quot;villager villager--claude&quot;&gt;
    &lt;img src=&quot;https://tim-montmorency.com/timdoc/582-518MO/exercices/animal-crossing-v337/medias/10.png&quot;&gt;
  &lt;/div&gt;
  &lt;div class=&quot;villager villager--cube&quot;&gt;
    &lt;img src=&quot;https://tim-montmorency.com/timdoc/582-518MO/exercices/animal-crossing-v337/medias/11.png&quot;&gt;
  &lt;/div&gt;
  &lt;div class=&quot;villager villager--sylvana&quot;&gt;
    &lt;img src=&quot;https://tim-montmorency.com/timdoc/582-518MO/exercices/animal-crossing-v337/medias/12.png&quot;&gt;
  &lt;/div&gt;
&lt;/div&gt;</highlight>


<warning>Vous n’avez PAS le droit de modifier le code HTML ci-dessus&nbsp;👆 <br><br>Vous n'avez PAS le droit d'écrire directement dans le fichier <em>styles.css</em>.</warning>

<alert>Dans votre code, vous devez obligatoirement ajouter une ligne de commentaire de début et de fin pour définir à quelle étape des requis le bloc de code correspond. Voici un exemple:</alert>
<highlight lang='css'>/*** DÉBUT requis #1 ***/ 
.timeline{
    color: purple;
    border: 1px solid blue;
}
.year{
    font-size: 40px;
    font-weight: 900;
}
/**** FIN requis #1 ****/</highlight>

<warning>S'il y a plus d'un endroit distinct où vous devez ajouter du code pour un requis spécifique, vous pouvez le scinder en le nommant le commentaire 1a, 1b, 1c etc., comme dans l'exemple ci-dessous:</warning>

<highlight lang='css'>/*** DÉBUT requis #1a ***/ 
.timeline{
    color: purple;
    border: 1px solid blue;
}
/**** FIN requis #1a ****/

.month{
    text-decoration: underline;
}

/*** DÉBUT requis #1b ***/ 
.year{
    font-size: 40px;
    font-weight: 900;
}
/**** FIN requis #1b ****/
</highlight>

<dots></dots>
<grostitre>Requis</grostitre>
<checklist>Ajoutez l'image d'arrière-plan à la page. Celle-ci doit couvrir l'entièreté de la page.
Le bloc contenant tous les personnages doit prendre toute la largeur de l'écran, jusqu'à concurrence de 900px de large, être centré horizontalement dans la page ↔️ et avoir une marge intérieure de 20px de tous les côtés.<br><br>Attention de faire en sorte que la dimension totale soit bien de 900px incluant les marges intérieures.
Téléchargez et déposez le fichier <code>_helpers.scss</code> dans votre projet : créez un dossier nommé de façon pertinente pour ce type de fichier et déposez le fichier dans ce dossier&nbsp;📁.
Importez <code>_helpers.scss</code> dans votre code selon la méthode appropriée.
Appliquez le mixin card à chacun des villageois.
Affichez un maximum de villageois par rangée. Ils doivent prendre tout l'espace disponible <em>(ne pas laisser d'espace vide en fin de rangée)</em> et ne jamais devenir plus petit que 200px de large. 
Les villageois doivent avoir une hauteur de 300px, une gouttière 15px entre eux et leur image doit-être centré horizontalement ↔️ et verticalement ↕️ à l'intérieur de ceux-ci
Utilisez une boucle <em>for</em> en SCSS afin de sélectionner chacun des villageois. À l'intérieur de cette boucle créez-vous deux variables SCSS qui contiendront des couleurs que nous utiliserons plus tard pour créer des dégradés.
Votre première variable SCSS doit contenir la couleur de la variable <code>$primary</code> du fichier <code>_helpers.scss</code>. Cependant, le hue de cette couleur devra être altéré de 25 par itération de boucle. Ainsi le hue de la couleur dans cette variable pour le 1<sup>er</sup> villageois sera de 25, pour le 2<sup>e</sup> de 50, pour le 3<sup>e</sup> de 75, etc.<br><br>Pour tester votre boucle et votre variable, vous pouvez temporairement changer la couleur de fond du villageois par celle-ci.  
Votre deuxième variable SCSS doit avoir la même valeur de hue que votre première variable SCSS, mais avec un extra hue de 50. Autrement dit le hue de la couleur contenue dans cette variable pour le 1<sup>er</sup> villageois sera de 75, pour le 2<sup>e</sup> de 100, pour le 3<sup>e</sup> de 125, etc.
Toujours dans votre boucle SCSS, créez un dégradé de haut en bas à partir des couleurs contenues dans les variables SCSS que vous venez de créer.
Créez-vous maintenant une boucle SCSS à partir de la variable <code>$villagersArr</code> contenue dans le fichier <code>_helpers.scss</code> et de sélectionner chaque villageois.
À l'intérieur de cette boucle, faites afficher le nom de chacun des villageois en blanc ⚪️ sur un fond noir semi-transparent ⚫️ au bas de chacun de ceux-ci. 
Le texte doit-être centré, avoir une marge intérieure de 10px de tous les côtés et la première lettre de chaque nom doit être en majuscule <em>(sans modifier pour autant la variable </em><code>$villagersArr</code><em>)</em>. 
Utilisez l'imbrication SASS afin de créer la classe modificateur <code>villager--active</code>. Celle-ci doit faire grossir de 5% le villageois l'ayant. La carte doit être centrée dans sa "cellule" de la grille.
Ajoutez un fichier script.js dans votre projet. En JavaScript, faites en sorte que lorsqu'un villageois se fait cliquer dessus, il reçoive la classe <code>villager--active</code>. Attention, il ne peut y avoir qu'un seul villageois actif à la fois. Autrement dit, cette classe ne doit jamais être sur deux villageois en même temps.
À partir de 900px et plus, créez une variable  qui liste les noms suivants: bettina, leonardo, hornsby et sylvana. Avec une boucle sur chacun de ceux-ci, faites en sorte que les villageois Bettina, Leonardo, Hornsby et Sylvana prennent deux colonnes de large plutôt qu'une seule comme les autres villageois.</checklist>

<dots></dots>
<grostitre>Remise</grostitre>
<ul>
    
    <li>
        <p>Compressez ensuite votre dossier de travail en <a target="_blank" rel="noopener noreferrer"
                href="https://www.ezyzip.com/">fichier&nbsp;zip 🗜</a></p>
    </li>
    <li>
        <p>Envoyez-moi un <a target="_blank" rel="noopener noreferrer"
                href="https://teams.microsoft.com/l/chat/0/0?users=mariem.ouellet@cmontmorency.qc.ca">message privé
                sur Teams</a> contenant votre fichier&nbsp;zip.</p>
    </li>
</ul>