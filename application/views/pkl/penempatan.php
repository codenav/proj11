<?php if ($this->session->flashdata('success_msg')) { ?>
      <div id="snackbar"> <?php echo $this->session->flashdata('success_msg') ?> </div>
  <?php } ?>
<main>
  <div class="title">
    <span><?php echo $title; ?></span>
      <div class="col s12 bred">
        <a href="#!" class="breadcrumb">pengajuan Kerja Praktek</a>
        <a href="#!" class="breadcrumb">Penempatan</a>
      </div>
  </div>
  <nav class="teal">
    <div class="nav-wrapper ">
      <form>
        <div class="input-field">
          <input id="searchbox" type="search">
          <label for="searchbox" class="active"><i class="material-icons">search</i></label>
          <i class="material-icons">close</i>
        </div>
      </form>
    </div>
  </nav>
  <div class="content">
    <div class="card-panel white lighten-2">
      <div class="row">

          <!-- SUDAH -->
          <div class="col s12">
            <table class="highlight striped" id="example2">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th width="100px">Institusi</th>
                  <th>Ditempatkan Di</th>
                  <th>Pembimbing</th>
                  <th width="100px">Control</th>
                </tr>
              </thead>
              <tbody>
              <?php
                $i=1;
                if ($penempatan_sudah > 0 ) {

                foreach ($penempatan_sudah as $sudah) { ?>
                <tr>
                  <td align="center"><?php echo $i; ?></td>
                  <td><?php echo $sudah['nama']; ?></td>
                  <td><?php echo $sudah['institusi']; ?></td>
                  <td><?php echo $sudah['bagian']; ?></td>
                    <td><?php echo $sudah['nama_pejabat']; ?></td>
                  <td>
                    <a href="<?php echo site_url('pkl/edit_penempatan/'.$sudah['id_penelitian']); ?>" class="btn brown lighten-2 modal-trigger waves-effect waves-light pad">
                      Pindahkan
                    </a>
                  </td>
                </tr>

                <?php $i++;}} ?>
                </tbody>
            </table>

          </div>

        </div>

  </div>
  </div>



</main>
