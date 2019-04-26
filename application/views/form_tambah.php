<div class="container-fluid" style="height: 80px; margin-top: 30px;">
        <div style="margin: auto; width: 562px; height: 42px;" data-toggle="modal" data-target="#ModalInsert" >
          <div class="d-flex" style="padding: 5px; padding-left: 10px; padding-right: 10px; box-shadow: 1px 1px 10px #888888; border-radius: 10px;">
            <input style="border: none; outline: none; width: 100%;" type="text" id="txt" placeholder="Buat Catatan...">
            <div class="p-2">
              <img class="btn-hover" src="https://img.icons8.com/small/24/000000/checked-checkbox.png" data-toggle="tooltip" data-placement="bottom" title="Daftar baru" style="opacity: 0.5;">
            </div>
            <div class="p-2">
              <img class="btn-hover" src="https://img.icons8.com/material-rounded/24/000000/illustrator.png" data-toggle="tooltip" data-placement="bottom" title="Catatan baru dengan gambar" style="opacity: 0.5;">  
            </div>
            <div class="p-2">
              <img class="btn-hover" src="https://img.icons8.com/material-outlined/24/000000/picture.png" data-toggle="tooltip" data-placement="bottom" title="Catatan baru dengan gambar" style="opacity: 0.5;">
            </div>
          </div>
        </div>
    
    <!-- Modal insert -->
    
    <form action="<?php echo base_url('C_signin/tambahCatatan')?>" class="modal fade" method="post" id="ModalInsert" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content" style="border-radius: 7px;">
            <div class="modal-body">
              <textarea style="width: 100%; outline: none; border: none; font-size: 130%;;" placeholder="Judul" name="judul"></textarea>
              <textarea style="width: 100%; outline: none; border: none;" placeholder="Catatan" name="isi"></textarea>
                <div class="row">
                
                </div>
            </div>
            <div class="modal-footer" style="border: none;">
              <ul class="nav nav-pills nav-pills-custom" style="align-items: left;">
                <li><i class="material-icons btn-hover" data-toggle="tooltip" data-placement="bottom" title="Ingatkan saya" style="opacity: 0.7; font-size: 15px; margin-right: 25px;">add_alert</i></li>

                <li><img class="btn-hover" src="https://img.icons8.com/small/24/000000/checked-checkbox.png" data-toggle="tooltip" data-placement="bottom" title="Kolaborator" style="opacity: 0.7; height: 15px; width: 15px; margin-right: 25px;"></li>

                <li><img class="btn-hover" src="https://img.icons8.com/small/24/000000/checked-checkbox.png" data-toggle="tooltip" data-placement="bottom" title="Pilih Warna" style="opacity: 0.7; height: 15px; width: 15px; margin-right: 25px;"></li>

                <li><i class="material-icons btn-hover" data-toggle="tooltip" data-placement="bottom" title="Tambahkan gambar" style="opacity: 0.7; font-size: 15px; margin-right: 25px;">insert_photo</i></li>

                <li> 
                    
                    <img class="btn-hover" src="https://img.icons8.com/material/24/000000/filing-cabinet.png" data-toggle="tooltip" data-placement="bottom" title="Arsipin" style="opacity: 0.7; height: 15px; width: 15px; margin-right: 25px;"></li>

                <li><img class="btn-hover" src="https://img.icons8.com/small/24/000000/checked-checkbox.png" data-toggle="tooltip" data-placement="bottom" title="Lainnya" style="opacity: 0.7; height: 15px; width: 15px; margin-right: 25px;"></li>

                <li><img class="btn-hover" src="https://img.icons8.com/small/24/000000/checked-checkbox.png" data-toggle="tooltip" data-placement="bottom" title="Urungkan" style="opacity: 0.7; height: 15px; width: 15px; margin-right: 25px;"></li>

                <li><img class="btn-hover" src="https://img.icons8.com/small/24/000000/checked-checkbox.png" data-toggle="tooltip" data-placement="bottom" title="Ulangi" style="opacity: 0.7; height: 15px; width: 15px; margin-right: 25px;"></li>
                 <!--<i class="material-icons">add_alert</i>-->
              </ul>
              <button type="submit" id="btn-close" class="btn btn-deafult">Tutup</button>
            </div>
          </div>
        </div>
      </form>