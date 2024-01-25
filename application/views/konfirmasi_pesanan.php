<div class = "row d-flex justify-content-center text-center">
    <div class = "col">
        <p id = "footer-logo-foodoo">Foodoo</h3>
        <?php 
        foreach($pesanan as $row) 
        { 
        ?>
            <p id = "text-konfirmasi-pesanan">KONFIRMASI PESANAN</p>
            <p id = "konf-id-pesanan">KODE PESANAN <?php echo $row['id_pesanan']?></p>
            <p id = "text-konfirmasi-pesanan">Apakah Anda Yakin Ingin Mengkonfirmasi Pesanan ?</p>
            <form method = "post" action = "<?php echo base_url('index.php/pesanan/konfirmasiPesanan/'.$row['id_pesanan'].'')?>">
                <button type = "Submit" value = "submit" class = "btn btn-primary" id = "btn-konfirmasi-pesanan" name = "konfirmasi">Ya</button>&emsp;
                <a class = "btn btn-secondary" id = "cancel-konfirmasi-pesanan" name = "cancel" href = "<?php echo base_url('index.php/riwayat_pesanan')?>">Tidak</a>
            </form>
        <?php 
        } 
        ?>
    </div>
</div>

    
