<?php
	include 'inc/header.php';
?>
<h1>QCM ph
<div style="margin:2%;">
<h1> javascript</h2>
	<h2>Quel est JavaScript ? </h2>
<p>Le Javascript permet de programmer des scripts</p>
<p>Le Javascript est un langage dit client-side, c'est-à-dire que les 
scripts sont exécutés par le navigateur chez l’ordinateur de l’utilisateur (on appelé lui le client)
Ca se signifie qu’une page web ne peut pas etre un HTML statique,
 mais peut incluire des programmes qui interagit avec l’utilisateur,
 controle le navigatuer et crée dinamiquement le contient HTML</p>
		<h2>Execution</h2>
<p>Si la balise de script est inclus dans la balise <head> </p>
<p> – Le script est exécuté lorsque la page est chargée-avant de réellement rendre</p> 
<p> Si le script est inclus dans la page du corps </p> 
<p> – Le script est exécuté lorsque le balisage se trouve</p> 	
<h2>variables</h2>
<p> La variable est comme un conteneur qui stocke des informations </p>
<p>Les conventions de nommage: </p>
<p> - ne peut pas être un mot clé réservé </p>
<p>- ne peut pas contenir d'espace</p>
 <p>- ne peut pas commencer par un nombre </p>
 <p>- devrait être significatif (meaningful) </p>
<p> - sensible aux majuscules et minuscules</p>
<p>Il faut déclarer une variable avec le mot-clé let suivi du nom qu'on souhaite utiliser pour la variable.</p>
<p>let titre = “JavaScript”; </p>	
<table>
<tr>
<th>variable</th>
<th>exemple</th>
</tr>
<tr>
<th>string</th>
<th>let nom = “John”;</th>
</tr>
<tr>
<th>number</th>
<th>let note = 100;</th>
</tr>
<tr>
<th>Boolean</th>
<th> let isPasser= true; </th>
</tr>
<tr>
<th>Undefined</th>
<th> let nom = undefined; </th>
</tr>
<tr>
<th>Null</th>
<th> let monVariable = null; </th>
</tr>
<tr>
<th>Array</th>
<th> let nomArr = [“John”, “Jane”, 100]; </th>
</tr>
<tr>
<th>Object</th>
<th> let objVariable = {nom: “John”, age: 18};  </th>
</tr>
<tr>
<th>function</th>
<th>function aire(longueur, largeur) { ... } </th>
</tr>
</table>
<h2>Les commentaires</h2>
<p>/* */Voici un commentaire qui peut être sur plusieurs lignes</p>
<p>// Voici un commentaire sur une ligne</p>
<h2>Les fonctions</h2>
<p>Les fonctions permettent d'organiser des fonctionnalités qu'on souhaite pouvoir réutiliser.
 Par exemple, si on veut exécuter deux fois la même action, plutôt que de recopier le code, 
 on pourra écrire une fonction une fois puis l'utiliser aux deux endroits souhaités.</p>
<h3>Syntax:</h3>
 <p>function nomFontion (paramètre-liste) { </p>
<p> instruction }</p>
<h3>Exemple:</h3>
 <p>function aire(longueur, largeur) { </p>
 <p>let résultat = longueur * largeur; </p>
 <p>return résultat; } </p>
 <p> aire(3, 4);   // appeler une fonction</p>
 <h2>Les structures conditionnelles</h2>
<p>Les structures conditionnelles sont des éléments du code qui permettent de tester si une expression est vraie ou non 
et d'exécuter des instructions différentes selon le résultat.</p>
<h3>Syntax:</h3>
<p>if (expression) { </p>
<p>instruction à exécuter si l’expression est vraie } </p>
<p> else { instruction à exécuter si l’expression est faux }</p>
<p>switch (expression) { </p>
<p>case condition 1: instruction </p>
<p> break; </p>
<p>case condition 2: instruction </p>
<p>break; </p>
<p>...</p>
<p>case condition n: instruction </p>
<p>break;</p>
<p>default: instruction
}</p>
<h2>Structure de répétition</h2>
<p>L'instruction while et for permet de créer une boucle qui s'exécute tant qu'une condition de test est vérifiée.</p>
<h3>Syntax:</h3>
<p>for (initialisation;  condition;  expression finale) { </br>
instruction à exécuter si l’expression est vraie </br>
}</br>
while (expression) { </br>
instruction à exécuter si l’expression est vraie </br>
}</p>
</div>
<?php
	include 'inc/footer.php';
?>
<h1>QCM ph