<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Ubs;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function index(){
        $doctors = Doctor::all();

        return view('doctor.index', compact('doctors'));
    }

    public function create(){
        return view('doctor.create');
    }

    public function store(Request $request){
        Doctor::create(
            [
                'name' => $request->name,
                'specialism' => $request->specialism,
                'crm' => $request->crm,
                'ubs_id' => $request->ubs_id
            ]
            );
        return redirect('/doctor');
    }
}
