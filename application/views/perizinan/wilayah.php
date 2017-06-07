
		<p>Kecamatan :</p>
		<select name="kec" class="browser-default" id="kecamatan">
			<option>Select Kecamatan</option>
			<?php foreach($kecamatan as $kec){
				echo '<option value="'.$kec->id_kec.'">'.$kec->nama.'</option>';
			} ?>
		</select>

		<p>Desa :</p>
		<select name="des" class="browser-default" id="desa">
			<option>Select Desa</option>
		</select>
