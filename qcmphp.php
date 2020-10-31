<?php
	include 'inc/header.php';
?>
<h1>QCM php</h1>
<FORM NAME="qcm1">
<div>
<B>Question :</B><BR>
1. Quelle fonction est utilisée pour supprimer les espaces au début d’une chaîne? <BR>
<B>Réponses :</B></br>
<INPUT TYPE="radio" NAME="choix1" id ="1" VALUE="0">trim() </INPUT></br>
<INPUT TYPE="radio" NAME="choix1" id ="2" VALUE="0">strim()</INPUT></br>
<INPUT TYPE="radio" NAME="choix1" id ="3" VALUE="1">rtrim()</INPUT></br>
<INPUT TYPE="radio" NAME="choix1" id ="4" VALUE="0">ltrim()</INPUT>
<BR><BR>
</div>
<div>
<B>Question :</B><BR>
2. Quelle fonction pour comparer deux chaines de caractères? <BR>
<B>Réponses :</B></br>
<INPUT TYPE="radio" NAME="choix2" id ="1" VALUE="0">strcmp()</INPUT></br>
<INPUT TYPE="radio" NAME="choix2"id ="2" VALUE="0">strcasecmp()</INPUT></br>
<INPUT TYPE="radio" NAME="choix2" id ="3" VALUE="1">strspn()</INPUT></br>
<INPUT TYPE="radio" NAME="choix2" id ="4" VALUE="0">strcspn()</INPUT></br>
<INPUT TYPE="radio" NAME="choix2" id ="5" VALUE="0">Tout les réponses sont vrais</INPUT>
<BR><BR>
</div>
<B>Question :</B><BR>
3. Laquelle des fonctions suivantes convertira une chaîne en majuscule?  <BR>
<B>Réponses :</B></br>
<INPUT TYPE="radio" NAME="choix3" id ="1" VALUE="0">strtoupper() </INPUT></br>
<INPUT TYPE="radio" NAME="choix3" id ="2" VALUE="0">uppercase()</INPUT></br>
<INPUT TYPE="radio" NAME="choix3" id ="3" VALUE="1">str_uppercase()</INPUT></br>
<INPUT TYPE="radio" NAME="choix3" id ="4" VALUE="1">struppercase()</INPUT></br>
<INPUT TYPE="radio" NAME="choix3" id ="5" VALUE="0">Tout les réponses sont vrais</INPUT>
<BR><BR>
<B>Question :</B><BR>
4. Quelle sera la sortie du code PHP suivant?  <BR>
<?php
    $title = "welcom to waytolearnx!";
    echo ucwords($title);
?>
<B>Réponses :</B></br>
<INPUT TYPE="radio" NAME="choix4" id ="1" VALUE="0">Welcom to waytolearnx! </INPUT></br>
<INPUT TYPE="radio" NAME="choix4" id ="2" VALUE="0">Welcom To Waytolearnx! </INPUT></br>
<INPUT TYPE="radio" NAME="choix4" id ="3" VALUE="0">WELCOM TO WAYLEARNX! </INPUT></br>
<INPUT TYPE="radio" NAME="choix4" id ="4" VALUE="0">welcom to waytolearnx!</INPUT>
<BR><BR>
<B>Question :</B><BR>
5. Laquelle des fonctions suivantes trouve la dernière occurrence d’une chaîne et renvoie sa position numérique? <BR>
<B>Réponses :</B></br>
<INPUT TYPE="radio" NAME="choix5" id ="1"VALUE="0"> strlastpos()</INPUT></br>
<INPUT TYPE="radio" NAME="choix5" id ="2" VALUE="0">strpos()</INPUT></br>
<INPUT TYPE="radio" NAME="choix5" id ="3" VALUE="1">strlast()</INPUT></br>
<INPUT TYPE="radio" NAME="choix5" id ="4" VALUE="0">strrpos()</INPUT>
<BR><BR>
<B>Question :</B><BR>
6. Lorsque deux chaînes sont exactement équivalentes, Strcmp() renvoie quoi? <BR>
<B>Réponses :</B></br>
<INPUT TYPE="radio" NAME="choix6" id ="1" VALUE="0">Renvoie une chaîne</INPUT></br>
<INPUT TYPE="radio" NAME="choix6" id ="2" VALUE="0">Renvoie 0 </INPUT></br>
<INPUT TYPE="radio" NAME="choix6" id ="3" VALUE="1">Retourne 1</INPUT></br>
<INPUT TYPE="radio" NAME="choix6" id ="4" VALUE="0">Ne renvoie rien</INPUT>
<BR><BR>
<B>Question :</B><BR>
7. Quelle fonction est utilisée pour remplacer une chaîne entière par une autre chaîne?  <BR>
<B>Réponses :</B></br>
<INPUT TYPE="radio" NAME="choix7" id ="1" VALUE="0">Strstr()</INPUT></br>
<INPUT TYPE="radio" NAME="choix7" id ="2" VALUE="0">Strrpos()</INPUT></br>
<INPUT TYPE="radio" NAME="choix7" id ="3" VALUE="1">Replace()</INPUT></br>
<INPUT TYPE="radio" NAME="choix7" id ="4" VALUE="0">Str_replace()</INPUT>
<BR><BR>
<B>Question :</B><BR>
8. Pour sélectionner une sous-chaîne par position, vous utilisez ______ ? <BR>
<B>Réponses :</B></br>
<INPUT TYPE="radio" NAME="choix8" id ="1" VALUE="0">Strstr()</INPUT></br>
<INPUT TYPE="radio" NAME="choix8" id ="2" VALUE="0">substr()</INPUT></br>
<INPUT TYPE="radio" NAME="choix8" id ="3" VALUE="1">Strsub()</INPUT></br>
<INPUT TYPE="radio" NAME="choix8" id ="4" VALUE="0">str()</INPUT>
<BR><BR>
<B>Question :</B><BR>
9. PHP offre un autre moyen pour définir une chaîne de caractére, autre que simples guillemets ‘ ‘ ou doubles guillemets ” ”, lequel?<BR>
<B>Réponses :</B></br>
<INPUT TYPE="radio" NAME="choix9" id ="1" VALUE="0">Heredoc </INPUT></br>
<INPUT TYPE="radio" NAME="choix9" id ="2" VALUE="0">Concaténation </INPUT></br>
<INPUT TYPE="radio" NAME="choix9" id ="3" VALUE="1">Littéraux</INPUT></br>
<INPUT TYPE="radio" NAME="choix9" id ="4" VALUE="0">Aucune de ces réponses n’est vraie.</INPUT>
<BR><BR>
<B>Question :</B><BR>
10. Les caractères suivant \,?, *, \, &, $,] sont échappés par quelle méthode? <BR>
<B>Réponses :</B></br>
<INPUT TYPE="radio" NAME="choix10" id ="1" VALUE="0">remove() </INPUT></br>
<INPUT TYPE="radio" NAME="choix10" id ="2" VALUE="0">quotemeta()</INPUT></br>
<INPUT TYPE="radio" NAME="choix10" id ="3" VALUE="1"> removechar()</INPUT></br>
<INPUT TYPE="radio" NAME="choix10" id ="4" VALUE="0">addslashes()</INPUT>
<BR><BR>
<INPUT TYPE="button" NAME="bouton" VALUE="Vérifier"
</INPUT>
</FORM>
<?php
	include 'inc/footer.php';
?>