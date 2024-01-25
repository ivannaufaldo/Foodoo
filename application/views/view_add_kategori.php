<div class = "row">
	<div class = "col">
		<h3 class = "profile-admin">Tambah Kategori</h3>
		<div class = "border-admin"></div>
	</div>
</div>
<div class = "row">
	<div class = "col">
		<form action="<?php echo site_url('kategori/add') ?>" method="post" enctype="multipart/form-data" >
			<div class="form-group">
				<label id = "label-nama-kategori" for="nama">Nama Kategori</label>
				<input id = "nama-kategori" class="form-control" value = "<?php echo form_error('nama') ? 'is-invalid':'' ?>" type="text" name="nama" />
				<div class="invalid-feedback">
					<?php echo form_error('nama') ?>
				</div>
			</div>
			<button class="btn btn-success text-center" id = "save" type="submit" name="btn">ADD</button>
		</form>
	</div>
</div>