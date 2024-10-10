<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esercizio20</title>
</head>
<body>
    <table style ="border:1px solid black;">
  <tr>
    <th>Indirizzo</th>
    <th>Metri Quadri</th>
    <th>Prezzo al metro quadro</th>
    <th>Prezzo totale</th>
  </tr>
  <tr>
  <?php
        $casa = array("indirizzo" => "Via Ciarda", "metriQuadri" => 147.63, "prezzoMetro" => 400.3);
        $casa["prezzoTot"] = $casa["metriQuadri"] * $casa["prezzoMetro"];
        foreach ($casa as $valore) {
            echo "<td>$valore</td>";
        }
    ?>
    </tr>
</table>  
</body>
</html>