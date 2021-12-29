<?php  ?>
	
	<div class="container-fluid">
			<div class="card">
				<div class="card-header">
					<?= $this->session->flashdata('edit') ?>
					<h2 class="float-left"><?= $title; ?></h2>
					<a href="<?= base_url('dashboard'); ?>" class="btn btn-info btn-sm mt-2 float-right">Kembali</a>
				</div>
				<div class="card-body">
					<div class="row">
						<div class="col-lg-4">
							<img src="<?= base_url('assets/img/profile/' .$user['gambar']) ; ?>" class="card-img-top">
						</div>
						<div class="col-lg-8">
							<table class="table">
								<tr>
									<td>Email</td>
									<td><input type="" name="" class="form-control" value="<?= $user['email'] ?>" readonly></td>
								</tr>				
								<form action="<?= base_url('Auth/ubah_profil') ?>" method="post" enctype="multipart/form-data">
									<tr>
										<td>Nama</td>
										<td><input type="" name="nama" value="<?= $user['nama'] ?>" class="form-control" ></td>
									</tr>
									<tr>
										<td>No Telepona</td>
										<td><input type="" name="no_hp" value="<?= $user['no_hp'] ?>" class="form-control"></td>
									</tr>
									<tr>
										<td>Alamat</td>
										<td><textarea class="form-control" rows="3" name="alamat">
											<?= $user['alamat'] ?>
										</textarea></td>
									</tr>
									<tr>
										<td>Ubah Foto</td>
										<td>
											<input type="file" name="foto">
										</td>
									</tr>
									<tr>
										<td></td>
										<td>
											<button type="submit" class="btn btn-sm btn-primary" onclick="return confirm('Yakin Ingin Di Ubah')">Ubah</button>
										</td>
									</tr>
								</form>
							</table>
						</div>
					</div>
				</div>
			</div>
	</div>
</div>