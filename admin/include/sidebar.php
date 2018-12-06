<!-- Sidebar -->
<!DOCTYPE html>
<body class="">
	<div class="wrapper">
		<div class="sidebar" data-background-color="white" data-color="purple" data-image="">
			<div class="logo">
				<a class="simple-text logo-normal" href="dashboard.php">HALAMAN ADMIN</a>
			</div>
			<div class="sidebar-wrapper">
				<ul class="nav">
					<li <?php if($page == "Index") echo "class='nav-item active'";?>>
						<a class="nav-link" href="index.php"><i class="material-icons">dashboard</i>
						<p>Dashboard</p></a>
					</li>
					<li <?php if($page == "Inbox") echo "class='nav-item active'";?>>
						<a class="nav-link" href="inbox.php"><i class="material-icons">mail</i>
						<p>Inbox</p></a>
					</li>
					<li <?php if($page == "Transaksi") echo "class='nav-item active'";?>>
						<a class="nav-link" href="transaksi.php"><i class="material-icons">assignment</i>
						<p>Transaksi</p></a>
					</li>
					<li <?php if($page == "User") echo "class='nav-item active'";?>>
						<a class="nav-link" href="user.php"><i class="material-icons">supervisor_account</i>
						<p>User</p></a>
					</li>
					<li <?php if($page == "Mitra") echo "class='nav-item active'";?>>
						<a class="nav-link" href="mitra.php"><i class="material-icons">store</i>
						<p>Mitra</p></a>
					</li>
					<li <?php if($page == "Kategori") echo "class='nav-item active'";?>>
						<a class="nav-link" href="kategori.php"><i class="material-icons">chrome_reader_mode</i>
						<p>Kategori</p></a>
					</li>
					<li <?php if($page == "Admin") echo "class='nav-item active'";?>>
						<a class="nav-link" href="admin.php"><i class="material-icons">person</i>
						<p>Admin</p></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="logout.php"><i class="material-icons">arrow_back_ios</i>
						<p>Logout</p></a>
					</li>
				</ul>
			</div>
		</div>
		<!-- End Sidebar -->
