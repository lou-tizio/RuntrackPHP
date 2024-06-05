<!DOCTYPE html>
<html>
<head>
    <title>Tableau des Variables</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<?php
// Création des variables de types primitifs
$integerVar = 42;
$floatVar = 3.14;
$stringVar = "Bonjour le monde";
$booleanVar = true;
$arrayVar = array(1, 2, 3, 4, 5);
$nullVar = NULL;

// Génération du tableau HTML
echo "<table>";
echo "<thead>";
echo "<tr><th>Type</th><th>Nom</th><th>Valeur</th></tr>";
echo "</thead>";
echo "<tbody>";

// Fonction pour afficher les valeurs des variables
function afficherLigne($type, $nom, $valeur) {
    echo "<tr>";
    echo "<td>$type</td>";
    echo "<td>$nom</td>";
    echo "<td>$valeur</td>";
    echo "</tr>";
}

// Affichage des variables
afficherLigne('Integer', '$integerVar', $integerVar);
afficherLigne('Float', '$floatVar', $floatVar);
afficherLigne('String', '$stringVar', $stringVar);
afficherLigne('Boolean', '$booleanVar', $booleanVar ? 'true' : 'false');
afficherLigne('Array', '$arrayVar', implode(", ", $arrayVar));
afficherLigne('NULL', '$nullVar', 'NULL');

echo "</tbody>";
echo "</table>";
?>

</body>
</html>

