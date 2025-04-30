<?php 
/**
 * @type     exercice
 * @title    Examen - Birds of Prey
 * @icon     images/thumb.jpg
 * @abstract Pour cet exercice, nous allons recréer une affiche animée du film Birds of Prey.
 */
?>

<p class="spacer">Pour cet exercice, nous allons recréer une affiche animée du film <a target="_blank" href="https://www.imdb.com/title/tt7713068/">Birds of Prey</a>.</p>

<thumbsup>Allez consulter les <a href="#criteres-devaluation-30">critères d'évaluation</a> en bas de page pour vous assurer de bien gérer vos efforts et votre temps.</thumbsup>

<grostitre>Aperçu du résultat 👇</grostitre>
<small>Pour contrôler la vidéo (play-pause), clic-droit et <em>Afficher toutes les commandes</em> (Chrome) ou <br> <em>Afficher les contrôles</em> (Edge).</small> 
<clipasset src="./videos/apercu-2025-compressed.mp4"></clipasset>
<br>
Mobile:
<img src="./images/apercu-bop-mobile.png" alt="mobile" style="max-width: 100px;"> <br>
Tablette:
<img src="./images/apercu-bop-tablette.png" alt="tablette" style="max-width: 300px;"> <br>
Desktop:
<img src="./images/apercu-bop-desktop.png" alt="destop" style=""> <br>



<dots></dots>
<grostitre>Matériel</grostitre>
<doclink href="./BOP_dossier-de-depart_v2025.zip">Dossier de départ</doclink>


<h3>Couleurs 🎨</h3>
<table class="table-couleurs">
    <tr>
        <td>Turquoise profond</td>
        <td>
            <color>#33c1a7</color>
        </td>
    </tr>
    <tr>
        <td>Turquoise léger</td>
        <td>
            <color>#6ffeac</color>
        </td>
    </tr>
    <tr>
        <td>Jaune joyeux</td>
        <td>
            <color>#f7e700</color>
        </td>
    </tr>
    <tr>
        <td>Gris profond</td>
        <td>
            <color>#333333</color>
        </td>
    </tr>
</table>

<dots></dots>
<grostitre>Avant de commencer, lisez bien ces quelques conseils</grostitre>

<info>Pour une meilleure exécution de l'examen, la plupart des éléments HTML ont été cachés par défaut dans le fichier CSS. Rendez-les visible au fur et à mesure que vous avancez dans l'examen.</info>

<bravo>Prenez le temps de bien analyser le fichier HTML.</bravo>

<warning>
  <h4>!! Les commentaires CSS !!</h4>
  <p> Vous DEVEZ <strong>commenter l’ensemble de votre code CSS</strong> afin de démontrer votre compréhension.</p>

  <p>Exemple de commentaires CSS auquel je m'attends: </p> 
  <highlight  lang="css">
/* Conteneur en flex permettant d'aligner le contenu sur une ligne (row) et donc l'espace restant sera divisé entre chaque élément enfant du .container */
.container {
  display: flex;
  justify-content: space-between;
}
/* Dimension pour mobile (mobile first) du texte du titre principal de la page de niveau 1.  */
h1 {
  font-size: 1.3rem;
}

/* Styles d'exception pour les écrans d'une largeur de minimum 778px et plus */
@media screen and (min-width: 778px) {
  /* Adapter la taille fixe du titre principal qui était de 1.3rem et le changer pour 4vw qui équivaut à 4% de la largeur du viewport (de la fenêtre) . */
  h1{
    font-size: 4vw;
  }
}

  </highlight>
</warning>


<thumbsup>
  N'oubliez pas de styliser <strong>mobile first</strong>. Par la suite, ajouter les styles pour plus grands écrans via des <strong>@media queries.</strong>
</thumbsup>





<dots></dots>
<grostitre>Requis de base</grostitre>
<checklist>
  Dans la balise <incode>title</incode> de la page HTML, changez le texte <em>PRÉNOM+NOM</em> par le vôtre.
  Créez une variable pour chacune des couleurs pour utilisation ultérieure.
  La page web doit s'étendre sur toute la largeur et la hauteur de la fenêtre du navigateur.
  L'arrière-plan de la page doit être de couleur <em>gris profond</em>.
  Ajoutez-lui un gradient de <em>turquoise profond</em> à <em>jaune joyeux</em> partant du coin supérieur gauche pour aller au coin inférieur droit.
  Fusionnez les deux arrière-plans que vous venez de créer sur la page. Cette fusion sera en mode <span class="inline-code">screen</span> afin de lui conférer un effet délavé.
</checklist>




<warning>Vous DEVEZ <strong>commenter l’ensemble de votre code CSS</strong> afin de démontrer votre compréhension.</warning>
<!-- Requis de l'affiche -->
<grostitre>Requis pour l'affiche</grostitre>
<checklist>
  L'affiche doit avoir une largeur équivalente à <em>80%</em> du plus petit côté de la fenêtre du navigateur.
  Par défaut, l'affiche est carrée <em>1/1</em>. Il est interdit d'utiliser la propriété <incode>height</incode>. Utilisez la propriété CSS la plus appropriée pour ce requis. 
  L'affiche doit être centrée dans la page tant horizontalement que verticalement, vous devez utiliser la technique <em>flexblox</em> pour ce faire.
  L'arrière-plan de l'affiche doit présenter un dégradé allant du <em>tuquoise léger</em> au <em>turquoise profond</em> en partant du coin supérieur gauche pour terminer au coin inférieur droit.
  Ajoutez à l'affiche un ombrage de <em>100px</em> égal de tout les côtés de couleur <em>noire</em> semi-transparente.
  Lorsque largeur de la fenêtre devient plus grande ou égale à la hauteur,  l'affiche doit avoir une hauteur équivalent à une fraction de <em>3/4</em> de sa propre largeur. Utilisez la propriété CSS la plus appropriée pour ce requis. 
</checklist>




<warning>Vous DEVEZ <strong>commenter l’ensemble de votre code CSS</strong> afin de démontrer votre compréhension.</warning>
<!-- Requis de l'image d'Harley à l'arrière, visible au survol -->
<grostitre>Requis de l'image d'Harley à l'arrière, visible au survol</grostitre>
<img src="./images/images-affiche-BoP/photo-bg.webp" alt="" style="width: 100px; margin-bottom: 0; display: inline-block; ">
<checklist>
  Positionnez en absolu la balise image dont la source est <span class="inline-code">photo-bg.webp</span>. Assurez-vous qu'elle se place derrière tout le reste du contenu de l'affiche et qu'elle prenne tout l'espace disponible sur l'affiche en largeur et en hauteur.
  À l'aide de propriétés comme <span class="inline-code">object-fit</span>, faites-en sorte que l'exédentaire soit rogné et que le focus soit mit sur le coin inférieur gauche de sorte que cette portion de l'image ne soit jamais rognée.
  Fusionnez l'image avec l'arrière-plan de l'affiche de sorte qu'elle agisse comme filtre de luminosité avec l'affiche.
  Faites-en sorte que l'élément cette image soit complètement transparent, de sorte qu'il n'est pas visible par défaut. Lorsqu'on survole l'affiche, cette image devient alors complètement opaque en l'espace de <em>1 seconde</em>.
</checklist>






<warning>Vous DEVEZ <strong>commenter l’ensemble de votre code CSS</strong> afin de démontrer votre compréhension.</warning>
<!-- Requis plume --> 
<grostitre>Requis plume</grostitre>
<img src="./images/images-affiche-BoP/feather.webp" alt="" style="width: 100px; margin-bottom: 0; display: inline-block; ">
<checklist>
  La plume (<span class="inline-code">.feather</span>) doit être positionnée de manière absolue à <em>35%</em> de la largeur de la fenêtre à partir de la gauche et <em>-10%</em> de la hauteur de la fenêtre en partant du haut.
  La plume doit avoir une hauteur correspondant à <em>10%</em> de la hauteur de la fenêtre.
  Créez une animation nommée <em>feather</em> faisant descendre la plume de <em>0vh</em> à <em>100vh</em> en <em>10 secondes</em>.
  Créez 6 étapes dans votre animation afin qu'elle se balance en largeur de <em>-10vw</em> à <em>10vw</em> en alternance et qu'elle effectue une légère rotation de <em>40deg</em> à <em>-10deg</em> (comparez avec l'aperçu afin d'arriver au même résultat).
  L'animation doit boucler à l'infini.
  Appliquez le lissagede vitesse qui correspont le mieux à ce que vous voyez dans l'aperçu.
</checklist>




<warning>Vous DEVEZ <strong>commenter l’ensemble de votre code CSS</strong> afin de démontrer votre compréhension.</warning>

<!-- Requis logo -->
<grostitre>Requis logo (BOP)</grostitre>
<img src="./images/images-affiche-BoP/logo-small.webp" alt="" style="display: inline-block; width: 50px; margin-bottom: 0; margin-right: 30px;"> <img src="./images/images-affiche-BoP/logo-vertical.webp" alt="" style="display: inline-block; width: 50px; margin-bottom: 0; margin-right: 30px;"> <img src="./images/images-affiche-BoP/logo-horizontal.webp" alt="" style="display: inline-block; width: 100px; margin-bottom: 0;"> 
<checklist>
  <!-- Placer logo à coté de Harley via flexbox ? à essayer... -->
  Appliquez aux images des 3 logos "BOP/Birds of Prey" une largeur <incode>auto</incode> et une largeur maximale <em>100%</em>.
  Appliquez aux images des logos "BOP/Birds of Prey" une ombre portée de <em>20px</em> égal de tous les côtés de couleur <em>noire</em> semi-transparente. Attention, cette ombre doit entourer les lettre du logo et non pas la boite de l'image. Il existe une technique CSS pour ce faire, nous l'avons vu dans les dernières semaines.
  Le seul logo "BOP/Birds of Prey" visible par défaut (mobile first) est le petit logo (small).
  Si la fenêtre devient plus grande ou égale à <em>600px</em>, le logo "BOP/Birds of Prey" doit être remplacé par le logo horizontal.
  Si la fenêtre devient plus grande ou égale à <em>600px</em> ET que la hauteur de la fenêtre devient égale ou plus grande que largeur, le logo "BOP/Birds of Prey" doit être remplacé par le logo vertical.
  Appliquez des transformation CSS afin que le logo horizontal s'affiche comme sur l'aperçu.
</checklist>






<warning>Vous DEVEZ <strong>commenter l’ensemble de votre code CSS</strong> afin de démontrer votre compréhension.</warning>

<!-- Requis Harley Quinn et Logo -->
<grostitre>Requis placement d'Harley Quinn et du logo(BOP) et des crédits(DC)</grostitre>
<checklist>
  À l'aide de flexbox, positionnez la colonne du logo(BOP)+crédit(DC) à gauche et celle de Harley Quinn à droite tel que démontré dans l'aperçu.
  Comme on prévoit qu'Harley Quinn dépasse des bords de l'affiche, assurez-vous que ce qui dépasse de celle-ci reste visible.
  À l'aide de flexbox, positionnez  le logo(BOP) et le crédit(DC) tel que démontré dans l'aperçu.
</checklist>





<warning>Vous DEVEZ <strong>commenter l’ensemble de votre code CSS</strong> afin de démontrer votre compréhension.</warning>

<!-- Requis Harley Quinn -->
<grostitre>Requis Harley Quinn</grostitre>
<!-- Placer harley aà coté du avec logo via flexbox et elle dépasse du cadre avec overflow: visible? à essayer... -->
<img src="./images/images-affiche-BoP/harley.webp" alt="" style="width: 50px; margin-bottom: 0; display: inline-block; ">
<checklist>
  Harley Quinn doit avoir une hauteur équivalent à celle de l'affiche.
  À l'aide de la transformation CSS, appliquez ce qu'il faut pour quelle s'affiche comme sur l'aperçu.
</checklist>





<warning>Vous DEVEZ <strong>commenter l’ensemble de votre code CSS</strong> afin de démontrer votre compréhension.</warning>

<!-- Requis crédits -->
<grostitre>Requis crédits (DC)</grostitre>
<svg xml:space="preserve" viewBox="0 0 900 900" style="width: 50px;">
  <path d="M450 0a450 450 0 1 0 0 900 450 450 0 0 0 0-900zM33 450c0-48 8-95 24-140l44 30v338a416 416 0 0 1-68-228zm712 295a416 416 0 0 1-590 0 422 422 0 0 1-34-38h231l91-66V284l-91-68H105A420 420 0 0 1 612 66a415 415 0 0 1 183 150h-66l-14 33-44-33H568l-90 68v357l90 66h211a421 421 0 0 1-34 38zM193 328h82c23 0 42 19 42 42v185c0 23-19 42-42 42h-49V352l-33-24zm618 332V532H694v65h-50c-23 0-40-18-40-40V352l-33-24h123v70h107l21-136a416 416 0 0 1 12 26 414 414 0 0 1 0 324 416 416 0 0 1-23 48z"/>
</svg>
<checklist>
  À l'aide de <span class="inline-code">@font-face</span>, importez la police d'écriture <span class="inline-code">DcFandom-orr4.ttf</span> et nommez la <em>DcFandom</em>. N'oubliez pas le format.
  L'élément <span class="inline-code">.credits</span> doit contenir une marge intérieure de <em>10px</em>.
  Le SVG doit avoir une largeur équivalente à <em>10%</em> du plus petit côté de la fenêtre du navigateur.
  Dans <span class="inline-code">.credits</span>, à l'aide d'un pseudo-élément, ajoutez le texte "Presented by" avant le SVG.
  Pour l'élément contenant "Presented by", appliquez-lui une taille de texte de <em>2%</em> du plus petit côté de la fenêtre du navigateur, tout en appliquant un minimum de <em>8px</em> et un maximum de <em>16px</em>. Rappelez-vous qu'il existe une fonction CSS pour cela.sapi_windows_vt100_support
  À l'aide de flexbox, placez l'élément "Presented by" et le Crédit(DC) tel que présenté dans l'aperçu
  Pour l'élément contenant "Presented by", appliquez-lui la police d'écriture <em>DcFandom</em> et la couleur <em>jaune joyeux</em>.
  L'élément SVG <span class="inline-code">.dc</span> doit être aussi de couleur <em>jaune joyeux</em>.
</checklist>


<dots></dots>
<grostitre>Critères d'évaluation (30%)</grostitre>
<p>Les pointages ci-bas s'appliquent sur un total de 100% et seront ramenés à 30%.</p>
<ul>
  <li>[15%] L'étudiant a tout commenté dans ses propres mots, de façon à bien expliquer et prouver sa compréhension.</li>
  <li>[12%] Tous les éléments sont visibles et bien placés en mobile d'abord.</li>
  <li>[20%] L'animation et la transition (voir les consignes) sont bien exécutées et correspondent à ce qui est attendu.</li>
  <li>[15%] Tous les éléments s'affichent correctement selon le format de l'écran (responsive).</li>
  <li>[10%] Les transformations d'éléments sont bien appliqués.</li>
  <li>[10%] Les ombres, les filtres et les fusions d'images sont bien appliqués.</li>
  <li>[10%] Les formats, les ratios et les tailles relatives à la dimension de la fenêtre sont tous bien appliqués selon les consignes.</li>
  <li>[8%] Les variables de couleurs sont bien définies et appliquées sur tous les éléments correspondants, y compris le SVG.</li>
</ul>


<dots></dots>
<grostitre>Remise</grostitre>
<checklist>
  Renommez votre dossier <em>[nom]-[prenom]_BoP_582-211MO</em>.
  Zippez votre dossier et assurez vous que votre ficheir zip est aussi nommé ainsi: <br><em>[nom]-[prenom]_BoP_582-211MO.zip</em>.
  Sur Teams, remettez votre travail sur le Devoir attitré à l'examen #2 dans notre équipe Web 2.
  IMPORTANT: Avant de quitter la classe, venez me voir en avant afin que je confirme la réception de votre travail.
</checklist>




<dots></dots>
<grostitre>Notes de cours 📚</grostitre>
<doclink href="../../../../582-211/">Timdoc / 582-211</doclink>

