    <?php if ($this->session->flashdata('success_msg')) { ?>
        <div id="snackbar"> <?php echo $this->session->flashdata('success_msg') ?> </div>
    <?php } ?>

    <?php
      echo form_open('puskesmas/tambah_data_puskesmas_pengawasan/');
    ?>
  <main>
     <input name="id_peng" value="<?php echo $id_peng; ?>" type="hidden" />
    <div class="title">
      <span><?php echo $title; ?></span>
        <div class="col s12 bred">
          <a href="#!" class="breadcrumb">Input Data Hasil Pengawasan <?php foreach ($klinik as $news_item) {$jenis_layanan= $news_item['jenis_layanan'];} ?> </a>
        </div>
    </div>
    <nav class="teal">
      <div class="nav-wrapper ">

          <div class="input-field">
            <input id="as" type="search">
            <label for="as" class="active"><i class="material-icons">cari</i></label>
            <i class="material-icons">close</i>
          </div>

      </div>
    </nav>
    <div class="row">
      <div class="col l12">
        <div class="card-panel white">
          <div class="row">
           <div class="col s12">
             <ul class="tabs tabs-fixed-width">
               <li class="tab col s2"><a href="#test1">Lokasi</a></li>
               <li class="tab col s2"><a href="#test2">Oprasional</a></li>
               <li class="tab col s2"><a href="#test3">Bangunan</a></li>
               <li class="tab col s2"><a href="#test4">Ruangan</a></li>
               <li class="tab col s2"><a href="#test5">Sarana Prasarana</a></li>
               <li class="tab col s2"><a href="#test6">Sanitasi</a></li>
               <li class="tab col s2"><a href="#test7">Rekam Medis</a></li>
               <li class="tab col s2"><a href="#test8">Tenaga Kesehatan</a></li>
               <li class="tab col s2"><a href="#test9">Administrasi</a></li>
             </ul>
           </div>
             <div id="test1" class="col s12">
                 <span class="black-text"><p><h3>Kesesuaian Lokasi</h3></p>
                 <div class="card-panel white">
                     <p>Lokasi Klinik</p>
                         <input name="lokasi_st_lokasi" value="ya" type="radio" id="1" />
                         <label for="1">Ya</label>
                         <input name="lokasi_st_lokasi" value="tidak" type="radio" id="2" />
                         <label for="2">Tidak</label>
                   </div>
                     <div class="row">
                       <div class="col s12">
                         <div class="card-panel cus-tambah white lighten-2">
                           <p>Catatan dan Saran</p>
                           <textarea id="textarea1" name="lokasi_catatan" class="materialize-textarea"></textarea>
                           <label for="textarea1">Catatan Saran</label>
                      </div>
                  </div>
               </div>
             </div>
             <div id="test2" class="col s12">
               <span class="black-text"><p><h3>Oprasional Klinik</h3></p>
               <div class="card-panel white">
                   <p>Status Beroprasi</p>
                       <input name="operasional_st_beroperasi" value="ya" type="radio" id="5" />
                           <label for="5">Ya</label>
                       <input name="operasional_st_beroperasi" value="tidak" type="radio" id="6" />
                     <label for="6">Tidak</label>
                 </div>
                 <div class="card-panel white">
                     <p>Pemasangan Plat Nama dan Klasifikasi</p>
                         <input name="operasional_st_plat" value="ya" type="radio" id="7" />
                             <label for="7">Ya</label>
                         <input name="operasional_st_plat" value="tidak" type="radio" id="8" />
                       <label for="8">Tidak</label>
                   </div>
                   <div class="card-panel white">
                       <p>Kesesuaian Oprasional Jenis Layanan Dengan Izin</p>
                           <input name="operasional_st_kesesuaian" value="ya" type="radio" id="9" />
                               <label for="9">Ya</label>
                           <input name="operasional_st_kesesuaian" value="tidak" type="radio" id="10" />
                         <label for="10">Tidak</label>
                     </div>
               <div class="card-panel white">
                   <p>Catatan Operasional Jenis Layanan</p>
                   <textarea id="textarea1" name="operasional_catatan" class="materialize-textarea"></textarea>
                   <label for="textarea1">Catatan Oprasional Jenis Layanan</label>
                 </div>
                   <div class="row">
                     <div class="col s12">
                       <div class="card-panel cus-tambah white lighten-2">
                       </div>
                    </div>
               </div>
             </div>
             <div id="test3" class="col s12">
               <span class="black-text"><p><h3>Bangunan</h3></p>
               <div class="card-panel white">
                   <p>Bangunan Permanen</p>
                       <input name="bangunan_permanen" value="ya" type="radio" id="test21" />
                           <label for="test21">Ya</label>
                       <input name="bangunan_permanen" value="tidak" type="radio" id="test20" />
                     <label for="test20">Tidak</label>
                 </div>
                 <div class="card-panel white">
                     <p>Bangunan Bergabung Fisik Dengan Tempat Tinggal Perorangan</p>
                         <input name="bangunan_bergabung" value="ya" type="radio" id="test22" />
                             <label for="test22">Ya</label>
                         <input name="bangunan_bergabung" value="tidak" type="radio" id="test23" />
                       <label for="test23">Tidak</label>
                   </div>

                   <!-- KONDISI -->
                   <?php if ($jenis_layanan == "0" || $jenis_layanan == "2,0" || $jenis_layanan == "2,1,0" || $jenis_layanan == "5,2,1,0" || $jenis_layanan == "6,5,2,1,0" ){
                     echo "";
                   }else { ?>
                     <div class="card-panel white">
                         <p>Catatan Kesesuaian Bangunan</p>
                         <textarea id="textarea1" name="bangunan_catatan" class="materialize-textarea"></textarea>
                         <label for="textarea1">Catatan Kesesuaian Bangunan</label>
                       </div>
                   <?php } ?>

               </div>
             <div id="test4" class="col s12">
               <span class="black-text"><p><h3>Ruangan</h3></p>
               <div class="card-panel white">
                   <p>Ruang Konsultasi</p>
                       <input name="ruangan_konsultasi" value="ya" type="radio" id="99" />
                           <label for="99">Ya</label>
                       <input name="ruangan_konsultasi" value="tidak" type="radio" id="98" />
                     <label for="98">Tidak</label>
                 </div>
                 <div class="card-panel white">
                     <p>Ruang Administrasi</p>
                         <input name="ruangan_administrasi" value="ya" type="radio" id="97" />
                             <label for="97">Ya</label>
                         <input name="ruangan_administrasi" value="tidak" type="radio" id="96" />
                       <label for="96">Tidak</label>
                   </div>
                   <?php if ($jenis_layanan == "0" || $jenis_layanan == "2,0" || $jenis_layanan == "2,1,0" ){
                     echo "";
                   }else { ?>
                     <div class="card-panel white">
                         <p>Ruang Obat dan Pelayanan Farmasi</p>
                             <input name="ruangan_obat" value="ya" type="radio" id="95" />
                                 <label for="95">Ya</label>
                             <input name="ruangan_obat" value="tidak" type="radio" id="94" />
                           <label for="94">Tidak</label>
                       </div>
                  <?php } ?>


                     <div class="card-panel white">
                         <p>Ruang Tindakan</p>
                             <input name="ruangan_tindakan" value="ya" type="radio" id="88" />
                                 <label for="88">Ya</label>
                             <input name="ruangan_tindakan" value="tidak" type="radio" id="93" />
                           <label for="93">Tidak</label>
                       </div>
                       <div class="card-panel white">
                           <p>Pojok ASI</p>
                               <input name="ruangan_asi" value="ya" type="radio" id="92" />
                                   <label for="92">Ya</label>
                               <input name="ruangan_asi" value="tidak" type="radio" id="91" />
                             <label for="91">Tidak</label>
                         </div>
                         <div class="card-panel white">
                             <p>Kamar Mandi</p>
                                 <input name="ruangan_mandi" value="ya" type="radio" id="90" />
                                     <label for="90">Ya</label>
                                 <input name="ruangan_mandi" value="tidak" type="radio" id="89" />
                               <label for="89">Tidak</label>
                           </div>

                           <!-- KONDISI -->
                           <?php if ($jenis_layanan == "0" || $jenis_layanan == "2,0" || $jenis_layanan == "2,1,0" || $jenis_layanan == "5,2,1,0" || $jenis_layanan == "6,5,2,1,0" ){
                             echo "";
                           }else { ?>
                             <div class="card-panel white">
                                  <p>Catatan Ketersediaan Ruangan</p>
                                  <textarea id="textarea1" name="ruangan_catatan" class="materialize-textarea"></textarea>
                                  <label for="textarea1">Catatan Ketersediaan Ruangan</label>
                             </div>
                           <?php } ?>

             </div>
             <div id="test5" class="col s12">
               <span class="black-text"><p><h3>Sarana Prasarana</h3></p>
               <div class="card-panel white">
                   <p>Instalasi Listrik</p>
                       <input name="sarana_listrik" value="ya" type="radio" id="72" />
                           <label for="72">Ya</label>
                       <input name="sarana_listrik" value="tidak" type="radio" id="73" />
                     <label for="73">Tidak</label>
                 </div>
                 <div class="card-panel white">
                     <p>Pencegahan Pelangulangan Kebakaran</p>
                         <input name="sarana_pencegahan" value="ya" type="radio" id="74" />
                             <label for="74">Ya</label>
                         <input name="sarana_pencegahan" value="tidak" type="radio" id="75" />
                       <label for="75">Tidak</label>
                   </div>
                   <div class="card-panel white">
                       <p>Sarana Gas Medis</p>
                           <input name="sarana_gas" value="ya" type="radio" id="76" />
                               <label for="76">Ya</label>
                           <input name="sarana_gas" value="tidak" type="radio" id="77" />
                         <label for="77">Tidak</label>
                     </div>
                     <div class="card-panel white">
                         <p>Sarana Tata Udara</p>
                             <input name="sarana_udara" value="ya" type="radio" id="78" />
                                 <label for="78">Ya</label>
                             <input name="sarana_udara" value="tidak" type="radio" id="79" />
                           <label for="79">Tidak</label>
                       </div>
                       <div class="card-panel white">
                           <p>Sarana Pencegahan</p>
                               <input name="sarana_pencegahan" value="ya" type="radio" id="80" />
                                   <label for="80">Ya</label>
                               <input name="sarana_pencegahan" value="tidak" type="radio" id="81" />
                             <label for="81">Tidak</label>
                         </div>
                         <div class="card-panel white">
                             <p>Sarana Air Bersih</p>
                                 <input name="sarana_air" value="ya" type="radio" id="82" />
                                     <label for="82">Ya</label>
                                 <input name="sarana_air" value="tidak" type="radio" id="83" />
                               <label for="83">Tidak</label>
                           </div>
                           <!-- KONDISI -->
                           <?php if ($jenis_layanan == "0" || $jenis_layanan == "2,0" || $jenis_layanan == "2,1,0" || $jenis_layanan == "5,2,1,0" || $jenis_layanan == "6,5,2,1,0" ){
                             echo "";
                           }else {
                             echo '<div class="card-panel white">
                                 <p>Ambulans</p>
                                     <input name="sarana_ambulan" value="ya" type="radio" id="84" />
                                         <label for="84">Ya</label>
                                     <input name="sarana_ambulan" value="tidak" type="radio" id="85" />
                                   <label for="85">Tidak</label>
                               </div>
                               <div class="card-panel white">
                                   <p>Jumlah TT (RI)</p>
                                       <input name="sarana_tt" value="ya" type="radio" id="86" />
                                           <label for="86"> 5 - 10 </label>
                                       <input name="sarana_tt" value="tidak" type="radio" id="87" />
                                     <label for="87">< 5 - > 10 </label>
                                 </div>';
                           } ?>
                            <!-- KONDISI -->


                   <div class="card-panel white">
                       <p>Catatan Sarana Prasarana</p>
                       <textarea id="textarea1" name="sarana_catatan" class="materialize-textarea"></textarea>
                       <label for="textarea1">Catatan Saarana Prasarana</label>
                     </div>
             </div>
             <div id="test6" class="col s12">
               <span class="black-text"><p><h3>Sanitasi</h3></p>
               <div class="card-panel white">
                   <p>Instalasi Sanitasi</p>
                       <input name="sanitasi_instalasi" value="ya" type="radio" id="71" />
                           <label for="71">Ya</label>
                       <input name="sanitasi_instalasi" value="tidak" type="radio" id="70" />
                     <label for="70">Tidak</label>
                 </div>
                 <div class="card-panel white">
                     <p>Tempat Sampah</p>
                         <input name="sanitasi_sampah" value="ya" type="radio" id="69" />
                             <label for="69">Ya</label>
                         <input name="sanitasi_sampah" value="tidak" type="radio" id="62" />
                       <label for="62">Tidak</label>
                   </div>
                   <div class="card-panel white">
                       <p>Wastafel</p>
                           <input name="sanitasi_wastafel" value="ya" type="radio" id="68" />
                               <label for="68">Ya</label>
                           <input name="sanitasi_wastafel" value="tidak" type="radio" id="67" />
                         <label for="67">Tidak</label>
                     </div>
                     <div class="card-panel white">
                         <p>Saluran Air Kotor</p>
                             <input name="sanitasi_saluran" value="ya" type="radio" id="66" />
                                 <label for="66">Ya</label>
                             <input name="sanitasi_saluran" value="tidak" type="radio" id="65" />
                           <label for="65">Tidak</label>
                       </div>
                       <div class="card-panel white">
                           <p>Pengelolaan Limbah Medis</p>
                               <input name="sanitasi_pengelolaan" value="ya" type="radio" id="64" />
                                   <label for="64">Ya</label>
                               <input name="sanitasi_pengelolaan" value="tidak" type="radio" id="63" />
                             <label for="63">Tidak</label>
                         </div>
                   <div class="card-panel white">
                       <p>Catatan Sanitasi</p>
                       <textarea id="textarea1" name="sanitasi_catatan" class="materialize-textarea"></textarea>
                       <label for="textarea1">Catatan Sanitasi</label>
                     </div>
             </div>
             <div id="test7" class="col s12">
               <span class="black-text"><p><h3>Kesesuaian Kartu Status Klien / Rekam Medik</h3></p>
               <div class="card-panel white">
                   <p>Identitas Klien</p>
                       <input name="kesesuaian_identitas" value="ya" type="radio" id="61" />
                           <label for="61">Lengkap</label>
                       <input name="kesesuaian_identitas" value="tidak" type="radio" id="60" />
                     <label for="60">Tidak Lengkap</label>
                 </div>
                 <div class="card-panel white">
                     <p>Kelengkapan Anamnesis</p>
                         <input name="kesesuaian_kelengkapan" value="ya" type="radio" id="59" />
                             <label for="59">Lengkap</label>
                         <input name="kesesuaian_kelengkapan" value="tidak" type="radio" id="58" />
                       <label for="58">Tidak Lengkap</label>
                   </div>
                   <div class="card-panel white">
                       <p>Hasil Pemeriksaan Fisik</p>
                           <input name="kesesuaian_pemeriksaan" value="ya" type="radio" id="57" />
                               <label for="57">Lengkap</label>
                           <input name="kesesuaian_pemeriksaan" value="tidak" type="radio" id="56" />
                         <label for="56">Tidak Lengkap</label>
                     </div>
                     <div class="card-panel white">
                         <p>Jenis Terai/Tindakan Sesuai Hasil Pemeriksaan Fisik</p>
                             <input name="kesesuaian_jenis" value="ya" type="radio" id="55" />
                                 <label for="55">Lengkap</label>
                             <input name="kesesuaian_jenis" value="tidak" type="radio" id="54" />
                           <label for="54">Tidak Lengkap</label>
                       </div>
                       <div class="card-panel white">
                           <p>Follow UP Theraphy/Tindakan</p>
                               <input name="kesesuaian_follow" value="ya" type="radio" id="53" />
                                   <label for="53">Lengkap</label>
                               <input name="kesesuaian_follow" value="tidak" type="radio" id="52" />
                             <label for="52">Tidak Lengkap</label>
                         </div>
                         <div class="card-panel white">
                             <p>Nama dan TTD Pemeriksa</p>
                                 <input name="kesesuaian_ttd" value="ya" type="radio" id="51" />
                                     <label for="51">Lengkap</label>
                                 <input name="kesesuaian_ttd" value="tidak" type="radio" id="50" />
                               <label for="50">Tidak Lengkap</label>
                           </div>
                   <div class="card-panel white">
                       <p>Catatan Rekam Medis</p>
                       <textarea id="textarea1" name="kesesuaian_catatan" class="materialize-textarea"></textarea>
                       <label for="textarea1">Catatan Rekam Medis</label>
                     </div>
             </div>
             <div id="test8" class="col s12">
               <span class="black-text"><p><h3>Tenaga Kesehatan</h3></p>
                 <!-- KONDISI -->
                 <!--  $jenis_layanan == "2,1,0" || $jenis_layanan == "5,2,1,0" || $jenis_layanan == "6,5,2,1,0" -->
                 <?php if ($jenis_layanan == "0"){
                   echo "";
                 }
                 if ($jenis_layanan == "2,0" || $jenis_layanan == "2,1,0" || $jenis_layanan == "5,2,1,0" || $jenis_layanan == "6,5,2,1,0" || $jenis_layanan == "6,5,4,2,1,0" ) { ?>
                   <div class="card-panel white">
                       <p>Dokter</p>
                           <input name="tenaga_dokter" value="ya" type="radio" id="49" />
                               <label for="49">Ya</label>
                           <input name="tenaga_dokter" value="tidak" type="radio" id="48" />
                         <label for="48">Tidak</label>
                     </div>
                     <div class="card-panel white">
                         <p>STR Dokter</p>
                             <input name="tenaga_str_dokter" value="ya" type="radio" id="47" />
                                 <label for="47">Ya</label>
                             <input name="tenaga_str_dokter" value="tidak" type="radio" id="46" />
                           <label for="46">Tidak</label>
                       </div>
                       <div class="card-panel white">
                           <p>SIP Dokter</p>
                               <input name="tenaga_sip" value="ya" type="radio" id="45" />
                                   <label for="45">Ya</label>
                               <input name="tenaga_sip" value="tidak" type="radio" id="44" />
                             <label for="44">Tidak</label>
                         </div>
                 <?php } if ($jenis_layanan == "2,1,0" || $jenis_layanan == "5,2,1,0" || $jenis_layanan == "6,5,2,1,0" || $jenis_layanan == "6,5,4,2,1,0" ) { ?>
                   <div class="card-panel white">
                       <p>Perawat</p>
                           <input name="tenaga_perawat" value="ya" type="radio" id="43" />
                               <label for="43">Ya</label>
                           <input name="tenaga_perawat" value="tidak" type="radio" id="42" />
                         <label for="42">Tidak</label>
                     </div>
                     <div class="card-panel white">
                         <p>STR Perawat</p>
                             <input name="tenaga_str_perawat" value="ya" type="radio" id="41" />
                                 <label for="41">Ya</label>
                             <input name="tenaga_str_perawat" value="tidak" type="radio" id="40" />
                           <label for="40">Tidak</label>
                       </div>
                       <div class="card-panel white">
                           <p>SIP Perawat</p>
                               <input name="tenaga_sip_perawat" value="ya" type="radio" id="410" />
                                   <label for="410">Ya</label>
                               <input name="tenaga_sip_perawat" value="tidak" type="radio" id="400" />
                             <label for="400">Tidak</label>
                         </div>
                 <?php } if ($jenis_layanan == "5,2,1,0" || $jenis_layanan == "6,5,2,1,0" || $jenis_layanan == "6,5,4,2,1,0" ) { ?>
                   <div class="card-panel white">
                       <p>Apoteker</p>
                           <input name="tenaga_apoteker" value="ya" type="radio" id="39" />
                               <label for="39">Ya</label>
                           <input name="tenaga_apoteker" value="tidak" type="radio" id="38" />
                         <label for="38">Tidak</label>
                     </div>
                     <div class="card-panel white">
                         <p>SIK</p>
                             <input name="tenaga_sik" value="ya" type="radio" id="37" />
                                 <label for="37">Ya</label>
                             <input name="tenaga_sik" value="tidak" type="radio" id="36" />
                           <label for="36">Tidak</label>
                       </div>
                       <div class="card-panel white">
                           <p>SIPA</p>
                               <input name="tenaga_sipa" value="ya" type="radio" id="35" />
                                   <label for="35">Ya</label>
                               <input name="tenaga_sipa" value="tidak" type="radio" id="34" />
                             <label for="34">Tidak</label>
                         </div>
                  <?php } if ($jenis_layanan == "6,5,2,1,0" || $jenis_layanan == "6,5,4,2,1,0" ) { ?>
                    <div class="card-panel white">
                        <p>Analis Kesehatan</p>
                            <input name="tenaga_analis" value="ya" type="radio" id="33" />
                                <label for="33">Ya</label>
                            <input name="tenaga_analis" value="tidak" type="radio" id="32" />
                          <label for="32">Tidak</label>
                      </div>
                      <div class="card-panel white">
                          <p>STR Kesehatan</p>
                              <input name="tenaga_str_kesehatan" value="ya" type="radio" id="31" />
                                  <label for="31">Ya</label>
                              <input name="tenaga_str_kesehatan" value="tidak" type="radio" id="30" />
                            <label for="30">Tidak</label>
                        </div>
                        <div class="card-panel white">
                            <p>SIP Kesehatan</p>
                                <input name="tenaga_sip_kesehatan" value="ya" type="radio" id="29" />
                                    <label for="29">Ya</label>
                                <input name="tenaga_sip_kesehatan" value="tidak" type="radio" id="28" />
                              <label for="28">Tidak</label>
                          </div>
                  <?php } if ($jenis_layanan == "6,5,4,2,1,0") { ?>
                    <div class="card-panel white">
                        <p>Gizi</p>
                            <input name="tenaga_gizi" value="ya" type="radio" id="27" />
                                <label for="27">Ya</label>
                            <input name="tenaga_gizi" value="tidak" type="radio" id="26" />
                          <label for="26">Tidak</label>
                      </div>
                      <div class="card-panel white">
                          <p>STR Gizi</p>
                              <input name="tenaga_str_gizi" value="ya" type="radio" id="25" />
                                  <label for="25">Ya</label>
                              <input name="tenaga_str_gizi" value="tidak" type="radio" id="24" />
                            <label for="24">Tidak</label>
                        </div>
                        <div class="card-panel white">
                            <p>SIP Gizi</p>
                                <input name="tenaga_sip_gizi" value="ya" type="radio" id="23" />
                                    <label for="23">Ya</label>
                                <input name="tenaga_sip_gizi" value="tidak" type="radio" id="22" />
                              <label for="22">Tidak</label>
                          </div>
                  <?php } ?>

                  <?php if ($jenis_layanan != "0") { ?>
                    <div class="card-panel white">
                        <p>Catatan Ketenagaan</p>
                        <textarea id="textarea1" name="tenaga_catatan" class="materialize-textarea"></textarea>
                        <label for="textarea1">Catatan Ketenagaan</label>
                      </div>
                  <?php } ?>

             </div>
             <div id="test9" class="col s12">
               <span class="black-text"><p><h3>Administrasi Klinik</h3></p>
               <div class="card-panel white">
                   <p>Laporan Laporan Penyakit (LB1)</p>
                       <input name="administrasi_laporan" value="ya" type="radio" id="21" />
                           <label for="21">Ya</label>
                       <input name="administrasi_laporan" value="tidak" type="radio" id="20" />
                     <label for="20">Tidak</label>
                 </div>
                 <div class="card-panel white">
                     <p>Catatan Administrasi</p>
                     <textarea id="textarea231" name="administrasi_catatan" class="materialize-textarea"></textarea>
                     <label for="textarea231">Catatan Administrasi</label>
                   </div>
                 <div class="input-field col m6">
                   <button class="btn waves-effect waves-light btn-large" type="submit" name="action">Selesai
                     <i class="material-icons right">send</i>
                     </button>
                 </div>
             </div>
         </div>
      </div>
  </div>
  </div>
  </main>
  <?php echo form_close();?>
