<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Pertemuan 16 Soal 5</title>
</head>
<body>
    <?php
    //Menampilkan List Perkalian
    for ($i = 1; $i <= 10; $i++) {
        for ($j = 1; $j <= 10; $j++) {
            $hasil = $i * $j;
            echo "<br>";
            echo "$i x $j = $hasil";
        }
        echo "<br>";
    }
    ?>
</body>
</html>