<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KlarifikasiController extends Controller
{
    public function index(request $request){
    	if($request->has('cari')){
    	$data_klarifikasi = \App\Klarifikasi::where('tujuan','LIKE','%'.$request->cari.'%')->get();	
    	}else{
    		$data_klarifikasi = \App\Klarifikasi::all();
    	}
    	return view('klarifikasi.index',['data_klarifikasi' => $data_klarifikasi]);
    }
    public function create(request $request){
    	\App\Klarifikasi::create($request->all()); 
    	return redirect('/klarifikasi')->with('berhasil','Data berhasil Disimpan');
    }
    public function edit($id){
        $klarifikasi = \App\Klarifikasi::find($id);
        return view('klarifikasi/edit', ['klarifikasi' => $klarifikasi]);
    }
    public function update(request $request, $id){
    	$klarifikasi = \App\Klarifikasi::find($id);
    	$klarifikasi->update($request->all());
    	return redirect('/klarifikasi')->with('berhasil','Data berhasil diupdate'); 
    }
    public function delete($id){
    	$klarifikasi = \App\Klarifikasi::find($id);
    	$klarifikasi->delete($klarifikasi);
    	return redirect('/klarifikasi')->with('berhasil','Data Berhasil Terhapus');
    }
}
