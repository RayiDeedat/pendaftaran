<?php
  
namespace App\Http\Controllers;
  
use App\Form;
use Illuminate\Http\Request;
  
class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('Forms.create');
    }
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Forms.create');
    }
  
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $radio1 = $request->input('jk');
        $radiob = $radio1;
        $combo1 = $request->input('agama');
        $combo2 = $request->input('tinggal');
        $combo3 = $request->input('agama_a');
        $combo4 = $request->input('agama_i');
        $combo5 = $request->input('agama_w');

        $form = \App\Form::create([
            'no_tes'=> $request->no_tes,
            'nama_l'=> $request->nama_l,
            'nama_p'=> $request->nama_p,
            'jk'=> $radiob,
            'ttl'=>$request->ttl,
            'agama'=> $request->agama,
            'cita_cita'=> $request->cita_cita,
            'hobby'=> $request->hobby,
            'anak_ke'=> $request->anak_ke,
            'saudara_k'=> $request->saudara_k,
            'saudara_t'=> $request->saudara_t,
            'saudara_angkat'=> $request->saudara_angkat,
            'bb'=> $request->bb,
            'tinggi'=> $request->tinggi,
            'goldar'=> $request->goldar,
            'alamat'=> $request->alamat,
            'rt'=> $request->rt,
            'rw'=> $request->rw,
            'kelurahan'=> $request->kelurahan,
            'kecamatan'=> $request->kecamatan,
            'kota'=> $request->kota,
            'provinsi'=> $request->provinsi,
            'kode_pos'=> $request->kode_pos,
            'telp_rumah'=> $request->telp_rumah,
            'email'=> $request->email,
            'tinggal'=> $request->tinggal,
            'tbc'=> $request->tbc,
            'malaria'=> $request->malaria,
            'chotipa'=> $request->chotipa,
            'cacar'=> $request->cacar,
            'lainnya'=> $request->lainnya,
            'kelainan'=> $request->kelainan,
            'nama_a'=> $request->nama_a,
            'ttl_a'=> $request->ttl_a,
            'pekerjaan_a'=> $request->pekerjaan_a,
            'pendidikan_a'=> $request->pendidikan_a,
            'agama_a'=> $request->agama_a,
            'wa_a'=> $request->wa_a,
            'nama_i'=> $request->nama_i,
            'ttl_i'=> $request->ttl_i,
            'pekerjaan_i'=> $request->pekerjaan_i,
            'pendidikan_i'=> $request->pendidikan_i,
            'agama_i'=> $request->agama_i,
            'wa_i'=> $request->wa_i,
            'nama_w'=> $request->nama_w,
            'ttl_w'=> $request->ttl_w,
            'pekerjaan_w'=> $request->pekerjaan_w,
            'pendidikan_w'=> $request->pendidikan_w,
            'hubungan_w'=> $request->hubungan_w,
            'agama_w'=> $request->agama_w,
            'wa_w'=> $request->wa_w,
            'email_w'=> $request->email_w,
            'pai_k7_s1'=> $request->pai_k7_s1,
            'pai_k7_s2'=> $request->pai_k7_s2,
            'pai_k8_s1'=> $request->pai_k8_s1,
            'pai_k8_s2'=> $request->pai_k8_s2,
            'pai_k9_s1'=> $request->pai_k9_s1,
            'indo_k7_s1'=> $request->indo_k7_s1,
            'indo_k7_s2'=> $request->indo_k7_s2,
            'indo_k8_s1'=> $request->indo_k8_s1,
            'indo_k8_s2'=> $request->indo_k8_s2,
            'indo_k9_s1'=> $request->indo_k9_s1,
            'inggris_k7_s1'=> $request->inggris_k7_s1,
            'inggris_k7_s2'=> $request->inggris_k7_s2,
            'inggris_k8_s1'=> $request->inggris_k8_s1,
            'inggris_k8_s2'=> $request->inggris_k8_s2,
            'inggris_k9_s1'=> $request->inggris_k9_s1,
            'mtk_k7_s1'=> $request->mtk_k7_s1,
            'mtk_k7_s2'=> $request->mtk_k7_s2,
            'mtk_k8_s1'=> $request->mtk_k8_s1,
            'mtk_k8_s2'=> $request->mtk_k8_s2,
            'mtk_k9_s1'=> $request->mtk_k9_s1,
            'ipa_k7_s1'=> $request->ipa_k7_s1,
            'ipa_k7_s2'=> $request->ipa_k7_s2,
            'ipa_k8_s1'=> $request->ipa_k8_s1,
            'ipa_k8_s2'=> $request->ipa_k8_s2,
            'ipa_k9_s1'=> $request->ipa_k9_s1,
            'ips_k7_s1'=> $request->ips_k7_s1,
            'ips_k7_s2'=> $request->ips_k7_s2,
            'ips_k8_s1'=> $request->ips_k8_s1,
            'ips_k8_s2'=> $request->ips_k8_s2,
            'ips_k9_s1'=> $request->ips_k9_s1,
            'prestasi'=>  $request->prestasi,
            'informasi'=> $request->informasi,
        ]);
    
        return view('Forms.success');
    }
    public function success(){
        return view('Forms.success');
    }
}