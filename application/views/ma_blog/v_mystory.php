

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

    <div class="container" style="width: 500px;">


      <form class="d-flex" action="<?= base_url(); ?>ma_blog/mystory" method="POST">
        <input class="form-control me-2" type="search" placeholder="Search Judul..." name="keyword" autocomplte="off" aria-label="Search">
        <button class="btn btn-secondary" type="submit" name="submit">
          <i class="fas fa-search fa-sm"></i>
        </button>
      </form>
      <?= $this->session->flashdata('message'); ?>
      <a href="<?= base_url() ?>ma_blog/mystory/tambahstory" class="btn btn-primary" > <i class="fas fa-plus-square"></i> Berbagi Story </a>

    </div>

    <div class="row mt-5" style="margin-left: 245px;">
      <?php foreach ($posts as $post) : ?>

        <div class="card col-md-3 m-3" >
          <div class="card-body">
            <h3 class ="text-truncate"><?= $post['judul'] ?></h3>
            <p class="" style="-webkit-line-clamp:3; overflow:hidden; text-overflow:ellipsis; display: -webkit-box; -webkit-box-orient:vertical;"><?= $post['isi'] ?></p>
            <a role="button" href="<?= base_url(); ?>ma_blog/mystory/lihatdetail/<?= $post['id_post'] ?>" class="btn btn-primary">Lihat &raquo;</a>
            <a role="button" href="<?= base_url() ?>ma_blog/mystory/update/<?= $post['id_post'] ?>" class="btn btn-warning" data-toggle='tooltip' title='Update'> <i class="fas fa-edit"></i>Edit</a>
            <a role="button" href="<?= base_url() ?>ma_blog/mystory/delete/<?= $post['id_post'] ?>" class="btn btn-danger" data-toggle='tooltip' title='Delete' onclick="return confirm('Yakin ingin menghapus Story?')"> <i class="fas fa-trash-alt"></i>Delete</a>
            
            
          </div>
        </div>




      <?php endforeach; ?>

    </div>
    <?= $this->pagination->create_links(); ?> <br>






  </div>
  <!-- End content -->

</div>
<!-- End wrapper -->


