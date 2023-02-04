<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function viewDashboard(){
        return view('dashboard.index');
    }

    public function formpemeriksaan(){
        return view('dashboard.form');
    }

    public function DataFormPemeriksaan(Request $request){
        $allData = $request->validate([
            'nama_pasien' => 'required|string',
            'gender_pasien' => 'required|string',
            'umur_pasien' => 'required|string'
        ]);

        $kategori =  [
            'hematologi' => $request->hematologi,
            'glukosa_darah' => $request->glukosa_darah,
            'lemak' => $request->lemak,
            'ginjal' => $request->ginjal,
            'elektrolit' =>   $request->elektrolit,
            'hati' => $request->hati,
            'urine' =>  $request->urine,
            'feses' => $request->feses,
            'mikrobiologi' => $request->mikrobiologi,
            'imunologi' => $request->imunologi,  
        ];
        return view('dashboard.tabel',[
            'data' => $request,
            'kategori' => $kategori
        ]);
    }
}
