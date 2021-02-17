<div class="container mt-3">
	<div class="card" style="width: 1000px;">
		<div class="card-body">
			<form action="" method="POST">
				<h1 align="center" >Form Register</h1>
				<hr>
				<div class="form-group row">
					<label for="inputPassword" class="col-sm-2 col-form-label">Username</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="username" name="username" placeholder="Masukan Usernamee" value="<?= set_value('username') ?>">
						<small class="text-danger"><?=form_error('username') ?></small>
					</div>
				</div>
				<div class="form-group row">
					<label for="inputPassword" class="col-sm-2 col-form-label">Nama Pengguna</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="nm_pengguna" name="nm_pengguna" placeholder="Masukan Nama Pengguna"
						value="<?= set_value('nm_pengguna') ?>">
						<small class="text-danger"><?=form_error('nm_pengguna') ?></small>
					</div>
				</div>
				<div class="form-group row">
					<label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
					<div class="col-sm-10">
						<input type="password" class="form-control" id="password1" name="password1" placeholder="Masukan Password"  >
						<small class="text-danger"><?=form_error('password1') ?></small>
					</div>
				</div>
				<div class="form-group row">
					<label for="inputPassword" class="col-sm-2 col-form-label">Re-Password</label>
					<div class="col-sm-10">
						<input type="password" class="form-control" id="password2" name="password2" placeholder="Masukan Ulang Password">
					</div>
				</div>
				<div class="row" style="">	
					<div >
						<button style="width: 100px; margin-right: 30px; margin-left: 370px;" type="submit" name="login" class="btn btn-outline-primary btn-sm">DAFTAR</button>
					</div>

					<div  >
						<a href="<?= base_url(); ?>home"><button type = 'button' class="btn btn-outline-primary btn-sm" style="width: 100px;">KEMBALI</button></a>
					</div>
				</div>

			</form>
		</div>
	</div>	
</div>
