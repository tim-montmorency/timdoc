<?php 
/**
 * @type     exercice
 * @title    Eagles of Death Metal - Peace Love Death Metal
 * @icon     images/thumb.jpg
 * @abstract Pour cet exercice, vous devez écrire du CSS afin de recréer l’album "Peace Love Death Metal" du groupe rock Eagles of Death Metal.
 */
?>

<p class="spacer">Pour cet exercice, vous devez écrire du CSS afin de recréer l’album <a target="_blank" href="https://open.spotify.com/album/6ElixYppXa7ONJQ5NOlt8h">"Peace Love Death Metal"</a> du groupe rock <a target="_blank" href="https://fr.wikipedia.org/wiki/Eagles_of_Death_Metal">Eagles of Death Metal</a>.</p>

<p>Aperçu du résultat 👇</p>

<clipasset src="./videos/apercu.mp4"></clipasset>

<dots></dots>


<grostitre>Matériel</grostitre>

<doclink href="./eagles-of-death-metal-peace-love-death-metal.zip">Dossier de départ</doclink>

<h3>Police d'écriture</h3>

<doclink href="./IdaNarrowBold.zip">Ida Narrow Bold</doclink>

<h3>Couleurs 🎨</h3>

<color>#75d0ed</color>
<color>#f8a8cd</color>
<br>
<color>#444444</color>
<color>#ffffff</color>

<thumbsup>Prenez le temps d'analyser le fichier HTML.</thumbsup>

<alert>Il est <strong>INTERDIT</strong> de modifier le HTML.</alert>

<dots></dots>


<grostitre>Requis de base</grostitre>

<checklist>
  Téléchargez la police d'écriture et placez la dans un dossier <span class="inline-code">fonts</span>.
  Créez une variable pour chacune des couleurs pour utilisation ultérieure.
  La couleur de fond de la page doit être de couleur <em>grise</em> et avoir un dégradé vertical allant du <em>bleu</em> au <em>rose</em>.
  Fusionnez les deux fonds en mode <span class="inline-code">screen</span> afin de donner au gradient un effet délavé.
  L'album doit avoir une dimension verticale et horizontale de <em>80%</em> du plus petit côté de la fenêtre, être de couleur <em>bleue</em> ainsi qu'avoir un ombrage de <em>100px</em> égal de tous les côtés de couleur <em>blanche</em>.
  Utilisez <span class="inline-code">transform</span> afin de positionner l'album au centre de la fenêtre.
</checklist>

<grostitre>Requis mains</grostitre>

<checklist>
  L'élément <span class="inline-code">.stripe</span> doit avoir une hauteur de <em>40%</em> de la hauteur de l'album, occuper tout l'espace disponible en largeur, être centré verticalement dans l'album, avoir un alignement de texte centré et être de couleur <em>rose</em>.
  Le conteneur <span class="inline-code">.hands</span> doit avoir une hauteur de <em>15%</em> du plus petit côté de la fenêtre, occuper tout l'espace disponible en largeur et être centré verticalement à l'intérieur de celui-ci.
  Les éléments <span class="inline-code">.handwrapper</span> doit avoir une largeur de <em>15%</em> du plus petit côté de la fenêtre, occuper tout l'espace disponible en hauteur et se comporter comme du texte.
  L'intérieur des mains (<span class="inline-code">.inside</span>) doit être de couleur <em>blanche</em>.
</checklist>

<grostitre>Requis textes</grostitre>

<checklist>
  Importez la police d'écriture <span class="inline-code">IdaNarrowBold.otf</span>, nommez la <em>IdaNarrow</em> et appliquez-la aux textes.
  Les textes doivent être centrés horizontalement, avoir un espace de lettrage <em>0.05em</em> être de couleur <em>blanche</em> et avoir une déformation verticale d'un facteur de <em>2</em>.
  Le nom du groupe doit avoir une grosseur de police d'écriture de <em>6%</em> du plus petit côté de la fenêtre et être positionné à <em>10%</em> du haut.
  Le titre de l'album doit avoir une grosseur de police d'écriture de <em>5.7%</em> du plus petit côté de la fenêtre et être positionné à <em>10%</em> du bas.
</checklist>

<grostitre>Requis transitions</grostitre>

<checklist>
  Lorsque survolés, les éléments <span class="inline-code">.hand</span> doivent grossir jusqu'a un facteur de <em>150%</em> et faire une rotation de <em>720deg</em> (2 tours) en <em>1 seconde</em>.
  Lors du survol, l'intérieur des mains doit aussi devenir <em>bleu</em> en <em>1 seconde</em>.
  Toujours durant le survol, utilisez la pseudo-classe <span class="inline-code">:has</span> sur l'élément parent <span class="inline-code">.hands</span> afin de déplacer les éléments <span class="inline-code">.handwrapper</span> à gauche <em>(-100%)</em> ou à droite <em>(100%)</em> ainsi que changer leur opacité à <em>0.4</em> en <em>1 seconde</em>. Utilisez <a onclick="event.stopPropagation()" href="#">l'aperçu</a> comme référence.
  Assurez-vous que les éléments reprennent leur état normal en <em>1 seconde</em> lorsque le survol est terminé.
</checklist>

<grostitre>Remise</grostitre>

<checklist>
  Renommez votre dossier <em>"eagles_[nom]_[prenom]"</em>.
  Zippez votre dossier <em>"eagles_[nom]_[prenom]"</em>.
  Joignez votre fichier <em>.zip</em> au devoir <em>"TP09: Eagles of Death Metal"</em>.
</checklist>

<dots></dots>


<grostitre>Ambiance</grostitre>

<!-- <youtube src="./videos/eagles-of-death-metal-i-only-want-you.json"></youtube> -->
<youtube src="BYQ4E0SwPP4"></youtube>

<dots></dots>


<grostitre>Notes de cours 📚</grostitre>

<intlink href="../../background/"></intlink>
<intlink href="../../linear-gradient/"></intlink>
<intlink href="../../modes-de-fusion/"></intlink>
<intlink href="../../box-shadow/"></intlink>
<intlink href="../../unites-de-mesure-avancees/"></intlink>
<intlink href="../../transformation/"></intlink>
<intlink href="../../transition/"></intlink>
<intlink href="../../../html/svg/"></intlink>
<intlink href="../../font-face/"></intlink>
<intlink href="../../opacite/"></intlink>
<intlink href="../../pseudo-classes-avancees/#has"></intlink>

<dots></dots>


<!-- <thumbsup>
  Bonjour à tous,
  <br><br>
  Comme vous avez pu remarquer je ne suis plus parmis vous. Sachez que je n'ai tué personne (je pense). Parfois on fait des erreurs et on doit payer pour. Je me relève les manches et je compte bien réparer ces erreurs afin de peut-être être de retour parmis vous d'ici la fin de votre D.E.C.
  <br><br>
  Je tiens à vous dire que cette année fût une des plus enrichissante de ma vie, grâce à vous. 
  <br><br>
  Vous allez me manquer.
  <br><br>
  Prof Max.
  <br><br>
  <img src="./images/prof-max.jpg" width="300" style="border-radius: 50%">
</thumbsup> -->