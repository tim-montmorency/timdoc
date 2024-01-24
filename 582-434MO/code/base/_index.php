<?php
/**
 * @type     article
 * @title    Bases du code
 * @icon     images/icon.png
 * @abstract Conditions, boucles, ...
 */
?>

<p class="spacer">Dans Unity, le langage de programmation est le C#. Les srcipts sont les composantes qui contiennent le code.</p>


<dots></dots>

<grostitre>Structure d'un script</grostitre>
<p>Un script est aussi appelé une classe dans Unity. C'est un ensemble de fonctions qui seront exécutées.Voici la structure type d'une classe:</p> 
<highlight lang="csharp">
using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class script2 : MonoBehaviour
{
    private int myInt; 

    // Start is called before the first frame update
    void Start()
    {
        
    }

    // Update is called once per frame
    void Update()
    {
        
    }
}
</highlight>

     <p>La première section est celle des NameSpace. On la remarque par l'utilisation de using avant chaque terme. Elle détermine quelles classes seront utilisées dans ce script. On laisse celles qui sont présentes par défaut. D'autres peuvent être ajoutées au besoin:</p>
     <ol>
        <li>using UnityEngine.UI; Permet de modifier certaines composantes comme les boutons.</li>
        <li>using UnityEngine.Video; Permet de modifier les composantes reliées à la lecture de vidéos.</li>
        <li>using UnityEngine.SceneManagement; Permet de faire des changements de Scene à partir du code.</li>
        <li>using TMPro; Permet de modifier le texte des objets qui ont une composante Text Mesh Pro.</li>

</ol>
<p>Après les nameSpace, on aperçoit public class... Ici, script2 est le nom de mon script. On laisse cette ligne telle quelle, c'est elle qui annonce que tout ce qui suit fera partie de la classe de mon script.</p>
<alert>Attention à ne jamais changer le nom de votre script dans le code, sinon il ne sera plus fonctionnel.</alert>
<p>Après le nom de la classe, j'ai inscris private int myInt. C'est à cet endroit qu'on doit déclarer toutes les variables qui seront utilisées dans notre script on peut déjà leur donner des valeurs ou attendre à plus tard.</p>
<p>Maintenant, il reste les Fonctions Start et Update. Ainsi, dans cette section, on crée les fonctions qui contiendront le code.</p>

<dots></dots>

<grostitre>Console</grostitre>
<p>Dans Unity, la fenêtre console est importante pour trouver les problèmes dans les scripts ou pour faire le suivi de valeurs. Cette fenêtre se trouve au bas de votre écran, c'est un onglet de la fenêtre Project.</p>

<img src="images/console.jpg">
<highlight lang="csharp">  Debug.Log("Hello World"); </highlight>
<p>Pour imprimer une valeur ou un texte dans la console, il suffit d'inscrire Debug.Log et de mettre ce qu'on veut imprimer entre parenthèse. Ici, j'ai utilisé les "" pour imprimer une phrase, mais j'aurais aussi pu écrire le nom d'une variable int comme myInt pour imprimer sa valeur.</p>

<dots></dots>

<grostitre>Opérateurs</grostitre>
<p>Voici une liste des opérateurs courants dans Unity:</p>
<ul>
<li><b>+=</b> (myInt += 2;) additionne 2 à myInt</li>
<li><b>-=</b> (myInt -= 2;) soustrait 2 à myInt</li>
<li><b>++</b> (myInt ++;) additionne 1 à myInt</li>
<li><b>--</b> (myInt --;) soustrait 1 à myInt</li>
<li><b>*=</b> (myInt *= 2;) multiplie myInt par 2</li>
<li><b>/=</b> (myInt /= 2;) divise myInt en 2</li>
<li><b>%=</b> (myInt %= 2;) calcule le reste de la division de myInt par 2</li>
<li> +, -, * et / peuvent aussi être utilisés entre 2 nombres</li>
</ul>

<info>Dans Unity, il est souvent plus simple de faire *0.5f que de diviser notre nombre en deux. Même chose pour toutes les divisions, on peut les remplacer par une multiplication par une fraction.</info>



<dots></dots>


<grostitre>Conditions</grostitre>
<p>Dans Unity, on utilise fréquemment les conditions pour vérifier si un élément est vrai avant d'exécuter une portion de code. Une condition s'écrit de la façon suivante:</p>
<highlight lang="csharp">
if(myInt == 2)
{

}  
</highlight>
        <p>Si ma condition est vrai, donc que la variable myInt est égale à 2, on exécutera le code qui est entre les {}; 
    <p> Outre les ==, il existe d'autres opérateurs pour valider si une fonction est vraie:</p>
    <ul><li>!= (Pas égal à)</li>
    <li>< (plus petit que)</li>
    <li> > (plus grand que)</li>
    <li> <= (plus petit ou égal)</li>
    <li> >= (plus grand ou égal)</li>
    </ul>
    <p>Il est possible de vérifier plus d'une condition grâce à &&:</p>
    <highlight lang="csharp">
if(myInt >= 2 && myInt < 10)
{

}
</highlight>
<p>Ici, on vérifie si myInt est plus grand ou égal à deux et plus petit que 10. Si c'est le cas, le code sera exécuté.</p>

<highlight lang="csharp">
if(myInt >= 2 || myInt == 0)
{

}
</highlight>
        <p>On peut utiliser || pour choisir l'une ou l'autre des conditions, ainsi si myInt est plus grand ou égal à deux ou égal à 0, le code entre {} sera exécuté.</p>


        <dots></dots>

<grostitre>Boucle</grostitre>
<p>Dans Unity, les boucles sont souvent utilisées pour compter des éléments ou interagir avec les tableaux.</p>

<highlight lang="csharp">
for(int i = 0; i < 3; i++)
{

}
</highlight>
<p>Ci-haut, on crée une boucle dont le code sera exécuté 3 fois avant que le code qui le suit s'exécute.</p>
<highlight lang="csharp">
for(int i = 0; i < myInts.Length; i++)
{
        myInts[i] =0; 
}
</highlight>
<p>Dans Unity, une pratique courante lorsqu'on crée une boucle est d'utiliser la longueur d'un tableau plutôt qu'un chiffre fixe. Ainsi, ci-haut ma boucle sera répétée autant de fois qu'il y a de chiffres dans le tableau myInts[]. Cela permet de ne pas avoir à changer le code à chaque fois que notre tableau change en longueur.</p>


<dots></dots>

<grostitre>Aléatoire</grostitre>
<p>Voici comment obtenir une valeur aléatoire dans Unity:</p>
<highlight lang="csharp"> int xcount = Random.Range(1, 6); </highlight>
<p>Le code précédent générera un nombre entier qui sera 1, 2, 3, 4 ou 5. Le deuxième chiffre est exclu.</p>