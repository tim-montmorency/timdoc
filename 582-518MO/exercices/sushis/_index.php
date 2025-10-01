<?php
/**
 * @type     exercice
 * @title    Vue - Menu de sushis
 * @icon     images/thumb.webp
 * @abstract Pour cet exercice, vous devez compléter un menu d’un restaurant de sushis 🍣 permettant de visualiser le détail d’une commande en temps&nbsp;réel.
 */
?>

<p>Pour cet exercice, vous devez compléter un menu d’un restaurant de sushis 🍣 permettant de visualiser le détail d’une commande en temps&nbsp;réel.</p>
<p>Aperçu du résultat 👇</p>
<clipasset src="images/vue-sushis-resultat.mp4"></clipasset>
<dots></dots>
<grostitre>Matériel</grostitre>
<a href="images/prenom-nom-sushis.zip" target="_blank" rel="noopener noreferrer" download="" class="starting-files">Dossier de départ 📁</a>


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

<h3 class="heading heading--h3" id="Medias">Médias</h3>
<mediafile src="./images/1.webp">Sushi 1</mediafile>
<mediafile src="./images/2.webp">Sushi 2</mediafile>
<mediafile src="./images/3.webp">Sushi 3</mediafile>
<mediafile src="./images/4.webp">Sushi 4</mediafile>
<mediafile src="./images/5.webp">Sushi 5</mediafile>
<mediafile src="./images/6.webp">Sushi 6</mediafile>


<dots></dots>
<grostitre>Requis CSS</grostitre>

<checklist>Centrez horizontalement ↔️ et verticalement ↕️ les items du menu.
Cette étape ci doit utiliser CSS Grid. Chaque item du menu doit avoir une largeur de 150px et un espace de 15px entre eux. Autant d'items que possible doivent s'afficher sur une seule ligne.
Les boutons ➖ et ➕ doivent avoir une dimension de 40x40px, être bleu sombre par défaut et bleu charbon au survol.
La bulle du prix total doit avoir une dimension de 150x150px, être bleu poudre et le prix à l'intérieur doit avoir une taille de police de 40px.</checklist>



<dots></dots>
<grostitre>Requis Vue</grostitre>
<!-- no 5 version composante Créez une composante intitulée <em>sushi</em>. Cette composante devra être utilisée pour générer l'aperçu de chaque item sur le menu en bouclant sur le array <em>sushisArr</em> de l'app Vue.--> 
<checklist>Importez le cadriciel Vue via CDN. 
Créez une app Vue.
Dans votre app, la fonction <em>data()</em> retournera une propriété <em>sushisArr</em> qui contiendra un tableau (array) listant différents objets&nbsp;: un pour chaque sushi.
Analysez la démo ci-haut. Quelles informations uniques à chaque sushi devraient être transformées en propriétés contenues dans les objets listés dans <em>sushisArr</em>? Créez-les et populez-les avec les données de l'exemple ci-haut.
Dans le fichier index.html, créez une boucle sur chacun des sushis listés dans <em>sushisArr</em>.
Dans cette boucle, construisez le contenu HTML de chaque sushi en récupérant la valeur des propriétés des objets que vous avez créés à l'étape 4.
Les boutons ➖ et ➕ doivent permettre de diminuer/augmenter le nombre de sushis de chaque sorte respective. Attention, un nombre de sushis ne peut jamais être négatif.
Utilisez des propriétés calculées afin d'afficher en temps réel le nombre de morceaux ainsi que le prix total lorsque des sushis sont ajoutés/retirés. 
</checklist>


<dots></dots>

<grostitre>Requis Vue  - Composante</grostitre>

<warning>Ce qui suit est à faire seulement si on a couvert les <a href="../../javascript/vue-js/composantes">composantes Vue</a> jusqu'à maintenant. Sinon, ne pas faire la partie qui suit, nous y reviendrons plus tard.</warning>


<p>Maintenant, essayons de faire la même chose que l'étape précédente mais en transformant un sushi du menu en une composante réutilisable pour générer tous les autres.</p>
<checklist>
  Copiez votre fichier complété de l'étape précédente <em>index.html</em> et nommez le <em>index-composante.html</em>
  Copiez votre fichier complété de l'étape précédente main.js et nommez le <em>main-composante.js</em>
  Dans index-composante.html, changez le lien de main.js pour <em>main-composante.js</em>
  Dans ces 2 nouveaux fichiers, modifiez l'app Vue que vous avez précédemment créée. Créez une composante intitulée <em>sushi</em>. Cette composante devra être utilisée pour générer l'aperçu de chaque item sur le menu via une boucle Vue.
</checklist>
<alert>Pour cette étape, il n'est pas nécessaire de faire le calcul du prix total comme vous avez fait au #8 des "Requis - Vue" puisqu'on n'a pas couvert la méthode intégrée <incode>$emit</incode> qui permet de faire le lien entre une app et ses composantes.</alert>



<dots></dots>
<grostitre>Notes de cours 📚</grostitre>
<intlink href="../../javascript/vue-js/creation-app/"></intlink>
<intlink href="../../javascript/vue-js/donnees/"></intlink>
<intlink href="../../javascript/vue-js/methodes-et-evenements/"></intlink>
<intlink href="../../javascript/vue-js/condition-v-if/"></intlink>
<intlink href="../../javascript/vue-js/boucle/"></intlink>
<intlink href="../../javascript/vue-js/elements-de-formulaire"></intlink>
<intlink href="../../javascript/vue-js/proprietes-calculees"></intlink>
<intlink href="../../javascript/vue-js/composantes"></intlink>

