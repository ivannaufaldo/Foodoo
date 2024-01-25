<div class = "row d-flex align-item-center justify-content-center text-center">
    <div class = "col">
    <a href = "<?php echo base_url('index.php/homepage')?>"id = "foodoo-login">Foodoo</a><br />
        <label id = "label-login">Sign-Up</label><br />
        <?php echo form_open('toko_register');?>
        <label id = "label-nama-register" for = "nama-register">Nama Toko</label><br/>
        <p><input type="text" id = "nama-register" name="nama_toko" value="<?php echo set_value('nama_toko'); ?>"/></p>
        <p><?php echo form_error('nama_toko'); ?></p>

        <label id = "label-alamat-register" for = "alamat-register">Alamat</label><br/>
        <p><input type="text" id = "alamat-register" name="alamat" value="<?php echo set_value('alamat'); ?>"/></p>
        <p><?php echo form_error('alamat'); ?></p>

        <label id = "label-username" for = "username">Username</label><br/>
        <p><input type="text" id = "username" name="username" value="<?php echo set_value('username'); ?>"/></p>
        <p><?php echo form_error('username'); ?></p>

        <label id = "label-password" for = "password">Password:</label><br/>
        <p><input type="password" id = "password" name="password" value="<?php echo set_value('password'); ?>"/></p>
        <p><?php echo form_error('password'); ?></p>
        <p class = "check-account-register">Already have account? <?php echo anchor(site_url().'/toko_login','Log in'); ?></p>
        <p><input type="submit" id = "submit-register" name="btnSubmit" value="Sign Up" /></p>
        <?php echo form_close();?>
        
    </div>
</div>
