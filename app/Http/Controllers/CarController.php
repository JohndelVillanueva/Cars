<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index(){

        $data = ['Honda','BMW','Mitsubishi'];
        $total = count($data);

        return view('cars.index',[
            'cars' => $data,
            'totalCars'=> $total
        ]);
    }
}
