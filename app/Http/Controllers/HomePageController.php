<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\ProfileModel;
use App\Model\TenanModel;
use App\Model\BeritaModel;

class HomePageController extends Controller
{
    public function viewBeranda(){
        $profil = ProfileModel::find(1);
        $news = BeritaModel::take(3)->get();
        return view('homepage.beranda',compact('news','profil'));
    }

    public function viewTenan($kategori){
        if($kategori == 'all')
            $data = TenanModel::where('status','show')->orderBy('nama','asc')->get();
        elseif($kategori !='all')
            $data = TenanModel::where('status','show')->where('kategori',$kategori)->orderBy('nama','asc')->get();
            
        return view('homepage.tenan',compact('data'));
    }
        public function populerTenan($id){
            $tenan = TenanModel::find($id);

            $tenan->lihat = $tenan->lihat+1;
            $tenan->save();
            return 'save';
        }

    public function viewProfil(){
        $data = ProfileModel::find(1);
        $news = BeritaModel::take(3)->get();
        return view('homepage.profil',compact('data','news'));
    }
    public function viewJadwal(){
        $profil = ProfileModel::find(1);
        $news = BeritaModel::take(3)->get();
        return view('homepage.jadwal',compact('news','profil'));
    }

    public function viewBerita($id){
        $profil = ProfileModel::find(1);
        $data = BeritaModel::find($id);
        $news = BeritaModel::take(3)->get();
        return view('homepage.berita',compact('data','news','profil'));
    }

    public function suka(){
        $profil = ProfileModel::find(1);
        $profil->suka = $profil->suka+1;
        $profil->save();
    }
    public function tidakSuka(){
        $profil = ProfileModel::find(1);
        $profil->tdk_suka = $profil->tdk_suka+1;
        $profil->save();   
    }

}
