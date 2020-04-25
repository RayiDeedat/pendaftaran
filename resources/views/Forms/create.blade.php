@extends('Forms.layout')
 
@section('content')
   @if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
   <form action= "{{ route('Forms.store') }}" method="POST">
    @csrf
    <h4>I. Data Diri Siswa</h4>
    <input type="hidden" name="no_tes" value="001">
  <div class="form-group row " style="margin-top:10px; " >
    <label for="inputnama" class="col-sm-2 col-form-label">1. Nama Lengkap</label>
    <div style="width: 500px;">
      <input type="text" class="form-control width: 10px" id="inputnama" placeholder="" name="nama_l"  >
    </div>
  </div>
  <div class="form-group row">
    <label for="inputnp" class="col-sm-2 col-form-label">2. Nama Panggilan</label>
    <div style="width: 500px;">
      <input type="text" class="form-control" id="inputnp" placeholder="" name="nama_p" >
    </div>
  </div>
  <div class="form-group row">
    <label for="inputjk" class="col-sm-2 col-form-label">3. Jenis Kelamin</label>
  <div style="width: 500px;">
    <input type="radio" id="male" name="jk" value="L" >
    <label for="male">Laki-laki</label><br>
    <input type="radio" id="female" name="jk" value="P">
    <label for="female">Perempuan</label><br>
    </div>
  </div>
  <div class="form-group row">
    <label for="inputttl" class="col-sm-2 col-form-label">4. Tempat,Tanggal Lahir</label>
  <div style="width: 500px;">
      <input type="text" class="form-control" id="inputttl" placeholder="" name="ttl" >
    </div>
  </div>
  <div class="form-group row " style="margin-top:10px; " >
    <label for="inputagama" class="col-sm-2 col-form-label">5. Agama</label>
    <div style="width: 500px;">
 <select id="agama" name="agama"  style="width : 500px" >
    <option value=""> </option>
      <option value="Kristen">Kristen</option>
      <option value="Islam">Islam</option>
      <option value="Katholik">Katholik</option>
      <option value="Buddha">Buddha</option>
      <option value="Hindu">Hindu</option>
</select>
    </div>
  </div>
  <div class="form-group row">
    <label for="inputcita" class="col-sm-2 col-form-label">6. Cita-cita</label>
    <div style="width: 500px;">
      <input type="text" class="form-control" id="inputcita" placeholder="" name="cita_cita" >
    </div>
  </div>
  <div class="form-group row">
    <label for="inputhoby" class="col-sm-2 col-form-label">7. Hobby</label>
  <div style="width: 500px;">
      <input type="text" class="form-control" id="inputhoby" placeholder="" name="hobby" >
    </div>
  </div>
  <div class="form-group row">
    <label for="inputanak" class="col-sm-2 col-form-label">8. Anak Ke </label>
  <div style="width: 500px;">
      <input type="text" class="form-control" id="inputanak" placeholder="" name="anak_ke" >
    </div>
  </div>
  <div class="form-group row">
    <label for="inputsaudara" class="col-sm-2 col-form-label">9. Saudara Kandung </label>
    <div style="width: 100px;">
      <input type="text" class="form-control" id="inputsaudara" placeholder="" name="saudara_k" >
    </div>
    <label for="inputsaudarat" class="col-sm-2 col-form-label">10. Saudara Tiri</label>
  <div style="width: 100px;">
      <input type="text" class="form-control" id="inputsaudarat" placeholder="" name="saudara_t" >
    </div>

    <label for="inputsaudaraa" class="col-sm-2 col-form-label">11. Saudara Angkat </label>
  <div style="width: 100px;">
      <input type="text" class="form-control" id="inputsaudaraa" placeholder="" name="saudara_angkat" >
    </div>
    </div>
  <div class="form-group row">
    <label for="inputbb" class="col-sm-2 col-form-label">12. Berat Badan</label>
    <div style="width: 500px;">
      <input type="text" class="form-control" id="inputbb" placeholder="" name="bb" >
    </div>
  </div>
  <div class="form-group row">
    <label for="inputtinggi" class="col-sm-2 col-form-label">13. Tinggi</label>
  <div style="width: 500px;">
      <input type="text" class="form-control" id="inputtinggi" placeholder="" name="tinggi" >
    </div>
  </div>
  <div class="form-group row">
    <label for="inputgoldar" class="col-sm-2 col-form-label">14. Golongan Darah </label>
  <div style="width: 500px;">
      <input type="text" class="form-control" id="inputgoldar" placeholder="" name="goldar" >
    </div>
  </div> 
   <h4>II. Keterangan Tempat Tinggal</h4>
 <div class="form-group row">
    <label for="inputalamat" class="col-sm-2 col-form-label">1. Alamat</label>
    <div style="width: 500px;">
      <input type="text" class="form-control" id="inputalamat" placeholder="" name="alamat" >
    </div>
  </div>
  <div class="form-group row">
    <label for="inputRT" class="col-sm-2 col-form-label">2. RT</label>
  <div style="width: 250px;">
      <input type="text" class="form-control" id="inputRT" placeholder="" name="rt" >
    </div>
    <label for="inputrw" class="col-sm-1 col-form-label">3. RW </label>
  <div style="width: 250px;">
      <input type="text" class="form-control" id="inputrw" placeholder="" name="rw" >
    </div>   
    </div>
  <div class="form-group row">
    <label for="inputkelurahan" class="col-sm-2 col-form-label">4. Kelurahan</label>
    <div style="width: 500px;">
      <input type="text" class="form-control" id="inputkelurahan" placeholder="" name="kelurahan" >
    </div>
  </div>
  <div class="form-group row">
    <label for="inputkecamatan" class="col-sm-2 col-form-label">5. Kecamatan</label>
  <div style="width: 500px;">
      <input type="text" class="form-control" id="inputkecamatan" placeholder="" name="kecamatan" >
    </div>
  </div>
  <div class="form-group row">
    <label for="inputkota" class="col-sm-2 col-form-label">6. Kota </label>
  <div style="width: 500px;">
      <input type="text" class="form-control" id="inputkota" placeholder="" name="kota" >
    </div>
  </div>
  <div class="form-group row">
    <label for="inputpro" class="col-sm-2 col-form-label">7. Provinsi</label>
    <div style="width: 500px;">
      <input type="text" class="form-control" id="inputpro" placeholder="" name="provinsi" >
    </div>
  </div>
  <div class="form-group row">
    <label for="inputpos" class="col-sm-2 col-form-label">8. Kode pos</label>
  <div style="width: 500px;">
      <input type="text" class="form-control" id="inputpos" placeholder="" name="kode_pos" >
    </div>
  </div>
  <div class="form-group row">
    <label for="inputrumah" class="col-sm-2 col-form-label">9. Telephone Rumah </label>
  <div style="width: 500px;">
      <input type="text" class="form-control" id="inputrumah" placeholder="" name="telp_rumah" >
    </div>
  </div>
   <div class="form-group row">
    <label for="inputemail" class="col-sm-2 col-form-label">10. Email </label>
  <div style="width: 500px;">
      <input type="text" class="form-control" id="inputemail" placeholder="" name="email" >
    </div>
  </div> 
   <div class="form-group row">
    <label for="inputtinggal" class="col-sm-2 col-form-label">11. Tinggal Dengan</label>
  <div style="width: 500px;">
      <select id="tinggal" name="tinggal"  style="width : 500px" >
    <option value=""> </option>
      <option value="orangtua">Orang Tua</option>
      <option value="asrama">Asrama</option>
      <option value="saudara">Saudara</option>
  </select>
    </div>
  </div>
  <h4>III. Keterangan Kesehatan</h4>   
   <div class="form-group row">
    <label class="col-sm-3 col-form-label">1. Penyakit yang pernah di derita  </label>
  </div>
   <div class="form-group row">
    <label for="inputtbc" class="col-sm-3 col-form-label"> -TBC(Sebutkan/Kapan) </label>
  <div style="width: 500px;">
      <input type="text" class="form-control" id="inputtbc" placeholder="" name="tbc" value="-" >
    </div>
  </div> 
   <div class="form-group row">
    <label for="inputmalaria" class="col-sm-3 col-form-label"> -Malaria(Sebutkan/Kapan) </label>
  <div style="width: 500px;">
      <input type="text" class="form-control" id="inputmalaria" placeholder="" name="malaria" value="-">
    </div>
  </div>
   <div class="form-group row">
    <label for="inputchotipa" class="col-sm-3 col-form-label"> -Chotipa(Sebutkan/Kapan) </label>
  <div style="width: 500px;">
      <input type="text" class="form-control" id="inputchotipa" placeholder="" name="chotipa" value="-">
    </div>
  </div>  
   <div class="form-group row">
    <label for="inputcacar" class="col-sm-3 col-form-label"> -Cacar(Sebutkan/Kapan) </label>
  <div style="width: 500px;">
      <input type="text" class="form-control" id="inputcacar" placeholder="" name="cacar" value="-" >
    </div>
  </div>  
   <div class="form-group row">
    <label for="inputlainnya" class="col-sm-3 col-form-label"> -Lainnya(Sebutkan/Kapan) </label>
  <div style="width: 500px;">
      <input type="text" class="form-control" id="inputlainnya" placeholder="" name="lainnya" value="-" >
    </div>
  </div> 
   <div class="form-group row">
    <label for="inputkelainan" class="col-sm-3 col-form-label">2. Kelainan Jasmani/lainnya </label>
  <div style="width: 500px;">
      <input type="text" class="form-control" id="inputkelainan" placeholder="" name="kelainan" value="-">
    </div>
  </div>  
  <h4>IV. Data Orangtua/Wali</h4>
   <div class="form-group row">
    <label for="inputnama_a" class="col-sm-3 col-form-label">A. Ayah </label>
  <div style="width: 500px;">
      <input type="radio" id="ada" name="life" onclick="document.getElementById('test').style.display='block'" value="ada" >
    <label for="ada">Ada</label><br>
    <input type="radio" id="gaada" name="life" onclick="document.getElementById('test').style.display='none'" value="meninggal">
    <label for="gaada">Meninggal</label><br>
    </div>
  </div>
  <div id="test" style="display: none" >
  <div class="form-group row">
    <label for="inputnama_a"  class="col-sm-3 col-form-label">1. Nama ayah </label>
  <div style="width: 500px;">
      <input type="text" class="form-control" id="inputnama_a" placeholder="" name="nama_a" r>
    </div>
  </div> 
 
  <div class="form-group row">
    <label for="inputttl_a" class="col-sm-3 col-form-label">2. Tempat,tanggal lahir </label>
  <div style="width: 500px;">
      <input type="text" class="form-control" id="inputttl_a" placeholder="" name="ttl_a" >
    </div>
  </div>
  <div class="form-group row">
    <label for="inputpekerjaan_a" class="col-sm-3 col-form-label">3. Pekerjaan </label>
  <div style="width: 500px;">
      <input type="text" class="form-control" id="inputpekerjaan_a" placeholder="" name="pekerjaan_a" >
    </div>
  </div>
  <div class="form-group row">
    <label for="inputpendidikan_a" class="col-sm-3 col-form-label">4. Pendidikan terakhir </label>
  <div style="width: 500px;">
      <input type="text" class="form-control" id="inputpendidikan_a" placeholder="" name="pendidikan_a" >
    </div>
  </div>  
  <div class="form-group row">
    <label for="inputagama_a" class="col-sm-3 col-form-label">5. Agama  </label>
  <div style="width: 500px;">
      <select id="agama_a" name="agama_a"  style="width : 500px" >
    <option value=""> </option>
      <option value="Kristen">Kristen</option>
      <option value="Islam">Islam</option>
      <option value="Katholik">Katholik</option>
      <option value="Buddha">Buddha</option>
      <option value="Hindu">Hindu</option>
</select>
    </div>
  </div>
  <div class="form-group row">
    <label for="inputwa_a" class="col-sm-3 col-form-label">6. Nomer Telephone  </label>
  <div style="width: 500px;">
      <input type="text" class="form-control" id="inputwa_a" placeholder="" name="wa_a" >
    </div>
  </div>       
</div>
<div class="form-group row">
    <label for="inputnama_B" class="col-sm-3 col-form-label">B. Ibu </label>
  <div style="width: 500px;">
      <input type="radio" id="adas" name="lifes" onclick="document.getElementById('tests').style.display='block'" value="ada" >
    <label for="adas">Ada</label><br>
    <input type="radio" id="gaadas" name="lifes" onclick="document.getElementById('tests').style.display='none'" value="meninggal">
    <label for="gaadas">Meninggal</label><br>
    </div>
  </div>
  <div id="tests" style="display: none" >
  <div class="form-group row">
    <label for="inputnama_i"  class="col-sm-3 col-form-label">1. Nama Ibu </label>
  <div style="width: 500px;">
      <input type="text" class="form-control" id="inputnama_i" placeholder="" name="nama_i" >
    </div>
  </div> 
 
  <div class="form-group row">
    <label for="inputttl_i" class="col-sm-3 col-form-label">2. Tempat,tanggal lahir </label>
  <div style="width: 500px;">
      <input type="text" class="form-control" id="inputttl_i" placeholder="" name="ttl_i" >
    </div>
  </div>
  <div class="form-group row">
    <label for="inputpekerjaan_i" class="col-sm-3 col-form-label">3. Pekerjaan  </label>
  <div style="width: 500px;">
      <input type="text" class="form-control" id="inputpekerjaan_i" placeholder="" name="pekerjaan_i" >
    </div>
  </div>
  <div class="form-group row">
    <label for="inputpendidikan_i" class="col-sm-3 col-form-label">4. Pendidikan terakhir </label>
  <div style="width: 500px;">
      <input type="text" class="form-control" id="inputpendidikan_i" placeholder="" name="pendidikan_i" >
    </div>
  </div>
  <div class="form-group row">
    <label for="inputagama_i" class="col-sm-3 col-form-label">5. Agama  </label>
  <div style="width: 500px;">
      <select id="agama_i" name="agama_i" style="width : 500px" >
    <option value=""> </option>
      <option value="Kristen">Kristen</option>
      <option value="Islam">Islam</option>
      <option value="Katholik">Katholik</option>
      <option value="Buddha">Buddha</option>
      <option value="Hindu">Hindu</option>
</select>
    </div>
  </div>
  <div class="form-group row">
    <label for="inputwa_i" class="col-sm-3 col-form-label">6. Nomer Telephone  </label>
  <div style="width: 500px;">
      <input type="text" class="form-control" id="inputwa_i" placeholder="" name="wa_i" >
    </div>
  </div>       
</div>
<div class="form-group row">
    <label for="inputnama_B" class="col-sm-3 col-form-label">C. Wali </label>
  <div style="width: 500px;">
      <input type="radio" id="adass" name="lifess" onclick="document.getElementById('testss').style.display='block'" value="ada" >
    <label for="adass">Ada wali</label><br>
    <input type="radio" id="gaadass" name="lifess" onclick="document.getElementById('testss').style.display='none'" value="meninggal">
    <label for="gaadass">Tidak ada wali</label><br>
    </div>
  </div>
  <div id="testss" style="display: none" >
  <div class="form-group row">
    <label for="inputnama_w"  class="col-sm-3 col-form-label">1. Nama Wali </label>
  <div style="width: 500px;">
      <input type="text" class="form-control" id="inputnama_w" placeholder="" name="nama_w" value="NULL" >
    </div>
  </div> 
 
  <div class="form-group row">
    <label for="inputttl_w" class="col-sm-3 col-form-label">2. Tempat,tanggal lahir </label>
  <div style="width: 500px;">
      <input type="text" class="form-control" id="inputttl_w" placeholder="" name="ttl_w" value="NULL" >
    </div>
  </div>
  <div class="form-group row">
    <label for="inputpekerjaan_w" class="col-sm-3 col-form-label">3. Pekerjaan  </label>
  <div style="width: 500px;">
      <input type="text" class="form-control" id="inputpekerjaan_w" placeholder="" name="pekerjaan_w" value="NULL" >
    </div>
  </div>
  <div class="form-group row">
    <label for="inputpendidikan_w" class="col-sm-3 col-form-label">4. Pendidikan terakhir </label>
  <div style="width: 500px;">
      <input type="text" class="form-control" id="inputpendidikan_w" placeholder="" name="pendidikan_w"  value="NULL">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputhubungan_w" class="col-sm-3 col-form-label">5. Hubungan dengan murid </label>
  <div style="width: 500px;">
      <input type="text" class="form-control" id="inputhubungan_w" placeholder="" name="hubungan_w" value="NULL" >
    </div>
  </div>  
  <div class="form-group row">
    <label for="inputagama_w" class="col-sm-3 col-form-label">6. Agama Wali </label>
  <div style="width: 500px;">
      <select id="agama_w" name="agama_w" v style="width : 500px" >
    <option value=""> </option>
      <option value="Kristen">Kristen</option>
      <option value="Islam">Islam</option>
      <option value="Katholik">Katholik</option>
      <option value="Buddha">Buddha</option>
      <option value="Hindu">Hindu</option>
</select>
    </div>
  </div>
  <div class="form-group row">
    <label for="inputwa_i" class="col-sm-3 col-form-label">7. Nomer Telephone  </label>
  <div style="width: 500px;">
      <input type="text" class="form-control" id="inputwa_i" placeholder="" name="wa_w" value=" " >
    </div>
  </div>
  <div class="form-group row">
    <label for="inputemail_w" class="col-sm-3 col-form-label">8. Email </label>
  <div style="width: 500px;">
      <input type="text" class="form-control" id="inputemail-W" placeholder="" name="email_w" value=" " >
    </div>
  </div>         
</div>
<h4>V. Nilai Rapot</h4>
<table>
  <tr>
    <th rowspan="2" >No</th>
    <th rowspan="2" >Mata Pelajaran</th>
    <th colspan="2" style="text-align: center" >Kelas 7</th>
    <th colspan="2" style="text-align: center" >Kelas 8</th>
    <th style="text-align: center" >Kelas 9</th>
  </tr>
  <tr>
    <td style="text-align: center" >Semester 1</td>
    <td style="text-align: center" >Semester 2</td>
    <td style="text-align: center" >Semester 1</td>
    <td style="text-align: center" >Semester 2</td>
    <td style="text-align: center"  >Semester 1</td>
  </tr>
  <tr>
    <td>1</td>
    <td>PAI</td>
    <td ><input type="text" name="pai_k7_s1"  style="border: 0; text-align: center"></td>
    <td ><input type="text" name="pai_k7_s2"  style="border: 0; text-align: center"></td>
    <td ><input type="text" name="pai_k8_s1"  style="border: 0; text-align: center"></td>
    <td ><input type="text" name="pai_k8_s2"  style="border: 0; text-align: center"></td>
    <td ><input type="text" name="pai_k9_s1"  style="border: 0; text-align: center"></td>
  </tr>
  <tr>
    <td>2</td>
    <td>Bahasa Indonesia</td>
    <td ><input type="text" name="indo_k7_s1"  style="border: 0; text-align: center"></td>
    <td ><input type="text" name="indo_k7_s2"  style="border: 0; text-align: center"></td>
    <td ><input type="text" name="indo_k8_s1"  style="border: 0; text-align: center"></td>
    <td ><input type="text" name="indo_k8_s2"  style="border: 0; text-align: center"></td>
    <td ><input type="text" name="indo_k9_s1"  style="border: 0; text-align: center"></td>
  </tr>
  <tr>
    <td>3</td>
    <td>Bahasa Inggris</td>
    <td ><input type="text" name="inggris_k7_s1"  style="border: 0; text-align: center"></td>
    <td ><input type="text" name="inggris_k7_s2"  style="border: 0; text-align: center"></td>
    <td ><input type="text" name="inggris_k8_s1"  style="border: 0; text-align: center"></td>
    <td ><input type="text" name="inggris_k8_s2"  style="border: 0; text-align: center"></td>
    <td ><input type="text" name="inggris_k9_s1"  style="border: 0; text-align: center"></td>
  </tr>
  <tr>
    <td>4</td>
    <td>Matematika</td>
    <td ><input type="text" name="mtk_k7_s1"  style="border: 0; text-align: center"></td>
    <td ><input type="text" name="mtk_k7_s2"  style="border: 0; text-align: center"></td>
    <td ><input type="text" name="mtk_k8_s1"  style="border: 0; text-align: center"></td>
    <td ><input type="text" name="mtk_k8_s2"  style="border: 0; text-align: center"></td>
    <td ><input type="text" name="mtk_k9_s1"  style="border: 0; text-align: center"></td>
    </tr>
  <tr>
    <td>5</td>
    <td>IPA</td>
    <td ><input type="text" name="ipa_k7_s1"  style="border: 0; text-align: center"></td>
    <td ><input type="text" name="ipa_k7_s2"  style="border: 0; text-align: center"></td>
    <td ><input type="text" name="ipa_k8_s1"  style="border: 0; text-align: center"></td>
    <td ><input type="text" name="ipa_k8_s2"  style="border: 0; text-align: center"></td>
    <td ><input type="text" name="ipa_k9_s1"  style="border: 0; text-align: center"></td>
    </tr>

    <tr>
    <td>6</td>
    <td>IPS</td>
    <td ><input type="text" name="ips_k7_s1"  style="border: 0; text-align: center"></td>
    <td ><input type="text" name="ips_k7_s2"  style="border: 0; text-align: center"></td>
    <td ><input type="text" name="ips_k8_s1"  style="border: 0; text-align: center"></td>
    <td ><input type="text" name="ips_k8_s2"  style="border: 0; text-align: center"></td>
    <td ><input type="text" name="ips_k9_s1"  style="border: 0; text-align: center"></td>
    </tr>
    <tr>
        <td>7</td>
        <td>Prestasi yang di raih</td>
        <td colspan="5"><input type="text" name="prestasi"  style="border: 0; text-align: left"></td>
    </tr>
</table>
 <div class="form-group row">
    <label for="inputjk" class="col-sm-2 col-form-label">Informasi SMK Wikrama Garut dari</label>
  <div style="width: 500px;">
    <input type="radio" id="fam" name="informasi" value="family" >
    <label for="fam">Family</label><br>
    <input type="radio" id="web" name="informasi" value="website">
    <label for="web">Website</label><br>
    <input type="radio" id="tem" name="informasi" value="teman" >
    <label for="tem">Teman</label><br>
    <input type="radio" id="brosur" name="informasi" value="brosur">
    <label for="brosur">Brosur</label><br>
    <input type="radio" id="smp" name="informasi" value="smp" >
    <label for="smp">Smp</label><br>
    <input type="radio" id="facebook" name="informasi" value="facebook">
    <label for="facebook">Facebook</label><br>
    <input type="radio" id="guru" name="informasi" value="guru" >
    <label for="guru">Guru</label><br>
    <input type="radio" id="lainnya" name="informasi" value="lainnya">
    <label for="lainnya">Lainnya</label><br>
    </div>
  </div>
 <div class="col-xs-12 col-sm-12 col-md-12 text-center" style="margin-bottom: 10px; padding-top: 10px">
      <button type="submit" class="btn btn-primary">Submit</button>
      <input type="hidden" name="_token" value="{{ Session::token() }}"> 
</div>
</form>
   
      
@endsection