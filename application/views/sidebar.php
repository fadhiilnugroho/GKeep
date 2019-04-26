<div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div style="background-color: white; width: 428px" id="sidebar-wrapper">
      <div class="list-group">
        <a href="<?php echo base_url('C_signin/LoadCatatan') ?>" class="btn" style="background-color :<?php echo $this->session->flashdata('catatan')?>"  >  
        <div class="row" style="padding: 16px; border-radius: 5px 50px 50px 5px; ">
        <svg class="col-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="gb_jc"><path d="M9 21c0 .55.45 1 1 1h4c.55 0 1-.45 1-1v-1H9v1zm3-19C8.14 2 5 5.14 5 9c0 2.38 1.19 4.47 3 5.74V17c0 .55.45 1 1 1h6c.55 0 1-.45 1-1v-2.26c1.81-1.27 3-3.36 3-5.74 0-3.86-3.14-7-7-7zm2.85 11.1l-.85.6V16h-4v-2.3l-.85-.6A4.997 4.997 0 0 1 7 9c0-2.76 2.24-5 5-5s5 2.24 5 5c0 1.63-.8 3.16-2.15 4.1z"></path></svg>
        <div class="col-8 text-rigth" href="#">Catatan</div>
        </div>  
        </a>
        <a href="<?php echo base_url('C_signin/LoadPengingat') ?>" class="btn" style="background-color :<?php echo $this->session->flashdata('pengingat')?>" >   
        <div class="row " style="padding: 16px;border-radius: 5px 50px 50px 5px;">
        <svg class="col-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="gb_jc"><path d="M18 17v-6c0-3.07-1.63-5.64-4.5-6.32V4c0-.83-.67-1.5-1.5-1.5s-1.5.67-1.5 1.5v.68C7.64 5.36 6 7.92 6 11v6H4v2h16v-2h-2zm-2 0H8v-6c0-2.48 1.51-4.5 4-4.5s4 2.02 4 4.5v6zm-4 5c1.1 0 2-.9 2-2h-4c0 1.1.9 2 2 2z"></path></svg>
        <div class="col" href="#">Pengingat</div>
        </div>  
          </a>
        <div class="dropdown-divider"></div>
        <div class="row text-muted" style="margin-left: 24px"> Label </div>
          
          <?php foreach ($data as $l) : ?>
        <a href="<?php echo base_url('C_Signin/LoadCatatanByLabel/'.$l->id_label); ?>" style="background-color :<?php echo $this->session->flashdata($l->id_label)?>" class="btn" >  
        <div class="row " style="padding: 16px; border-radius: 5px 50px 50px 5px; ">
        <svg class="col-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="gb_jc"><path d="M17.63 5.84C17.27 5.33 16.67 5 16 5L5 5.01C3.9 5.01 3 5.9 3 7v10c0 1.1.9 1.99 2 1.99L16 19c.67 0 1.27-.33 1.63-.84L22 12l-4.37-6.16zM16 17H5V7h11l3.55 5L16 17z"></path></svg>
        <div class="col" href="#" ><?php echo $l->nama?></div>
        </div>  
          </a>
         <?php endforeach ?>
          
        <a class="btn" data-toggle="modal" data-target="#labelModal"> 
        <div class="row " style="padding: 16px">
        <svg class="col-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="gb_jc"><path d="M20.41 4.94l-1.35-1.35c-.78-.78-2.05-.78-2.83 0L13.4 6.41 3 16.82V21h4.18l10.46-10.46 2.77-2.77c.79-.78.79-2.05 0-2.83zm-14 14.12L5 19v-1.36l9.82-9.82 1.41 1.41-9.82 9.83z"></path></svg>
        <div class="col" href="#"> Edit Label</div>
        </div>  
          </a>
        <div class="dropdown-divider"></div>

          
        <a href="<?php echo base_url('C_signin/LoadArsip') ?>" class="btn" style="background-color :<?php echo $this->session->flashdata('arsip')?>" > 
        <div class="row " style="padding: 16px; border-radius: 5px 50px 50px 5px; ">
        <svg class="col-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="gb_jc"><path d="M20.54 5.23l-1.39-1.68C18.88 3.21 18.47 3 18 3H6c-.47 0-.88.21-1.16.55L3.46 5.23C3.17 5.57 3 6.02 3 6.5V19c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V6.5c0-.48-.17-.93-.46-1.27zM6.24 5h11.52l.83 1H5.42l.82-1zM5 19V8h14v11H5zm11-5.5l-4 4-4-4 1.41-1.41L11 13.67V10h2v3.67l1.59-1.59L16 13.5z"></path></svg>
        <div class="col" href="#" >Arsipkan</div>
        </div>  
          </a>
        <a href="<?php echo base_url('C_signin/LoadSampah') ?>" class="btn" style="background-color :<?php echo $this->session->flashdata('sampah')?>" >
        <div class="row " style="padding: 16px; border-radius: 5px 50px 50px 5px; ">
        <svg class="col-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="gb_jc"><path d="M15 4V3H9v1H4v2h1v13c0 1.1.9 2 2 2h10c1.1 0 2-.9 2-2V6h1V4h-5zm2 15H7V6h10v13z"></path><path d="M9 8h2v9H9zm4 0h2v9h-2z"></path></svg>
        <div class="col" href="#" >Sampah</div>
        </div>
          </a>
          
      </div>
        
         <!-- The Modal -->
  <div class="modal fade" id="labelModal" style="position:auto " >
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h5 class="modal-title">Edit label</h5>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
        <form  action="<?php echo base_url('C_signin/addLabel') ?>" method="post">
            <div class="form-inline row">
                <a class="col-2"></a>
                <input style="border:none" name="label" class="form-control form-control-sm col8" type="text" placeholder="Buat label baru">
                <button type="submit"  class="btn col-2"> <img src="https://img.icons8.com/material-outlined/12/000000/checkmark.png"> </button>
                
            </div>  
          </form>
            <?php foreach ($data as $l) : ?>
            <form action="<?php echo base_url('C_signin/ubahLabel/'.$l->id_label); ?>" method="post" style="padding : 12px" class="row">
                <a class="col-2 btn " href="<?php echo base_url('C_signin/hapusLabel/'.$l->id_label); ?>"> <img src="https://img.icons8.com/metro/26/000000/trash.png" data-toggle="tooltip" data-placement="bottom" title="Hapus" style="opacity: 0.7; height: 15px; width: 15px; margin-right: 25px;"> </a>
                <input style="border:none" type="text" class="form-control col-8" name="label" class="col-8 text-muted" value="<?php echo $l->nama?>">           
                <button type="submit" class="col-2 btn"><img src="https://img.icons8.com/ios/26/000000/pencil-filled.png" data-toggle="tooltip" data-placement="bottom" title="Edit" style="opacity: 0.7; height: 15px; width: 15px; margin-right: 25px;"> </button>
            </form>
            <?php endforeach ?>
          </div>
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn " data-dismiss="modal">Selesai</button>
        </div>
    </div>
  </div>
</div>
</div>