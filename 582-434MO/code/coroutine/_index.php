<?php
/**
 * @type     article
 * @title    Coroutines
 * @icon     images/icon.png
 * @abstract Utilité, fonctionnement
 */
?>

<p class="spacer">Dans Unity, lorsque nous voulons exécuter un code, nous avons l'habitude de le mettre dans une fonction. Cependant, cela peut parfois poser problème si l'on ne veut pas que toutes nos actions soient exécutées en même temps. Les coroutines peuvent durer plusieurs frames et on peut mettre leur exécution sur pause contrairement à la fonction Update.</p>


<dots></dots>

<grostitre>Créer une Coroutine</grostitre>
<highlight lang="C#"> IEnumerator myCoroutine()
    {
        yield break; 
    }  </highlight>
    <p>Créer une coroutine est simple. Plutôt que d'utiliser void, on doit écrire IEnumerator, ensuite on donne un nom à notre Coroutine. Avant IEnumerator on peut aussi inscrire public ou private selon ce qu'on souhaite pour notre coroutine.</p>
    <p>À l'intérieur de ma Coroutine, j'ai inscris yield break;. Si vous ne le faites pas, Unity indiquera une erreur. Dans ce cas-ci, yield break permet à la coroutine de prendre fin. Ainsi, si vous inscrivez du code après yield break, il ne sera pas exécuté.</p>
    
    <dots></dots>

<grostitre>Mettre sur pause</grostitre>
    <p>Une coroutine fonctionne comme une fonction, ainsi, on peut inscrire notre code en haut de yield break comme on le ferait habituellement. En plus, on peut inscrire des combinaisons qui nous permettent de mettre notre code sur pause.</p>

    <highlight lang="C#"> yield return new WaitForSeconds(3f);  </highlight>
    <p>Lorsque l'on inscrit le code ci-haut sur une ligne, cela met la coroutine sur pause pendant 3 secondes. Une fois les 3 secondes écoulées, le code qui suit sera exécuté.</p>
    <highlight lang="C#"> yield return new WaitForEndOfFrame();  </highlight>
    <p>La ligne ci-haut permet d'attendre la fin du Frame avant de continuer le code. À l'oeil vous ne verrez pas de différence puisqu'il y a plusieurs frame dans une seconde, mais cela pourrait être nécessaire pour qu'une information vous soit acheminée à temps par exemple.</p>

    <highlight lang="C#"> while(myBool == false)
        {
            yield return null; 
        } </highlight>
    <p>Ci-haut, vous voyez while. C'est une option qu'on peut utiliser lorsqu'on veut répéter un code plusieurs fois jusqu'à ce qu'une condition soit atteinte. Par exemple, ici on attend que le bool soit faux. On aurait aussi pu mettre des chiffres et compter. L'important est de mettre un yield qui retourne quelque chose pour s'assurer que le while s'exécutera plusieurs fois de suite. Null fait en sorte que le code sera exécuté à chaque frame. Utilisez WaitForSeconds si vous souhaitez attendre un certain temps entre les répétitions de votre code. Exemple:</p>
    <highlight lang="C#">   while(myInt < 6)
        {
            myInt++; 
            yield return new WaitForSeconds(10f); 
        }</highlight>
<p>On pourrait mettre un code avant myInt, il serait exécuté à chaque 10 secondes cinq fois.</p>

<dots></dots>

<grostitre>Démarrer une Coroutine</grostitre>
<highlight lang="C#"> StartCoroutine(myCoroutine());  </highlight>
<p>Démarrer une Coroutine est simple. Il suffit d'écrire StartCoroutine et d'écrire le nom de la Coroutine qu'on souhaite démarrer entre parenthèse. Il ne faut pas oublier d'ajouter () après le nom de la coroutine.</p>

<dots></dots>

<grostitre>Arrêter une Coroutine</grostitre>
<highlight lang="C#"> StopCoroutine(myCoroutine());   </highlight>
<p>Normalement, les Coroutine prendront fin seules grâce à votre code, mais vous pouvez utilisez StopCoroutine pour les arrêter au besoin. Si vous souhaitez arrêter toutes les coroutines en même temps, vous pouvez utiliser le code suivant:</p>
<highlight lang="C#"> StopAllCoroutines();</highlight>