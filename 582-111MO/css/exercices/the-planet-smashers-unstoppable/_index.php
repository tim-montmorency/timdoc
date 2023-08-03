<?php 
/**
 * @type     exercice
 * @title    The Planet Smashers - Unstoppable
 * @icon     images/thumb.jpg
 * @abstract Pour cet exercice, vous devez écrire du CSS afin de recréer l’album "Unstoppable" du groupe The Planet Smashers.
 */
?>

<p class="spacer">Pour cet exercice, vous devez écrire du CSS ainsi que des <em>media queries</em> afin de recréer l’album <a target="_blank" href="https://open.spotify.com/album/1kJP7cQaT8xHYSKlknNiuS">"Unstoppable"</a> du groupe <a target="_blank" href="https://en.wikipedia.org/wiki/The_Planet_Smashers">The Planet Smashers</a>.</p>

<p>Cet album a la particularité d'avoir un arrière-plan utilisant un <a target="_blank" href="https://www.google.com/search?q=japanese+cube+pattern&tbm=isch">motif de cubes japonais</a>.</p>

<p>Aperçu du résultat 👇</p>

<clipasset src="videos/apercu.mp4"></clipasset>

<dots></dots>


<grostitre>Matériel</grostitre>

<doclink href="./the-planet-smashers-unstoppable.zip">Dossier de départ</doclink>

<h3>Couleurs 🎨</h3>

<color>#f8f400</color>
<color>#e95821</color>

<h3>Médias</h3>

<mediafile src="images/logo.png">Logo</mediafile>
<mediafile src="images/drum.png">Batterie</mediafile>
<mediafile src="images/bass.png">Basse</mediafile>
<mediafile src="images/sax.png">Saxophone</mediafile>
<mediafile src="images/trombone.png">Trombone</mediafile>

<dots></dots>

<warning>Vous devrez utiliser les <em>media queries</em> afin de déplacer les éléments selon la grandeur de la fenêtre.</warning>

<dots></dots>

<grostitre>Requis de base</grostitre>

<checklist>
  Le fond de la page doit avoir un dégradé allant de <em>jaune</em> à <em>orange</em>.
  L'élément <span class="inline-code">.wrapper</span> doit avoir:<br>&nbsp;&nbsp;•&nbsp;Une largeur minimale de 520px<br>&nbsp;&nbsp;•&nbsp;Une largeur maximale de 1000px<br>&nbsp;&nbsp;•&nbsp;Une hauteur de 740px<br>&nbsp;&nbsp;•&nbsp;Avoir une bordure solide noire de 20px<br>&nbsp;&nbsp;•&nbsp;Être centré horizontalement dans la page
  Téléchargez toutes les images et placez les dans un sous-dossier <span class="inline-code">images</span>.
  Utilisez la balise <span class="inline-code">img</span> afin d'ajouter les 5 images à l'intérieur de l'élément <span class="inline-code">.wrapper</span>.
  Toutes les images doivent être en <span class="inline-code">position: absolute;</span>.
</checklist>

<grostitre>Fenêtre par défaut</grostitre>

<checklist>
  Le logo doit être placé à <em>88px</em> de la gauche et <em>62px</em> du haut.
  La basse doit être placé à <em>340px</em> de la gauche et <em>420px</em> du haut.
  La batterie doit être placé à <em>40px</em> de la gauche et <em>290px</em> du haut.
  Le trombone doit être placé à <em>180px</em> de la gauche et <em>390px</em> du haut.
  Le saxophone doit être placé à <em>110px</em> de la gauche et <em>540px</em> du haut.
</checklist>

<grostitre>Fenêtre de 680px et +</grostitre>

<checklist>
  La basse doit être déplacé à <em>500px</em> de la gauche.
  La batterie doit être déplacé à <em>440px</em> de la gauche et <em>150px</em> du haut.
</checklist>

<grostitre>Fenêtre de 840px et +</grostitre>

<checklist>
  La batterie doit être déplacé à <em>600px</em> de la gauche.
  Le trombone doit être déplacé à <em>260px</em> de la gauche.
</checklist>

<grostitre>Fenêtre de 1000px et +</grostitre>  

<checklist>
  La batterie doit être déplacé à <em>760px</em> de la gauche.
  La basse doit être déplacé à <em>660px</em> de la gauche.
  Le trombone doit être déplacé à <em>420px</em> de la gauche.
</checklist>

<dots></dots>



<grostitre>Ambiance</grostitre>

<h3>The Planet Smashers - Police the Nation</h3>

<audioplayer src="audios/the-planet-smashers-police-the-nation.mp3"></audioplayer>

<dots></dots>


<grostitre>Notes de cours 📚</grostitre>

<?php intlink("../../media-queries/"); ?>
<?php intlink("../../linear-gradient/"); ?>

<dots></dots>
