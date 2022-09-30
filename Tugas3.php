<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas3 PHP Indexs Kelulusan</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <?php
    $m1 = ['nim' => '2022320003', 'nama' => 'Akhmad Luffy Suramat', 'nilai' => 95];
    $m2 = ['nim' => '2022320093', 'nama' => 'Captain D Morgans', 'nilai' => 60];
    $m3 = ['nim' => '2022320126', 'nama' => 'Angel Puspita', 'nilai' => 55];
    $m4 = ['nim' => '2022320014', 'nama' => 'Muhammad Ganang Pras', 'nilai' => 95];
    $m5 = ['nim' => '2022320332', 'nama' => 'Norman Ardiansyah', 'nilai' => 60];
    $m6 = ['nim' => '2022320333', 'nama' => 'Dzaki Nur Ahmad Fadli ', 'nilai' => 70];
    $m7 = ['nim' => '2022320278', 'nama' => 'Muh Prasetya Putra', 'nilai' => 90];
    $m8 = ['nim' => '2022320111', 'nama' => 'Sari Ekayuni Aprillia', 'nilai' => 65];
    $m9 = ['nim' => '2022320089', 'nama' => 'Putri Mei Puspitasari', 'nilai' => 30];
    $m10 = ['nim' => '202232012', 'nama' => 'Sudjono Putra Akhmad', 'nilai' => 90];

    $daftarNilaiMahasiswa = [$m1, $m2, $m3, $m4, $m5, $m6, $m7, $m8, $m9, $m10];

    $judulTabel = [ 'No', 'NIM', 'Nama Mahasiswa', 'Nilai', 'Grade', 'Predikat', 'Keterangan' ];

    $jumlahMahasiswa = count($daftarNilaiMahasiswa);
    $nilai = array_column($daftarNilaiMahasiswa, 'nilai');
    $totalNilai = array_sum($nilai);
    $maxNilai = max($nilai);
    $minNilai = min($nilai);
    $rata2 = $totalNilai / $jumlahMahasiswa;

    $keterangan = [
        'Nilai Tertinggi' => $maxNilai,
        'Nilai Terendah' => $minNilai,
        'Rata-Rata Nilai' => $rata2,
        'Jumlah Mahasiswa' => $jumlahMahasiswa
    ]; ?>


    <div class="container">
        <h2 align="center"  >Daftar Nilai Mahasiswa</h2>
        <table align="center" class="table table-bordered table-striped" >
            <thead bgcolor="aqua">
                <tr>
                    <?php
                    foreach ($judulTabel as $jdl) {
                    ?>
                    <th class="text-center"><?= $jdl ?></th>
                    <?php } ?>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($daftarNilaiMahasiswa as $mahasiswa) {
                    $ketLulus = ($mahasiswa['nilai'] >= 60) ? 'Lulus' : 'Tidak Lulus';
                    $grade;
                    $predik;

                    if ($mahasiswa['nilai'] <= 100 && $mahasiswa['nilai'] >= 80) $grade = 'A';
                    else if ($mahasiswa['nilai'] <= 79 && $mahasiswa['nilai'] >= 70) $grade = 'B';
                    else if ($mahasiswa['nilai'] <= 69 && $mahasiswa['nilai'] >= 60) $grade = 'C';
                    else if ($mahasiswa['nilai'] <= 59 && $mahasiswa['nilai'] >= 31) $grade = 'D';
                    else if ($mahasiswa['nilai'] > 0 && $mahasiswa['nilai'] <= 30) $grade = 'E';
                    else $grade = 'TIDAK ADA DATA NILAI';

                    switch ($grade) {
                        case 'A': $predik = 'Memuaskan'; break;
                        case 'B': $predik = 'Bagus'; break;
                        case 'C': $predik = 'Cukup'; break;
                        case 'D': $predik = 'Kurang'; break;
                        case 'E': $predik = 'Buruk'; break;
                        default: $predik = '';
                    }
                ?>
                <tr class="text-center">
                    <th> <?= $no++ ?> </th>
                    <td><?= $mahasiswa['nim'] ?></td>
                    <td><?= $mahasiswa['nama'] ?></td>
                    <td><?= $mahasiswa['nilai'] ?></td>
                    <td><?= $grade ?></td>
                    <td><?= $predik ?></td>
                    <td><?= $ketLulus ?></td>
                </tr>
                <?php } ?>
            </tbody>
            <tfoot>
                <?php
                foreach ($keterangan as $ket => $hasil) {
                ?>
                <tr>
                    <th></th>
                    <th colspan="5"><?= $ket ?></th>
                    <th class="text-center"><?= $hasil ?></th>
                </tr>
                <?php } ?>
            </tfoot>
        </table>
    </div>
    <script src="js/bootstrap.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script src="js/popper.min.js"></script>
</body>
</html>