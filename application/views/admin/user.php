<div class="container-fluid">
	<div class="card">
		<div class="card-header">
			<h3>Data User</h3>
		</div>
		<div class="card-body">
			<table class="table table-bordered " id="table">
				<thead>
					<tr>
						<th>No</th>
						<th>Nama</th>
						<th>Email</th>
						<th>No Hp</th>
						<th>Alamat</th>
						<th>Gambar</th>
						<th>Status</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($users as $no => $us): ?>
						<tr>
							<td><?= $no+1; ?></td>
							<td><?= $us->nama ?></td>
							<td><?= $us->email ?></td>
							<td><?= $us->no_hp ?></td>
							<td><?= $us->alamat ?></td>
							<td><img src="<?= base_url('assets/img/profile/' .$us->gambar) ?>" width="50"></td>
							<td>
								<?php if ($us->role_id == '1'): ?>
									<small class="badge badge-success">Admin</small>
								<?php elseif($us->role_id == '2'): ?>
									<small class="badge badge-info">User</small>
								<?php endif ?>
							</td>
						</tr>
					<?php endforeach ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
</div>