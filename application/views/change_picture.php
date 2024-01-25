<div class = "change_picture">
<?php foreach ($profile as $user) {?>
<form method = "POST" action = "<?php echo base_url("index.php/edit_profile/updatepicture")?>" enctype="multipart/form-data">
    <div class="form-group">
		<label for="Gambar">Gambar</label><br>
        <input type="hidden" class="form-control" name="id_pembeli" id="id_pembeli" value="<?php echo $user['id_pembeli']?>">
		<input type="file" name="gambar" id="gambar" class="form-control"><br /><br />
        <button type = "Submit" class = "btn btn-primary" id = "submit" name = "submit" value = "submit">Change</button> 
	</div>
</form>
<?php } ?>
</div>