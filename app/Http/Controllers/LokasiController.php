<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lokasi;


class LokasiController extends Controller
{
    //
    public function index(){

        $lokasi=Lokasi::all();
        //$lokasi=Lokasi::paginate(3); //by default 15
       // dd($trainings);  //cara debug dump & die
       return view('lokasi.index', compact('lokasi'));
       //recources/views/cars/index.blade.php

    }

    public function create(){
        return view ('lokasi.create');
    }

    public function store(Request $request){
        //dd($request->all());
        //store all data from form to car table
        // $lokasi=new Lokasi();
        // $lokasi->save($request->only('Kod','NamaLokasi','CawKod'));

        $lokasi=new Lokasi();
        $lokasi->Kod=$request->Kod;
        $lokasi->NamaLokasi=$request->NamaLokasi;
        $lokasi->CawKod=$request->CawKod;
        $lokasi->save();

        //return redirect()->back();
        return redirect()
        ->route('lokasi:list')
        ->with (
            ['alert-type' => 'alert-primary',
            'alert'=>'Your location info saved']);
        //return view('cars.store');
         //recources/views/cars/create.blade.php
    }

}
