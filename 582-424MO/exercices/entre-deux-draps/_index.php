<?php

/**
 * @type     exercice
 * @title    Entre deux draps
 * @icon     images/thumb.png
 * @abstract Pour cet exercice, vous allez recréer un “spinoff” de la page promotionnelle de la série québécoise Entre deux draps de novoo.ca.
 */
?>



<p>Pour cet exercice, vous allez recréer un <em>“spinoff”</em> de la page promotionnelle de la série québécoise <a
        href="https://noovo.ca/emissions/entre-deux-draps">Entre deux draps&nbsp;de&nbsp;novoo.ca</a>.</p>



<p>Aperçu du résultat 👇</p>


<img src="https://smnarnold.com/assets/exercices/noovo-apercu-1640018042.png" width="800" height="519" alt=""
    loading="lazy" class="image__image">


<grostitre>Matériel</grostitre>
<doclink href="fichiers/nom_prenom_entre-deux-draps.zip">Dossier de départ 📁</doclink>




<h3 id="Couleurs">Couleurs 🎨</h3>
<table class="table-couleurs">
    <tr>
        <td>Bleu</td>
        <td>
            <color>#2a39e2</color>
        </td>
    </tr>
    <tr>
        <td>Bleu foncé</td>
        <td>
            <color>#082E98</color>
        </td>
    </tr>
    <tr>
        <td>Bleu vif</td>
        <td>
            <color>#343bff</color>
        </td>
    </tr>
    <tr>
        <td>Gris pâle</td>
        <td>
            <color>#8d8d99</color>
        </td>
    </tr>
    <tr>
        <td>Gris</td>
        <td>
            <color>#757580</color>
        </td>
    </tr>
    <tr>
        <td>Noir charbon</td>
        <td>
            <color>#242526</color>
        </td>
    </tr>
    <tr>
        <td>Noir nuit</td>
        <td>
            <color>#18181A</color>
        </td>
    </tr>
</table>


<h3 id="Medias">Médias</h3>
<mediafile
    src="https://fonts.google.com/specimen/Poppins?preview.text_type=custom&preview.text=Vous%20%C3%AAtes%20capable,%20vous%20allez%20r%C3%A9ussir!">
    Police Poppins</mediafile>

<warning>Les propriétés CSS <code>position</code> et <code>transform</code> seront inutiles. La mise en page sera réalisée entièrement grâce&nbsp;à&nbsp;Bootstrap.</warning>


<dots></dots>

<grostitre>Requis généraux</grostitre>

<checklist>Ajoutez Bootstrap 5 au projet (via CDN).
Le texte régulier doit avoir une taille de 16px.
Ajoutez la&nbsp;police Google Poppins Semi-bold 600&nbsp;au projet. Cette fonte sera utilisée pour les titres et le logo textuel du&nbsp;site.</checklist>



<dots></dots>

<grostitre>Navigation</grostitre>
<checklist>Utilisez une&nbsp;navbar Bootstrap&nbsp;avec la balise&nbsp;appropriée.
Le fond doit-être un&nbsp;dégradé&nbsp;vers la droite partant de la couleur&nbsp;#082e7f&nbsp;vers&nbsp;#343bff.
Ajustez le thème de couleur&nbsp;de la navbar de sorte que le texte soit facilement&nbsp;lisible.
Changez d'affichage&nbsp;vers la navigation complète à partir du breakpoint&nbsp;<code>lg</code>.
Ajoutez le&nbsp;logo textuel&nbsp;<em>"noovo"</em>. Ce logo doit utiliser la fonte Poppins et avoir une taille de&nbsp;22px.
Ajoutez les liens suivants afin de constituer&nbsp;la&nbsp;navigation. Faites pointer tous leurs href vers&nbsp;<em>"#"</em>':<br>- Émissions<br>- Horaire<br>- En direct<br>- Films<br>- Concours<br>- Plus
Transformez le dernier lien&nbsp;<em>"Plus"</em>&nbsp;en&nbsp;menu déroulant&nbsp;permettant d'avoir accès aux liens&nbsp;suivants:<br>- Articles<br>- Recettes<br>- Quiz</checklist>

<dots></dots>

<grostitre>Bandeau Équipe de production</grostitre>
<checklist>Le bandeau doit avoir une hauteur de&nbsp;50px.
Le texte&nbsp;<em>"Équipe de production"</em>&nbsp;doit-être centré&nbsp;verticalement.
La couleur de fond doit-être&nbsp;bleu vif et le texte&nbsp;blanc.</checklist>









<dots></dots>

<grostitre>Héros</grostitre>
<checklist>Le fond doit-être un&nbsp;dégradé&nbsp;vers le bas partant de bleu foncé&nbsp;vers&nbsp;bleu 🔵.
    Par défaut, l'image&nbsp;<code>noovo.webp</code> 🌄&nbsp;dans le dossier&nbsp;<code>img</code>&nbsp; 📁 doit prendre toute la largeur.
    Par défaut, le texte suivant doit prendre toute la largeur:<br><br><strong>Titre:</strong>&nbsp;<em>"Entre deux draps"</em><br><strong>Description:</strong>&nbsp;<em>"ENTRE DEUX DRAPS est une comédie à sketchs de 10 épisodes de 30 minutes présentant le quotidien de quatre couples et deux colocs d’âges et de milieux différents."</em>
    Le titre doit avoir une taille de&nbsp;22px et un espace de 20px doit être présent en haut du titre afin qu'il ne touche pas à&nbsp;l'image.
    À partir du breakpoint&nbsp;<code>lg</code>&nbsp;le texte et l'image doivent être juxtaposés un à côté de l'autre.
    Le texte doit prendre un tiers de la largeur et afficher en premier tandis que l'image doit afficher en second et prendre le reste de la&nbsp;largeur.</checklist>
<p><strong>Copiez le contenu ici :</strong></p>
<p>Titre:&nbsp;<em>"Entre deux draps"</em><br>Description:&nbsp;<em>"ENTRE DEUX DRAPS est une comédie à sketchs de 10
        épisodes de 30 minutes présentant le quotidien de quatre couples et deux colocs d’âges et de milieux
        différents."</em></p>






<dots></dots>

<grostitre>Présenté par</grostitre>
<checklist>Doit avoir un fond&nbsp;blanc.
    Le texte&nbsp;<em>¨Présenté par:¨</em>&nbsp;doit être en majuscule, avoir une taille de 12px et être gris.
    Utilisez une balise <code>picture</code> afin d'afficher par défaut l'image&nbsp;<code>college-logo-vertical.png</code> 🌄. À partir de 576px de large, la source de cette image doit-être remplacé par l'image&nbsp;<code>college-logo-horizontal.png</code>.
</checklist>




<dots></dots>
<grostitre>Épisodes</grostitre>

<checklist>Cette&nbsp;section&nbsp;doit avoir un fond&nbsp;de couleur noir charbon ⚫️ et avoir un espace vide de 30px dans le haut et le&nbsp;bas.
    Le titre de la section&nbsp;<em>"Épisodes"</em>&nbsp;doit être blanc, avoir une taille de 22px et être en&nbsp;majuscules.
    Chaque&nbsp;carte&nbsp;doit prendre toute la largeur par défaut. À partir du breakpoint&nbsp;<code>md</code>&nbsp;elles doivent prendre la moitié et à partir de&nbsp;<code>lg</code>&nbsp;le&nbsp;tier.
    Les cartes ne doivent pas avoir de couleur de fond ni de&nbsp;bordure.
    Chaque image doit prendre toute la largeur de sa&nbsp;carte.
    Les titres doivent être blancs et avoir une taille de&nbsp;18px.
    Les descriptions avoir la couleur gris pâle&nbsp;et une taille de&nbsp;14px.
    Les pieds de carte doivent avoir un fond&nbsp;de couleur noir nuit ⚫️.

</checklist>
<p><strong>Copiez le contenu ici:</strong></p>
<ul>
    <li>
        <p><strong>Carte 1</strong></p>
        <p>Titre:&nbsp;<em>"Le flash qui tue"<br></em>Description:&nbsp;<em>"Tout le monde a des projets. Simon,
                fortement intoxiqué, a le flash du siècle. Un mort pourrait nuire au rêve de Luc et Virginie se demande
                comment se débarrasser d'un corps."<br></em>Pied de carte:&nbsp;<em>"S1E6 | Mercredi 17 février
                2021"</em></p>
    </li>
    <li>
        <p><strong>Carte 2</strong></p>
        <p>Titre:&nbsp;<em>"Entre le fantasme et la déception"<br></em>Description:&nbsp;<em>"Thomas rencontre son
                fantasme de jeunesse, alors que Simon veut retrouver la sienne. Marco espère avoir une deuxième chance
                comme acteur pendant que Lydia soupçonne Antoine d'avoir une double vie."<br></em>Pied de
            carte:&nbsp;<em>"S1E5 | Mercredi 10 février 2021"</em></p>
    </li>
    <li>
        <p><strong>Carte 3</strong></p>
        <p>Titre:&nbsp;<em>"Le regard des autres"<br></em>Description:&nbsp;<em>"Tout le monde a peur. Pour Florence, ce
                sont les monstres. Marie-Ève c'est ce qu'elle trouve dans ses draps. Thomas a peur d'être un salaud et
                Lydia d'avoir tué Antoine."<br></em>Pied de carte:&nbsp;<em>"S1E4 | Mercredi 3 février 2021"</em></p>
    </li>
</ul>






<!--

<dots></dots>
<grostitre>Pied de page</grostitre>

<checklist>Le pied de page doit utiliser la&nbsp;balise&nbsp;appropriée, son texte doit être blanc, avoir une couleur de fond&nbsp;noir nuit ⚫️&nbsp;et se garder un espace vide de 15px dans le haut et le&nbsp;bas.
Par défaut les textes&nbsp;<em>"TIM Montmorency"</em>&nbsp;et&nbsp;<em>"© 2021"</em>&nbsp;doivent être centrés un au-dessus de l'autre. À partir du breakpoint&nbsp;<code>sm</code>, ils doivent être affichés un à côté de l'autre. Le 1<sup>er</sup>&nbsp;aligné complètement à gauche et le 2<sup>e</sup>&nbsp;complètement à&nbsp;droite.
</checklist> -->

<dots></dots>

<grostitre>Remise</grostitre>
<p>Pas de remise. C'est un exercice.</p>
<!--
<checklist>Renommez votre dossier de travail 📁 au
    format&nbsp;suivant:<br><code>[nom de famille]_[prénom]_entre-deux-draps</code><br>ex:
    <em>ouellet_mariemichelle_entre-deux-draps</em>
    Compressez ensuite votre dossier de travail en <a href="https://www.ezyzip.com/" target="_blank"
        rel="noopener noreferrer">fichier&nbsp;zip 🗜</a>
    Envoyez-moi un <a href="https://teams.microsoft.com/l/chat/0/0?users=mariem.ouellet@cmontmorency.qc.ca"
        target="_blank" rel="noopener noreferrer">message privé sur Teams</a> contenant votre fichier&nbsp;zip.
</checklist>
    -->