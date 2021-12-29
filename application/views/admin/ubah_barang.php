<?php  ?>
<?php  ?>

	<div class="container-fluid">

		<h1><?= $title; ?></h1>

			<div class="row">
				<div class="col-lg">
					<form action="" method="post" enctype="multipart/form-data">
						<div class="row">
							<div class="col-lg-12">
								<div class="row">
									<div class="col-lg-6">
										<div class="form-group">
											<label>Nama Barang</label>	
											<input type="hidden" name="id" class="form-control" value="<?= $barang['id_barang']; ?>">					
											<input type="text" name="nama" class="form-control" value="<?= $barang['nama_barang']; ?>">
											<?= form_error('nama','<small class="text-danger">','</small>') ?>
										</div>
										<div class="form-group">
											<label>Keterangan</label>						
											<input type="text" name="keterangan" class="form-control" value="<?= $barang['keterangan']; ?>">
											
										</div>
										<div class="form-group">
											<label>Kategori</label>						
											<input type="text" name="kategori" class="form-control" value="<?= $barang['kategori']; ?>">
											
										</div>
										<div class="form-group">
											<label>Harga</label>						
											<input type="text" name="harga" class="form-control" value="<?= $barang['harga']; ?>">
											
										</div>										
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label>Stok</label>						
											<input type="text" name="stok" class="form-control" value="<?= $barang['stok']; ?>">
											
										</div>
										<div class="form-group">
											<label>Gambar</label><br>
											<img src="<?= base_url('assets/img/barang/') . $barang['gambar']; ?>" class="img-responsive" width="150">
										</div>
										<div class="form-group">
															
											<input type="file" name="foto" class="form-control">		
										</div>										
									</div>
								</div>
								
							</div>
						</div>



						<button type="submit" class="btn btn-primary">Simpan</button>
					</form>
				</div>
			</div>			


		
	</div>
</div>