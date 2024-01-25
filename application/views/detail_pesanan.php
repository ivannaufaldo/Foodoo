<div class = "row text-center">
    <div class = "col">
        <p class = "id-detail-pesanan">#### <?php echo $id_detail_pesanan -> id_pesanan;?></p>
        <p class = "header-detail-pesanan">Detail Pesanan</p>
    </div>
</div>
<div class = "row text-center">
    <div class = "col">
        <table class = "table table-bordered">
            <tr>
                <th>No</th>
                <th>Makanan</th>
                <th>Jumlah</th>
                <th>Harga</th>
            </tr>
            <?php
            $i = 1;
            foreach($detail_pesanan as $row)
            {
            ?>
                <tr>
                    <td><?php echo $i++;?></td>
                    <td><?php echo $row['nama'];?></td>
                    <td><?php echo $row['jumlah'];?></td>
                    <td><?php echo $row['harga'];?></td>
                </tr>
            <?php
            }
            ?>
        </table> 
    </div>
</div>