<?php
    include 'admin/core/init.php';
    include 'include/header.php';
    include 'include/footer.php';
?>
<body>
    <div id="home">
        <div class="site-header">
            <div class="top-header">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="left-header lead">
                               <img src="images/logo.png" width="30px" height="30px"><a href="index.html"></a>
                                <span>EZPrint Mitra Center</span>                              
                            </div> <!-- /.left-header -->
                        </div> <!-- /.col-md-6 -->
                    </div> <!-- /.row -->
                </div> <!-- /.container -->
            </div> <!-- /.top-header -->
            <div class="main-header">
                <div class="container">
                    <div class="row">
                        <div class="text-center">
                            <div class="logo">
                                <h1 text align="center"><a href="#" title="Dreri">Profile Mitra </a></h1>
                            </div> <!-- /.logo -->
                        </div> <!-- /.col-md-4 -->                        
                    </div> <!-- /.row -->
                    <div class="responsive-menu text-right visible-xs visible-sm">
                        <a href="#" class="toggle-menu fa fa-bars"></a>
                       
                    </div> <!-- /.responsive-menu -->
                </div> <!-- /.container -->
            </div> <!-- /.header -->
        </div> <!-- /.site-header -->
    </div> <!-- /#home -->
    
     <div id="about" class="section-cotent">
        <div class="container">
            <div class="row">
                <div class="our-team">
					
                    <div class="col-md-4 col-sm-6">
                        <div class="team-member">
                            <div class="member-img">
                                <img src="images/team/Capture.jpg" alt="Mary">
                                <div class="overlay">   
                                </div> <!-- /.overlay -->
                            </div>
                            <div class="inner-content">
                                <h5 text align="center">Theater Print</h5>
								   <span><i class="fa fa-home"></i> Alamat   : No Sukolilo, Jl. Gebang Lor No.105, Gebang Putih, Sukolilo</span>
								   <span><i class="fa fa-home"></i> Jam Buka   : 06.00 Jam Tutup : 22.00 </span>
									<span><i class="fa fa-phone"></i> Telepon  : 0813-3936-6196</span>
									<span><i class="fa fa-envelope"></i> Email : theater@cgmail.com</span>
                            </div>
                        </div> <!-- /.team-member -->
                    </div>
					<div class="col-md-8">
						<div class="table">
							<table class="table table-striped table-hover">
							 <h3 class="widget-title">Info </h3>
								<tbody class="h5">
									<tr >
										<td>Nama Mitra  </td>
										<td>: </td>
										<td>Theater Print</td>
										<td> </td>
									</tr>
									<tr>
										<td>Alamat Mitra  </td>
										<td>: </td>
										<td>Jl. Gebang Lor </td>
										<td> </td>
									</tr>
									<tr>
										<td>Email  </td>
										<td>: </td>
										<td>theaterprint@gmail.com </td>
										<td> </td>
									</tr>
									<tr>
										<td>Telepon  </td>
										<td>: </td>
										<td>0813-3936-6196</td>
										<td> </td>
									</tr>
									<tr>
										<td>Nama Pemilik  </td>
										<td>: </td>
										<td>Aaaaaa </td>
										<td> </td>
									</tr>
									<tr>
										<td>Telepon Pemilik  </td>
										<td>: </td>
										<td>0814-3142-2442</td>
										<td> </td>
									</tr>
									<tr>
										<td>Last Seen </td>
										<td>: </td>
										<td>17.00</td>
										<td> </td>
									</tr>
								</tbody>
						</table>
						</div> <!-- /.col-md-3 -->
					</div>
                </div> <!-- /.our-team -->
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </div> <!-- /#about -->

    <div id="contact" class="section-cotent">
        <div class="container">
                    <h4 class="widget-title">Location</h4>
                    <div class="map-holder">
                        <div class="google-map-canvas" id="map-canvas" style="height: 250px;">
                        </div>
                    </div> <!-- /.map-holder -->
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </div> <!-- /#contact -->


    <div class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-8 col-xs-12">
                    <p>Copyright &copy; EZPrint</p>
                </div> <!-- /.col-md-6 -->
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="go-top">
                        <a href="#" id="go-top">
                            <i class="fa fa-angle-up"></i>
                            Back to Top
                        </a>
                    </div>
                </div> <!-- /.col-md-6 -->
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </div> <!-- /.site-footer -->

    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/jquery.lightbox.js"></script>
    <script src="js/custom.js"></script>
    <script type="text/javascript">

        function initialize() {
          var mapOptions = {
			  scrollwheel: false,
            zoom: 15,
            center: new google.maps.LatLng(13.758468,100.567481)
          };

          var map = new google.maps.Map(document.getElementById('map-canvas'),
              mapOptions);
        }

        function loadScript() {
          var script = document.createElement('script');
          script.type = 'text/javascript';
          script.src = 'https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&' +
              'callback=initialize';
          document.body.appendChild(script);
        }

        window.onload = loadScript;
    </script>

</body>
</html>