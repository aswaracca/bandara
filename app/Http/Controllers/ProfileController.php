<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\ProfileModel;
use File;

class ProfileController extends Controller
{
    public function viewIndex(){
		$data = ProfileModel::find(1);

		return view('admin.profil.index',compact('data'));
	}

	public function postProfil(Request $request){
		$this->validate($request, [
   			'nama' 		=> 'required|max:100',
   			'teks' 		=> 'required|max:1000',
   			'gambar' 	=> 'required',
        ]);

		$profil = ProfileModel::find(1);
		$profil->nama = $request->nama;
		$profil->teks = $request->teks;
		
		if($request->hasFile('gambar')){

	        	$filename = public_path('images/profil/'.$profil->gambar);
				File::delete($filename);

	        	$profil->gambar = date('Ymdhis').'.'.$request->gambar->getClientOriginalExtension();
		   		//upload image 
		   		$request->gambar->move(public_path('images/profil/'),$profil->gambar);
			}

		$profil->save();
        return redirect()->back()->with('pesan', 'Berhasil memperbaharui data !');
	}
	public function postKontak(Request $request){
		$this->validate($request, [
   			'email' 		=> 'required|max:50',
   			'telpon' 		=> 'required|max:20',
        ]);

		$profil = ProfileModel::find(1);
		$profil->email = $request->email;
		$profil->telpon = $request->telpon;
		
		$profil->save();
        return redirect()->back()->with('pesan', 'Berhasil memperbaharui data !');
	}
}
