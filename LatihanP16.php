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
    echo "<br/>";

    //2. Mengkonversi Mata Uang USD ke IDR
    $usd = 10;
    $idr = 16800 * @usd;
    echo "10 USD = Rp.$idr";
    echo "<br/>";

    //3. Mengkonversi Suhu Celcius ke Fahrenheit
    $celcius = 25;
    $fahrenheit = ($celcius * 1.8) + 32;
    echo "Jika $celcius °C, maka $fahrenheit °F";
    echo "<br/>";

    //4. Menghitung Luas ingkaran
    $r = 7;
    $phi = 3.14;
    $luas = $phi * $r * $r;
    echo "Luas Lingkaran Adalah $luas";
    echo "<br/>";

    ?>
</body>
</html>