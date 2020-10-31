<!DOCTYPE html>
<html lang="en">
<?php
	include 'inc/header.php';
?>
<div style="margin:2%;">
<h1>PHP <a>acronyme pour "PHP: Hypertext Preprocessor"</a> </h1>
<p>Qu’est ce que c’est un fichier PHP ? </p>
<p> • Les fichiers PHP peuvent contenir du texte, HTML, CSS, JavaScript, et code PHP </p>
<p> • Le code PHP est executé sur le serveur et le résultat est transmis sur le navigateur dans HTML </p>
<p> • Les fichiers PHP ont l’extension ".php" </p>
<p> Qu’est ce que PHP peut faire ? </p>
<p>• PHP peut générer du contenu dynamique dans la page </p>
<p>• PHP peut créer, ouvrir, lire, écrire, supprimer et fermer des fichiers sur le serveur </p>
<p>• PHP peut collecter des données de formulaire </p>
<p>• PHP peut envoyer et recevoir des cookies </p>
<p>• PHP peut ajouter, supprimer, modifier des données dans votre base de données </p>
<p>• PHP peut être utilisé pour contrôler l'accès des utilisateurs </p>
<p>• PHP peut chiffrer les données </p>
<h2>Server side vs. client side <h2>
<h3>JavaScript: client-side scripting </h3>
 <p>-script est exécuté par le navigateur </p>
 <p>-modifie la page html existante </p>
<h3>PHP: server-side scripting</h3>
 <p> - script est exécuté par le serveur Web </p>
 <p> - utilisé pour générer la page HTML qui est envoyée au navigateur </p>
 <h2>Balises PHP</h2>
<p>Lorsque PHP traite un fichier, il cherche les balises d'ouverture et de fermeture (<?php et ?>) qui délimitent le code qu'il doit interpréter.</p>
<p><?php 
 echo "Bonjour le monde !"; 
?></p>
<h2>Variables </h2>
<p>Les variables sont des conteneurs dans lesquels on peut stocker des variables. 
En PHP, les variables sont représentées par un signe dollar "$" suivi du nom de la variable.
 Le nom est sensible à la casse.</p>
 <p>$titre = “PHP”; </p>
 <h2>Variables </h2>
<p>Les variables sont des conteneurs dans lesquels on peut stocker des variables.
 En PHP, les variables sont représentées par un signe dollar "$" suivi du nom de la variable.
 Le nom est sensible à la casse.</p>
 <p>$titre = “PHP”;</p> 
 <table>
<tr>
<th>variable</th>
<th>exemple</th>
</tr>
<tr>
<th>String</th>
<th> $myVariable = “John”; </th>
</tr>
<tr>
<th>Number </th>
<th>$myVariable = 100;  </th>
</tr>
<tr> 
<th>Boolean</th>
<th> $myVariable = true;  </th>
</tr>
<tr>
<th>Array</th>
<th> $myVariable = array(“John”, “Jane”, “100”); </th>
</tr>
</table>
<h2>Les opérateurs </h2>
<table>
<tr>
<th>Opérateur</th>
<th>Symbole(s)</th>
<th>exemple</th>
</tr>
<tr>
<th>Somme / Concaténation</th>
<th>+</th>
<th>2 + 3; “Hello” . “ ” . “World”;</th>
</tr>
<tr>
<th>Soustraction, multiplication, division</th>
<th>- *  /</th>
<th> 2 * 3;</th>
</tr>
<tr>
<th>Opérateur d'affectation</th>
<th>=</th>
<th>$myVariable = 100; </th>
</tr>
<tr>
<th>Opérateur d'identité</th>
<th>===</th>
<th> $myVariable === 10;</th>
</tr>
<tr>
<th>Opérateur de négation et opérateur d'inégalité </th>
<th>!   !==</th>
<th>  $myVariable !== 10;</th>
</tr>
</table>
<h3>Opérateurs d'incrémentation et décrémentation</h3>
<table>
  
<tr>
<th> Pre-incrémente</th>
<th>++$a </th>
</tr>
<tr>
<th> Post-incrémente</th>
<th>$a++  </th>
</tr>
<tr>
<th> Pré-décrémente</th>
<th>--$a </th>
</tr>
<tr>
<th> Post-décrémente</th>
<th> $a-- </th>
</tr>
</table>
<h2>Les structures conditionnelles</h2>
<p>Les structures conditionnelles sont des éléments du code qui permettent de tester si une expression est vraie 
ou non et d'exécuter des instructions différentes selon le résultat.</p>
<p>Syntax</p>
<p>if (expression) { </br>
 instruction à exécuter si l’expression est vraie }</br>
 else { </br>
 instruction à exécuter si l’expression est faux } </p>
 <p> une autre methode</p>
<p> switch (expression) { </br>
case condition 1: instruction break; </br>
case condition 2: instruction break;</br>
...</br>
case condition n: instruction break;</br>
default: instruction</br>
}</p>
<h2>Structure de répétition </h2>
<p>L'instruction while et for permet de créer une boucle qui s'exécute tant qu'une condition de test est vérifiée.</br>
Syntax</br>
for (initialisation;  condition;  expression finale) {</br>
 instruction à exécuter si l’expression est vraie } </br>
while (expression) {</br>
instruction à exécuter si l’expression est vraie }</p>
<h2>Les fonctions</h2>
<p>Les fonctions permettent d'organiser des fonctionnalités qu'on souhaite pouvoir réutiliser.
 Par exemple, si on veut exécuter deux fois la même action, plutôt que de recopier le code, 
 on pourra écrire une fonction une fois puis l'utiliser aux deux endroits souhaités. </p>
<p>Syntax</br>
 function nomFontion (paramètre-liste) { </br>
 instruction } </br>
Exemple </br>
function aire($longueur, $largeur) { </br>
var $résultat = $longueur * $largeur; </br>
 return $résultat; }</p>
 </div>
<?php
	include 'inc/footer.php';
?>