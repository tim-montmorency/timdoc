<?php
/**
 * @type     exercice
 * @title    Examen - Loup de nuit
 * @icon     images/thumb.jpg
 * @abstract Pour cet examen, nous allons recréer de manière libre et dynamique l'oeuvre "Loup de nuit" de l'artiste autochtone Christine Sioui-Wawanoloath.
 */
?>

<p class="spacer">Pour cet examen, nous allons recréer de manière libre et dynamique l'oeuvre <a target="_blank" href="https://strapi-uploads-drac-prod.s3.ca-central-1.amazonaws.com/DRAC_Christine_Sioui_Wawanoloath_NIB_8_IWI_M8_LSEM_Loup_de_nuit_2022_min_10d4f3d9cb.jpg">"Loup de nuit"</a> de l'artiste autochtone <a target="_blank" href="https://fr.wikipedia.org/wiki/Christine_Sioui-Wawanoloath">Christine Sioui-Wawanoloath</a>.</p>

<p>Aperçu du résultat 👇</p>

<clipasset src="./videos/apercu.mp4"></clipasset>

<dots></dots>


<grostitre>Matériel</grostitre>

<doclink href="./loup-de-nuit.zip">Dossier de départ</doclink>

<h3>Police d'écriture 🚓</h3>

<doclink href="./canada1500-bd.zip">Canada1500</doclink>

<h3>Couleurs de base 🎨</h3>

<color>#222222</color>
<color>#8f9191</color>
<color>#424058</color>
<color>#00001f</color>
<br>
<color>#5ab2b4</color>
<color>#327667</color>
<color>#ffffff</color>

<h3>Couleurs du loup 🎨</h3>

<color>#81c1a6</color>
<color>#c2e0de</color>
<color>#eff6ef</color>
<color>#ee7e3c</color>
<br>
<color>#43a781</color>
<color>#ea5a59</color>
<color>#e55495</color>
<color>#f8afca</color>

<h3>Médias 📷</h3>

<mediafile src="./images/signature.svg">Signature</mediafile>
<mediafile src="./images/snowflake.svg">Flocon</mediafile>
<mediafile src="./images/tree.svg">Arbre</mediafile>

<br>

<bravo>La police d'écriture <a target="_blank" href="https://typodermicfonts.com/canada1500/">Canada1500</a> est la seule gratuite qui contient tous les caractères spéciaux autochtones du Canada. Elle fût créée en l'honneur du 150ième anniversaire de la confédération.</bravo>
<warning>Pour une meilleure exécution de l'examen, la plupart des éléments HTML ont été cachés par défaut dans le fichier CSS. Rendez-les visible au fur et à mesure que vous avancez dans l'examen.</warning>
<thumbsup>Prenez le temps de bien analyser le fichier HTML, vous-y trouverez des variables CSS.</thumbsup>
<alert>Il est <strong>INTERDIT</strong> de modifier le HTML.</alert>

<dots></dots>


<grostitre>Requis de base</grostitre>

<checklist>
  Téléchargez les images et placez les dans un dossier <span class="inline-code">images</span>.
  Téléchargez la police d'écriture et placez-la dans un dossier <span class="inline-code">fonts</span>.
  Créez une variable pour chacune des couleurs de base pour utilisation ultérieure. Il est nullement nécéssaire de créer des variables pour les couleurs du loup.
  Créez une variable nommée <span class="inline-code">--wolf-duration</span> ayant une valeur de <em>3 secondes</em>. Cette variable servira à déterminer la vitesse de l'animation du loup.
  Créez une variable nommée <span class="inline-code">-snow-big-duration</span> ayant une valeur de <em>4 secondes</em>. Cette variable servira à déterminer la vitesse de l'animation des gros flocons.
  Créez une variable nommée <span class="inline-code">-snow-small-duration</span> ayant une valeur de <em>6 secondes</em>. Cette variable servira à déterminer la vitesse de l'animation des petits flocons.
  L'arrière-plan de la page doit être de couleur <em>gris foncé</em>.
  Ajoutez-lui un gradient de <em>bleu foncé</em> à <em>vert</em>.
  Fusionnez les fonds en mode <span class="inline-code">screen</span> afin de donner un effet délavé.
  La toile (<span class="inline-code">.canvas</span>) doit avoir une largeur de <em>80%</em> du plus petit côté de la fenêtre, une hauteur du <em>2/3</em> de sa largeur, être centré dans la page tant horizontalement que verticalement, avoir un gradient allant de <em>bleu pâle</em> à <em>vert</em> et avoir un flou de <em>10vmin</em> égal de tous les côtés de couleur <em>noir</em> semi-transparente.
</checklist>

<grostitre>Requis signature</grostitre>

<checklist>
  À l'aide <span class="inline-code">@font-face</span>, importez la police d'écriture <span class="inline-code">canada1500-bd.otf</span> et nommez la <em>Canada1500</em>. N'oubliez pas de spécifier le format.
  La signature (<span class="inline-code">.signature</span>) doit avoir l'image <span class="inline-code">signature.svg</span> comme arrière-plan.
  Elle doit avoir une largeur équivalente à <em>5%</em> de la largeur de la toile, une hauteur de <em>8 onzièmes</em> de sa largeur et être positionnée de manière absolue à <em>2vmin</em> du bas et <em>2vmin</em> de la droite.
  Lors du survol de la signature, faites-en sorte qu'il augmente en grosseur d'un facteur de <em>1.2</em> en <em>1 seconde</em> et qu'il prenne le même temps pour revenir à la normale.
  Le nom de l'auteur (<span class="inline-code">.author</span>) doit être positionné de manière absolue à <em>2vmin</em> du bas et <em>2vmin</em> de la gauche.
  Il doit aussi avoir la police d'écriture <em>Canada1500</em> d'une grosseur de <em>3vmin</em> et être de couleur <em>blanc</em>.
  Donnez-lui une opacité de <em>0</em> et un flou de <em>3vmin</em> par défaut.
  À l'aide de la pseudo-classe <span class="inline-code">:has()</span>, faites-en sorte que lors du survol de la signature, le nom de l'auteur transitionne en <em>1 seconde</em> à une opacité de <em>1</em> et un flou de <em>0</em>.
</checklist>

<grostitre>Requis flocons</grostitre>

<checklist>
  Les champs de neige (<span class="inline-code">.snowfield</span>) doit être positionnés de manière absolue, couvrir tout l'espace en largeur et <em>60%</em> de la hauteur de la toile.
  Ils doivent aussi avoir un alignement de texte centré et une grosseur de police de <em>0</em>.
  Faites-en sorte que rien n'en dépasse.
  Les flocons de neige (<span class="inline-code">.snowflake</span>) doivent avoir l'image <span class="inline-code">snowflake.svg</span> en arrière-plan, se comporter comme des images et avoir un flou de <em>0.1vmin</em>.
  Les petits flocons doivent avoir une largeur équivalente à <em>1.8%</em> de la largeur de la toile, être de forme carrée, avoir une marge externe verticale de <em>0</em> et une marge externe horizontale de <em>0.7%</em>.
  Les gros flocons doivent avoir une largeur équivalente à <em>3.6%</em> de la largeur de la toile, être de forme carrée, avoir une marge externe verticale de <em>0</em> et une marge externe horizontale de <em>1.2%</em>.
  Créez une animation nommée <span class="inline-code">snowflake</span> créant une translation verticale partant de <em>-100%</em> à <em>40vmin</em> et attribuez la aux flocons de manière infinie.
  L'animation des petits flocons doit avoir une durée équivalente à la variable <span class="inline-code">--snow-small-duration</span> et avoir un délais négatif correspondant à la durée multiplié par la variable <span class="inline-code">--nb</span> afin de leur donner un effet aléatoire. Pour vous simplifiez la vie, voici la formule: <span class="inline-code">calc(0s - (var(--nb) * var(--snow-small-duration)))</span>.
  L'animation des gros flocons doit avoir une durée équivalente à la variable <span class="inline-code">--snow-big-duration</span> et avoir un délais négatif correspondant à la durée multiplié par la variable <span class="inline-code">--nb</span> afin de leur donner un effet aléatoire. Pour vous simplifiez la vie, voici la formule: <span class="inline-code">calc(0s - (var(--nb) * var(--snow-big-duration)))</span>.
</checklist>

<grostitre>Requis forêt</grostitre>

<checklist>
  La forêt (<span class="inline-code">.forest</span>) doit être positionnée de manière absolue, couvrir tout l'espace en largeur et <em>80%</em> de la hauteur de la toile.
  Les arbres (<span class="inline-code">.tree</span>) doivent être positionnés de manière absolue, couvrant tout l'espace en hauteur avec une largeur de <em>2 tiers</em> de sa hauteur, être de couleur <em>bleu foncé</em> et avoir <span class="inline-code">tree.svg</span> comme image de masquage. À cette étape-ci tous les arbres devraient se superposer.
  Afin de leurs donner de la texture, utilisez le pseudo-élément <span class="inline-code">::before</span> de manière absolue, couvrant tout l'espace disponible tant en largeur qu'en hauteur, avoir le filtre SVG <span class="inline-code">url(#grain)</span> et un flou de <em>1px</em>.
  Fusionnez le pseudo-élément avec l'arbre en mode <span class="inline-code">hard-light</span>.
  Afin de disposer des arbres en deux rangés, sélectionnez les <em>5 premiers</em>, donnez-leurs une position vertical de <em>-20%</em> et une position horizontale correspondant à la variable <span class="inline-code">--nb</span> multiplié par <em>20%</em> moins <em>12%</em>. Pour vous simplifier la vie, voici la formule: <span class="inline-code">calc(var(--nb) * 20% - 12%)</span>
  Ensuite, sélectionnez les <em>5 derniers</em>, donnez-leurs une position verticale de <em>-10%</em> et une position horizontale correspondant à la variable <span class="inline-code">--nb</span> moins <em>5</em> multiplié par <em>20%</em> moins <em>3%</em>. Pour vous simplifier la vie, voici la formule: <span class="inline-code">calc((var(--nb) - 5) * 20% - 3%)</span>
  Pour diversifier la grosseur des arbres, sélectionnez un arbre sur trois commençant par le premier et appliquez-leurs une déformation horizontale d'un facteur de <em>0.6</em>.
  Pour terminer, appliquez à la forêt (<span class="inline-code">.forest</span>) un filtre <a onclick="event.stopPropagation();" target="_blank" href="https://developer.mozilla.org/fr/docs/Web/CSS/filter-function/drop-shadow">drop-shadow</a> avec un décalage horizontal de <em>1vmin</em>, un décalage vertical de <em>-1vmin</em>, une grosseur de <em>0.5vmin</em> et de couleur <em>noir</em> avec une opacité de <em>0.2</em>.
</checklist>

<grostitre>Requis brouillard</grostitre>

<checklist>
  Le brouillard (<span class="inline-code">.fog</span>) doit être positionné de manière absolue dans le bas de la toile, prendre tout l'espace disponible en largeur et <em>60%</em> en hauteur.
  Appliquez-lui un grandient allant de <em>transparent</em> à <em>gris pâle</em> ainsi qu'une opacité de <em>50%</em>.
</checklist>

<grostitre>Requis loup</grostitre>

<checklist>
  Le conteneur du loup (<span class="inline-code">.wolf-wrapper</span>) doit avoir une largeur de <em>90%</em> de la toile, être positionné de manière absolue à <em>40%</em> du haut de la toile et être centré horizontalement.
  Le loup (<span class="inline-code">.wolf</span>) doit avoir un double filtre <a onclick="event.stopPropagation();" target="_blank" href="https://developer.mozilla.org/fr/docs/Web/CSS/filter-function/drop-shadow">drop-shadow</a> d'une dimension de <em>3vmin</em> égal de tous les côtés de couleur <em>gris mauve</em>.
  Le contour (<span class="inline-code">.contour</span>) ainsi que les points (<span class="inline-code">.dots</span>) du loup doivent être de couleur <em>blanche</em>.
  Créez une animation nommée <em>wolfparts</em> en <em>8 étapes</em> (0%, 100% - 12.5% - 25% - 37.5% - ...) dont chacune des étapes correspondent à une des 8 couleurs du loup. Pour chaque étape, vous devrez changer la couleur de l'élément SVG par la couleur correspondant à l'étape.
  Appliquez cette animation aux parties du loup (<span class="inline-code">.part</span>) de façon linéaire et infinie avec une durée correspondant à la variable <span class="inline-code">--wolf-duration</span>.
  À ce stade-ci, toutes les parties du loup devraient changer pour la même couleur en même temps. Pour les décaler, ajoutez un délais d'animation négatif correspondant à la variable <span class="inline-code">--wolf-duration</span> divisé par <em>8</em> et multiplié par la variable <span class="inline-code">--nb</span>. Pour vous simplifier la vie, voici la formule: <span class="inline-code">calc(0s - (var(--wolf-duration) / 8 * var(--nb)))</span>.
</checklist>

<grostitre>Remise</grostitre>

<checklist>
  Renommez votre dossier <em>"loup_[nom]_[prenom]"</em>.
  Zippez votre dossier <em>"loup_[nom]_[prenom]"</em>.
  Joignez votre fichier <em>.zip</em> au devoir <em>"EX03: Loup de nuit"</em>.
  Respirez un bon coup, vous avez terminé.
</checklist>

<dots></dots>


<grostitre>Notes de cours 📚</grostitre>

<doclink href="../../../../582-215MO/">Timdoc / 582-215MO</doclink>

<dots></dots>