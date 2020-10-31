<?php
	include 'inc/header.php';
?>
<div style="margin:2%;">
<h1>HTML</h1>
<h2>Qu’est ce que c’est un tag html</h2>
<h3>Les balise (tag):</h3>
<p>- les balises ouvrantes: <html> </br>
- les balise fermates: </html> </p>
<h3>Les balises vides:</h3>
<p>  - tag , exemples: img , br , input  </p>
<p></strong>attributs:</strong></br>
 - Un attribut est une pair nom=“valeur” </br>
- Qui est à l'intérieur d'un balise </p>
<h2>Corps d’une page web</h2>
<p>!DOCTYPE </br>html</br> html</br> head</br> title</br> Titre de la page</br> title</br> head</br> body</br>
body</br> html</p>
<h2>!DOCTYPE html</h2>
<p>Un DOCTYPE est un préambule nécessaire. 
Quand il est omis, les navigateurs ont la tendance à utiliser un mode de rendre différent qui est incompatible avec certaines spécifications </p>
<h2>La section HEAD</h2>
 <p> Contient information sur le document</br>
 title   - le titre du document </br>
 link - le lien vers un resource utilise par la page (stylesheet resource) </br>
 meta - information supplémentaire sur la page</br>
  script - des références aux fichiers javascript</br>
 </p>
 <h2>La section BODY</h2>
<p>Contient les balises qui sont affichées dans le navigateur </br>
La section BODY doit contenir seulement du contenu </br>
L’information du style doit être mis en documents extérieurs </p>
<h2>Marquer des titres</h2>
<p>Les titre des sections: H1 ... H6</p>
 <h2>Contenu et formatage</h2>
<p>p - paragraphe <br />  
br - ligne nouveau </br>
hr - représente une ligne horizontale </br>
em  - texte souligne </br>
strong - fort texte</p>
<h2>Listes</h2>
<p>Listes ordonnées: ol </br>
Listes non ordonnées: ul</br> 
Elements du chaque liste: li</p>
<p>Exemple: </br>
<ul> </br>
 <li>images</li></br>
 <li>liens</li> </br>
 </ul> </p>
 <h2>Les Images</h2>
<p>img: permet de représenter une image dans un document.</br>
<strong>Attributs:</strong> </br>
- src: L'URL de l'image (!!! Cet attribut est obligatoire) </br>
- alt: définit le texte alternatif utilisé lorsqu'il est impossible d'afficher l'image</br>
 - height: La hauteur intrinsèque de l'image exprimée en pixels </br>
 - width: La largeur intrinsèque de l'image, exprimée en pixels</p>
 <h2>Liens</h2>
<p><a> </a> (ancre) définit un hyperlien vers un autre endroit de la même page ou vers une autre page sur le Web.</p>
<p></strong>Attributs:</strong> </br>
- href : indique la cible du lien </br>
- target : indique où affiche la ressource liée</p>
<h2>Div</h2>
<p><div> </div> : - qui signifie division du document </br>
 - permet d'organiser le contenu </br>
 <strong>Attributs:</strong></br>
 - class</br> 
 - id</p>
<h2>Tableaux</h2>
<p>• la balise <strong> table</strong> définit un tableau HTML </br>
• l'élément <strong>tr</strong>définit une ligne de tableau </br>
• l'élément <strong>th</strong> définit un en-tête de tableau</br>
 • l'élément <strong>td</strong>  définit une cellule de tableau</br>
 • l'élément <strong>caption</strong>  pour définir une légende du tableau </br>
 • Utilisez la propriété <strong>CSS border</strong>  pour définir une frontière </br>
 • Utilisez la propriété <strong>CSS border-collapse</strong> pour replier les bordures de cellules </br>
 • Utilisez la propriété <strong>padding</strong> pour ajouter aux cellules de rembourrage</br>
 • Utilisez la propriété <strong>text-align</strong> pour aligner le texte de la cellule</br>
 • Utilisez la propriété <strong>border-spacing</strong> pour définir l'espacement entre les cellules</p>
<h2>Formulaires</h2>
<p>Les formulaires HTML sont utilisés pour collecter les entrées du l’utilisateur.</br>
Nécessaire pour collecter et envoyer data vers le serveur</br>
L'élément <form> </form> définit un formulaire HTML</p>
<h2>Input Types</h2>
<p>• Input Type: text</br>
 input type="text": Un champ de texte sur une seule ligne. Les sauts à la ligne sont automatiquement retirés de la valeur envoyée</br>
 • Input Type: password</br>
 input type="password": Un champ de texte sur une seule ligne dont la valeur sera masquée </br>
 • Input Type: submit </br>
 input type="submit": Un bouton pour soumettre le formulaire</br>
 • Input Type: checkbox</br>
 input type="checkbox": Une case à cocher. Il faut utiliser l'attribut value pour définir la valeur envoyée par cette objet. L'attribut checkedpermet d'indiquer si oui ou non la case est cochée. </br>
 • Input Type: radio</br>
 input type="radio": permettre à l'utilisateur de choisir une, et une seule, option parmi plusieurs possibles</p>
 <h2>Semantic Elements</h2>
<p>Un élément sémantique décrit clairement son sens pour le navigateur et le développeur. </br>
- Des exemples d'éléments non-sémantiques : div et span - Ne dit rien sur son contenu. </br>
- Des exemples d'éléments sémantiques : form, table, etimg - Définit clairement son contenu.</br>
-L'élément HTML <strong>article</strong> représente le contenu autonome dans une page</br>
-L'élément HTML <strong>header</strong> représente un groupe de contenus introductives ou des contenus aidant à la navigation</br>
-L'élément HTML <strong>footer</strong> représente le pied de page de la section ou de la racine de sectionnement la plus proche</br>
-L'élement HTML <strong>section</strong> (pour Section) représente une section générique d'un document</br>
-L'élément HTML <strong>aside</strong> est une section de la page dont le contenu est indirectement lié à ce qui l'entoure et qui pourrait être séparé de cet environnement</p>
</div>
<?php
	include 'inc/footer.php';
?>