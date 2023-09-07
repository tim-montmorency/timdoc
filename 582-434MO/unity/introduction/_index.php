<?php
/**
 * @type     article
 * @title    Introduction à Unity
 * @icon     images/icon.png
 * @abstract Navigation, création d'objets
 */
?>

<p class="spacer">Voici un résumé des bases que vous apprendrez dans l'exercice au bas de la page.</p>


<dots></dots>

<grostitre>Créer un projet</grostitre>
<p>Pour créer un nouveau projet dans Unity, on doit passer par le Unity Hub. Une fois que celui-ci est ouvert, assurez-vous d'être dans la section Projects du Hub. Ensuite, appuyez sur le bouton bleu New project.</p>
<p>Quelques paramètres sont à modifier dans la fenêtre qui s'ouvre:</p>
<checklist>
    Vérifier la version de l'éditeur. En haut de la fenêtre, vous avez une liste déroulante nommée Editor Version. Assurez-vous de prendre la version 2022.3.8f1.  
    Ensuite, vous devez spécifier à Unity quel type de projet vous souhaitez créer. Pour l'instant, nous créerons des projets 2D Core alors appuyez sur ce choix.
    Ensuite, à droite vous devez entrer le nom de votre projet et spécifier à quel endroit le sauvegarder. 
    Une fois que c'est fait appuyez sur Create project. 
</checklist>

<info><p>Voici un aperçu des types de projets disponibles:</p> 
    <p>2D (core) et 3D (core) sont respectivement pour les projets en 2D ou 3D. Ils utilisent la méthode de rendu par défaut de Unity.</p>
    <p>2D (URP) et 3D (URP) sont aussi pour des projets en 2D ou 3D, leur méthode de rendu par défaut se nomme Universal Render Pipeline. Cette méthode de rendu est personnalisable et permet de créer des graphiques optimisés.</p>
    <p>3D (HDRP) est la méthode que nous utiliserons pour la VR. La méthode de rendu est plus performante et a une meilleure résolution, mais elle est plus longue à traiter.</p>
    <p>Il existe d'autre modèles, mais nous utiliserons principalement ceux ci-haut.</p>
</info>

<dots></dots>

<grostitre>Fenêtres</grostitre>
<p>Explorons l'interface de Unity.</p>
<img src="images/schema.jpg">
<p>1. Barre de menu <br>
    Ici, vous pourrez sauvegarder votre projet, créer des objets, faire apparaître de nouvelles fenêtres...</p>
<p>2. Fenêtre Hierarchy <br>
    Cette fenêtre contient une liste de tous les objets présents dans la scène ouverte dans la fenêtre Scene. C'est ici que vous gérer la hiérarchy de vos objets à la manière de calques.</p>
<p>3. Fenêtre Scene <br>
    Cette fenêtre vous permet d'éditer votre jeu ainsi que de le tester lorsque vous allez dans l'onglet Game. La fenêtre Scene montre une scène (un niveau) à la fois.</p>
<p>4. Barre d'outils <br>
    Ici, vous trouverez les outils nécessaires pour modifier les objets de la fenêtre Scene.</p>
<p>5. Fenêtre Inspector <br>
    Cette fenêtre permet d'afficher les composantes des objets présents dans la Scene et de modifier leurs paramètres.</p>
<p>6. Fenêtre Project <br>
    La fenêtre Project contient toutes les ressources externes que vous avez importé dans votre projet. Elle fonctionne à la manière d'un explorateur de fichiers pour vous permettre de classer vos ressources.</p>
<dots></dots>


<grostitre>Nomenclature</grostitre>
<p>Lorsque vous créez un nouveau projet, je vous conseille de tout de suite créer les dossiers suivants dans votre fenêtre Project. Ainsi, vous pourrez classer vos ressources dès que vous les importez:</p>
<checklist>
    Animation
    Art
    Audio
    Font
    Materials (en 3D seulement)
    Prefabs
    Rendering (Si nécessaire)
    Scenes
    Scripts
</checklist> 


<dots></dots>


<grostitre>Importer des Assets du Asset Store</grostitre>
<p>Unity a un magasin nommé le Asset Store qui nous permet d'ajouter des objets 2D, 3D, des scripts et des matériaux à nos projets. Bien que vous deviez créer tous les assets de vos projets, il pourrait arriver que vous ayez à télécharger des Assets depuis le magasin. Vous devrez premièrement, trouvez une ressource dans le magasin, puis ensuite utiliser le Package Manager de Unity pour importer les ressources dans votre projet. Pour ce faire, suivez la procédure suivante:</p>
<checklist>
Dans Unity, dans la barre de menu en haut à gauche, appuyez sur Window, Asset Store. Une nouvelle fenêtre ouvrira. Appuyez ensuite sur Search Online. 
Une page Web s'ouvrira, trouvez alors la ressource que vous souhaitez télécharger et appuyez sur celle-ci. 
Appuyez sur Add to my assets, acceptez les conditions, et revenez dans Unity. 
Cliquez à nouveau sur Window dans la barre de menu, puis choisissez Package Manager. Une fenêtre s'ouvrira. Celle-ci contient plusieurs éléments présents dans votre projet. 
En haut à gauche, il y a un menu déroulant nommé Packages:In Project. Appuyez sur celui-ci et sélectionnez My Assets dans la liste. Vous verrez alors les éléments que vous avez ajouté à vos Assets depuis le Asset Store. Sélectionnez le paquet que vous venez d'ajouter depuis le Asset Store. Un résumé s'affichera à droite. Appuyez sur Download au bas de la page. 
Une fois que c'est téléchargé, appuyez sur Import, cliquez ensuite sur Install/Upgrade, puis sur Import dans la nouvelle fenêtre qui s'ouvre. 
</checklist>


<dots></dots>


<exercice href="exercices/intro/"></exercice>