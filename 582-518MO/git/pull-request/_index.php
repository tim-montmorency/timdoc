<?php

/**
 * @type     article
 * @title    Pull Request dans Git
 * @icon     images/icon.svg
 * @abstract  Comprendre le concept de Pull Request dans Git
 * @index 10
 */
?>
<p>Dans le contexte de Git et des plateformes de développement collaboratif
    comme GitHub, GitLab ou Bitbucket, une "pull request" (PR) est une demande formelle pour fusionner des
    modifications d'une branche vers une autre, généralement vers la branche principale d'un projet.</p>
<p><strong>Voici comment ça fonctionne :</strong></p>

<dots></dots>
<grostitre>Le processus typique :</grostitre>
<ol>
    <li>Un développeur crée une nouvelle branche pour travailler sur
        une fonctionnalité ou corriger un bug</li>
    <li>Il fait ses modifications et les commit sur cette branche
    </li>
    <li>Il pousse (push) sa branche vers le dépôt distant</li>
    <li>Il ouvre une pull request pour proposer la fusion de sa
        branche vers la branche cible (souvent <code>main</code>
        ou <code>develop</code>)
    </li>
</ol>

<dots></dots>
<grostitre>Les avantages d'une pull request :</grostitre>
<ul>
    <li><strong>Révision de code</strong> : D'autres développeurs
        peuvent examiner les modifications avant qu'elles soient intégrées</li>
    <li><strong>Discussion</strong> : L'équipe peut commenter et
        discuter des changements proposés</li>
    <li><strong>Tests automatisés</strong> : Les systèmes
        d'intégration continue peuvent vérifier que le code fonctionne correctement</li>
    <li><strong>Traçabilité</strong> : Historique complet des
        modifications et des décisions prises</li>
</ul>

<dots></dots>
<grostitre>Note terminologique :</grostitre>
<ul>
    <li>GitHub utilise le terme "Pull Request"</li>
    <li>GitLab et d'autres plateformes utilisent plutôt "Merge
        Request"</li>
    <li>Le concept reste identique</li>
</ul>
<p>En gros, c'est un mécanisme de contrôle qualité qui permet de s'assurer que
    toutes les modifications passent par une validation avant d'être intégrées au code principal du projet.</p>
