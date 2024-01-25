<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class = "row d-flex align-item-center justify-content-center text-center">
    <div class = "col">
    <a href = "<?php echo base_url('index.php/homepage')?>"id = "foodoo-login">Foodoo</a><br />
        <label id = "label-sign-up">Sign-Up</label><br />
        <?php echo form_open('admin_register');?>
        <label id = "label-username" for = "username">Admin Username</label><br/>
        <input type="text" id = "username" name="username" value="<?php echo set_value('username'); ?>"/>
        <p><?php echo form_error('username'); ?></p>

        <label id = "label-password" for = "password">Password:</label><br/>
        <p><input type="password" id = "password" name="password" value="<?php echo set_value('password'); ?>"/>
        <p><?php echo form_error('password'); ?></p>
        <p class = "check-account-register">Already have account? <?php echo anchor(site_url().'/admin_login','Log in'); ?></p>
        <input type="submit" id = "submit-register" name="btnSubmit" value="Sign Up" />
        <?php echo form_close();?>
    </div>
</div>
