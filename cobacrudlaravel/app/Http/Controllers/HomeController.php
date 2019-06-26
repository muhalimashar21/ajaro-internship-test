<?php

namespace App\Http\Controllers;
use App\ArtikelModel;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
    	$data = array(
    		'artikel'=> ArtikelModel::all()
    	);
    	return View('home', $data);
    }

    public function detail($id = 0){
    	$data = array(
    		'artikel' =>ArtikelModel::find($id)
    	);
    	return View('detail', $data);
    }

    public function tambah (Request $request){
    	if($request->isMethod('post')){
    	$data = array(
    		'kode' => $request->input('kode'),
    		'nama' => $request->input('nama'),
    		'deskripsi' => $request->input('deskripsi'),
    		'stok' => $request->input('stok'),
    		'harga' => $request->input('harga'),
    		'berat' => $request->input('berat')
    	);
    	$tambah = ArtikelModel::insert($data);
    	if($tambah){
    		echo 'Tambah Barang Berhasil';
    	}else{
    		echo 'Tambah Barang GAGAL';
    	}
    }
    return View('form');
}

	public function ubah ($id= 0, Request $request){
		$artikel = ArtikelModel::find($id);
		if($request->isMethod('post')){
    		$artikel->kode = $request->input('kode');
    		$artikel->nama = $request->input('nama');
    		$artikel->deskripsi = $request->input('deskripsi');
    		$artikel->stok = $request->input('stok');
    		$artikel->harga = $request->input('harga');
    		$artikel->berat = $request->input('berat');
    		$ubah = $artikel->save();
    	if($ubah){
    		echo 'Ubah Barang Berhasil';
    	}else{
    		echo 'Ubah Barang GAGAL';
    	}
    }
    return View('form', array(
    	'artikel' => $artikel
    ));
	}

	public function hapus($id){
		$artikel = ArtikelModel::find($id);
		$hapus = $artikel->delete();
		if ($hapus) {
			echo "<script>alert('Hapus Barang Berhasil')</script>";
			echo '<meta http-equiv="refresh" content="0; url='
				. url('/').'">';
		}
	}
}