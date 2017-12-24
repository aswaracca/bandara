<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\ProfileModel;
use App\Model\TenanModel;
use App\Model\BeritaModel;
use App\Model\SurveyModel;

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

    public function viewJadwal(){
        return view('homepage.jadwal');
    }

    public function viewSurvey(){
        $survey = SurveyModel::all();
        return view('homepage.survey',compact('survey'));
    }
        public function klikSurvey($id,$tanda){
            $profil = ProfileModel::find(1);
            $profil->suka = $profil->suka+1;
            $profil->save();
            return $tanda;
        }

    public function viewProfil(){
        return view('homepage.profil');
    }

    public function viewPromo(){
        return view('homepage.promo');
    }
    public function viewDetailPromo($id){
        return view('homepage.promo-detail');
    }
    public function viewContact(){
        return view('homepage.contact');
    }

}
