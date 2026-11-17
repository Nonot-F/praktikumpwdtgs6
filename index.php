
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Latihan Perulangan</title>
</head>
<body>

    <h2>LATIHAN PERULANGAN PHP</h2>
>
    <h3>1. Bilangan Genap 1 sampai 10</h3>

    <?php
        for ($i = 1; $i <= 10; $i++) {
            if ($i % 2 == 0) {
                echo "<span style='background-color: lime; padding: 10px; margin: 5px;'>$i</span>";
            }
        }
    ?>

    <br><br><br>

    
    <h3>2. Tabel Perkalian 1 sampai 10</h3>

    <table border="2" cellpadding="10" cellspacing="3">

        
        <tr>
            <th style="background-color: white; color: blue;">
                Bilangan
            </th>

            <?php
                for ($i = 1; $i <= 10; $i++) {
                    echo "<th bgcolor='lime'>$i</th>";
                }
            ?>
        </tr>

        
        <?php
            for ($i = 1; $i <= 10; $i++) {

                echo "<tr>";

                echo "<th bgcolor='lime'>$i</th>";

                for ($j = 1; $j <= 10; $j++) {

                    $hasil = $i * $j;

                    if ($hasil % 2 == 0) {
                        echo "<td bgcolor='cyan'>$hasil</td>";
                    } else {
                        echo "<td bgcolor='yellow'>$hasil</td>";
                    }

                }

                echo "</tr>";
            }
        ?>

    </table>

</body>
</html>
