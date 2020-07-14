<?php 
		include 'koneksi.php';
		$data = mysqli_query($koneksi,"select no_pembayaran from pembayaran order by no_pembayaran desc");
		$kode_faktur = mysqli_fetch_array($data);
	 	$kode = $kode_faktur['no_pembayaran'];
		
			$urut = substr($kode, 6, 3);
			$tambah = (int) $urut + 1;
			$bln = date("m");
			
			if(strlen($tambah) == 1){
				$format = "DM" .$bln."00".$tambah;
			}else{
				$format = "DM" .$bln.$tambah;
			}
				
			?>
            
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>PRPL</title>

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
                                    <a class="nav-link" href="index.php">Home </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="pegawai.php">Pegawai</a>
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

    <section class="caviar-hero-area" id="order">
        <div class="caviar-hero-slides owl-carousel">
            <div style="background-image: url(img/bg-img/hero-1.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-11 col-md-6 col-lg-4">
                            <div class="hero-content">
                                <p>Morbi sed porta diam. Sed pulvinar cursus lorem, consectetur iaculis dolor scelerisque non. 
                                Praesent bibendum mauris risus, non aliquam tellus consectetur nec.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="caviar-about-us-area section-padding-100" id="order">
    <div class="container py-lg-3 py-sm-1">
        <form method="post" action="prosesorder.php">
        <form class="needs-validation" novalidate>
        <div class="form-row">
            <div class="form-group">
            <label>ID</label>
            <input class="form-control" name="no_pembayaran" value="<?php echo $format;?>" readonly>   
        </div>
        <div class="col-md-2 mb-1">
            <label class="mr-sm-2" for="inlineFormCustomSelect">Pembeli</label>
            <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="no_hp">
            <?php 
                include 'koneksi.php';
                $data=mysqli_query($koneksi,"SELECT no_hp from pelanggan");
                while ($d=mysqli_fetch_array($data)) {
            ?>
                <option value="<?=$d['no_hp']?>"><?=$d['no_hp']?></option> 
            <?php
                }
            ?>
            </select>
        </div>
        <div class="col-md-2 mb-1">
            <label class="mr-sm-2" for="inlineFormCustomSelect">Tas</label>
            <select name="id_tas" id="id_tas" class="form-control" onchange='changeValue(this.value)' required>
            <option value="">-Pilih-</option>
        <?php 
            $query=mysqli_query($koneksi, "select * from tas "); 
            $result = mysqli_query($koneksi, "select * from tas");  
            $jsArray = "var prdName = new Array();";
            while ($row = mysqli_fetch_array($result)) {  
    
            echo '<option name="id_tas" value="' . $row['id_tas'] . '">' . $row['id_tas'] . '</option>';  
            $jsArray .= "prdName['" . $row['id_tas'] . "'] = {harga:'" . addslashes($row['harga']) . "'};";
            }
        ?>
        </select>
        </div>
    
        <div class="form-group">
            <label>Harga</label>
            <input class="form-control"  name="harga" id="harga" readonly />      
        </div>
              
        <div class="col-md-2 mb-1">
          <label class="mr-sm-2" for="inlineFormCustomSelect">Jumlah Pesan</label>
          <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="jumlah">
                <option value="">Jumlah</option>
                <?php for($x=1;$x<=20;$x++){ ?>
                <option value="<?php echo $x; ?>"><?php echo $x; ?></option>
                <?php } ?>
            </select>
        </div>
        
        </div>
        <div class="form-row">
        <div class="col-md-3 mb-3">
            <label for="validationTooltip04">Tanggal Pesan</label>
            <input type="date" class="form-control" id="validationTooltip04" placeholder="State" name="tgl_pesan">			
        </div>
        <div class="col-md-3 mb-3">
            <label for="validationTooltip05">Tanggal Ambil</label>
            <input type="date" class="form-control" id="validationTooltip05" placeholder="Zip" name="tgl_ambil">
        </div>
        </div>
        <button class="btn btn-primary" type="submit">Submit form</button>
    </form>
    
    </table>
    
        </div>
    </section>
    

    <footer class="caviar-footer-area">
                <div class="col-12">
                    <div class="footer-text">
                    <<p class="">© 2019 Basdat. All rights reserved | Design by
					               Arif Akbar Satrio.</a>
                    </div>
                </div>
    </footer>
 
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
  
    <script src="js/bootstrap/popper.min.js"></script>

    <script src="js/bootstrap/bootstrap.min.js"></script>

    <script src="js/others/plugins.js"></script>

    <script src="js/active.js"></script>
</body>
</html>

<script type="text/javascript"> 
<?php echo $jsArray; ?>
function changeValue(id){
    document.getElementById('harga').value = prdName[id].harga;

};
</script>