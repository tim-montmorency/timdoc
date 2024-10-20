<?php
/**
 * @type     article
 * @title    Travail 1
 * @icon     images/icon.png
 * @abstract Consignes
 */
?>

<p class="spacer">Pour le travail 1, vous devrez produire une application simple en réalité augmentée. Celle-ci devra contenir une scène menu et une scène de détection. Vous devrez produire une image détectable par votre application. Lorsque celle-ci sera détectée, des sprites devront s'animer et émettre des sons. Vous devrez produire deux animations différentes et les alterner.</p>
<alert>Attention : les seuls médias (assets, modèles, sons, échantillons sonores, textures, images, etc.) permis dans vos projets sont ceux que vous créez vous-même! Vous ne pouvez même pas utiliser les médias fournis en exemple par l’enseignant! </alert>


<dots></dots>
<grostitre>Contenus essentiels</grostitre>
<p>Votre travail devra contenir les éléments suivants:</p>
<checklist>
L’expérience doit commencer avec un écran d’introduction qui affiche le nom de l’expérience ainsi que votre propre nom. Il doit y avoir un bouton pour démarrer l’expérience, un pour la quitter et un pour accéder aux consignes. 
Dans votre écran d’introduction, vous devez créer un menu consignes avec un texte qui explique les règles et les contrôles. 
Lorsqu’on clique sur le bouton pour démarrer le jeu, une nouvelle scène doit être chargée. 
Dans la scène de jeu, on doit avoir un bouton qui charge la scène menu. 
Vous devez dessiner vos propres visuels pour les boutons ainsi qu'un fond pour votre menu principal.
Lorsque l’image est détectée, elle s’anime. 
On doit compter les détections, lorsque c’est pair, l’image s’anime d’une façon et lorsque c’est impair d’une autre. 
Vous devez personnaliser l’ouverture de l’application avec une image ou en changeant la couleur. Vous devez également personnaliser l'icône de l'application. 
Un son doit être activé en même temps que l’animation. Il doit être différent pour chaque animation. 
Langue : votre expérience doit être en français. 
La remise doit être en format exporté (i.e. built). 

</checklist>

<dots></dots>
<grostitre>Thématique</grostitre>
<p>La thématique est libre. L'important est que vous créiez vos propres sprites animés et vos sons. Vos sprite sheet doivent contenir au minimum neuf images. La fonctionnalité ainsi que le design du jeu seront évalués. </p>

<dots></dots>
<grostitre>Exemple</grostitre>
<p>Voici un exemple de l'expérience que vous allez produire: </p>

<doclink href="https://cmontmorency365-my.sharepoint.com/:v:/g/personal/lora_boisvert_cmontmorency_qc_ca/EXwveboROyxFq0rp66c0XRABPnYf7xWcl9rvjNnrsKVN5Q?e=EdHGgK">Exemple</doclink>


<dots></dots>
<grostitre>Contenus à produire</grostitre>
<checklist>
    2 SpriteSheet carrées contenant au moins 9 images chaque.
    2 sons qui accompagneront les SpriteSheet animées.
    1 image qu'on pourra scanner avec un appareil mobile.
    Des visuels pour les boutons.
    Des visuels pour le menu.
    Trouver une police de caractère qui vous plaît et la télécharger (pour le menu).
   
</checklist>

<dots></dots>
<grostitre>Plan de travail détaillé</grostitre>
<p>Voici étape par étape comment créer votre travail 1. Les notes de cours reliées à chaque étape vous expliquerons plus en détail comment faire. Elles sont disponibles via les mots soulignés en rouge.</p>

<h3>Création du projet</h3>

<checklist>
    Créez un projet 2D core à partir du Unity Hub. <a href="https://tim-montmorency.com/timdoc/582-434MO/unity/introduction/#creer-un-projet">Créer le projet</a>
    Modifiez la plateforme de développement pour Android. <a href="https://tim-montmorency.com/timdoc/582-434MO/installation/configuration/#developper-pour-android">Changer de plateforme</a>
    Créez les dossiers pour ranger vos fichiers dans la fenêtre project.  <a href="https://tim-montmorency.com/timdoc/582-434MO/unity/introduction/#nomenclature">Nomenclature</a>  
    Créez deux scènes dans votre dossier Scenes. Pour ce faire, faites un clic droit dans la fenêtre Project, puis sélectionnez Create, Scene. Une scene sera pour votre jeu et l'autre pour votre menu. Donnez-leur des noms évocateurs.
</checklist>

<h3>Création de la scène Jeu - détection AR</h3>

<checklist>
    Ouvrez la scène jeu en double-cliquant sur celle-ci. Vous pouvez maitenant lui apporter des modifications.    
    Importer Vuforia Engine grâce au Package Manager. <a href="https://tim-montmorency.com/timdoc/582-434MO/unity/introduction/#importer-des-assets-du-asset-store">Package Manager</a>
    Assurez-vous d'avoir créé une license Vuforia pour votre projet. <a href="https://tim-montmorency.com/timdoc/582-434MO/realite-augmentee/introduction/#creation-dune-license">License</a>
    Créez une base de données pour les images de détection de votre projet (L'image qui sera scannée avec le téléphone). Je vous recommande de les exporter au format .jpg avant de les amener dans Vuforia. <a href="https://tim-montmorency.com/timdoc/582-434MO/realite-augmentee/detection/#creation-dune-base-de-donnees-dimages">Base de données</a>
    Téléchargez la base de données que vous venez de créer. <a href="https://tim-montmorency.com/timdoc/582-434MO/realite-augmentee/detection/#telecharger-la-base-de-donnees">Télécharger</a>
    Importez les images de détection dans Unity. <a href="https://tim-montmorency.com/timdoc/582-434MO/realite-augmentee/detection/#importer-les-images">Importer</a>
    Dans la fenêtre jeu, vous devez maintenant créer une caméra pour la réalité augmentée (ArCamera). Vous devez aussi vous assurez de mettre la license sur la caméra. <a href="https://tim-montmorency.com/timdoc/582-434MO/realite-augmentee/detection/#camera-de-detection">ArCamera</a>
    Maintenant, créez un GameObject Image target. Celui-ci vous permettra de détecter l'image que vous avez mise dans votre DataBase.  <a href="https://tim-montmorency.com/timdoc/582-434MO/realite-augmentee/detection/#detecter-une-image">Image Target</a>   
</checklist>

<h3>Création de la scène Jeu - Animations</h3>

<checklist>
    Toujours dans la scène jeu, nous allons maintenant importer les deux sprites sheet de nos animations. <a href="https://tim-montmorency.com/timdoc/582-434MO/unity/animation/#importer-la-sprite-sheet">Importation SpriteSheet</a>
    Créer un Animator par animation pour la contrôler. <a href="https://tim-montmorency.com/timdoc/582-434MO/unity/animation/#animator-controller">Animator Controller</a>
    Créer un GameObject avec la composante Animator par animation. Ceux-ci controlleront vos animations. <a href="https://tim-montmorency.com/timdoc/582-434MO/unity/animation/#animator">GameObject Animator</a>
    Créez une animation pour chaque Sprite Sheet. <a href="https://tim-montmorency.com/timdoc/582-434MO/unity/animation/#creation-danimations-de-sprite-sheet">Créer une animation</a>
    Redimensionner vos animations et positionnez-les au-dessus de votre Image de détection dans la fenêtre Scene. Vous pouvez utiliser l'outil RectTool (T) pour vous aider. 
    Importez vos sons dans la fenêtre project en faisant un clic-droit dans cette fenêtre, puis import New Asset. 
    Ajouter une composante AudioSource sur vos GameObject animations. 
    Glissez vos clips audio dans le AudioSource et assurez-vous qu'il jouera en boucle lorsque l'objet sera activé. <a href="https://tim-montmorency.com/timdoc/582-434MO/unity/son/#audio-source">Son</a>
    Dans la fenêtre hierarchy, glissez vos animations sur le ImageTarget créé plus tôt. Elles deviendront enfants du ImageTarget. 
    Désactivez vos animations. Nous les activerons à l'aide d'un script. Pour se faire, dans la fenêtre hierarchy, appuyez sur votre animation. Ensuite, dans l'inspecteur, appuyez sur le crochet à côté du nom du GameObject. Celui-ci devient alors gris pâle dans la hierarchy.
</checklist>

<h3>Création de la scène Jeu - Script</h3>

<checklist>
    <p>Suivez le tutoriel suivant pour créer le script de votre Scene Jeu.</p>
</checklist>
<youtube src="v4OD6PwHGIw"></youtube>

<h3>Création de la scène Menu - UI</h3>

<checklist>
    Ouvrez la scène Menu en double-cliquant sur celle-ci. N'oubliez pas de sauvegarder la Scene Jeu avant de la quitter! Vous pouvez maitenant lui apporter des modifications.    
    Créez un canvas qui contiendra tous les objets de votre Scene. Assurez-vous qu'il se fie à une taille d'écran de 1920 x 1080 (Scale with screen size).  <a href="https://tim-montmorency.com/timdoc/582-434MO/unity/UI/#canvas">Créer un canvas</a>
    Dans la fenêtre Game, modifier le format de votre Scene de Free Aspect à 1920 x 1080 Landscape. 
    Dans le canvas, créez un Panel. Il contiendra les objets de votre menu.
    Créez 3 boutons dans votre Panel. Un pour quitter le jeu, un pour ouvrir les consignes, un pour ouvrir le jeu. <a href ="https://tim-montmorency.com/timdoc/582-434MO/unity/font/#composante">Modifier le texte des boutons</a>
    Créez un objet texte dans votre panel pour inscrire le titre de votre expérience.
    Créez un objet texte dans le panel pour inscrire votre nom. 
    Si désiré, créez une nouvelle police pour vos textes. <a href ="https://tim-montmorency.com/timdoc/582-434MO/unity/font/#creer-une-police">Créer une police</a>
    Ajustez l'ancrage de tous vos objets. Le panneau devrait être en bleu pour s'étirer et les autres objets en rouge pour s'ancrer à des positions précises. <a href="https://tim-montmorency.com/timdoc/582-434MO/unity/UI/#rect-transform">Rect Transform</a>
    Créez un objet vide et nommez le. Ce sera le controlleur de votre scene.
    Sur l'objet vide, créez un nouveau script et donnez lui un nom. 
    Créez la fonction changement de scène dans votre nouveau script. <a href ="https://tim-montmorency.com/timdoc/582-434MO/code/changement_scene/#changement-de-scene">Script Scene</a>
    Ajoutez aussi la fonction pour quitter le jeu. <a href ="https://tim-montmorency.com/timdoc/582-434MO/code/quitter_jeu/">Script Quitter</a>
    Assignez les nouvelles fonctions créés à vos boutons démarrer le jeu et quitter le jeu. <a href ="https://tim-montmorency.com/timdoc/582-434MO/code/evenements/#evenement">Événement</a>
    Dans le canvas, créez un nouveau Panel pour les consignes. 
    Dans ce panel, créez un panel par étape de vos consignes. 
    Dans chaque panel d'étape, mettez des boutons pour passer à l'étape suivante ou revenir à la précédente. Mettez aussi le texte des consignes. 
    Sur chaque bouton, utilisez l'événement OnClic pour activer et désactiver les panels nécessaires (grâce à GameObject -> SetActive). <a href ="https://tim-montmorency.com/timdoc/582-434MO/code/evenements/#evenement">Événement</a>
    Créez aussi un bouton fermeture qui ferme le panel consigne lorsqu'on appuie dessus. 
</checklist>

<h3>Création de l'application</h3>
<checklist>
    Suivez le tutoriel suivant pour préparer l'exportation de votre application et modifier l'écran d'intro de votre jeu. Changez aussi l'icône par défaut de votre jeu. <a href ="https://tim-montmorency.com/timdoc/582-434MO/unity/build/#preparer-lexportation">Préparer</a>
    Suivez le tutoriel suivant pour exporter l'application. <a href ="https://tim-montmorency.com/timdoc/582-434MO/unity/build/#exporter-pour-android">Préparer</a>
</checklist>

