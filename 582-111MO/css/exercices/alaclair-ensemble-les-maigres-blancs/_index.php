<?php 
/**
 * @type     exercice
 * @title    Alaclair Ensemble - Les maigres blancs d'Amérique du Noir
 * @icon     images/thumb.jpg
 * @abstract Pour cet exercice, vous devez écrire du HTML et du CSS afin de recréer l’album "Les maigres blancs d'Amérique du Noir" du groupe de rap québécois Alaclair Ensemble.
 */
?>

<p class="spacer">Pour cet exercice, vous devez écrire du HTML et du CSS afin de recréer l’album <a target="_blank" href="https://alaclairensemble.bandcamp.com/album/les-maigres-blancs-dam-rique-du-noir">"Les maigres blancs d'Amérique du Noir"</a> du groupe de rap québécois <a target="_blank" href="https://fr.wikipedia.org/wiki/Alaclair_Ensemble">Alaclair Ensemble</a>.</p>

<p>Aperçu du résultat 👇</p>

<img src="images/apercu.jpg">

<dots></dots>


<grostitre>Matériel</grostitre>

<doclink href="./alaclair-ensemble-les-maigres-blancs.zip">Dossier de départ</doclink>

<h3>Fonts</h3>

<doclink href="https://fonts.google.com/specimen/Bebas+Neue">Bebas Neue 400</doclink>

<h3>Couleurs 🎨</h3>

<color>#f17e00</color>
<color>#612b91</color>
<color>#7f7f7f</color>
<br>
<color>#ffffff</color>
<color>#000000</color>

<h3>Médias</h3>

<mediafile src="./images/noise.svg">Bruit</mediafile>
<mediafile src="./images/queen.webp">Reine</mediafile>

<dots></dots>


<grostitre>Requis de base</grostitre>

<checklist>
  Téléchargez les images et placez les dans un dossier <span class="inline-code">images</span>.
  Créez une variable pour chacune des couleurs.
  Le fond de la page doit être de couleur <em>grise</em> et avoir un dégradé vertical allant du <em>mauve</em> au <em>jaune</em>.
  Fusionnez les deux fonds en mode <span class="inline-code">screen</span> afin de donner au gradient un effet délavé.
  L'album doit avoir une dimension de <em>500x500px</em>, être centré dans la page tant horizontalement que verticalement et être de couleur <em>blanche</em>.
</checklist>

<grostitre>Requis d'arrière-plan</grostitre>

<checklist>
  À l'aide du pseudo-élément <span class="inline-code">::before</span>, créez un cercle <em>noir</em> couvrant l'entièreté de l'album l'album <em>(500x500px)</em> et donnez lui un flou de <em>100px</em>.
  À ce stade-ci, le flou devrait déborder de l'album. Faites-en sorte de faire disparaître l'excédentaire.
  Afin de créer un effet de grain, ajoutez un nouveau layer à l'aide du pseudo-élément <span class="inline-code">::after</span> couvrant la totalité de l'album.
  Appliquez à ce dernier l'image d'arrière-plan <span class="inline-code">noise.svg</span> et donnez lui un flou de <em>0.5px</em>
</checklist>

<grostitre>Requis reine</grostitre>

<checklist>
  À l'aide d'une balise <span class="inline-code">img</span>, ajoutez l'image de la reine à l'endroit indiqué dans le HTML.
  L'image doit être centré horizontalement dans l'album et être par dessus les layers d'arrière-plan.
  Donnez-lui une luminosité de <em>90%</em> et un contraste de <em>130%</em>.
</checklist>

<grostitre>Requis textes</grostitre>

<checklist>
  Assurez-vous que les textes soient au premier-plan de l'album.  
  Importez la police d'écriture <em>Bebas Neue</em> à l'aide de la balise <span class="inline-code">link</span> et appliquez-la aux textes.
  Le nom du groupe doit avoir une grosseur de police d'écriture de <em>20px</em>, être situé à <em>5px</em> du haut et <em>8px</em> de la droite, avoir un mode de fusion <span class="inline-code">overlay</span> et être à demi transparent.
  Le titre de l'album doit avoir une grosseur de police d'écriture de <em>38px</em>, être <em>blanc</em> sur fond <em>mauve</em>, occuper tout l'espace horizontale et être à <em>60px</em> du bas de l'album.
  Assurez-vous que le mot <em>blancs</em> soit de couleur <em>orange</em>.
</checklist>

<dots></dots>


<grostitre>Ambiance</grostitre>

<!-- <clip src="./videos/alaclair-ensemble-pomme.mp4"></clip> -->
<youtube src="./videos/alaclair-ensemble-pomme.json"></youtube>
<span class="remark" style="padding-top: 5px;">Cette chanson ainsi que le vidéoclip sont librement inspirés par <a target="_blank" href="https://www.youtube.com/watch?v=mDGr-SagBZs">Soupe Opera</a></span>

<dots></dots>


<grostitre>Notes de cours 📚</grostitre>

<?php intlink("../../margin/"); ?>
<?php intlink("../../variables/"); ?>
<?php intlink("../../linear-gradient/"); ?>
<?php intlink("../../modes-de-fusion/"); ?>
<?php intlink("../../filtres/"); ?>
<?php intlink("../../pseudo-elements/"); ?>
<?php intlink("../../google-fonts/"); ?>

<dots></dots>

<span class="remark" style="padding-top: 5px;">Hommage à Greg qui m'a fait découvrir Alaclair Ensemble.</span>