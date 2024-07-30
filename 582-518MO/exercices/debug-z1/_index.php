<?php
/**
 * @type     exercice
 * @title    Exercice de déboguage z1
 * @icon     images/thumb.jpg
 * @abstract Vous devez repérer l'erreur et la corriger.
 */
?>

<info>Veuillez entrer vos réponse dans le Wooclap suivant: </info>

<grostitre>Exercice 1: HTML</grostitre>
<p><strong>Code à déboguer :</strong></p>

<highlight lang='html'>&lt;!DOCTYPE html&gt;
&lt;html lang=&quot;fr&quot;&gt;
&lt;head&gt;
    &lt;meta charset=&quot;UTF-8&quot;&gt;
    &lt;meta name=&quot;viewport&quot; content=&quot;width=device-width, initial-scale=1.0&quot;&gt;
    &lt;title&gt;Document&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;h1&gt;Bienvenue dans mon site web&lt;h1&gt;
    &lt;p&gt;Voici un paragraphe avec &lt;a herf=&quot;https://www.example.com&quot;&gt;un lien&lt;/a&gt;&lt;/p&gt;
    &lt;img scr=&quot;image.jpg&quot; alt=&quot;Une image&quot;&gt;
&lt;/body&gt;
&lt;/html&gt;</highlight>



<dots></dots>
<grostitre>Exercice 2: CSS</grostitre>
<p><strong>Code à déboguer :</strong></p>
<highlight lang='css'>body {
    font-family: Arial, sans-serif;
    background-color: #fafafa;
}

h1 {
    color: #333;
    text-algin: center;
}

p {
    font-size: 16px;
    line-hieght: 1.5;
}</highlight>



<dots></dots>
<grostitre>Exercice 3 : JavaScript</grostitre>
<p><strong>Code à déboguer :</strong></p>
<highlight lang='javascript'>let numbers = [1, 2, 3, 4, 5];

for (let i = 0; i <= numbers.length; i++) {
    console.log(numbers[i]);
}

function add(a, b) {
    return a + b;
}

console.log(add(2, 3, 4));</highlight>





<dots></dots>
<grostitre>Exercice 4 : HTML/CSS/JavaScript combiné</grostitre>

<p><strong>Code à déboguer (2 erreurs et 1 recommandation à trouver) :</strong></p>

<highlight lang='html'>&lt;!DOCTYPE html&gt;
&lt;html lang=&quot;fr&quot;&gt;
&lt;head&gt;
    &lt;meta charset=&quot;UTF-8&quot;&gt;
    &lt;meta name=&quot;viewport&quot; content=&quot;width=device-width, initial-scale=1.0&quot;&gt;
    &lt;title&gt;Test Page&lt;/title&gt;
    &lt;style&gt;
        .hidden {
            display: none;
        }

        button {
            background-color: #4CAF50;
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
        }
    &lt;/style&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;btn onclick=&quot;showMessage()&quot;&gt;Clique ici&lt;/btn&gt;
    &lt;p id=&quot;message&quot; class=&quot;hidden&quot;&gt;Allo, le monde!&lt;/p&gt;

    &lt;script&gt;
        function showMessage() {
            document.querySelector(&quot;#message&quot;).classList.remove(&quot;.hidden&quot;);
        }
    &lt;/script&gt;
&lt;/body&gt;
&lt;/html&gt;</highlight>




<dots></dots>
<grostitre>Exercice 5 : JavaScript</grostitre>

<p><strong>Code à déboguer :</strong></p>
<highlight lang='javascript'>let user = {
    name: "Alice",
    age: 25,
};

console.log(user.age);

user.greet = function() {
    console.log("Hello, " + this.name);
};

greet();</highlight>
