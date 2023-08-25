<?php
/**
 * @type     exercice
 * @title    Menu Overwatch
 * @icon     images/thumb-overwatch.jpg
 * @abstract Utiliser @each du langage Sass pour recréer un menu permettant de choisir parmi certains personnages du jeu Overwatch.
 */
?>
<p>Pour cet exercice vous devez recréer un menu permettant de choisir parmi certains personnages du jeu <a href="https://playoverwatch.com/fr-fr/">Overwatch</a>. Afin d’éviter de vous répéter, vous devrez tirer profit de la boucle <code>@each</code> de&nbsp;Scss.</p>

    
    
<p>Aperçu du résultat 👇</p>
<clipasset src='images/each-menu-overwatch-resultat.mp4'></clipasset>
<grostitre>Matériel</grostitre>

<doclink href='https://codepen.io/tim-momo/pen/oNJjzYo'>Pen de départ</doclink>

<h3 class="heading heading--h3" id="Médias 🖼️">Médias 🖼️</h3>

<mediafile src="images/bg.jpeg">Arrière plan</mediafile>
<mediafile src="https://tim-montmorency.com/timdoc/582-518MO/exercices/sass-each-menu-overwatch/images/[nom du personnage].jpg">Images des personnages (remplacer la partie entre [] avant le .jpg)</mediafile>

<checklist>Ajoutez l'image d'arrière-plan en fond de page. Celle-ci doit couvrir entièrement la page, être centrée et ne doit afficher qu'une seule fois.
Faites-en sorte que l'élément avec la classe <code>.overwatch</code> soit centré verticalement ↕️ dans la page.
Les personnages <em>(.characters)</em> doivent être centrés horizontalement ↔️, doivent pouvoir s'afficher sur plusieurs lignes, mais tenter de s'afficher autant que possible sur une même ligne si l'espace le permet.
Utilisez une boucle <code>@each</code> afin de générer des noms de classes ciblant chacun des personnages suivants: <br><em>echo, genji, hanzo, junkrat, lucio, mccree, mercy, moira, orisa, pharah, reaper, reinhardt</em>
Pour chacun de ces personnages, ajouter une image d'arrière-plan dont le chemin de fichier correspond à: <br><code>https://tim-montmorency.com/timdoc/582-518MO/exercices/sass-each-menu-overwatch/images/[nom du personnage].jpg</code> <br>et assurez que cette image soit entièrement visible <em>(les noms des personnages ne devraient pas être tronqués)</em>.
Profitez du nesting de Scss afin de créer un effet de survole sur les personnages. Ceux-ci doivent grandir de 10% en l'espace d'un tiers de seconde, lorsque survolé par la souris.
</checklist>

<dots></dots>
<grostitre>Notes de cours 📚</grostitre>

<?php intlink("../../sass/boucle/") ?>
<?php intlink("../../../582-215MO/css/transformation/") ?>
<?php intlink("../../../582-215MO/css/transition/") ?>
<doclink href='https://smnarnold.com/cours/css/flexbox'>Flexbox</doclink>