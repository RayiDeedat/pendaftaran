<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forms', function (Blueprint $table) {
            $table->bigIncrements('no_pendaftaran');
            $table->integer('no_tes');
            $table->string('nama_l');
            $table->string('nama_p');
            $table->char('jk',1);
            $table->string('ttl');
            $table->string('agama');
            $table->string('cita-cita');
            $table->string('hobby');
            $table->char('anak_ke',2);
            $table->char('saudara_k',2);
            $table->char('saudara_t',2);
            $table->char('saudara_angkat',2);
            $table->char('bb',3);
            $table->char('tinggi',3);
            $table->char('goldar',1);
            $table->string('alamat');
            $table->char('rt',2);
            $table->char('rw',2);
            $table->string('kelurahan');
            $table->string('kecamatan');
            $table->string('kota');
            $table->string('provinsi');
            $table->char('kode_pos',5);
            $table->char('telp_rumah',13);
            $table->string('email');
            $table->string('tinggal');
            $table->string('tbc');
            $table->string('malaria');
            $table->string('chotipa');
            $table->string('cacar');
            $table->string('lainnya');
            $table->string('kelainan');
            $table->string('nama_a');
            $table->string('ttl_a');
            $table->string('pekerjaan_a');
            $table->string('pendidikan_a');
            $table->string('agama_a');
            $table->string('wa_a');
            $table->string('nama_i');
            $table->string('ttl_i');
            $table->string('pekerjaan_i');
            $table->string('pendidikan_i');
            $table->string('agama_i');
            $table->string('wa_i');
            $table->string('nama_w');
            $table->string('ttl_w');
            $table->string('pekerjaan_w');
            $table->string('pendidikan_w');
            $table->string('hubungan_w');
            $table->string('agama_w');
            $table->string('wa_w');
            $table->string('email_w');
            $table->char('pai_k7_s1',3);
            $table->char('pai_k7_s2',3);
            $table->char('pai_k8_s1',3);
            $table->char('pai_k8_s2',3);
            $table->char('pai_k9_s1',3);
            $table->char('indo_k7_s1',3);
            $table->char('indo_k7_s2',3);
            $table->char('indo_k8_s1',3);
            $table->char('indo_k8_s2',3);
            $table->char('indo_k9_s1',3);
            $table->char('inggris_k7_s1',3);
            $table->char('inggris_k7_s2',3);
            $table->char('inggris_k8_s1',3);
            $table->char('inggris_k8_s2',3);
            $table->char('inggris_k9_s1',3);
            $table->char('mtk_k7_s1',3);
            $table->char('mtk_k7_s2',3);
            $table->char('mtk_k8_s1',3);
            $table->char('mtk_k8_s2',3);
            $table->char('mtk_k9_s1',3);
            $table->char('ipa_k7_s1',3);
            $table->char('ipa_k7_s2',3);
            $table->char('ipa_k8_s1',3);
            $table->char('ipa_k8_s2',3);
            $table->char('ipa_k9_s1',3);
            $table->char('ips_k7_s1',3);
            $table->char('ips_k7_s2',3);
            $table->char('ips_k8_s1',3);
            $table->char('ips_k8_s2',3);
            $table->char('ips_k9_s1',3);     
            $table->string('prestasi');
            $table->string('informasi');        
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('forms');
    }
}
