<main class = "content-homepage">
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
    <div class = "row">
        <div class = "col">
            <p class = "motto-text-1 text-center">PENUHI NAFSU MAKANMU HANYA DI FOODOO</P>
        </div>
    </div>
    <div class = "row">
        <div class = "col">
            <p class = "motto-text-2 text-center">Welcome to our UMKM MarketPlace</p>
        </div>
    </div>
    <div class = "row mb-1 justify-content-center">
        <?php 
            $i = 1;
        foreach($rekomendasimakanan as $mkn) 
        {
        ?>
        <div class = "list-rekomendasi-makanan ml-4 mr-4row">
            <div class = "col">
                <img class = "img-rekomen-makanan" src = "<?php echo base_url('assets/Picture/'.$mkn['img'].'')?>">
                <p class = "rekomen-makanan mt-3"><?php echo $mkn['nama']?></p>
                <p class = "rekomen-makanan mb-3"><?php echo 'Rp. '.$mkn['harga']?></p>
            </div>
        </div>
        <?php
            if($i++ == 4) break;
        }
        ?>
    </div>
    <div class = "row">
        <div class = "col">
            <p class = "how-to-order-text text-center">HOW TO ORDER?</p>
        </div>
    </div>
    <div class = "row prosedur">
        <div class = "col d-flex prosedur-1">
            <div class = "prosedur-pemesanan">1</div>
            <p class = "text-prosedur-pemesanan pt-2 pl-2">Pilih makanan yang anda inginkan</p>
        </div>
        <div class = "col d-flex prosedur-2">
            <div class = "prosedur-pemesanan">2</div>
            <p class = "text-prosedur-pemesanan pt-2 pl-2">Masukkan makanan yang anda inginkan</p>
        </div>
    </div>
    <div class = "row prosedur">
        <div class = "col d-flex prosedur-3">
            <div class = "prosedur-pemesanan">3</div>
            <p class = "text-prosedur-pemesanan pt-2 pl-2">Masukkan alamat pengiriman makananmu</p>
        </div>
        <div class = "col d-flex prosedur-4">
            <div class = "prosedur-pemesanan">4</div>
            <p class = "text-prosedur-pemesanan pt-2 pl-2">Tekan Pesan!</p>
        </div>
    </div>
</main>

