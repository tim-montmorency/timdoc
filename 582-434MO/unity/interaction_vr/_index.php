<?php
/**
 * @type     article
 * @title    Interaction en VR
 * @icon     images/icon.png
 * @abstract Saisir, lancer, déclencher
 */
?>

<p class="spacer">Nous allons voir comment prendre et lancer des objets dans Unity.</p>


<dots></dots>

<grostitre>XR grab</grostitre>
<p>En résumé, voici les étapes pour créer un objet interactif:</p>
<checklist>
    Créer un objet, soit avec les objets 3D de Unity ou en important votre modèle. 
    Ajoutez un box collider ou un sphere collider sur votre objet.
    Ajouter la composante XR Grab Interactable sur votre objet.
    Glissez le Interaction Manager de votre joueur dans la boîte Interaction Manager de la composante XR Grab Interactable. 
</checklist>

<p>Sur la composante XR Grab Interactable, il y a en bas complètement une catégorie événement. Lorsque vous l'ouvrez vous pouvez déclencher des éléments précis lorsque votre objet atteint certains stages. Par exemple, si vous prenez votre objet et que vous appuyez sur la gachette, vous pourriez déclencher quelque chose.</p>

<p><iframe width="560" height="315" src="https://www.youtube.com/embed/KljYJ8an1dU?si=bLePjqQ67YstqHc9" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></p>

<dots></dots>

<grostitre>Méthode de sélection</grostitre>
<p>En vr, nous verrons deux méthodes de sélection, le rayon et l'interaction directe. Le rayon nous permet de sélectionner un objet en pointant notre manette vers celui-ci. L'interaction directe pour sa part sélectionne l'objet lorsqu'on le touche ou qu'on entre dans sa zone de collision. Par défaut, vous avez un XR Ray Interactor composante sur vos deux manettes, vous pourrez le désactiver si vous ne voulez pas utiliser cette méthode. Vous pouvez aussi utiliser un mélange des deux méthodes. Pour l'interaction directe, vous devrez vous créer un objet vide comme enfant de votre controlleur et lui donner une composante XR Direct Interactor et un sphere Collider.</p>
<iframe width="560" height="315" src="https://www.youtube.com/embed/O4XpqZM7R0U?si=bQTAMKGN7uYBFhYI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

<dots></dots>

<grostitre>Movement type</grostitre>
<p> Dans la composante XR Grab Interactable, il y a le paramètre Movement type qu'on peut modifier. Je vous invite à tester les 3 types de mouvements pour voir les différences.</p>
<p><b>Kinematic:</b> Quand on tient un objet kinematic, il peut passer à travers les autres objets sans Rigidbody. Si on pousse un objet avec celui-ci, la physique sera prise en compte.</p>
<p><b>Instantaneous:</b>C'est le mouvement le plus stable. Lorsqu'on tient un objet, il ne bouge pas. Par contre, lorsqu'il touche un autre objet, il ne prends pas les règles de la physique en compte.</p>
<p><b>Velocity tracking:</b>Cet objet pourra entrer en collision avec n'importe quel objet qu'il touche. Ce type de mouvement prend en compte la vitesse de votre main. Ainsi, quand on lache l'objet, on lui induit un mouvement plus réaliste.</p>

<dots></dots>

<grostitre>Choisir le point d'attache de l'objet</grostitre>
<p>Dans certaines situations, vous voudrez attacher votre objet à un point précis de votre main. Par exemple, si vous tenez une raquette, vous voulez la tenir par la poignée. Voici comment choisir votre point d'attache:</p>
<checklist>
    Créez un enfant vide (empty) sur votre objet, vous pouvez le nommer attache. 
    Modifiez la position de cet objet pour qu'il soit au point d'attache de votre objet.
    Sélectionnez ensuite votre objet et trouvez la composante XR Grab Interactable.
    Dans le paramètre Attach transform, glissez l'enfant que vous venez de créer.  
    Faites ensuite Play et regardez le résultat. 
    Il est possible que vous deviez ajuster la rotation de votre enfant pour que votre objet soit tenu dans le bon sens. Vous pouvez aussi donner un léger angle à votre objet puisqu'on tient rarement un objet très droit.
</checklist>

<dots></dots>

<grostitre>Empêcher l'objet de bouger avec le Joystick</grostitre>
<p>Vous avez peut-être remarqué, par défaut, on peut bouger l'objet qu'on tient dans nos mains avec le joystick. Parfois cela peut être intéressant, mais à d'autres moments ce n'est pas ce qu'on souhaite. Pour empêcher cela, on doit aller sur la composante XR Ray Interactor de nos controlleurs et désactiver le paramètre Anchor Control. 


<dots></dots>

<grostitre>Cacher les mains lorsqu'un objet est sélectionné</grostitre>
<p>Peu importe la méthode de sélection (XR Ray Interactor ou XR Direct Interactor), vous avez un bouton que vous pouvez cocher sur leur composante qui est: Hide Controller On Select. Celui-ci permet de cacher vos mains lorsque vous prenez un objet. Cela peut être pratique si vos mains n'ont pas l'air de bien agripper les objets. </p>
<dots></dots>

<grostitre>Déclencher un événement lorsqu'un objet est sélectionné</grostitre>

<p>Peu importe la méthode de sélection (XR Ray Interactor ou XR Direct Interactor), vous avez plusieurs événements en bas de la composante. Par exemple, les audio events vous permettent de jouer un son selon si votre manette touche un objet. Vous pouvez aussi utiliser les haptic events pour faire vibrer les controlleur. Finalement, les interactor events permettent de partir des scripts.</p>

<dots></dots>

<grostitre>Empêcher un objet lancé de passer à travers le sol</grostitre>
<p>Si votre objet passe parfois au travers de certains ojbets alors qu'il ne devrait pas, voici comment régler la situation:</p>
<checklist>
    Trouvez votre objet dans la hiérarchie et dans l'inspecteur, trouvez sa composante Rigidbody.
    Changez le Collision detection Type pour Continuous dynamic. Ainsi, le rigidbody fera toujours effet.
    Assurez-vous que isKinematic n'est pas coché sur votre Rigidbody. 
</checklist>

<dots></dots>

<grostitre>Réduire le tremblement de l'objet dans votre main</grostitre>
<p>Parfois, l'objet dans votre main peut avoir l'air de trembler beaucoup, car il tente de suivre vos mouvements. Voici comment ajuster cela:</p>
<checklist>
    Sur votre objet, trouvez la composante XR Grab Interactable. 
    Dans votre composante, trouvez le paramètre Smooth position et cochez-le. 
    Ajustez ensuite les sliders de Smooth position et tighten position pour diminuer le tremblement.
    Faites le même procédé pour le paramètre Smooth Rotation. 
</checklist>

<dots></dots>

<grostitre>XR socket</grostitre>
<p>Dans Unity, les sockets sont des endroits spécifiques sur lesquels on peut déposer un objet. Vous apprendrez comment les configurer dans le tutoriel suivant:</p>
<iframe width="560" height="315" src="https://www.youtube.com/embed/VCxaXsLxTs0?si=EQ10vaBas87awFdK" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>