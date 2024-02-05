<html>

<head>
 <meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=utf-8">
 <meta NAME="description" CONTENT="Exemple de tableaux avec feuille de style">
 <meta NAME="keywords" LANG="fr" CONTENT="html,styles,css">
 <meta NAME="Autdor" CONTENT="chris">
<title>newsletter</title>

<!-- appel de la feuille de style externe -->
 <link href="projet.css" type="text/css" rel="stylesheet" media="all">
</head>

<body>
<div class="">
    <a href="index.html"><img class="mid" src="Mono.gif" width="22%"></a>
</div>
<?php
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];
/*oui*/
if(isset($_POST['choix']))
{
  $choix = $_POST['choix'];
}
/*non*/
else{
  $choix = NULL;
}


$checkemail=strpos($email,'@');

if (empty($nom) or empty($prenom) or empty($email) || empty($choix) )
{
  echo'<div class="formframe">
    <div class="form">
      <p class="form">Informations Manquantes,Inscription non confirmée</p>

    </div>
  </div>

  <div class="">

  <table class="form">
  <td class="form"><a class=""href="formulaire.html#news">Retour </a></td>


  </table></div>';
}

elseif ($checkemail== false) {
  // code...
  echo'<div class="formframe">
    <div class="form">
      <p class="form">Adresse email non valide(@ non trouvé),Inscription non confirmée</p>

    </div>
  </div>

  <div class="">

  <table class="form">
  <td class="form"><a class=""href="formulaire.html#news">Retour </a></td>


  </table></div>';
}
  else
  {
    // code...

echo'<div class="formframe">
  <div class="form">
    <p class="form">Inscription à la newsletter confirmé</p>

  </div>
</div>
<img src="turtle.gif" width="5%">
<div class="">

<table class="form">
<td class="form"><a class=""href="index.html">Retour </a></td>


</table></div>';
}
?>
</body>
</html>
