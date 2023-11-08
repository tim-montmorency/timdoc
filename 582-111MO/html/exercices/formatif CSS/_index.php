<?php 
/**
 * @type     exercice
 * @title    Formatif CSS
 * @icon     images/thumb.jpg
 * @abstract Pour cet exercice vous allez reproduire un site web de Fornite.
 */
?>

<em>
    <H2>Ce TP vaut pour 10% de la note finale.</H2>
</em>

<p>Pour cet exercice vous allez reproduire un site web de Marvel.</p>

<swiper>
    photos/marvel1.webp
    photos/marvel2.webp
</swiper>

<h2>Couleurs</h2>

<p>Les couleurs de références fonctionnent de gauche à droite #1 à #10</p>

<color>#f9d349</color>
<color>#d57e12</color>
<color>#fff</color>
<color>#f5dca8</color>
<color>#000</color>
<color>#f5dcac</color>

<dots></dots>

<doclink href="./Avengers.zip">Documents de départ</doclink>

<dots></dots>

<h2>Lien pour lié le fichier CSS</h2>

<highlight lang="html"> &lt;link href=&quot;./style.css&quot; rel=&quot;stylesheet&quot;&gt;</highlight>

<dots></dots>

<grostitre>Intro</grostitre>

<checklist>
    Utilisez le sélecteur universel pour ajouter une marge intérieure et extérieure de 0. Ajouter le box-sizing et la famille de police « Poppins », sans-serif
    Pour le body, ajoutez overflow-x : hidden;
</checklist>

<dots></dots>

<grostitre>Pour l'élément avec la classe .main-width :</grostitre>

<checklist>
    Définissez la largeur sur 1400px pour spécifier une largeur fixe de 1400 pixels.
    Utilisez une largeur maximum de 95% pour permettre au contenu de réduire sa largeur jusqu'à 95% de la largeur maximale spécifiée.
    Utilisez des marges 0 et auto pour centrer l'élément horizontalement en lui donnant des marges automatiques.
</checklist>

<dots></dots>

<grostitre>Pour l'élément avec la classe .hero :</grostitre>

<checklist>
    Définissez la hauteur de 100%; et la largeur de 100% pour occuper toute la hauteur et la largeur disponibles.
    Ajoutez une hauteur minimum de 100vh.
    L’arrière-plan doit être un gradient radial avec les couleurs 1 et 2.
    Mettez l’élément afin de suivre le flux de la page à l’aide de la position.
</checklist>

<dots></dots>

<grostitre>Pour l'élément logo</grostitre>

<checklist>
    Afficher le lien comme un bloc.
    Ajoutez une taille de police de 25 pixels.
    Définir le poids de la police à 600 (gras).
    Supprimer la décoration du lien.
    Définir la couleur du texte sur blanc.
</checklist>

<dots></dots>

<grostitre>Pour l'élément header :</grostitre>

<checklist>
    Spécifier les valeurs des marge intérieures supérieure 40px, droite 0 inférieure 30px  et gauche 0.
</checklist>

<dots></dots>

<grostitre>Pour les éléments logo et navigation :</grostitre>

<checklist>
    Afficher les éléments en tant que blocs en ligne.
</checklist>

<dots></dots>

<grostitre>Pour le menu navigation :</grostitre>

<checklist>
    Présenter la liste en tant que bloc en ligne.
    Envoyer le menu vers la droite
    Supprimer le style de la liste (list-style : none)
</checklist>

<dots></dots>

<grostitre>Pour les liens de la liste :</grostitre>

<checklist>
    Ajoutez une taille de police de 15 pixels.
    Définir le poids de la police à 600 (gras).
    Supprimer la décoration du lien.
    Définir la couleur du texte #3.
    Définir une marge gauche de 60px.
</checklist>

<dots></dots>

<grostitre>Pour le bouton "Download":</grostitre>

<checklist>
    Définir l'arrière-plan de l'élément comme transparent.
    Définir la couleur du texte sur blanc.
    Créer une bordure de 1 pixel solide avec la couleur #4.
    Définir les valeurs des marges intérieures top et bottom sur 9 pixels et les marges gauche et droite sur 20 pixels.
    Arrondir les coins de l'élément en utilisant un rayon de courbure de 30 pixels.
    Spécifier la hauteur de ligne du texte 7/5. Cela détermine l'espacement vertical entre les lignes.
    Définir la taille de police à 14 pixels.
    Définir le poids de la police à 500, ce qui correspond généralement à un style de police moyennement gras.
    Définir une marge à gauche de 150 pixels.
</checklist>

<dots></dots>

<grostitre>Sélectionnez l'élément ayant la classe .content.</grostitre>

<checklist>
    Définir la marge intérieure top d'une valeur de 140 pixels.
</checklist>

<dots></dots>

<grostitre>Sélectionnez .main-text pour appliquer les éléments suivant. </grostitre>

<checklist>
    Pour cet élément <h6>:	Définissez la taille de police à 14px.
    La graisse de la police à 400.
    La couleur du texte à white.
    La marge inférieure à 40px
    <br>
    Pour l'élément h1 : Définissez la taille de police à 100px. 
    La hauteur de ligne à 1.
    La couleur du texte #3. 
    La marge supérieure à 0, droite à 0, inférieure à 45px et gauche à 0.
    La famille de police à "Permanent Marker", cursive.
    <br>
    Pour l'élément  h3: (b)	Le poids de la police à 600. 
    Définissez la taille de police à 18px.
    La couleur du texte à #3.
    <br>
    Pour l'élément p: Définissez la largeur maximale à 100%. 
    La largeur à 480px.
    La couleur du texte à #3. 
    La hauteur de ligne à 9/5.
    La taille de police à 15px.
    La marge inférieure à 50px
    <br>
    Pour l'élément a: Définissez l'affichage en bloc en ligne.
    La décoration du texte en none, 
    La couleur du texte en #5.
    Le fond en #3.
    La bordure en 1px solid couleur #3.
    Le marge intérieur top-bottom 9px et droite-gauche 25px.
    La hauteur de ligne en 7/5.
    Le rayon de bordure en 30px.
    La taille de police en 14px
    Le poids de la police en 500.
    <br>
    Pour l'élément cta : Pour les éléments <a> ayant la classe .cta: Définissez la bordure en 1px solid #4.
    La couleur du texte en #3.
    L’arrière-plan en transparent.
    La marge gauche en 20px.
    <br>
    Pour les éléments <i> à l'intérieur des éléments <a> ayant la classe .cta: Définissez la marge extérieur droite en 12px.
    <br>
    Pour l'élément social: Définissez la position en fonction du flux de la page. 
    Définissez l’ordre d’empilement à 2
    La marge supérieure de 200px. 
    La marge intérieure inférieure de 40px.
    <br>
    Pour l'élément .social a: Définissez l'affichage en bloc en ligne.
    La couleur du texte en #6. 
    La marge extérieure droite de 25px.
    La taille de police de 24px.
    <br>
    Pour l'élément image : Définissez la position comme si  l’image ignorait le flux de la page.
    La largeur de 100%.
    La hauteur de 85%.
    Le bas de 0, la droite de 0.
    L'alignement du texte à droite.
    <br>
    Pour l'élément img: Définissez la hauteur de 100%.

</checklist>

<dots></dots>









<grostitre>Notes de cours 📚</grostitre>

<?php intlink("../../ancre/"); ?>
<?php intlink("../../balises/"); ?>
<?php intlink("../../semantique/"); ?>
<?php intlink("../../div-span/"); ?>
<?php intlink("../../formatage-html/"); ?>
<?php intlink("../../image/"); ?>
<?php intlink("../../iframe/"); ?>
<?php intlink("../../tableau/"); ?>
<?php intlink("../../liste/"); ?>

<dots></dots>