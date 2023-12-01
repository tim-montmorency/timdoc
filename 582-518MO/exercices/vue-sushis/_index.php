<?php
/**
 * @type     exercice
 * @title    Vue - Menu de sushis
 * @icon     images/sushis.jpg
 * @abstract 
 */
?>

<p>Pour cet exercice, vous devez compléter un menu d’un restaurant de sushis 🍣 permettant de visualiser le détail d’une commande en temps&nbsp;réel.</p>
<p>Aperçu du résultat 👇</p>
<clipasset src='images/vue-sushis-resultat.mp4'></clipasset>
<dots></dots>
<grostitre>Matériel</grostitre>
<a href="images/prenom-nom.zip" target="_blank" rel="noopener noreferrer" download="" class="starting-files">Dossier de départ 📁</a>


<h3 class="heading heading--h3" id="Couleurs 🎨">Couleurs 🎨</h3>
<table class="table-couleurs">
    <tr>
        <td>Bleu sombre</td>
        <td>
            <color>#586F7C</color>
        </td>
    </tr>
    <tr>
        <td>Bleu charbon</td>
        <td>
            <color>#2F4550</color>
        </td>
    </tr>
    <tr>
        <td>Bleu poudre</td>
        <td>
            <color>#B8DBD9 </color>
        </td>
    </tr>
</table>

<dots></dots>
<grostitre>Requis CSS</grostitre>

<checklist>Centrez horizontalement ↔️ et verticalement ↕️ les items du menu.
Chaque item du menu doit avoir une largeur de 150px et un espace de 15px entre eux. Autant d'items que possible doivent s'afficher sur une seule ligne.
Les boutons ➖ et ➕doivent avoir une dimension de 40x40px, être bleu sombre par défaut et bleu charbon au survol.
La bulle de total doit avoir une dimension de 150x150px, être bleu poudre et le prix à l'intérieur doit avoir une taille de police de 40px.</checklist>



<dots></dots>
<grostitre>Requis Vue</grostitre>
<checklist>Importez le cadriciel Vue via CDN. 
Créez une app Vue.
Dans votre app, la fonction <em>data()</em> retournera une propriété <em>sushisArr</em> qui contiendra un tableau (array) listant différents objets&nbsp;: un pour chaque sushi.
Analysez la démo ci-haut. Quelles informations uniques à chaque sushi devraient être transformées en propriétés contenues dans les objets listés dans <em>sushisArr</em>? Créez-les et populez-les avec les données de l'exemple ci-haut.
Dans le <em>template</em> index.html, créez une boucle sur chacun des sushis listés dans <em>sushisArr</em>.
Construisez ainsi le contenu HTML de chaque sushi en récupérant la valeur des propriétés des objets que vous avez créés à l'étape 4.
Les boutons ➖ et ➕ doivent permettre de diminuer/augmenter le nombre de sushis de chaque sorte respective. Attention, un nombre de sushis ne peut jamais être négatif.
Utilisez des propriétés calculées afin d'afficher en temps réel le nombre de morceaux ainsi que le prix total lorsque des sushis sont ajoutés/retirés. </checklist>


<dots></dots>
<grostitre>Requis Vue  - Composante</grostitre>
<p>Maintenant, essayons de faire la même chose que l'étape précédente mais en transformant un sushi du menu en une composante réutilisable pour générer tous les autres.</p>
<checklist>
  Copiez votre fichier complété de l'étape précédente index.html et nommez le index-composante.html
  Copiez votre fichier complété de l'étape précédente main.js et nommez le main-composante.js
  Dans index-composante.html, changez le lien de main.js pour main-composante.js
  Dans ces 2 nouveaux fichiers, modifiez l'app Vue que vous avez précédemment créé. Créez une composante intitulée <em>"sushi"</em>. Cette composante devra être utilisée pour générer l'aperçu de chaque item sur le menu via une boucle Vue.</checklist>



<dots></dots>
<grostitre>Notes de cours 📚</grostitre>
<?php intlink("../../javascript/vue-js/introduction") ?>
<?php intlink("../../javascript/vue-js/creation-app-bases") ?>
<?php intlink("../../javascript/vue-js/elements-de-formulaire") ?>
<?php intlink("../../javascript/vue-js/proprietes-calculees") ?>
<?php intlink("../../javascript/vue-js/composantes") ?>

