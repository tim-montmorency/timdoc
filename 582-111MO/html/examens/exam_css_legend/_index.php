<?php 
/**
 * @type     exercice
 * @title    Examen CSS
 * @icon     images/thumb.jpg
 * @abstract Pour cet examen vous allez reproduire un site web.
 */
?>

<em>
    <H2>EXAMEN CSS</H2>
</em>

<p>Pour cet examen vous allez reproduire le site web Legend.</p>

<swiper>
    photos/legend-1.webp
    photos/legend-2.webp
    photos/legend-3.webp
    photos/legend-4.webp
    photos/legend-5.webp
    photos/legend-6.webp
</swiper>

<dots></dots>

<h2>Couleurs</h2>

<p>Les couleurs de références fonctionnent de gauche à droite #1 à #10</p>

<color>#fff</color>
<color>#09002A</color>
<color>#19002A</color>
<color>#B154F0</color>
<color>#371152</color>
<color>#FF71AC</color>
<color>#3A75E9</color>
<color>#120434</color>
<color>#1A083E</color>
<color>#0c0223</color>
<color>#aa77cc</color>

<dots></dots>

<h2>Famille de police</h2>

<highlight lang="css">font-family: Verdana, Geneva, Tahoma, sans-serif; </highlight>

<dots></dots>

<h3>Document de départ</h3>

<doclink href="./legend.zip">Legend</doclink>


<dots></dots>

<grostitre>L'en-tête</grostitre>

<checklist>
    Assurez-vous d'enlever les marges pour tout le document à l'aide du sélecteur universel et ajoutez la famille de police
    Dans votre body, définir la couleur d'arrière-plan à l'aide de la couleur de référence #2.
    <em>L'en-tête</em>
    Ensuite, dans votre en-tête, positionnez l'en-tête de manière absolue par rapport à son premier parent positionné (s'il y en a un).
    Placez l'en-tête au sommet de la page.
    Définir la couleur d'arrière-plan de l'en-tête à l'aide de la couleur de références #3.
    Assurez-vous que l'en-tête occupe toute la largeur de la fenêtre.
    Ajoutez un une marge intérieure en haut de l'en-tête de 20px.
    <em>LOGO</em>
    Définir la largeur du logo de 13 fois la taille à la racine du document.
    Centrez le logo.
    Alignez le logo verticalement. 
    <em>La navigation</em>
    Sélectionnez la navigation de la classe "menu"  et appliquer <em>list-style-type: none;</em>
    Affichez les éléments de la liste en ligne, les uns à côté des autres.
    Centrez le texte à l'intérieur du conteneur de navigation.
    Ajoutez une marge intérieure de 20px à droite pour espacer les éléments de la navigation.
    <em>Liste</em>
    Affichez les éléments de la liste en ligne, les uns à côté des autres.
    Ajoutez une marge extérieure à droite de 20px entre les éléments de la liste.
    Alignez verticalement au centre les éléments de la liste.
    <em>Les liens</em>
    Sélectionnez votre navigation ainsi que les liens de celle-ci, enlevez la décoration du texte, utilisez la couleur de référence #4 et transformez votre texte en majuscule
    <em>Le bouton "se connecter"</em>
    Pour le bouton "se connecter", définir la graisse de la police à 700.
    Définir la hauteur de ligne du texte à l'intérieur du bouton à 6/5.
    Ajoutez un léger espacement entre les lettres du texte de 0.1px.
    Définir la couleur d'arrière-plan du bouton à l'aide de la couleur de références #5.
    Ajoutez une marge intérieure de 17px en haut, 40px à droite, 17px en bas et 40px à gauche.
    Ajoutez une bordure de 2 pixels autour du bouton.
    Arrondir les coins du bouton de 5px.
</checklist>

<dots></dots>

<grostitre>La bannière</grostitre>

<checklist>
    <em>La bannière</em>
    Définir l'image d'arrière-plan de la bannière. (b6170f4f-bg-image-1.jpeg)
    Faites en sorte que l'image d'arrière-plan couvre toute la zone, en maintenant son ratio.
    Définir la hauteur de la bannière à 100% (100vh) de la hauteur de la fenêtre.
    Ajoutez une marge intérieure en haut de la bannière équivalente à 15% de la hauteur de la fenêtre.
    Ajoutez une marge intérieure à gauche de la bannière équivalente à 10% de la largeur de la fenêtre.
    <em>Les titres de la bannière  (legend & legend-2)</em>
    Pour les titres de la bannière, définir la couleur du texte à l'aide de la couleur de référence #1.
    Définir la taille de la police pour les titres de 10 fois la taille à la racine du document et pour le 3e titre "ABANDONNER"  la taille de la police sera de 5 fois la taille à la racine du document..
    Définir la graisse de la police à 400.
    Transformez votre texte en majuscule.
    Définir la hauteur de ligne du texte à l'intérieur du bouton à 11/10.
    Ajoutez un léger espacement entre les lettres du texte de 0.06em.
    <em>L'icône YouTube</em>
    Maintenant, définir la largeur de l'icône YouTube à 70px.
    Définir la hauteur de l'icône YouTube à 60px.
    Affichez les éléments "youtube" et "trailer" en ligne.
    Alignez verticalement au centre.
    Définir la couleur du texte à l'aide de la couleur de références #1.
    Ajoutez un soulignement au texte du lien.
</checklist>

<dots></dots>

<grostitre>Choisissez votre jeu</grostitre>

<checklist>
    Ajoutez une marge intérieure à la section "game" de 5 fois la taille à la racine du document.
    Centrez le tableau horizontalement avec une marge extérieure de 80px en haut et en bas.
    Définir la largeur des images de jeu de 25 fois la taille à la racine du document.
    Ajoutez une bordure de 2 pixels autour des images à l'aide de la couleur de références #4.
    Arrondir les coins des images de 20px.
    Ajoutez une marge intérieure à gauche et à droite de chaque cellule de la table de 0.2 fois la taille à la racine du document.
    <em>Le titre</em>
    Définir la couleur du texte "Choisissez votre jeu" à l'aide de la couleur de référence #4.
    Définir la taille de la police pour le titre "Choisissez votre jeu" à 3 fois la taille relative à la taille fonte courante.
    Alignez au centre.
    <em>Le titre AVENTURES SPATIALES</em>
    Définir la couleur du texte pour les classes "AVENTURES" et "SPATIALES" à l'aide des couleurs de références #6 et #7.
    Définir la taille de la police à 2.5 fois la taille relative à la taille fonte courante.
    <em>Le gros titre</em>
    Sélectionnez le titre "big-title" et définir la taille de la police à 4 fois la taille relative à la taille fonte courante.
    Définir la graisse de la police à 900.
    Définir la couleur du texte à l'aide de la couleur de références #1.
    Définir la largeur de 50 fois la taille à la racine du document.
    Ajoutez une marge extérieure négative de 3 fois la taille à la racine du document.
    <em>Le texte</em>
    Définir la couleur du texte à l'aide de la couleur de références #1.
    Définir la largeur de 50 fois la taille à la racine du document.
</checklist>

<dots></dots>

<grostitre>Jeux multijoueurs en ligne</grostitre>

<checklist>
    Définir l'image d'arrière-plan de la section "Jeux multijoueurs en ligne". (5dadd873-bg-image-3.jpeg)
    Faites en sorte que l'image d'arrière-plan couvre toute la zone, en maintenant son ratio.
    Définir la hauteur de la section de 70 fois la taille à la racine du document.
    Ajoutez une marge intérieure en haut de la section de 5 fois la taille à la racine du document.
    Ajoutez une marge intérieure à gauche de la section de 12 fois la taille à la racine du document.
    <em>Le titre JEUX MULTIJOUEURS EN LIGNE</em>
    Définir la couleur du texte pour les classes "jeux" et "multijoueur" à l'aide des couleurs de références #6 et #7.
    Définir la taille de la police à 2.5 fois la taille relative à la taille fonte courante.
    Sélectionnez le titre JEUX MULTIJOUEURS EN LIGNE en entier et alignez le texte au centre.
    Ajoutez une marge intérieure en haut de 8 fois la taille à la racine du document.
    Sélectionnez le titre "DÉFIEZ VOS AMIS" et ajoutez la couleur du texte à l'aide de la couleur de références #1.
    Définir la taille de la police à 4 fois la taille relative à la taille fonte courante.
    Alignez le texte au centre.
    Ajoutez une marge intérieure en haut de 3 fois la taille à la racine du document.
    <em>Le tableau des joueurs</em>
    Centrez le tableau horizontalement avec une marge de 100px en haut et en bas.
    Définir la largeur des images de joueur de 25 fois la taille à la racine du document.
    Définir la largeur de l'icône "vs" de 9 fois la taille à la racine du document.
    Ajoutez une marge intérieure à gauche de l'icône "vs" de 40px.
    <em>Nom des joueurs</em>
    Sélectionnez le nom des joueurs et définit la couleur du texte à l'aide de la couleur de références #1.
    Définir la taille de la police pour les noms d'équipe à 2.5 fois la taille relative à la taille fonte courante.
    Mets en majuscules le texte.
    Centrez le texte horizontalement.
    Ajoutez une marge extérieure en haut des noms d'équipe de 3 fois la taille à la racine du document.
    Ajoutez une bordure solide de 1 pixel autour des noms d'équipe et la couleur de références #4.
    Arrondir les coins des noms d'équipe de 8px.
    Ajoutez une marge intérieure de 20px
</checklist>

<dots></dots>

<grostitre>Zone de jeu</grostitre>

<checklist>
    Définir l'image d'arrière-plan de la section "Zone de jeu". (41f47927-bg-image-4.jpeg)
    Faites en sorte que l'image d'arrière-plan couvre toute la zone, en maintenant son ratio.
    Définir la hauteur de la section de 50 fois la taille à la racine du document.
    Ajoutez une marge intérieure en haut de la section de 5 fois la taille à la racine du document.
    Ajoutez une marge intérieure à gauche de la section de 12 fois la taille à la racine du document.
    Alignez le texte au centre.
    <em>YouTube</em>
    Définir la largeur de l'image à 100px.
    Ajoutez une marge intérieure en haut de 100px.
    Ajoutez une marge intérieure en bas de 30px.
    <em>Le titre</em>
    Définir la taille de la police à 2 fois la taille relative à la taille fonte courante.
    
</checklist>

<dots></dots>

<grostitre>Nombres</grostitre>

<checklist>
    Centrez le tableau horizontalement avec une marge extérieure de 50px en haut et en bas.
    Sélectionnez les cellules de la ligne "nombres" et ajoutez une marge intérieure en haut de 70px, à droite 60px, en bas 10px et à gauche de 60px.
    Sélectionnez la ligne "nombres" et définit la taille de la police à 5 fois la taille relative à la taille fonte courante.
    Définir la couleur du texte à l'aide de la couleur de références #4.
    Ensuite, sélectionnez la ligne decompte-nom et définit la couleur du texte à l'aide de la couleur de références #1.
    Alignez le texte au centre.
    Définir la taille de la police à 1.5 fois la taille relative à la taille fonte courante.
</checklist>

<dots></dots>

<grostitre>Photos</grostitre>

<checklist>
    Centrez le tableau horizontalement.
    Définir la taille de la police à 0.
    Sélectionnez les images et ajustez la largeur à 100%.
</checklist>

<dots></dots>

<grostitre>Newsletter</grostitre>

<checklist>
    Centrez le tableau horizontalement avec une marge extérieure de 100px en haut et en bas.
    Ajoutez une marge intérieure de 50px.
    Définir la couleur d'arrière-plan à l'aide de la couleur de référence #8.
    Sélectionnez le texte "ABONNEZ-VOUS À NOTRE NEWSLETTER" et définir la taille de la police à 2 fois la taille relative à la taille fonte courante.
    Définir la couleur du texte à l'aide de la couleur de références #1.
    Ajustez la largeur à 500px.
    Sélectionnez le texte "Restez informé des derniers jeux, packs d'extensions et bien plus encore !" et définir la couleur du texte à l'aide de la couleur de références #1.
    Définir la graisse du texte à 100.
    <em>Votre adresse e-mail</em>
    Sélectionnez le champ "email"  et définir la couleur d'arrière-plan à l'aide de la couleur de référence #9.
    Ajustez la largeur de la bordure à 0.
    Définir la couleur du texte à l'aide de la couleur de référence #4.
    Ajoutez une marge intérieure de 20px en haut, 200px à droite, 20px en bas et 20px à gauche.
    Ajoutez une marge extérieure en haut de 30px.
    <em>Le bouton envoyer</em>
    Sélectionnez le champ "submit"  et définit la couleur d'arrière-plan à l'aide de la couleur de référence #10.
    Ajoutez une bordure de 1 pixel autour du bouton avec la couleur à l'aide de la couleur de référence #11.
    Arrondir les coins des images de 50px.
    Définir la couleur du texte à l'aide de la couleur de références #4.
    Ajoutez une marge intérieure de 15px en haut, 50px à droite, 15px en bas et 50px à gauche.
    Ajoutez une marge extérieure en haut de 30px.
    Définir la graisse du texte à 700.
    Mets le texte en majuscule.
</checklist>

<dots></dots>

<grostitre>Bas de page</grostitre>

<checklist>
    Définir la couleur du texte à l'aide de la couleur de référence #1.
    Ajoutez une marge intérieure de 25px.
    Alignez le texte au centre.
</checklist>

<dots></dots>


<grostitre>Remise</grostitre>

<checklist>
  Renommez votre dossier <em>"exam_css_[nom]_[prenom]"</em>.
  Zippez votre dossier <em>"exam_css_[nom]_[prenom]"</em>.
  Joignez votre fichier <em>.zip</em> au devoir <em>"Examen CSS - Legend"</em>.
</checklist>

<dots></dots>


<grostitre>Notes de cours 📚</grostitre>

<intlink href="../../../css/anatomie/"></intlink>
<intlink href="../../../css/selecteurs/"></intlink>
<intlink href="../../../css/flux/"></intlink>
<intlink href="../../../css/padding/"></intlink>
<intlink href="../../../css/margin/"></intlink>
<intlink href="../../../css/background/"></intlink>
<intlink href="../../../css/display/"></intlink>
<intlink href="../../../css/vertical-align/"></intlink>
<intlink href="../../../css/unites-de-mesure/"></intlink>
<intlink href="../../../css/width-height/"></intlink>
<intlink href="../../../css/border/"></intlink>
<intlink href="../../../css/box-model/"></intlink>
<intlink href="../../../css/unites-de-couleur/"></intlink>
<intlink href="../../../css/font/"></intlink>
<intlink href="../../../css/text/"></intlink>
<intlink href="../../../css/linear-gradient/"></intlink>
<intlink href="../../../css/box-sizing/"></intlink>
<intlink href="../../../css/float/"></intlink>
<dots></dots>