<?php 
/**
 * @type     article
 * @title    SFC
 * @icon     ../images/icon.webp
 * @abstract Single File Components
 * @index    70
 * @ref      web/cadriciels/vuejs
 */
?>
<p>Les SFC <em>(Single File Components)</em>, ou composantes monofichiers en français, sont des fichiers permettant de regrouper à la fois un template HTML, la logique JavaScript et les styles CSS d’une composante à l’intérieur d’un seul et même fichier. Ce fichier est par la suite converti par un <a rel="noopener noreferrer" href="#compilateurs-sfc">compilateur SFC</a> en JavaScript et CSS standards pouvant être interprétés par les navigateurs.</p>

<p>Cette approche permet de découper un site complexe en composantes indépendantes et plus simples.</p>


<highlight lang="vue">
<template>
  <div class="menu"></div>
</template>

<script>
export default {
  data() {
    return {
      msg: 'Bonjour!'
    }
  }
}
</script>

<style>
.menu {
  background: blue;
}
</style>
</highlight>


<info>Ces fichiers utilisent l’extension&nbsp;<incode>*.vue</incode>.</info>
<doclink href="https://vuejs.org/api/sfc-spec.html">SFC</doclink>

<dots></dots>
<grostitre>Importation</grostitre>
<p>Les composantes SFC peuvent être importées dans un projet comme tout module JavaScript importé via <a target="_blank" rel="noopener noreferrer" href="../../npm/">NPM</a>.</p>



<highlight lang="javascript">import Menu from './components/Menu.vue'</highlight>

<warning>La norme veut que les noms de modules commencent par une&nbsp;majuscule.</warning>



<dots></dots>
<grostitre>Style scoped</grostitre>
<p>Dans le cadre d’un fichier SFC, la balise style peut se voir avoir l’attribut <incode>scoped</incode>. Cet attribut indique que les styles en question ne peuvent s’appliquer qu’aux éléments à l’intérieur de cette composante uniquement.</p>


<p>Pour ce faire, une clé est attribuée aux éléments HTML sous forme d'un attribut <incode>data-v-xxxxxxx</incode>. Toutes les règles de styles associées à cette composante se basent alors sur cette clé, limitant ainsi leur portée à cette composante uniquement.</p><p>Par exemple:</p>


<highlight lang="vue">
<template>
  <div class="menu">...</div>
</template>

<style scoped>
.menu {
  background: blue;
}
</style>
</highlight>

<br>

<p>Sera converti en:</p>

<highlight lang="html">
<template>
  <div class="menu" data-v-f3f3eg9>...</div>
</template>

<style>
.menu[data-v-f3f3eg9] {
  background: blue;
}
</style>
</highlight>


<br>

<p>Une composante SFC peut aussi avoir plus d'une balise <incode>&lt;style&gt;</incode>. Notamment lorsque des styles devraient être globaux et que d'autres devraient être limités à la composante uniquement.</p><p>Par exemple:</p>

<highlight lang="vue">
/* Styles appliqués à tout le site */
<style scoped>
* {
  box-sizing: border-box;
}
</style>

/* Styles appliqués à cette composante uniquement */
<style scoped>
.menu {
  background: blue;
}
</style> 
</highlight>

<br>
<doclink href="https://vuejs.org/api/sfc-css-features.html">Styles css scope</doclink>
        


<dots></dots>
<grostitre>Compilateurs SFC</grostitre>

<tool href="./outils/vite/"></tool>
<tool href="./outils/vuecli/"></tool>
<tool href="./outils/webpack/"></tool>


    
  