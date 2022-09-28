<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas PHP1</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="card" style="width: 32rem;">
        <div class="card-body">
            <div class="container px-5 my-5">
                <form id="contactForm" data-sb-form-api-token="API_TOKEN" method="POST">
                    <div class="mb-3">
                        <label class="form-label" for="namaPegawai">Nama Pegawai</label>
                        <input class="form-control" name="nama" type="text" placeholder="Nama Pegawai" data-sb-validations="required" />
                        <div class="invalid-feedback" data-sb-feedback="namaPegawai:required">Nama Pegawai is required.</div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="agama">Agama</label>
                        <select class="form-select" name="agama" aria-label="Agama">
                            <option value="" disabled="" selected="">-- Pilih Agama Anda --</option>
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Budha">Budha</option>
                            <option value="Katolik">Katolik</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label d-block">Jabatan</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="jabatan" value="Manager" data-sb-validations="required" />
                            <label class="form-check-label" for="manager">Manager</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="jabatan" value="Asisten" data-sb-validations="required" />
                            <label class="form-check-label" for="asisten">Asisten</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="jabatan" value="Kabag" data-sb-validations="required" />
                            <label class="form-check-label" for="kabag">Kabag</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="jabatan" value="Staff" data-sb-validations="required" />
                            <label class="form-check-label" for="staff">Staff</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label d-block" name="status">Status</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input"  type="radio" name="status" value="menikah" data-sb-validations="" />
                            <label class="form-check-label" for="menikah">Menikah</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input"  type="radio" name="status" value="belum" data-sb-validations="" />
                            <label class="form-check-label" for="belumMenikah">Belum Menikah</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="jumlahAnak" name="anak">Jumlah Anak</label>
                        <input class="form-control" name="anak" type="text" placeholder="Jumlah Anak" data-sb-validations="required" />
                        <div class="invalid-feedback" data-sb-feedback="jumlahAnak:required">Jumlah Anak is required.</div>
                    </div>
                    <div class="d-none" id="submitSuccessMessage">
                        <div class="text-center mb-3">
                            <div class="fw-bolder">Form submission successful!</div>
                            <p>To activate this form, sign up at</p>
                            <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                        </div>
                    </div>
                    <div class="d-none" id="submitErrorMessage">
                        <div class="text-center text-danger mb-3">Error sending message!</div>
                    </div>
                    <div class="d-grid">
                        <button class="btn btn-primary btn-lg my-4" name="proses" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php
    //tangkap request
    $nama = $_POST['nama'];
    $agama = $_POST['agama'];
    $jabatan = $_POST['jabatan'];
    $status = $_POST['status'];
    $anak = $_POST['anak'];
    $tombol = $_POST['proses'];

    switch ($jabatan){
        case 'Manager': $gapok = 20000000; $tunJabatan = ($gapok * 0.2); break;
        case 'Asisten': $gapok = 15000000; $tunJabatan = ($gapok * 0.2); break;
        case 'Kabag': $gapok = 10000000; $tunJabatan = ($gapok * 0.2); break;
        case 'Staff': $gapok = 4000000; $tunJabatan = ($gapok * 0.2); break;
        default : $gapok; break;
    }

    if ($status == 'menikah' && $anak <= 2){
        $tunKeluarga = ($gapok * 0.005);
        $gator = $gapok +$tunKeluarga + $tunJabatan;

        if ($agama == 'Islam' && $gator >= 6000000){
            $zaprof = ($gator * 0.025);
        } else {
            $zaprof = 0;
        }
        $takeHomePay = $gator - $zaprof;
    } else if ($status == 'menikah' && $anak >= 3){
        $tunKeluarga = ($gapok * 0.1);
        $gator = $gapok +$tunKeluarga + $tunJabatan;

        if ($agama == 'Islam' && $gator >= 6000000){
            $zaprof = ($gator * 0.025);
        } else {
            $zaprof = 0;
        }
        $takeHomePay = $gator - $zaprof;
    } else if ($status == 'menikah' && $anak >= 6){
        $tunKeluarga = ($gapok * 0.15);
        $gator = $gapok + $tunKeluarga + $tunJabatan;

        if ($agama == 'Islam' && $gator >= 6000000){
            $zaprof = ($gator * 0.025);
        } else {
            $zaprof = 0;
        }
        $takeHomePay = $gator - $zaprof;
    } else $tunKeluarga = '0';

    if (isset($tombol)){ ?>
    <div class="card" style="width : 100%;">
        <div class="body">
            <div class="alert alert-primary p-5" role="alert">
                Nama Pegawai : <?= $nama ?>
                <br>Agama : <?= $agama ?>
                <br>Jabatan : <?= $jabatan ?>
                <br>Gaji Pokok : <?= number_format($gapok, 2, ',', '.'); ?>
                <br>Tunjangan Jabatan : <?= number_format($tunJabatan, 2, ',', '.'); ?>
                <br>Tunjangan Keluarga : <?= number_format($tunKeluarga, 2, ',', '.'); ?>
                <br>Gaji Kotor : <?= number_format($gator, 2, ',', '.'); ?>
                <br>Zakat Profesi : <?= number_format($zaprof, 2, ',', '.'); ?>
                <br>Take Home Pay : <?= number_format($takeHomePay, 2, ',', '.'); ?>
            </div>
        </div>
    <?php } ?>
    <script src="js/bootstrap.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script src="js/popper.min.js"></script>
</body>
</html>