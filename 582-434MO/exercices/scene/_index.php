<?php
/**
 * @type     article
 * @title    02_Exercice 
 * @icon     images/icon.png
 * @abstract Tutoriel
 */
?>

<p class="spacer">Cet exercice vous aidera à vous familiariser avec les principes de la 3D dans Unity. </p>


<dots></dots>


<grostitre>Préparer le projet</grostitre>

<checklist>
    Premièrement, créez un nouveau projet à l'aide du modèle 3D core.
    Créez les dossiers pour ranger vos fichiers dans la fenêtre project. <a href="https://tim-montmorency.com/timdoc/582-434MO/unity/introduction/#nomenclature">Nomenclature</a>    
    Ensuite, importez le paquet Polygon - Sampler Pack de Synty studio à l'aide du Package Manager. 
</checklist>
<iframe width="560" height="315" src="https://www.youtube.com/embed/jaqGgmCTjPI?si=-nhd72GQ06mEN7Yu" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

<dots></dots>


<grostitre>Préparer la première Scène</grostitre>

<checklist>
    Créez une nouvelle scène à votre nom. 
    Dans les dossiers Synty studio, sélectionnez un Prefab de sol que vous placerez en position (0,0,0).
    Dans les mêmes dossiers, sélectionnez un bâtiment qui comprend un intérieur et un extérieur. Positionnez celui-ci sur le terrain. Ajustez la taille du bâtiment au besoin.
    Agrémentez la maison et son extérieur de quelques prefabs. Tentez de diviser l'intérieur de votre bâtiment en trois zones grâce aux objets. 
    Dans le dossier Assets-> SyntyStudios-> PolygonStarter-> PolygonPrototype-> Prefabs-> Icons, trouvez les objets point light et spot light, mettez-les dans deux zones différentes de votre bâtiment.
    
</checklist>
<p>Cette vidéo comprends les étapes précédentes:</p>
<iframe width="560" height="315" src="https://www.youtube.com/embed/6JgRHcI3-Ow?si=1hkV24WlOgHnKgZF" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>



<dots></dots>

<grostitre>Créer une télévision</grostitre>

<p>Nous allons créer une télé à l'aide des objets 3D de Unity.</p>
<checklist>
    Créez un objet vide, les parties de votre télévision iront à l'intérieur de celui-ci. 
    Créez un cube, puis redimensionnez-le au format de votre télévision. 
    Créez ensuite un plane qui sera votre écran et positionnez-le au-dessus du cadre de votre télévision.
    Créez un matériel pour le cadre de votre télé et choisissez sa couleur. 
    Créez également un matériel pour votre écran et choisissez une image par défaut. 
    
</checklist>
<p>Cette vidéo comprends les étapes précédentes:</p>
<iframe width="560" height="315" src="https://www.youtube.com/embed/F20wMIDgLn0?si=_Lmo87xTQC1qei6q" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>


<dots></dots>

<grostitre>Modifier le ciel (Skybox)</grostitre>

<p>Nous allons modifier la Skybox de votre scene.</p>
<checklist>
    Créez un nouveau matériel. Comme shader, sélectionnez Skybox, procedural.
    Ouvrez la fenêtre lighting à partir du menu window, rendering.
    Glissez votre nouveau ciel comme Skybox material dans la section Environnement de la fenêtre Lighting. 
    Dans l'inspecteur, modifiez les paramètres de votre ciel pour lui donner les couleurs de votre choix. 
</checklist>
<p>Cette vidéo comprends les étapes précédentes:</p>
<iframe width="560" height="315" src="https://www.youtube.com/embed/1rOjHaAOPbM?si=1s8G4EY2AMgT8QrC" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>


<dots></dots>

<grostitre>Déplacement du personnage</grostitre>
<p>Pour configurer le déplacement de votre caméra, vous devez télécharger ces scripts:</p>
<doclink href="fichiers/scripts_exercice1.zip">Scripts 📁</doclink>
<checklist>
    <p>Suivez ensuite la vidéo suivante pour bien configurer votre joueur et ses déplacements:</p>
</checklist>
<iframe width="560" height="315" src="https://www.youtube.com/embed/J1zJ__tEtho?si=BRSN_KHbX63Kpp9w" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

<dots></dots>

<grostitre>Éclairage de la scène</grostitre>
<checklist>
<p>Suivez ensuite la vidéo suivante pour configurer l'éclairage de votre bâtiment:</p>
</checklist>
<iframe width="560" height="315" src="https://www.youtube.com/embed/eVzF0QE1zFE?si=KyObjPzhwdaizw_M" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>


<dots></dots>
<grostitre>Création de zones</grostitre>
<checklist>
<p>Créez un objet vide avec un box collider pour chaque pièce de la maison. Assurez-vous que les colliders ont la bonne taille pour couvrir toute la pièce.</p>
Activez la fonction is Trigger de chaque collider pour permettre à votre personnage de se promener entre les pièces. 
</checklist>

<iframe width="560" height="315" src="https://www.youtube.com/embed/wBlLnqNaRK0?si=O_kUMqoHFSDkgeFg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>


<dots></dots>
<grostitre>Allumer ou éteindre une lumière avec la détection</grostitre>
<checklist>
<p>Suivez la vidéo suivante pour allumer ou éteindre une ampoule selon la présence ou non de votre personnage dans la pièce:</p>
</checklist>
<iframe width="560" height="315" src="https://www.youtube.com/embed/QuisWgC1V7U?si=MlJufG54fuKpSLEc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>


<dots></dots>
<grostitre>Partir ou arrêter une vidéo avec la détection</grostitre>
<checklist>
<p>Suivez la vidéo suivante pour partir ou arrêter une vidéo dans votre télévision selon la présence ou non de votre personnage dans la pièce:</p>
</checklist>
<iframe width="560" height="315" src="https://www.youtube.com/embed/Ljcn5VG5958?si=qn3SRwO7oSAMk32c" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

<dots></dots>
<grostitre>Animer un paramètre sur une lumière</grostitre>
<checklist>
<p>Suivez la vidéo suivante pour animer l'état d'une lumière et partir vos animations selon la présence ou non de votre personnage dans la pièce:</p>
</checklist>
<iframe width="560" height="315" src="https://www.youtube.com/embed/VUM6iT5u-DQ?si=SXjvPz92UJ8k1tlS" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

<dots></dots>
<grostitre>Créer des prefabs</grostitre>
<checklist>
<p>Suivez la vidéo suivante pour ajouter des objets que le personnage pourra récupérer dans votre pièce:</p>
</checklist>
<iframe width="560" height="315" src="https://www.youtube.com/embed/HmLe22qIjAM?si=9nM2EPr3SLV8QjLL" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>


<dots></dots>
<grostitre>Amasser des objets</grostitre>
<checklist>
<p>Suivez la vidéo suivante pour amasser des objets et les compter:</p>
</checklist>
<iframe width="560" height="315" src="https://www.youtube.com/embed/pktYZ4XboPU?si=N_RYdp1d3H_8mWAL" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

<dots></dots>
<grostitre>Canvas et réussite</grostitre>
<checklist>
<p>Suivez la vidéo suivante pour terminer votre exercice:</p>
Vous pouvez télécharger votre son de réussite depuis internet, pixabay en a des bons. 
</checklist>
<iframe width="560" height="315" src="https://www.youtube.com/embed/h0uvCte0Lq4?si=P_ZGSMQlw_EhkUNM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

<dots></dots>

<grostitre>Exporter le jeu</grostitre>
<checklist>
    Exporter le jeu à l'aide du bouton build dans File, build settings.
    Remettez le .exe de votre jeu à votre nom dans le dossier de remise:
</checklist>

<doclink href="https://cmontmorency365-my.sharepoint.com/:f:/g/personal/lora_boisvert_cmontmorency_qc_ca/Er2IHGKhv29PonR8Sp1Un4QBGEPjr_iXWQU0Ua4snlOoXw?e=hYWvav">Remise Exercice</doclink>


<dots></dots>

<grostitre>Notes de cours 📚</grostitre>

<?php intlink("../../unity/prefabs/"); ?>
<?php intlink("../../code/coroutine/"); ?>