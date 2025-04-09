<?php
/**
 * @type     article
 * @title    Flexbox - Figma Auto Layout
 * @icon     images/icon.webp
 * @abstract Devmode dans Figma, Auto Layout et Flexbox
 */
?>


<h3><strong>Séance : De Figma à Visual Studio Code – Auto-Layout et Flexbox</strong></h3>
<hr>
<!-- <p style="margin-bottom: 0;">⏳ <strong>Durée :</strong> 1h30 (théorie) + 1h30 (pratique)<br> --> 🎯 <strong>Objectifs
        :</strong></p>
<ul style="margin-top: 0;">
    <li>Comprendre et utiliser l'auto-layout dans Figma.</li>
    <li>Explorer le Dev Mode et la génération de code CSS (Flexbox).</li>
    <li>Intégrer le code généré dans Visual Studio Code et l’adapter pour une vraie interface web.</li>
    <li>Comprendre l’usage de Figma en industrie.</li>
</ul>
<hr>



<dots></dots>
<grostitre>1. Auto-Layout dans Figma</grostitre>
<p>📌 <strong>Pourquoi utiliser l’auto-layout ?</strong></p>
<ul>
    <li>Facilite la gestion des espacements, alignements et tailles des éléments.</li>
    <li>Simule le comportement CSS (Flexbox).</li>
    <li>Optimisé pour le responsive design.</li>
    <li>La page s'ajustera de façon fluide au contenu, peu importe sa longueur, sa largeur.</li>
</ul>

<dots></dots>
<p><a href="https://www.figma.com/design/iUiwmQrCE7wneBx6k1OpZO/flexbox-demo?node-id=0-1&t=RERhHjRJq8BIaJdV-1" target="_blank" rel="noopener noreferrer">FICHIER DE DEMO</a></p>

<info>
    <p>Pour mieux comprendre l'auto-layout et son lien avec le principle de flexbox, veuille <strong>afficher les libellés dans les panneau de configuration de Figma</strong></p>
    <p><img src="images/menu-logo-figma.png" class="img-inline" alt=""> / View / Property labels</p>
    <clipasset src='images/figma-display-property-label.mp4'></clipasset>
</info>




<h3>🛠️ Démonstration : cadre de texte dynamique et bouton en <em>auto-layout</em></h3>
<checklist>
    Créer un cadre (frame) et y insérer 3 paragraphes <em>Lorem ipsum</em>.
    Sélectionner la boîte de texte. Dans la panneau <em>layout</em> à droite, ajuster la redimension automatique de la boite de texte sur (1) la largeur (auto-width) ou sur (2) la hauteur (auto-height): <br><img src="./images/ajuster-boite-au-texte.png" alt=""> Celle-ci s'ajustera automatiquement à la taille du texte, qu'on ajoute ou qu'on enlève un paragraphe. Sa dimension est maintenant dynamique.
    Créer un bouton (outil rectangle et arrondir les coins) et y inscrire du texte.
    À l'aide de l'outil <em>aligner</em> qui se trouve dans le panneau <em>Position</em> à droite, centrer verticalement et horizontalement le texte dans le bouton.
    Sélectionner le bouton et le texte et appliquer l'<em>auto-layout</em> (soit par le panneau <em>layout</em> à droite ou soit par le raccourci clavier <kbd>Shift</kbd>+<kbd>A</kbd>).
    Ajuster la padding horizontal à 50px <img src="images/padding-h-50.png" alt="" class="img-inline">
    Réduire la largeur du bouton plus petit que le texte et observer comment le texte s'ajuste à la taille du bouton.
    S'ajuste-t-il? Non. Il faudra changer la largeur fixe du bouton pour <em>hug content</em>. <img src="images/width-hug-content.png" alt="" class="img-inline">
    Changer maintenant le texte du bouton pour un texte plus long, observer ce qui se passe. La dimension du bouton s'ajuste maintenant à la largeur de son contenu.
</checklist>


<dots></dots>

<h3>Le panneau auto-layout dans Figma</h3>
<img src="images/panneau-auto-layout.png" alt="Panneau auto-layout est ses options" style="box-shadow: 0 0 10px rgba(0,0,0,0.05);">
<ul>
    <li><a href="https://cmontmorency365-my.sharepoint.com/:v:/g/personal/mariem_ouellet_cmontmorency_qc_ca/EdN3tKSngKhGpd_MhVJH9MUBWpKQkDPAcCvk2aSyEl8Z7Q?e=pH06Yt&nav=eyJyZWZlcnJhbEluZm8iOnsicmVmZXJyYWxBcHAiOiJTdHJlYW1XZWJBcHAiLCJyZWZlcnJhbFZpZXciOiJTaGFyZURpYWxvZy1MaW5rIiwicmVmZXJyYWxBcHBQbGF0Zm9ybSI6IldlYiIsInJlZmVycmFsTW9kZSI6InZpZXcifX0%3D" target="_blank" rel="noopener noreferrer">Capsule vidéo partie 1:</a>
        <ul>
            <li>Activation de l'auto-layout sur des contenus sélectionnés.</li>
            <li>Gestion de la dimension du conteneur parent.</li>
            <li>Principe du <em>hug content</em>.</li>
        </ul>
    </li>
    <li><a href="https://cmontmorency365-my.sharepoint.com/:v:/g/personal/mariem_ouellet_cmontmorency_qc_ca/EV91i5VnU3xLo-4uagzhl14B5V-Kw4qoYv84mQ-8Fjg92Q?e=YKfWaL&nav=eyJyZWZlcnJhbEluZm8iOnsicmVmZXJyYWxBcHAiOiJTdHJlYW1XZWJBcHAiLCJyZWZlcnJhbFZpZXciOiJTaGFyZURpYWxvZy1MaW5rIiwicmVmZXJyYWxBcHBQbGF0Zm9ybSI6IldlYiIsInJlZmVycmFsTW9kZSI6InZpZXcifX0%3D"
    target="_blank" rel="noopener noreferrer">Capsule vidéo partie 2:</a> 
        <ul>
            <li>gap (espace entre les éléments enfants)</li>
            <li>flex-direction (row, column)</li>
            <li>flex-wrap (no-wrap, wrap)</li>
            <li>Alignement (flex-start, flex-end, center etc)</li>
            <li>padding (marge intérieure du conteneur parent)</li>
            <li>clip-content (overflow: visible ou hidden)</li>
        </ul>
    </li>
</ul>

<dots></dots>
<h3>Suite de la démo</h3>
<p><a href="https://www.figma.com/design/iUiwmQrCE7wneBx6k1OpZO/flexbox-demo?node-id=0-1&t=RERhHjRJq8BIaJdV-1" target="_blank" rel="noopener noreferrer">FICHIER DE DEMO</a></p>
<p>Flexbox sur parent: Autres exemples de placements en explorant le panneau d'<em>auto-layout</em></p>
<img src="images/demo-flexbox-autolayout-suite2.png" alt="">
<p>Explorons aussi les propriétés auto-layout (flexbox) sur les éléments enfants, tels que <incode>flex-grow</incode>, <incode>flex-shrink</incode>, <incode>flex-basis</incode> (et <incode>flex</incode> qui est le raccourcis des 3 propriétés).</p>
<img src="images/demo-flexbox-autolayout-suite3.png" alt="">


<!--<dots></dots>

<h3>🛠️ <strong>Démonstration 2 :</strong></h3>
<ol>
    <li>Créer un cadre (frame) et y ajouter un bouton.</li>
    <li>Activer l’auto-layout et modifier :
        <ul>
            <li>Direction (row / column)</li>
            <li>Alignement (start, center, end)</li>
            <li>Espacement entre éléments</li>
            <li>Padding et dimensionnement</li>
            <li>Gap et distribution des éléments</li>
        </ul>
    </li>
    <li>Appliquer l’auto-layout à un composant plus complexe (ex. une carte de produit).</li>
</ol>
<p>💡 <strong>Discussion :</strong> Comment cela se traduit en CSS ? (Évocation rapide de Flexbox)</p>
 -->


<dots></dots>
<grostitre>2. Passage en Dev Mode et extraction du code CSS</grostitre>
<p>🔍 <strong>Présentation du Dev Mode</strong></p>
<ul>
    <li>Activer le mode développeur dans Figma.</li>
    <li>Explorer les propriétés CSS générées.</li>
    <li>Comprendre comment Figma traduit l’auto-layout en <code>display: flex</code>.</li>
</ul>
<clipasset src='images/activer-devmode.mp4'></clipasset>
<p>🛠️ <strong>Démonstration :</strong></p>
<ol>
    <li>Sélectionner un élément et voir son code CSS généré.</li>
    <li>Analyser quelques exemples.</li>
    <li>Comparer avec le code qu’on écrirait soi-même.</li>
</ol>
<!-- 
<p>💬 <strong>Discussion :</strong></p>
<ul>
    <li>Forces et limites du code généré.</li>
    <li>Pourquoi l’industrie ne copie-colle pas ce code tel quel ?</li>
</ul> -->


<dots></dots>
<grostitre>3. Intégration dans VS Code</grostitre>
<p>📌 <strong>Objectif : Recréer l’interface avec un code propre.</strong></p>

<p>🛠️ <strong>Démonstration :</strong></p>
<ol>
    <li>Créer un fichier <code>index.html</code> et <code>style.css</code>.</li>
    <li>Structurer l’HTML (sections, divs, classes).</li>
    <li>Appliquer les styles avec Flexbox en s’inspirant du code généré par Figma.</li>
    <li>Ajuster les styles pour améliorer la propreté et la maintenabilité du code.</li>
</ol>

<!-- 
<p>💡 <strong>Analyse :</strong></p>
<ul>
    <li>Comparaison entre le code généré et celui écrit manuellement.</li>
    <li>Importance des bonnes pratiques (nomenclature, optimisation CSS).</li>
</ul> -->

<dots></dots>
<h3>Extention à installer maintenant sur vos Visual&nbsp;Studio&nbsp;Code</h3>
<tool href="./tools/figma-for-vscode/"></tool>
<doclink href='https://help.figma.com/hc/fr/articles/15023121296151-Figma-pour-VS-Code'>Apprendre à utiliser l'extension
    <strong>Figma pour VS Code</strong> (en français)</doclink>


<dots></dots>
<grostitre>4. Comment l’industrie utilise Figma en développement Web ?</grostitre>
<p>🛠️ <strong>Workflow en entreprise :</strong></p>
<ol>
    <li><strong>Designer</strong> → Création des maquettes dans Figma avec Auto-Layout.</li>
    <li><strong>Développeur</strong> → Exploration en Dev Mode pour récupérer les propriétés.</li>
    <li><strong>Intégration</strong> → Transposition dans HTML/CSS en adaptant le code généré.</li>
</ol>
<br><br>
<p>📌 <strong>Bonnes pratiques :</strong></p>
<ul>
    <li>Nommer et organiser ses calques proprement.</li>
    <li>Utiliser des styles globaux et des composants réutilisables.</li>
    <li>Travailler avec des variables CSS et des classes bien structurées.</li>
</ul>

<dots></dots>
<grostitre>5. Exercice</grostitre>

<h3>🎯Exercice : Créer une carte de produit à partir d’un design Figma.</h3>

<p><a href="https://www.figma.com/design/7Rzzo8tlV6FEfXH88Ut5fT/Exercice-auto-layout-carte-conference?node-id=0-1&t=3kI6keJV9zCLwN6s-1" target="_blank" rel="noopener noreferrer">Fichier de départ</a> (copiez ou dupliquez le dans votre Figma personnel pour démarrer).</p>

<h4>Aperçu du résultat dans Figma (lorqu'en HTML/CSS, le comportement responsive devrait aussi être le même)</h4>
<clipasset src='images/demo-exercice-autolayout-carte.mp4'></clipasset>
<checklist>Ouvrir le fichier Figma et copier ou dupliquer la carte de la salle de conférence pour démarrer un fichier dans votre compte Figma personnel.
    Préparer des auto-layouts: sur la carte et sur les groupes d'éléments pour faire en sorte qu'elle s'adapte en fonction de la démo ci-haut, lorsque redimensionnée. <br> <em>Votre tâche est facilitée puisque que la plupart des éléments sont déjà groupés ensemble. Vous n'aurez qu'à activer l'auto-layout principal et les sous auto-layouts et ajuster les paramètres pour chacun.</em> 
    Extraire le code via Dev Mode.
    Dans VS Code, reproduire cette carte en HTML/CSS en s’inspirant du code généré, mais en l’optimisant.
    Tester l’adaptabilité avec quelques modifications (ex. ajustement du flex-grow, ajout d’un breakpoint).
</checklist>


<!-- <p>💡 <strong>Débriefing :</strong></p>
<ul>
    <li>Quels défis avez-vous rencontrés ?</li>
    <li>Comment améliorer le workflow entre Figma et le code ?</li>
</ul>

<dots></dots>
<p>🔚 <strong>Conclusion &amp; Ressources Supplémentaires</strong></p>
<ul>
    <li>Références : Documentation Figma Dev Mode, CSS Tricks Flexbox Guide.</li>
    <li>Pour aller plus loin : Utilisation conjointe de Figma et Tailwind CSS, intégration avec React/Vue.js.</li>
</ul>
 -->



<dots></dots>
<grostitre>Pour en savoir plus</grostitre>


<h3>L'auto-layout dans Figma</h3>
<youtube src="3XIQZrrhx-I"></youtube>
<small>En anglais mais vous pouvez ajouter les sous-titres français.</small> <br> <br>
+ <a href="https://www.figma.com/community/file/1419019707467348375" target="_blank" rel="noopener noreferrer">Fichier
    de travail pour suivre l'atelier</a> <br>



<dots></dots>
<h3>Flexbox via l'auto-layout et le Dev&nbsp;mode dans Figma</h3>
<youtube src="Pi6MipIG5iI"></youtube>
<small>En anglais mais vous pouvez ajouter les sous-titres français.</small>
