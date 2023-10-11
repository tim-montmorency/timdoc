<?php
/**
 * @type     article
 * @title    Post-processing
 * @icon     images/icon.png
 * @abstract Effets
 */
?>

<p class="spacer">Dans Unity, le post-processing sert à embellir l'image finale de notre projet. Plusieurs effets sont disponibles et peuvent être appliqués à votre caméra. Le post-processing doit être appliqué sur un volume, c'est-à-dire un espace en particulier. Par défaut, dans les scènes HDRP, l'objet Sky and fog volume est un volume qui peut contenir des effets de post-processing qui s'appliqueront sur toute votre scène. Il peut être intéressant d'animer le post-processing ou de l'appliquer uniquement dans certaines zones.</p>


<dots></dots>

<grostitre>Délimiter l'effet</grostitre>
<p>Habituellement, on crée un volume global pour que les effets s'appliquent sur toute la scène. Pour se faire, clic droit dans la hiérarchie, volume, global volume. Dans les scènes HDRP, on peut aussi directement ajouter les effets sur le Sky and fog volume. Si vous souhaitez appliquer un effet seulement sur une zone spécifique de votre scène, vous pouvez utilisez les volumes en forme de boîte ou de sphère. Pour les créer, clic droit dans la hiérarchie, volume, sphere ou box volume. Ajustez ensuite la taille de la zone de votre effet en redimmensionnant l'objet ou son collider. </p>

<dots></dots>

<grostitre>Profile</grostitre>
<p>Une fois votre volume créé, vous devez lui créer un objet Profile. Pour ce faire, ouvrez le volume dans l'inspecteur, puis appuyez sur New dans le paramètre Profile de la composante volume. 

<dots></dots>

<grostitre>Override</grostitre>
<p>Une fois votre volume créé, vous pouvez ajouter des effets sur celui-ci. Ils seront alors appliqués à la zone choisie (Globale ou spécifique). Pour ajouter un effet, cliquer sur Add Override sur la composante volume. Voici les différents effets auxquels vous avez accès:</p>

<dots></dots>

<grostitre>Ambient Occlusion</grostitre>
<p>Cet effet sert à foncer les zones qui ne reçoivent pas de lumière directe.</p>

<dots></dots>

<grostitre>Bloom</grostitre>
<p>Cet effet crée des halos autour des objets lumineux. Cela donne l'impression que les objets émettent de la lumière.</p>

<dots></dots>

<grostitre>Channel Mixer</grostitre>
<p>Le channel mixer est un effet qui vous permet d'ajuster l'apparence des canaux de couleur de votre scène. Ainsi, vous pouvez ajuster la couleur de tous les rouges en même temps pour modifier leur teinte.</p>

<dots></dots>

<grostitre>Chromatic aberration</grostitre>
<p>Cet effet joue sur le pourtour de vos objets, il permet de disperser les couleurs sur les côtés. On remarque bien cet effet lorsque notre objet est en mouvement.</p>
<img src="images/chromatic.jpg">

<dots></dots>

<grostitre>Color Adjustments</grostitre>
<p>Cet effet vous permet de jouer avec quelques paramètres qui affectent les couleurs, notamment, l'exposition, le contraste, la saturation. De plus, vous pouvez ajouter un filtre de couleur par-dessus votre scène ou encore modifier le hue de tous vos éléments.</p>

<dots></dots>

<grostitre>Color curves</grostitre>
<p>Cet effet vous permet de jouer sur les courbes de couleur de votre scène. Vous pouvez accentuer ou diminuer l'intensité par canal de couleur.</p>

<dots></dots>

<grostitre>Exposure</grostitre>
<p>Présent par défaut sur l'asset Sky and Fog volume, ce paramètre permet de régler l'exposition de votre scène.</p>

<dots></dots>

<grostitre>Fog</grostitre>
<p>Cet effet vous permet d'ajouter de la brume à votre scène. Vous pouvez modifier l'apparence de la brume dans ses paramètres. Il est présent par défaut dans le Sky and Fog volume.</p>

<dots></dots>

<grostitre>Depth of field</grostitre>
<p>Cet effet crée une profondeur de champ dans votre scène. Ainsi, selon la distance entre vous et les objets, ils apparaîtront flous.</p>

<dots></dots>

<grostitre>Film Grain</grostitre>
<p>Cet effet permet de créer un visuel de vieux film, il ajoute du grain par-dessus votre image. Il y a quelques paramètres par-défaut pour vous aider à ajuster la taille du grain. N'oubliez pas d'augmenter l'intensité pour le voir.</p>

<dots></dots>

<grostitre>Gradient sky</grostitre>
<p>Cette composante devra être ajoutée, si vous choisissez gradient sky dans le sky type de l'effet visual environment. Cet effet vous permet de choisir l'allure de votre ciel en créant un dégradé. Il est plus simple que le physically based sky.</p>




<dots></dots>


<grostitre>Lens distorsion</grostitre>
<p>Cet effet déforme votre image comme le ferait une lentille. Vous pouvez ajuster la courbe de votre lentille.</p>

<dots></dots>

<grostitre>Lift, Gamma, Gain</grostitre>
<p>Cet effet vous permet aussi d'ajuster les couleurs de votre scène, cette fois avec des roues de couleur.</p>

<dots></dots>

<grostitre>Motion blur</grostitre>
<p>Le flou de mouvement floutte légèrement l'image selon la direction du mouvement de la caméra. Attention, cela peut créer de la motion sickness.</p>

<dots></dots>

<grostitre>Panini projection</grostitre>
<p>Cet effet est l'inverse de la distorsion de la lentille. Il sert à corriger la distorsion dans les bords de votre image lorsque le champ de vue est grand.</p>

<dots></dots>

<grostitre>Physically based sky</grostitre>
<p>Cette composante est présente, si vous choisissez physically based sky dans le sky type de l'effet visual environment. Plutôt que de créer votre matériel skybox, en hdrp vous pouvez utiliser cet effet pour modifier la couleur du ciel et du sol de votre scène. </p>


<dots></dots>

<grostitre>Shadow, Midtones, Highlight</grostitre>
<p>Cet effet permet de jouer avec l'intensité et la couleur des ombres, tons moyens et tons clairs séparément. Chaque élément peut être modifié avec des roues de couleur.</p>

<dots></dots>

<grostitre>Split toning</grostitre>
<p>Cet effet est similaire à Shadow, Midtone, Highlight, il permet de modifier la couleur des ombres ou des zones claires et de faire la balance entre les deux.</p>

<dots></dots>

<grostitre>Tonemapping</grostitre>
<p>Des paramètres prédéfinis sont disponibles pour cet effet, ils permettent de modifier les couleurs de votre image pour qu'elles soient HDR.</p>

<dots></dots>

<grostitre>Vignette</grostitre>
<p>La vignette vous permet d'ombrager les coins de votre image. Elle met l'emphase sur ce qui est au centre du point de vue de votre joueur.</p>

<dots></dots>

<grostitre>Visual environment</grostitre>
<p>Présent par défaut sur le sky and fog volume, cet effet gère plusieurs des sous-composantes. Le paramètre Sky type permet de déterminer quel type de ciel vous désirez. Le Physically Based sky est une composante plus complexe que le gradient. Le paramètre background clouds permet d'ajouter des nuages à votre scène. Ambientn mode détermine si le ciel est pris en compte (dynamic) ou non (static) dans l'éclairage et la teinte de la scène. Des paramètres vous permettent de gérer le vent dans votre scène.</p>

<dots></dots>

<grostitre>White balance</grostitre>
<p>La balance des blancs permet d'ajuster les zones blanches de votre image pour qu'elles aient l'air blanches malgré la lumière. Vous pouvez également ajuster ce paramètre directement sur vos lumières.</p>