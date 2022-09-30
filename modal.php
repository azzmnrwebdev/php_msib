<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Data Gaji Pegawai - Tugas 2 PHP | Azzmnrwebdev</title>

    <!-- favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="src/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="src/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="src/favicon/favicon-16x16.png">
    <link rel="manifest" href="src/favicon/site.webmanifest">

    <!-- bootstrap css -->
    <link rel="stylesheet" href="src/css/bootstrap.min.css" />

    <!-- custom css -->
    <link rel="stylesheet" href="src/css/style.css">
</head>

<body>
    <div class="container py-5">
        <h3 class="text-center mb-5 text-primary font-custom">Form Input Data Pegawai</h3>

        <hr class="m-0" />

        <!-- form -->
        <form id="frm" class="row g-3 mt-3" method="POST">
            <!-- inputan nama pegawai -->
            <div class="col-12">
                <label for="inputName" class="form-label fw-semibold">Nama Pegawai</label>
                <input type="text" class="form-control" id="inputName" name="nama" autocomplete="off" maxlength="45" />
            </div>

            <!-- inputan agama -->
            <div class="col-12">
                <label for="inputAgama" class="form-label fw-semibold">Agama</label>
                <select id="inputAgama" name="agama" class="form-select">
                    <option value="">Pilih Agama</option>
                    <option value="Islam">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Katolik">Katolik</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Budha">Budha</option>
                </select>
            </div>

            <!-- inputan jabatan -->
            <div class="col-12">
                <label class="form-label d-block fw-semibold">Jabatan</label>

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

            <!-- inputan status menikah -->
            <div class="col-12">
                <label class="form-label d-block fw-semibold">Status</label>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" id="menikah" type="radio" name="status" value="Menikah" />
                    <label class="form-check-label" for="menikah">Menikah</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" id="belumMenikah" type="radio" name="status" value="Belum Menikah" />
                    <label class="form-check-label" for="belumMenikah">Belum Menikah</label>
                </div>
            </div>

            <!-- inputan jumlah anak -->
            <div class="col-12 d-none" id="jmlhAnak">
                <label for="inputJumnak" class="form-label fw-semibold">Jumlah Anak</label>
                <input type="number" class="form-control" id="inputJumnak" name="jumnak" autocomplete="off" min="1" max="15" />
            </div>

            <!-- button submit -->
            <div class="col-12">
                <button type="submit" name="save" class="btn btn-primary">Simpan</button>
            </div>
        </form>

        <?php
            // tangkap request value sesuai name
            if (isset($_POST['save'])) {
                $nama = $_POST['nama'];
                $agama = $_POST['agama'];
                $jabatan = $_POST['jabatan'];
                $status = $_POST['status'];
                $jumnak = ($status == "Menikah") ? $_POST['jumnak'] : 0;

                // menentukan gaji pokok menggunakan switch case
                switch ($jabatan) {
                    case "Manager": $gapok = 20000000; break;
                    case "Asisten": $gapok = 15000000; break;
                    case "Kepala Bagian": $gapok = 10000000; break;
                    case "Staff": $gapok = 4000000; break;
                    default: $gapok = 0; break;
                }

                // menentukan tunjangan keluarga menggunakan if multi kondisi
                if ($status == "Menikah" && $jumnak <= 2) $tunkel = $gapok * 5 / 100;
                else if ($status == "Menikah" && $jumnak <= 5) $tunkel = $gapok * 10 / 100;
                else if ($status == "Menikah" && $jumnak > 5) $tunkel = $gapok * 15 / 100;
                else $tunkel = 0;

                // menentukan tunjangan jabatan, gaji kotor, zakat dan take home pay
                $tunjab = $gapok * 20 / 100;
                $gator = $gapok + $tunjab + $tunkel;
                $zaprof = ($agama == "Islam" && $gator >= 6000000) ? $gator * 2.5 / 100 : 0;
                $takeHomePay = $gator - $zaprof;
        ?>
                <!-- modal -->
                <div class="modal fade" id="pegawaiModal" tabindex="-1" aria-labelledby="pegawaiModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="pegawaiModalLabel">Hasil</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Nama Pegawai                : <?= $nama; ?>
                                <br />Agama                 : <?= $agama; ?>
                                <br />Jabatan               : <?= $jabatan; ?>
                                <br />Status                : <?= $status; ?>
                                <br />Jumlah Anak           : <?= $jumnak; ?>
                                <br />Gaji Pokok            : Rp. <?= number_format($gapok, 2, ',', '.'); ?>
                                <br />Tunjangan Jabatan     : Rp. <?= number_format($tunjab, 2, ',', '.'); ?>
                                <br />Tunjangan Keluarga    : Rp. <?= number_format($tunkel, 2, ',', '.'); ?>
                                <br />Gaji Kotor            : Rp. <?= number_format($gator, 2, ',', '.'); ?>
                                <br />Zakat Profesi         : Rp. <?= number_format($zaprof, 2, ',', '.'); ?>
                                <br />Take Home Pay         : Rp. <?= number_format($takeHomePay, 2, ',', '.'); ?>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
        <?php } ?>
    </div>

    <!-- bootstrap js -->
    <script src="src/js/bootstrap.bundle.min.js"></script>

    <script>
        const modal = new bootstrap.Modal("#pegawaiModal");
        modal.show();
    </script>

    <!-- custom js -->
    <script src="src/js/index.js"></script>
</body>

</html>