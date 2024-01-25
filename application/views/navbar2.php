<div class = "container-fluid">
    <div class = "navbar-foodoo">
        <nav class = "navbar navbar-expand-sm navbar-fixed-top m-auto">
            <a class = "nav-link mr-auto" id = "logo" href = "<?php echo base_url('index.php/homepage2/index')?>">Foodoo</a>
            <a class = "nav-link" id = "kategori" href = "<?php echo base_url('index.php/CKategori/viewkategoriUser')?>"><i class="fas fa-th-list"></i> KATEGORI</a>
            <a class = "nav-link" id = "shopping-cart" href = "<?php echo base_url('index.php/keranjang/index')?>"><i class="fas fa-shopping-cart">&nbsp<?php echo $this -> cart -> total_items();?></i></a>
            <a class = "nav-link" id = "riwayat-pesanan" href = "<?php echo base_url('index.php/riwayat_pesanan/index')?>">RIWAYAT PESANAN</a>
            <a class = "nav-link" id = "profile" href = "<?php echo base_url('index.php/edit_profile/index')?>"><i class="far fa-user"><?php echo $this -> session -> userdata('username');?></i><a>
            <a class = "nav-link" id = "logout" href = "<?php echo base_url('index.php/login/logout')?>">LOGOUT</a>
        </nav>
    </div>
