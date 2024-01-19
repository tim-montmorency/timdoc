<?php

/**
 * @type     article
 * @title    Breakpoints
 * @icon     images/icon.png
 * @abstract Déterminent le comportement de votre mise en page réactive
 */
?>
<p>Les points d'arrêt <em>(breakpoints)</em> sont des dimensions déterminées qui affectent la présentation de votre mise en page en fonction de la taille des périphériques ou des fenêtres d'affichage dans Bootstrap.</p>

<p>Afin de bien comprendre la grille Bootstrap, il est impératif de connaitre ses&nbsp;<em>breakpoints</em>.</p>

<dots></dots>

<grostitre>Breakpoints</grostitre>

<p>Pour bien comprendre la grille Bootstrap et être en mesure de déboguer facilement une mise en page l'utilisant, il est important de bien comprendre ses différents&nbsp;<em>breakpoints</em>. Soit les points où Bootstrap permet de changer la disposition des éléments sur une&nbsp;page.</p>
<p>Par défaut les breakpoints Bootstrap&nbsp;sont:</p>
<table>
    <thead>
        <tr>
            <th>
                BREAKPOINT
            </th>
            <th>
                ABBRÉVIATION
            </th>
            <th>
                DIMENSION
            </th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>
                X-Small&nbsp;<em>(par défaut)</em>

            </td>
            <td>
              
            </td>
            <td>
                moins de 576px
            </td>
        </tr>
        <tr>
            <td>
                Small
            </td>
            <td>
                <incode>sm</incode>
            </td>
            <td>
                576px et&nbsp;+
            </td>
        </tr>
        <tr>
            <td>
                Medium
            </td>
            <td>
                <incode>md</incode>
            </td>
            <td>
                768px et&nbsp;+
            </td>
        </tr>
        <tr>
            <td>
                Large
            </td>
            <td>
               <incode>lg</incode>
            </td>
            <td>
                992px et&nbsp;+
            </td>
        </tr>
        <tr>
            <td>
               Extra large
            </td>
            <td>
                <incode>xl</incode>
            </td>
            <td>
                1200px et&nbsp;+
            </td>
        </tr>
        <tr>
            <td>
                Extra extra large
            </td>
            <td>
                <incode>xxl</incode>
            </td>
            <td>
                1400px et&nbsp;+
            </td>
        </tr>
    </tbody>
</table>
<p>Afin de faciliter le débogage, il est&nbsp;<u>fortement</u>&nbsp;suggéré d'ajouter ces breakpoints à l'inspecteur de votre&nbsp;navigateur.</p>
<p>Ces breakpoints ne font pas référence à des résolutions d'écrans d'appareils en particulier, mais plutôt à des groupes&nbsp;d'appareils.</p>
<p>Par exemple:</p>
<ul>
    <li>
        <incode>X-small</incode>&nbsp;vise les appareils mobiles en mode&nbsp;portrait 📱.<br>
        <small>400x700</small>
    </li>
    <li>
        <incode>Small</incode>&nbsp;les appareils mobiles en mode&nbsp;landscape.<br>
        <small>576x330</small>
    </li>
    <li>
        <incode>Medium</incode>&nbsp;les tablettes en mode&nbsp;portrait.<br>
        <small>768x1024</small>
    </li>
    <li>
        <incode>Large</incode>&nbsp;les tablettes en mode&nbsp;landscape.<br>
        <small>992x558</small>

    </li>
    <li>
        <incode>X-large</incode>&nbsp;les&nbsp;laptops 💻.<br>
        <small>1200x675</small>
    </li>
    <li>
        <incode>XX-large</incode>&nbsp;les moniteurs&nbsp;externes 🖥.<br>
        <small>1400x764</small>
    </li>
</ul>
<doclink href="https://getbootstrap.com/docs/5.0/layout/breakpoints/">Breakpoints</doclink>
