
<html lang="en">

<head>



  <title>GOOGLE KEEP</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">


  <!-- Custom styles for this template -->        
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/simple-sidebar.css">


</head>

<body>

 

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav style="background-color: white" class="navbar navbar-expand border-bottom">
        <button class="btn" id="menu-toggle"><img src="https://img.icons8.com/material/24/000000/menu.png"></button>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
              <div style="width: 200px; font-size: 28px;" class="nav-link" href="#"><?= $this->session->flashdata('flash'); ?></div>
          <form class="form-inline my-6 my-lg-0">
         <input style="width: 700px;background-color:#f2f2f2" class="form-control mr-sm-6" type="search" placeholder="Telusuri" aria-label="Search">
            </form>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
              
            <li class="nav-item dropdown" style="margin-right: 54px">
              <a class="nav-link" data-placement="bottom" title="Setelan" href="#" id="navbarDropdown" role="button" data-toggle="dropdown tooltip" aria-haspopup="true" aria-expanded="false">
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
                <div class="dropdown-item" href="#">
                    <div class="row" style="width: 325px; height: 96px; margin: 16px">
                        <img class="col-4" style="width: 96px" src="https://img.icons8.com/material/96/000000/user.png">
                        <div class="col">
                            <div class="row"><?php echo $this->session->userdata('username') ?></div>
                            <div class="row"><?php echo $this->session->userdata('email') ?></div>
                            <a class="row" href=""> privasi</a>
                             <div class="row"> <div class="btn btn-primary"> akun google</div></div>
                        </div>
                    </div>
                    
                  </div>
                <a class="dropdown-item bg-light" style="height:48px" href="#">
                <a href="<?php echo base_url('C_signin/logout')?>" class="btn btn-light text-muted float-right" style="border:1px"> keluar</da>
                  </a>
              </div>
            </li>
          </ul>
        </div>
      </nav>
<div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div style="background-color: white; width: 428px" id="sidebar-wrapper">
      <div class="list-group">
        <div class="btn">  
        <div class="row" style="padding: 16px; border-radius: 5px 50px 50px 5px; ">
        <svg class="col-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="gb_jc"><path d="M9 21c0 .55.45 1 1 1h4c.55 0 1-.45 1-1v-1H9v1zm3-19C8.14 2 5 5.14 5 9c0 2.38 1.19 4.47 3 5.74V17c0 .55.45 1 1 1h6c.55 0 1-.45 1-1v-2.26c1.81-1.27 3-3.36 3-5.74 0-3.86-3.14-7-7-7zm2.85 11.1l-.85.6V16h-4v-2.3l-.85-.6A4.997 4.997 0 0 1 7 9c0-2.76 2.24-5 5-5s5 2.24 5 5c0 1.63-.8 3.16-2.15 4.1z"></path></svg>
        <div class="col-8 text-rigth" href="#">Catatan</div>
        </div>  
        </div>
        <div class="btn">   
        <div class="row " style="padding: 16px;border-radius: 5px 50px 50px 5px;">
        <svg class="col-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="gb_jc"><path d="M18 17v-6c0-3.07-1.63-5.64-4.5-6.32V4c0-.83-.67-1.5-1.5-1.5s-1.5.67-1.5 1.5v.68C7.64 5.36 6 7.92 6 11v6H4v2h16v-2h-2zm-2 0H8v-6c0-2.48 1.51-4.5 4-4.5s4 2.02 4 4.5v6zm-4 5c1.1 0 2-.9 2-2h-4c0 1.1.9 2 2 2z"></path></svg>
        <div class="col" href="#">Pengingat</div>
        </div>  
          </div>
        <div class="dropdown-divider"></div>
        <div class="row text-muted" style="margin-left: 24px"> Label </div>
        <div class="btn"> 
        <div class="row " style="padding: 18px">
        <svg class="col-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="gb_jc"><path d="M20.41 4.94l-1.35-1.35c-.78-.78-2.05-.78-2.83 0L13.4 6.41 3 16.82V21h4.18l10.46-10.46 2.77-2.77c.79-.78.79-2.05 0-2.83zm-14 14.12L5 19v-1.36l9.82-9.82 1.41 1.41-9.82 9.83z"></path></svg>
        <div class="col" href="#"> Edit Label</div>
        </div>  
          </div>
        <div class="dropdown-divider"></div>
        <div class="btn"> 
        <div class="row " style="padding: 16px; border-radius: 5px 50px 50px 5px; ">
        <svg class="col-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="gb_jc"><path d="M20.54 5.23l-1.39-1.68C18.88 3.21 18.47 3 18 3H6c-.47 0-.88.21-1.16.55L3.46 5.23C3.17 5.57 3 6.02 3 6.5V19c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V6.5c0-.48-.17-.93-.46-1.27zM6.24 5h11.52l.83 1H5.42l.82-1zM5 19V8h14v11H5zm11-5.5l-4 4-4-4 1.41-1.41L11 13.67V10h2v3.67l1.59-1.59L16 13.5z"></path></svg>
        <div class="col" href="#" >Arsipkan</div>
        </div>  
          </div>
        <a class="btn" style="background-color : " >
        <div class="row " style="padding: 16px; border-radius: 5px 50px 50px 5px; ">
        <svg class="col-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="gb_jc"><path d="M15 4V3H9v1H4v2h1v13c0 1.1.9 2 2 2h10c1.1 0 2-.9 2-2V6h1V4h-5zm2 15H7V6h10v13z"></path><path d="M9 8h2v9H9zm4 0h2v9h-2z"></path></svg>
        <div class="col" href="#" >Sampah</div>
        </div>
          </a>
          
      </div>
    </div>
    <!-- /#sidebar-wrapper -->
             

     <div class="container-fluid" style="height: 80px; margin-top: 30px;">
        <div style="margin: auto; width: 562px; height: 42px;">
          <div class="d-flex" style="padding: 5px; padding-left: 10px; padding-right: 10px; box-shadow: 1px 1px 10px #888888; border-radius: 10px;">
            <input style="border: none; outline: none; width: 100%;" type="text" placeholder="Buat Catatan...">
            <div class="p-2">
              <img class="btn-hover" src="https://img.icons8.com/small/24/000000/checked-checkbox.png" data-toggle="tooltip" data-placement="bottom" title="Daftar baru" style="opacity: 0.5;">
            </div>
            <div class="p-2">
              <img class="btn-hover" src="https://img.icons8.com/material-rounded/24/000000/illustrator.png" data-toggle="tooltip" data-placement="bottom" title="Catatan baru dengan gambar" style="opacity: 0.5;">  
            </div>
            <div class="p-2">
            </div>
          </div>
         </div>
    </div>

    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Bootstrap core JavaScript -->
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
      $(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip(); 
});
  </script>

</body>

</html>
