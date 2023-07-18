<?php
/**
 * @type     article
 * @title    TileMaps
 * @icon     images/icon.png
 * @abstract Création
 */
?>

<p class="spacer">Unity a un système de TileMaps qui permet de créer rapidement des cartes à partir de tuiles.</p>


<dots></dots>

<grostitre>Importer les tuiles</grostitre>
<Checklist>
    Pour commencer, importez l'image contenant vos tuiles dans Unity. Je vous recommande de mettre toutes vos tuiles sur la même image et de les diviser dans le logiciel ensuite, cela rend le jeu moins lourd que si on importe les tuiles une par une. Pour importer votre image, allez dans le menu Asset, import new asset.
    Une fois que votre image est importée, cliquez dessus dans la fenêtre Project pour que ses propriétés apparaissent dans l'inspecteur. Assurez-vous que le Texture Type est bien Sprite.
    Dans Sprite Mode, nous allons choisir Multiple puisque notre image contient plusieurs tuiles.
    Dans Pixels per Unit, vous allez entrer le nombre correspondant aux nombre de pixels de vos tuiles. Ainsi, si vous avez des tuiles de 32 x32, vous inscrirez 32.  
    Dans Filter Mode, choisissez Point pour être certain qu'aucun flou ne sera appliqué à vos tuiles. 
    Appuyez sur Apply. 
    Une fois que vos changements sont appliqués, appuyez sur Sprite Editor pour ouvrir l'éditeur. 
    En haut à gauche, appuyez sur Slice, vous pouvez sélectionner le mode de votre choix pour diviser vos tuiles. Je vous recommande d'utiliser le mode Grid by Cell Size puisque celui-ci permet de donner une taille fixe et divise nos tuiles en fonction de celle-ci. Une fois que vous avez choisi ce mode, dans Pixel Size, vous devez inscrire en x et en y la taille en pixel de vos tuiles. Appuyez ensuite sur slice.
    Des carrés blancs apparaîtront pour délimiter vos tuiles. S'ils sont ok, appuyez sur Apply, puis fermez le Sprite Editor. 
</checklist>

<dots></dots>

<grostitre>Créer une TileMap</grostitre>
<Checklist>
    Pour créer une carte, allez dans la fenêtre Hierarchy, faites un clic droit, puis 2D object, TileMap, Rectangular. Vous pourriez prendre un autre type de carte si vos tuiles ne sont pas des carrés. Une grille sera alors créée avec une carte dedans. On pourrait créer plus d'une carte avec cette grille. 
    Ensuite, allez dans le menu Window, 2d, Tile Palette. Une nouvelle fenêtre s'ouvrira. 
    Pour pouvoir dessiner nos tuiles sur la carte, on doit créer une palette contenant les tuiles disponibles. Pour ce faire, appuyez sur Create New Palette, donnez lui un nom, puis appuyez sur Create. Ensuite sauvegarder la palette dans le dossier de votre choix. Vous pouvez créer un dossier palette. Une fois que c'est fait, sauvegardez, puis appuyez sur votre palette pour l'ouvrir. 
    Dans la fenêtre Tile Palette, vous devriez voir le nom de votre nouvelle palette en haut à gauche. Maintenant, vous devez ajouter des tuiles à cette palette. Dans la fenêtre Project, sélectionnez toutes vos tuiles ou l'image qui les contient, puis glissez-les dans la fenêtre Palette Tile. On vous demandera alors de sauvegarder les tuiles créées dans un dossier. Créez un dossier tuile, puis sauvegardez. 
    Maintenant, vous devriez voir vos tuiles dans la fenêtre Tile Palette. Nous voulons les peinturer dans notre environnement, pour ce faire, nous avons besoin de voir la grille. Si vous ne la voyez pas, appuyez sur l'outil Gizmos en haut à droite de la fenêtre Scene.   
    Une fois que votre grille est activée, choississez l'outil Brush (B) dans la Tile Palette. Vous pouvez maintenant cliquer sur une tuile dans la Tile Palette. Une fois votre tuile sélectionnée, vous pouvez cliquer dans les carrés de la grille pour peinturer cette tuile. Si vous maintenez votre souris enfoncée et que vous vous promenez, vous allez peinturer partout. 
    Pour effacer, vous pouvez utiliser l'efface (D) ou encore appuyez sur le carré avec une autre tuile pour modifier la tuile. 
    L'outil de remplissage (G) vous permet de remplir l'espace une fois que vous avez créé le contour. 
    Pour déplacer des éléments de votre carte, vous êtes mieux d'utiliser la sélection (S) et le mouvement (M) de la Tile palette que le transform de la grid. 
    En appuyant sur I, vous aurez accès à la pipette et pourrez sélectionner un carré dans la Scene pour le duppliquer. 
</checklist>
<info>Vous pouvez sélectionnez plus d'une tuile pour peinturer plusieurs carrés en même temps!</info>
