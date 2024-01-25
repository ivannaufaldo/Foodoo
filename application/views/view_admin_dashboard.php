<div class = "row">
	<div class = "col">
		<h3 class = "profile-admin"><i class="far fa-user"></i> Admin <?php echo $this -> session -> userdata('username');?></h3>
		<div class = "border-admin"></div>
	</div>
</div>
<div class = "row kategori-admin">
	<div class = "col">
		<h2 id = "list-kategori-admin">Kategori</h2>
	</div>
	<div class = "col">
		<a id = "add-kategori" class = "btn btn-primary" href="<?php echo site_url('kategori/add') ?>"><i class="fas fa-plus"></i>&emsp;ADD KATEGORI</a>
	</div>
</div>
<div class = "background-kategori">
	<?php
		$i = 1; 
		foreach($kategori as $kt): 
	?>
	<div class = "row">
		<div class = "col ml-4 mt-3 mb-3">
			<p class = "data-kategori"><?php echo $i++; ?>.&nbsp;<?php echo $kt->nama;?></p>
		</div>
		<div class = "col mt-auto mb-auto">
			<a id = "edit-kategori" href="<?php echo site_url('kategori/edit/'.$kt->id_kategori); ?>" class="edit btn btn-sm btn-warning">Edit</a>&emsp;
			<a id = "delete-kategori" href="<?php echo site_url('kategori/viewkonfirmasidelete/'.$kt->id_kategori);?>" class="delete btn btn-sm btn-danger">Delete</a>
		</div>
	</div>
	<?php endforeach; ?>
</div>