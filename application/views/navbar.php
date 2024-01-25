<div class = "container-fluid">
    <main class = "content-navbar">
        <nav class = "navbar navbar-expand-sm navbar-fixed-top m-auto">
            <a class = "nav-link mr-auto" id = "logo" href = "<?php echo base_url('index.php/homepage/index')?>">Foodoo</a>
            <a class = "nav-link" id = "about-us" href = "<?php echo base_url("#footer")?>">ABOUT US</a> 
            <a class = "nav-link" id = "kategori" href = "<?php echo base_url('index.php/CKategori/viewkategoriHome')?>"><i class="fas fa-th-list"></i> KATEGORI</a>
            <div class="dropdown show nav-link">
                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">LOGIN</a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="<?php echo base_url('index.php/login')?>">Login User</a>
                    <a class="dropdown-item" href="<?php echo base_url('index.php/admin_login')?>">Login Admin</a>
                    <a class="dropdown-item" href="<?php echo base_url('index.php/toko_login')?>">Login Toko</a>
                </div>
            </div>
            <div class="dropdown show nav-link">
                <a class="dropdown-toggle"  href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">SIGN UP</a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="<?php echo base_url('index.php/register')?>">Sign Up User</a>
                    <a class="dropdown-item" href="<?php echo base_url('index.php/toko_register')?>">Sign Up Toko</a>
                </div>
            </div>
        </nav>
    </main>
    