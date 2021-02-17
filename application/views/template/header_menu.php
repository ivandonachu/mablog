
<html>
<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title><?php echo $judul ?></title>


        <!-- CSS -->
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




  <!-- Wrapper -->
      <div class="wrapper">

      <!-- Sidebar -->
      <nav class="sidebar">
        
        <!-- close sidebar menu -->
        <div class="dismiss">
          <i class="fas fa-arrow-left" style="margin-top: 10px"></i>

        </div>
        
        <div class="logo">
        <img src="/project1/assets/img/Logo CBM.png" style="margin-top: 15px;">
        </div>
        
        <ul class="list-unstyled menu-elements">

          <li>
            <a  href="<?= base_url('ma_blog/mystory'); ?>"><i class="fas fa-book-reader"></i>My Story</a>
          </li>

          <li>
            <a  href="<?= base_url('ma_blog/menu'); ?>"><i class="fas fa-book"></i>List Story</a>
          </li>


        </ul>
        <ul class="list-unstyled menu-elements">
          <li>
            <a  href="VListAccount.php"><i class="fas fa-user"></i>Pengaturan Akun</a>
          </li>
          <li>
            <a href="<?= base_url('logout'); ?>"><i class="fas fa-sign-out-alt"></i>Logout</a>
          </li>
        </ul>
        
  