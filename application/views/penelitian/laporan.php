<?php
  $attributes = array('target' => '_blank','onsubmit' => "return validate();");
echo form_open('penelitian/laporan',$attributes); ?>
<main>
  <div class="title">
    <span><?php echo $title; ?></span>
      <div class="col s12 bred">
        <a href="#!" class="breadcrumb">Pengajuan Izin Penelitian</a>
        <a href="#!" class="breadcrumb">Cetak Laporan</a>
      </div>
  </div>
  <div class="content">
    <div class="row">
      <div class="col s6">
        <div class="card-panel cus-tambah white lighten-2">
          <p class="sub-tit teal lighten-2">Bulan :</p>
          <div class="content">
            <div class="row">
              <div class="input-field col s6">
                <select name="b1" id="val1">
                  <option value="" disabled selected>Pilih Bulan</option>
                  <option value="01">Januari</option>
                  <option value="02">Februari</option>
                  <option value="03">Maret</option>
                  <option value="04">April</option>
                  <option value="05">Mei</option>
                  <option value="06">Juni</option>
                  <option value="07">Juli</option>
                  <option value="08">Agustus</option>
                  <option value="09">September</option>
                  <option value="10">Oktober</option>
                  <option value="11">November</option>
                  <option value="12">Desermber</option>
                </select>
                <label>Dari Bulan :</label>
              </div>
              <div class="input-field col s6">
                <select name="b2" id="val2">
                  <option value="" disabled selected>Pilih Bulan</option>
                  <option value="01">Januari</option>
                  <option value="02">Februari</option>
                  <option value="03">Maret</option>
                  <option value="04">April</option>
                  <option value="05">Mei</option>
                  <option value="06">Juni</option>
                  <option value="07">Juli</option>
                  <option value="08">Agustus</option>
                  <option value="09">September</option>
                  <option value="10">Oktober</option>
                  <option value="11">November</option>
                  <option value="12">Desermber</option>
                </select>
                <label>Sampai Bulan :</label>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col s6">
        <div class="card-panel cus-tambah white lighten-2">
          <p class="sub-tit teal lighten-2">Tahun :</p>
          <div class="content">
            <div class="row">
              <div class="input-field col s6">
                <select name="t1" id="val3">
                  <option value="" disabled selected>Pilih Tahun</option>
                  <?php for ($i=2013; $i <=date('Y'); $i++) {
                    echo "<option value='$i'>$i</option>";
                  }
                  ?>
                </select>
                <label>Dari Tahun :</label>
              </div>
              <div class="input-field col s6">
                <select name="t2" id="val4">
                  <option value="" disabled selected>Pilih Tahun</option>
                  <?php for ($i=2013; $i <=date('Y'); $i++) {
                    echo "<option value='$i'>$i</option>";
                  }
                  ?>
                </select>
                <label>Sampai Tahun :</label>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="input-field col s12">
        <button class="btn waves-effect waves-light red lighten-2 btn-large" type="submit" name="action">Cetak
          <i class="material-icons right">send</i>
        </button>
      </div>
    </div>
  </div>
</main>
<?php echo form_close();?>
