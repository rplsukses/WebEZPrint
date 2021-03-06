<?php
    include 'admin/core/init.php';
    include 'include/header.php';
    include 'admin/api/config/database.php';

    // Session
    /*
    session_start();
    if(!isset($_SESSION['login_mitra'])) {
      header('location:index.php');
    }else {
      $login_mitra = $_SESSION['login_mitra'];
    }
*/
    //Connect To Database
    $database = new Database();
    $db = $database->getConnection();
?>

<!-- Content -->
<body>
    <div id="home">
        <div class="site-header">
            <div class="top-header">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                             <div class="left-header lead">
                               <img src="images/logoo2.png" width="280px" height="50px"><a href="index.html"></a>                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-header">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-sm-8 col-xs-6">
                            <div class="menu text-right hidden-sm hidden-xs">
                                <ul>
                                    <li><a href="#home">Home</a></li>
                                    <li><a href="#services">About Us</a></li>
                                    <li><a href="#portfolio">How To Use</a></li>
                                    <li><a href="#contact">Login</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="responsive-menu text-right visible-xs visible-sm">
                        <a href="#" class="toggle-menu fa fa-bars"></a>
                        <div class="menu">
                            <ul>
                               <li><a href="#home">Home</a></li>
                                    <li><a href="#services">About Us</a></li>
                                    <li><a href="#portfolio">How To Use</a></li>
                                <li><a href="#contact">Login</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="flexslider">
        <ul class="slides">
            <li>
                <img src="images/banner07.jpg" alt="">
                <div class="flex-caption">
                    <h2>HARGA HEMAT</h2>
                    <span></span>
                    <p>Cetak berkas kamu dimana saja dan kapan saja tanpa harus antri</p>
                </div>
            </li>
            <li>
                <img src="images/banner06.jpg" alt="">
                <div class="flex-caption">
                    <h2>CLOUD BASE</h2>
                    <span></span>
                    <p>Upload dan cetak berkas kamu dengan cloud storage tanpa harus repot colok USB</p>
                </div>
            </li>
            <li>
                <img src="images/banner05.jpg" alt="">
                <div class="flex-caption">
                    <h2>BEBAS ANTRI</h2>
                    <span></span>
                    <p>Cetak berkas kamu dimana saja dan kapan saja tanpa harus antri</p>
                </div>
            </li>
        </ul>
    </div>

    <!-- About Us -->
    <div id="services" class="section-cotent">
        <div class="container">
            <div class="title-section text-center">
                <h2>ABOUT US</h2>
                <span></span>
            </div>
			<p align ="justify">EZprint adalah sebuah aplikasi mobile yang mampu menyediakan jasa print online secara mudah, cepat dan efisien.  </p>
            <p align ="justify"> Printing adalah kegiatan yang sering dilakukan banyak orang, tanpa terkecuali mahasiswa. Tumpukan tugas-tugas kuliah memang kebanyakan berupa makalah atau essay sehingga dalam pengumpulannya harus di-print terlebih dahulu. Namun, apa jadinya jika tugas makalah selesai Jam 12 malam dan besuk pagi harus dikumpulkan sedangkan jasa print belum ada yang buka? 
            Inilah permasalahan yang sering dialami banyak anak kostan yang tidak punya sebuah printer. Berdasarkan survey kami didapatkan beberapa data berikut : </p>
            <p>•	Kebanyakan mahasiswa adalah anak rantau sehingga, tidak semua mahasiswa memiliki sebuah printer di kamar kosnya mengingat harga printer yang lumayan mahal. </p>
            <p>•	Barangkali ada yang memilih datang ke lokasi printer secara langsung namun terkendala lokasi dan tidak punya motor. </p>
            <p>•	Selain itu, bagi mahasiswa waktu adalah uang sehingga menunggu ngeprint baginya adalah kegiatan yang membosankan.  </p>
            <p>•	Apalagi ketepatan waktu adalah yang dipentingkan karena menyangkut masalah deadline yang bila terlambat akan dikenakan pengurangan nilai hingga diskualifikasi. </p>
            <p>•	Mahasiswa seringkali tidak memilki banyak waktu keluar kos dan tidak memiliki printer </p>
            </div>
        </div>
    </div>

    <!-- How To Use -->
    <div id="portfolio" class="section-content">
        <div class="container">
            <div class="title-section text-center">
                <h2>HOW TO USE</h2>
                <span></span>
            </div>
            <div class="row">
                <div class="col-md-2 col-sm-6">
                    <div class="portfolio-thumb">
                        <img src="images/7.jpg" alt="Portfolio Item 1">
                        <div class="overlay">
                            <div class="inner">
                                <h4><a data-rel="lightbox" href="images/portfolio/item3.jpg"> </a></h4>
                                <span>Sign Up</span>
                            </div>
                        </div>
                    </div>
                </div>
				 <div class="col-md-2 col-sm-6">
                    <div class="portfolio-thumb">
                        <img src="images/6.jpg" alt="Portfolio Item 1">
                        <div class="overlay">
                            <div class="inner">
                                <h4><a data-rel="lightbox" href="images/6.jpg"> </a></h4>
                                <span>Sign In</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-sm-6">
                    <div class="portfolio-thumb">
                        <img src="images/5.jpg" alt="Portfolio Item 1">
                        <div class="overlay">
                            <div class="inner">
                                <h4><a data-rel="lightbox" href="images/5.jpg"> </a></h4>
                                <span>Pilihan Sesuai Lokasi</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-sm-6">
                    <div class="portfolio-thumb">
                        <img src="images/4.jpg" alt="Portfolio Item 2">
                        <div class="overlay">
                            <div class="inner">
                                <h4><a data-rel="lightbox" href="images/4.jpg"></a></h4>
                                <span>Pilihan Sesuai Kategori</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-sm-6">
                    <div class="portfolio-thumb">
                        <img src="images/8.jpg" alt="Portfolio Item 3">
                        <div class="overlay">
                            <div class="inner">
                                <h4><a data-rel="lightbox" href="images/8.jpg"> </a></h4>
                                <span>Menu Drawer</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-sm-6">
                    <div class="portfolio-thumb">
                        <img src="images/9.jpg" alt="Portfolio Item 4">
                        <div class="overlay">
                            <div class="inner">
                                <h4><a data-rel="lightbox" href="images/9.jpg"></a></h4>
                                <span>Halaman Profile</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- LOGIN -->
    <div id="contact" class="section-cotent">
        <div class="container">
            <div class="title-section text-center">
                <h2>Login Mitra</h2>
                <span></span>
            </div>
            <div class="row-center">
				<div class="col-md-4"></div>
                <div class="col-md-4 col-sm-8">
                    <div class="contact-form">
                        <form action="login.php" method="POST">
                        <p class="full-row">
                            <label for="email-id">Email:</label>
                            <input type="text" id="email-id" name="email">
                        </p>
                        <p class="full-row">
                            <label for="subject-id">Password:</label>
                            <input type="password" name="password">
                        </p>
                        <input class="mainBtn" type="submit" name="login" value="Log in" >
                        </form>
                    </div>
					    <p class="full-row">
                            <label for="name-id"> </label>
                        </p>
					    <p class="full-row">
                            <label for="name-id">Don't have an account ? <a href = "signup.php"> Sign up </a> </label>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div> 

<?php
    include 'include/footer.php';
?>

</body>