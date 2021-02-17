

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title><?php echo $judul ?></title>
  <link rel="stylesheet" type="text/css" href="/project1/bs4/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="/project1/bs4/style css/index.css">
  <link rel="stylesheet" type="text/css" href="/project1/bs4/fontawesome/css/all.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500&display=swap">
  <link rel="stylesheet" href="/project1/assets/css/jquery.mCustomScrollbar.min.css">
  <link rel="stylesheet" href="/project1/assets/css/animate.css">
  <link rel="stylesheet" href="/project1/assets/css/style.css">
  <link rel="stylesheet" href="/project1/assets/css/media-queries.css">
  <!-- Favicon and touch icons -->
  <link rel="shortcut icon" href="/project1/assets/ico/favicon.png">
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/project1/assets/ico/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/project1/assets/ico/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/project1/assets/ico/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="/project1/assets/ico/apple-touch-icon-57-precomposed.png">

</head>
<body>
	
</nav>
<!-- End sidebar -->

<!-- Dark overlay -->
<div class="overlay"></div>

<!-- Content -->
<div class="content">

	<!-- open sidebar menu -->
	<a class="btn btn-primary btn-customized open-menu" href="#" role="button">
		<i class="fas fa-align-left"></i> <span>Menu</span>
	</a>
	
	<!-- Top content -->
	<div>   
		<!-- Name Page -->
		<div>
			<h2 class="display-8" align="right"><span class="font-weight-bold"  style="font-family: monospace; color: black; font-size: 20px; 
			margin-right: 50px;">My Story</span></h2>
			<hr>
		</div>


		
		<!-- isi -->

		<div class="container">
			<div class="card">
				<div class="card-header">
					<h3 style="color: black;"> <?= $post['judul']; ?></h3>
				</div>
				<div class="card-body">
					<blockquote class="blockquote mb-0">
						<p style="color: black;"><?= $post['isi']; ?></p>
					</blockquote>
				</div>

			</div>
			<div style="margin-top: 10px;">
				<a href="<?= base_url() ?>ma_blog/mystory/" class="btn btn-secondary">Kembali</a>
			</div>
			
		</div>

		


	</div>
	<!-- End content -->

</div>
<!-- End wrapper -->


<script src="/project1/bs4/js/jquery-3.4.1.slim.min.js"></script>
<script src="/project1/bs4/js/popper.min.js"></script>
<script src="/project1/bs4/js/bootstrap.min.js"></script>
<!-- Javascript -->
<script src="/project1/assets/js/jquery-3.3.1.min.js"></script>
<script src="/project1/assets/js/jquery-migrate-3.0.0.min.js"></script>
<script src="/project1/assets/js/jquery.backstretch.min.js"></script>
<script src="/project1/assets/js/wow.min.js"></script>
<script src="/project1/assets/js/jquery.waypoints.min.js"></script>
<script src="/project1/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="/project1/assets/js/scripts.js"></script>
</body>
</html>


