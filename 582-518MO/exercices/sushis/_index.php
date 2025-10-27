<?php
/**
 * @type     exercice
 * @title    Vue - Menu de sushis
 * @icon     images/thumb.webp
 * @abstract Pour cet exercice, vous devez compléter un menu d’un restaurant de sushis 🍣 permettant de visualiser le détail d’une commande en temps&nbsp;réel.
 */
?>

<p>Pour cet exercice, vous devez compléter un menu d’un restaurant de sushis 🍣 permettant de visualiser le détail d’une
    commande en temps&nbsp;réel.</p>

<dots></dots>
<grostitre>Aperçu du résultat 👇</grostitre>

<clipasset src="images/vue-sushis-resultat.mp4"></clipasset>


<dots></dots>
<grostitre>Matériel</grostitre>
<a href="images/sushis-dossier-depart.zip" target="_blank" rel="noopener noreferrer" download=""
    class="starting-files">Dossier de départ 📁</a>


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
    Cette étape ci doit utiliser <em>CSS Grid</em>. Chaque item du menu doit avoir une largeur de 150px et un espace de
    15px entre eux. Autant d'items que possible doivent s'afficher sur une seule ligne.
    Les boutons ➖ et ➕ doivent avoir une dimension de 40x40px, être bleu sombre par défaut et bleu charbon au survol.
    La bulle du prix total doit avoir une dimension de 150x150px, être bleu poudre et le prix à l'intérieur doit avoir
    une taille de police de 40px.</checklist>



<dots></dots>
<grostitre>Requis Vue</grostitre>
<!-- no 5 version composante Créez une composante intitulée <em>sushi</em>. Cette composante devra être utilisée pour générer l'aperçu de chaque item sur le menu en bouclant sur le array <em>sushisArr</em> de l'app Vue.-->
<checklist>Importez le cadriciel Vue 3 via CDN.
    Créez une app Vue.
    Dans votre app, la fonction <incode>data()</incode> retournera une propriété <incode>sushisArr</incode> qui
    contiendra un tableau (array) listant différents objets&nbsp;: un pour chaque sushi.
    Analysez la démo ci-haut. Quelles informations uniques à chaque sushi devraient être transformées en propriétés
    contenues dans les objets listés dans <incode>sushisArr</incode>? Créez-les et populez-les avec les données de
    l'exemple ci-haut.
    Dans le fichier <em>index.html</em>, créez une boucle sur chacun des sushis listés dans <incode>sushisArr</incode>.
    Dans cette boucle, construisez le contenu HTML de chaque sushi en récupérant la valeur des propriétés des objets que
    vous avez créés à l'étape 4.
    Les boutons ➖ et ➕ doivent permettre de diminuer/augmenter le nombre de sushis de chaque sorte respective.
    Attention, un nombre de sushis ne peut jamais être négatif.
    Utilisez des <em>propriétés calculées</em> afin d'afficher en temps réel le nombre de morceaux ainsi que le <em>prix
        total</em> lorsque des sushis sont ajoutés/retirés.
</checklist>


<dots></dots>

<grostitre>Requis Vue - Composante</grostitre>

<warning>La section <em>Requis Vue - Composante</em> est à faire seulement si on a couvert les <a href="../../javascript/vue-js/composantes">composantes Vue</a> jusqu'à maintenant. Sinon, ne pas faire la partie qui suit, nous y reviendrons plus tard.</warning>

<p>Maintenant, essayons de faire la même chose que l'étape précédente mais en transformant un sushi du menu en une
    composante réutilisable pour générer tous les autres.</p>

<checklist>
    Copiez votre fichier complété de l'étape précédente <em>index.html</em> et nommez le <em>index-composante.html</em>
    Copiez votre fichier complété de l'étape précédente main.js et nommez le <em>main-composante.js</em>
    Dans index-composante.html, changez le lien de main.js pour <em>main-composante.js</em>
    Dans ces 2 nouveaux fichiers, modifiez l'app Vue que vous avez précédemment créée. Créez une composante intitulée
    <em>sushi</em>. Cette composante devra être utilisée pour générer l'aperçu de chaque item sur le menu via une boucle
    Vue.
</checklist>

<alert>
    Pour cette étape, il n'est pas nécessaire de faire le calcul du <em>prix total</em> comme vous avez fait au #8 des
    <a href="#requis-vue">Requis - Vue</a> puisqu'on n'a pas couvert la <a
        href="https://www.w3schools.com/vue/vue_emit.php">méthode intégrée <incode>$emit</incode></a> qui permet de
    faire le lien entre une app et ses composantes.
</alert>


<dots></dots>
<grostitre>Bonus CSS Grid</grostitre>

<info>
    Notez que l'<a href="#apercu-du-resultat">aperçu du résultat</a> en haut de cette page ne montre pas le résultat
    attendu pour ce bonus.
</info>

<checklist>
    Marquez un sushi *vedette* (ex. le premier) et faites-le occuper <em>2 colonnes</em> × <em>2 rangées</em> dans la grille.
    À partir de <em>900 px</em> de largeur de fenêtre, positionnez la <em>bulle de total</em> en bas à droite de la grille, en lui faisant occuper <em>2 rangées</em>.
    Ajustez l’image du sushi vedette pour qu’elle couvre son espace (<incode>object-fit</incode>).
</checklist>




<dots></dots>
<grostitre>Requis Vue - Composante + Prix total</grostitre>
<checklist>
    Avec ce qu'on a vu aujourd'hui en classe (cours 9.1), modifiez votre composante <em>sushi</em> pour qu'elle puisse émettre un événement à chaque fois qu'un sushi est ajouté ou retiré.
    Cet événement devra être capté par l'app Vue principale afin de recalculer le prix total.
</checklist>





<dots></dots>
<grostitre>Notes de cours 📚</grostitre>
<h4 class="heading heading--h4" id="CSS-Grid">Notes de cours Vue JS</h4>
<!--
<intlink href="../../javascript/vue-js/creation-app/"></intlink>
<intlink href="../../javascript/vue-js/donnees/"></intlink>
<intlink href="../../javascript/vue-js/methodes-et-evenements/"></intlink>
<intlink href="../../javascript/vue-js/condition-v-if/"></intlink>
<intlink href="../../javascript/vue-js/boucle/"></intlink>
<intlink href="../../javascript/vue-js/elements-de-formulaire"></intlink>
<intlink href="../../javascript/vue-js/proprietes-calculees"></intlink>
<intlink href="../../javascript/vue-js/composantes"></intlink>
-->
<ul>
    <li>
        <a href="https://tim-montmorency.com/compendium/582-511-web5/vue/creation-app.html" target="_blank" rel="noopener noreferrer">
                Vue - Création d'applications
        </a>
    </li>
    <li>
        <a href="https://tim-montmorency.com/compendium/582-511-web5/vue/interpolation.html" target="_blank" rel="noopener noreferrer">
                Vue - Données et interpolation
        </a>
    </li>
    <li>
        <a href="https://tim-montmorency.com/compendium/582-511-web5/vue/methodes-evenements.html" target="_blank" rel="noopener noreferrer">
                Vue - Méthodes et événements
        </a>    
    </li>
    <li>
        <a href="https://tim-montmorency.com/compendium/582-511-web5/vue/condition.html" target="_blank" rel="noopener noreferrer">
                Vue - Condition v-if
        </a>
    </li>
    <li>
        <a href="https://tim-montmorency.com/compendium/582-511-web5/vue/boucle.html" target="_blank" rel="noopener noreferrer">
                Vue - Boucle
        </a>
    </li>
    <li>
        <a href="https://tim-montmorency.com/compendium/582-511-web5/vue/propriete-calculee.html" target="_blank" rel="noopener noreferrer">
                Vue - Propriétés calculées
        </a>
    </li>
      <li>
        <a href="https://tim-montmorency.com/compendium/582-511-web5/vue/composante.html" target="_blank" rel="noopener noreferrer">
                Vue - Composantes
        </a>
    </li>
    <li>
        <a href="https://tim-montmorency.com/compendium/582-511-web5/vue/props.html" target="_blank" rel="noopener noreferrer">
                Vue - Props
        </a>
    </li>
    <li></li>
        <a href="https://tim-montmorency.com/compendium/582-511-web5/vue/emit.html" target="_blank" rel="noopener noreferrer">
                Vue - Émettre des événements
        </a>
    </li>
</ul>



<h4 class="heading heading--h4" id="CSS-Grid">Notes de cours CSS Grid</h4>
<ul>
    <li>
        <a href="https://tim-montmorency.com/compendium/582-511-web5/css/grid/intro.html" target="_blank" rel="noopener noreferrer">
                CSS Grid - Intro
        </a>
    </li>
    <li>
        <a href="https://tim-montmorency.com/compendium/582-511-web5/css/grid/grid-template-cols-rows.html" target="_blank" rel="noopener noreferrer">
                Conteneur template
        </a>
    </li>
    <li>
        <a href="https://tim-montmorency.com/compendium/582-511-web5/css/grid/gap.html" target="_blank" rel="noopener noreferrer    ">
                Espacement
        </a>
    </li>

    <li>
        <a href="https://tim-montmorency.com/compendium/582-511-web5/css/grid/unites.html" target="_blank" rel="noopener noreferrer">
                Unités
        </a>
    </li>
    <li>
        <a href="https://tim-montmorency.com/compendium/582-511-web5/css/grid/grid-col-row.html" target="_blank" rel="noopener noreferrer">
                Placement col row
        </a>
    </li>
    <li>
        <a href="https://tim-montmorency.com/compendium/582-511-web5/css/grid/grid-area.html" target="_blank" rel="noopener noreferrer">
                Placement area
        </a>
    </li>
    <li>
        <a href="https://tim-montmorency.com/compendium/582-511-web5/css/grid/grid-template-areas.html" target="_blank" rel="noopener noreferrer    ">
                Nommer espaces areas
        </a>
    </li>
</ul>