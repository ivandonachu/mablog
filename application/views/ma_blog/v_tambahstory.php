

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


      
        <div class="card mt-5" style="width: 800px; margin-left: 130px;">
          <div class="card-header">
            <b> Form Upload Story </b>
            <hr>
             <?= $this->session->flashdata('message'); ?>
          </div>
          <div class="card-body">
            <form action="<?= base_url() ?>ma_blog/mystory/tambahstory " method="POST">
              <input type="hidden" name="id_user" value="<?php echo $user['id_user'];?>" id="id_user">

              <div class="form-group">
                <label for="judul">Judul</label>
                <input type="text" class="form-control" name="judul" id="judul" placeholder="Masukkan Judul" >
                <small class="text-danger"><?=form_error('judul') ?></small>
              </div> <br>

              <div class="form-group">
                <label for="isi">Isi</label>
                <textarea rows="20" name="isi" class="form-control" placeholder="Masukkan isi"></textarea>
                <small class="text-danger"><?=form_error('isi') ?></small>
              </div> <br>

             
              <div class="row" style="margin-left: 300px;">
                <div class="col-md-2" >
               <button type="submit" class="btn btn-primary float-right">Submit</button>
               </div>

               <div class="col-md-2" >
               <a href="<?= base_url() ?>ma_blog/mystory/" class="btn btn-secondary">Kembali</a>
              </div>
            </div>
          </form>
        </div>
      </div>
    



  </div>


</div>
</div>
</div>




</div>
<!-- End content -->

</div>
<!-- End wrapper -->






