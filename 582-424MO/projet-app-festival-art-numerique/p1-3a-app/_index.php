 <?php

  /**
   * @type     article
   * @title    P1.3a App - Sections cartes
   * @icon     images/icon.svg
   * @abstract Sections oeuvres et performances
   */
  ?>

<grostitre>Note</grostitre>
<info>
  NE JAMAIS utiliser l’attribut <em>style</em> directement dans les balises HTML pour styliser vos éléments.<br><br>Soit, vous utilisez les classes utilitaires Bootstrap, soit vous stylisez vous-même avec des classes personnalisées dans <em>main.css</em> et/ou <em>styles-app.css</em> et/ou <em>styles-lp.css</em>.
</info>

<warning>Suivez toujours les instructions lorsqu'il est mentionné dans les instructions d'utiliser les classes utilitaires Bootstrap.</warning>


<dots></dots>
<grostitre>Section œuvres en vedette</grostitre>
<p>Aperçu du résultat pour la section œuvres en vedette👇</p>
<img src="images/app_featured_vedette.png" alt="Aperçu"  style="box-shadow: 5px 5px 20px rgba(0,0,0,0.1); max-width: 300px;">
<checklist>
Dans la balise <code>main</code>, dans le .container que vous avez précédemment créé, ajoutez une 3e section (sous les filtres). Cette section fera office de rangée Bootstrap. Ajoutez les classes qui sont de mise. 
Ajoutez-lui un titre de niveau 2 nommé <em>En vedette</em>. Cette section, vous comprendrez, listera les œuvres mis en vedette par le festival d’art. 
Sous le titre, créez 3 colonnes de largeur identique qui rempliront la rangée. 
Dans chaque colonne, (vous pouvez commencer par la première et ensuite faire un copier-coller dans les autres colonnes lorsque vous êtes satisfaits), créez une carte Bootstrap. Cette carte sera appliquée non pas sur un <code>div</code> mais sur une balise <code>a</code> afin qu’elle soit complètement cliquable. Ces liens doivent mener vers la future page : <em>artwork.html</em>. 
La carte contient une image de l’œuvre, tout en haut. Appliquez à l’image une hauteur de height: 20vh; afin que sa dimension soit adaptable avec la dimension de l’écran (vh = view height). Positionnez l’image dans son cadre avec la propriété <code>object-fit</code> et <code>object-position</code>. 
Sous l’image, le titre de l’œuvre.  
Note : n’oubliez pas d’ajouter les balises et classes nécessaires pour formatter une carte Bootstrap comme il se doit. 
- Sur une nouvelle ligne (rangée), ajoutez le mot “Par “ et le nom de l’artiste (s’il y en a plusieurs, séparez les noms par une virgule). 
- Sur une nouvelle ligne (rangée), groupez une icône de calendrier (icône Bootstrap) avec une date d’exposition. <br>- Groupez une icône d’horloge (icône Bootstrap) avec une heure de performance. <br>- Les 2 groupes doivent s’afficher sur la même ligne, avec un espace maximal entre les 2. Utilisez les classes utilitaires Bootstrap pour positionner selon les consignes. 
- Sur une nouvelle ligne, ajoutez une vignette de la photo de l’artiste. S’il y en a plusieurs, affichez les vignettes de chaque artiste une à côté de l’autre.  <br>- Sur cette même ligne, ajoutez un texte “Plus d’info” avec une icône de chevron (icône Bootstrap) qui pointe vers la droite.  <br>- Les 2 éléments (photo et plus d’info) doivent s’afficher sur la même ligne, avec un espace maximal entre les 2. Utilisez les classes utilitaires Bootstrap pour positionner selon les consignes. 
Stylisez la carte comme vous le souhaitez, tant que les conditions précédentes sont remplies. 
Ajoutez un effet de survol sur la carte. 
Lorsque vous êtes satisfait, vous pouvez dupliquer la première carte dans les 2 autres colonnes et ajuster son contenu pour les différentes œuvres. 
Donnez un <em>id</em> à cette section de la page et, dans votre feuille de style, affectez-lui la largeur de 140%. 
Les cartes de cette section spécifique, devront avoir une largeur maximum de 200px. Vous pouvez aussi réduire le <code>padding</code> à l’intérieur de celles-ci pour faire plus de place au contenu. Pour ce faire, vous pouvez aller écrire les styles directement dans votre feuille de style. Assurez-vous de ne cibler que les cartes de cette section. 
Afin d’éviter que la section qui dépasse maintenant la page ne force une scrollbar horizontale, ajoutez la propriété css <code>overflow-x: hidden;</code> à la balise body. 
Sur la rangée de la section actuelle, ajoutez une marge supplémentaire en bas avec les classes utilitaires Bootstrap.
Comme la largeur de l'écran d'un appareil mobile est restreint, il vaut mieux réduire la largeur des gouttières (gutters) entre les colonnes, ajoutez les classes Bootstrap en conséquence.
</checklist>




<h4>Notes de cours 📚</h4>
<intlink href="../../bootstrap/cartes"></intlink> 
<intlink href="../../bootstrap/utilitaires"></intlink> 
<intlink href="../../bootstrap/grille"></intlink> 





<dots></dots>
<grostitre>Section autres œuvres</grostitre>
<p>Aperçu du résultat pour Autres œuvres 👇</p>
<img src="images/app_other_artworks.png" alt="Aperçu"  style="box-shadow: 5px 5px 20px rgba(0,0,0,0.1); max-width: 300px;">

<checklist>
Dans la balise  <code>main</code>, dans le <code>.container</code> que vous avez précédemment créé, ajoutez une 4e section (sous la section des <em>Œuvres en vedette</em>). Cette section fera office de rangée Bootstrap. Ajoutez les classes qui sont de mise. 
Ajoutez-lui un titre de niveau 2 nommé <em> Autres œuvres et performances</em>. Cette section, vous comprendrez, listera de toutes les œuvres et performances qui ne sont pas en vedette. 
Ajoutez une colonne qui s’affichera sur toute la largeur de la rangée. 
Dans cette colonne, ajoutez 3 cartes, exactement configurées comme celle de la section précédente, cependant celle-ci n’auront pas de largeur maximale (donc le css que vous avez ajoutée aux cartes de la section précédente ne devrait pas affecter les cartes de cette section. 
Appliquez à l’image de la carte une hauteur de <code>height: 20vh;</code> afin que sa dimension soit adaptable avec la dimension de l’écran (vh = view height). Positionnez l’image dans son cadre avec la propriété <code>object-fit</code> et <code>object-position</code>. 
Ajustez le contenu de toutes vos cartes en y insérant les infos réelles 6 œuvres que vous avez sélectionnées en équipe, soient 3 qui sont promues en vedette et 3 dans la section autres.
</checklist>

<h4>Notes de cours 📚</h4>
<intlink href="../../bootstrap/cartes"></intlink> 
<intlink href="../../bootstrap/utilitaires"></intlink> 
<intlink href="../../bootstrap/grille"></intlink> 
