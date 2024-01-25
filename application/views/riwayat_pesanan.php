<div class = "row">
    <div class = "col">
        <p class = "riwayat-pesanan">Riwayat Pesanan</p>
        <div class = "border-riwayat-pesanan"></div>
    </div>
</div>
<div class = "row">
    <div class = "col">
        <table class = "table table-bordered">
            <?php foreach($pesanan as $psn) 
            {
            ?>
            <tr>
                <th>####&nbsp<?php echo $psn['id_pesanan']?>&emsp;&emsp;<a id = "riwayat-detail-pesanan" href = "<?php echo base_url('index.php/detail_pesanan/index/'.$psn['id_pesanan'].'')?>">DETAIL PESANAN</a></th>
            </tr>
            <tr>
                <form class = "form-group">
                    <td><a class = "btn btn-primary" id = "konfirmasi_pesanan" href = "<?php echo base_url('index.php/pesanan/viewkonfirmasiPesanan/'.$psn['id_pesanan'].'')?>">Konfirmasi Pesanan</a></td>
                </form>
            </tr>
            <?php
            }
            ?>
        </table> 
    </div>
</div> 