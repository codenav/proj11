
<?php echo form_open('penelitian/proses_edit_bagian/'.$news_item['id_pejabat']); ?>
<main>
  <div class="title">
    <span><?php echo $title; ?></span>
      <div class="col s12 bred">
        <a href="#!" class="breadcrumb">Pengaturan</a>
        <a href="#!" class="breadcrumb">perbaharui bagian</a>
      </div>
  </div>
  <div class="content">
    <div class="row form">

      <!-- dengan ini menerangkan bahwa -->
      <div class="col s12">
        <div class="card-panel cus-tambah white lighten-2">
          <p class="sub-tit teal lighten-2">Keterangan :</p>
          <div class="content">
            <div class="row">
              <div class="input-field col s6">
                <label>Id :</label>
                <input type="text" name="id_pejabat" value="<?php echo $news_item['id_pejabat']; ?>">
              </div>
              <div class="input-field col s6">
                <label>Nama Bagian :</label>
                <input type="text" name="jabatan" value="<?php echo $news_item['jabatan']; ?>">
              </div>

              <div class="input-field col s6">
                <label>Dikepalai oleh :</label>
                <input type="text" name="nama_pejabat" value="<?php echo $news_item['nama_pejabat']; ?>">
              </div>
              <div class="input-field col s6">
                <label>NIP :</label>
                <input type="text" name="nip" value="<?php echo $news_item['nip']; ?>">
              </div>
              <div class="input-field col s6">
                <label>Golongan :</label>
                <input type="text" name="golongan" value="<?php echo $news_item['golongan']; ?>">
              </div>

            </div>
          </div>
        </div>
      </div>






        <div class="col s12">
          <a href="<?php echo site_url('penelitian/pengaturan'); ?>" class="btn red lighten-2 modal-trigger waves-effect waves-light pad">
            Kembali
          </a>
          <button class="btn waves-effect waves-light" type="submit" name="action">Simpan
            <i class="material-icons right">send</i>
          </button>
        </div>



    </div>
  </div>
</main>
<?php echo form_close();?>
