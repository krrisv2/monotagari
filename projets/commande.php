<html>

<head>
 <meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=utf-8">
 <meta NAME="description" CONTENT="Exemple de tableaux avec feuille de style">
 <meta NAME="keywords" LANG="fr" CONTENT="html,styles,css">
 <meta NAME="Autdor" CONTENT="chris">
<title>Commande</title>

<!-- appel de la feuille de style externe -->
 <link href="projet.css" type="text/css" rel="stylesheet" media="all">
</head>

<body>
  <div class="">

  <table class="form">
  <td class="form"><a class=""href="boutique.html">Retour </a></td>


  </table>
  </div>
<div class="">
    <a href="index.html"><img class="mid" src="Mono.gif" width="22%"></a>
</div>

<div>
<?php
$random = rand(10000,100000);
$taille=$_POST['tailleconfirm'];
echo "<p class='commande'>La commande pour votre t-shirt n°$random est confirmé</p>";

 ?>
</div>

</body>
</html>
