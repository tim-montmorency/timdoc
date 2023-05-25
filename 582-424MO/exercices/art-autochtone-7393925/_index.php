<?php

/**
 * @type     exercice
 * @title    Consignes - Art autochtone
 * @icon     images/thumb.png
 * @abstract Pour cet exercice, nous allons recréer la page d'accueil de ce site sur l'art autochtone.
 */
?>

<p>Pour cet exercice, nous allons recréer la page d'accueil de ce site sur l'art autochtone. Le contenu textuel et les images sont déjà présents dans index.html et plusieurs styles sont déjà dans styles.css pour vous aider à avancer plus rapidement.</p>

<dots></dots>

<grostitre>Aperçu du résultat 👇</grostitre>
<clipasset src='videos/art-autochtone-demo.mp4'></clipasset>

<p>Vous pouvez aussi contrôler la vidéo de l'aperçu via <a href="https://cmontmorency365-my.sharepoint.com/:v:/g/personal/mariem_ouellet_cmontmorency_qc_ca/EastFmeNwtZMp1BbMQWN9cQBVHrgpsZ_QPVrk9EHqHdMTg?e=bvlK6d" target="_blank">ce lien vers vidéo </a> (visible par les membres du collège seulement)</p>

    <dots></dots>

<grostitre>Matériel</grostitre>
<doclink href="fichiers/nom_prenom_art-autochtone-base.zip">Dossier de départ 📁</doclink>




<h3 id="Couleurs">Couleurs 🎨</h3>
<table class="table-couleurs">
    <tr>
        <td>bs-primary</td>
        <td>
            <color>#b21f17</color>
        </td>
    </tr>
    <tr>
        <td>bs-secondary</td>
        <td>
            <color>#f1b72f</color>
        </td>
    </tr>

    <tr>
        <td>bs-dark</td>
        <td>
            <color>#343a40</color>
        </td>
    </tr>

    <tr>
        <td>bs-light</td>
        <td>
            <color>#efefef</color>
        </td>
    </tr>

</table>

<!-- 
<h3 id="Medias">Polices de caractère</h3>
<a href="https://fonts.google.com/specimen/Roboto" target="_blank">
    Police Roboto</a>: Sélectionnez les niveaux de graisse <em>Thin</em>, <em>Light</em>, <em>Regular</em> et <em>Bold</em>
-->
<dots></dots>
<alert>Les propriétés CSS <em>position</em> et <em>transform</em> seront inutiles. <br>La mise en page sera réalisée entièrement grâce&nbsp;à&nbsp;Bootstrap.</alert>


<dots></dots>

<grostitre>Requis et critères généraux</grostitre>


<!-- 
    Le site doit être entièrement fonctionnel sans avoir à démarrer "Live Server". Pour tester, vous pouvez installer l'extention de VS Code "Open In Default Browser" ou simplement ouvrir votre ficheir index.html via votre navigateur de fichiers Windows ou MacOS.
-->
<checklist>
    Lorsqu'une classe Bootstrap existe pour ce que vous tentez de faire, vous êtes dans l'obligation d'utiliser la classe Bootstrap, et non pas d'aller styliser en CSS.
    Pour le reste, vous pourrez écrire du CSS. Cependant, il est exigé de bien classer votre CSS en utilisant les commentaires (déjà présents) pour séparer le tout en sections distinctes.
    Votre JavaScript, votre HTML et votre CSS doivent être propres et bien indentés (formattés).
    L'espacement doit être constant entre les sections et éléments. Même en format mobile. Pensez à vous comparer à l'APERÇU.
</checklist>


<dots></dots>
<grostitre>Général</grostitre>
<checklist>
La police Roboto est déjà installée au projet</a>: incluant les niveaux de graisse <em>Thin</em>, <em>Light</em>, <em>Regular</em> et <em>Bold</em>. Appliquez la police sur l'ensemble de votre page et appliquez un niveau de graisse par défaut.
Pour le reste de la page, sur les différentes sections et composantes, fiez-vous à l'APERÇU ci-haut pour appliquer la graisse qui correspond le mieux.
Ajoutez Bootstrap version <em>5.2.3</em> au projet (via CDN).
</checklist>



<dots></dots>
<grostitre>Navigation</grostitre>
<checklist>
Dans une balise <em>header</em>, ajoutez une barre de navigation <em>nav</em> (utilisez la composante de Bootstrap).
Ajoutez les classes Bootstrap pour:<br>- Changer d'affichage vers la navigation complète à partir du breakpoint <code>MD</code><br>- Changer l'arrière-plan de la navbar pour du foncé (dark)<br>- Ajuster le thème de couleur de la navbar de sorte que le texte soit facilement lisible.<br>- La barre de navigation doit toujours être positionnée en haut de la page, peu importe le défilement de celle-ci.
Dans cette nav, ajoutez le type de conteneur qui aura une largeur FIXE différente en fonction de la dimension de l'écran et des breakpoints Bootstrap. 
La barre doit contenir le logo à gauche. C'est la marque de commerce du site. <br><small>(Note: Conservez le h1 qui se trouve déjà autour de l'image du logo. Lorsqu'une page d'accueil n'a pas de titre visible, on entoure souvent le logo d'un h1 pour, sémantiquement, lui accorder un titre principal. Dans ce cas-ci, c'est le contenu du texte alternatif de l'image du logo.)</small>
Dans la barre de navigation, ajoutez tous les liens comme il est présenté dans l'APERÇU (n'oubliez pas, tout le texte nécessaire est déjà présent dans la page index.html).
N'oubliez pas le sous-menu de l'élément "Les artistes".
Le lien "Don" sera un bouton Bootstrap. Appliquez-lui les classes Bootstrap nécessaires pour le styliser comme on le voit.
Vous devez ajouter la classe utilitaire Bootstrap pour afficher tous les liens principaux en majuscule, mais pas ceux du sous-menu "Les artistes".
Pour bien utiliser la composante de la barre de navigation Bootstrap, vous devez personnaliser le(s) <code>id</code> qu'elle contient. Il faut aussi ajuster les attributs qui leurs font référence (bref, je ne veux pas voir de simple copier-coller d'un bloc de code complet trouvé ailleurs). Par ailleurs, les classes Bootstrap pour la navBar doivent être conservées pour la rendre fonctionnelle.
Si tout est bien mis en place, sur un écran plus petit que le breakpoint <code>MD</code>, on devra voir le bouton avec icône du "Burger menu" aligné tout à droite.
</checklist>
<!--


Tous les liens de la navigation doivent mener vers "#".
-->

<dots></dots>
<grostitre>Section Hero - Carrousel</grostitre>
<checklist>
Ajoutez la librarie SwiperJS au projet (via CDN).
Ajoutez une balise <code>main</code> SOUS la balise <code>header</code>. Dans <code>main</code>, ajoutez 3 <code>section</code> une en dessous de l'autre, avec les <code>id</code> suivants: hero, presentation, actualite (sans accent).
Dans la section <code>#hero</code>, ajoutez les balises nécessaires pour faire un carrousel avec Swiper. Il y aura 4 dispositives. Tout le contenu des diapositives est déjà dans la page, vous pouvez le récupérer.
Conservez la classe <code>.swiper</code> sur le parent du carrousel.
Stylisez la section <code>#hero</code> en CSS et lui attribuant la couleur de la variable <code>bs-light</code> en arrière-plan.
Stylisez le carrousel <code>.swiper</code> en CSS pour lui donner une hauteur de 45 pourcent de la hauteur du <em>Viewport Height</em> et une largeur maximum de 1700px.
Ajoutez au carrousel une classe utilitaire Bootstrap pour le centrer dans un écran qui serait plus large que 1700px.
Activez le carrousel en JavaScript avec les configurations suivantes:<br>- Transition par fondu enchaîné<br>- Doit jouer automatiquement et rester 2 secondes à la fois<br>- Doit tourner à l'infini <br>- Doit contenir une navigation précédent et suivant<br>- Doit contenir une pagination dans le bas (les petits ronds, comme on le voit dans l'APERÇU).
Ajustez les images afin qu'elle s'affichent de façon la plus entière possible dans leur diapositive (peut-être rognée sur les côtés et ou dans le haut-bas). Fiez-vous toujours à l'aperçu.
</checklist>


<dots></dots>
<grostitre>Section présentation</grostitre>
<checklist>
Dans la section<code>#presentation</code> que vous avez préalablement créée, ajoutez les balises et classes nécessaires pour une grille de mise en page Bootstrap de 4 colonnes.
Par défaut, chaque colonne s'affiche sur toute la largeur de la page (donc elles s'affichent une en dessous de l'autre).
À partir du <em>breakpoint</em> <code>MD</code>, chaque colonne s'affiche sur la moitié de la largeur de la page.
À partir du <em>breakpoint</em> <code>XL</code>, chaque colonne s'affiche sur le quart de la largeur de la page.
Dans chaque colonne ajoutez le texte. Les titres seront logés dans une balise <code>h2</code> mais avec une classe <code>.h4</code> pour leur donner un style plus petit même s'il sont sémantiquement des <code>h2</code>. Le texte qui suit, sera un paragraphe.
Ajoutez des classes utilitaires Bootstrap pour créer l'espacement nécessaire entre chaque élément et section.
</checklist>




<dots></dots>
<grostitre>Section Actualité - Cartes</grostitre>
<checklist>
Dans la section<code>#actualite</code> que vous avez préalablement créee, ajoutez les balises et classes nécessaires pour une grille de mise en page Bootstrap: une rangée d'une seule colonne qui inclura le titre et une autre rangée qui contiendra 3 colonnes et une dernière rangée d'une seule colonne qui contiendra le bouton "Toute l'actualité>>".
Dans la rangée 2: Par défaut, chaque colonne s'affiche sur toute la largeur de la page (donc elles s'affichent une en dessous de l'autre).
Dans la rangée 2: À partir du <em>breakpoint</em> <code>MD</code>, chaque colonne s'affiche sur la moitié de la largeur de la page.
Dans la rangée 2: À partir du <em>breakpoint</em> <code>LG</code>, chaque colonne s'affiche sur le tier de la largeur de la page.
Dans la rangée 1: Ajoutez le titre "Actualité". Il sera aussi de niveau 2.  Ajoutez les classes utilitaires Bootstrap pour créer l'espacement autour du titre. Ajoutez du CSS pour la "petite ligne" de couleur de la variable <code>bs-secondary</code>.
Dans votre grille, ajoutez des cartes (card) Bootstrap et toutes les balises et classes nécessaires sur le contenu.
L'entité de la <code>.card</code> doit être un lien qui mène à "#". Utilisez la balise appropriée.
En CSS, ajustez l'image de la carte, elle doit avoir une hauteur maximum de 200px et vous devez positionner les images dans leur cadre comme elles sont présentées dans l'APERÇU.
Les titres dans les cartes seront de niveau 3.
Ajoutez des classes utilitaires Bootstrap pour créer l'espacement nécessaire entre chaque élément et section.
Dans la rangée 3: Ajoutez le texte "Toute l'actualité>>" et ajoutez les classes Bootstrap nécessaires pour lui donner cet aspect de gros bouton.
</checklist>



<dots></dots>
<grostitre>Pied de page</grostitre>
<checklist>
Si ce n'est pas déjà le cas, déplacez la balise existante <code>footer</code> sous la balise <code>main</code>.
Ajoutez les balises et classes nécessaires pour une grille de mise en page Bootstrap de 3 colonnes.
Par défaut les colonnes s'affichent sur toute la largeur de la page (donc elles s'affichent une en dessous de l'autre)
À partir du breakpoint <code>LG</code>, elles s'affichent les 3 une à côté de l'autre. 
Vous pouvez travailler avec le principe de décallage (offset) de Bootstrap pour placer la 2e colonnes qui contient le menu.
Déposez simplement le contenu textuel qui est prévu pour chaque colonne. 
Nul besoin de styliser le texte, il l'est déjà fait.
Ajoutez des classes utilitaires Bootstrap pour créer l'espacement nécessaire entre chaque élément et section.
</checklist>




<grostitre>Remise</grostitre>

<warning>Ne faire qu'une remise pour les 2 exercices (art autochtone et roue de fortune)</warning>

<checklist>Créez un dossier nommé [nom de famille]_[prénom]_examen<br>ex: <em>ouellet_mariemichelle_examen</em>
    Déposez-y vos 2 dossiers de projet (art autochtone et roue de fortune)
    Compressez ensuite votre dossier de travail en <a href="https://www.ezyzip.com/" target="_blank"
        rel="noopener noreferrer">fichier&nbsp;zip 🗜</a>
    Envoyez-moi un <a href="https://teams.microsoft.com/l/chat/0/0?users=mariem.ouellet@cmontmorency.qc.ca"
        target="_blank" rel="noopener noreferrer">message privé sur Teams</a> contenant votre fichier&nbsp;zip.
</checklist>


