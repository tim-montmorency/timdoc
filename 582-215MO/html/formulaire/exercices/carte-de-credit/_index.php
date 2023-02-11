<?php 
/**
 * @type     exercice
 * @title    Formulaire - Carte de crédit
 * @icon     images/thumb.jpg
 * @abstract Pour cet exercice vous devrez compléter un formulaire de carte de crédit déjà entamé.
 */
?>

<p class="spacer">Pour cet exercice vous devrez compléter un formulaire de carte de crédit déjà entamé.</p>

<p>Aperçu du résultat 👇</p>

<clipasset src="videos/formulaire-carte-de-credit.mp4"></clipasset>


<grostitre>Matériel</grostitre>

<doclink href="https://codepen.io/tim-momo/pen/vYaoppO?editors=1100">Pen de départ</doclink>

<h3>Couleurs 🎨</h3>

<color>#eb001b</color>
<color>#0000ff</color>

<h3>Champs</h3>

<p>Lorsque le formulaire est soumis, ses informations doivent-être envoyés en utilisant la méthode <incode>get</incode> à l'adresse suivante:</p>

<highlight lang="text">https://tim-montmorency.com/timdoc/582-215MO/html/formulaire/exercices/carte-de-credit/submit/</highlight>

<p>La page de résultat s'attend à recevoir les informations suivantes: <incode>credit-card-number</incode>, <incode>expiry-date</incode>, et <incode>security-code</incode>.</p>

<dots></dots>


<grostitre>Requis</grostitre>

<checklist>
    Créez 3 champs de texte. Chacun de ces champs sera requis afin de pouvoir soumettre le formulaire:<br>&nbsp;&nbsp;• Un pour le numéro de carte de crédit<br>&nbsp;&nbsp;• Un pour la date d'expiration<br>&nbsp;&nbsp;• Un pour le code de sécurité de la carte<br>
    Tous les champs doivent avoir une marge intérieure équivalente à une demi-lettre et une bordure grise de 2px par défaut.
    Chaque champ doit avoir un libellé cliquable attribuant le focus au champ qui lui est associé.<br>&nbsp;&nbsp;• <em>Numéro de carte</em><br>&nbsp;&nbsp;• <em>Expiration</em><br>&nbsp;&nbsp;• <em>Sécurité</em>
    Le champ de carte de crédit doit prendre toute la largeur du formulaire, avoir des coins arrondis de 6px et affichez le texte indicatif <em>"4242 4242 4242 4242"</em> tant qu'aucune valeur ne lui est assignée.
    Les champs de date d'expiration et de code de sécurité doivent prendre la moitié de la largeur du formulaire, s'afficher côte à côte, avoir à leurs extrémités extérieures des coins arrondis de 6px et affichez les textes indicatifs <em>"10/24"</em> et <em>"123"</em>.
    Le code de sécurité doit avoir une longueur de 3 caractères. Ni plus ni moins.
    Ajustez les espacements entre les éléments de votre formulaire afin de ressembler au résultat ci-dessus ☝️
    Lorsque les champs sont valides, ceux-ci doivent avoir une bordure bleue 🔵. Dans le cas contraire, une bordure rouge 🔴.
    Un bouton bleu 🔵 prenant toute la largeur du formulaire, avec des coins arrondis de 6px et affichant la mention <em>"Acheter maintenant"</em> doit permettre de soumettre le formulaire lorsque cliqué.
</checklist>

<info>Si votre formulaire est bien réalisé, vous devriez être en mesure de voir un message de confirmation s’afficher lorsque vous le soumettez.</info>

<dots></dots>


<grostitre>Bonus</grostitre>

<checklist>
    Assurez-vous que le numéro de carte de crédit est 19 caractères, ni plus ni moins.
    Assurez-vous qu'un minimum de 4 caractères soit entré dans le champ <em>"date d'expiration"</em> et qu'un maximum de 5 soit permis. Ainsi, les dates d'expiration avec ou sans le <em>"/"</em> seront acceptées.
</checklist>

<dots></dots>


<grostitre>Notes de cours 📚</grostitre>

<?php intlink("../../../formulaire/"); ?>

<dots></dots>