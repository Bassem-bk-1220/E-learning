<?php
	include 'inc/header.php';
?>
<div style="margin:2%;">
<h1>CSS:Cascading Style-Sheets</h1>
<p><strong>Cascade</strong>: il y a plusieurs niveaux sur lesquels on peut définir le style d'une page </br>
<strong>Style</strong>: la façon dont les balises HTML sont affichés
<strong>Style-sheets</strong>: documents où l'information de style est stockée - le plus souvent des documents externes</p>
<h2>Pourquoi CSS ?</h2>
<p>- pour spécifier le aspect et le format </br>
- sépare le contenu de la présentation (http://www.csszengarden.com/)</br>
- le désign qui échelles: les modifications apportées à un place sont répartis à l'ensemble des pages automatiquement</p>
<h2>La syntaxe CSS</h2>
<p>Un set de reglès CSS consiste dans un sélecteur et un block de déclaration: </br>
Le sélecteur pointe vers l'élément HTML que vous voulez stilyser. </br>
Le block de déclaration a une ou plusierus déclarations séparées par des point-virgule. </br>
Chaque déclaration a une propriété et une valeur, séparées par des côlon.</p>
<h2>Comment écrire un code css</h2>
<p><strong>• Attribut de style local:</strong></p>
 <p> (p style="color:red; font-size:12px") Bonjour à tous! </p>
 <p><strong>• La feuille de style en cascade:</strong></p> 
 <p>La balise <strong>link</strong> définit une lien entre un document et une ressource externe.</br> 
 La balise <strong>link</strong> est utilisée pour relier une lien d’une page de style externe.</p>
<h2>Les sélecteurs CSS</h2>
<p>Les sélecteurs CSS vous permettent de sélecter et manipuler de différentes éléments HTML. 
Il sont utilisés pour trouver des éléments à partir de leur id, class, type, attribute.</p>
<p><strong>Le sélecteur élément</strong> </br>
• Il sélecte des éléments en tenant compte du nom d’élément </br>
• Il faut sélecter tous les éléments <p>  de la page comme ça: (tous les <p> seront centrés et bleus)</p>
<h2>Les sélecteurs CSS</h2>
<p>Les sélecteurs CSS vous permettent de sélecter et manipuler de différentes éléments HTML.
 Il sont utilisés pour trouver des éléments à partir de leur id, class, type, attribute.</p>
<p><h3>Le sélecteur id </h3></br>
• Il sélecte des éléments avec un attribut id </br>
• Un id est unique dans une page, et donc l’id est utilisé pour sélecter un seul, unique élément</br>
 • Pour sélecter un élément avec un attribut id, écrire un # puis l’id</p>
<h3>Le sélecteur class </h3>
<p>• Il sélecte des éléments avec un attribut class.</br>
 • Pour sélecter un élément avec un attribut class mettre un point, puis le nom de la class. </p>
<h3>Le groupement de sélecteurs</h3>
<p>• Vous pouvez grouper le sélecteurs pour minimiser le code.</br>
 • Pour les grouper, séparez chaque sélecteurs avec une virgule. </p>
<h2>Couleur de texte</h2>
<p>- Nom de la couleur en anglais : https://www.w3.org/TR/css3-color</br>
- Code décimal (RGB ou RGBA) rouge + vert + bleu, 0 - 255 -> 16 milion colors </br>
- Code hexadécimal:  # + 6 hex digits - hexadecimal base 16 - digits: 0-9, A(10) - F(15) - color picker</p>
<h2>Propriétés d'arrière plan</h2>
 <table>
<tr>
<th>Propriété</th>
<th> Description</th>
<th> Valeurs</th>
</tr>
<tr>
<th>background</th>
<th> Définit toutes les propriétés d'arrière-plan dans une déclaration </th>
<th> background-attachment </br>background-color</br> background-image</br> background-position</br> background-repeat</th>
</tr>
<tr>
<th>background-attachment</th>
<th>Définit si une image d'arrière-plan est fixe ou défile avec le reste de la page </th>
<th>scroll, fixed, local, initial, inherit</th>
</tr>
<tr> 
<th>background-color</th>
<th> Définit la couleur d'arrière-plan d'un élément</th>
<th> couleur, initial, inherit</th>
</tr>
<tr>
<th>background-image</th>
<th>Définit l'image d'arrière-plan pour un élément  </th>
<th>url, none, initial, inherit</th>
</tr>
<tr>
<th>background-position</th>
<th>Définit la position de départ d'une image d'arrière-plan </th>
<th>left</br> top</br> left center</br> left bottom</br> right top</br> right center</br> right bottom</br> center top</br> center center</br> center bottom</br></th>
</tr>
<tr>
<th>background-repeat</th>
<th>Définitla répétitiond'une image de fond</th>
<th> repeat, repeat-x, repeat-y, norepeat, initial, inherit</th>
</tr>
</table>
<h2>Propriétés de texte </h2>
<table>
<tr>
<th>Propriété</th>
<th> Description</th>
<th>Valeurs</th>
</tr>
<tr>
<th>color</th>
<th>Définit la couleur du texte</th>
<th> nom de la couleur, code décimal, code hexadécimal</th>
</tr>
<tr>
<th>direction</th>
<th>Spécifie la direction du texte / direction d'écriture</th>
<th>  ltr, rtl</th>
</tr>
<tr>
<th>letter-spacing</th>
<th>Augmente ou diminue l'espace entre les caractères d'un texte</th>
<th> normal, number, length,% </th>
</tr>
<tr>
<th>line-height</th>
<th> Définit la hauteur de ligne</th>
<th>  normal, length</th>
</tr>
<tr>
<th>text-align </th>
<th>Spécifie l'alignement horizontal du texte</th>
<th> left, right, center, justify</th>
</tr>
</table>
  <h2>Les listes</h2>
<table>
<tr>
<th>Propriété</th>
<th> Description</th>
<th>Valeurs</th>
</tr>
<tr>
<th>list-style</th>
<th> Définit toutes les propriétés d'une liste dans une déclaration</th>
<th> list-style, list-style-image, liststyle-position, initial, inherit</th>
</tr>
<tr>
<th>list-style-image</th>
<th> Spécifie une image comme marqueur d'élément de liste</th>
<th> none, url, initial, inherit</th>
</tr>
<tr>
<th>list-style-position</th>
<th>Spécifie si les marqueurs d'élément de liste doivent apparaître à l'intérieur ou à l'extérieur du flux de contenu</th>
<th>inside, outside, initial, inherit</th>
</tr>
<tr>
<th>list-style-type</th>
<th> Spécifie le type de marqueur d'élément de liste</th>
<th>disc, armenian, circle, cjk-ideographic, decimal, decimal-leading-zero, georgian, hebrew, hiragana, hiragana-iroha, katakana, katakana-iroha, loweralpha, lower-greek, lower-latin, lower-roman, none, square, upper-alpha, upper-greek, upperlatin, upper-roman</th>
</tr>
</table>
<h2>CSS Box Model</h2>
<p>Tous les éléments HTML peuvent être considérées comme des boîtes.</br>
 En CSS, le terme "box model" est utilisé lorsque l'on parle de la conception et de la mise en page.</br>
<strong>Content</strong> - Le contenu de la boîte, où il y a le texte et les images</br>
 <strong>Padding</strong> - Efface une zone autour du contenu. Le padding est transparent </br>
 <strong>Border</strong> - Une frontière qui va autour du padding et du content </br>
 <strong>Margin </strong>- Efface une zone en dehors de la frontière. La margin est transparente</p>
<h2>CSS positioning</h2>
<table>
<tr>
<th>Propriété</th>
<th> Description</th>
</tr>
<tr>
<th>static</th>
<th> Valeur par défaut. Les éléments sont rendus dans l'ordre, tels qu'ils apparaissent dans le flux de documents</th>
</tr>
<tr>
<th>absolute</th>
<th>  L'élément est positionné par rapport à son premier ancêtre positionné (non statique</th>
</tr>
<tr>
<th>fixed</th>
<th>L'élément est positionné par rapport à la fenêtre du navigateur</th>
</tr>
<tr>
<th>relative</th>
<th>  The element is positioned relative to its normal position</th>
</tr>
<tr>
<th>initial</th>
<th>Sets this property to its default value</th>
</tr>
<tr>
<th>inherit</th>
<th>Inherits this property from its parent element</th>
</tr>
</table>
</div>
<?php
	include 'inc/footer.php';
?>