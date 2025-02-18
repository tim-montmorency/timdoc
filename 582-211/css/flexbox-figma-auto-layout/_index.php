<?php
/**
 * @type     article
 * @title    Flexbox - Figma Auto Layout
 * @icon     images/icon.webp
 * @abstract Devmode dans Figma, Auto Layout et Flexbox
 */
?>

<h3><strong>Séance : De Figma à Visual Studio Code – Auto-Layout et Flexbox</strong></h3>
<p>⏳ <strong>Durée :</strong> 1h30 (théorie) + 1h30 (pratique)<br>🎯 <strong>Objectifs :</strong></p>
<ul>
    <li>Comprendre et utiliser l'auto-layout dans Figma.</li>
    <li>Explorer le Dev Mode et la génération de code CSS (Flexbox).</li>
    <li>Intégrer le code généré dans Visual Studio Code et l’adapter pour une vraie interface web.</li>
    <li>Comprendre l’usage de Figma en industrie.</li>
</ul>

<dots></dots>
<h3><strong>1. Introduction à l’Auto-Layout dans Figma (30 min)</strong></h3>
<p>📌 <strong>Pourquoi utiliser l’auto-layout ?</strong></p>
<ul>
    <li>Facilite la gestion des espacements, alignements et tailles des éléments.</li>
    <li>Simule le comportement CSS (Flexbox).</li>
    <li>Optimisé pour le responsive design.</li>
</ul>
<p>🛠️ <strong>Démonstration en direct :</strong></p>
<ol>
    <li>Créer un cadre (Frame) et y ajouter un bouton.</li>
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

<dots></dots>
<h3><strong>2. Passage en Dev Mode et Extraction du Code CSS (30 min)</strong></h3>
<p>🔍 <strong>Présentation du Dev Mode</strong></p>
<ul>
    <li>Activer le mode développeur dans Figma.</li>
    <li>Explorer les propriétés CSS générées.</li>
    <li>Comprendre comment Figma traduit l’auto-layout en <code>display: flex</code>.</li>
</ul>
<p>🛠️ <strong>Démonstration :</strong></p>
<ol>
    <li>Sélectionner un élément et voir son code CSS généré.</li>
    <li>Comparer avec le code qu’on écrirait soi-même.</li>
    <li>Copier le code et l’analyser dans Visual Studio Code.</li>
</ol>
<p>💬 <strong>Discussion :</strong></p>
<ul>
    <li>Forces et limites du code généré.</li>
    <li>Pourquoi l’industrie ne copie-colle pas ce code tel quel ?</li>
</ul>

<dots></dots>
<h3><strong>3. Intégration dans Visual Studio Code (30 min)</strong></h3>
<p>📌 <strong>Objectif : Recréer l’interface avec un code propre.</strong><br>🛠️ <strong>Démonstration :</strong></p>
<ol>
    <li>Créer un fichier <code>index.html</code> et <code>style.css</code>.</li>
    <li>Structurer l’HTML (sections, divs, classes).</li>
    <li>Appliquer les styles avec Flexbox en s’inspirant du code généré par Figma.</li>
    <li>Ajuster les styles pour améliorer la propreté et la maintenabilité du code.</li>
</ol>
<p>💡 <strong>Analyse :</strong></p>
<ul>
    <li>Comparaison entre le code généré et celui écrit manuellement.</li>
    <li>Importance des bonnes pratiques (nomenclature, optimisation CSS).</li>
</ul>

<dots></dots>
<h3><strong>4. Comment l’Industrie Utilise Figma en Développement Web ? (30 min)</strong></h3>
<p>🛠️ <strong>Workflow en entreprise :</strong></p>
<ol>
    <li><strong>Designer</strong> → Création des maquettes dans Figma avec Auto-Layout.</li>
    <li><strong>Développeur</strong> → Exploration en Dev Mode pour récupérer les propriétés.</li>
    <li><strong>Intégration</strong> → Transposition dans HTML/CSS en adaptant le code généré.</li>
</ol>
<p>📌 <strong>Bonnes pratiques :</strong></p>
<ul>
    <li>Nommer et organiser ses calques proprement.</li>
    <li>Utiliser des styles globaux et des composants réutilisables.</li>
    <li>Travailler avec des variables CSS et des classes bien structurées.</li>
</ul>

<dots></dots>
<h3><strong>5. Atelier Pratique (1h30)</strong></h3>
<p>🎯 <strong>Exercice : Créer une carte de produit à partir d’un design Figma.</strong></p>
<ol>
    <li>Ouvrir un fichier Figma préparé avec une carte de produit (auto-layout activé).</li>
    <li>Extraire le code via Dev Mode.</li>
    <li>Reproduire cette carte en HTML/CSS en s’inspirant du code généré, mais en l’optimisant.</li>
    <li>Tester l’adaptabilité avec quelques modifications (ex. ajustement du flex-grow, ajout d’un breakpoint).</li>
</ol>
<p>💡 <strong>Débriefing :</strong></p>
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
