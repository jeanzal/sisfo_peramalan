
<div class="card">
    div.card-
</div>

<?php
    include 'koneksi.php';
    mysqli_query($conn, 'DELETE FROM peramalan');
    $sql2 = mysqli_query($conn, "SELECT barang.id_barang,barang.nama_barang FROM barang"); 
    while ($c = mysqli_fetch_array($sql2)) {
        $a = 0.1;
       

    

    // Smoting Pertama 

    $a = 0.2;
    $s1 = 120;
    $s2 = 125;
    $s3 = 129;
    $s4 = 124;
    $s5 = 130;



    // Smoting Kedua 


?>
<div class="card">
    <div class="card-header">
        <h4>Prediksi Double Exponential Smoothing</h4>
    </div>
    <div class="card-body">
        <table class="table table-hover table-striped">
            <tr>
                <th>Bulan</th>
                <th>Xt</th>
                <th>S't</th>
                <th>S''t</th>
                <th>at</th>
                <th>bt</th>
                <th>ft</th>
                <th>er</th>
                <th>er2</th>
            </tr>
            <?php 
            $sql = mysqli_query($conn, "SELECT SUM(jumlah_keluar) AS lembar, MONTH(tanggal_keluar) as bulan FROM penjualan WHERE 
            barang_id='$c[id_barang]' GROUP BY MONTH(tanggal_keluar) LIMIT 5");
                
            while($row = mysqli_fetch_array($sql)){
                $tahun = $row['bulan'];
                $bk = $row['lembar'];

                // Smooting Pertama 
                $s1;
                $s2 = $bk * $a;
                

            ?>

            <tr>
                <td><?= $tahun ?></td>
                <td><?= $bk ?></td>
                <td><?= $s2 ?></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <?php }?>
        </table>
    </div>
</div>

<?php } ?>