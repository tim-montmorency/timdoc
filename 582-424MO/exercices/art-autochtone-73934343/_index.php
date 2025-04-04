<?php

/**
 * @type     exercice
 * @title    Consignes - Art autochtone
 * @icon     images/thumb.png
 * @abstract Pour cet exercice, nous allons recréer la page d'accueil de ce site sur l'art autochtone.
 */
?>

<warning>Attention, cet examen comporte 2 parties. Veuillez en tenir compte dans votre gestion du temps. La deuxième partie se trouve <a href="https://tim-montmorency.com/timdoc/582-424MO/exercices/roue-de-fortune-9876501/" target="_blank" rel="noopener noreferrer">sous ce lien</a>.</warning>

<p>Pour cet exercice, nous allons recréer la page d'accueil de ce site sur l'art autochtone. Le contenu textuel et les images sont déjà présents dans index.html et plusieurs styles sont déjà dans styles.css pour vous aider à avancer plus rapidement.</p>

<dots></dots>

<grostitre>Aperçu du résultat 👇</grostitre>
<clipasset src="videos/demo-2024-art-autochtone-v2.mp4"></clipasset>

<p>Vous pouvez aussi contrôler la vidéo de l'aperçu via <a href="https://cmontmorency365-my.sharepoint.com/:v:/g/personal/mariem_ouellet_cmontmorency_qc_ca/EYikhgQ2wH1Hrf71PcNABAABYZDJZhzzF-Y8rp7GcZh5qA?nav=eyJyZWZlcnJhbEluZm8iOnsicmVmZXJyYWxBcHAiOiJPbmVEcml2ZUZvckJ1c2luZXNzIiwicmVmZXJyYWxBcHBQbGF0Zm9ybSI6IldlYiIsInJlZmVycmFsTW9kZSI6InZpZXciLCJyZWZlcnJhbFZpZXciOiJNeUZpbGVzTGlua0NvcHkifX0&e=cfSOGA" target="_blank">ce lien vers vidéo </a></p>

<dots></dots>

<grostitre>Matériel</grostitre>
<doclink href="fichiers/nom_prenom_art-autochtone-base-V2024.zip">Dossier de départ 📁</doclink>


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
    Lorsqu'une classe Bootstrap existe pour ce que vous tentez de styliser (du moins parmi celles qu'on a vues cette session), vous êtes dans l'obligation d'utiliser la classe Bootstrap et non pas de styliser en CSS.
    Pour le reste, vous pourrez écrire du CSS. Cependant, il est exigé de bien classer votre feuille de styles en utilisant les commentaires (déjà présents) pour séparer le tout en sections distinctes.
    Votre JavaScript, votre HTML et votre CSS doivent être propres et bien indentés (formattés).
    L'espace vertical entre les sections et les éléments doit être constant, c'est à dire toujours le même. Pensez à vous comparer à l'APERÇU.
    Partout ou vous en avez besoin, utilisez le type de conteneur qui a une largeur FIXE différente en fonction de la dimension de l'écran et des breakpoints Bootstrap. 
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
Ajoutez les classes Bootstrap pour:<br>- Changer d'affichage vers la navigation complète à partir du breakpoint <incode>md</incode><br>- Changer l'arrière-plan de la navbar pour du gris foncé (la couleur dark)<br>- Ajuster le thème de couleur de la navbar de sorte que le texte soit facilement lisible.<br>- La barre de navigation doit toujours être positionnée en haut de la page, peu importe le défilement de celle-ci.
Dans cette <incode>nav</incode>, ajoutez le type de conteneur qui a une largeur FIXE différente en fonction de la dimension de l'écran et des breakpoints Bootstrap. 
La barre doit contenir le logo à gauche. C'est la marque de commerce du site. <br><small>(Note: Conservez le h1 qui se trouve déjà autour de l'image du logo. Lorsqu'une page d'accueil n'a pas de titre visible, on entoure souvent le logo d'un h1 pour, sémantiquement, lui accorder un titre principal. Dans ce cas-ci, c'est le contenu du texte alternatif de l'image du logo.)</small>
Dans la barre de navigation, ajoutez tous les liens comme il est présenté dans l'APERÇU (n'oubliez pas, tout le texte nécessaire est déjà présent dans la page index.html).
N'oubliez pas le sous-menu déroulant de l'élément "Les artistes".
Le lien "Don" sera un bouton Bootstrap. Appliquez-lui les classes Bootstrap nécessaires pour le styliser comme on le voit.
Vous devez ajouter la classe utilitaire Bootstrap pour afficher tous les liens principaux en majuscule, mais pas ceux du sous-menu "Les artistes".
Pour bien utiliser la composante de la barre de navigation Bootstrap, vous devez personnaliser le(s) <incode>id</incode> qu'elle contient. Il faut aussi ajuster les attributs qui leurs font référence (bref, je ne veux pas voir de simple copier-coller d'un bloc de code complet trouvé ailleurs). Par ailleurs, les classes Bootstrap pour la navBar doivent être conservées pour la rendre fonctionnelle.
Si tout est bien mis en place, sur un écran plus petit que le breakpoint <incode>md</incode>, on devra voir le bouton avec icône du "Burger menu" aligné tout à droite.
</checklist>
<!--


Tous les liens de la navigation doivent mener vers "#".
-->

<dots></dots>
<grostitre>Section Hero - Carrousel</grostitre>
<checklist>
Ajoutez la librarie SwiperJS au projet (via CDN).
Ajoutez une balise <incode>main</incode> SOUS la balise <incode>header</incode>. Dans <incode>main</incode>, ajoutez 4 <incode>section</incode>s une en dessous de l'autre, avec les <incode>id</incode>s suivants (sans accent): <br>- hero <br>- presentation <br>- actualite <br>- emojis-animaux-et-nature
Dans la section <incode>#hero</incode>, ajoutez les balises nécessaires pour faire un carrousel avec Swiper. Il y aura 4 dispositives. Tout le contenu des diapositives est déjà dans la page, vous pouvez le récupérer.
Stylisez la section <incode>#hero</incode> en CSS et lui attribuant la couleur de la variable <incode>bs-light</incode> en arrière-plan.
Stylisez le carrousel en CSS pour lui donner une hauteur de 45 pourcent de la hauteur du <em>Viewport Height</em> et une largeur maximum de 1700px.
Ajoutez au carrousel une classe utilitaire Bootstrap pour le centrer dans un écran qui serait plus large que 1700px.
Activez le carrousel en JavaScript avec les configurations suivantes:<br>- Transition par fondu enchaîné<br>- Doit jouer automatiquement et rester 2 secondes à la fois<br>- Doit tourner à l'infini <br>- Doit contenir une navigation précédent et suivant<br>- Doit contenir une pagination dans le bas (les petits ronds, comme on le voit dans l'APERÇU).
Ajustez les images afin qu'elle s'affichent de façon la plus entière possible dans leur diapositive (peut-être rognée sur les côtés et ou dans le haut-bas). Fiez-vous toujours à l'aperçu.
</checklist>


<warning>Rappel, cet examen comporte 2 parties. Veuillez en tenir compte dans votre gestion du temps. La deuxième partie se trouve <a href="https://tim-montmorency.com/timdoc/582-424MO/exercices/roue-de-fortune-9876501/" target="_blank" rel="noopener noreferrer">sous ce lien</a>.</warning>



<dots></dots>
<grostitre>Section présentation</grostitre>
<checklist>
Dans la section <incode>#presentation</incode> que vous avez préalablement créée, ajoutez les balises et classes nécessaires pour créer une grille de mise en page Bootstrap de quatre colonnes.
Par défaut, chaque colonne s'affiche sur toute la largeur de la page (donc elles s'affichent toutes une en dessous de l'autre).
À partir du <em>breakpoint</em> <incode>md</incode>, chaque colonne s'affiche sur la moitié de la largeur de la page.
À partir du <em>breakpoint</em> <incode>xl</incode>, chaque colonne s'affiche sur le quart de la largeur de la page.
Dans chaque colonne ajoutez le texte. Les titres seront logés dans une balise <incode>h2</incode> contenant avec une classe <incode>.h4</incode> pour leur donner un style plus petit même s'ils sont sémantiquement des <incode>h2</incode>. Le texte qui suit, sera un paragraphe.
Ajoutez des classes utilitaires Bootstrap pour créer l'espace nécessaire entre chaque élément et section.
</checklist>





<dots></dots>
<grostitre>Section Actualité - Cartes</grostitre>
<checklist>
Dans la section<incode>#actualite</incode> que vous avez préalablement créee, ajoutez les balises et classes nécessaires pour créer une grille de mise en page Bootstrap: une rangée d'une seule colonne qui inclura le titre, une autre rangée qui contiendra trois colonnes et une dernière rangée d'une seule colonne qui contiendra le bouton "Toute l'actualité>>".
Dans la rangée 2: Par défaut, chaque colonne s'affiche sur toute la largeur de la page (donc elles s'affichent une en dessous de l'autre).
Dans la rangée 2: À partir du <em>breakpoint</em> <incode>md</incode>, chaque colonne s'affiche sur la moitié de la largeur de la page.
Dans la rangée 2: À partir du <em>breakpoint</em> <incode>lg</incode>, chaque colonne s'affiche sur le tier de la largeur de la page.
Dans la rangée 1: Ajoutez le titre "Actualité". Il sera aussi de niveau 2.  Ajoutez les classes utilitaires Bootstrap pour créer l'espacement autour du titre. Ajoutez du CSS pour la "petite ligne" de couleur de la variable <incode>bs-secondary</incode>.
Dans votre grille, ajoutez des cartes (card) Bootstrap et toutes les balises et classes nécessaires sur le contenu.
L'entité de la <incode>.card</incode> doit être un lien qui mène à "#". Utilisez la balise appropriée.
En CSS, ajustez l'image de la carte, elle doit avoir une hauteur maximum de 200px et vous devez positionner les images dans leur cadre comme elles sont présentées dans l'APERÇU.
Les titres dans les cartes seront de niveau 3.
Ajoutez des classes utilitaires Bootstrap pour créer l'espacement nécessaire entre chaque élément et section.
Dans la rangée 3: Ajoutez le texte "Toute l'actualité>>" et ajoutez les classes Bootstrap nécessaires pour lui donner cet aspect de gros bouton.
</checklist>



<warning>Rappel, cet examen comporte 2 parties. Veuillez en tenir compte dans votre gestion du temps. La deuxième partie se trouve <a href="https://tim-montmorency.com/timdoc/582-424MO/exercices/roue-de-fortune-9876501/" target="_blank" rel="noopener noreferrer">sous ce lien</a>.</warning>



<dots></dots>
<grostitre>Section Emojis - animaux et nature</grostitre>
<checklist>
Dans la section<incode>#emojis-animaux-et-nature</incode> que vous avez préalablement créee, ajoutez les balises et classes nécessaires pour créer une grille de mise en page Bootstrap ayant qu'une seule colonne.
Dans cette section, en JavaScript, via fetch API à l'url https://emojihub.yurace.pro/api/all/category/animals-and-nature, vous devez afficher les emojis suivants en ayant chercher le code HTML de l'émoji parmi les données reçues: <br>- un chevreuil, <br>- une feuille d'érable, <br>- une buffle d'eau, <br>- une herbe, <br>- un tamia (qu'on appelle aussi un suisse au Québec).
</checklist>



<dots></dots>
<grostitre>Pied de page</grostitre>
<checklist>
Si ce n'est pas déjà le cas, déplacez la balise existante <incode>footer</incode> sous la balise <incode>main</incode>.
Ajoutez les balises et classes nécessaires pour une grille de mise en page Bootstrap de 3 colonnes.
Par défaut les colonnes s'affichent sur toute la largeur de la page (donc elles s'affichent une en dessous de l'autre)
À partir du breakpoint <incode>lg</incode>, elles s'affichent les 3 une à côté de l'autre. 
Vous pouvez travailler avec le principe de décallage (offset) de Bootstrap pour placer la 2e colonnes qui contient le menu.
Déposez simplement le contenu textuel qui est prévu pour chaque colonne. 
Nul besoin de styliser le texte, il l'est déjà.
Ajoutez des classes utilitaires Bootstrap pour créer l'espacement nécessaire entre chaque élément et section.
</checklist>

<warning>Rappel, cet examen comporte 2 parties. Veuillez en tenir compte dans votre gestion du temps. La deuxième partie se trouve <a href="https://tim-montmorency.com/timdoc/582-424MO/exercices/roue-de-fortune-9876501/" target="_blank" rel="noopener noreferrer">sous ce lien</a>.</warning>


<grostitre>Remise</grostitre>

<warning>Ne faire qu'une remise pour les 2 exercices (art autochtone et roue de fortune)</warning>

<checklist>Créez un dossier nommé [nom de famille]_[prénom]_examen<br>ex: <em>ouellet_mariemichelle_examen</em>
    Déposez-y vos 2 dossiers de projet (art autochtone et roue de fortune)
    Compressez ensuite votre dossier de travail en <a href="https://www.ezyzip.com/" target="_blank"
        rel="noopener noreferrer">fichier&nbsp;zip 🗜</a>
    Envoyez-moi un <a href="https://teams.microsoft.com/l/chat/0/0?users=mariem.ouellet@cmontmorency.qc.ca"
        target="_blank" rel="noopener noreferrer">message privé sur Teams</a> contenant votre fichier&nbsp;zip.
</checklist>


