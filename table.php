<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Data Pegawai - Tugas 2 PHP | Azzmnrwebdev</title>

    <!-- favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="src/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="src/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="src/favicon/favicon-16x16.png">
    <link rel="manifest" href="src/favicon/site.webmanifest">

    <!-- bootstrap css -->
    <link rel="stylesheet" href="src/css/bootstrap.min.css" />

    <!-- custom css -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap');

        body {
            font-family: 'Quicksand', sans-serif;
        }

        table * {
            white-space: nowrap;
        }
    </style>
</head>

<body>
    <div class="container">
        <h3 class="text-center mt-5 text-primary">Form Input Data Pegawai</h3>
        <hr />

        <!-- form -->
        <form class="row g-3" method="POST">
            <!-- nama pegawai dan agama -->
            <div class="col-md-6">
                <label for="inputName" class="form-label">Nama Pegawai</label>
                <input type="text" class="form-control" id="inputName" name="nama" autocomplete="off" />
            </div>

            <div class="col-md-6">
                <label for="inputAgama" class="form-label">Agama</label>
                <select id="inputAgama" name="agama" class="form-select">
                    <option selected>-- Pilih Agama --</option>
                    <option value="islam">Islam</option>
                    <option value="kristen">Kristen</option>
                    <option value="katolik">Katolik</option>
                    <option value="hindu">Hindu</option>
                    <option value="budha">Budha</option>
                </select>
            </div>

            <!-- jabatan dan status menikah -->
            <div class="col-md-6">
                <label class="form-label d-block">Jabatan</label>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" id="manager" type="radio" name="jabatan" value="Manager" />
                    <label class="form-check-label" for="manager">Manager</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" id="asisten" type="radio" name="jabatan" value="Asisten" />
                    <label class="form-check-label" for="asisten">Asisten</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" id="kabag" type="radio" name="jabatan" value="Kepala Bagian" />
                    <label class="form-check-label" for="kabag">Kepala Bagian</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" id="staff" type="radio" name="jabatan" value="Staff" />
                    <label class="form-check-label" for="staff">Staff</label>
                </div>
            </div>

            <div class="col-md-6">
                <label class="form-label d-block">Status</label>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" id="menikah" type="radio" name="status" value="Menikah" />
                    <label class="form-check-label" for="menikah">Menikah</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" id="belumMenikah" type="radio" name="status" value="Belum Menikah" />
                    <label class="form-check-label" for="belumMenikah">Belum Menikah</label>
                </div>
            </div>

            <!-- jumlah anak -->
            <div class="col-12">
                <label for="inputJumnak" class="form-label">Jumlah Anak</label>
                <input type="text" class="form-control" id="inputJumnak" name="jumnak" autocomplete="off" />
            </div>

            <!-- button submit -->
            <div class="col-12">
                <button type="submit" name="proses" class="btn btn-sm btn-primary">Simpan</button>
            </div>
        </form>

        <?php
            // tangkap request value sesuai name
            $nama = $_POST['nama'];
            $agama = $_POST['agama'];
            $jabatan = $_POST['jabatan'];
            $status = $_POST['status'];
            $jumnak = $_POST['jumnak'];
            $tombol = $_POST['proses'];

            // menentukan gaji pokok menggunakan switch case
            switch ($jabatan) {
                case "Manager": $gapok = 20000000; break;
                case "Asisten": $gapok = 15000000; break;
                case "Kepala Bagian": $gapok = 10000000; break;
                case "Staff": $gapok = 4000000; break;
                default: $gapok = 0; break;
            }

            // menentukan tunjangan keluarga menggunakan multi kondisi
            if ($status == "Menikah" && $jumnak <= 2) $tunkel = $gapok * 5 / 100;
            else if ($status == "Menikah" && $jumnak <= 5) $tunkel = $gapok * 10 / 100;
            else if ($status == "Menikah" && $jumnak > 5) $tunkel = $gapok * 15 / 100;
            else $tunkel = 0;

            // menentukan tunjangan jabatan, gaji kotor, zakat dan take home pay
            $tunjab = $gapok * 20 / 100;
            $gator = $gapok + $tunjab + $tunkel;
            $zaprof = $agama == "islam" && $gator >= 6000000 ? $gator * 2.5 / 100 : 0;
            $takeHomePay = $gator - $zaprof;

            if (isset($tombol)) { 
        ?>
            <div class="table-responsive rounded mt-4">
                <table class="table table-bordered mb-2">
                    <thead>
                        <tr bgcolor="#fde047">
                            <th>Nama Pegawai</th>
                            <th>Jabatan</th>
                            <th>Agama</th>
                            <th>Status</th>
                            <th>Jumlah Anak</th>
                            <th>Gaji Pokok</th>
                            <th>Tunjangan Jabatan</th>
                            <th>Tunjangan Keluarga</th>
                            <th>Gaji Kotor</th>
                            <th>Zakat Profesi</th>
                            <th>Take Home Pay</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr bgcolor="#fefce8">
                            <td><?= $nama; ?> </td>
                            <td><?= $jabatan; ?></td>
                            <td><?= $agama; ?>
                            <td><?= $status; ?></td>
                            <td><?= $jumnak; ?></td>
                            <td><?= 'Rp ',number_format($gapok, 2, ',', '.'); ?></td>
                            <td><?= 'Rp ',number_format($tunjab, 2, ',', '.'); ?></td>
                            <td><?= 'Rp ',number_format($tunkel, 2, ',', '.'); ?></td>
                            <td><?= 'Rp ',number_format($gator, 2, ',', '.'); ?></td>
                            <td><?= 'Rp ',number_format($zaprof, 2, ',', '.'); ?></td>
                            <td><?= 'Rp ',number_format($takeHomePay, 2, ',', '.'); ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        <?php } ?>
    </div>


    <!-- bootstrap js -->
    <script src="src/js/bootstrap.bundle.min.js"></script>
</body>

</html>