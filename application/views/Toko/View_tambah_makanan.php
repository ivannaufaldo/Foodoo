<div class = "row">
	<div class = "col">
		<h2 class = "add-toko">Tambah Makanan</h1>
		<div class = "border-toko"></div>
	</div>
</div>
<div class = "row">
	<div class = "col">
		<form method="post" action="<?php echo base_url('index.php/Toko/makanan_toko/tambah_makanan') ?>" enctype="multipart/form-data">
			<div class="form-group">
				<label id = "nama-makanan" for="nama">
					Nama Makanan
				</label>
				<input type="text" class="form-control" name="nama" id="nama-makanan">
			</div>
			<div class="form-group">
				<label id = "harga-makanan" for="harga">
					Harga
				</label>
				<input type="text" name="harga" class="form-control" id="harga-makanan">
			</div>
			<div class="form-group">
				<label id = "kategori-makanan" for="kategori">
					Kategori
				</label>
				<select class="form-control" id="kategori-makanan" name="kategori">
					<option value="0">Pilih Kategori</option>
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
               <textarea class="form-control" id="deskripsi-makanan" name="deskripsi"></textarea>
            </div>
			<div class = "row">
				<div class = "col d-flex justify-content-end">
					<a id = "cancel-add-makanan" href="<?php echo base_url("index.php/Toko/makanan_toko")?>" class="btn btn-secondary">Cancel</a>&emsp;
					<button type="Submit" id = "submit-add-makanan" class="btn btn-primary" name="submit" value="submit">Submit</button>
				</div>
			</div>
		</form>
	</div>
</div>