<?php 
/**
 * @type     exercice
 * @title    Dashboard spatial
 * @icon     images/thumb.jpg
 * @abstract Pour cet exercice vous allez reproduire un centre de commandes spatial en utilisant les propriétés CSS vues en classe cette session du cours 1 à 5.
 */
?>



<alert>NOTE IMPORTANTE: Aucun outil de AI n'est permis pendant l'examen, en appli ou en ligne. Tout non-respect de cette règle ser traitée comme du plagiat. Vous devez aussi désactiver toutes les extensions dans Visual Studio Code. <br> <img src="../../../images/desactiver-extentions-vscode.png" alt="Extensions / ... / Désactiver toutes les extensions installées."></alert>

<p>Pour cet exercice vous allez compléter la mise en page d'un centre de commandes spatial en utilisant les propriétés
    CSS vues en classe cette session du cours 1 à 5.</p>

<dots></dots>
<grostitre>Aperçu du résultat 👇</grostitre>
<small>Pour contrôler la vidéo, clic-droit et "Afficher toute les commandes".</small>
<clipasset src='images/demo2.mp4'></clipasset>

<p>ou <a href="https://cmontmorency365-my.sharepoint.com/:v:/g/personal/mariem_ouellet_cmontmorency_qc_ca/EbS0Aotf2W1PtpFruQxHdpUBvE9lRt4J9oFi-bgFmCnXgw?e=agsXPX&nav=eyJyZWZlcnJhbEluZm8iOnsicmVmZXJyYWxBcHAiOiJTdHJlYW1XZWJBcHAiLCJyZWZlcnJhbFZpZXciOiJTaGFyZURpYWxvZy1MaW5rIiwicmVmZXJyYWxBcHBQbGF0Zm9ybSI6IldlYiIsInJlZmVycmFsTW9kZSI6InZpZXcifX0%3D" target="_blank" rel="noopener noreferrer">Lien vers la vidéo à afficher plein écran.</a></p>


<h3>Fichiers</h3>
<doclink href="/">Dossier de départ</doclink>

<h3>Couleurs 🎨</h3>
<table class="table-couleurs">
    <tr>
        <td>Turquoise</td>
        <td>
            <color>#64ffda</color>
        </td>
    </tr>
    <tr>
        <td>Bleu bébé</td>
        <td>
            <color>#64ddff</color>
        </td>
    </tr>
    <tr>
        <td>Fushia</td>
        <td>
            <color>#ff00fb</color>
        </td>
    </tr>
</table>


<!-- <color>#ccd6f6</color> -->
<dots></dots>



<info>Veuillez minimiser le plus possible le nombre de lignes CSS à écrire. Par exemple si vous avez à appliquer un
    style sur plusieurs éléments, vous pouvez regrouper les sélecteurs dans une même règle CSS.</info>


<warning>
    <p>Dans votre code CSS, vous devez situer le <em># du requis</em> et vous devez commenter <em>ce que vous faites</em>&nbsp;: expliquez ce que vous ciblez et ce que vous appliquez comme styles. Allez-y brièvement dans vos mots (bref ne pas copier-coller la consigne, vous devez démontrer que vous comprenenz ce que vous faites). Exemple: Voici un exemple:</p>

<highlight lang="css">/* Requis desktop #1 */  
/* Pseudo-classe de type xyz pour cibler abc et lui appliquer la couleur mauve et une bordure bleue. */  
.timeline:pseudoxyz{
  color: purple;
  border: 1px solid blue;
}
</highlight>

</warning>

<alert>Vous ne pouvez PAS modifier le HTML (excepté pour y inscrire votre nom). Vous devez n'écrire que dans la feuille de styles nommée: <strong>a-vous-de-jouer.css</strong></alert>

<thumbsup>Allez consulter les <a href="#criteres-devaluation-30">critères d'évaluation</a> en bas de page pour vous assurer de bien gérer vos effots et votre temps. Le requis #4 de la partie <strong>Desktop</strong> est probablement la partie sur laquelle vous allez mettre le plus de temps.</thumbsup>

<dots></dots>

<grostitre>Requis pour la version grand écran (desktop)</grostitre>

<checklist>
    Dans la balise <incode>title</incode> de la page HTML changez le texte <em>PRÉNOM NOM</em> par le votre.  Faites de même pour le pied de page: changez <em>Sarah Laliberté</em> pour le votre et ajustez le mot <em>Commandante</em> pour refléter votre genre.
    Importez la famille de police <em>Raleway</em> hébergée sur les services <em>Google Fonts</em> et appliquez la à toute la page.
    Importez la police de caractères <em>Orbitron</em> incluse dans le dossier polices du projet. Utilisez la méthode appropriée. Appliquez cette police à tous les niveaux de titres <incode>h1</incode>, <incode>h2</incode> etc. ainsi que sur les boutons de la page (<incode>button</incode>).
    <span class="red-label">L'instruction la + importante au niveau du travail à accomplir et de l'évaluation</span> <br> À l'aide de flexbox, placez les éléments de la page tel que démontré dans l'aperçu grand écran ( <em>DESKTOP</em>).
    Prenez le temps de constater la façon dont les éléments se replacent les uns par rapport aux autres: lorsque vous redimensionnez votre fenêtre en largeur et en hauteur, le résulat final doit se placer tel que démontré dans l'aperçu DESKTOP.
    Certains boutons du <incode>.control-panel</incode> ont une couleur d'arrière-plan différente, soit <incode>#64ddff</incode>. Veuillez utiliser une des techniques de sélecteur qu'on a veut cette session pour changer leur couleur. Vous ne devez utiliser un seul sélecteur. 
    Assurez-vous que la couleur d'arrière-plan du bouton au survol reste la même pour tous les boutons, soit <incode>#ff00fb</incode> (vous pouvez utilisez un autre sélecteur pour cela).
    Toujours au survol des ces boutons, la couleur de bordure et de l'ombre portée de la balise parent <incode>.dashboard</incode> revient rose <incode>#ff00fb</incode> pour la bordure et <incode>rgba(255, 0, 251, 0.5)</incode> pour l'ombre. Vous devez utiliser un sélecteur de pseudo-classe avancé approprié pour appliquer ces styles.
    La taille de texte du <incode>h1</incode> doit être relié à la largeur de la fenêtre du navigateur. Cependant, vous devez vous assurer de lui appliquer une taille minimum de <incode>1.4rem</incode> et maximum de <incode>2.2rem</incode> afin que le texte reste lisible et ne prenne pas toute la place.
    Faite de même pour le <incode>h2</incode> qui se trouve dans la section <incode>.main-display</incode> avec un minimum de <incode>1.3rem</incode> et un maximum de <incode>1.6rem</incode>.
</checklist>



<grostitre>Requis pour la version mobile</grostitre>
<checklist>
  Recherchez le <incode>@media</incode> dans le fichier <em>a-vous-de-jouer.css</em>, pour les requis mobile, vous devez écrire les exceptions  pour petits écrans à l'intérieur des accoladdes de ce média query.
  À l'aide de flexbox, placez les éléments de la page tel que démontré dans l'aperçu MOBILE.
  Prenez le temps de constater la façon dont les éléments se replacent les uns par rapport aux autres: lorsque vous redimensionnez votre fenêtre en largeur et en hauteur, le résulat final doit se placer tel que démontré dans l'aperçu MOBILE.

</checklist>



<dots></dots>
<grostitre>Critères d'évaluation (30%)</grostitre>


  <ul>

    <li>[8%] Sur grand écran (desktop), en mode statique (c'est-à-dire sans bouger la dimension de la fenêtre), chaque élément à positionner est identique à l'aperçu DESKTOP initial. La technique flexbox a été bien utilisée partout.</li>
    <li>[3.25%] Sur grand écran (desktop), en changeant la dimension de la fenêtre horizontalement ou verticalement, les éléments suivent ce qui est prévu initialement via l'aperçu DESKTOP. La technique flexbox a été bien utilisée partout.</li>
    <li>[4%] Sur écran mobile, chaque élément à positionner est identique à l'aperçu MOBILE initial. La technique flexbox a été bien utilisée partout.</li>
    <li>[4%] Les 2 polices de caratères sont bien importées et appliquées selon les consignes respectives pour chacune.</li>
    <li>[4%] Les boutons du <incode>.control-panel</incode> ont la bonne couleur d'arrière-plan et elle est appliquée en suivant les requis. Même chose pour l'effet sur le <incode>.dashboard</incode> au survol de ces boutons.</li>
    <li>[3.25%] Les tailles de texte du <incode>h1</incode> et du <incode>h2</incode> situé dans <incode>.main-display</incode> sont bien reliées à la largeur de la fenêtre en incluant la technique vue en classe pour appliquer une minimum et un maximum.</li>
    <li>[3.5%] <ul>
      <li>L'étudiant n'a pas fait de détour et a écrit, le plus possible, le code minimum pour arriver au résultat.</li>
      <li>Code CSS bien commenté, l'étudiant sait démontrer qu'il comprend ce qu'il fait via ses commentaires.</li>
      <li>Code bien indenté (alignement des propriétés CSS à l'intérieur des <incode>{ }</incode>).</li>
      <li>L'étudiant a utilisé des chemin d'accès relatifs et non absolus (qui débutent par /).</li>
    </ul>

  </ul>


