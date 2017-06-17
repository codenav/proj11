<?php if (validation_errors()) { ?>
      <div id="snackbar"> <?php echo validation_errors(); ?> </div>
  <?php } ?>
<?php
$attributes = array('onsubmit' => "return validate();");
echo form_open('puskesmas/tambah_takberizin',$attributes);
?>
<main>
  <div class="title">
    <span><?php echo $title; ?></span>
      <div class="col s12 bred">
        <a href="#!" class="breadcrumb">Perizinan</a>
        <a href="#!" class="breadcrumb">Isi Data Dasar Klinik</a>
      </div>
  </div>
  <div class="content">
    <div class="row form">
      <div class="col s12">
        <div class="card-panel cus-tambah white lighten-2">
          <p class="sub-tit teal lighten-2">Isi Data Dasar Klinik </p>
          <div class="content">
            <div class="row">
              <div class="input-field col s6">
                <label>No Surat Izin :</label>
                <input id="val1" type="text" name="no_surat_izin" value="<?php echo set_value('no_surat_izin'); ?>">
              </div>
              <div class="input-field col s6">
                <label>Nama Klinik :</label>
                <input id="val1" type="text" name="nama" value="<?php echo set_value('nama'); ?>">
              </div>
              <!-- <div class="input-field col s6">
                <label class="active" for="dibuat">Tanggal Mulai Izin :</label>
                <input type="date" class="datepicker" id="dibuat" name="tgl_mulai_izin" value="<?php echo date("Y-m-d"); ?>">
              </div>
              <div class="input-field col s6">
                <select name="periode">
                  <option selected disabled>Pilih Periode</option>
                  <option value="1">I</option>
                  <option value="2">II</option>
                </select>
                <label>Periode :</label>
              </div> -->
              <!-- <div class="input-field col s6">
                <select name="status">
                  <option selected disabled>Pilih Perizinan</option>
                  <option value="tidak_berizin">Tidak Berizin</option>
                  <option value="berizin">Sudah Berizin</option>
                </select>
                <label>Status Perizinan :</label>
              </div> -->
              <div class="input-field col s12">
                <textarea name="alamat" id="val2" class="materialize-textarea"><?php echo set_value('alamat'); ?></textarea>
                <label for="val3">Alamat :</label>
              </div>
              <div class="input-field col s6">
                <label>RT :</label>
                <input id="val4" type="text" name="rt" value="<?php echo set_value('rt'); ?>">
              </div>
              <div class="input-field col s6">
                <label>RW :</label>
                <input id="val5" type="text" name="rw" value="<?php echo set_value('rw'); ?>">
              </div>
              <div class="input-field col s12">
                <label>No Telp :</label>
                <input id="val5" type="text" name="telp" value="<?php echo set_value('telp'); ?>">
              </div>
              <div class="input-field col s6">
                <p>Kecamatan :</p>
                <select name="kecamatan" class="browser-default" id="kecamatan">
                  <option disabled selected>Pilih Kecamatan</option>
                  <?php foreach($kecamatan as $kec){
                    echo '<option value="'.$kec->id_kec.'">'.$kec->nama.'</option>';
                  } ?>
                </select>
              </div>
            <div class="input-field col s6">
              <p>Desa :</p>
              <select name="kelurahan" class="browser-default" id="desa">
                <option disabled>Pilih Kelurahan</option>
              </select>
            </div>
            <div class="input-field col s12">
              <p>Puskesmas :</p>
              <select name="puskesmas" class="browser-default" id="puskesmas">
                <option disabled>Pilih Puskesmas</option>
              </select>
            </div>



              <div class="input-field col s6">
                <label>Penanggung Jawab :</label>
                <input id="val5" type="text" name="penanggun_jawab" value="<?php echo set_value('penanggun_jawab'); ?>">
              </div>
              <!-- <div class="input-field col s6">
                <select name="jenis_klinik">
                  <option selected disabled>Pilih Jenis Klinik</option>
                  <option value="pratama">Pratama</option>
                  <option value="utama">Utama</option>
                </select>
                <label>Jenis Klinik :</label>
              </div> -->
              <div class="input-field col s6">
                <select name="milik">
                  <option selected disabled>Pilih Kepemilikan</option>
                  <option value="pemda">PEMDA</option>
                  <option value="polri">POLRI</option>
                  <option value="perusahaan">PERUSAHAAN</option>
                  <option value="swasta">SWASTA</option>
                </select>
                <label>Kepemilikan :</label>
              </div>

              <div class="col s12">

                  <p class="sub-tit teal lighten-2">Jenis Layanan :</p>
                  <div class="content">
                    <div class="row">
                      <div class="row">
                        <div class="col s6">
                          <input type="checkbox" class="filled-in" id="teb1" name="hobi[]" value="0" />
                          <label for="teb1">Pelayanan Kesehatan Umum</label>
                        </div>
                        <div class="col s6">
                          <input type="checkbox" class="filled-in" id="teb2" name="hobi[]" value="1" />
                          <label for="teb2">Pelayanan KIA-KB</label>
                        </div>
                        <div class="col s6">
                          <input type="checkbox" class="filled-in" id="teb3" name="hobi[]" value="2" />
                          <label for="teb3">Pelayanan Kes.GIMUL</label>
                        </div>
                        <div class="col s6">
                          <input type="checkbox" class="filled-in" id="teb4" name="hobi[]" value="3"/>
                          <label for="teb4">Pelayanan GADAR</label>
                        </div>
                        <div class="col s6">
                          <input type="checkbox" class="filled-in" id="teb5" name="hobi[]" value="4"/>
                          <label for="teb5">Pelayanan Rawat Inap</label>
                        </div>
                        <div class="col s6">
                          <input type="checkbox" class="filled-in" id="teb6" name="hobi[]" value="5"/>
                          <label for="teb6">Pelayanan Farmasi</label>
                        </div>
                        <div class="col s6">
                          <input type="checkbox" class="filled-in" id="teb7" name="hobi[]" value="6" />
                          <label for="teb7">Pelayanan Laboratorium</label>
                        </div>
                      </div>
                    </div>

                </div>
              </div>

            </div>
          </div>
        </div>
      </div>

        <div class="col s12">
          <button class="btn waves-effect waves-light btn-large" type="submit" name="action">Tambahkan
            <i class="material-icons right">send</i>
          </button>
        </div>
    </div>
  </div>
</main>
<?php echo form_close();?>
