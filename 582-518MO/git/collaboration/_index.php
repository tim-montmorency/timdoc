<?php

/**
 * @type     article
 * @title    Collaboration avec Git
 * @icon     images/icon.svg
 * @abstract Travailler plusieurs ensemble sur les même fichiers
 */
?>


          <p>Git permet de travailler à plusieurs simultanément sur un même projet. Pour ce faire, chaque développeur possède une copie du même&nbsp;<em>repo</em>&nbsp;sur son ordinateur et partage un&nbsp;<em>repo commun</em>&nbsp;en ligne, généralement sur <a target="_blank" rel="noopener noreferrer" href="/cours/git/github">GitHub</a>, afin de pousser leurs&nbsp;<code>commits</code>.</p><p>Ainsi, à chaque fois qu'un développeur 👩 effectue un&nbsp;<code>commit</code>&nbsp;et le&nbsp;<code>push</code>&nbsp;en ligne, son collègue 👨 reçoit une notification sur son logiciel de suivi GIT, par exemple <a target="_blank" rel="noopener noreferrer" href="/cours/git/github-desktop">GitHub Desktop</a>, l'avertissant que de nouveaux changements sont disponibles et l'invite à effectuer un&nbsp;<code>pull</code>.</p><p>Ce dit collègue 👨 peut attendre avant de récupérer les changements et continuer à travailler /&nbsp;<code>commiter</code>&nbsp;à sa guise. Cependant, <strong>Git bloquera toute tentative de&nbsp;</strong><code>push</code><strong>&nbsp;tant qu'il n'aura pas&nbsp;</strong><code>pullé</code>&nbsp;les changements disponibles en&nbsp;ligne.</p>

          <iframe src="./iframe/" width="100%" height="400px"></iframe>

<dots></dots>
<grostitre>Partage d'un repo</grostitre>


          <p>Bien qu'un&nbsp;<em>repo</em>&nbsp;soit public et que tous puissent le&nbsp;<a target="_blank" rel="noopener noreferrer" href="/cours/git/github">cloner</a>, il est impossible pour quiconque de modifier la version sur GitHub, à moins d'en être l'auteur ou d'en avoir obtenu la permission préalablement.</p><p>Évidemment, dans le cadre d'un projet d'équipe, il est primordial de pouvoir donner la permission de modifier le <em>repo</em> à ses collègues. Pour ce faire, il suffit d'aller sur la page <a target="_blank" rel="noopener noreferrer" href="https://github.com/">GitHub</a> du repo que l'on désire partager et de cliquer sur ⚙️ <em>Settings</em>. Ensuite dans l'onglet&nbsp;<em>Manage access</em>, il est possible de cliquer sur&nbsp;<em>Invite a collaborator</em>&nbsp;et de rechercher le ou les collègues désirés par:</p>

            <ul>
                <li>Nom d'usager GitHub</li>
                <li>Nom complet</li>
                <li>Courriel</li>
            </ul>

            <dots></dots>

            <grostitre>Conflits 🤼‍♂️  </grostitre>

          <p>À moins de toujours travailler en solo, aucun développeur n'échappe à la problématique d'avoir modifié le même fichier que l'un de ses&nbsp;collègues.</p><p>Sans GIT, il n'était pas rare qu'un développeur remplace le fichiers d'un de ses collègues sans réaliser qu'il effaçait du même coups les progrès de celui-ci. Même en portant attention et en tentant de combiner manuellement chaque ligne de code des deux fichier, il était fréquent que des erreurs ou oublies se produisent.</p><p>Heureusement GIT peut s'occuper de cette tâche pour nous! Puisque GIT surveille chaque changement dans un projet, il est en mesure de constater si un même fichier a été modifié par une autre personne depuis que nous avons commencer à le modifier. Le cas échéant, GIT sera même en mesure de dire si les lignes modifiées dans ce fichiers sont les mêmes.</p><p>Autrement dit, si une autre personne a travaillé dans le même fichier depuis la dernière fois que nous l'avons tiré, mais que cette personne a travaillé sur des lignes différentes, GIT combinera les deux fichiers automatiquement sans que personne ne perde aucun progrès ✨.</p><p>Si les lignes de code modifiées sont les mêmes, GIT créera alors ce que nous appelons un <em>"Conflit"</em>.</p>

          <dots></dots>

<h3>Résolution de conflit 👩‍❤️‍👨</h3>

          <p>Un conflit se produit lorsque nous tentons de pousser des nouveaux changements, alors que d'autres changements ont déjà étés effectués au même endroit sur le repo en lignes depuis la dernière fois que nous avons tiré.</p><p>Autrement dit, GIT nous informe qu'il sera impossible pour lui de garder le progrès de tout le monde, qu'une décision devra être prise et nous laisse le soin de faire ce choix.</p><p>GIT indiquera quel fichier est touché par le conflit et ajoute des commentaires dans celui-ci pour nous aider à les identifier.</p><p>Par exemple:</p>


          <highlight lang='html'>&lt;&lt;&lt;&lt;&lt;&lt;&lt; HEAD
Code écrit par le premier développeur 👩
=======
Code écrit par le deuxième développeur 👨
&gt;&gt;&gt;&gt;&gt;&gt;&gt;</highlight>
          
<p>Il est donc possible de choisir le code le plus pertinent et d'effacer l'autre ainsi que les commentaires.</p>
<info>Dans le but d’éviter autant que possible les conflits, ou du moins de les simplifier, il est conseillé de commiter et pousser régulièrement. <strong>Minimalement 1x par&nbsp;jour.</strong>
</info>
<br>
<p>👏 <a href="https://medium.com/@hritik.jaiswal/how-to-write-a-good-commit-message-9d2d533b9052" target="_blank">Comment écrire de bons messages de commit (illustré avec des memes)</a></p>
