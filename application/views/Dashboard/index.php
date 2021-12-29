<?php  ?>


    <!-- Content Wrapper -->
    

        <!-- Begin Page Content -->
        <div class="container-fluid">

        	<!-- <dv class="row"> -->
        		<div class="card text-white text-center">
	        		
        			<div class="card-body" style="background: orange;">
        				<h1 class="card-title ">Putra Promotion</h1>
        				<h6>Jl Industri VII, Blok M/id Kelurahan Pasir Jaya Kecamatan jatiuwung kawasan industri jatake. RT/Rw 001/003 Pasir jaya Tangerang Kota Tangerang Banten</h6>
        				<!-- <h5>tokohampers@gmail.com</h5> -->
        				<button class="btn btn-primary btn-circle"><i class="fab fa-facebook"></i></i></button>
        				<button class="btn btn-danger btn-circle"><i class="fab fa-instagram"></i></button>
        			</div>
        		</div>

        	<!-- </dv> -->

        	<!-- <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			  <ol class="carousel-indicators">
			    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			  </ol>
			  <div class="carousel-inner">
			    <div class="carousel-item active">
			      <img src="<?= base_url('assets/img/slider/slider11.png'); ?>" class="d-block w-100" alt="...">
			    </div>
			    <div class="carousel-item">
			      <img src="<?= base_url('assets/img/slider/slider22.png'); ?>" class="d-block w-100" alt="...">
			    </div>
			    <div class="carousel-item">
			      <img src="<?= base_url('assets/img/slider/slider33.png'); ?>" class="d-block w-100" alt="...">
			    </div>
			  </div>
			  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			    <span class="carousel-control-next-icon" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			  </a>
			</div> -->
			<!-- <div class="row text-center"> -->
				<div class="card-header">	
					<h3 align="center">Product Pilihan</h3>
				</div>
			<!-- </div> -->
			<div class="row text-center mt-2">


        		<?php foreach ($barang as $brg): ?>	        	

	        		<div class="col-6 col-md-3 col-lg-3 mb-5">
                        <div class="card">
	                        <!-- <div class="card-header"> -->
	                            <img src="<?= base_url('assets/img/barang/') .$brg['gambar']; ?>" class="card-img-top" id="perbesar" alt="" width="100%">
	                        <!-- </div> -->
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