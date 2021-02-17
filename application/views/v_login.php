
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Halaman Login PT.CBM</title>
  <link rel="stylesheet" type="text/css" href="/project1/bs4/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="/project1/bs4/style css/login.css">
  <link rel="stylesheet" type="text/css" href="/project1/bs4/fontawesome/css/all.min.css">
</head>
<body>
  <br><br><br><br>  <br><br><br><br>
  <div class="container" style="width: 400px;"> 
    <h3 class="text-center mt-5">Silahkan Login</h3>
    <hr>
    <?= $this->session->flashdata('message'); ?>
    
    <form  method="POST" action="" style="width: 250px; margin-left: 45px;">

      <div class="form-group">

        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text"><i class="fas fa-user "></i></div>
          </div>
          <input type="text" name="username" class="form-control form-control-sm" id="username" placeholder="Username"  value="<?= set_value('username') ?>">
          
        </div>
        <small class="text-danger" ><?=form_error('username') ?></small>
      </div>
      

      <div class="form-group">

        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text"><i class="fas fa-unlock-alt"></i></div>
          </div>
          <input type="password" name="password" class="form-control form-control-sm" id="password" placeholder="Password">
          
        </div>
        <small class="text-danger"><?=form_error('password') ?></small>
      </div>

      <div class="row" style="margin-left: 2px; margin-right: 30px;">
        <div class="col-md-6" >
         <button style="width: 100px;" type="submit" name="login" class="btn btn-outline-primary btn-sm"> LOGIN</button>
       </div>
     
     <div class="col-md-6" >
      <a href="<?= base_url(); ?>home"><button type = 'button' class="btn btn-outline-primary btn-sm" style="width: 100px;">KEMBALI</button></a>
     </div>
   </div>


 </form>

</div>


<script src="/project1/bs4/js/jquery-3.4.1.slim.min.js"></script>
<script src="/project1/bs4/js/popper.min.js"></script>
<script src="/project1/bs4/js/bootstrap.min.js"></script>
</body>
</html>