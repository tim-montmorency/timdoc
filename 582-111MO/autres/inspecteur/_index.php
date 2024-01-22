<?php
/**
 * @type     article
 * @title    Inspecteur
 * @icon     images/icon.png
 * @abstract Un préceux outil
 * @ref      web/autres
 */
?>

<p class="spacer">L'inspecteur 🕵️‍♂️ est un outil précieux, présent dans tous les navigateurs modernes. Il permet de modifier une page à la volée, de trouver la source d'un problème et de tester rapidement différentes pistes de solutions.</p>

<p>Il est en quelque sorte au développeur web ce que la lunette de visée est au tireur d’élite. Imaginer un tireur <em>“professionnel”</em> tirant <em>“au feeling”</em> sans jamais utiliser sa lunette. Difficile de le prendre au sérieux, non? Développer en se privant de l’inspecteur web est l’équivalent.</p>

<info>Dans le cadre de cet exemple, l’inspecteur de Chrome sera utilisé, mais la majorité des inspecteurs offrent les mêmes options de base.</info>

<dots></dots>


<grostitre>Afficher l'inspecteur</grostitre>

<p>Pour afficher l'inspecteur, vous pouvez:</p>

<ul>
    <li>Faire un clic droit sur la souris 🖱️ et choisir l'option <em>Inspecter</em>.</li>
    <li>
        Utiliser le raccourci clavier ⌨️
        <ul>
            <li><strong>Windows</strong> <incode>ctrl</incode>+<incode>shift</incode>+<incode>i</incode> ou <incode>F12</incode></li>
            <li><strong>Mac</strong> <incode>command</incode>+<incode>option</incode>+<incode>i</incode> ou <incode>F12</incode></li>
        </ul>
    </li>
</ul>

<h3>Disposition</h3>

<p>Dans le coin supérieur droit ↗️ de l’inspecteur, vous remarquerez l'icône ⋮ permettant d'accéder aux paramètres d'affichage de l'inspecteur. La première option, Dock side, vous permet de sélectionner où l'inspecteur devrait afficher, soit sa disposition. Ces différentes options vous permettent d’optimiser votre station de travail en fonction de votre environnement. </p>

<img src="images/dock-side.jpg">

<span class="remark">L’affichage à droite est sélectionné sur cette capture d’écran</span>

<h3>Écrans restreints</h3>

<p>Sur un écran restreint, par exemple sur un ordinateur portable, l’option d’afficher l’inspecteur au bas de l’écran se veut la plus optimale. Bien qu’elle coupe une partie du contenu, celle-ci permet d’y accéder à l’aide d’un simple défilement vertical. </p>

<p>L’affichage sur les côtés en contrepartie coincera le contenu dans une zone restreinte, générant souvent une barre de défilement verticale et horizontale, rendant ainsi l’accès au contenu à déboguer plus fastidieux. </p>

<p>L'affichage détaché quant à lui implique d’alterner constamment entre la fenêtre de l’inspecteur  et celle de la page elle-même, ce qui peut ralentir grandement notre progression.</p>

<h3>Écrans larges</h3>

<p>De nos jours les écrans externes sont tous relativement larges. En fait, les écrans sont si larges que la majorité des sites sont optimisés afin d’afficher dans une zone plus restreinte que celle allouée par ceux-ci. Ainsi, afficher l’inspecteur sur le côté se veut l’option la plus optimale puisqu’elle permet de garder la hauteur du contenu intact, et donc d’éviter d’avoir à effectuer plusieurs défilements verticaux superflus, alors que la diminution de largeur se traduit généralement en la disparition d’une zone de remplissage ou en une légère condensation du contenu, mais aucune perte réelle de la zone de contenu.</p>

<h3>Écrans multiples</h3>

<p>La majorité des développeurs ont deux écrans: celui de leur portable, ainsi qu’un écran externe. Cette particularité leur permet d’utiliser de façon optimale le mode détaché, en plaçant leur page web dans leur écran de plus grande taille et l’inspecteur dans l’autre.</p>

<dots></dots>


<grostitre>Simulation d'appareils</grostitre>

<p>Remarquez en haut à gauche de l'inspecteur l'icône de l'outil de simulation d'appareil <em>(icône de cellulaire devant une tablette)</em>.</p>

<img src="images/inspecteur-simulation-icone.png">

<p>En cliquant sur cette icône, elle deviendra bleue et vous permettra de sélectionner dans un menu déroulant, se trouvant au sommet de votre page, la résolution de l'appareil à simuler.</p>

<img src="images/inspector-devices-dropdown.png">

<p>Cette liste contient certaines des résolutions les plus populaires, par exemple:</p>

<ul>
    <li>iPhone</li>
    <li>iPad</li>
    <li>iPad Pro</li>
    <li>Pixel</li>
    <li>Galaxy</li>
    <li>Etc.</li>
</ul>

<h3>Orientation</h3>

<p>Il est aussi possible de changer l'orientation de l'appareil afin d'avoir un aperçu en mode paysage via l'icône d'appareil avec des flèches complètement à droite.</p>

<img src="images/inspector-device-orientation.png">

<warning>L’outil de simulation donne un aperçu du résultat sur un appareil X en simulant sa dimension et certaines de ses fonctionnalités, mais ne remplace pas un test réel sur un appareil physique.</warning>

<h3>Responsive</h3>

<p>Il est aussi possible de choisir l'option <em>Responsive</em> dans le menu des appareils afin de modifier librement la résolution de l'écran à l'aide des poignées || et = se trouvant respectivement sur le côté droit, le bas et le coin de la fenêtre.</p>

<p>Ce mode n'impose pas de largeur minimale comme le fait normalement le navigateur. Qui plus est, la dimension de la fenêtre est affichée dans la barre de menu, permettant ainsi de savoir précisément la taille de notre affichage et ainsi de déboguer plus précisément.</p>

<dots></dots>