<html lang="en">

<head>



  <link rel="shortcut icon" href="https://ssl.gstatic.com/keep/keep.ico">
  <title>Google Keep</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">


  <!-- Custom styles for this template -->        
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/simple-sidebar.css">

  <!-- Simbol/icon -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>

<body>

 

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav style="background-color: white" class="navbar navbar-expand border-bottom">
        <button class="btn" id="menu-toggle"><img src="https://img.icons8.com/material/24/000000/menu.png"></button>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
              <div style="width: 200px; font-size: 28px;" class="nav-link" href="#"><?= $this->session->flashdata('halaman'); ?></div>
          <form class="form-inline my-6 my-lg-0">
         <input style="width: 700px;background-color:#f2f2f2" class="form-control mr-sm-6" type="search" placeholder="Telusuri" aria-label="Search">
            </form>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
              <!-- icon refresh -->
            <img class="btn-hover" style="width: 24px; height: 24px; margin: auto; margin-left: 150px; opacity: 0.5;" data-toggle="tooltip" data-placement="bottom" title="Segarkan" src="https://www.gstatic.com/images/icons/material/system_gm/1x/refresh_black_24dp.png">
            <!-- icon view list-->
            <img class="btn-hover" style="width: 24px; height: 24px; margin: auto; opacity: 0.5; margin-left: 20px; margin-right: 10px;" data-toggle="tooltip" data-placement="bottom" title="Tampilan Daftar" src="https://www.gstatic.com/keep/list_view_24px.svg">
            <li class="nav-item dropdown" style="margin-right: 54px">
              <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img src="https://img.icons8.com/material-outlined/28/000000/settings.png">
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Setelan</a>
                <a class="dropdown-item" href="#">Kirim masukan</a>
                <a class="dropdown-item" href="https://support.google.com/keep/#topic=6262468">Bantuan</a>
                <a class="dropdown-item" href="#">Aplikasi yang didownload</a>
                <a class="dropdown-item" href="#">Pintasan keyboard</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>
              
            <li class="nav-item dropdown">
              <a class="nav-link " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               <img src="https://img.icons8.com/material/28/000000/circled-menu.png">
              </a>
              <div style="font-size: 11px;font-family: roboto" class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                  <div class="card border-light " style="width: 320px; height: 480px; padding: 28px">
                    <div class="row"  style="margin-bottom: 10px">
                        <div class="col-sm-4">
                            <div class="container-fluid">
                            <img src="https://img.icons8.com/material/64/000000/user.png">
                            <div class="text-centers" style="width: 84px;height: 20px">Akun Google</div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="container-fluid">
                            <img src="https://img.icons8.com/color/64/000000/google-logo.png">
                            <div class="text-centers" style="width: 84px;height: 20px">Telusuri</div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="container-fluid">
                            <img src="https://img.icons8.com/color/64/000000/google-maps.png">
                            <div class="text-centers" style="width: 84px">Maps</div>
                            </div>
                        </div>
                      </div>
                    <div class="row"  style="margin-bottom: 10px">
                        <div class="col-sm-4">
                            <div class="container-fluid">
                            <img src="https://img.icons8.com/color/64/000000/youtube-play.png">
                            <div class="text-centers" style="width: 84px">Youtube</div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="container-fluid">
                            <img src="https://img.icons8.com/color/64/000000/google-news.png">
                            <div class="text-centers" style="width: 84px">Berita</div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="container-fluid">
                            <img src="https://img.icons8.com/color/64/000000/gmail-login.png">
                            <div class="text-centers" style="width: 84px">Gmail</div>
                            </div>
                        </div>
                      </div>
                    <div class="row" style="margin-bottom: 10px">
                        <div class="col-sm-4">
                            <div class="container-fluid">
                            <img style="width: 64px; height: 64px" src="http://www.xanjero.com/wp-content/uploads/2018/11/new-Google-Contacts-desktop-web-app.png">
                            <div class="text-centers" style="width: 84px">Kontak</div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="container-fluid">
                            <img src="https://img.icons8.com/color/64/000000/google-drive.png">
                            <div class="text-centers" style="width: 84px">Drive</div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="container-fluid">
                            <img src="https://img.icons8.com/color/64/000000/google-calendar.png">
                            <div class="text-centers" style="width: 84px">Kalender</div>
                            </div>
                        </div>
                      </div>
                       <div class="row"  style="margin-bottom: 10px">
                        <div class="col-sm-4">
                            <div class="container-fluid">
                            <img src="https://img.icons8.com/color/64/000000/google-translate.png">
                            <div class="text-centers" style="width: 84px">Terjemahan</div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="container-fluid">
                            <img style="width: 64px;height:  64px" src="https://www.gstatic.com/images/branding/product/2x/photos_96dp.png">
                            <div class="text-centers" style="width: 84px">Foto</div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="container-fluid">
                            <div class="text-centers" style="width: 84px">Belanja</div>
                            </div>
                        </div>
                      </div>
                    
                  </div>
              </div>
            </li>
              
            <li class="nav-item dropdown">
              <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <img src="https://img.icons8.com/material/28/000000/user.png">
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <div class="dropdown-item" style="padding: 4px" href="#">
                    <div class="row" style="width: 325px; height: 96px; margin: 16px">
                        <img class="col" style="width: 96px; padding 0px" src="https://img.icons8.com/material/96/000000/user.png">
                        <div class="col">
                            <div class="row"><?php echo $this->session->userdata('username') ?></div>
                            <div class="row"><?php echo $this->session->userdata('email') ?></div>
                            <a class="row" href=""> privasi</a>
                             <div class="row"> <div class="btn btn-primary"> Akun Google</div></div>
                        </div>
                    </div>
                    
                  </div>
                <div class="dropdown-item bg-light" style="height:48px" href="#">
                <a href="<?php echo base_url('C_signin/logout')?>" class="btn btn-light text-muted float-right" style="border:1px"> keluar</a>
                  </div>
              </div>
            </li>
          </ul>
        </div>
      </nav>