<?php
    require_once 'Lingkaran.php';
    require_once 'PersegiPanjang.php';
    require_once 'Segitiga.php';

    $lingkaran = new Lingkaran('5');
    $persegi_panjang = new PersegiPanjang('10', '20');
    $segitiga = new Segitiga('10', '5', '12', '18', '15');

    $bidangs = [$lingkaran, $persegi_panjang, $segitiga];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abstract Class - Tugas 5 PHP | Azzmnrwebdev</title>

    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <div class="container py-5">
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <?php 
                            $ar_judul = ['No', 'Nama Bidang', 'Keterangan', 'Luas Bidang', 'Keliling Bidang'];
                            foreach ($ar_judul as $judul) { ?>
                                <th><?= $judul ?></th>
                        <?php } ?>
                    </tr>
                </thead>

                <tbody class="align-middle">
                    <?php 
                        $no = 1; 
                        foreach ($bidangs as $bidang) {
                        switch ($bidang->namaBidang()) {
                            case 'Lingkaran': $keterangan = 'Jari-jari: '.$bidang->jari_jari; break;
                            case 'Persegi Panjang': $keterangan = 'Panjang: '.$bidang->panjang.'<br/>Lebar: '.$bidang->lebar; break;
                            case 'Segitiga': $keterangan = 'Alas: '.$bidang->alas.'<br/>Tinggi: '.$bidang->tinggi.'<br/>Sisi A: '.$bidang->sisiA.'<br/>Sisi B: '.$bidang->sisiB.'<br/>Sisi C: '.$bidang->sisiC ; break;
                        } 
                    ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $bidang->namaBidang() ?></td>
                            <td><?= $keterangan ?></td>
                            <td><?= $bidang->luasBidang() ?></td>
                            <td><?= $bidang->kelilingBidang() ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>