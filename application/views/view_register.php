<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class = "row d-flex align-item-center justify-content-center text-center">
    <div class = "col">
    <a href = "<?php echo base_url('index.php/homepage')?>"id = "foodoo-login">Foodoo</a><br />
        <label id = "label-sign-up">Sign-Up</label><br />
        <?php echo form_open('register');?>

        <label id = "label-username" for = "username">Username</label><br/>
        <input type="text" id = "username" name="username" value="<?php echo set_value('name'); ?>"/>
        <p><?php echo form_error('name'); ?></p>

        <label id = "label-password" for = "password">Password:</label><br/>
        <input type="password" id = "password" name="password" value="<?php echo set_value('password'); ?>"/>
        <p> <?php echo form_error('password'); ?> </p>

        <label id = "label-email" for = "email">Email</label><br/>
        <input type="text" id = "email" name="email" value="<?php echo set_value('email'); ?>"/>
        <p><?php echo form_error('email'); ?></p>

        <label id = "label-nama-register" for = "nama-register">Nama</label><br/>
        <input type="text" id = "nama-register" name="nama" value="<?php echo set_value('nama'); ?>"/>
        <p><?php echo form_error('nama'); ?></p>

        <label id = "label-no-telp-register" for = "no-telp-register">No.Telp</label><br/>
        <input type="text" id = "no-telp-register" name="no_telp" value="<?php echo set_value('no_telp'); ?>"/>
        <p><?php echo form_error('no_telp'); ?></p>

        <label id = "label-umur-register" for = "umur-register">Umur</label><br/>
        <input type="text" id = "umur-register" name="umur" value="<?php echo set_value('umur'); ?>"/>
        <p><?php echo form_error('umur'); ?></p>

        <label id = "label-alamat-register" for = "alamat-register">Alamat</label><br/>
        <input type="text" id = "alamat-register" name="alamat" value="<?php echo set_value('alamat'); ?>"/>
        <p><?php echo form_error('alamat'); ?></p>
        <p class = "check-account-register">Already have account? <?php echo anchor(site_url().'/login','Log in'); ?></p>
        
        <p><input type="submit" id = "submit-register" name="btnSubmit" value="Sign Up" /></p>

        <?php echo form_close();?>
    </div>
</div>

