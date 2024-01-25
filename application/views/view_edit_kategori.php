<div class = "row">
	<div class = "col">
		<h3 class = "profile-admin">Ubah Kategori</h3>
		<div class = "border-admin"></div>
	</div>
</div>
<div class = "row">
	<div class = "col">
		<form method="post" action="<?php echo base_url().'index.php/kategori/update'; ?>">
			<div class="form-group">
				<label id = "label-id-kategori" for="id">ID Kategori</label><br/>
				<input type="text" name="id" id="id-kategori" readonly value="<?php echo $id_kategori ?>"><br/>
				<label id = "label-nama-kategori" for="nama">Nama Kategori</label>
				<input type="text" class="form-control" name="nama" id="nama-kategori" value="<?php echo $nama;?>">
			</div>
			<button type="Submit" id = "update-kategori" class="btn btn-primary" name="submit" value="submit">Update</button>
		</form>
	</div>
</div>