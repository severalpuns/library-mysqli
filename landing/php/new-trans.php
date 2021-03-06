<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Perpustakaan SMKN 3 Buduran</title>
    <link rel="shortcut icon" href="../img/faviconlock.ico" type="image/x-icon">
    <link rel="icon" href="../img/favicon.ico" type="image/x-icon">

    <!-- Bootstrap -->
    <link href="../framework/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/default.css">
    <link rel="stylesheet" type="text/css" href="../fontawesome/css/font-awesome.min.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body> 
     <nav class="navbar navbar-default">
       <div class="container">
        
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          </button>
          <!-- a class="navbar-brand" href="#">Login</a -->
        </div>

        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav navbar-right">
          <li><a href="../index.html">Home</a></li>
          <li><a href="about.html">About</a></li>
          </ul>
        </div>
       </div>
     </nav>

<!--      <div class="container-fluid primary-bg text-center">
        <h3>Who Am I?</h3>
          <img src="img/readlikeabos.jpg" alt="Foto Admin Yang Tamvan" class="img-circle img-responsive"style="display:inline">
       <h3>I'm Administrator</h3>
      </div> -->

      <div class="container-fluid content text-center">
        <!-- h3 class="font-head2">PERPUSTAKAAN</h3 -->
        <div class="row">
          <a href="#" class="set-glyph"><span class="fa fa fa-wpforms fa-5x"></span></a>
            <h4>Form Peminjaman Buku</h4>
        </div>
                  <?php 
            include "login.php";

            $NO = $_GET ['NO'];
            $view = "SELECT * FROM `data_buku` WHERE `NO` = $NO ";
            $viewquery = mysqli_query ($login, $view);
            $jadi = mysqli_fetch_array ($viewquery); 
          ?>

            <div class="content-menu">
              <form method="POST" action="post-new-trans.php">
                <div class="col-lg-3"></div>
                <div class="col-lg-6">
                   <div class="form-group">
                      <label class="sr-only">NIS</label>
                      <input type="text" class="form-control half-width nospace" name="NIS" placeholder="NIS" maxlength="10" required>
                   </div>
        
                   <div class="form-group">
                      <label class="sr-only">Judul Buku</label>
                      <input type="text" readonly class="form-control half-width" value="<?php echo $jadi['JUDUL']; ?>" name="JUDUL" placeholder="Judul Buku" maxlength="60" required>
                   </div>

                   <div class="form-group">
                     <label class="sr-only">Kategori Buku</label>
                      <input type="text" readonly class="form-control half-width" value="<?php echo $jadi['KATEGORI']; ?>" name="KATEGORI" placeholder="Judul Buku" maxlength="60" required>
                   </div>

                   <div class="form-group">
                    <label class="sr-only">Kode Buku</label>
                    <input type="text" readonly class="form-control half-width nospace" value="<?php echo $jadi['CODE']; ?>" name="CODE" placeholder="CODE Buku" maxlength="4" required>
                   </div>
        
                    <div class="clearfix">
                      <button type="submit" class="btn btn-primary pull-right">Pinjam</button>
                    </div>
              </div>
              <div class="col-lg-3"></div>
              </form>
            </div>
        </div>

      
      <footer class="footer-distributed footer hidden-xs hidden-sm hidden-md" style="font-family: 'Raleway', sans-serif;">
      <div class="footer-left">

        <div>
          <i class="fa fa-map-marker"></i>
          <span>Jalan Jenggolo No.1-C, Sidoarjo, Buduran, Jawa Timur</span>
        </div>
        <div>
          <i class="fa fa-phone"></i>
          <span>+62 31 8961218</span>
        </div>

        <div>
          <i class="fa fa-envelope"></i>
          <span><a href="mailto:smkn3buduran@gmail.com">smkn3buduran@gmail.com</a></span>
        </div>
      </div>

      <div class="footer-right pull-right">
        <p class="footer-school-about">
          <span>About SMKN 3 Buduran</span>

          SMK Negeri 3 Buduran Sidoarjo sebelumnya bernama STM PERKAPALAN SIDOARJO yang pendiriannya mengacu pada perjanjian kerja sama antara Direktorat Jenderal Pendidikan Dasar dan Menengah Departemen Pendidikan dan Kebudayaan dengan Badan Pengkajian dan Penerapan Teknologi (BPPT) dan PT.PAL INDONESIA (Persero).
        </p>

        <div class="footer-icons">
          <a href="https://www.facebook.com/pages/SMKN-3-BUDURAN/117767401585018"><i class="fa fa-facebook"></i></a>
          <a href="https://twitter.com/infostemapal"><i class="fa fa-twitter"></i></a>
          <a href="https://www.instagram.com/instaperkapalan/"><i class="fa fa-instagram"></i></a>
        </div>
      </div>
    </footer>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
     <script src="../framework/jquery/jquery.min.js"></script>
<!--  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> -->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../framework/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../js/default.js"></script>
  </body>
</html>