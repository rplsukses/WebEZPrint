<?php
	$page = 'Transaksi';

	include 'core/init.php';
    include 'include/header.php';
    include 'include/footer.php';
	include 'include/sidebar.php';
	
	// session
    session_start();
    if(!isset($_SESSION['loginadmin'])) {
      header('location:login.php');
    }else {
      $loginadmin = $_SESSION['loginadmin'];
    }
?>

		<!-- Content -->
		<div class="main-panel">
			<div class="content">
				<div class="container-fluid">
					<div class="row justify-content-md-center">
						<div class="col-md-8">
							<div class="card">
								<div class="card-header card-header-primary">
									<center><h3 class="card-title">Detail Transaksi</h3></center>
								</div>
								<div class="card-body">
									
										<?php
											//Query Select Data Transaksi
											$ambil=$conn->query("SELECT transaksi.id_transaksi, user.nama AS nama_user, mitra.nama AS nama_mitra, transaksi.file,
											kategori.nama AS nama_kategori, produk.bahan, produk.warna, produk.ukuran, transaksi.tgl_pesan,
											transaksi.status, transaksi.harga_total
											FROM transaksi, user, mitra, kategori, produk
											WHERE id_transaksi='$_GET[id]'
											AND user.id_user=transaksi.id_user
											AND mitra.id_mitra=transaksi.id_mitra
											AND produk.id_produk=transaksi.id_produk
											AND produk.id_kategori=kategori.id_kategori");
											$pecah= $ambil->fetch_assoc();
										?>
											
										<pre><h6>ID Transaksi	: <?php echo $pecah['id_transaksi'] ?></h5></pre>
										<pre><h6>Tgl Pesan		: <?php echo $pecah['tgl_pesan'] ?></h5></pre>
										<pre><h6>Nama User		: <?php echo $pecah['nama_user'] ?></h5></pre>
										<pre><h6>Mitra			: <?php echo $pecah['nama_mitra']?></h6></pre>
										<?php
											//MEMECAH STRING
											$kalimat = $pecah['file'];
											$sub_kalimat = substr($kalimat, 15);
										?>
										<pre><h6>File				: <a href="api/upload/file/<?php echo $sub_kalimat;?>"><?php echo $sub_kalimat;?> </a></h6></pre>
										<pre><h6>Kategori		: <?php echo $pecah['nama_kategori'] ?></h5></pre>
										<pre><h6>Bahan			: <?php echo $pecah['bahan'] ?></h5></pre>
										<pre><h6>Ukuran			: <?php echo $pecah['ukuran'] ?></h5></pre>
										<pre><h6>Warna			: <?php echo $pecah['warna'] ?></h5></pre>
										<pre><h6>Total Harga	: <?php echo $pecah['harga_total'] ?></h5></pre>
										<pre><h6>Status			: <?php if ($pecah['status'] == 0){ 
																			echo "belum diproses";
																		}else if($pecah['status'] == 1){
																			echo "sedang diproses";
																		}else if($pecah['status'] == 2){
																				echo "selesai";
																		}else{
																				echo "dibatalkan";
																		}?></h5></pre>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
