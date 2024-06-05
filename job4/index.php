
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .nbreSouligner{
        font-weight: bold;
        text-decoration: underline;
    }
</style>
<body>
<?php 
    for ($i = 0; $i <= 1337; $i++){
        if($i == 42){
            echo " <span class = 'nbreSouligner'>$i</span><br> ";
        }else{
            echo "$i <br>";
        }
    }
?>
</body>
</html>
