<div class = "row">
    <div class = "col">
        <h2 class = "profile-toko"><?php echo ($this->session->userdata('username'));?></h2>
        <div class = "border-toko"></div>
    </div>
</div>
<div class = "row text-center product-toko">
    <?php $i=1; ?>
    <?php foreach ($makanan as $mkn) : ?>
        <div class="card ml-3 mb-3 detail-product-toko">
            <img class="card-img-top image-makanan-toko" src="<?php echo base_url('assets/Picture/'.$mkn['img'].'')?>" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title nama-makanan-toko"><?php echo $mkn['nama'] ; ?></h5>
                <?php echo anchor('Toko/makanan_toko/edit/'.$mkn['id_makanan'], '<button class="btn btn-primary" id="buttonEdit">Update</button>'); ?>
                <?php echo anchor('Toko/makanan_toko/view_delete/'.$mkn['id_makanan'], '<button class="btn btn-primary" id="buttonDelete">Delete</button>'); ?>
            </div>
        </div>
    <?php if ($i++ == 3) break; ?>
    <?php endforeach; ?>
</div>
<div class = "row">
    <div class = "col">
        <h3 class = "detail-pesanan text-center">Pesanan yang sedang diproses</h3>
            <?php foreach ($pesanan as $psn): ?>
            <div class = "row border-detail-pesanan">
                <div class = "col ">
                    <p class = "kode-pesanan">KODEPESANAN <?php echo $psn['id_pesanan'] ?></p>
                </div>
                <div class = "col d-flex justify-content-end">
                    <?php echo anchor('toko_dashboard/detail_pesanan/'.$psn['id_pesanan'], '<div class="btn" id="buttonDetail"><b>Detail Pesanan</b></div>'); ?>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>