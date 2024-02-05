<html>

<head>
 <meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=utf-8">
 <meta NAME="description" CONTENT="Exemple de tableaux avec feuille de style">
 <meta NAME="keywords" LANG="fr" CONTENT="html,styles,css">
 <meta NAME="Autdor" CONTENT="chris">
<title>Tshirts</title>

<!-- appel de la feuille de style externe -->
 <link href="projet.css" type="text/css" rel="stylesheet" media="all">
</head>

<body>
  <div class="">

  <table class="form">
  <td class="form"><a class=""href="boutique.html#boutique">Retour </a></td>


  </table>
  </div>
<div class="">
    <a href="index.html"><img class="mid" src="Mono.gif" width="22%"></a>
</div>

<div>
  <?php

$tshirt=$_POST['tshirt'];
 if($tshirt=="ACHETER")
 {
echo "<div class='boitetshirt'>
<table>
<td>
<img src='tshirt.png' width=100%>

</td>
<td class='selectiontshirt'>

<label class='taille'>Choisir votre taille</label>
</td>



<tr>
<td width=50%;>
</td>
<td>
<form name='boutique' action='commande.php'  method='POST' enctype='application/x-www-form-urlencoded'>
<select name='taille' id='taille'>
<option value='XL'>XL</option>
<option value='L'>L</option>
<option value='M'>M</option>
<option value='S'>S</option>
</select>
<input class='prix' type='submit' name='tailleconfirm' value='ACHETER'>
</form>
</td>
</tr>
</table>
</div>
";

 }
 if($tshirt=="Acheter")
 {
echo "<div class='boitetshirt'>
<table>
<td>
<img src='tshirt2.png' width=100%>

</td>
<td class='selectiontshirt'>

<label class='taille'>Choisir votre taille</label>
</td>



<tr>
<td width=50%;>
</td>
<td>
<form name='boutique' action='commande.php'  method='POST' enctype='application/x-www-form-urlencoded'>
<select name='taille' id='taille'>
<option value='XL'>XL</option>
<option value='L'>L</option>
<option value='M'>M</option>
<option value='S'>S</option>
</select>
<input class='prix' type='submit' name='tailleconfirm' value='ACHETER'>
</form>
</td>
</tr>
</table>
</div>
";

 }
 if($tshirt=="Acheter.")
 {
echo "<div class='boitetshirt'>
<table>
<td>
<img src='tshirt3.png' width=100%>

</td>
<td class='selectiontshirt'>

<label class='taille'>Choisir votre taille</label>
</td>



<tr>
<td width=50%;>
</td>
<td>
<form name='boutique' action='commande.php'  method='POST' enctype='application/x-www-form-urlencoded'>
<select name='taille' id='taille'>
<option value='XL'>XL</option>
<option value='L'>L</option>
<option value='M'>M</option>
<option value='S'>S</option>
</select>
<input class='prix' type='submit' name='tailleconfirm' value='ACHETER'>
</form>
</td>
</tr>
</table>
</div>
";

 }

   ?>
</div>
<footer>
  <div class='espace'>
  </div>
  <hr>
<p>Copyright (c) 2022 Copyright Holder All Rights Reserved.</p>
<p>Chris Aghayere</p>
<p><a href="rgpd.html">Mentions Légales</p></a>
</footer>
</body>
</html>
