<div class="content-kategori">
    <div class = "row">
        <div class = "col">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="img-homepage" src="<?php echo base_url('assets/Picture/slideshow_foodoo.png')?>" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="img-homepage" src="<?php echo base_url('assets/Picture/slideshow_foodoo2.png')?>" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="img-homepage" src="<?php echo base_url('assets/Picture/slideshow_foodoo3.png')?>" alt="Third slide">
                    </div>
                </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                    </a>
            </div>
        </div>
    </div>
    <div class = "row text-center">
        <div class = "col"> 
            <div class="sidenav-kategori-2">
                <a class ="Kategori" href="<?php echo base_url('index.php/CKategori/viewkategoriUser')?>">Kategori</a>
                <?php foreach ($kategori as $ktgr): ?>
                    <div class = "row justify-content-center">
                        <a class = "filter-nama-kategori" href="<?php echo base_url('index.php/CKategori/KategoriNamaUser?filter=').$ktgr->nama?>">  
                            <i class="fas fa-utensils">&nbsp;<?php echo $ktgr->nama;?></i>
                        </a>
                    </div>
                <?php endforeach; ?>    
            </div>
        </div>
        <div class = "col">
            <div class="row text-center">
                <?php foreach ($makanan as $mkn) : ?>
                    <div class="card ml-3 mb-3 kategori-card">
                        <img class="card-img-top" src="<?php echo base_url('assets/Picture/'.$mkn['img'].'')?>" alt="Card image cap">
                        <div class="card-body">
                            <h4 id = "nama-makanan-kategori" class="card-title "><?php echo $mkn['nama'] ; ?></h4>
                            <p id = "kategori-harga-makanan"><b>Rp. <?php echo $mkn['harga'] ; ?>,00-</b></p>
                            <a href="<?php echo base_url('index.php/keranjang/TambahkeKeranjang/'.$mkn['id_makanan'].'')?>" class="btn btn-primary">Tambahkan ke keranjang</a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>









