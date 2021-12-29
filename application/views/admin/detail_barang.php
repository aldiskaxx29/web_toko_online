<?php  ?>

	<div class="container-fluid">

		<h1><?= $title ?></h1>

		<div class="card">
			<h5 class="card-header">Detail Barang</h5>
			<div class="card-body">
				<?php foreach ($barang as $brg): ?>
				<div class="row">	
					<div class="col-md-4">
						<img src="<?= base_url('assets/img/barang/' . $brg->gambar); ?>" class="card-img-top">
					</div>
					<div class="col-md-8">
						<table class="table table-bordered table-hover">
							<tr>
								<td>Nama Barang</td>
								<td><strong><?= $brg->nama_barang; ?></strong></td>
							</tr>
							<tr>
								<td>Keterangan</td>
								<td><strong><?= $brg->keterangan; ?></strong></td>
							</tr>
							<tr>
								<td>Kategori</td>
								<td><strong><?= $brg->kategori; ?></strong></td>
							</tr>
							<tr>
								<td>Harga Barang</td>
								<td><strong><?= $brg->harga; ?></strong></td>
							</tr>
							<tr>
								<td>Stok Barang</td>
								<td><strong><?= $brg->stok; ?></strong></td>
							</tr>							
						</table>
					</div>
				</div>
				<?php endforeach ?>
						<a href="<?= base_url('admin/data_barang'); ?>" class="btn btn-info mt-2">Back</a>
			</div>

		</div>
	</div>
</div>