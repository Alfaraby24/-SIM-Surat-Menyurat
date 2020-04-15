<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuratkeluarController extends Controller
{
     public function index(request $request){
    	if($request->has('cari')){
    	$data_suratkeluar = \App\Suratkeluar::where('no_agenda','LIKE','%'.$request->cari.'%')->get();	
    	}else{
    		$data_suratkeluar = \App\Suratkeluar::all();
    	}
    	return view('suratkeluar.index',['data_suratkeluar' => $data_suratkeluar]);
    }
    public function create(request $request){
    	\App\Suratkeluar::create($request->all()); 
    	return redirect('/suratkeluar')->with('berhasil','Data berhasil Disimpan');
    }
    public function edit($id){
        $suratkeluar = \App\Suratkeluar::find($id);
        return view('suratkeluar/edit', ['suratkeluar' => $suratkeluar]);
    }
    public function update(request $request, $id){
    	$suratkeluar = \App\Suratkeluar::find($id);
    	$suratkeluar->update($request->all());
    	return redirect('/suratkeluar')->with('berhasil','Data berhasil diupdate'); 
    }
    public function delete($id){
    	$suratkeluar = \App\Suratkeluar::find($id);
    	$suratkeluar->delete($suratkeluar);
    	return redirect('/suratkeluar')->with('berhasil','Data Berhasil Terhapus');
    }
}
