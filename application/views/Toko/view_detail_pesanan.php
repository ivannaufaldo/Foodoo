<div class = "row text-center">
	<div class = "col">
		<p class = "id-detail-pesanan">### <?php echo $idpesanan; ?></p>
		<p class = "header-detail-pesanan">Detail Pesanan</p>
	</div>
</div>
<div class = "row text-center">
	<div class = "col">
		<table class="table table-bordered">
			<tr>
				<th>NO</th>
				<th>MAKANAN</th>
				<th>JUMLAH</th>
				<th>HARGA</th>
			</tr>
				<?php $i=1; ?>
				<?php foreach($detail_pesanan as $dp ): ?>
			<tr>
				<th><?php echo $i++; ?></th>
				<th><?php echo $dp['nama'] ?></th>
				<th><?php echo $dp['jumlah'] ?></th>
				<th><?php echo $dp['harga'] ?></th>
			</tr>
				<?php endforeach; ?>
		</table>
	</div>
</div>
