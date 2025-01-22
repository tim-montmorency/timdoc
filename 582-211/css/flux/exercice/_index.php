<?php 
/**
 * @type     exercice
 * @title    Exercice flux
 * @icon     images/thumb.jpg
 * @abstract Objectif: Comprendre le flux en HTML/CSS.
 */
?>


    <p>Voici quelques idées pour pratiquer le <strong>flot</strong> (flux) en HTML/CSS de manière interactive. Ces
        exercices sont conçus pour vous aider à observer et manipuler le comportement des éléments en ligne, de bloc, et
        des propriétés qui modifient le flot.</p>

    <alert>Veuillez ne faire que les 2 premiers exercices. NE PAS FAIRE LES #3 ET #4.</alert>
    
        
    <dots></dots>
    <grostitre>Exercice 1 : Inline vs Block</grostitre>
    <h3>Objectif</h3>
    <p>Comprendre la différence entre les éléments <strong>inline</strong> et <strong>block</strong>.</p>
    <h3>Étapes</h3>
    <ol>
        <li>Créez une page HTML avec le contenu suivant :</li>
    </ol>

    <highlight lang='html'><!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 1</title>
    <style>
        .block {
            background-color: lightblue;
            margin: 10px;
        }
        .inline {
            background-color: lightcoral;
            margin: 10px;
        }
    </style>
</head>
<body>
    <h2>Exemple d'éléments de bloc</h2>
    <div class="block">Bloc 1</div>
    <div class="block">Bloc 2</div>
    <div class="block">Bloc 3</div>

    <h2>Exemple d'éléments en ligne</h2>
    <span class="inline">Inline 1</span>
    <span class="inline">Inline 2</span>
    <span class="inline">Inline 3</span>
</body>
</html></highlight>

    <ol start="2">
        <li>Ouvrez la page dans votre navigateur.</li>
        <li>Essayez de changer les styles des classes <incode>.block</incode> et <incode>.inline</incode> :<ul>
                <li>Ajoutez une largeur fixe (<incode>width: 100px;</incode>).</li>
                <li>Ajoutez une hauteur (<incode>height: 50px;</incode>).</li>
                <li>Que remarquez-vous ?</li>
            </ul>
        </li>
    </ol>

    <dots></dots>

    <grostitre>Exercice 2 : Float</grostitre>
    <h3>Objectif</h3>
    <p>Utiliser la propriété <incode>float</incode> pour placer des images et du texte.</p>
    <h3>Étapes</h3>
    <ol>
        <li>Créez ce fichier HTML :</li>
    </ol>

    <highlight lang='html'><!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 2</title>
    <style>
        img {
            float: left;
            margin: 10px;
            width: 150px;
        }
        p {
            text-align: justify;
        }
    </style>
</head>
<body>
    <h2>Exemple avec Float</h2>
    <img src="https://via.placeholder.com/150" alt="Exemple d'image">
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nec justo id mauris faucibus aliquet.  Integer vitae congue enim. Cras eu dui nec felis tincidunt tempus. Nullam ultrices, magna ut tempor luctus, justo lacus efficitur tortor, et volutpat magna justo non nulla.</p>
</body>
</html>
    </highlight>

    <alert>Veuillez ne faire que les 2 premiers exercices. NE PAS FAIRE LES #3 ET #4.</alert>


    <dots></dots>
    <grostitre>Exercice 3 : Flexbox</strong></grostitre>
    <h3>Objectif</h3>
    <p>Découvrir comment Flexbox peut remplacer le flot normal.</p>
    <h3>Étapes</h3>
    <ol>
        <li>Créez une page HTML avec le contenu suivant :</li>
    </ol>

    <highlight lang='html'><!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 3</title>
    <style>
        .container {
            display: flex;
            gap: 10px;
            border: 2px solid black;
            padding: 10px;
        }
        .item {
            background-color: lightgreen;
            padding: 20px;
            text-align: center;
        }
    </style>
</head>
<body>
    <h2>Exemple avec Flexbox</h2>
    <div class="container">
        <div class="item">1</div>
        <div class="item">2</div>
        <div class="item">3</div>
    </div>
</body>
</html></highlight>

    <ol start="2">
        <li>Expérimentez :<ul>
                <li>Ajoutez <incode>flex-direction: column;</incode> pour empiler les éléments.</li>
                <li>Ajoutez <incode>justify-content: center;</incode> ou <incode>space-between;</incode> pour ajuster
                    l'espacement.</li>
                <li>Changez les dimensions des <incode>.item</incode> pour observer leur comportement.</li>
            </ul>
        </li>
    </ol>



    <dots></dots>
    <grostitre>Exercice 4 : Grid</strong></grostitre>
    <h3>Objectif</h3>
    <p>Créer une grille simple pour organiser les éléments.</p>
    <h3>Étapes</h3>
    <ol>
        <li>Essayez ce code :</li>
    </ol>

    <highlight lang='html'><!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 4</title>
    <style>
        .grid-container {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 10px;
        }
        .grid-item {
            background-color: lightyellow;
            padding: 20px;
            text-align: center;
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <h2>Exemple avec Grid</h2>
    <div class="grid-container">
        <div class="grid-item">1</div>
        <div class="grid-item">2</div>
        <div class="grid-item">3</div>
        <div class="grid-item">4</div>
        <div class="grid-item">5</div>
        <div class="grid-item">6</div>
    </div>
</body>
</html></highlight>

    
    <ol start="2">
        <li>Expérimentez :<ul>
                <li>Modifiez <incode>grid-template-columns</incode> pour ajouter ou supprimer des colonnes.</li>
                <li>Utilisez <incode>grid-template-rows</incode> pour définir la hauteur des lignes.</li>
                <li>Ajoutez un élément qui occupe plusieurs colonnes avec <incode>grid-column: span 2;</incode>.</li>
            </ul>
        </li>
    </ol>
