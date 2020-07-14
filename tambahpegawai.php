<?php 
  include 'koneksi.php';
?>
				
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>TOKO PANCING ONLINE</title>

    <link href="style.css" rel="stylesheet">

    <link href="css/responsive/responsive.css" rel="stylesheet">

</head>

<body>

    <div class="caviar-search-form d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="search-close-btn" id="closeBtn">
                        <i class="pe-7s-close-circle" aria-hidden="true"></i>
                    </div>
                    <form action="#" method="get">
                        <input type="search" name="caviarSearch" id="search" placeholder="Search Your Favourite Dish ...">
                        <input type="submit" class="d-none" value="submit">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <header class="header_area" id="header">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-12 h-100">
                    <nav class="h-100 navbar navbar-expand-lg align-items-center">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#caviarNav" aria-controls="caviarNav" aria-expanded="false" aria-label="Toggle navigation"><span class="fa fa-bars"></span></button>
                        <div class="collapse navbar-collapse" id="caviarNav">
                            <ul class="navbar-nav ml-auto" id="caviarMenu">
                                <li class="nav-item ">
                                    <a class="nav-link" href="index.php">Home </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="pegawai.php">karyawan</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="pelanggan.php">Pelanggan</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="tas.php">Produc</a>
                                    </div>
                                </li>
                            </ul>
                            <div class="caviar-search-btn">
                                <a id="search-btn" href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <section class="caviar-hero-area" id="home">
        <div class="caviar-hero-slides owl-carousel">
            <div style="background-image: url(img/bg-img/hero-1.jpeg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-11 col-md-6 col-lg-4">
                            <div class="hero-content">
                                
                                <p>Pegawai adalah Sumber Daya Manusia yang bekerja pada sebuah institusi baik didalam pemerintah atau swasta dan memperoleh imbalan kerja yang sesuai untuk menjalankan suatu pekerjaan dari pemberi kerja.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="caviar-about-us-area section-padding-100" id="pegawai">
	<div class="container py-lg-3 py-sm-1">
		<form method="post" action="prosespegawai.php">
			<form class="needs-validation" novalidate>
  				<div class="form-row">
  					<div class="col-md-4 mb-3">
      					<label for="validationTooltip01">ID </label>
      					<input type="text" class="form-control" id="validationTooltip01" placeholder="Kode karyawan" name="ID_karyawan">
    				</div>
    				<div class="col-md-4 mb-3">
      					<label for="validationTooltip01">Nama</label>
      					<input type="text" class="form-control" id="validationTooltip01" placeholder="Nama" name="nama">
    				</div>
  				</div>
 				<div class="form-row">
					<div class="form-group col-md-6">
      					<label for="inputCity">Jabatan</label>
	  					<input type="text" class="form-control" id="inputCity" placeholder="Jabatan" name="jabatan">
    				</div>
					<div class="col-md-4 mb-3">
      					<label for="validationTooltip01">Jenis Kelamin</label>
      					<input type="text" class="form-control" id="validationTooltip01" placeholder="Jenis Kelamin" name="jenis_kelamin">
    				</div>
  				</div>
			<button class="btn btn-primary" type="submit">Submit form</button>
			</form>
			</form>
		</div>
    </section>

    <footer class="caviar-footer-area">
                <div class="col-12">
                    <div class="footer-text">
                    <<p class="">© 2019 Basdat. All rights reserved | Design by
					                Ferry Agung P.</a>
                    </div>
                </div>
    </footer>
 
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
  
    <script src="js/bootstrap/popper.min.js"></script>

    <script src="js/bootstrap/bootstrap.min.js"></script>

    <script src="js/others/plugins.js"></script>

    <script src="js/active.js"></script>
</body>