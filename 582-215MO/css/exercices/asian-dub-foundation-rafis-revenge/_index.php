<?php 
/**
 * @type     exercice
 * @title    Asian Dub Foundation - Rafi's Revenge
 * @icon     images/thumb.jpg
 * @abstract Pour cet exercice, vous devez écrire du CSS afin de recréer la pochette de l’album "Rafi's Revenge" du groupe de rap jungle Asian Dub Foundation.
 */
?>

<p class="spacer">Pour cet exercice, vous devez écrire du CSS afin de recréer la pochette de l’album <a target="_blank" href="https://open.spotify.com/album/6bI22G1Vu3g3Qji8Xs8pjx">"Rafi's Revenge"</a> du groupe de rap jungle <a target="_blank" href="https://fr.wikipedia.org/wiki/Asian_Dub_Foundation">Asian Dub Foundation</a>.</p>

<p>Aperçu du résultat 👇</p>

<clipasset src="./videos/apercu.mp4"></clipasset>

<dots></dots>


<grostitre>Matériel</grostitre>

<doclink href="./asian-dub-foundation-rafis-revenge.zip">Dossier de départ</doclink>

<h3>Polices d'écriture 🚓</h3>

<doclink href="./HelveticaCompressedRegular.zip">Helvetica Compressed Regular</doclink>
<br>
<doclink href="./STSharpiePrint.zip">ST Sharpie Print</doclink>

<h3>Couleurs 🎨</h3>

<color>#091b29</color>
<color>#f2f1eb</color>
<color>#444444</color>

<h3>Médias 📷</h3>

<mediafile src="./images/bg.webp">Arrière-plan</mediafile>
<mediafile src="./images/plug.webp">Branchement</mediafile>
<mediafile src="./images/sticker.webp">Auto-collant</mediafile>

<mediafile src="./images/member-chandra.webp">Chandra</mediafile>
<mediafile src="./images/member-deeder.webp">Deeder</mediafile>
<mediafile src="./images/member-drdas.webp">Dr Dras</mediafile>
<mediafile src="./images/member-pandit.webp">Pandit</mediafile>
<mediafile src="./images/member-sunj.webp">Sun-J</mediafile>

<mediafile src="./images/speaker-border.webp">Haut-parleur contour</mediafile>
<mediafile src="./images/speaker-center.webp">Haut-parleur centre</mediafile>
<mediafile src="./images/speaker-inside.webp">Haut-parleur intérieur</mediafile>

<br>

<warning>Pour une meilleure exécution de l'exercice, certains des éléments HTML ont été cachés par défaut dans le fichier CSS. Rendez-les visible au fur et à mesure que vous avancez dans l'exercice.</warning>
<thumbsup>Prenez le temps d'analyser le fichier HTML.</thumbsup>
<alert>Il est <strong>INTERDIT</strong> de modifier le HTML.</alert>

<dots></dots>


<grostitre>Requis de base</grostitre>

<checklist>
  Téléchargez les images et placez-les dans un dossier <span class="inline-code">images</span>.
  Téléchargez la police d'écriture et placez-la dans un dossier <span class="inline-code">fonts</span>.
  Créez une variable pour chacune des couleurs pour utilisation ultérieure.
  La couleur de fond de la page doit être de couleur <em>grise</em> et avoir un dégradé vertical allant du <em>bleu</em> au <em>blanc cassé</em>.
  Fusionnez les deux fonds en mode <span class="inline-code">screen</span> afin de donner au gradient un effet délavé.
  L'album doit avoir une largeur de <em>80%</em> du plus petit côté de la fenêtre, être de forme carré, être centré tant horizontalement que verticalement, être de couleur <em>bleu</em> et avoir un ombrage de <em>10vmin</em> égal de tous les côtés de couleur <em>noire</em> semi-transparente.
  Ajoutez-lui l'image d'arrière-plan <span class="inline-code">bg.webp</span> de sorte qu'elle prenne toute l'espace disponible tout en rognant l'exédentaire.
  Fusionnez les arrière-plans en mode <span class="inline-code">luminosity</span>.
  Le branchement (<span class="inline-code">.plug</span>) doit utiliser l'image d'arrière-plan <span class="inline-code">plug.webp</span> prenant tout l'espace disponible, avoir une largeur de <em>19%</em>, une hauteur de <em>32%</em>, être positionné de manière absolue, être collé à gauche et à <em>12%</em> du haut de l'album.
  Fusionnez le branchement en mode <span class="inline-code">luminosity</span>.
  L'auto-collant (<span class="inline-code">.sticker</span>) doit utiliser l'image d'arrière-plan <span class="inline-code">sticker.webp</span> prenant tout l'espace disponible, avoir une largeur de <em>17%</em>, une hauteur de <em>24%</em>, être positionné de manière absolue à <em>2%</em> de la droite et <em>12%</em> du haut de l'album.
  Fusionnez l'auto-collant en mode <span class="inline-code">luminosity</span>.
</checklist>

<grostitre>Requis textes</grostitre>

<checklist>
  À l'aide de <span class="inline-code">@font-face</span>, importez la police d'écriture <span class="inline-code">HelveticaCompressedRegular.otf</span> et nommez la <em>HelveticaCompressed</em>.
  Toujours à l'aide de <span class="inline-code">@font-face</span>, importez la police d'écriture <span class="inline-code">STSharpiePrint.ttf</span> et nommez la <em>STSharpiePrint</em>.
  Utilisez le pseudo-élément <span class="inline-code">::after</span> pour ajouter le texte <em>96</em> à l'élément <span class="inline-code">.sticker</span>. Il doit être positionné de manière absolue à <em>40%</em> du haut et <em>-22%</em> de la gauche, utiliser tout l'espace disponible en largeur, avoir une hauteur de <em>20%</em>, avoir un alignement de texte centré, une grosseur de police d'écriture de <em>6vmin</em>, être de couleur <em>bleue</em>, utiliser la police d'écriture <em>STSharpiePrint</em> et avoir une rotation de <em>-90deg</em>.
  Le libellé de l'album (<span class="inline-code">h1</span>) doit être positionné de manière absolue à <em>54.5%</em> du haut et <em>12%</em> de la gauche, utiliser la police d'écriture <em>HelveticaCompressed</em> d'une grosseur de <em>3vmin</em>, avoir un espacement de lettre de <em>0.2vmin</em> et être de couleur <em>blanc cassé</em>.
</checklist>

<grostitre>Requis membres</grostitre>

<checklist>
  Le conteneur de membres (<span class="inline-code">.members</span>) doit être positionné de manière absolue à <em>68%</em> du haut, prendre tout l'espace disponible en largeur, avoir une hauteur de <em>23%</em>, avoir une marge intérieur gauche de <em>1.5%</em> et avoir un alignement de texte centré.
  Les membres (<span class="inline-code">.member</span>) doivent agir comme des images (<span class="inline-code">inline-block</span>), avoir une largeur de <em>17.5%</em>, prendre tout l'espace disponible en hauteur, avoir une marge extérieur horizontale de <em>0.3%</em> et avoir une bordure intérieur (<span class="inline-code">border-box</span>) de <em>0.5vmin</em> solide de couleur <em>blanc cassé</em>.
  Ajoutez la bonne image d'arrière-plan au bon éléments <span class="inline-code">.member</span>. L'arrière-plan doit prendre tout l'espace disponible tout en rognant l'exédentaire.
  Fusionnez les éléments <span class="inline-code">.member</span> en mode <span class="inline-code">luminosity</span>.
  Lors du survol des membres (<span class="inline-code">.member</span>), utilisez les filtres afin d'inverser complètement ses couleurs en l'espace de <em>0.1 seconde</em>.
  Toujours lors du survol des membres, utilisez la pseudo-classe <span class="inline-code">:has()</span> pour modifier le contenu du pseudo-élément <span class="inline-code">.sticker::after</span> afin d'y placer le nom du membre du groupe. <em>(Deeder, Chandra, Dr Das, Pandit, Sun-J)</em>.
</checklist>

<grostitre>Requis haut-parleur</grostitre>

<checklist>
  Le wrapper du haut-parleur (<span class="inline-code">.speaker-wrapper</span>) doit être positionné de manière absolue à <em>2%</em> du haut et <em>26%</em> de la gauche. Il doit avoir une largeur de <em>42%</em>, être de forme carré, avoir un masque circulaire de <em>50%</em>, avoir un contraste de <em>95%</em> et une luminosité de <em>90%</em>. Fusionnez-le en mode <span class="inline-code">luminosity</span>.
  Les différentes parties du haut-parleur (<span class="inline-code">.speaker</span>) doivent être positionnés de manière absolue au centre du wrapper, avoir une forme carré et avoir un arrière-plan qui prend tout l'espace disponible.
  L'intérieur du haut-parleur (<span class="inline-code">.speaker.inside</span>) doit avoir une largeur de <em>38%</em> et avoir l'image <span class="inline-code">speaker-inside.webp</span> comme arrière-plan.
  Le centre du haut-parleur (<span class="inline-code">.speaker.center</span>) doit avoir une largeur de <em>76%</em> et avoir l'image <span class="inline-code">speaker-center.webp</span> comme arrière-plan.
  Le contour du haut-parleur (<span class="inline-code">.speaker.border</span>) doit avoir une largeur de <em>100%</em> et avoir l'image <span class="inline-code">speaker-border.webp</span> comme arrière-plan.
</checklist>

<grostitre>Requis animation</grostitre>

<checklist>
  Créez-vous une animation nommée <span class="inline-code">inside</span> qui applique une déformation de la grosseur de l'élément d'un facteur de <em>1</em> à <em>1.1</em> tout en gardant l'élément au centre du haut-parleur.
  Appliquez cette animation à l'élément <span class="inline-code">.speaker.inside</span> lorsqu'un membre du groupe est survolé <em>(Utilisez :has() pour y parvenir)</em>.
  L'animation doit avoir une durée <em>100 milisecondes</em> se répétant à l'infinie et doit accélérer progressivement pour ralentir en fin de parcours.
  En plus de l'animation, ajoutez à l'élément <span class="inline-code">.speaker.inside</span> un flou de <em>0.05%</em>.
  Créez-vous une nouvelle animation nommée <span class="inline-code">center</span> qui applique une translation horizontale de <em>-51%</em> à <em>-49%</em> et une translation verticale de <em>-49%</em> à <em>-51%</em>.
  Appliquez cette animation à l'élément <span class="inline-code">.speaker.center</span> lorsqu'un membre du groupe est survolé <em>(Utilisez :has() pour y parvenir)</em>.
  L'animation doit avoir une durée <em>50 milisecondes</em> se répétant à l'infinie et de façon linéaire.
  En plus de l'animation, ajoutez à l'élément <span class="inline-code">.speaker.center</span> un flou de <em>0.02%</em>.
  Créez-vous une dernière animation nommée <span class="inline-code">border</span> qui applique une translation horizontale de <em>-50.2%</em> à <em>-49.8%</em> et une translation verticale de <em>-49.8%</em> à <em>-50.2%</em>.
  Appliquez cette animation à l'élément <span class="inline-code">.speaker.border</span> lorsqu'un membre du groupe est survolé <em>(Utilisez :has() pour y parvenir)</em>.
  L'animation doit avoir une durée <em>50 milisecondes</em> se répétant à l'infinie et de façon linéaire.
  En plus de l'animation, ajoutez à l'élément <span class="inline-code">.speaker.border</span> un flou de <em>0.01%</em>.
</checklist>

<dots></dots>


<grostitre>Ambiance</grostitre>

<!-- <youtube src="./videos/asian-dub-foundation-buzzin.json"></youtube> -->
<youtube src="GAZAKdBHaCk"></youtube>

<dots></dots>


<grostitre>Notes de cours 📚</grostitre>

<intlink href="../../background/"></intlink>
<intlink href="../../linear-gradient/"></intlink>
<intlink href="../../modes-de-fusion/"></intlink>
<intlink href="../../box-shadow/"></intlink>
<intlink href="../../unites-de-mesure-avancees/"></intlink>
<intlink href="../../transformation/"></intlink>
<intlink href="../../transition/"></intlink>
<intlink href="../../animation/"></intlink>
<intlink href="../../font-face/"></intlink>
<intlink href="../../opacite/"></intlink>
<intlink href="../../filtres/"></intlink>
<intlink href="../../masquage/"></intlink>
<intlink href="../../pseudo-classes-avancees/#has"></intlink>

<dots></dots>

