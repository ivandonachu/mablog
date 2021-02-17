

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
      <div class ="col-md-8">
        <div class="card mt-5">
          <div class="card-header">
            <b> Form Edit Post </b>
          </div>
          <div class="card-body">
            <form action="<?= base_url() ?>ma_blog/mystory/prosesupdate/<?= $post['id_post'] ?>" method="POST">

              <div class="form-group">
                <label for="judul">Judul</label>
                <input type="text" class="form-control" name="judul" id="judul" placeholder="Masukkan Judul" value="<?= $post['judul'] ?>" required>
              </div> <br>

              <div class="form-group">
                <label for="isi">Isi</label>
                <textarea name="isi" class="form-control" placeholder="Masukkan isi" required><?= $post['isi'] ?> </textarea>
              </div> <br>

              <button type="submit" name="submit" class="btn btn-primary float-right">Update</button>
              <a href="<?= base_url() ?>post" class="btn btn-secondary"> Batal </a>

            </form>
          </div>
        </div>
      </div>
    </div>





  </div>
  <!-- End content -->

</div>
<!-- End wrapper -->



