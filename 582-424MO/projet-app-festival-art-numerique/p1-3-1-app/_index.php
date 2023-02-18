 <?php

  /**
   * @type     article
   * @title    P1.3.1 App - Sections cartes
   * @icon     images/icon.svg
   * @abstract Sections oeuvres et performances
   */
  ?>

<grostitre>Note pour tous</grostitre>
<p>JAMAIS d’attribut <em>style</em> directment dans les balises HTML. Soit vous utilisez les classes utilitaires Bootstrap, soit vous stylisez vous-même avec des classes custom, via votre feuille de styles. Suivez les instructions lorsqu'il est mentionné d'utiliser les classes utilitaires Bootstrap.</p>


<dots></dots>
<grostitre>Section œuvres en vedette</grostitre>
<p>Aperçu du résultat pour la section œuvres en vedette👇</p>
<img src="images/app_featured_vedette.png" alt="Aperçu"  style="box-shadow: 5px 5px 20px rgba(0,0,0,0.1); max-width: 300px;">
<checklist>
Dans la balise main, dans le container que vous avez précédemment créé, ajoutez une 3e section (sous les filtres). Cette section fera office de rangée Bootstrap. Ajoutez les classes qui sont de mise. 
Ajoutez-lui un titre de niveau 2 nommé <em>En vedette</em>. Cette section, vous comprendrez, listera les œuvres mis en vedette par le festival d’art. 
Sous le titre, créez 3 colonnes de largeur identique qui remplira la rangée. 
Dans chaque colonne, (vous pouvez commencer par la première et ensuite faire un copier-coller dans les autres colonnes lorsque vous êtes satisfaits), créez-vous une carte Bootstrap. Cette carte sera appliquée non pas sur un div mais sur une balise a afin qu’elle soit complètement cliquable. Ces liens doivent mener vers la future page : artwork.html. 
La carte contient une image de l’œuvre, tout en haut. Appliquez à l’image une hauteur de height: 20vh; afin que sa dimension soit adaptable avec la dimension de l’écran (vh = view height). Positionnez l’image dans son cadre avec la propriété object-fit et object-position. 
Sous l’image, le titre de l’œuvre.  
Note : n’oubliez pas d’ajouter les balises et classes nécessaires pour formatter une carte Bootstrap comme il se doit. 
Sur une nouvelle ligne, ajoutez le mot “Par “ et le nom de l’artiste (s’il y en a plusieurs, séparez les noms par une virgule). 
Sur une nouvelle ligne encore, grouper une icône de calendrier (icône Bootstrap) avec une date d’exposition et grouper une icône d’horloge (icône Bootstrap) avec une heure de performance. Les 2 groupes doivent s’afficher sur la même ligne, avec un espace maximal entre les 2. Utilisez les classes utilitaires Bootstrap pour positionner selon les consignes. 
Sur une nouvelle ligne, ajoutez une vignette de la photo de l’artiste, s’il y en a plusieurs, affichez les vignettes de chaque artiste une à côté de l’autre.  Sur cette même ligne, ajoutez un texte “Plus d’info” avec une icône de chevron (icône Bootstrap) qui pointe vers la droite.  Les 2 élément (photo et plus d’info) doivent s’afficher sur la même ligne, avec un espace maximal entre les 2. Utilisez les classes utilitaires Bootstrap pour positionner selon les consignes. 
Stylisez la carte comme vous le souhaitez par la suite, tant que les conditions précédentes sont remplies. Aussi ajoutez un effet hover sur la carte. Lorsque vous êtes satisfait, vous pouvez dupliquer la première carte dans les 2 autres colonnes et ajuster sontcontenu pour les différentes œuvres. 
Donnez un id à cette section de la page et, dans votre feuille de style, affectez lui la largeur de 140%. 
Les cartes de cette section spécifique, devront avoir une largeur maximum de 200px. Vous pouvez aussi réduire le padding à l’intérieur de celles-ci pour faire plus de place au contenu. Pour ce faire, vous pouvez aller écrire les styles directement dans votre feuille de style. Assurez-vous de ne cibler que les cartes de cette section. 
Afin d’éviter que la section qui dépasse maintenant la page ne force une scrollbar horizontale, ajoutez la propriété css overflow-x: hidden; à la balise body. 
Sur la rangée de la section actuelle, si vous souhaitez ajouter une marge en haut et en bas, ainsi que réduire la largeur les gouttières entre les colonnes, ajoutez les classes Bootstrap en conséquence.   
</checklist>

<h4>Notes de cours 📚</h4>
<?php intlink("../../bootstrap/cartes") ?> 
<?php intlink("../../bootstrap/utilitaires") ?> 
<?php intlink("../../bootstrap/grille") ?> 
<dots></dots>
<grostitre>Section autres oeuvres</grostitre>
<p>Aperçu du résultat pour autres oeuvres👇</p>
<img src="images/app_other_artworks.png" alt="Aperçu"  style="box-shadow: 5px 5px 20px rgba(0,0,0,0.1); max-width: 300px;">

<checklist>
Dans la balise main, dans le container que vous avez précédemment créé, ajoutez une 4e section (sous la section des œuvres en vedette). Cette section fera office de rangée Bootstrap. Ajoutez les classes qui sont de mise. 
Ajoutez-lui un titre de niveau 2 nommé <em> Autres œuvres et performances</em>. Cette section, vous comprendrez, listera de toutes les œuvres et performances qui ne sont pas en vedette. 
Ajoutez une colonne qui s’affichera sur toute la largeur de la rangée. 
Dans cette colonne, ajoutez 3 cartes, exactement configurées comme celle de la section précédente, cependant celle-ci n’auront pas de largeur maximale (donc le css que vous avez ajoutée aux cartes de la section précédente ne devrait pas affecter les cartes de cette section. 
Appliquez à l’image de la carte une hauteur de height: 20vh; afin que sa dimension soit adaptable avec la dimension de l’écran (vh = view height). Positionnez l’image dans son cadre avec la propriété object-fit et object-position. 
Ajustez le contenu de toutes vos cartes en y insérant les infos réelles 6 oeuvres que vous avez sélectionnées en équipes, soient 3 en vedette et 3 dans la section autres.
</checklist>

<h4>Notes de cours 📚</h4>
<?php intlink("../../bootstrap/cartes") ?> 
<?php intlink("../../bootstrap/utilitaires") ?> 
<?php intlink("../../bootstrap/grille") ?> 
