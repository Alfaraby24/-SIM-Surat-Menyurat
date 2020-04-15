<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DisposisiController extends Controller
{
    public function index(request $request){
    	if($request->has('cari')){
    	$data_disposisi = \App\Disposisi::where('tujuan','LIKE','%'.$request->cari.'%')->get();	
    	}else{
    		$data_disposisi = \App\Disposisi::all();
    	}
    	return view('disposisi.index',['data_disposisi' => $data_disposisi]);
    }
    public function create(request $request){
    	\App\Disposisi::create($request->all()); 
    	return redirect('/disposisi')->with('berhasil','Data berhasil Disimpan');
    }
    public function edit($id){
        $disposisi = \App\Disposisi::find($id);
        return view('disposisi/edit', ['disposisi' => $disposisi]);
    }
    public function update(request $request, $id){
    	$disposisi = \App\Disposisi::find($id);
    	$disposisi->update($request->all());
    	return redirect('/disposisi')->with('berhasil','Data berhasil diupdate'); 
    }
    public function delete($id){
    	$disposisi = \App\Disposisi::find($id);
    	$disposisi->delete($disposisi);
    	return redirect('/disposisi')->with('berhasil','Data Berhasil Terhapus');
    }
}
