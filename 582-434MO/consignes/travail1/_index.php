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
Vous devez dessiner vos propres visuels pour les boutons ainsi qu'un fond pour votre menu principal.
Lorsque l’image est détectée, elle s’anime. 
On doit compter les détections, lorsque c’est pair, l’image s’anime d’une façon et lorsque c’est impair d’une autre. 
Vous devez personnaliser l’ouverture de l’application avec une image ou en changeant la couleur. 
Un son doit être activé en même temps que l’animation. 
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
    Des visuels pour les boutons (si souhaité).
    Des visuels pour le menu (si souhaité).
    Trouver une police de caractère qui vous plaît et la télécharger (pour le menu).
   
</checklist>

<dots></dots>
<grostitre>Plan de travail détaillé</grostitre>
<p>Voici étape par étape comment créer votre travail 1. Les notes de cours reliées à chaque étape vous expliquerons plus en détail comment faire. Elles sont disponibles via les mots soulignés en rouge.</p>

<checklist>
    Créez un projet 2D core à partir du Unity Hub. <a href="https://tim-montmorency.com/timdoc/582-434MO/unity/introduction/#creer-un-projet">Créer le projet</a>
    Modifiez la plateforme de développement pour Android. <a href="https://tim-montmorency.com/timdoc/582-434MO/installation/configuration/#developper-pour-android">Changer de plateforme</a>
    Créez les dossiers pour ranger vos fichiers dans la fenêtre project.  <a href="https://tim-montmorency.com/timdoc/582-434MO/unity/introduction/#nomenclature">Nomenclature</a>  
    Créez deux scènes dans votre dossier Scenes. Pour ce faire, faites un clic droit dans la fenêtre Project, puis sélectionnez Create, Scene. Une scene sera pour votre jeu et l'autre pour votre menu. Donnez-leur des noms évocateurs.
    Importer Vuforia Engine grâce au Package Manager. <a href="https://tim-montmorency.com/timdoc/582-434MO/unity/introduction/#importer-des-assets-du-asset-store">Package Manager</a>
    Assurez-vous d'avoir créé une license Vuforia pour votre projet. <a href="https://tim-montmorency.com/timdoc/582-434MO/realite-augmentee/introduction/#creation-dune-license">License</a>
    Créez une base de données pour les images de détection de votre projet (L'image qui sera scannée avec le téléphone). Je vous recommande de les exporter au format .jpg avant de les amener dans Vuforia. <a href="https://tim-montmorency.com/timdoc/582-434MO/realite-augmentee/detection/#creation-dune-base-de-donnees-dimages">Base de données</a>
    Téléchargez la base de données que vous venez de créer. <a href="https://tim-montmorency.com/timdoc/582-434MO/realite-augmentee/detection/#telecharger-la-base-de-donnees">Télécharger</a>
    Importez les images de détection dans Unity. <a href="https://tim-montmorency.com/timdoc/582-434MO/realite-augmentee/detection/#importer-les-images">Importer</a>
    Dans la fenêtre jeu, vous devez maintenant créer une caméra pour la réalité augmentée (ArCamera). Vous devez aussi vous assurez de mettre la license sur la caméra. <a href="https://tim-montmorency.com/timdoc/582-434MO/realite-augmentee/detection/#camera-de-detection">ArCamera</a>

</checklist>

