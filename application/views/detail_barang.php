<?php  ?>

	<div class="container-fluid">

		<h2><?= $title; ?></h2>

		<div class="card">
			<div class="card-header">
				<h5 class="float-left">Detail Produk</h5>
				<a href="<?= base_url('dashboard/index'); ?>" class="btn btn-sm btn-info float-right">Kembali</a>
			</div>
			<div class="card-body">
				<?php foreach ($barang as $bg): ?>
					<div class="row">
						<div class="col-md-4">
							<img src="<?= base_url('assets/img/barang/'.$bg->gambar) ?>" class="card-img-top">
						</div>
						<div class="col-md-8">
							<table class="table table-coredered">
								<tr>
									<td>Nama Produk</td>
									<td><strong><?= $bg->nama_barang ?></strong></td>
								</tr>
								<tr>
									<td>Keterangan</td>
									<td><strong><?= $bg->keterangan ?></strong></td>
								</tr>
								<tr>
									<td>Kategori</td>
									<td><strong><?= $bg->kategori ?></strong></td>
								</tr>
								<tr>
									<td>Stok Barang</td>
									<td><strong><?= $bg->stok ?></strong></td>
								</tr>
								<tr>
									<td>Harga Barang</td>
									<td><strong><div class="btn btn-sm btn-success">Rp. <?= number_format($bg->harga,0,',','.') ?></div></strong></td>
								</tr>
							</table>
							<?= anchor('dashboard/tambah_ke_keranjang/'. $bg->id_barang,'<div class="btn btn-sm btn-primary">Tambah Ke Keranjang</div>') ?>

						</div>
					</div>					
				<?php endforeach ?>

			</div>
		</div>
		
	</div>
</div>