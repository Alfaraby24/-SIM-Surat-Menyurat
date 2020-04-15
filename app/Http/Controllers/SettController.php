<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettController extends Controller
{
     public function index(request $request){
    	if($request->has('cari')){
    	$data_sett = \App\Sett::where('surat_masuk','LIKE','%'.$request->cari.'%')->get();	
    	}else{
    		$data_sett = \App\Sett::all();
    	}
    	return view('sett.index',['data_sett' => $data_sett]);
    }
    public function create(request $request){
    	\App\Sett::create($request->all()); 
    	return redirect('/sett')->with('berhasil','Data berhasil Disimpan');
    }
    public function edit($id){
        $sett = \App\Sett::find($id);
        return view('sett/edit', ['sett' => $sett]);
    }
    public function update(request $request, $id){
    	$sett = \App\Sett::find($id);
    	$sett->update($request->all());
    	return redirect('/sett')->with('berhasil','Data berhasil diupdate'); 
    }
    public function delete($id){
    	$sett = \App\Sett::find($id);
    	$sett->delete($sett);
    	return redirect('/sett'
    )->with('berhasil','Data Berhasil Terhapus');
    }
}
