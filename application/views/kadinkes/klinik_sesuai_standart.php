<?php if ($this->session->flashdata('success_msg')) { ?>
      <div id="snackbar"> <?php echo $this->session->flashdata('success_msg') ?> </div>
  <?php } ?>
<main>
  <div class="title">
    <span><?php echo $title; ?></span>
      <div class="col s12 bred">
        <a href="#!" class="breadcrumb">Kadinkes</a>
        <a href="#!" class="breadcrumb">Lihat Data Klinik Sesuai Standart</a>
      </div>
  </div>
  <nav class="teal">
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
  <div class="content">
    <div class="card-panel white lighten-2">

    <table class="highlight striped" id="example">
      <thead>
        <tr>
          <th>No</th>
          <th>No Surat Izin</th>
          <th>Tanggal Mulai Izin</th>
          <th>Nama Klinik</th>
          <th>Alamat</th>
          <th>Kecamatan</th>
          <th>Download</th>
        </tr>
      </thead>
      <tbody>

        <?php
        $i=1;
        if ($admin > 0 ) {

        foreach ($admin as $news_item) { ?>
        <tr>
          <!-- atribut di table database -->
          <td align="center"><?php echo $i; ?></td>
          <td><?php echo $news_item->no_surat_izin; ?></td>
          <td><?php echo tgl_indo($news_item->tgl_mulai_izin); ?></td>
          <td><?php echo $news_item->nama; ?></td>
          <td><?php echo $news_item->alamat; ?></td>
          <td><?php echo $news_item->kecamatan; ?></td>
          <td>
            <a href="<?php echo $news_item->no_surat_izin ?>" class="btn blue lighten-2 modal-trigger waves-effect waves-light pad">
              <i class="material-icons">view_module</i>
            </a>
          </td>
        </tr>
        <div id="modal<?php echo $news_item->no_surat_izin ?>" class="modal">
        </div>

          <?php $i++;} } ?>
        </tbody>
    </table>
  </div>
  </div>


</main>
