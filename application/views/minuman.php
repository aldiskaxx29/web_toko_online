<?php  ?>

    <!-- Content Wrapper -->
    

        <!-- Begin Page Content -->
        <div class="container-fluid">

        	<!-- <?php include('slider.php') ?>  -->

			<div class="row text-center mt-2">

        		<?php foreach ($minuman as $brg): ?>
	        	
	        		
	        		<div class="col-6 col-md-3 col-lg-3 mb-5">
                        <div class="card">
	                        <div class="card-header">
	                            <img src="<?= base_url('assets/img/barang/') .$brg['gambar']; ?>" class="card-img-top" alt="" width="100%">
	                        </div>
		                    <div class="card-body">
	                          	<h5 class="card-title"><?= $brg['nama_barang']; ?></h5>
		        				<small><?= $brg['keterangan']; ?></small><br>
		        				<small>Stok : <?= $brg['stok'] ?></small><br>
		        				<span class="badge badge-pill badge-info mb-2">Rp. <?= number_format($brg['harga'], 0,',','.'); ?></span><br>
		        				
	<!-- 	        				<a href="" class="btn btn-sm btn-primary">Masukan Ke Keranjang</a> -->
								
		        				<a href="https://api.whatsapp.com/send?phone=6285364669771&text=Hallo%20Admin%20Saya%20Ingin%20Memesan" class="btn btn-sm btn-success">Pesan</a>
		        			</div>
                        </div>
                    </div>
	       		
        		<?php endforeach ?>

			</div> 
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->