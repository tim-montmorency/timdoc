 <?php

  /**
   * @type     article
   * @title    P1.2b - En équipe
   * @icon     images/icon.svg
   * @abstract Création du repo git
   */
  ?>

<grostitre>Requis en équipe</grostitre>
<h3>Création du repo GitHub</h3>

<checklist>
  Dans votre dossier de projet, certains sous-dossiers sont vides. Afin qu'ils puissent être transféré sur github, il faut qu'ils contiennent quelque chose. Pour contrer cette situation, créez un fichier readme.md dans chaque dossier vide.
Vous devez <a target="_blank" href="https://smnarnold.com/cours/git/github" onclick="event.stopPropagation()">créer un répertoire GitHub</a>&nbsp;intitulé&nbsp;<incode>[prenom1]-[prenom2]-app-festival-art</incode>.<br><br>Par exemple, si Bob et moi sommes coéquipiers, notre répertoire GitHub s'intitulera:&nbsp;<incode>bob-mariemichelle-app-festival-art</incode><br><br>Attention, celui-ci devra être en mode public et non privé 🚫. De plus, n'oubliez pas de cocher pour créer fichier README.
La personne ayant créé le répertoire avec son propre compte GitHub doit inviter son coéquipier afin que celui-ci puisse y avoir accès.
Vous devez ensuite cloner localement le répertoire du projet et y déposer les fichiers créés lors de votre devoir <a href="../p1-2a/" target="_blank" onclick="event.stopPropagation()">P1.2a</a>.
Puisque vous travaillez dans le local Mac, que le système d'exploitation MacOS crée des fichiers cachés <em>.DS_Store</em> et que ces fichiers ne devraient pas être inclus dans votre répertoire git, créez un fichier nommé <em>.gitignore</em> dans lequel vous allez simplement inscrire:<br><incode>#ignore ALL .DS_Store files created by MacOS<br>**/.DS_Store<br>.DS_Store</incode> <br><br>Ce fichier .gitignore devra être placé à la racine du dossier de votre projet.
Éditez le fichier README à la racine de votre dossier de projet. Utilisez que le langage MARKDOWN.<br> -Affichez le nom de votre choix de festival en tant de titre principal du markdown (heading niveau 1)<br> -Ajoutez ensuite le nom de ce cours suivi du nom du projet et d'un lien vers la page des instructions du projet. Exemple: <a href="https://tim-montmorency.com/timdoc/582-424MO/projet-app-festival-art-numerique/" target="_blank" onclick="event.stopPropagation()">Optimisation Web - Projet app d'un festival d'art numérique</a><br>- Ajoutez un sous-titre nommé "Équipe", ainsi qu'une liste à puce avec chacun des membres de l'équipe.
Faites un commit (bien nommé) et push vers GitHub.
Le 2e coéquipier, devra à son tour faire un clone du répertoire git sur son ordinateur.
Vous êtes maintenant prêts à faire un pull à nouveau, chacun de votre côté et vous assurer que vous partez tous du même pied.
</checklist>

<dots></dots>

<grostitre>Remise de P1.2</grostitre>
<p>Une fois tout complété (P1.2a, P1.2b, P1.2b App et P1.2 LP), créez une branche git nommée <em>P1-2</em> et publiez cette branche sur github.</p>
<p>Après la remise, vous ne touchez plus à cette branche. Vous devrez continuer sur la branche <em>main</em> et la branche P1-2 demeurera telle quelle afin que je puisse y faire votre évaluation. Les prochaines remises seront toujours sur des branches distinctes.</p>