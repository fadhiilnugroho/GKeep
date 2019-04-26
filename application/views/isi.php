
      <div style="margin: auto; width: 562px; margin-top: 50px;">
        <!-- <textarea placeholder="Buat Catatan..." style="outline: none; width: 100%; height: 120px; border-radius: 10px;"></textarea>-->
         <?php foreach ($data as $catatan) : ?>
        <div class="media" style="margin-top: 50px">
            <div class="media-body" style="border: solid 1px #dcdcdc; border-radius: 10px; padding: 15px;">
              <h6 class="media-heading"  data-toggle="modal" data-target="#ModalCatatan<?php echo $catatan->id_catatan ?>" ><?php echo $catatan->judul ?></h6>
              <p  data-toggle="modal" data-target="#ModalCatatan<?php echo $catatan->id_catatan ?>" ><?php echo $catatan->isi ?></p>
               <ul class="nav nav-pills nav-pills-custom" style="align-items: left;">
                <li><i class="material-icons btn-hover" data-toggle="tooltip" data-placement="bottom" title="Ingatkan saya" style="opacity: 0.7; font-size: 15px; margin-right: 25px;">add_alert</i></li>

                <a  href="<?php echo base_url('C_signin/arsipCatatan/'.$catatan->id_catatan); ?>"> <img class="btn-hover" src="https://img.icons8.com/material/24/000000/filing-cabinet.png" data-toggle="tooltip" data-placement="bottom" title="Arsipkan" style="opacity: 0.7; height: 15px; width: 15px; margin-right: 25px;"></a>

                <a  href="<?php echo base_url('C_signin/batalArsipCatatan/'.$catatan->id_catatan); ?>"><img class="btn-hover" src="https://img.icons8.com/material-rounded/50/000000/upload.png" data-toggle="tooltip" data-placement="bottom" title="Batalkan arsipkan" style="opacity: 0.7; height: 15px; width: 15px; margin-right: 25px;"></a>

                <a href="<?php echo base_url('C_signin/pulihkanCatatan/'.$catatan->id_catatan); ?>"><img class="btn-hover" src="https://img.icons8.com/ios/24/000000/return.png" data-toggle="tooltip" data-placement="bottom" title="Pulihkan" style="opacity: 0.7; height: 15px; width: 15px; margin-right: 25px;"></a>

                <a href="<?php echo base_url('C_signin/hapusCatatan/'.$catatan->id_catatan); ?>"><img class="btn-hover" src="https://img.icons8.com/metro/26/000000/trash.png" data-toggle="tooltip" data-placement="bottom" title="Hapus" style="opacity: 0.7; height: 15px; width: 15px; margin-right: 25px;"></a>
                 <!--<i class="material-icons">add_alert</i>-->
              </ul>
            </div>
          </div>
           <?php endforeach?>
      </div>
   
    
        <!-- Modal -->
     <?php foreach ($data as $catatan) : ?>
      <form action="<?php echo base_url('C_signin/ubahCatatan/'.$catatan->id_catatan); ?>" method="post" class="modal fade" id="ModalCatatan<?php echo $catatan->id_catatan ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content" style="border-radius: 7px;">
            <div class="modal-body">
              <textarea style="width: 100%; outline: none; border: none; font-size: 130%;" name="judul_modal" class="" placeholder=""><?php echo $catatan->judul ?></textarea>
              <textarea style="width: 100%; outline: none; border: none;" name="isi_modal" class="lead"><?php echo $catatan->isi?></textarea>
                <div class="row">
                    
                </div>
            </div>
            <div class="modal-footer" style="border: none;">
              <ul class="nav nav-pills nav-pills-custom" style="align-items: left;">
                <li><i class="material-icons btn-hover" data-toggle="tooltip" data-placement="bottom" title="Ingatkan saya" style="opacity: 0.7; font-size: 15px; margin-right: 25px;">add_alert</i></li>

                <a><img class="btn-hover" src="https://img.icons8.com/small/24/000000/checked-checkbox.png" data-toggle="tooltip" data-placement="bottom" title="Kolaborator" style="opacity: 0.7; height: 15px; width: 15px; margin-right: 25px;"></a>

                <a><img class="btn-hover" src="https://img.icons8.com/small/24/000000/checked-checkbox.png" data-toggle="tooltip" data-placement="bottom" title="Pilih Warna" style="opacity: 0.7; height: 15px; width: 15px; margin-right: 25px;"></a>

                <a><i class="material-icons btn-hover" data-toggle="tooltip" data-placement="bottom" title="Tambahkan gambar" style="opacity: 0.7; font-size: 15px; margin-right: 25px;">insert_photo</i></a>

                <a  href="<?php echo base_url('C_signin/arsipCatatan/'.$catatan->id_catatan); ?>"> <img class="btn-hover" src="https://img.icons8.com/material/24/000000/filing-cabinet.png" data-toggle="tooltip" data-placement="bottom" title="Arsipkan" style="opacity: 0.7; height: 15px; width: 15px; margin-right: 25px;"></a>

                <a  href="<?php echo base_url('C_signin/batalArsipCatatan/'.$catatan->id_catatan); ?>"><img class="btn-hover" src="https://img.icons8.com/material-rounded/50/000000/upload.png" data-toggle="tooltip" data-placement="bottom" title="Batalkan arsipkan" style="opacity: 0.7; height: 15px; width: 15px; margin-right: 25px;"></a>

                <a href="<?php echo base_url('C_signin/pulihkanCatatan/'.$catatan->id_catatan); ?>"><img class="btn-hover" src="https://img.icons8.com/ios/24/000000/return.png" data-toggle="tooltip" data-placement="bottom" title="Pulihkan" style="opacity: 0.7; height: 15px; width: 15px; margin-right: 25px;"></a>

                <a href="<?php echo base_url('C_signin/hapusCatatan/'.$catatan->id_catatan); ?>"><img class="btn-hover" src="https://img.icons8.com/metro/26/000000/trash.png" data-toggle="tooltip" data-placement="bottom" title="Hapus" style="opacity: 0.7; height: 15px; width: 15px; margin-right: 25px;"></a>
                 <!--<i class="material-icons">add_alert</i>-->
              </ul>
              <button type="submit" id="btn-close" class="btn btn-deafult">Tutup</button>
            </div>
          </div>
        </div>
    </form>
 <?php endforeach?>

    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->