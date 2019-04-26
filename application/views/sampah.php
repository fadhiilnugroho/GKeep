<div class="container-fluid" style="height: 80px; margin-top: 30px;">
        <div style="margin: auto; width: 662px; height: 42px;" data-toggle="modal" data-target="#ModalSampah" >
            <a class="font-italic"> Catatan yang ada pada sampah akan dihapus dalam 7 hari</a>
            <a data-toggle="modal" data-target="#ModalSampah" class="btn text-primary font-weight-bold"> Kosongkan Sampah</a>
        
        </div>
    
    <div class="modal fade" method="post" id="ModalSampah" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content" style="border-radius: 7px;">
            <div style="padding:24px" >Kosongkan sampah? Semua catatan dalam Sampah akan dihapus secara permanen.</div>
              <div class="row" style="padding: 24px">
                <a href="<?php echo base_url('C_signin/LoadSampah')?>" class="btn" style="margin-left: 200px"> Batal</a>
                  <a href="<?php echo base_url('C_signin/kosongkanSampah')?>" class="btn text-primary font-weight-bold"> Kosongkan Sampah</a>
              </div>
          </div>
        </div>
    </div>