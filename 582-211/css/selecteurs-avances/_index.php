<?php
/**
 * @type     article
 * @title    Sélecteurs avancés
 * @icon     images/icon.webp
 * @abstract groupes, *, >, ~, +, [attr]
 * @ref      web/css
 */
?>

<grostitre>Groupes</grostitre>

<p>Lorsque des sélecteurs sont séparés par une virgule <incode>,</incode> les éléments correspondant à <strong>l'un ou l'autre des sélecteurs</strong> sont retournés.</p>

<p>Par exemple, la règle suivante:</p>

<highlight lang="css">#no1, #no2 { ... }</highlight>

<p>Permet de sélectionner les éléments avec l'id <incode>#no1</incode> et <incode>#no2</incode> afin de leur appliquer un style commun.</p>

<codepen id="ExpRBNQ" tab="html,result" height="220"></codepen>

<p>Cette méthode est parfois pratique pour éviter d'ajouter une classe supplémentaire dans le code HTML, mais attention de ne pas en abuser.</p>

<dots></dots>


<grostitre>Universel</grostitre>

<p>Le sélecteur universel cible <strong>tous les éléments</strong> sans distinction.</p>

<p>Par exemple, la règle suivante:</p>

<highlight lang="css">* { ... }</highlight>

<p>Permet de sélectionner les trois éléments avec la classe <incode>.element</incode>, mais aussi l'élément <incode>.group</incode> ainsi que les balises <incode>&lt;html&gt;</incode> et  <incode>&lt;body&gt;</incode>.</p>

<codepen id="zYLaVzR" tab="css,result" height="220"></codepen>

<p>Le sélecteur universel peut être utilisé afin de sélectionner tous les éléments à l'intérieur d'un autre sélecteur ou encore pour simplifier le débogage en mettant en évidence tous éléments sur une page, etc.</p>

<dots></dots>


<grostitre>Descendants directs</grostitre>

<p>Similaire aux <a href="../selecteurs/#descendants">sélecteurs de descendants</a>, lorsque le symbole plus grand que <incode>></incode> est inséré entre les deux sélecteurs, seul les descendants direct, soit les enfants, sont sélectionnés.</p>

<p>Par exemple, la règle suivante:</p>

<highlight lang="css">body > .element { ... }</highlight>

<p>Permet de sélectionner les éléments avec la classe <incode>.element</incode>, mais uniquement si <incode>&lt;body&gt;</incode> est leur parent. Si une ou des balises les sépares, comme c'est le cas avec ceux dans <incode>.group</incode>, ils sont ignorés.</p>

<codepen id="jOpKjYy" tab="css,result" height="220"></codepen>

<dots></dots>


<grostitre>Voisins</grostitre>

<p>Le symbole <incode>~</incode> indique qu'il s'agit d'un sélecteur de voisins. Si un ou plusieurs éléments correspondent au 2e sélecteur et qu'ils apparaissent dans le DOM au même niveau, mais après un élément correspondant au 1er sélecteur, ces éléments doivent être sélectionnés.</p>

<p>Par exemple, la règle suivante:</p>

<highlight lang="css">#no1 ~ .element { ... }</highlight>

<p>Sélectionne tous les éléments avec la classe <incode>.element</incode> précédés par une balise avec le id <incode>#no1</incode>.</p>

<codepen id="poZKXLw" tab="css,result" height="220"></codepen>

<warning>Si l’élément <incode>#no0</incode> avait existé, il n’aurait pas été sélectionné, même s’il avait été à l’intérieur de <incode>.group</incode>, car il aurait été avant l’élément <incode>#no1</incode> et que seuls les éléments suivants peuvent être sélectionnés.</warning>

<dots></dots>


<grostitre>Voisin direct</grostitre>

<p>Le symbole <incode>+</incode> indique qu'il s'agit d'un sélecteur de voisin direct. Si un élément correspond au 2e sélecteur et qu'il apparait dans le DOM immédiatement après un élément correspondant au 1er sélecteur, autrement dit s'ils sont voisins, l'élément doit-être sélectionné.</p>

<p>Par exemple, la règle suivante:</p>

<highlight lang="css">#no1 + .element { ... }</highlight>

<p>Sélectionne l'élément avec la classe <incode>.element</incode> seulement s'il est immédiatement précédé par une balise avec le id <incode>#no1</incode>.</p>

<codepen id="GRBGbYg" tab="css,result" height="220"></codepen>

<dots></dots>


<grostitre>Attribut</grostitre>

<p>Les sélecteurs d'attribut, comme leur nom l'indique, ciblent les éléments en fonction d'un attribut en particulier. Il est possible de sélectionner des éléments en fonction de la présence d'un attribut ou même de raffiner la sélection en spécifiant la valeur que devrait avoir l'attribut.</p>

<p>Par exemple, la règle suivante:</p>

<highlight lang="css">[title="demo"] { ... }</highlight>

<p>Sélectionne tous les éléments aillant un attribut <incode>title</incode>, d'on la valeur correspond à <em>"demo"</em>.</p>

<codepen id="NWBzZEd" tab="css,result" height="220"></codepen>

<info>
    <p>Vous pouvez vérifier si l'attribut contient une valeur en utilisant <incode>*=</incode>.</p>

    <p>Par exemple, la règle suivante:</p>

    <highlight lang="css">[title*="demo"] { ... }</highlight>

    <p>Sélectionne tous les éléments ayant un attribut <incode>title</incode> contenant la chaîne de caractères <em>"demo"</em>, peu importe où elle se trouve dans la valeur de l'attribut. Donc si vous avez une balise <incode><input title="demonstration"></incode>, comme l'attribut <incode>title</incode> contient <em>"demo"</em>, elle sera donc sélectionnée. </p>
</info>

<dots></dots>
<p>Pour sélectionner tous les éléments aillant un attribut <incode>title</incode>, il aurait été possible de faire simplement <incode>[title]</incode>, sans spécifier de valeur.</p>

<dots></dots>


<tool href="tools/selectors-explained/"></tool>
<exercice href="exercices/css-diner/"></exercice>

<dots></dots>
