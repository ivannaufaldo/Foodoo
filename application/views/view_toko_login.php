<div class = "row d-flex align-item-center justify-content-center text-center">
    <div class = "col">
        <?php echo form_open('toko_login');?>
        <a href = "<?php echo base_url('index.php/homepage')?>"id = "foodoo-login">Foodoo</a><br />
            <label id = "label-login">Login</label><br />
            <label id = "label-username" for = "username">Username:</label><br />
            <input type="text" name="username" id = "username" value="<?php echo set_value('username'); ?>"/>
            <p><?php echo form_error('username'); ?></p>
            <label id = "label-password" for = "password">Password:</label><br />
            <input type="password" id = "password" name="password" value="<?php echo set_value('password'); ?>"/>
            <p><?php echo form_error('password'); ?></p>
            <p id = "goto-sign-up">Don't have account? <?php echo anchor(site_url().'/toko_register','Sign Up'); ?></p>
            <p><input type="submit" id = "submit-login"  name="btnSubmit" value="Login" /></p>
        <?php echo form_close();?>
    </div>
</div>