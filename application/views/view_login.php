<div class = "row d-flex align-item-center justify-content-center text-center">
     <div class = "col">
          <?php echo form_open('login');?>
          <a href = "<?php echo base_url('index.php/homepage')?>"id = "foodoo-login">Foodoo</a><br />
          <label id = "label-login">Login</label><br />
          <label id = "label-username" for = "username">Username:</label><br />
          <input type="text" id = "username" name="username" value="<?php echo set_value('username'); ?>"/>
          </p><?php echo form_error('username'); ?></p>
          <label id = "label-password" for = "password">Password:</label><br />
          <input type="password" id = "password" name="password" value="<?php echo set_value('password'); ?>"/>
          <p><?php echo form_error('password');?></p>
          <p id = "goto-sign-up">Don't have account? <?php echo anchor(site_url().'/register','Sign Up'); ?></p>
          <input type="submit" id = "submit-login" name="btnSubmit" value="Login" /><br />
          <?php echo form_close();?>
     </div>
</div>
     