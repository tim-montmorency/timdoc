<?php 
/**
 * @type     exercice
 * @title    Lisa LeBlanc - Lisa LeBlanc
 * @icon     images/thumb.jpg
 * @abstract Pour cet exercice, vous devez écrire du CSS afin de recréer la pochette de l’album éponyme de Lisa LeBlanc.
 */
?>

<p class="spacer">Pour cet exercice, vous devez écrire du CSS afin de recréer la pochette de l’<a target="_blank" href="https://open.spotify.com/album/6qkkBPeN0eLTk9oDvvew2V">album éponyme</a> de <a target="_blank" href="https://fr.wikipedia.org/wiki/Lisa_LeBlanc">Lisa LeBlanc</a>.</p>

<p>Aperçu du résultat 👇</p>

<clipasset src="./videos/apercu.mp4"></clipasset>

<dots></dots>


<grostitre>Matériel</grostitre>

<doclink href="./lisa-leblanc-lisa-leblanc.zip">Dossier de départ</doclink>

<h3>Polices d'écriture 🚓</h3>

<doclink href="./astype-bonnet-grotesque-nr.zip">Bonnet Grotesque Nr</doclink>

<h3>Couleurs 🎨</h3>

<color>#6cc06d</color>
<color>#f0552e</color>
<color>#ffd917</color>
<br>
<color>#74ccd2</color>
<color>#482a2d</color>
<color>#555555</color>

<h3>Médias 📷</h3>

<mediafile src="./images/objects.webp">Objets</mediafile>

<br>

<warning>Pour une meilleure exécution de l'exercice, certains des éléments HTML ont été cachés par défaut dans le fichier CSS. Rendez-les visible au fur et à mesure que vous avancez dans l'exercice.</warning>
<thumbsup>Prenez le temps d'analyser le fichier HTML.</thumbsup>
<alert>Il est <strong>INTERDIT</strong> de modifier le fichier HTML.</alert>

<dots></dots>


<grostitre>Requis de base</grostitre>

<checklist>
    Téléchargez les images et placez-les dans un dossier <span class="inline-code">images</span>.
    Téléchargez police d'écriture et placez-la dans un dossier <span class="inline-code">fonts</span>.
    Créez une variable pour chacune des couleurs pour utilisation ultérieure.
    Créez une variable nommée <span class="inline-code">--speed</span> et attribuez-lui la valeur de <em>4 seconde</em>. Celle-ci servira à déterminer le temps de l'animation.
    Le fond de la page doit être de couleur <em>grise</em> et avoir un dégradé vertical allant du <em>vert</em> au <em>orange</em>.
    Fusionnez les deux fonds en mode <span class="inline-code">screen</span> afin de donner au gradient un effet délavé.
    L'album doit avoir une largeur de <em>80%</em> du plus petit côté de la fenêtre, être de forme carré, être centré tant horizontalement que verticalement et avoir un ombrage de <em>10vmin</em> égal de tous les côtés de couleur <em>noire</em> semi-transparente.
    Assurez-vous que rien ne dépasse de l'album.
</checklist>

<grostitre>Requis arrière-plan</grostitre>

<checklist>
    Afin de corriger la légère déformation du SVG, positionnez l'arrière-plan (<span class="inline-code">.bg</span>) de manière absolue à <em>-0.25%</em> du haut et de la gauche et donnez-lui une dimension de <em>100.5%</em> en largeur et en hauteur.
    La partie centrale de l'arrière-plan (<span class="inline-code">.part-center</span>) doit être de couleur <em>brune</em>.
    Les quatres autres parties (<span class="inline-code">.part</span>) doivent être respectivement de couleur <em>vert</em>, <em>orange</em>, <em>jaune</em> et <em>bleu</em>.
    À l'aide du pseudo-élément <span class="inline-code">::after</span>, créez un nouveau layer à l'album (<span class="inline-code">.album</span>) en position absolue couvrant tout l'espace disponible et ayant comme arrière-plan l'image <span class="inline-code">objects.webp</span> avec une taille contenue.
</checklist>

<grostitre>Requis texte</grostitre>

<checklist>
    À l'aide de <span class="inline-code">@font-face</span> importez la police d'écriture <span class="inline-code">astype-bonnet-grotesque-nr.otf</span>, nommez-la <em>Bonnet</em> et appliquez la au nom de l'artiste (<span class="inline-code">h1</span>).
    Le nom de l'artiste (<span class="inline-code">h1</span>) doit être positionné de manière absolue à <em>45%</em> du haut et <em>35%</em> de la gauche, avoir une grosseur de police d'écriture de <em>7vmin</em>, un espacement de lettres de <em>0.7vmin</em> et être de couleur <em>bleu</em>.
</checklist>

<grostitre>Requis animation</grostitre>

<checklist>
    Créez une animation nommée <em>part</em> en 4 étapes <em>(0%,100% - 25% - 50% - 75%)</em> changeant la couleur des parties du SVG du <em>vert</em>, au <em>orange</em>, au <em>jaune</em> et au <em>bleu</em>.
    Appliquez cette animation aux parties de l'arrière-plan (<span class="inline-code">.part</span>) sur une durée de <em>4 secondes</em> de façon infinie et avec <em>1 step</em> par breakpoint.
    Afin que les quatres parties de l'arrière-plan changent de couleur indépendament, appliquez à l'animation un délai négatif de <em>0s</em> moins la variable <span class="inline-code">--speed</span> divisé par <em>4</em> et multiplié par la variable <span class="inline-code">--nb</span>. Pour vous simplifier la vie, voici la formule: <span class="inline-code">calc(0s - (var(--speed) / 4 * var(--nb)))</span>.
</checklist>

<dots></dots>


<grostitre>Ambiance</grostitre>

<youtube src="./videos/lisa-leblanc-cerveau-ramolli.json"></youtube>

<dots></dots>


<grostitre>Notes de cours 📚</grostitre>

<intlink href="../../background/"></intlink>
<intlink href="../../linear-gradient/"></intlink>
<intlink href="../../box-shadow/"></intlink>
<intlink href="../../unites-de-mesure-avancees/"></intlink>
<intlink href="../../transformation/"></intlink>
<intlink href="../../animation/"></intlink>
<intlink href="../../font-face/"></intlink>

<dots></dots>