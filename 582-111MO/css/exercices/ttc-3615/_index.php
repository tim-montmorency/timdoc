<?php 
/**
 * @type     exercice
 * @title    TTC - 3615
 * @icon     images/thumb.jpg
 * @abstract Pour cet exercice, vous devez écrire du CSS afin de recréer la pochette de l’album "3615" du groupe rap français TTC.
 */
?>

<p class="spacer">Pour cet exercice, vous devez écrire du CSS afin de recréer la pochette de l’album <a target="_blank" href="https://open.spotify.com/album/3CcdklP1Jmf3VapqHih81W">"3615"</a> du groupe rap français <a target="_blank" href="https://fr.wikipedia.org/wiki/TTC_(groupe)">TTC</a>. Vous y ajouterai aussi un effet de vibration de sonnerie pour rappeller l'excellente pièce <a href="#ambiance">"Téléphone"</a>.</p>

<p>Aperçu du résultat 👇</p>

<clipasset src="./videos/apercu.mp4"></clipasset>

<dots></dots>


<grostitre>Matériel</grostitre>

<doclink href="./ttc-3615.zip">Dossier de départ</doclink>

<h3>Couleurs 🎨</h3>

<color>#01a1ff</color>
<color>#ff7304</color>
<color>#d8dc09</color>
<color>#da5767</color>
<br>
<color>#5d0166</color>
<color>#555555</color>
<color>#ffffff</color>

<br>

<warning>Pour une meilleure exécution de l'exercice, certains des éléments HTML ont été cachés par défaut dans le fichier CSS. Rendez-les visible au fur et à mesure que vous avancez dans l'exercice.</warning>
<thumbsup>Prenez le temps d'analyser le fichier HTML.</thumbsup>
<alert>Il est <strong>INTERDIT</strong> de modifier le fichier HTML.</alert>

<dots></dots>


<grostitre>Requis de base</grostitre>

<checklist>
    Créez une variable pour chacune des couleurs pour utilisation ultérieure.
    Créez une variable nommée <span class="inline-code">--speed</span> et attribuez-lui la valeur de <em>5 seconde</em>. Celle-ci servira à déterminer le temps de l'animation.
    Le fond de la page doit être de couleur <em>grise</em> et avoir un dégradé vertical allant du <em>rouge</em> au <em>jaune</em>, au <em>orange</em> et au <em>bleu</em>.
    Fusionnez les deux fonds en mode <span class="inline-code">screen</span> afin de donner au gradient un effet délavé.
    L'album doit avoir une largeur de <em>80%</em> du plus petit côté de la fenêtre, être de forme carré, être centré tant horizontalement que verticalement, être de couleur <em>blanche</em> et avoir un ombrage de <em>10vmin</em> égal de tous les côtés de couleur <em>noire</em> semi-transparente.
    Assurez-vous que rien ne dépasse de l'album.
</checklist>

<grostitre>Requis arrière-plan</grostitre>

<checklist>
    Afin de corriger la légère déformation du SVG, positionnez l'arrière-plan (<span class="inline-code">.bg</span>) de manière absolue à <em>-0.25%</em> du haut et de la gauche et donnez-lui une dimension de <em>100.5%</em> en largeur et en hauteur.
    Le contour (<span class="inline-code">.contour</span>) doit être de couleur <em>mauve</em>.
    Les parties de l'arrière-plan (<span class="inline-code">.part</span>) doivent être respectivement de couleur <em>orange</em>, <em>rouge</em>, <em>jaune</em> et <em>bleu</em>.
</checklist>

<grostitre>Animation arrière-plan</grostitre>

<checklist>
    Créez une animation nommée <span class="inline-code">parts</span> appliquant une transition de couleurs en 4 étapes <em>(0%,100% - 25% - 50% - 75%)</em> du <em>bleu</em> au <em>jaune</em> au <em>rouge</em> et au <em>orange</em>.
    Appliquez cette animation aux parties de l'arrière-plan (<span class="inline-code">.part</span>) de manière infinie et d'une durée correspondant à la variable <span class="inline-code">--speed</span>.
    Afin de décaler les couleurs, appliquez à l'animation un délais négatif de <em>0</em> moins la durée de l'animation divisé par <em>4</em> et multiplié par la variable <span class="inline-code">--nb</span>. Pour vous simplifier la vie, voici la formule: <span class="inline-code">calc(0s - (var(--speed) / 4 * var(--nb)))</span>.
</checklist>

<grostitre>Requis lettres</grostitre>

<checklist>
    Les lettres doivent avoir la police d'écriture <em>Arial</em>, une grosseur de <em>30vmin</em>, un poid de <em>800</em>, être de couleur <em>mauve</em> et avoir une rotation de <em>-15deg</em>.
    Placez respectivement les trois lettres à <em>28%</em> de la gauche et <em>2%</em> du haut, <em>15%</em> de la gauche et <em>46%</em> du haut et <em>56%</em> de la gauche et <em>35%</em> du haut.
    Assurez-vous que le <a onclick="event.stopPropagation();" target="_blank" href="https://developer.mozilla.org/fr/docs/Web/CSS/cursor">curseur</a> demeure celui par défaut lorsque les lettres sont survolées.
</checklist>

<grostitre>Animation lettres</grostitre>

<checklist>
    Créez une animation nommée <span class="inline-code">letter</span> appliquant une rotation de <em>-20deg</em> à <em>-10deg</em> et appliquez-la sur le survol des lettres.
    L'animation doit avoir une durée <em>5 millisecondes</em> et se répéter à l'infinie de manière alternée et linéaire.
    Toujours lors du survol des lettres, appliquez-leur un flou de <em>0.2vmin</em>.
</checklist>

<dots></dots>


<grostitre>Ambiance</grostitre>

<youtube src="./videos/ttc-telephone.json"></youtube>

<dots></dots>


<grostitre>Notes de cours 📚</grostitre>

<intlink href="../../background/"></intlink>
<intlink href="../../linear-gradient/"></intlink>
<intlink href="../../box-shadow/"></intlink>
<intlink href="../../unites-de-mesure-avancees/"></intlink>
<intlink href="../../transformation/"></intlink>
<intlink href="../../../html/svg/"></intlink>
<intlink href="../../animation/"></intlink>

<dots></dots>





