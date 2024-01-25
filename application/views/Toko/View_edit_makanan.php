<div class = "row">
	<div class = "col">
		<h2 class = "add-toko">Update Makanan</h1>
		<div class = "border-toko"></div>
	</div>
</div>
<div class = "row">
	<div class = "col">
		<?php foreach($makanan as $mkn):?>
			<form method="post" action="<?php echo base_url().'index.php/toko/makanan_toko/update' ?>"enctype="multipart/form-data">
				<div class="form-group">
					<label id = "nama-makanan" for="nama">
						Nama Makanan
					</label>
					<input type="hidden" class="form-control" name="id_makanan" id="id_makanan" value="<?php echo $mkn->id_makanan?>">
					<input type="text" class="form-control" name="nama" id="nama-makanan" value="<?php echo $mkn->nama?>">
				</div>
				<div class="form-group">
					<label id = "harga-makanan" for="harga">
						Harga
					</label>
					<input type="text" name="harga" class="form-control" id="harga-makanan" value="<?php echo $mkn->harga?>">
				</div>
				<div class="form-group">
					<label id = "kategori-makanan" for="kategori">
						Kategori
					</label>
					<select class="form-control" id="kategori-makanan" name="kategori">
						<option value="<?php echo $mkn->id_kategori?>"></option>
						<?php foreach ($kategori as $ktgr): ?>
						<option value="<?php echo $ktgr->id_kategori ?>"><?php echo $ktgr->nama ?></option>	
						<?php endforeach; ?>   
					</select>
				</div>
				<div class="form-group">
					<label id = "gambar-makanan" for="Gambar">
						Gambar
					</label><br>
					<input type="file" name="gambar" id="gambar-makanan" class="form-control">
				</div>
				<div class="form-group">
					<label id = "deskripsi-makanan" for="deskripsi">Deskripsi Makanan</label>
					<textarea class="form-control" id="deskripsi-makanan" name="deskripsi" ><?php echo $mkn->deskripsi?></textarea>
				</div>
				<div class = "row">
					<div class = "col d-flex justify-content-end">
						<a id = "cancel-update-makanan" href="<?php echo base_url("index.php/Toko/makanan_toko")?>" class="btn btn-secondary">Cancel</a>&emsp;
						<button id = "submit-update-makanan" type="Submit" class="btn btn-primary" name="submit" value="submit">Update</button>
					</div>
				</div>
			</form>
		<?php endforeach; ?>
	</div>
</div>