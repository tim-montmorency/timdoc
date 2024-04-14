 <?php

   /**
    * @type     article
    * @title    P2.2b Intégration+animations
    * @icon     images/icon.svg
    * @abstract  Intégration des médias, textes et animations GSAP de base
   * @index    15
    */
   ?>


<grostitre>Instruction 1 - Préparation des médias</grostitre>

<checklist>Préparez tous les fichiers images: un fichier image pour chaque élément graphique qui sera animable indépendamment.<em>Voir ci-bas pour les instructions en détails.</em>
Bien nommer tous vos fichiers images. <em>Voir ci-bas pour les instructions en détails.</em>
Classez toutes les images dans les dossier img du projet. <em>Voir ci-bas pour les instructions en détails.</em>
 </checklist>


<h3 style="margin-top: 0;">Spécifications détaillées pour les "Instructions 1"</h3>

 <ul>
     <li>
         <h4>1- Préparez tous les fichiers images</h4>
         <p>Normalement c’est déjà fait mais assurez-vous d’avoir bien découpé vos images: un fichier image pour chaque
             élément graphique qui sera animable indépendamment (ou un seul sprite si vous connaissez la technique,
             sinon allez-y avec différents fichiers images indépendants).</p>
         <p>Dans certains cas, vous aurez un même élément graphique séparé en plusieurs fichiers images par exemples:
         </p>
         <ul>
             <li>Un lapin dont les oreilles frémissent, chaque oreille aurait son propre fichier image et le reste du
                 lapin serait aussi une image distincte. S’il cligne des yeux, chaque œil aurait son fichier image distinct. </li>
             <li>Pour l’animation suivante: “Quelque chose qui se compose ou se décompose en couche ou en éclats via le
                 défilement de la page.”, chaque couche ou élément de la décomposition devrait être isolé dans son
                 propre fichier image. </li>
             <li>etc</li>
         </ul>

     </li>
     <li>
         <h4>2- Bien nommer tous vos fichiers images: </h4>
         <ul>
             <li>Bien nommer vos fichiers par rapport à ce que l’image représente (quelques exemples: bg-chapitre1.jpg, lapin-vue-de-profil.svg, lapin-œil-droit.svg, icone-cœur.svg etc) </li>
             <li>Pas d’accents ou de caractères spéciaux dans les noms de fichiers </li>
             <li>Pas d’espace dans le nom de fichier </li>
             <li>Seulement des images en format web sont admises: <a href="https://developer.mozilla.org/en-US/docs/Web/Media/Formats/Image_types" target="_blank" rel="noopener noreferrer">Formats d'image Web.</a>  </li>
             <li>Assurez-vous et prévoyez tout de suite de NE PAS agrandir les images plus larges que leur taille de base (ça créerait une perte de qualité évidente à l’écran).  Si certaines images sont trop petites pour le projet, veuillez considérer les remplacer. Vous pourrez contrôler les dimensions maximum de vos éléments graphiques en CSS plus tard dans cette étape du projet.  Vos images d’arrière-plan doivent idéalement bien s’afficher sur un format Full HD en 1920x1080, sinon, considérez ajouter une largeur maximum sur vos balises <em>header</em> et <em>main</em> (si tel est le cas, vous devrez centrer ces 2 balises dans la page en CSS).</li>
         </ul>
     </li>
     <li>
        <h4>3- Classez toutes les images dans les dossier img du projet.</h4>
        <p>Classez toutes les images dans les dossiers tel qu’indiqué dans les consignes de “scafollding” de P2.2a. </p> 
    </li>
 </ul>


 <dots></dots>
 <grostitre>Instruction 2 – Les images dans chaque chapitre</grostitre>

 <h3>Requis HTML </h3>
 <checklist>Pour chaque chapitre, ajoutez les images qui sont prévues y apparaitre, y être animées ou seulement y être présentes de façon statique, par-dessus l’arrière-plan déjà en place. 
 Pour chaque image animable, créez une balise <em>img</em> avec une <em>classe</em> ou un <em>id</em> qui représente cet élément (attention, rappelez-vous qu’en HTML les <em>id</em> doivent être uniques).  N’oubliez pas d’inscrire le texte alternatif de l’image dans l’attribut <em>alt</em>.
 Dans certains cas, vous devrez faire des groupes d’images. Prenons le lapin donné en exemple précédement: il faudrait regrouper dans un <em>div</em> l’image du lapin ainsi que les 2 images de chaque oreille. Donc pour chaque groupe d’images lorsque jugé pertinent, assemblez-les dans un <em>div</em> et ajoutez lui une <em>classe</em> ou un <em>id</em>.
 </checklist>




 <h3>Requis CSS des images</h3>
 <checklist>Redimensionnez chaque élément graphique. <em>Voir ci-bas pour les instructions en détails.</em>
Assurez-vous que la taille de vos images soit responsive. <em>Voir ci-bas pour les instructions en détails.</em>
Ajoutez la propriété CSS <incode>position: relative</incode> à chaque <em>section</em> (chapitre) afin que tous les éléments qu’elle contient soient positionnés RELATIVEMENT à celle-ci et non pas à la page entière. <em>Voir ci-bas pour les instructions en détails.</em>
Positionnez chaque élément graphique dans son chapitre via <incode>position:absolute</incode> puis utilisez soit : <incode>top bottom left</incode> ou <incode>right</incode> pour les placer. <em>Voir ci-bas pour les instructions en détails.</em>
 </checklist>

 <h3 style="margin-top: 0;">Instructions détaillées des "Requis CSS des images":</h3>

<ul>
    <li>
        <h4>1- Redimensionnez chaque élément graphique.</h4>
        <p>Petit truc, étant donné que vous avez des svg et png avec arrière-plan transparent, je vous conseille d’ajouter temporairement une bordure autour de chaque image de votre projet, ça vous permettra de visualiser sa réellement dimension dans l’espace.</p>
        <incode>img { border: 1px solid rgba(218, 0, 0, 0.5); }</incode>
    </li>
    <li>
        <h4>2- Assurez-vous que la taille de vos images soit responsive.</h4>
        <p>Travaillez avec les unités viewport width (<em>vw</em>) pour les largeurs. Pour la hauteur, vous avez 2 choix (le choix peut dépendre de l’élément graphique) : </p>
        <ul>
            <li>Si vous souhaitez que l’image soit entière et non rognées à aucun moment, dépendant du format de l’écran, utilisez <incode>aspect-ratio</incode> pour conserver le ratio de vos éléments.  Vous pouvez réduire le ratio de votre image avec un réducteur de fraction (<a href="https://calculis.net/fraction" target="_blank" rel="noopener noreferrer">https://calculis.net/fraction</a>) en y entrant <em>la largeur en px divisé par la hauteur en px</em> de l'image originale. </li>
            <li>Si vous souhaitez que le cadre de l’image ait un format spécifique, peu importe le format de l’écran, vous pourriez alors forcer une hauteur et une largeur (toujours utiliser vw et/ou vh et non px) et ensuite travailler avec <incode>object-size</incode> et <incode>object-position</incode> pour “placer” l’image dans son cadre.  </li>
            <li>À vous de voir la technique qui convient le mieux dépendant des images et TESTEZ en redimensionnant votre fenêtre manuellement ou via l’inspecteur Web. </li>
        </ul>
    </li>
    <li>
        <h4>3- Ajoutez la propriété CSS <incode>position: relative</incode> à chaque section (chapitre) afin que tous les éléments qu’elle contient soient positionnés RELATIVEMENT à celle-ci et non pas à la page entière.</h4>
        <info><small>
            “Il est possible de définir le positionnement absolu d'un élément enfant par rapport au conteneur parent. Pour cela, il faut spécifier la propriété position avec sa valeur "relative" sur l'élément parent. Si nous ne spécifions pas la position de l'élément parent, l'élément enfant sera positionné par rapport à la page.”
            <br> Source: <a href="https://www.w3docs.com/snippets/css/how-to-set-absolute-positioning-relative-to-the-parent-element.html" target="_blank" rel="noopener noreferrer">Positionner un élément en absolu par rapport à un parent spécifique.</a>
        </small></info>

    </li>
    <li>
        <h4>4- Positionnez chaque élément graphique dans son chapitre via <incode>position:absolute</incode> puis utilisez soit : <incode>top bottom left</incode> ou <incode>right</incode></h4>
        <p>Travaillez avec les unités viewport width (<incode>vw</incode>) pour positionner sur l’axe des x et viewport height (<incode>vh</incode>) pour positionner sur l’axe des y, afin que tout soit “responsive”.  Comme rien n’est encore animé, préférez positionner vos éléments à leur position finale (après animation), ainsi avec plus tard, GSAP vous pourrez travailler avec la méthode <incode>from()</incode>. </p>
    </li>
</ul>





<dots></dots>
 <grostitre>Instruction 3 – Le contenu textuel dans chaque chapitre</grostitre>

 <checklist>Ajoutez un texte sur ce que vous avez à raconter, à chaque chapitre. Il n’est pas nécessaire d’être très long, une phrase suffit mais vous pouvez en dire davantage au besoin. Les textes doivent être unique à chaque étudiant. Vous pouvez personnaliser un peu votre histoire.  
Utilisez les balises appropriées pour vos texte (paragraphe, listes à puce, niveaux de titres etc) et ajoutez une classe au conteneur de chaque bloc texte. 
Stylisez votre texte (police de caractère, taille (<incode>vw</incode>, <incode>vh</incode>), dimension de la zone de texte etc) 
Positionnez votre zone de texte (toujours avec les unités <incode>vw</incode>, <incode>vh</incode>). Comme rien n’est encore animé, préférez positionner vos textes à leur position finale (après animation), ainsi avec plus tard, GSAP vous pourrez travailler avec la méthode <incode>from()</incode>. 
Si vous prévoyez scinder l’animation du texte en plusieurs parties, veuillez encadrer chaque partie indépendante avec une balise de type inline, telle que <incode>span</incode> ou autre.   
</checklist>





<dots></dots>
<grostitre>Instruction 4 – Animation de base de quelques images </grostitre>
 
<info>Veuillez ajouter “P2.2 B - INSTRUCTION 4” en commentaire HTML au-dessus des sections dans lesquelles vous avez créé ces animations de base).</info>

<alert>Veuillez noter que les instructions ici prévalent sur ce que vous avez prévu dans votre scénarimage à la phase de concept.  Il est très probable que vous ayez à changer quelques idées pour réaliser les requis minimums. N’hésitez pas à le faire! Il est intéressant de vous approprier l’histoire et le projet individuellement et de faire différent de vos co-équipiers éphémères de la phase concept. </alert>

<h3>Requis JavaScript pour les animations (minimum)</h3>

<warning>Veuillez noter: La synchronisation des animations avec le scroll, l’effet parallax, le morphing entre 2 formes simples, l’animation qui suit une trajection non linéaire, l’animation de composition /décomposition en couches, la forme qui se dessine et les transitions entre chapitres ne font PAS partie de cette remise. Elles feront partie de P2.3.</warning>


<checklist>Avec GSAP, animer l’entrée en scène de minimum 8 éléments graphiques ou personnage. Avec ces 8 animations uniques, créer au moins 2 timelines d’animation GSAP. Par définition, une timeline GSAP est représentée par plusieurs animations qui se succèdent ou qui ont une position relative ou absolue sur une ligne de temps commune. 
Ces animations peuvent être réalisées soit avec : <br> - un déplacement de position x, ou y ou les 2<br> - un changement d’échelle (comme pour simuler un zoom in/out)<br> - une distorsion (skew)<br> - une rotation<br> - un fondu enchaîné (opacité)<br> - l'animation de toute autre propriété CSS pertinente<br> - la combinaison de plusieurs des suggestions sus-mentionnées
Explorez les possibilités et amusez-vous!
Vous devez diversifier vos animations alors vous devriez avoir au moins 3 types d’animations distinctes parmi celles mentionnées dans la précédente liste.
</checklist>

<h3>En résumé pour le bloc des "Instruction 4", le requis minimum est:</h3>
<ul>
    <li>8 éléments graphiques animés </li>
    <li>2 timelines (ces timelines contiennent quelques-unes des 8 animations) </li>
    <li>3 types d’animations distinctes (parmi la liste susmentionnée au #2 des requis JavaScript pour les animations) </li>
</ul>
<dots></dots>



<dots></dots>
<grostitre>Instruction 5 – Requis d’identification des animations </grostitre>
<checklist>Dans le HTML de chaque chapitre, ajoutez le code HTML qui suit ce bloc d’instructions.  
Aussi, copiez le code CSS qui suit ce bloc d’instructions et collez-le dans votre fichier de styles: dans la section des styles généraux.
À chaque chapitre, dans la liste à puce <incode>ul.technique-gsap</incode> , vous devrez identifier les techniques d’animations que vous avez utilisées à l’intérieur de celui-ci. </checklist>


<h3>HTML dans chaque chapitre (copier-coller et compléter)</h3>


<highlight lang="css">&lt;ul class=&quot;technique-gsap&quot;&gt; 
    &lt;li&gt;...&lt;/li&gt; 
    &lt;li&gt;...&lt;/li&gt; 
    &lt;li&gt;scrollTrigger 
        &lt;ul&gt; 
            &lt;li&gt;trigger=&lt;/li&gt; 
            &lt;li&gt;...&lt;/li&gt; 
        &lt;/ul&gt; 
    &lt;/li&gt; 
&lt;/ul&gt; </highlight>

 
<h3>CSS à copier-coller</h3>
<highlight lang="css">ul.technique-gsap{
    background: rgba(0,0,0,0.3);
    color: white;
    font-size: 10px;
    font-family: monospace;
    font-weight: 400;
    width: auto;
    display: inline-block;
    padding: 10px 20px 12px 20px;
    margin: 0;
    max-width: 300px;
    position: absolute;
    z-index: 1000;
    top: 0;
    left: 0;
}

ul.technique-gsap li{
    margin: 5px 0;
}</highlight>


<dots></dots>
<grostitre>Remise</grostitre>
<p>Remettez ce devoir sur une nouvelle branche nommée P2-2</p>
<p>Déposez le lien de votre répertoire git individuel dans Devoir.</p>
