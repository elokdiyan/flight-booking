<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>fligthbooking</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/clean-blog.min.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand" href="index.html">Flight Booking</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="post.html">Booking</a> 
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.html">Cek Pemesanan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.html">Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Header -->
    <header class="masthead" style="background-image: url('img/pesawat2.jpg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="site-heading">
              <h1>Flight Booking</h1>
              <h2 class="subheading">pesan sekarang dan nikmati keunggulan lainnya</h2>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Post Content -->
    <article>
          <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <form class="form-horizontal" role="form" method="POST">
              <div class="form-group">
                <div class="col-sm-2">
                  <label for="inputid3" class="control-label">id</label>
                </div>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="id" id="inputid3" placeholder="id">
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-2">
                  <label for="inputnama3" class="control-label">Nama</label>
                </div>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputnama3" name="nama" placeholder="nama">
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-2">
                  <label for="inputtanggal_lahir3" class="control-label">Tanggal Lahir</label>
                </div>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputtanggal_lahir3" name="tanggal_lahir" placeholder="tanggal_lahir">
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-2">
                  <label for="inputjurusan3" class="control-label">Jurusan</label>
                </div>
                <div class="col-sm-2">
                  <select name="jurusan" id="jurusan">
                    <option value="--" selected="selected">--</option>
                    <option value="TKJ">TKJ</option>
                    <option value="TJA">TJA</option>
                    <option value="RPL">RPL</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-2">
                  <label for="inputagama3" class="control-label">Agama</label>
                </div>
                <div class="col-sm-10">
                  <select name="agama" id="agama">
                    <option value="--" selected="selected">--</option>
                    <option value="islam">ISLAM</option>
                    <option value="katolik">KRISTEN KATOLIK</option>
                    <option value="protestan">KRISTEN PROTESTAN</option>
                    <option value="hindu">HINDU</option>
                    <option value="budha">BUDHA</option>
                    <option value="konghucu">KONGHUCU</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-2">
                  <label for="inputaalamat3" class="control-label">Alamat</label>
                </div>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputalamat3" name="alamat" placeholder="alamat">
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-2">
                  <label for="inputaemail3" class="control-label">Email</label>
                </div>
                <div class="col-sm-10">
                  <input type="email" class="form-control" id="inputemail3" name="email" placeholder="email">
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-2">
                  <label for="inputPassword3" class="control-label">Password</label>
                </div>
                <div class="col-sm-10">
                  <input type="password" class="form-control" id="inputPassword3" name="password" placeholder="Password">
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <button type="submit" name="submit" class="btn btn-default">Submit</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    </article>

    <hr>

    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <ul class="list-inline text-center">
              <li class="list-inline-item">
                <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
            </ul>
            <p class="copyright text-muted">Copyright &copy; Your Website 2017</p>
          </div>
        </div>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/clean-blog.min.js"></script>

  </body>

</html>
