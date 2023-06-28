<!DOCTYPE html>
<html>

<head>
    <title>Hallo-Welt-Beispiel</title>
</head>

<body>
    <h1>Artikel</h1>

    <?php
    //1. Verbindungsaufbau
    $pdo = new PDO('mysql:host=localhost;dbname=haro;charset=utf8', 'root', '');

    //2. Formulierung und Senden der Anfrage
    $sql = 'SELECT * FROM haro.artikel WHERE bestand > 500';
    $stm = $pdo->query($sql);

    echo "<table>";

    echo "<th>Bezeichnung</th>
    <th>Bestand</th>
    <th>Verkaufspreis</th>";

    //3. Ausweertung des Ergbnisses
    while ($row = $stm->fetchObject()) {
        echo "<tr>";
        echo "<td>";
        echo $row->bezeichnung;
        echo "</td>";
        echo "<td>";
        echo $row->bestand;
        echo "</td>";
        echo "<td>";
        echo $row->vkpreis . " €";
        echo "</td>";
        echo "</tr>";
    }

    echo "</table>";

    $stm = null;

    //4. Verbindungsabbau
    $pdo = null;
    ?>
</body>

</html>