<?php
/**
 * @type     article
 * @title    UI
 * @icon     images/icon.png
 * @abstract Boutons, images, ...
 */
?>

<p class="spacer">Dans Unity, on peut facilement créer des menus 'responsive' grâce à l'UI.</p>


<dots></dots>

<grostitre>Canvas</grostitre>
<p>Pour pouvoir créer des composantes reliées à l'UI, vous aurez absolument besoin de créer un Canvas. Le canvas sert à contenir tous les éléments du UI et à les classer entre eux. Ainsi, si un GameObject est plus bas qu'un autre dans le canvas, il sera au-dessus. Ici, clé apparaîtra par-dessus le calque boutons:</p>
<img src="images/ui.jpg">
</p>
<p>Pour créer un Canvas, on peut faire un clic droit dans la Hierarchy, ensuite aller dans UI, puis cliquer sur Canvas.</p>
<p>Le gameobject Canvas a plusieurs paramètres que nous pouvons ajuster. Vous remarquerez que vous ne pouvez pas modifier son Rect Transform. En effet, c'est avec les composantes Canvas et Canvas scaler que vous pourrez modifier la taille de votre Canvas.</p>
<p>Composante Canvas: Pour cette composante, nous pouvons ajuster le paramètre Render mode au besoin. Ce mode détermine de quelle façon le Canvas sera rendu. Par défaut, c'est Screen Space - Overlay qui sera choisi. Cela signifie que le Canvas sera rendu par-dessus la scène et que si la taille de l'écran est modifié, il sera modifié lui aussi. Screen space - camera est assez similaire, plutôt que de rendre le canvas sur la fenêtre, on le rend sur la caméra. Ainsi, le canvas suivra la position et la taille de la caméra. Finalement, World space fera en sorte que le canvas se comporte comme les autres objets de la scène. Ainsi, il restera à l'emplacement qu'on lui assigne et sa taille ne sera pas modifiée par l'écran.</p>
<p>Composante Canvas Scaler: C'est grâce à cette composante qu'on déterminera la taille de notre Canvas. Constant pixel size fait en sorte que le canvas sera toujours de la même taille en pixels peut importe la taille de notre écran. Scale with screen size permet au canvas de s'adapter à la taille de l'écran. On donne une référence de résolution (exemple: 1920 x 1080) et ensuite on indique de quelle façon on souhaite que le canvas s'ajuste à l'écran. On peut déterminer si on considère la largeur ou la longeur comme point de référence. Sinon on peut dire de rapetisser ou d'agrandir dans l'écran. </p> 

<dots></dots>
<grostitre>Rect Transform</grostitre>
<p>Les objets qui font partie du UI n'ont pas de Transform, mais ont une composante Rect Transform. Celui-ci est similaire au Transform, mais il a quelques paramètres supplémentaires pour le placement des éléments dans le Canvas.</p>
<img src="images/rect.jpg">
<p>Le premier paramètre est l'ancrage. Lorsque l'on appuie sur la cible rouge, le panneau Anchor Preset qu'on voit ci-haut s'ouvre. Ce dernier détermine de quelle façon les éléments graphiques 2D s'adapteront à la redimension de l'écran. Si vous cochez un paramètre rouge, l'objet ne changera pas de taille. Les paramètres rouges indiquent à quel endroit l'objet devrait s'accrocher. Ainsi, doit-il rester au centre ou plutôt se fier à un coin? Les paramètres bleus pour leur part étirent l'objet. L'objet doit-il s'étirer de tous les côtés ou seulement horizontalement ou verticalement dans l'écran. Pour voir ce que ces paramètres font, mettez vous en mode test, mettez votre fenêtre en mode Free Aspect, puis redimenssionnez la pour voir ce qui est modifié.</p>
<img src="images/free.jpg">
<dots></dots>

<grostitre>Panel</grostitre>
<p>Le GameObject panel peut être créé à partir de la fenêtre Hierarchy en faisant un clic droit, puis dans UI, on sélectionne Panel. Le GameObject panel sert à regrouper des composantes. Un exemple d'application courante est de créer un menu et de mettre ses composantes dans le panel. Le panel a une composante image qui nous permet de mettre une image de fond sur le menu. Par défaut, le pannel prend toute la taille de l'écran, mais on peut modifier cela dans le RectTransform.</p>

<dots></dots>

<grostitre>Image</grostitre>
<p>Une image est un GameObject qui permet d'afficher des images dans votre UI. Ce GameObject est très similaire à Sprite à la différence qu'il est fait pour le UI. 


