<!-- ======= Study Section ======= -->
<section id="skills" class="skills section-bg">
    <div class="container">
        <div class="section-title">
            <h2>Pendidikan</h2>
            <p>Ini merupakan table list selama saya menjalani pendidikan.</p>
        </div>

        <!-- table -->
        <div class="table-responsive">
            <table class="table table-bordered mb-0">
                <thead>
                    <tr bgcolor="#2dd4bf" class="text-dark">
                        <th class="text-center">No</th>
                        <th>Tingkatan</th>
                        <th>Nama Sekolah</th>
                        <th class="text-center">Daerah</th>
                        <th class="text-center">Tahun Masuk</th>
                        <th class="text-center">Tahun Lulus</th>
                        <th class="text-center">Keterangan</th>
                    </tr>
                </thead>

                <tbody>
                        <?php
                        $p1 = ['tingkatan' => 'SDIT', 'nama' => 'Al - Hikmah', 'daerah' => 'Depok', 'tmasuk' => '2006', 'tlulus' => '2012', 'ket' => 'Lulus'];
                        $p2 = ['tingkatan' => 'SMPIT', 'nama' => 'Madinatul Qur\'an', 'daerah' => 'Depok', 'tmasuk' => '2012', 'tlulus' => '2016', 'ket' => 'Lulus'];
                        $p3 = ['tingkatan' => 'SMK', 'nama' => 'Nasional', 'daerah' => 'Depok', 'tmasuk' => '2016', 'tlulus' => '2019', 'ket' => 'Lulus'];
                        $p4 = ['tingkatan' => 'Universitas', 'nama' => 'STT - Nurul Fikri', 'daerah' => 'Depok', 'tmasuk' => '2019', 'tlulus' => 'Belum', 'ket' => 'Lulus'];
                        $pendidikans = [$p1, $p2, $p3, $p4];

                        $number = 1;
                        foreach ($pendidikans as $pendidikan) {
                    ?>
                        <tr bgcolor="#ccfbf1">
                            <td class="text-center"><?= $number++ ?></td>
                            <td><?= $pendidikan['tingkatan']; ?></td>
                            <td><?= $pendidikan['nama']; ?></td>
                            <td class="text-center"><?= $pendidikan['daerah']; ?></td>
                            <td class="text-center"><?= $pendidikan['tmasuk']; ?></td>
                            <td class="text-center"><?= $pendidikan['tlulus']; ?></td>
                            <td class="text-center"><span class="badge rounded-pill text-bg-success"><?= $pendidikan['ket']; ?></span></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</section>