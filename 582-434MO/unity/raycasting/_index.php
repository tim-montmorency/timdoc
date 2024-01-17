<?php
/**
 * @type     article
 * @title    Raycasting
 * @icon     images/icon.png
 * @abstract détection, collision
 */
?>

<p class="spacer">Le Raycasting est un concept intéressant. En effet, il nous permet de tracer une ligne depuis un point donné et de voir si celle-ci entre en collision avec un objet. Lorsque l'on veut créer une arme qui tire dans une certaine direction, cela est utile pour vérifier si on entre en collision avec un objet. Ce que la fonction RayCasting fait, c'est qu'elle envoie un rayon dans une direction donnée et qu'elle nous renvoie une valeur true si le rayon rencontre un objet. En plus de savoir qu'on a heurté un objet, on peut savoir quel est l'objet, sa position et la distance entre le début du rayon et l'objet.</p>


<dots></dots>

<grostitre>Rayon</grostitre>
<p>Pour pouvoir détecter la collision, on doit premièrement crééer un rayon. Créons un rayon qui part de notre personnage et qui se dirige vers la droite.</p>
<highlight lang="csharp"> public GameObject personnage; 

    
void Start()
{
    Ray ray = new Ray(personnage.transform.position, personnage.transform.right);
}</highlight>
<p>J'ai premièrement créé un GameObject pour contenir mon personnage. Ensuite, j'ai créé une variable de Type Ray nommée rayon qui contiendra un rayon qui part de la position de mon personnage et qui va vers la droite. Le .right est un élément présent par défaut dans Unity.</p>
<highlight lang="csharp"> void Update()
    {
        Debug.DrawRay(personnage.transform.position, personnage.transform.right);
    }</highlight>
<p>Ensuite, si j'inscris le code ci-haut à la suite de l'autre, je pourrai dessiner le rayon et ainsi le visualiser. Ainsi, plutôt que de le créer, je le dessine tout simplement. Pour voir le rayon, vous devrez entrer en mode Play et vous assurez d'avoir coché l'option Gizmos.</p>

<dots></dots>

<grostitre>Raycast</grostitre>
<p>Maintenant que nous sommes en mesures de voir notre rayon, nous allons détecter si le rayon entre en collision avec un objet. Avant toute chose, si l'objet à partir duquel vous voulez émettre un rayon a un Collider, je vous recommande de l'ouvrir dans l'inspecteur et en haut à droite dans Layer, de choisir Ignore Raycast. Sinon, votre objet se détectera lui-même, ce qui n'est pas très pratique.</p>

<highlight lang="csharp">  

public GameObject personnage;
 

public void detection()
 {
     RaycastHit2D hitInfo = Physics2D.Raycast(personnage.transform.position, personnage.transform.right);

     if (hitInfo)
     {
         Debug.Log(hitInfo.transform.name);
     }

 }</highlight>
 <p>Dans le code ci-haut, lorsque la fonction detection() est appelée, on crée une variable RaycastHit2D qui nous permet de sauvegarder l'objet avec lequel on entre en collision s'il y en a un. La partie Physics2D nous permet d'utiliser la fonction RayCast qui trace un rayon avec 2 variables. La première est le point d'origine du rayon et la deuxième sa direction. Si jamais on rencontre un objet, hitInfo devient true, ce qui nous permet d'imprimer le nom de l'objet qui a été frappé.</p> 

 <highlight lang="csharp">GameObject objet = hitInfo.transform.gameObject; </highlight>
 <p>Le code ci-haut permet de créer un GameObject qui contient l'objet qui vient d'être frappé par le rayon. Cela peut-être utile pour modifier celui-ci.</p>

 <highlight lang="csharp">float distance = hitInfo.distance; </highlight>
 <p>Ce code permet de calculer la distance entre nous et l'objet que le rayon a rencontré.</p>

 <highlight lang="csharp">Vector3 position = hitInfo.point; </highlight>
 <p>Point permet d'obtenir la position de l'objet que le rayon a rencontré.</p>

 <h2>Exemple d'utilisation</h2>
 <highlight lang="csharp">
 public GameObject personnage;

 public void detection()
    {
        RaycastHit2D hitInfo = Physics2D.Raycast(personnage.transform.position, personnage.transform.right);

        if (hitInfo.distance <2)
        {
            Debug.Log(hitInfo.transform.name);
           
        }

    }
</highlight>
<p>Dans ce code, on déclenche un rayon lorsque la fonction detection() est appelée. Ensuite, si on frappe un objet et qu'il est à une distance de moins de deux on imprime son nom. Vous pouvez vous inspirez de ce code pour déclencher des éléments selon une distance. On pourrait aussi mettre ce code dans la fonction Update pour vérifier en tout temps.</p>

<knowmore href="https://gamedevbeginner.com/raycasts-in-unity-made-easy/">
    Vous voulez ignorer certaines surfaces, mieux comprendre ce que sont les rayons ou explorer plus de possibilités? 
</knowmore>

