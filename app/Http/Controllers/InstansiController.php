<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InstansiController extends Controller
{
    public function index(request $request){
    	if($request->has('cari')){
    	$data_instansi = \App\Instansi::where('tujuan','LIKE','%'.$request->cari.'%')->get();	
    	}else{
    		$data_instansi = \App\Instansi::all();
    	}
    	return view('instansi.index',['data_instansi' => $data_instansi]);
    }
    public function create(request $request){
    	\App\Instansi::create($request->all()); 
    	return redirect('/instansi')->with('berhasil','Data berhasil Disimpan');
    }
    public function edit($id){
        $instansi = \App\Instansi::find($id);
        return view('instansi/edit', ['instansi' => $instansi]);
    }
    public function update(request $request, $id){
    	$instansi = \App\Instansi::find($id);
    	$instansi->update($request->all());
    	return redirect('/instansi')->with('berhasil','Data berhasil diupdate'); 
    }
    public function delete($id){
    	$instansi = \App\Instansi::find($id);
    	$instansi->delete($instansi);
    	return redirect('/instansi')->with('berhasil','Data Berhasil Terhapus');
    }
}
