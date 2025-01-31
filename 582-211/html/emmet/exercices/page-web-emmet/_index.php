<?php 
/**
 * @type     exercice
 * @title    Exercice Emmet
 * @icon     images/emmet.png
 * @abstract Pour cet exercice vous allez utiliser Emmet dans VS Code pour faire un autocomplétion de code HTML.
 */
?>
<!-- exercice possible https://chatgpt.com/c/679087b0-6718-8004-a9e9-4aa0a28ef359  -->



<grostitre>Exercice : Crée une page web simple avec Emmet</grostitre>
<strong>Objectif :</strong>
        Utiliser Emmet pour créer rapidement la structure d'une page HTML contenant :<ul>
            <li>Un en-tête</li>
            <li>Une section principale avec un article et une barre latérale</li>
            <li>Un pied de page</li>
            <li>Des listes, des liens et un formulaire</li>
        </ul>

<dots></dots>
<grostitre>Consignes :</grostitre>


<h4>Étape 1 : Générer la structure de base</h4>
<ol>
    <li>Ouvre un fichier <incode>index.html</incode> dans VS Code.</li>
    <li>Utilise la commande Emmet pour générer la structure HTML5 de base en une ligne :
    <br>
    <img src="images/etape1.jpg" alt="!">
    <!-- <highlight lang='css'>!</highlight> -->
    </li>
</ol>


<h4>Étape 2 : Ajouter une navigation</h4>
<ol>
    <li>Sous <incode>&lt;body&gt;</incode>, insère une barre de navigation avec une liste de 5 liens :
    <img src="images/etape2.jpg" alt="nav>ul>li*5>a[href='#']{Lien $}">
    <!-- <highlight lang='css'>nav>ul>li*5>a[href="#"]{Lien $}</highlight> -->  
    </li>

    <li>Explique à quoi servent les symboles comme <incode>&gt;</incode> (enfant direct), <incode>*</incode> (répétition), et <incode>$</incode> (compteur).</li>
</ol>


<h4>Étape 3 : Construire une section principale</h4>
<ol>
    <li>Ajoute une <incode>&lt;section&gt;</incode> principale avec un <incode>&lt;article&gt;</incode> et une
        <incode>&lt;aside&gt;</incode> à l’intérieur :

        <img src="images/etape3.jpg" alt="main>section>(article>h2{Titre de l'article}+p{Contenu de l'article})+(aside>h3{À propos}+ul>li*3{Info $})">
        <!--  <highlight lang='css'>main>section>(article>h2{Titre de l'article}+p{Contenu de l'article})+(aside>h3{À propos}+ul>li*3{Info $})</highlight>-->
       
    </li>
</ol>


<h4>Étape 4 : Créer un formulaire</h4>
<ol>
    <li>En dessous de l’article, insère un formulaire avec :<ul>
            <li>Un champ texte pour le nom</li>
            <li>Un champ e-mail</li>
            <li>Un bouton "Envoyer"</li>
        </ul>
        <img src="images/etape4.jpg" alt='form>label{Nom :}+input[type="text" name="nom"]+label{Email :}+input[type="email" name="email"]+button{Envoyer}'>
        <!--<highlight lang='css'>form>label{Nom :}+input[type="text" name="nom"]+label{Email :}+input[type="email" name="email"]+button{Envoyer}</highlight>-->
    </li>
</ol>


<h4>Étape 5 : Ajouter un pied de page</h4>
<ol>
    <li>Termine avec un <incode>&lt;footer&gt;</incode> contenant deux paragraphes :

    <img src="images/etape5.jpg" alt="p{© 2025 Mon Site}+p{Contact : contact@monsite.com}">
    <!--<highlight lang='css'>footer>p{© 2025 Mon Site}+p{Contact : contact@monsite.com}</highlight>-->
       
    </li>
</ol>

<bravo>Lorsque vous avez terminé, veuillez lever la main que je confirme que tout est bien réalisé.</bravo>

<dots></dots>
<grostitre>Bonus : Style avec CSS</grostitre>
<info>Si vous avez terminé les 5 étapes ci-haut, vous pouvez faire les bonus en attendant les autres étudiants.</info>
<br>
<ol>
    <li>Ajoute un fichier CSS externe avec un lien dans <incode>&lt;head&gt;</incode> :
    <img src="images/bonus1.jpg" alt="link:css">
    <!--<highlight lang='css'>link:css</highlight>-->
   
    </li>
    <li>Demande aux étudiants de créer des classes rapidement, par exemple :
        <img src="images/bonus2.jpg" alt=".container>.row>.col*3">
        <!--<highlight lang='css'>.container>.row>.col*3</highlight>-->
       
    </li>
</ol>
