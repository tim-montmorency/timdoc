<?php 
/**
 * @type     exercice
 * @title    Manette interactive
 * @icon     images/icon.png
 * @abstract Cet exercice vous permettra d'allumer une télévision avec une manette.
 */
?>

<p>Vous devrez allumer une télévision avec une manette ou la lumière d'une torche en appuyant sur le trigger de votre controlleur.</p>



<dots></dots>


<grostitre>Matériel</grostitre>
<h3>Médias</h3>
<checklist>
    Téléchargez une vidéo libre de droits depuis Internet.
</checklist>

<dots></dots>


<grostitre>Requis</grostitre>

<checklist>
  Créez une télévision avec les objets 3D de Unity. L'écran doit être un Plane séparé de la structure de la télé. 
  Sur l'écran, vous devez mettre une composante Video Player pour faire jouer votre vidéo. 
  Créez un objet 3D qui représente une manette. 
  On doit pouvoir récupérer la manette en vr, pour cela vous aurez besoin d'une composante XR Grab Interactable. 
  Créez un script, dans celui-ci, vous devez créer une fonction qui activera (enable) la vidéo de la télévision lorsque le trigger de votre manette est enfoncé (Quand on tient la manette), explorer les interactor events sur la composante XR Grab Interactable.
</checklist>

<dots></dots>

<grostitre>Alternative</grostitre>
Vous pourriez faire le même exercice, mais allumer une torche (point light) plutôt que partir une vidéo sur une télévision. 

<dots></dots>




<grostitre>Notes de cours 📚</grostitre>



<h3>Créer une télévision</h3>
<intlink href="../scene/#creer-une-television"></intlink>

<h3>Prendre la manette</h3>
<intlink href="../../unity/interaction_vr/#xr-grab"></intlink>

<h3>Partir une vidéo avec la détection</h3>
<intlink href="../scene/#partir-ou-arreter-une-video-avec-la-detection"></intlink>

<h3>Déclencher un script avec le trigger</h3>
<intlink href="../../unity/interaction_vr/#declencher-un-evenement-lorsquun-objet-est-selectionne"></intlink>


<dots></dots>


