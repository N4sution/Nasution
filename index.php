<?php
	$title = "portfolio Nasution";
	$harga = 250000;
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css">
    <title><?php echo $title;?></title>
  </head>
  <body>
  	<!-- jumbotron -->
    <div class="jumbotron text-center" >
    	<img src="img/Nasution.jpg" class="img-circle">
    	<h1>Nasution</h1>
    	<p>Mahasiswa | programer | defacer</p>
    </div>
    <!---- Akhir jumbotron ---->
    <section class="About" id="About">
    	<div class="container">
    		<div class="row">
    			<div class="col-sm-12">
    			<h2 class="text-center">About</h2>
    			<hr>
    			</div>
    		</div>
    		<div class="row">
    			<div class="col-sm-6">
    			<p>halo nama sya nasution</p>
    			</div>
    			<div class="col-sm-6">
    			<p>halo nama sya nasution</p>
    			</div>
    		</div>
    	</div>
    </section> 
    <!-- Akhir konten -->
    
    <!-- portfolio -->
    <section class="portfolio" id="portfolio">
    	<div class="container">
    		<div class="row">
    			<div class="col-sm-12">
    				<h2 class="text-center">portfolio</h2>
    				<hr>
    			</div>
    		</div>
    		<div class="row">
    			<div class="col-sm-4">
    			<a href="">
    				<img src="img/Nasution.jpg" class="img-thumbnail" >
    			</a>
    			</div>
    			<div class="col-sm-4">
    			<a href="">
    				<img src="img/Nasution.jpg" class="img-thumbnail" >
    			</a>
    			</div>
    			<div class="col-sm-4">
    			<a href="">
    				<img src="img/Nasution.jpg" class="img-thumbnail">
    			</a>
    			</div>
    			<div class="col-sm-4">
    			<a href="">
    				<img src="img/Nasution.jpg" class="img-thumbnail" >
    			</a>
    			</div>
    			<div class="col-sm-4">
    			<a href="">
    				<img src="img/Nasution.jpg" class="img-thumbnail" >
    			</a>
    			</div>
    		</div>
    	</div>
    </section>
    
    <!-- kontak -->
    <section class="contact" id="contact">
    	<div class="container">
    		<div class="row">
    			<div class="col-sm-8">
    			<h2 class="text-center" >Contact</h2>
    			<hr>
    			</div>
    		</div>
    		<div class="row">
    			<div class="col-sm-6">
    			<form>
    				<div class="form-group">
    				 <label for="nama">nama</label>
    				 <input type="text" id="nama" class="form-control" placeholder="masukan nama" >
    				</div>
    				<div class="form-group">
    			   	<label for="email">email</label>
    				<input type="email" id="email" class="form-control" placeholder="masukan email" >
    				</div>
    				<div class="form-group">
    				<label for="Alamat">Alamat</label>
    				<input type="text" id="Alamat" class="form-control" placeholder="masukan Alamat" >
    				</div>
    				<div class="form-group">
    				<label>pesan</label>
    				<textarea id="pesan" class="form-control" placeholder="Masukan pesan"></textarea>
    				</div>
    			</form>
    			</div>
    		</div>
    	</div>
    </section>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>