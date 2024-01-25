<div class = "row"> 
    <div class = "col profil-toko-makanan">
        <h3 class = "toko-makanan">Makanan</h3>
		<div class = "border-toko"></div>
    </div>
    <div class = "col mr-5 align-self-end">
        <a id = "tambah-makanan" href="<?php echo base_url('index.php/Toko/makanan_toko/form_tambah_makanan')?>" class="btn btn-primary button-add-makanan"><i class="fas fa-plus"></i>&nbsp;Tambah Makanan</a>
    </div>
</div>
<div class = "row product-toko"> 
    <div class = "col d-flex ml-5 text-center column-kategori">
        <div class="sidenav-kategori-3">
            <a class ="Kategori" href="<?php echo base_url('index.php/CKategori/viewkategoriToko')?>">Kategori</a>
            <dl>
            <?php foreach ($kategori as $ktgr): ?>
                <div class = "row justify-content-center">
                    <dt><a class = "filter-nama-kategori" href="<?php echo base_url('index.php/CKategori/KategoriNamaToko?filter=').$ktgr->nama ?>">&nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-utensils"></i> <?php echo $ktgr->nama; ?></a></dt>
                </div>
            <?php endforeach; ?>
            <dl>    
        </div>
    </div>
    <div class = "col-8">
        <div id="makanan">
                <div container class="fluid">
                    <div class="row text-center justify-content-center list-makanan-toko">
                        <?php foreach ($makanan as $mkn) : ?>
                            <div class="card ml-3 mb-3 detail-product-toko">
                                <img class="card-img-top image-makanan-toko" src="<?php echo base_url('assets/Picture/'.$mkn['img'].'')?>" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title nama-makanan-toko"><?php echo $mkn['nama'] ; ?></h5>
                                    <?php echo anchor('Toko/makanan_toko/edit/'.$mkn['id_makanan'], '<div class="btn btn-primary" id="buttonEdit">update</div>'); ?>
                                    <?php echo anchor('Toko/makanan_toko/view_delete/'.$mkn['id_makanan'], '<div class="btn btn-danger" id="buttonDelete">delete</div>'); ?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>