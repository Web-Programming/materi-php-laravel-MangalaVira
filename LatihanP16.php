<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Pertemuan 16 Soal 1-4</title>
</head>
<body>
    <?php
    //Buatlah Aplikasi Sederhana Menggunakan Bahasa Pemrograman PHP Untuk :
    //1. Menghitung Umur
    $umur = 2025-2006;
    echo "Umur = $umur";

    //2. Mengkonversi Mata Uang USD ke IDR
    echo "<br>";
    $usd = 10;
    $idr = 16800 * $usd;
    echo "Jika USD = $usd, Maka IDR = $idr";


    //3. Mengkonversi Suhu Celcius ke Fahrenheit
    echo "<br/>";
    $celcius = 25;
    $fahrenheit = ($celcius * 1.8) + 32;
    echo "Jika Celcius = $celcius °C, Maka Fahrenheit = $fahrenheit °F";

    //4. Menghitung Luas ingkaran
    echo "<br/>";
    $r = 7;
    $phi = 3.14;
    $luas = $phi * $r * $r;
    echo "Luas Lingkaran Adalah $luas";
    echo "<br/>";

    ?>
</body>
</html>
