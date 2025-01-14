<?php 
/**
 * @type     exercice
 * @title    Animation Sprite Sheet - Skate
 * @icon     images/thumb.jpg
 * @abstract Dans le cadre de cet exercice, vous devez reproduire une animation créée par le studio Lobster mettant en vedette un personnage en train de faire du skate 🛹.
 */
?>

<p class="spacer">Dans le cadre de cet exercice, vous devez reproduire une animation créée par le <a target="_blank" href="https://dribbble.com/lobsterstudio">studio Lobster</a> mettant en vedette un personnage en train de faire du skate 🛹. Cependant, il faudra permettre à ce personnage de changer de direction en fonction de la flèche sélectionnée à l’écran.</p>

<p>Aperçu du résultat 👇</p>

<clipasset src="videos/sprite-sheet-skate-resultat.mp4"></clipasset>

<dots></dots>


<grostitre>Matériel</grostitre>

<mediafile src="images/sprite.png">Sprite Sheet</mediafile>
<mediafile src="images/arrow.png">Flèche</mediafile>

<dots></dots>


<grostitre>Requis</grostitre>

<checklist>
  Créez-vous un nouveau pen sur <a onclick="event.stopPropagation();" target="_blank" href="https://codepen.io/">CodePen</a> et attribuez-lui la couleur de fond de votre choix.
  À l'intérieur de celui-ci, créez-vous une zone de 734x400px afin de contenir le skateur et affichez-là au centre de la page <em>(autant verticalement qu'horizontalement)</em>. Chaque frame du skateur à une taille équivalente à la zone que vous venez de définir.
  Animez la sprite sheet de sorte que le skateur donne l'impression d'être en mouvement. L'animation doit s'effectuer en l'espace de 2 secondes ⏱.
  Ajoutez deux boutons radio. Lorsque le 1er est coché, le skateur doit se déplacer vers la gauche ⬅️ et lorsque le 2e est coché, il doit se déplacer vers la droite ➡️.
  Créez deux cercles de 70x70px de la couleur de votre choix afin de représenter les boutons permettant au skateur de changer de direction. Ces boutons doivent-être placé au centre de la page verticalement ↕️ et à 20px de chaque extrémité. Utilisez l'image de flèche fournie à l'intérieur des deux boutons afin d'indiquer leur direction.
  Appuyez sur la flèche de gauche doit cocher le 1er bouton, tandis qu'appuyer sur la flèche de droite doit cocher le 2e. Ce qui, selon le bouton coché, doit ajuster la direction du skateur.
  Lorsque le bouton radio associé à une flèche est coché, celle-ci doit avoir une opacité équivalente à 25% afin d'indiquer que cette option est déjà sélectionnée.
  Finalement, faites disparaitre les boutons radio.
</checklist>

<dots></dots>


<grostitre>Notes de cours 📚</grostitre>

<intlink href="../../../animation-sprite-sheet/"></intlink>

<dots></dots>