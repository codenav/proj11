<?php if ($this->session->flashdata('success_msg')) { ?>
      <div id="snackbar"> <?php echo $this->session->flashdata('success_msg') ?> </div>
  <?php } ?>
<main>
  <div class="title">
    <span><?php echo $title; ?></span>
      <div class="col s12 bred">
        <a href="#!" class="breadcrumb">Input Hasil Pengawasan Klinik</a>
        <a href="#!" class="breadcrumb">Pilih Klinik</a>
      </div>
  </div>
  <nav class="blue">
    <div class="nav-wrapper ">
      <form>
        <div class="input-field">
          <input id="searchbox" type="search" required>
          <label for="searchbox" class="active"><i class="material-icons">search</i></label>
          <i class="material-icons">close</i>
        </div>
      </form>
    </div>
  </nav>

  <div class="content ">
    <div class="card-panel white lighten-2">
    <table class="highlight striped" id="example">
      <thead>
        <tr>
          <th>Nama Klinik</th>
          <th>Alamat</th>
          <th>RT</th>
          <th>RW</th>
          <th>Kelurahan</th>
          <th>Kecamatan</th>
          <th>Penanggung Jawab</th>
          <th>Control</th>
        </tr>
      </thead>
      <tbody>
      <?php

        if ($penelitian > 0 ) {

        foreach ($penelitian as $news_item) { ?>
        <tr>
          <td><?php echo tgl_indo($news_item->waktu_pembuatan); ?></td>
          <td><?php echo $news_item->nama; ?></td>
          <td><?php echo $news_item->institusi; ?></td>
          <td><?php echo tgl_indo($news_item->waktu_mulai); ?></td>
          <td><?php echo tgl_indo($news_item->waktu_selesai); ?></td>
          <td><?php echo tgl_indo($news_item->waktu_selesai); ?></td>
          <td><?php echo tgl_indo($news_item->waktu_selesai); ?></td>
          <td>
            <a class="waves-effect waves-light btn green lighten-1 pad" target="_blank" href="<?php echo site_url('penelitian/cetak/'.$news_item->id_penelitian); ?>">
              <i class="material-icons">print</i>
            </a>
            <a class="waves-effect waves-light btn blue lighten-1 pad" href="<?php echo site_url('penelitian/update/'.$news_item->id_penelitian); ?>">
              <i class="material-icons">update</i>
            </a>
            <a href="#modal<?php echo $news_item->id_penelitian ?>" class="btn red lighten-2 modal-trigger waves-effect waves-light pad">
              <i class="material-icons">delete</i>
            </a>
          </td>
        </tr>

        <div id="modal<?php echo $news_item->id_penelitian ?>" class="delete modal">
          <div class="modal-content">
            <h6>anda yakin ingin menghapus data ini ?</h6>
          </div>
          <div class="modal-footer">
            <a href="#!" class=" modal-action modal-close waves-effect waves-red btn-flat" >Tidak</a>
            <a href="<?php echo site_url('pkl/delete/'.$news_item->id_penelitian); ?>" class=" modal-action waves-effect waves-green btn-flat">Iya</a>
          </div>
        </div>

          <?php } } ?>
        </tbody>
    </table>
  </div>
  </div>


</main>
