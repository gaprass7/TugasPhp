<?php
    require_once 'segitiga.php';
    require_once 'lingkaran.php';
    require_once 'persegi.php';
    
    $b1 = new Lingkaran (7);
    $b2 = new Persegi (10, 15);
    $b3 = new persegi (5, 10);
    $b4 = new Segitiga (10, 10, 10);
    $b5 = new Lingkaran (14);
    $b6 = new Segitiga (7, 9, 8);
    $b7 = new Lingkaran (21);
    $b8 = new Persegi (20, 60);
    $b9 = new Segitiga (21, 7, 14);
    $thead = ['No', 'Nama', 'Keterangan', 'Luas', 'Keliling'];
    // array associative
    $dataPegawai = [$b1, $b2, $b3, $b4, $b5, $b6, $b7, $b8, $b9];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 4 php</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
    <h2 align="center"  >Daftar Kumpulan Object Bidang</h2>
    <table align="center" class="table table-bordered table-striped">
        <thead style="text-align: center; bgcolor= aqua; " >
            <tr>
                <?php
                foreach ($thead as $th){ ?>
                <th><?= $th ?></th>
                <?php } ?>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($dataPegawai as $pegawai) { ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $pegawai->nama(); ?></td>
                <td><?= $pegawai->keterangan(); ?></td>
                <td><?= $pegawai->luas(); ?></td>
                <td><?= $pegawai->keliling(); ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>

    <script src="js/bootstrap.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script src="js/popper.min.js"></script>
</body>

</html>