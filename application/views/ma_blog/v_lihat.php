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
			margin-right: 50px;">Read Story</span></h2>
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
				<a href="<?= base_url() ?>ma_blog/menu/" class="btn btn-secondary">Kembali</a>
			</div>
			
		</div>

		


	</div>
	<!-- End content -->

</div>
<!-- End wrapper -->




