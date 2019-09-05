<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>php-get-params</title>
</head>
<?php $lunghezza = $_GET["lunghezza"];
  $altezza = $_GET["altezza"];
  $larghezza = $_GET["larghezza"]; 
  $area = $lunghezza * $altezza *$larghezza;
  ?>
<body>
  <p>creare una pagina in PHP che legga in ingresso 3 parametri numerici (in GET) che rappresentano le 3 dimensioni di un parallelepipedo: lunghezza, larghezza, altezza; stampare le 3 dimensioni e calcolare il volume della figura (lun x lar x alt)</p>

  <p> <?php echo "lunghezza: ".$lunghezza;?></p>
  <p> <?php  echo "larghezza: ".$larghezza;?></p>
  <p> <?php  echo "altezza: ".$altezza;?></p>
  <p> <?php  echo "area: ".$area;?></p>
  

</body>
</html>