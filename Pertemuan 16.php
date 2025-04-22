<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang</title>
</head>
<body>
    <h1><?php echo "Welcome to PHP -- Selamat Datang Di PHP";?></h1>

    <?php
    //variabel
    $jam = 12;
    if($jam < 12){
        echo "<h3>Selamat Pagi</h3>";
    } else{
        echo "<h3>Selamat Sore</h3>";
    }

    echo "<br/>";
    //variabel array
    $hoby ={'Makan', 'Minum', 'Tidur'}
    var_dump(value: $hoby);
    if(is_array(value: $hoby)){
        echo "Hobby Saya Ada " . count(value: $hoby)
    }

    echo "<br/>";
    //Tipe data null
    $nilaiuts = NULL;
    if(is_null(value: $nilaiuts)){ //$nilaiuts == NULL
        echo "Nilai UTS Belum Keluar"
    }
    ?>
</body>
</html>