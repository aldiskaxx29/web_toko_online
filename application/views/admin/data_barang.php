<?php  ?>

	<div class="container-fluid">
		<div class="card">
			<div class="card-header">
				<?= $this->session->flashdata('admin') ?>
			<h3 class="float-left"><?= $title; ?></h3>
			<a href="<?= base_url('admin/data_barang/tambah_data'); ?>" class="btn btn-primary btn-sm float-right"><i class="fas fa-plus fa-sm"></i> Tambah Barang</a>
			</div>
			<div class="card-body" style="overflow-x: auto;">
				<div class="row">
					<div class="col-lg">
						<table class="table table-hover" id="table">
							<thead>
								<tr>
									<th>No</th>
									<th>Nama Barang</th>
									<th>Keterangan</th>
									<th>Kategori</th>
									<th>Harga</th>
									<th>Stok</th>
									<th>Gambar</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
							<?php $i=1; ?>
							<?php foreach ($barang as $brg): ?>
								<tr>
									<td><?= $i; ?></td>
									<td><?= $brg['nama_barang']; ?></td>
									<td><?= $brg['keterangan']; ?></td>
									<td><?= $brg['kategori']; ?></td>
									<td>Rp. <?=number_format($brg['harga']);  ?></td>
									<td><?= $brg['stok'] ?></td>
									<td><img src="<?= base_url('assets/img/barang/') . $brg['gambar'] ?>" width="100"></td>
									<td>
										<a href="<?= base_url('admin/data_barang/hapus/') . $brg['id_barang']; ?>" class="badge badge-danger" onclick="return confirm('Yakin Mau DI Hapus');">Hapus</a> | 
										<a href="<?= base_url('admin/data_barang/ubah/') . $brg['id_barang']; ?>" class="badge badge-warning">Ubah</a> |
										<a href="<?= base_url('admin/data_barang/detail/') . $brg['id_barang']; ?>" class="badge badge-info">Detail</a>
									</td>
								</tr>
							<?php $i++; ?>						
							<?php endforeach ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>

	</div>
</div>