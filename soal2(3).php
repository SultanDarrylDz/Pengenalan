<?php

    $url = "https://api.kawalcorona.com/indonesia/provinsi/";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $dataCovid = curl_exec($ch);
    curl_close($ch);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Covid Provinsi</title>
</head>
<body>
    <center>
        <nav>
            <a href="soal2.php">Data Covid</a> |
            <a href="soal2(2).php">Data Indonesia</a> |
            <a href="soal2(3).php">Data Covid Provinsi</a> |
        </nav>
    
    <fieldset>
        <legend align="center"><h2>>Data Covid Provinsi<</h2></legend>
        <table border=1>
            <tr>
                <th>No</th>
                <th>Provinsi</th>
                <th>Positif</th>
                <th>Sembuh</th>
                <th>Meninggal</th>
                
            </tr>
            <?php
$no = 1;
$data = json_decode($dataCovid);
foreach ($data as $covid) {
    ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $covid->attributes->Provinsi; ?></td>
                <td><?php echo $covid->attributes->Kasus_Posi; ?></td>
                <td><?php echo $covid->attributes->Kasus_Semb; ?></td>
                <td><?php echo $covid->attributes->Kasus_Meni; ?></td>
            </tr>
            <?php
}?>
        </table>
        </center>
    </fieldset>
</body>
</html>