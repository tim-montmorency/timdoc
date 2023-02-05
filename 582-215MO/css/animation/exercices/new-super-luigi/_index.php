<?php 
/**
 * @type     exercice
 * @title    Animation - New Super Luigi
 * @icon     images/thumb.jpg
 * @abstract Pour cet excercice, vous devrez recréer une scène du chateau du niveau Frosted Glacier du jeu New Super Luigi sur la Wii U.
 */
?>

<p class="spacer">Pour cet excercice, vous devrez recréer une scène du chateau du niveau Frosted Glacier du jeu <a target="_blank" href="https://en.wikipedia.org/wiki/New_Super_Luigi_U">New Super Luigi sur la Wii U</a>.</p>

<p>Aperçu du résultat 👇</p>

<clipasset src="videos/animation-new-super-luigi.mp4"></clipasset>

<dots></dots>


<grostitre>Matériel</grostitre>

<doclink href="https://codepen.io/tim-momo/pen/JjBzLRV?editors=1100">Pen de départ</doclink>

<dots></dots>


<grostitre>Requis</grostitre>

<checklist>
  Créez deux animations, une pour les thwomps aux extrémités et une autre pour ceux au centre. Ces animations devront avoir une durée totale de 4 secondes. Durant la première seconde, les thwomps resteront immobiles avant de descendre la seconde suivante, de remonter durant la 3e et de finalement rester immobile tout au long de la dernière seconde.<br><br>La différence entre les deux animations réside en la distance parcouru par les thwomps. Celle gérant ceux aux extrémités devraient les faire descendre d'une distance équivalente à 38% du côté le plus petit de la fenêtre, tandis que celle gérant ceux au centre devrait les faire descendre de 34% uniquement.
  Au clic du bouton <em>"Start"</em>, la classe <em>"paused"</em> est ajouté/retiré à la balise <incode>body</incode>. La présence ou absence de cette classe est notamment utilisée afin de déterminé si le logo <em>"Pause"</em> doit être visible ou non. Il vous faudra aussi vous fier à la présence ou absence de cette classe afin d'arrêter/continuer les animations des thwomps.
</checklist>

<dots></dots>


<grostitre>Notes de cours 📚</grostitre>

<?php intlink("../../../animation/"); ?>

<dots></dots>