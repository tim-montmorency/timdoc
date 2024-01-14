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

<doclink href="https://codepen.io/pen?template=XWozWyy">Pen de départ</doclink>


<h3>Champs</h3>

<p>Lorsque le formulaire est soumis, ses informations doivent-être envoyés en utilisant la méthode <incode>get</incode> à l'adresse suivante:</p>

<highlight lang="text">https://tim-montmorency.com/timdoc/582-215MO/html/formulaire/exercices/carte-de-credit/submit/</highlight>

<p>La page de résultat s'attend à recevoir les informations suivantes: <incode>credit-card-number</incode>, <incode>expiry-date</incode>, et <incode>security-code</incode>.</p>

<dots></dots>


<grostitre>Requis</grostitre>

<checklist>
    Premièrement, créer une forme <u>avec la classe</u> <em>"form"</em> ainsi que l'action écrite ci-dessus.
    À l'intérieur de la forme, ajouter 2 <em>div</em>.
    Dans la première <em>div</em> <small>(numéro de carte de crédit)</small>, ajouter un champ texte avec<br>&nbsp;&nbsp;• <em>id</em> : credit-card-number <br>&nbsp;&nbsp;• <em>attribut "name" </em>: credit-card-number.
    Pour la deuxième <em>div</em>, donner lui la classe ; colonne.
    À l'intérieur de cette <em>div</em>, vous allez créer deux autres <em>div</em>.
    Une <em>div</em>, dois avoir la classe : colonne1 et l'autre la classe : colonne2.
    La première <em>div</em> (date d'expiration), est un champ texte avec <br>&nbsp;&nbsp;• <em>id</em> : expiry-date  <br>&nbsp;&nbsp;•<em>attribut "name"</em> : expiry-date
    La deuxième (code de sécurité de la carte) est aussi un champ texte avec <br>&nbsp;&nbsp;•  <em>id</em> : security-code  <br>&nbsp;&nbsp;•<em>attribut "name"</em> : security-code .
    Chaque champ doit avoir un libellé cliquable attribuant le focus au champ qui lui est associé.<br>&nbsp;&nbsp;• <em>Numéro de carte</em><br>&nbsp;&nbsp;• <em>Expiration</em><br>&nbsp;&nbsp;• <em>Sécurité</em>
    Les champs de numéro de carte de crédit, date d'expiration et de code de sécurité doivent afficher les textes indicatifs <em>"4242 4242 4242 4242"</em>, <em>"10/24"</em> et <em>"123"</em>.
    Le code de sécurité doit avoir une longueur de 3 caractères. Ni plus ni moins.
    Un bouton avec la classe : <em>bouton</em>, affichant la mention <em>"Acheter maintenant"</em> doit permettre de soumettre le formulaire lorsque cliqué.
    Assurez-vous que le numéro de carte de crédit est 19 caractères, ni plus ni moins.
    Assurez-vous qu'un minimum de 4 caractères soit entré dans le champ <em>"date d'expiration"</em> et qu'un maximum de 5 soit permis. Ainsi, les dates d'expiration avec ou sans le <em>"/"</em> seront acceptées.
</checklist>
</checklist>

<info>Si votre formulaire est bien réalisé, vous devriez être en mesure de voir un message de confirmation s’afficher lorsque vous le soumettez.</info>

<dots></dots>


<grostitre>Notes de cours 📚</grostitre>

<intlink href="../../../formulaire/"></intlink>

<dots></dots>