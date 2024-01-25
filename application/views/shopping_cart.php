<div class = "shopping-cart-foodoo">
    <div class = "row">
        <div class = "col">
            <h1 class = "header-shopping-cart">Shopping Cart</h1>
            <div class = "border-cart"></div>
        </div>
    </div>
    <div class = "row">
        <div class = "col">
            <div class = "square">
                <?php 
                foreach($this -> cart -> contents() as $items)
                {
                ?>
                <div class = "row d-flex justify-content-center item-shopping-cart">
                    <div class = "col-3 d-flext-text-center">
                            <img class = "img-item-shopping-cart" src="<?php echo base_url('assets/Picture/'.$items['options']['image'].'')?>" class="d-block w-100" alt="<?php echo $items['name']?>">  
                    </div>
                    <div class = "col-2 d-flex text-center">
                        <p class = "item-shopping-cart-1"><?php echo $items['name']?></p>
                    </div>
                    <div class = "col-2 d-flex text-center">
                        <p class = "item-shopping-cart-2">[<?php echo $items['qty']?>]</p>
                    </div>
                    <div class = "col-2 d-flex text-center">
                        <p class = "item-shopping-cart-3">Rp. <?php echo $items['price']?></p>
                    </div>
                </div>
                <?php
                }
                ?>
            </div>
            <div class = "shopping-cart-alamat-tujuan pt-5">
                <form class = "form-group" method = "POST" action = "<?php echo base_url('index.php/pesanan/OrderPesanan')?>">
                    <label class = "form-check-label" id = "alamat-tujuan">Alamat Tujuan</label>
                    <textarea id = "Alamat" name = "Alamat" required class = "form-control" placeholder = "Masukkan Alamat Tujuan..."></textarea>
                    <div class = "shopping-cart-total-pesanan pt-5">
                        <h4 class = "header-total-pesanan">Total Pesanan</h4>
                        <div class = "bg-total-pesanan">
                            <p class = "total-harga-pesanan">Rp. <?php echo $this -> cart -> total();?></p>
                        </div>
                    </div>
                    <div class = "row button-shopping-cart">
                        <div class = "col">
                            <a id = "destroy-cart" class = "btn btn-secondary" href = "<?php echo base_url('index.php/keranjang/HapusKeranjang')?>">Hapus Keranjang Belanja</a>
                            <button type = "submit" id = "order" class = "btn btn-primary">Order</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>