<?php

namespace App\Http\Controllers;

use App\Models\Ubs;
use Illuminate\Http\Request;

class UbsController extends Controller
{
    public function index(){
        $ubs = Ubs::all();

        return view('ubs.index', compact('ubs'));
    }

    public function create(){
        return view('ubs.create');
    }

    public function store(Request $request){
        Ubs::create(
            [
                'name' => $request->name,
                'address' => $request->address,
                'phone' => $request->phone
            ]
            );
        return redirect('/ubs');
    }
}
