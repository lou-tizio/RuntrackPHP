<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Fonction Hello</h1>
<?php 
  function bonjour ($maVar){
    if($maVar){
        echo "Bonjour";
    }else{
        echo "Bonsoir";
    }
  } 
  bonjour(true);
  echo "<br>";
  bonjour(false);
?>
</body>
</html>