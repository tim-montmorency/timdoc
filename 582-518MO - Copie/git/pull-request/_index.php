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
    comme GitHub, GitLab, Codeberg ou Bitbucket, une <em>"pull request" (PR)</em> est une <em>demande formelle pour fusionner des
    modifications d'une branche vers une autre</em>, généralement vers la branche principale d'un projet.</p>

<h3>Voici comment ça fonctionne :</h3>

<dots></dots>
<grostitre>Le processus typique :</grostitre>
<ol>
    <li>Un développeur crée une <em>nouvelle branche</em> pour travailler sur
        une fonctionnalité ou corriger un bug</li>
    <li>Il fait ses modifications et les <em>commit</em> sur cette branche
    </li>
    <li>Il pousse (<em>push</em>) sa branche vers le dépôt distant</li>
    <li>Il ouvre une <em>pull request</em> pour proposer la fusion de sa
        branche vers la branche cible (souvent <incode>main</incode>
        ou <incode>develop</incode>)
    </li>
</ol>

<dots></dots>
<grostitre>Les avantages d'une pull request :</grostitre>
<ul>
    <li><em>Révision de code</em> : D'autres développeurs
        peuvent examiner les modifications avant qu'elles soient intégrées</li>
    <li><em>Discussion</em> : L'équipe peut commenter et
        discuter des changements proposés</li>
    <li><em>Tests automatisés</em> : Les systèmes
        d'intégration continue peuvent vérifier que le code fonctionne correctement</li>
    <li><em>Traçabilité</em> : Historique complet des
        modifications et des décisions prises</li>
</ul>

<dots></dots>
<grostitre>Note terminologique :</grostitre>
<ul>
    <li>GitHub et Codeberg utilisent le terme <em>Pull Request</em></li>
    <li>GitLab et d'autres plateformes utilisent plutôt <em>Merge
        Request</em></li>
    <li>Le concept reste identique</li>
</ul>

<dots></dots>
<p>En gros, c'est un <em>mécanisme de contrôle qualité</em> qui permet de s'assurer que
    toutes les modifications passent par une validation avant d'être intégrées au code principal du projet.</p>
