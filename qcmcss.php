<?php
	include 'inc/header.php';
?>
<h1>QCM CSS</h1>
<FORM NAME="qcm1">
<div>
<B>Question :</B><BR>
1.Pour centrer un div (largeur de 400px) latéralement dans body, je peux utiliser la déclaration suivante :<BR>
<B>Réponses :</B></br>
<INPUT TYPE="radio" NAME="choix1" id ="1" VALUE="0">margin:0 auto;</INPUT></br>
<INPUT TYPE="radio" NAME="choix1" id ="2" VALUE="0">margin:auto 0;</INPUT></br>
<INPUT TYPE="radio" NAME="choix1" id ="3" VALUE="1">padding:10px;</INPUT>
<BR><BR>
</div>
<div>
<B>Question :</B><BR>
2. Pour éviter l'influence de padding et de border sur les dimensions d'un div, je peux utiliser la déclaration suivante :  <BR>
<B>Réponses :</B></br>
<INPUT TYPE="radio" NAME="choix2" id ="1" VALUE="0">border:no-padding;</INPUT></br>
<INPUT TYPE="radio" NAME="choix2"id ="2" VALUE="0">box-sizing:border-box;</INPUT></br>
<INPUT TYPE="radio" NAME="choix2" id ="3" VALUE="1">box-sizing:100%;</INPUT>
<BR><BR>
<B>Question :</B><BR>
3.  La règle suivante :
img {
   display:block;
   margin:0 auto;
}  permet de centrer les images :<BR>
<B>Réponses :</B></br>
<INPUT TYPE="radio" NAME="choix3" id ="1" VALUE="0">verticalement</INPUT></br>
<INPUT TYPE="radio" NAME="choix3" id ="2" VALUE="0">horizontalement</INPUT></br>
<INPUT TYPE="radio" NAME="choix3" id ="3" VALUE="1">verticalement et horizontalement</INPUT>
<BR><BR>
<B>Question :</B><BR>
4. -Grâce à la règle suivante : 
h1+p{
   font-family:tahoma;
   color:gray;
}  <BR>
<B>Réponses :</B></br> 
<INPUT TYPE="radio" NAME="choix4" id ="1" VALUE="0">tous les paragraphes s'écriront en gris.</INPUT></br>
<INPUT TYPE="radio" NAME="choix4" id ="2" VALUE="0"> chaque paragraphe qui suit directement une balise h1 s'écrira en gri</INPUT></br>
<INPUT TYPE="radio" NAME="choix4" id ="3" VALUE="0">tous les titres h1 qui précèdent un p s'écriront en gris.</INPUT>
<BR><BR>
<B>Question :</B><BR>
5. Grâce à la règle suivante :
p+p{
   font-family:calibri;
   color:green;
}<BR>
<B>Réponses :</B></br>
<INPUT TYPE="radio" NAME="choix5" id ="1"VALUE="0">tous les paragraphes s'afficheront en vert.</INPUT></br>
<INPUT TYPE="radio" NAME="choix5" id ="2" VALUE="0">tous les paragraphes frères d'une liste de paragraphes s'afficheront en vert.</INPUT></br>
<INPUT TYPE="radio" NAME="choix5" id ="3" VALUE="1">tous les paragraphes, sauf le dernier, s'afficheront en vert.</INPUT>
<BR><BR>
<B>Question :</B><BR>
6.Soit le sélecteur main>nav. Il influencera un élément nav :<BR>
<B>Réponses :</B></br>
<INPUT TYPE="radio" NAME="choix6" id ="1" VALUE="0">quelconque, mais contenu dans main</INPUT></br>
<INPUT TYPE="radio" NAME="choix6" id ="2" VALUE="0">quelconque</INPUT></br>
<INPUT TYPE="radio" NAME="choix6" id ="3" VALUE="1">enfant direct de main</INPUT>
<BR><BR>
<B>Question :</B><BR>
7.Pour définir un conteneur en mode Flex, j'utilise l'écriture suivante :  <BR>
<B>Réponses :</B></br>
<INPUT TYPE="radio" NAME="choix7" id ="1" VALUE="0">flex:true;</INPUT></br>
<INPUT TYPE="radio" NAME="choix7" id ="2" VALUE="0"> flex-mode:true;</INPUT></br>
<INPUT TYPE="radio" NAME="choix7" id ="3" VALUE="1"> display:flex;</INPUT>
<BR><BR>
<B>Question :</B><BR>
8.  Un div est déclaré en mode Flex. La ligne suivante flex-direction: row; figure dans la règle du div. Que signifie cette ligne ? Afficher le contenu du div : <BR>
<B>Réponses :</B></br>
<INPUT TYPE="radio" NAME="choix8" id ="1" VALUE="0">verticalement</INPUT></br>
<INPUT TYPE="radio" NAME="choix8" id ="2" VALUE="0"> sur une ligne horizontale</INPUT></br>
<INPUT TYPE="radio" NAME="choix8" id ="3" VALUE="1">dans un coin</INPUT>
<BR><BR>
<B>Question :</B><BR>
9. Soit un div de classe .flex (défini en mode flex). Que signifie la ligne de la règle suivante dans ce contexte ?
.flex > div:nth-child(1){
    background : #009246;
}Définir la couleur...<BR>
<B>Réponses :</B></br>
<INPUT TYPE="radio" NAME="choix9" id ="1" VALUE="0">du fond du div de classe .flex</INPUT></br>
<INPUT TYPE="radio" NAME="choix9" id ="2" VALUE="0">du fond du premier div contenu dans le div .flex</INPUT></br>
<INPUT TYPE="radio" NAME="choix9" id ="3" VALUE="1">des bordures du div de la classe .flex</INPUT>
<BR><BR>
<B>Question :</B><BR>
 10.Soit la règle suivante : div {
   text-align:center;
   width:600px;
}Cette règle : <BR>
<B>Réponses :</B></br>
<INPUT TYPE="radio" NAME="choix10" id ="1" VALUE="0">permet de centrer horizontalement un div quelconque dans son conteneur</INPUT></br>
<INPUT TYPE="radio" NAME="choix10" id ="2" VALUE="0">permet de centrer un div situé uniquement dans body</INPUT></br>
<INPUT TYPE="radio" NAME="choix10" id ="3" VALUE="1"> ne centre pas les div horizontalement </INPUT>
<BR><BR>
<B>Question :</B><BR>
 11.Soit la règle suivante :
 img {
   display:block;
   margin:0 auto;
}L'utilisateur souhaite que l'image soit centrée latéralement dans son conteneur. La ligne display:block; est indispensable, car une image est : <BR>
<B>Réponses :</B></br>
<INPUT TYPE="radio" NAME="choix11" id ="1" VALUE="0">du type inline</INPUT></br>
<INPUT TYPE="radio" NAME="choix11" id ="2" VALUE="0">flottante par défaut</INPUT></br>
<INPUT TYPE="radio" NAME="choix11" id ="3" VALUE="1">du type block</INPUT>
<BR><BR>
<B>Question :</B><BR>
 12.Soit la déclaration suivante : ul>li:nth-child(3){
   color:red;
}Une séquence de quatre listes à puces existe dans le code html. La règle CSS permet d'afficher en rouge : <BR>
<B>Réponses :</B></br>
<INPUT TYPE="radio" NAME="choix12" id ="1" VALUE="0">la troisième puce et le texte associé pour les quatre listes à puces</INPUT></br>
<INPUT TYPE="radio" NAME="choix12" id ="2" VALUE="0"> les trois premières puces</INPUT></br>
<INPUT TYPE="radio" NAME="choix12" id ="3" VALUE="1">  la troisième puce et le texte de la première liste à puces</INPUT>
<BR><BR>
<B>Question :</B><BR>
 13. Le sélecteur div+p permet d'attribuer un style :<BR>
<B>Réponses :</B></br>
<INPUT TYPE="radio" NAME="choix13" id ="1" VALUE="0">à un paragraphe quelconque d'un div</INPUT></br>
<INPUT TYPE="radio" NAME="choix13" id ="2" VALUE="0">au paragraphe qui suit directement le div</INPUT></br>
<INPUT TYPE="radio" NAME="choix13" id ="3" VALUE="1"> aux paragraphes situés après le div</INPUT>
<BR><BR>
<B>Question :</B><BR>
 14. Quel sélecteur faut-il utiliser pour attribuer un style à tous les paragraphes enfants directs d'un div ?<BR>
<B>Réponses :</B></br>
<INPUT TYPE="radio" NAME="choix14" id ="1" VALUE="0">div=p</INPUT></br>
<INPUT TYPE="radio" NAME="choix14" id ="2" VALUE="0">div::p</INPUT></br>
<INPUT TYPE="radio" NAME="choix14" id ="3" VALUE="1"> div>p</INPUT>
<BR><BR>
<INPUT TYPE="button" NAME="bouton" VALUE="Vérifier"
</INPUT>
</FORM>
<?php
	include 'inc/footer.php';
?>