<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\SurveyModel;

class SurveyController extends Controller
{
    public function viewIndex(){
    	$survey = SurveyModel::all();

    	return view('admin.survey.index',compact('survey'));
    }

    public function viewAddsurvey(){
    	return view('admin.survey.add');
    }
    	public function postsurvey(Request $request){
	    	// give image uploded a name with extension
    		$this->validate($request, [
	   			'nama' 		=> 'required|max:100',
	            'kategori' 	=> 'required',
	            'map' 		=> 'required',
	            'logo' 		=> 'required|image|mimes:jpeg,png,jpg,gif,svg,bmp,ico|max:2048',
	   			'status' 	=> 'required',
	        ]);

	        $survey = new surveyModel;

	        $survey->nama 	= ucwords($request->nama);
	        $survey->status 	= $request->status;
	        $survey->kategori 	= $request->kategori;
	        $survey->lihat 	= '0';


			$survey->save();
	   		// save to databases

	   		return redirect('administrator/survey')->with('pesan', 'Data survey telah ditambahkan !');
	    }

	public function viewEditsurvey($id){
		$detail = surveyModel::find($id);
		return view('admin.survey.edit',compact('detail'));
	}

		public function postEditsurvey(Request $request){
			$this->validate($request, [
	   			'id_survey' 	=> 'required|numeric',
	   			'nama' 		=> 'required|max:100',
	   			'kategori' 	=> 'required',
	   			'status' 	=> 'required',
	        ]);


	   		$survey = surveyModel::find($request->id_survey);

	        $survey->nama 	= $request->nama;
	        $survey->status 	= $request->status;
	        $survey->kategori 	= $request->kategori;

			$survey->save();
			return redirect('administrator/survey')->with('pesan','Data berhasil diperbaharui');
		}

	public function viewDeletesurvey($id){
		return view('admin.survey.delete',compact('id'));
	}
	public function deletesurvey($id){
		$survey 	= surveyModel::find($id);
		$survey->delete();
		return redirect('administrator/survey')->with('pesan','Data berhasil dihapus');
	}
}
