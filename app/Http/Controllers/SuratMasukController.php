<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuratMasukController extends Controller
{
    public function index(request $request){
    	if($request->has('cari')){
    	$data_surat_masuk = \App\Suratmasuk::where('surat_masuk','LIKE','%'.$request->cari.'%')->get();	
    	}else{
    		$data_surat_masuk = \App\Suratmasuk::all();
    	}
    	return view('suratmasuk.index',['data_surat_masuk' => $data_surat_masuk]);
    }
    public function create(request $request){
    	\App\Suratmasuk::create($request->all()); 
    	return redirect('/surat_masuk')->with('berhasil','Data berhasil Disimpan');
    }
    public function edit($id){
        $surat_masuk = \App\Suratmasuk::find($id);
        return view('suratmasuk/edit', ['surat_masuk' => $surat_masuk]);
    }
    public function update(request $request, $id){
    	$surat_masuk = \App\Suratmasuk::find($id);
    	$surat_masuk->update($request->all());
    	return redirect('/surat_masuk')->with('berhasil','Data berhasil diupdate'); 
    }
    public function delete($id){
    	$surat_masuk = \App\Suratmasuk::find($id);
    	$surat_masuk->delete($surat_masuk);
    	return redirect('/surat_masuk')->with('berhasil','Data Berhasil Terhapus');
    }
}
