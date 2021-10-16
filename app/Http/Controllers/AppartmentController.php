<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreApartmentRequest;
use App\Models\Apartment;
use Illuminate\Http\Request;

class AppartmentController extends Controller
{
    public function getForm(){
        return view('admin/form');
    }

    public function insertDB(StoreApartmentRequest $request){
        $apartment = new Apartment($request->all());
        $apartment->save();
        return view('admin/form');
    }

    public function getList(){
          return view('admin/table',[
               'list' =>Apartment::WHERE('status','!=',-1)->get()
          ]);
    }
}
