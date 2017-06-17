<?php if ($this->session->flashdata('success_msg')) { ?>
      <div id="snackbar"> <?php echo $this->session->flashdata('success_msg') ?> </div>
  <?php } ?>
<main>
  <div class="title">
    <span><?php echo $title; ?></span>
      <div class="col s12 bred">
        <a href="#!" class="breadcrumb">Kadinkes</a>
        <a href="#!" class="breadcrumb">Lihat Data Klinik Tervalidasi</a>
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

  <div class="content ">
    <div class="card-panel white lighten-2">

    <table class="highlight striped" id="example">
      <thead>
        <tr>
          <th>No</th>
          <th>Klinik</th>
          <th>Alamat</th>
          <th>Kelurahan</th>
          <th>RT</th>
          <th>RW</th>
          <th>Telp</th>
          <th>Penggangung Jawab</th>
          <th>Aksi</th>
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
          <td><?php echo $news_item->nama; ?></td>
          <td><?php echo $news_item->alamat; ?></td>
          <td><?php echo $news_item->kelurahan; ?></td>
          <td><?php echo $news_item->rt; ?></td>
          <td><?php echo $news_item->rw; ?></td>
          <td><?php echo $news_item->telp; ?></td>
          <td><?php echo $news_item->penanggun_jawab; ?></td>
            <td><a href="<?php echo site_url('puskesmas/lokasi_excel'); ?>" class="btn blue lighten-2 modal-trigger waves-effect waves-light pad">
              <i class="material-icons">view_module</i>
            </a>
          </td>
          </td>
        </tr>
          <?php $i++;} } ?>
        </tbody>
    </table>
  </div>
  </div>


</main>
