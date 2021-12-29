<?php  ?>

	<div class="container-fluid">

		<h1><?= $title; ?></h1>

		<div class="row">
			<div class="col-lg">
				<form action="<?= base_url('admin/data_barang/tambah_data'); ?>" method="post" enctype="multipart/form-data">
					<div class="row">
						<div class="col-lg-6">
							<div class="form-group">
								<label>Nama Menu</label>						
								<input type="text" name="nama" class="form-control" value="<?= set_value('nama'); ?>">
								<?= form_error('nama','<small class="text-form text-danger">','</small>') ?>
							</div>
							<div class="form-group">
								<label>Keterangan</label>						
								<input type="text" name="keterangan" class="form-control" value="<?= set_value('keterangan'); ?>">
								<?= form_error('keterangan','<small class="text-form text-danger">','</small>') ?>
							</div>
							<div class="form-group">
								<label>Kategori</label>						
								<select class="form-control" name="kategori">
									<option>-- Pilihan --</option>
									<?php foreach ($kategori as $k): ?>
										<option value="<?= $k; ?>"><?= $k; ?></option>
									<?php endforeach ?>
								</select>
								<?= form_error('kategori','<small class="text-form text-danger">','</small>') ?>
							</div>							
						</div>
						<div class="col-lg-6">
							<div class="form-group">
								<label>Harga</label>						
								<input type="text" name="harga" class="form-control" value="<?= set_value('harga'); ?>">
								<?= form_error('harga','<small class="text-form text-danger">','</small>') ?>
							</div>
							<div class="form-group">
								<label>Stok</label>						
								<input type="text" name="stok" class="form-control" value="<?= set_value('stok'); ?>">
								<?= form_error('stok','<small class="text-form text-danger">','</small>') ?>
							</div>
							<div class="form-group">
								<label>Gambar</label>						
								<input type="file" name="foto" class="form-control">
								<?= form_error('foto','<small class="text-form text-danger">','</small>') ?>
							</div>							
						</div>
					</div>
					<button type="submit" class="btn btn-primary">Simpan</button>
				</form>
			</div>
		</div>
		
	</div>
</div>