<?php
    require 'Tugas4.php';
    // membuat 6 instance object pegawai
    $p1 = new Pegawai('00012355', 'Angga Saputra', 'Manager', 'Islam', 'Menikah');
    $p2 = new Pegawai('00012345', 'John Kriss Arendra', 'Kabag', 'Kristen', 'Menikah');
    $p3 = new Pegawai('00012399', 'Izzah Putri Martawangsa', 'Staff', 'Islam', 'Belum Menikah');
    $p4 = new Pegawai('00012303', 'Muhammad Abdul Haris', 'Manager', 'Islam', 'Menikah');
    $p5 = new Pegawai('00012333', 'Rizky Nur Somad', 'Staff', 'Hindu', 'Belum Menikah');
    $p6 = new Pegawai('00012323', 'Siti Mey Fatimah', 'Asisten', 'Islam', 'Menikah');

    // array associative
    $dataPegawai = [$p1, $p2, $p3, $p4, $p5, $p6];
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
    <header class="py-3 shadow-sm">
        <div class="container">
            <h2 class="text-center font-caveat fw-bold">Data Gaji Pegawai</h2>
        </div>
    </header>

    <main>
        <div class="container py-5">
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-3">
                <?php foreach ($dataPegawai as $pegawai) { ?>
                    <div class="col">
                        <div class="card h-100">
                            <div class="card-body">
                                <?= $pegawai->mencetak() ?>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </main>

    <!-- bootstrap js -->
    <script src="js/bootstrap.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script src="js/popper.min.js"></script>
</body>

</html>