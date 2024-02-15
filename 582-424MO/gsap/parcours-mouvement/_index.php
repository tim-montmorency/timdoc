<?php 
/**
 * @type     article
 * @title    10-Animation sur un tracé
 * @icon     ../images/icon.webp
 * @abstract MotionPath: animer un élément  sur un tracé
 * @index    523
 * @ref      web/cadriciels/gsap
 */
?>

<grostitre>Intro MotionPath</grostitre>
<p>MotionPath est un plugiciel&nbsp;<em>(plugin)</em>&nbsp;développé par&nbsp;<a
        href="https://greensock.com/" target="_blank">GreenSock</a>&nbsp;permettant de déplacer un élément ou une animation sur
    un&nbsp;tracé.</p>
<p>Voici par exemple une animation de&nbsp;<a href="https://codepen.io/cdyer" target="_blank">Chris Dyer</a>&nbsp;utilisant MotionPath
    afin de déplacer l'hélicoptère 🚁 de façon&nbsp;réaliste.</p>

<codepen id="WNmPwXM" tab="result" height="500"></codepen>

<dots></dots>
<grostitre>Précédente version</grostitre>


<p>Vous tomberez peut-être sur des articles ou de la documentation mentionnant le
    plugiciel&nbsp;<em>(plugin)</em>&nbsp;<a href="https://greensock.com/bezierplugin-js/" target="_blank">Bezier</a>&nbsp;de GSAP en
    lisant sur le&nbsp;web.</p>
<p>Ce plugin était le prédécesseur de MotionPath et fut remplacé vers la fin de 2019 avec la sortie de&nbsp;GSAP&nbsp;3.
    Faites attention de ne pas confondre les&nbsp;deux.</p>

    
<dots></dots>
<grostitre>Installation</grostitre>


<p>Comme pour tout plugiciel&nbsp;<em>(plugin)</em>&nbsp;GreenSock, afin d'avoir accès à ses fonctionnalités, il est
    nécessaire d'avoir incorporé la librairie GSAP préalablement et d'ajouter ensuite le plugiciel dans le&nbsp;projet.
</p>
<p>Pour ce faire, il est&nbsp;possible:</p>
<ul>
    <li>
        <p>De le télécharger sur le&nbsp;<a
                href="https://greensock.com/docs/v3/Installation?checked=core,motionPath#download" target="_blank">Site
                de&nbsp;GreenSock</a> et l'installer dans votre propre projet.</p>
    </li>
    <li>
        <p>D'utiliser un&nbsp;<a href="https://greensock.com/docs/v3/Installation?checked=core,motionPath#CDN"  target="_blank">CDN</a></p>
    </li>
</ul>
<p>Une fois chargé, il est conseillé d'indiquer à GSAP que MotionPath est disponible en inscrivant la ligne de
    code&nbsp;suivante:</p>

    <highlight lang="JavaScript">gsap.registerPlugin(MotionPathPlugin);</highlight>

<warning>MotionPath n’est compatible qu’avec <strong>GSAP 3 et&nbsp;plus</strong>.</warning>




<dots></dots>
<grostitre>Utilisation de base</grostitre>

<p>La façon la plus simple d'utiliser MotionPath est à partir d'un tracé dans un&nbsp;SVG.</p>

<info><strong>👍 Obtenir ou dessiner un SVG</strong><br>Au besoin, Adobe Illustrator&nbsp;permet de dessiner des courbes et de les exporter en&nbsp;SVG.</info>
<br>

<p>Pour ce faire, il suffit d'ajouter la propriété <incode>motionPath</incode> à une animation et de lui attribuer comme valeur le
    sélecteur correspondant au tracé&nbsp;désiré.</p>
<p>Par exemple, le path&nbsp;<incode>#courbe</incode>:</p>

<codepen id="eYXxZyx" tab="js,result" height="500"></codepen>

<p>GSAP applique une transformation CSS équivalente aux positions inscrites dans le tracé passé en&nbsp;référence.</p>
<p>Dans notre exemple, le carré bleu 🟦 se déplace sur le tracé, car les deux éléments sont superposés dans le coin
    supérieur gauche de la fenêtre. Cependant, même si le SVG était positionné différemment, l'animation serait restée
    identique, puisque l'élément animé ignore la position du SVG de référence. Il ne fait que se décaler en fonction des
    positions dans le&nbsp;tracé.</p>
<p>Par exemple, revoici la même animation, mais avec le SVG positionné à droite. Remarquez comment le parcours du carré
    bleu 🟦 reste&nbsp;inchangé.</p>

<codepen id="ZEPwWrV" tab="js,result" height="500"></codepen>

<alert>Malheureusement, les animations réalisées avec MotionPath ne sont pas&nbsp;responsives!</alert>

<dots></dots>
<grostitre>Utilisation d'un objet</grostitre>


<p>Il est possible de raffiner le comportement d'une animation MotionPath. Pour ce faire, il faut utiliser un objet
    JavaScript pouvant contenir plusieurs propriétés et valeurs plutôt qu'une valeur texte comme dans les
    exemples&nbsp;précédents.</p>
<p>Par exemple, convertissons la valeur textuelle de l'exemple en&nbsp;objet.</p>


<codepen id="poYGyLO" tab="js,result" height="500"></codepen>

<p>On remarque que la propriété permettant de définir le tracé est maintenant spécifiée et
    s'appelle&nbsp;<incode>path</incode>.</p>
    
<dots></dots>
<grostitre>Align</grostitre>


<p>Comme mentionné précédemment, l'élément animé ne se superpose pas automatiquement à son tracé. Il ne fait
    qu'effectuer un déplacement équivalent aux coordonnées inscrites dans ledit tracé. Cependant, il est possible de
    remédier à ce problème via la propriété&nbsp;<incode>align</incode>&nbsp;qui permet de spécifier un élément de base sur
    lequel notre élément animé doit&nbsp;s'aligner.</p>
<p>Par exemple:</p>

<codepen id="QWoYNrr" tab="js,result" height="500"></codepen>

<h3 class="heading heading--h3" id="Start et End">Start et End</h3>

<p>Les propriétés&nbsp;<incode>start</incode>&nbsp;et&nbsp;<incode>end</incode>&nbsp;de l'objet MotionPath permettent de
    spécifier la position de départ et de fin de l'animation sur le tracé.&nbsp;<incode>0</incode>&nbsp;correspondant au
    début et&nbsp;<incode>1</incode>&nbsp;à la&nbsp;fin.</p>
<p>Il est donc possible de débuter une animation à mi-chemin par exemple en utilisant&nbsp;<incode>start: 0.5</incode>:</p>

<codepen id="wvONGXp" tab="js,result" height="500"></codepen>

<p>Ou encore de jouer une animation dans la direction&nbsp;opposée:</p>

<codepen id="zYbeqaV" tab="js,result" height="500"></codepen>

<dots></dots>
<grostitre>Animation par coordonnées</grostitre>


<p>Puisque MotionPath ne fait qu'appliquer des transformations CSS équivalentes aux positions inscrites dans un tracé,
    il est possible de lui passer des coordonnées sous forme d'un tableau et de le laisser calculer des courbes entre
    les différents&nbsp;points.</p>
<p>Par exemple:</p>

<codepen id="wvONWzE" tab="js,result" height="500"></codepen>

<p>L'élément part de son point d'origine et se dirige vers les premières coordonnées inscrites dans la tableau. Il peut
    y avoir autant de coordonnées que&nbsp;désiré.</p>
<h3 class="heading heading--h3" id="&nbsp;Curviness">&nbsp;Curviness</h3>

<p>Il est possible de modifier la courbe produite d'une animation par coordonnée an lui spécifiant la
    propriété&nbsp;<incode>curviness</incode>. Par défaut, cette propriété à la valeur de&nbsp;<incode>1</incode>. Ce qui créer
    la courbe dans l'exemple&nbsp;précédent.</p>
<p>Cependant, il serait possible de retirer l'aspect courbe en entier en attribuant la
    valeur&nbsp;<incode>curviness: 0</incode>&nbsp;à notre&nbsp;animation:</p>

<codepen id="yLwZJVm" tab="js,result" height="500"></codepen>

<p>ou encore de rendre la courbe plus prononcée en augmentant sa&nbsp;valeur:</p>

<codepen id="gOEqMgz" tab="js,result" height="500"></codepen>

<dots></dots>
<grostitre>AutoRotate</grostitre>

<p>La propriété&nbsp;<incode>autoRotate</incode>&nbsp;permet de spécifier à l'élément animé d'effectuer une rotation
    correspondant au tracé lors de son animation. Par défaut, la valeur de cette propriété est
    à&nbsp;<incode>false</incode>.</p>
<p>Pour l'activer, il faut lui donner la valeur&nbsp;<incode>true</incode>, comme dans l'exemple&nbsp;suivant:</p>


<codepen id="mdovEWX" tab="js,result" height="500"></codepen>

<alert><strong>Erreur fréquente</strong><br>Lorsqu’<incode>autoRotate</incode> ne fonctionne pas, il s’agit généralement d’un oubli de la
            majuscule&nbsp;auto<strong>R</strong>otate!</alert>


<dots></dots>
<grostitre>Point de référence</grostitre>


<p>Par défaut, l'élément animé se déplace sur le tracé à partir de sont point de référence, le coin
    supérieur&nbsp;gauche.</p>

    
<p>Cependant, il est possible de déplacer le point de référence de l'élément en utilisant les
    propriétés&nbsp;<incode>xPercent</incode>&nbsp;et&nbsp;<incode>yPercent</incode>&nbsp;qui déplacent en pourcentage le point
    de référence de l'élément&nbsp;animé.</p>


<p>Par exemple:</p>

<codepen id="JjzxKNE" tab="js,result" height="500"></codepen>

<doclink href="https://greensock.com/docs/v3/Plugins/MotionPathPlugin">MotionPath</doclink>
<dots></dots>

<exercice href="../exercices/motionpath-voiture-et-vallons/"></exercice> 

<dots></dots>

<grostitre>Aligner un tracé avec qqch dans une photo d'arrière-plan (pour P.2.3)</grostitre>

<clipasset src="../../projet-scrollytelling/p2-3a/videos/demo-motion-path.mp4"></clipasset>

<p>D'abord, si votre photo est appliquée en arrière-p;an (css, <incode>background-image</incode>), ramenez la en balise <incode>img</incode></p>
<p>Assurez vous que votre travé (path) <em>SVG</em> est dans une image de la même dimension que la photo : <br>
Dans Illustrator, ajoutez votre photo comme guide, modifiez la dimension du plan de travail pour l'ajuster aux dimensons de la photo, dessinez-y votre tracé (path) et ensuite supprimez la photo et finalement enregistrez votre SVG.</p>
<p>Dans le HTML et CSS, ajoutez votre images ainsi que le SVG, un par dessus l'autre.  Stylisez en CSS afin que les 2 soient la même dimension que la section  <incode>width: 100vw; height: 100vh;</incode> ).</p>
<p>Sur la photo, ajoutez un <incode>objet-fit:cover;</incode> et un <incode>object-position: 0 0</incode></p>
<p>Dans le HTML, dans le code du SVG, ajoutez ces 2 attributs:<br>
<incode>viewBox="0 0 2000 1335"</incode><br>
<incode>preserveAspectRatio="xMinYMin slice"</incode>

<br>
ou 2000 = largeur initiale de la photo (et du svg) et 1335 = la hauteur (ajustez avec vos valeurs)
<br>
</p>








