<?php

    $url = "https://api.kawalcorona.com/indonesia/";
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
    <title>Data Indonesia</title>
</head>
<body>
    <center>
        <nav>
            <a href="soal2.php">Data Covid</a> |
            <a href="soal2(2).php">Data Indonesia</a> |
            <a href="soal2(3).php">Data Covid Provinsi</a> |
        </nav>
    
    <fieldset>
        <legend align="center"><h2>>Data Indonesia<</h2></legend>
        <table border=1>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Positif</th>
                <th>Sembuh</th>
                <th>Meninggal</th>
                <th>Dirawat</th>
                
            </tr>
            <?php
$no = 1;
$data = json_decode($dataCovid);
foreach ($data as $covid) {
    ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $covid->name; ?></td>
                <td><?php echo $covid->positif; ?></td>
                <td><?php echo $covid->sembuh; ?></td>
                <td><?php echo $covid->meninggal; ?></td>
                <td><?php echo $covid->dirawat; ?></td>
            </tr>
            <?php
}?>
        </table>
    </fieldset>
    </center>
</body>
</html>