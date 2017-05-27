<?php if ($this->session->flashdata('success_msg')) { ?>
      <div id="snackbar"> <?php echo $this->session->flashdata('success_msg') ?> </div>
  <?php } ?>
<main>

  <div class="title">
    <span><?php echo $title; ?></span>
      <div class="col s12 bred">
        <a href="#!" class="breadcrumb">Pengaturan</a>
      </div>
  </div>


  <div class="content">
    <div class="row">
      <!-- <div class="col l6">
        <ul class="collapsible" data-collapsible="accordion">
         <li>
           <div class="collapsible-header jab">
             <div class="collection">
               <a href="#!" class="collection-item active teal lighten-2">Sekertaris Dinas Kesehatan Kota Bandung<span class="badge"></span></a>
               <a href="#!" class="collection-item">Nama Lengkap<span class="badge">NIP</span></a>
               <?php foreach ($pejabat as $pe) { ?>
                 <a href="#!" class="collection-item"><?php echo $pe['nama_pejabat']; ?><span class="badge">  <?php echo $pe['nip']; ?></span></a>
               <?php } ?>
             </div>
           </div>
           <div class="collapsible-body">
            <div class="main-seker">
              <?php echo form_open('penelitian/edit_sekertaris'); ?>
              <div class="row">
                <?php foreach ($pejabat as $pe) { ?>
                <div class="input-field col s12">
                  <input id="val2" type="text" name="nama_pejabat" value="<?php echo $pe['nama_pejabat']; ?>">
                  <label>Nama Lengkap</label>
                </div>
                <div class="input-field col s12">
                  <input id="val2" type="text" name="golongan" value="<?php echo $pe['golongan']; ?>">
                  <label>Golongan</label>
                </div>
                <div class="input-field col s12">
                  <input id="val2" type="text" name="nip" value="<?php echo $pe['nip']; ?>">
                  <label>NIP</label>
                </div>
                <?php } ?>
                <div class="col s12">
                  <button class="btn waves-effect waves-light" type="submit" name="action">Ubah
                    <i class="material-icons right">send</i>
                  </button>
                </div>
              </div>
              <?php echo form_close();?>
            </div>
           </div>
         </li>
       </ul>
      </div> -->

      <div class="col l12">

          <div class="collection">
            <a href="#!" class="collection-item active teal lighten-2 ">Pengaturan Bagian<span class="badge"></span>
            </a>
            <table class="bordered highlight white">
             <thead>
               <tr>
                 <th>
                   <a class="waves-effect waves-light btn green lighten-1" href="<?php echo site_url('penelitian/tambah_bagian')?>">
                     Tambah
                    </a>
                </th>
                 <th></th>
                 <th></th>
               </tr>
               <tr>
                 <th>Bagian</th>
                 <th>Dikepalai oleh</th>
                 <th>Control</th>
               </tr>
             </thead>
             <tbody>
                <?php foreach ($pejabat_all as $pe_all) { ?>
                 <tr>
                   <td><?php echo $pe_all['jabatan']; ?></td>
                   <td><?php echo $pe_all['nama_pejabat']; ?></td>
                   <td>
                     <a class="waves-effect waves-light btn blue lighten-1 pad" href="<?php echo site_url('penelitian/edit_bagian/'.$pe_all['id_pejabat']); ?>">
                       <i class="material-icons">update</i>
                     </a>
                     <?php if ($pe_all['id_pejabat']=='P01'){ ?>
                     <a href="#modal<?php echo $pe_all['id_pejabat'] ?>" class="btn red lighten-2 modal-trigger waves-effect waves-light pad disabled">
                       <i class="material-icons">delete</i>
                     </a>
                     <?php }else{ ?>
                       <a href="#modal<?php echo $pe_all['id_pejabat'] ?>" class="btn red lighten-2 modal-trigger waves-effect waves-light pad">
                         <i class="material-icons">delete</i>
                       </a>
                       <?php } ?>
                   </td>
                  </tr>

                  <div id="modal<?php echo $pe_all['id_pejabat'] ?>" class="delete modal">
                    <div class="modal-content">
                      <h6>anda yakin ingin menghapus data ini ?</h6>
                    </div>
                    <div class="modal-footer">
                      <a href="#!" class=" modal-action modal-close waves-effect waves-red btn-flat" >Tidak</a>
                      <a href="<?php echo site_url('penelitian/delete_bagian/'.$pe_all['id_pejabat']); ?>" class=" modal-action waves-effect waves-green btn-flat">Ya</a>
                    </div>
                  </div>

                <?php } ?>
             </tbody>
           </table>
          </div>

      </div>

    </div>
  </div>


</main>
