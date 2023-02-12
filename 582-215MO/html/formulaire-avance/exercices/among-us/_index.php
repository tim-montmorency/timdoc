<?php 
/**
 * @type     exercice
 * @title    Formulaire - Among Us
 * @icon     images/thumb.jpg
 * @abstract Pour cet exercice nous allons créer un formulaire permettant de générer un personnage du célèbre jeu Among Us.
 */
?>

<p class="spacer">Pour cet exercice nous allons créer un formulaire permettant de générer un personnage du célèbre jeu <a target="_blank" href="https://store.steampowered.com/app/945360/Among_Us/">Among Us</a>.</p>

<p>Aucun fichier de départ ne vous est fourni. Vous allez devoir créer votre propre fichier HTML.</p>

<p>Aperçu du résultat 👇</p>

<img src="images/formulaire-among-us.jpg">

<dots></dots>


<grostitre>Matériel</grostitre>

<h3>Fonts</h3>

<doclink href="https://fonts.google.com/specimen/VT323">VT323</doclink>

<h3>Couleurs 🎨</h3>

<color>#75DBF4</color>
<color>#F21717</color>

<h3>Médias</h3>

<mediafile src="images/sky.jpg">Arrière-plan</mediafile>

<dots></dots>


<grostitre>Requis fonctionnels</grostitre>

<checklist>
    La page de résultat s'attend à recevoir les informations suivantes: <span class="inline-code">name</span>, <span class="inline-code">color</span>, <span class="inline-code">hat</span> et <span class="inline-code">impostor</span>. Il faudra donc nommer vos champs de formulaire en conséquence.
    Créez un champ de texte permettant d'entrer un nom de personnage. Ce champ doit être obligatoire et limiter l'utilisateur à un nom entre 2 et 20 caractères.<br><br>À titre indicatif, affichez le texte <em>"Red"</em> en attendant que l'usager insère le nom de son choix.
    Créez ensuite un champ permettant de choisir la couleur du personnage 🎨.
    À l'aide de boutons radio, offrez une sélection de chapeaux 🎩. Notez la valeur à passer lorsque cette option est sélectionnée, suivie du texte à afficher à l'écran:<br>&nbsp;&nbsp;&nbsp;&nbsp;• <span class="inline-code">none</span> | Aucun<br>&nbsp;&nbsp;&nbsp;&nbsp;• <span class="inline-code">banana</span> | Banane<br>&nbsp;&nbsp;&nbsp;&nbsp;• <span class="inline-code">egg</span> | Oeuf<br>&nbsp;&nbsp;&nbsp;&nbsp;• <span class="inline-code">toilet</span> | Papier de toilette<br><br>Par défaut, l'option <em>"Aucun"</em> doit-être sélectionné.
    Ajoutez une boite à cocher avec la mention <em>"Imposteur 🗡"</em> permettant de sélectionner si le personnage est un imposteur ou non ✅.
    Ajoutez finalement un bouton avec la mention <em>"Créer mon personnage"</em> permettant de soumettre le formulaire et d'envoyer ses informations via une méthode <span class="inline-code">get</span> à l'adresse suivante:
</checklist>

<highlight lang="text">https://tim-montmorency.com/timdoc/582-215MO/html/formulaire-avance/exercices/among-us/submit/</highlight>

<p>Vous devriez maintenant être capable de créer des personnages similaires à ceux-ci en soumettant votre formulaire:</p>

<clipasset src="videos/formulaire-among-us.mp4"></clipasset>

<dots></dots>


<grostitre>Requis visuels</grostitre>

<checklist>
    Faites en sorte que l'image d'arrière-plan étoilé soit afficher comme fond d'écran ✨, que tous les textes utilisent la police Google <em>VT323</em> et aient une taille de 20px.
    Le formulaire doit avoir une largeur de 400px, un fond noir ⚫️, une bordure blanche de 2px ⚪️, des coins arrondis de 15px et se garder une marge intérieure de 20px de tous les côtés afin que son contenu ne touche jamais à ses extrémités.
    Le formulaire doit être centré horizontalement ↔️ et être affiché à 50px du haut de la page.
    Affichez le titre <em>"Among Us"</em> en 40px. Ce titre ne doit pas avoir de graisse ni de marge vers le haut. Uniquement une marge de 20px vers le bas.
    Le champ de nom doit prendre toute la largeur du formulaire, se garder une marge intérieure de 10px de tous les côtés, avoir des coins arrondis de 10px, une bordure bleue 🔵 de 2px lorsque son contenu est valide et rouge lorsqu'invalide 🔴.
    Le bouton <em>"Créer mon personnage"</em> doit prendre toute la largeur du formulaire, avoir un fond bleu, des coins arrondis de 10px et une taille de texte de 20px.
</checklist>

<dots></dots>


<grostitre>Notes de cours 📚</grostitre>

<?php intlink("../../../formulaire/"); ?>
<?php intlink("../../../formulaire-intermediaire/"); ?>
<?php intlink("../../../formulaire-avance/"); ?>

<dots></dots>