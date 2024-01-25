<div class = "row text-center">
	<div class = "col">
		<p class = "logo-foodoo">Foodoo</h3>
		<p class = "konfirmasi-text-delete">KONFIRMASI DELETE MAKANAN</p>
			<?php foreach($makanan as $mkn):?>
				<p class = "delete-id-makanan">### <?php echo $mkn->id_makanan; ?></p>
				<p class = "delete-nama-makanan">### <?php echo $mkn->nama;?></p>
				<p class = "delete-makanan">APAKAH ANDA YAKIN INGIN MENGHAPUS MAKANAN?</p>
				<form method="post" action="<?php echo base_url().'index.php/toko/makanan_toko/delete' ?>">
					<div class="form-group">
						<input type="hidden" class="form-control" name="id_makanan" id="id_makanan" value="<?php echo $mkn->id_makanan?>">
					</div>
					<div class = "row">
						<div class = "col d-flex justify-content-center">
							<button id = "btn-delete-makanan" type="Submit" class="btn btn-primary" name="submit" value="submit">YA</button>&emsp;
							<a id = "cancel-delete-makanan" href="<?php echo base_url("index.php/Toko/makanan_toko")?>" class="btn btn-danger">TIDAK</a>
						</div>
					</div>
				</form>
		<?php endforeach; ?>
	</div>
</div>