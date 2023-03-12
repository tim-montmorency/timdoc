<?php 
/**
 * @type     exercice
 * @title    Nine Inch Nails - Broken
 * @icon     images/thumb.jpg
 * @abstract Pour cet exercice, vous devez écrire du CSS afin de recréer la pochette du mythique album industriel "Broken" de Nine Inch Nails.
 */
?>

<p class="spacer">Pour cet exercice, vous devez écrire du CSS afin de recréer la pochette du mythique album industriel <a target="_blank" href="https://open.spotify.com/album/3xJJhnRFE8aPu3Ml4WGTbl">"Broken"</a> de <a target="_blank" href="https://en.wikipedia.org/wiki/Nine_Inch_Nails">Nine Inch Nails</a>.</p>

<p>Aperçu du résultat 👇</p>

<img src="images/apercu.jpg">

<dots></dots>


<grostitre>Matériel</grostitre>

<doclink href="./nine-inch-nails-broken.zip">Dossier de départ</doclink>

<h3>Couleurs 🎨</h3>

<color>#4d1806</color>
<color>#fcbd3c</color>
<color>#e85812</color>

<h3>Médias</h3>

<mediafile src="./images/bg-1.jpg">Feu 1</mediafile>
<mediafile src="./images/bg-2.jpg">Feu 2</mediafile>

<alert>Il est <strong>interdit</strong> de modifier le HTML.</alert>

<dots></dots>


<grostitre>Requis de base</grostitre>

<checklist>
  Téléchargez les images et placez les dans un dossier <span class="inline-code">images</span>.
  L'arrière-plan doit être un dégradé allant du <em>brun</em> au <em>jaune</em> et partant du coin <em>haut gauche</em> pour aller au coin <em>bas droite</em>.
  L'album doit avoir une dimension de <em>500x500px</em>, être centré horizontalement et être de couleur <em>orange</em>.
</checklist>

<grostitre>Requis arrière-plan 1</grostitre>

<checklist>
  Utilisez le pseudo-élément <span class="inline-code">::before</span> afin créer le premier layer d'arrière-plan en position <em>absolue</em> couvrant tout l'espace disponible à l'intérieur de l'album.
  Attribuez lui l'image d'arrière-plan <span class="inline-code">bg-1.jpg</span>.
  Utilisez les filtres afin que le layer ait un contraste de <em>90%</em>, une luminosité de <em>110%</em> et un flou de <em>5px</em>;
</checklist>

<grostitre>Requis arrière-plan 2</grostitre>

<checklist>
  Utilisez le pseudo-élément <span class="inline-code">::after</span> afin créer le deuxième layer d'arrière-plan en position <em>absolue</em> couvrant tout l'espace disponible à l'intérieur de l'album.
  Attribuez lui l'image d'arrière-plan <span class="inline-code">bg-2.jpg</span>.
  Changez son opacité afin qu'il soit à moitier transparent et utilisez les filtres afin qu'il ait un flou de <em>10px</em>.
  À ce stade-ci vos arrière-plans devraient déborder de l'album. Faites en sorte de faire disparaitre le superflu.
</checklist>

<grostitre>Requis texte</grostitre>

<checklist>
  En ce moment, les textes devraient se retrouver derrière les layers de l'arrière-plan. Faites-en sorte qu'ils se retrouvent au premier plan.
  Utilisez <span class="inline-code">@font-face</span> afin de charger la police d'écriture <em>AkzidenzGrotesk-Black.otf</em>, nommez la <em>Broken</em> et attribuez-la aux textes.
  Les textes doivent être centrés horizontalement et prendre toute la largeur de l'album.
  Le <span class="inline-code">h1</span> doit avoir une grosseur de police d'écriture de <em>500px</em>, être positionné à <em>-120px</em> du haut et être de couleur <em>blanche</em>.
  Il doit aussi avoir une opacité de <em>0.6</em> et un mode de fusion <span class="inline-code">overlay</span>.
  Le <span class="inline-code">h2</span> doit avoir une grosseur de police d'écriture de <em>22px</em>, être positionné à <em>370px</em> du haut et être de couleur <em>noire</em>.
  Attribuez-lui une opacité de <em>0.8</em>.
</checklist>

<grostitre>Remise</grostitre>

<checklist>
  Renommez votre dossier <em>"nin_[nom]_[prenom]"</em>.
  Zippez votre dossier <em>"nin_[nom]_[prenom]"</em>.
  Joignez votre fichier <em>.zip</em> au devoir <em>"TP06: Nine Inch Nails - Broken"</em>.
</checklist>

<dots></dots>


<grostitre>Ambiance</grostitre>

<clip src="./videos/nine-inch-nails-happiness-in-slavery.mp4"></clip>

<dots></dots>


<grostitre>Notes de cours 📚</grostitre>

<?php intlink("../../position/"); ?>
<?php intlink("../../margin/"); ?>
<?php intlink("../../linear-gradient/"); ?>
<?php intlink("../../background/"); ?>
<?php intlink("../../pseudo-elements/"); ?>
<?php intlink("../../opacite/"); ?>
<?php intlink("../../overflow/"); ?>
<?php intlink("../../font-face/"); ?>
<?php intlink("../../filtres/"); ?>
<?php intlink("../../modes-de-fusion/"); ?>

<dots></dots>


<br><span class="remark">Hommage à Manu.</span>