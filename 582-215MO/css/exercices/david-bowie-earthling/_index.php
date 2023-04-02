<?php 
/**
 * @type     exercice
 * @title    David Bowie - Earthling
 * @icon     images/thumb.jpg
 * @abstract Pour cet exercice, vous devez écrire du CSS afin de recréer l’album expérimental "Earthling" de David Bowie.
 */
?>

<p class="spacer">Pour cet exercice, vous devez écrire du CSS afin de recréer l’album expérimental <a target="_blank" href="https://open.spotify.com/album/6xzFZgRAGFhNzh2XAF7lnk">"Earthling"</a> de <a target="_blank" href="https://en.wikipedia.org/wiki/David_Bowie">David Bowie</a>.</p>

<p>Aperçu du résultat 👇</p>

<clipasset src="videos/apercu.mp4"></clipasset>

<dots></dots>


<grostitre>Matériel</grostitre>

<doclink href="./david-bowie-earthling-depart.zip">Dossier de départ</doclink>

<h3>Couleurs 🎨</h3>

<color>#51af3f</color>
<color>#002a80</color>
<color>#1e98e1</color>
<br>
<color>#ee4bbe</color>
<color>#8a774c</color>

<alert>Il est <strong>interdit</strong> de modifier le HTML.</alert>

<dots></dots>


<grostitre>Requis de base</grostitre>

<checklist>
  Le fond de la page doit être un dégradé allant du <em>vert</em> au <em>bleu foncé</em>.
  L'album doit avoir une dimension de <em>500x500px</em>, un débordement caché, être centré horizontalement et avoir le fond de couleur <em>blanche</em>.
</checklist>

<grostitre>Requis arrière-plan</grostitre>

<checklist>
  La première image d'arrière-plan doit être la photo de paysage <span class="inline-code">field.webp</span>. Faites-en sorte qu'elle couvre tout l'espace disponible sans être coupée, qu'elle ne se répète pas et qu'elle soit situé au bas de l'album.
  La deuxième image d'arrière plan doit être un dégradé allant du <em>bleu foncé</em> au <em>bleu pâle</em> avec un point d'arrêt final à <em>50%</em>.
</checklist>

<grostitre>Requis nuages</grostitre>

<checklist>
  Faites-en sorte que tout les nuages soient positionnés de manière absolue et aient une opacité de <em>0.7</em>.
  Le nuage du bas doit être positionné à <em>180px</em> du haut et avoir une largeur de <em>350px</em>.
  Le nuage du milieu doit être positionné à <em>100px</em> du haut et avoir une largeur de <em>300px</em>.
  Le nuage du haut doit être positionné à <em>10px</em> du haut et avoir une largeur de <em>400px</em>.
</checklist>

<grostitre>Requis David Bowie</grostitre>

<checklist>
  David Bowie doit avoir une hauteur de <em>440px</em> et être positionné en bas au centre de l'album.
</checklist>

<grostitre>Requis textes</grostitre>

<checklist>
  Faites-en sorte que les textes soient positionnés de manière absolute et avoir une grosseur de police d'écriture de <em>18px</em>.
  Utilisez <span class="inline-code">@font-face</span> afin de charger la police d'écriture <em>BensonOldStyleOpti-Medium.otf</em>, nommez la <em>Earthling</em> et attribuez-la aux textes.
  Le titre de l'album doit être positionné à <em>34px</em> du haut et <em>200px</em> de la gauche, avoir un espacement de lettre de <em>0.05em</em> et être de couleur <em>brune</em>.
  Le nom de David Bowie doit être positionné à <em>30px</em> du haut et <em>30px</em> de la gauche, avoir une marge intérieure  de <em>4px</em>, un espacement de lettres de <em>0.15em</em>, avoir un fond <em>noir</em> et être de couleur <em>rose</em>.
  Utilisez <span class="inline-code">box-shadow</span> afin de créer la triple bordure du nom de David Bowie.
  La première bordure doit être de <em>1px</em> et être de couleur <em>brune</em>.
  La deuxième bordure doit être de <em>3px</em> et être de couleur <em>blanche</em>.
  La troisième bordure doit être de <em>6px</em> et être de couleur <em>brune</em>.
</checklist>

<grostitre>Requis animation</grostitre>

<checklist>
  À l'aide de <span class="inline-code">@keyframes</span>, créez une animation nommée <em>cloud</em> faisant une transformation sur l'<em>axe des X</em> allant de <em>-100%</em> à <em>500px</em>.
  Appliquez cette animation sur les nuages et faites-en sorte qu'ils se déplacent à l'<em>infini</em> et de façon <em>linéaire</em> pour créer un effet de <em>parallax</em>.
  Le nuage du bas doit parcourir l'animation en <em>30s</em> avec un délai de <em>-10s</em>.
  Le nuage du milieu doit parcourir l'animation en <em>20s</em> avec un délai de <em>-15s</em>.
  Le nuage du haut doit parcourir l'animation en <em>15s</em> avec un délai de <em>-5s</em>.
</checklist>

<grostitre>Remise</grostitre>

<checklist>
  Renommez votre dossier <em>"bowie_[nom]_[prenom]"</em>.
  Zippez votre dossier <em>"bowie_[nom]_[prenom]"</em>.
  Joignez votre fichier <em>.zip</em> au devoir <em>"TP07: David Bowie - Earthling"</em>.
</checklist>

<dots></dots>


<grostitre>Ambiance</grostitre>

<youtube src="./videos/david-bowie-im-afraid-of-americans.json"></youtube>
<span class="remark" style="padding-top: 5px;">Ce vidéoclip est un hommage au film <a target="_blank" href="https://www.imdb.com/title/tt0075314/">Taxi Driver</a> de <a target="_blank" href="https://en.wikipedia.org/wiki/Martin_Scorsese">Martin Scorsese</a>.</span>

<dots></dots>


<grostitre>Notes de cours 📚</grostitre>

<?php intlink("../../position/"); ?>
<?php intlink("../../linear-gradient/"); ?>
<?php intlink("../../background/"); ?>
<?php intlink("../../overflow/"); ?>
<?php intlink("../../opacite/"); ?>
<?php intlink("../../font-face/"); ?>
<?php intlink("../../box-shadow/"); ?>
<?php intlink("../../animation/"); ?>
<?php intlink("../../transformation/"); ?>

<dots></dots>