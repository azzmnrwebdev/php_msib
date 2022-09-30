<?php
    // a
    require 'Pegawai.php';

    // membuat 5 instance object pegawai
    $p1 = new Pegawai('01103180', 'Lovina Aulia', 'Manager', 'Islam', 'Menikah');
    $p2 = new Pegawai('01103181', 'Rafi Maulana', 'Kepala Bagian', 'Kristen', 'Belum Menikah');
    $p3 = new Pegawai('01103182', 'Yusuf Fadillah', 'Staff', 'Budha', 'Belum Menikah');
    $p4 = new Pegawai('01103183', 'Fathiah Al Habsyi', 'Asisten Manager', 'Islam', 'Menikah');
    $p5 = new Pegawai('01103184', 'Daffa Zuhair', 'Staff', 'Hindu', 'Menikah');
    $p6 = new Pegawai('01103185', 'Muh Azzam Nur Alwi', 'Manager', 'Islam', 'Menikah');

    // array associative
    $pegawais = [$p1, $p2, $p3, $p4, $p5, $p6];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Gaji Pegawai - Tugas 4 OOP PHP | Azzmnrwebdev</title>

    <!-- favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="assets/favicon/site.webmanifest">

    <!-- bootstrap css -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- custom css -->
    <link rel="stylesheet" href="assets/css/style.css">
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
                <?php foreach ($pegawais as $pegawai) { ?>
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
    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>