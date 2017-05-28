<?php if ($this->session->flashdata('success_msg')) { ?>
      <div id="snackbar"> <?php echo $this->session->flashdata('success_msg') ?> </div>
  <?php } ?>
<main>
  <div class="title">
    <span><?php echo $title; ?></span>
      <div class="col s12 bred">
        <a href="#!" class="breadcrumb">Input Hasil Pengawasan Klinik</a>
        <a href="#!" class="breadcrumb">Pilih Klinik</a>
        <a href="#!" class="breadcrumb">Kelompok Sanitasi</a>
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
      <div class="row">
        <div class="col m6">
          <table>
            <tr>
              <td>Klinik</td>
              <td>: Kiara</td>
            </tr>
            <tr>
              <td>No. Klinik</td>
              <td>: </td>
            </tr>
            <tr>
              <td>Wilayah Kerja Puskesmas</td>
              <td>: UPT Babakansari </td>
            </tr>
            <tr>
              <td>Alamat</td>
              <td>: Jl.Ridma No.77</td>
            </tr>
            <tr>
              <td>Keluarahan</td>
              <td>: </td>
            </tr>
            <tr>
              <td>Kecamatan</td>
              <td>: </td>
            </tr>
            <tr>
              <td>Penanggung Jawab</td>
              <td>: </td>
            </tr>
            <tr>
              <td>No. Klinik</td>
              <td>: </td>
            </tr>

          </table>
        </div>
        <div class="col m6">
          Tanggal Pemeriksaan : 1 April 2017
        </div>
      </div>
      <div class="row">
        <div class="col m4">
          Instalasi Listrik
        </div>
        <div class="col m6">
          <select class="browser-default">
             <option value="" disabled selected>Hasil Pengawasan</option>
             <option value="1">Ya</option>
             <option value="2">Tidak</option>
         </select>
        </div>
      </div>
      <div class="row">
        <div class="col m4">
          Pencegahan Penanggulangan Kebakaran
        </div>
        <div class="col m6">
          <select class="browser-default">
             <option value="" disabled selected>Hasil Pengawasan</option>
             <option value="1">Ya</option>
             <option value="2">Tidak</option>
         </select>
        </div>
      </div>
      <div class="row">
        <div class="col m4">
          Sarana Gas Medis
        </div>
        <div class="col m6">
          <select class="browser-default">
             <option value="" disabled selected>Hasil Pengawasan</option>
             <option value="1">Ya</option>
             <option value="2">Tidak</option>
         </select>
        </div>
      </div>
      <div class="row">
        <div class="col m4">
          Sarana Tata Udara
        </div>
        <div class="col m6">
          <select class="browser-default">
             <option value="" disabled selected>Hasil Pengawasan</option>
             <option value="1">Ya</option>
             <option value="2">Tidak</option>
         </select>
        </div>
      </div>
      <div class="row">
        <div class="col m4">
          Sarana Pencahayaan
        </div>
        <div class="col m6">
          <select class="browser-default">
             <option value="" disabled selected>Hasil Pengawasan</option>
             <option value="1">Ya</option>
             <option value="2">Tidak</option>
         </select>
        </div>
      </div>
      <div class="row">
        <div class="col m4">
          Sarana Air Bersih
        </div>
        <div class="col m6">
          <select class="browser-default">
             <option value="" disabled selected>Hasil Pengawasan</option>
             <option value="1">Ya</option>
             <option value="2">Tidak</option>
         </select>
        </div>
      </div>
      <div class="row">
        <div class="col m4">
          Ambulan
        </div>
        <div class="col m6">
          <select class="browser-default">
             <option value="" disabled selected>Hasil Pengawasan</option>
             <option value="1">Ya</option>
             <option value="2">Tidak</option>
         </select>
        </div>
      </div>
      <div class="row">
        <div class="col m4">
          Jumlah TT
        </div>
        <div class="col m6">
          <select class="browser-default">
             <option value="" disabled selected>Hasil Pengawasan</option>
             <option value="1">Ya</option>
             <option value="2">Tidak</option>
         </select>
        </div>
      </div>



    </div>
  </div>


</main>
