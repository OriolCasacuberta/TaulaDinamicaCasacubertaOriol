<!DOCTYPE html>
<html lang="ca">
    <head>
        <meta charset="utf-8">
        <title>Taula HTML amb PHP</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Oriol Casacuberta">
    </head>
    <body>
        <?php

            $vPersones = array(
                array(
                    "Nom" => "Oriol",
                    "PrimerCognom" => "Casacuberta",
                    "SegonCognom" => "Tijeras",
                    "DataNaixement" => "2004-05-28",
                    "DNI" => "12345678A"
                ),
                array(
                    "Nom" => "Fernando",
                    "PrimerCognom" => "Alonso",
                    "SegonCognom" => "Diaz",
                    "DataNaixement" => "1981-07-29",
                    "DNI" => "87654321B"
                ),
                array(
                    "Nom" => "Rafael",
                    "PrimerCognom" => "Nadal",
                    "SegonCognom" => "Parera",
                    "DataNaixement" => "1986-06-03",
                    "DNI" => "11223344C"
                )
            );

            crearTaula($vPersones);

            function crearTaula($vPersones)
            {
                echo "<table border='1'>";
                    echo "<thead>";
                        echo "<tr>";
                            echo "<th>Nom</th>";
                            echo "<th>Primer Cognom</th>";
                            echo "<th>Segon Cognom</th>";
                            echo "<th>Data Naixement</th>";
                            echo "<th>DNI</th>";
                        echo "</tr>";
                    echo "<thead>";
                    echo "<tbody>";

                    foreach ($vPersones as $persona)
                    {
                        echo "<tr>";
                            echo "<td>" . $persona["Nom"] . "</td>";
                            echo "<td>" . $persona["PrimerCognom"] . "</td>";
                            echo "<td>" . $persona["SegonCognom"] . "</td>";
                            echo "<td>" . $persona["DataNaixement"] . "</td>";
                            echo "<td>" . $persona["DNI"] . "</td>";
                        echo "<tr>";
                    }

                    echo "</tbody>";
                echo "</table>";
            }
        ?>
    </body>
</html>