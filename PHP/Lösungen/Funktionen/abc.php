<!DOCTYPE html>
<html>

<head>
    <title>PHP - Variablen (1)</title>
    <meta charset="utf-8">
</head>

<body>
    <h1>Mitternachtsformel</h1>
    <?php

        // Wertzuweisung
        $a = $_GET['a'];
        $b = $_GET['b']; 
        $c = $_GET['c'];

        $start = $_GET['start'];
        $end = $_GET['end'];
        $steps = $_GET['steps'];

        $radikand = $b*$b - 4*$a*$c;
        
        /*
        Wichtig!!!
        Die Bedeutung von "sqrt()" habe ich auf der 
        Seite https://www.php.net/manual/de/function.sqrt.php 
        nachgeschlagen
        */

        $x1 = (-$b + sqrt($radikand)) / (2*$a);

        $x2 = (-$b - sqrt($radikand)) / (2*$a);

        if (is_nan($x1) || is_nan($x2)) {
            $nullstelle;
            if (is_nan($x1) && is_nan($x2)) {
                echo "<strong>Keine Nullstelle</strong>";
            } else {
            if (is_nan($x1)) {
                $nullstelle = $x2;
            } else {
                $nullstelle = $x1;
            }
            echo "<strong>Eine Nullstelle $nullstelle</strong>";
        }
        } else {
            echo "<strong>1. Nullstelle:</strong> $x1";
            echo "<br>";
            echo "<strong>2. Nullstelle</strong>  $x2";
        }

        echo "<h1>Wertetabelle</h1>";
        echo "<table>";
        echo "<tr>";
        for ($x = $start; $x < $end; $x = $x + $steps) {
            echo "<td>$x</td>";
        }
        echo "</tr>";
        echo "<tr>";
        for ($x = $start; $x < $end; $x = $x + $steps) {
            $result = ($a * pow($x, 2)) + ($b * $x) + ($c);
            echo "<td>$result</td>";
        }
        echo "</tr>";
        echo "</table>";
    ?>
</body>

</html>