<?php
/**
 * @type     article
 * @title    Transitions
 * @icon     images/icon.png
 * @abstract Entre les scènes
 */
?>

<p class="spacer">Dans Unity, il est possible de créer des transitions entre les scènes. En VR, cela peut aider pour ceux qui ont du motion Sickness.</p>

<dots></dots>

<grostitre>Tutoriel vidéo</grostitre>
<youtube src="48Nk8qGfrmA"></youtube>

<dots></dots>

<grostitre>Tutoriel écrit</grostitre>
<checklist>
    Créez un objet vide nommé ChargementScene.
    Créez un canvas dans ce nouvel objet. (Create, UI, canvas)
    Dans le canvas, choisissez Screen-Space camera comme Render mode et glissez votre main Camera dans le paramètre Render Camera.
    Changez le Plane distance pour 0.4 et le order in layer pour 1.
    Dans l'objet Canvas, créez une image. Clic droit sur le canvas, UI, Image. 
    Changez la couleur de l'image pour qu'elle soit noire et opaque. 
    Assurez-vous que l'image est de la même taille que le canvas. 
    Sur votre image, ajoutez la composante Canvas Group.
    Sur le canvas, ajoutez la composante Animator.
    Créez un nouvel animator controller dans votre dossier animation (Clic droit, create, animator controller) et glissez le dans le paramètre controller de l'animator du canvas.
    Créez une nouvelle animation nommée transitionFin.
    Pour l'animation transitionFin, à 0 frame, le paramètre Alpha du canvas Group de l'image doit être à 1 et à 60 frames, à 0.  
    Créez une nouvelle animation nommée transitionDebut.
    Pour l'animation transitionDebut, à 0 frame, le paramètre Alpha du canvas Group de l'image doit être à 0 et à 60 frames, à 1.  
    Dans le dossier animation (fenêtre project), trouvez vos deux animations, cliquez sur celles-ci et désactivez le loop time en décochant la case dans la fenêtre Inspector.
    Assurez-vous dans la fenêtre Animator que transitionFin est celle qui est en orange. Sinon, cliquez droit sur celle-ci et sélectionnez Set as layer default state.
    Cliquez droit sur la transitionFin et sélectionnez Make Transition, Appuyez sur transitionDebut pour faire une transition vers celui-ci. 
    Dans Parametres en haut à gauche de la fenêtre animator, appuyez sur le + et sélectionnez Trigger dans la liste. Nommez le paramètre Debut.
    Cliquez sur la flèche blanche entre les deux animations. Dans conditions(fenêtre inspector), appuyez sur +. Assurez-vous que la condition est Debut.
    Dans settings, toujours dans la fenêtre Inspector, assurez-vous de décocher Has exit time, puis de mettre la transition duration à 0. 
    Maintenant, créez un script sur l'objet ChargementScene.
    Assurez vous d'ajouter la librairie pour les scènes: using UnityEngine.SceneManagement; 
    Créez un Animator public pour contenir l'animator de votre canvas. 
    Créez une coroutine qui part l'animation (Animator.SetTrigger("Start");).
    Ensuite, attendez le temps désiré. 
    Puis, chargez la prochaine scène.
    Finalement, sortez de la coroutine.
    Créez une fonction qui appelle la coroutine. 
    Sortez du script et glissez-lui le canva dans le paramètre Animator.
    Créez un prefab avec votre ChargementScene. 
    Allez dans votre deuxième scène et glissez le prefab ChargementScene dans la hiérarchie. 
    Assurez-vous que le canva est dans le paramètre Animator du script. 
    Assurez-vous dans File, Build Settings que vos scènes font partie de Scenes in Build, sinon ajoutez-les. 
    Les transitions devraient fonctionner maintenant!
</checklist>