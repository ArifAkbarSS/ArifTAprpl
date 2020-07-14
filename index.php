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
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="pegawai.php">Karyawan</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="pelanggan.php">Pelanggan</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="tas.php">Produc</a>
                                         <a class="dropdown-item" href="order.php">Order</a>
                                        <a class="dropdown-item" href="data.php">Data Order</a>
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
            <div class="single-hero-slides bg-img" style="background-image: url(img/bg-img/aaaa.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-11 col-md-6 col-lg-4">
                            <div class="hero-content">
                                <h2>TOKO PANCING ONLINE</h2>
                                <p>melayani berbagai macam jenis pancing bagi penikmat mancing yang mengutamakan kepuasan pembeli. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
 
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
  
    <script src="js/bootstrap/popper.min.js"></script>

    <script src="js/bootstrap/bootstrap.min.js"></script>

    <script src="js/others/plugins.js"></script>

    <script src="js/active.js"></script>
</body>