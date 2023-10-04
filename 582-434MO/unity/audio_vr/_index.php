<?php
/**
 * @type     article
 * @title    Audio VR
 * @icon     images/icon.png
 * @abstract La 3D et l'audio
 */
?>

<p class="spacer">Dans Unity, il est possible de spatialiser l'audio.</p>

<dots></dots>

<grostitre>Déclencher un son avec les manettes</grostitre>
<p>Sur vos manettes, peu importe la méthode de sélection (XR Ray Interactor ou XR Direct Interactor), vous avez plusieurs événements en bas de la composante. Les Audio events vous permettent de déclencher des sons précis lorsque certaines actions surviennent. Par exemple, vous pouvez faire jouer un son à chaque fois qu'un objet est amassé. Pour permettre cet effet, cochez la case associée à l'action. Ensuite, glissez votre son dans la boîte AudioClip to play.</p>

<dots></dots>

<grostitre>Assigner un son à un objet</grostitre>
<p>Dans votre expérience, il peut être intéressant de donner des sons à certains objets. Par exemple, s'il y a une chute d'eau dans ma scène il serait bien que j'entende la chute plus ou moins fort selon la distance à laquelle je me trouve de celle-ci. Suivez les étapes suivantes pour ajouter un son qui sera assigné à un objet précis:</p>
<checklist>
    Importez le son désiré dans Unity. 
    Sur l'objet qui émettra le son, ajoutez la composante Audio Source (New component, audioSource).
    Dans la boîte AudioClip, glissez le son que vous avez importé.
    Assurez-vous que Play on Awake et Loop sont cochés sur l'audio source de votre objet, ainsi le son jouera en boucle dès que vous entrerez dans votre scène. Si vous préférez que le son soit déclenché seulement quand vous entrez dans une zone précise, vous devez créer une fonction qui fera Play() à votre composante lorsque le collider de la zone détectera OnTriggerEnter.
    Pour que le son joue uniquement à l'endroit de l'objet, on doit prendre le slider du paramètre Spatial Blend de l'audio Source et le mettre à 3D.
    Dans 3D sound settings de la composante Audio Source, vous pouvez ajuster la distance min et max à laquelle on entend le son.
</checklist>

<dots></dots>

<grostitre>Zone de réverbération</grostitre>
<p>Dans Unity, il est possible de créer des zones de réverbération pour modifier la manière dont le son sonne selon la position de notre personnage. Si on est à l'intérieur ou à l'extérieur, le son ne résonne pas de la même façon.</p>
<checklist>
    Dans la hierarchy, créez une composante Audio -> Audio Reverb zone. Rangez-là à un endroit approprié.
    Dans la composante Audio Reverb zone, assurez-vous que la minDistance corresponde à la zone dans laquelle votre son devrait sonner d'une certaine façon. Pour la max distance, essayer de la positionner pour qu'il y ait un fade entre vos zones. Elle ne doit pas être trop petite pour éviter que la réverbération coupe complètement. Vous pouvez ajuster ce paramètre avec les chiffres ou dans votre scène directement si les gizmos sont ouverts. 
    Dans le paramètre ReverbPreset, sélectionnez le paramètre qui fonctionne le mieux avec votre environnement. Sélectionnez User si vous désirez changer vos paramètres manuellement pour créer votre propre sonorité.
</checklist>