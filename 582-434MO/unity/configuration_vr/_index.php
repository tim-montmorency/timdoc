<?php
/**
 * @type     article
 * @title    Configuration VR
 * @icon     images/icon.png
 * @abstract Préparer projet Unity pour la VR
 */
?>

<p class="spacer">Nous allons voir quelles composantes ajouter à votre projet pour pouvoir créer un projet en VR.</p>

<dots></dots>

<grostitre>Créer une scène et intégrer le casque de VR</grostitre>

<checklist>
    File, new scene, puis choisir un modèle HDRP pour créer votre nouvelle scène. (Un GameObject Sky and Fog Volume apparaîtra dans votre scène si vous avez le bon modèle.)
    Sauvegardez votre scène dans le dossier Scene.
    Créez un objet Empty et nommez le joueur.
    Dans le joueur, ajouter un objet: Xr, XR Origin.
    Supprimez la MainCamera qui était dans votre projet au début.
    Ouvrez l'objet XR Origin et trouvez le controlleur Gauche. Dans la fenêtre Inspector sur la composante XR Controller, appuyez sur l'icône de sliders en haut à droite. Sélectionnez ensuite Left Controller dans la liste. 
    Répétez cette étape pour le controlleur droit et choisissez Right controller. 
    Dans le joueur, ajoutez un objet: XR, Locomotion System. 
    Glissez votre XR Origin dans la boîte XR Origin de la composante Locomotion System de votre GameObject Locomotion System.
    Glissez le GameObject XR Interaction Manager dans le Joueur.
    Créez un prefab de votre joueur pour pouvoir l'utiliser dans d'autres scènes. 
</checklist>

<p>Le tout en vidéo: </p>
<iframe width="560" height="315" src="https://www.youtube.com/embed/uwBccDZznHo?si=yavA904nUPVaYahs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

<dots></dots>

<grostitre>Tester avec un clavier et une souris</grostitre>
<p>Cette vidéo vous explique comment tester avec une souris et un clavier:</p>
<iframe width="560" height="315" src="https://www.youtube.com/embed/K9oU2pxeSyw?si=so-kSOnSQVESwKWH" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

<dots></dots>

<grostitre>Automatiser la détection du casque</grostitre>
<p>Si vous voulez que Unity active ou désactive les tests souris-clavier lorsque vous connectez votre casque à l'ordinateur, vous pouvez suivre la vidéo suivante. Sinon, cochez ou décochez le Device simulator pour tester avec le casque ou la souris.</p>
<iframe width="560" height="315" src="https://www.youtube.com/embed/hnxy-QOiGAo?si=cczHOj3F4cyYi0d_" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

<p>Vidéo d'inspiration: </p>
<doclink href="https://youtu.be/ImPZyIM6XNs">Justin P. Barnett</doclink>

