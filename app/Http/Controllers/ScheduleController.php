<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ScheduleController extends Controller
{
    public function index(){
        $schedules = Schedule::all();
        //$schedules = Schedule::where('user_id', '=' , Auth::id())->get();

        return view('schedule.index', compact('schedules'));
    }

    public function create(){
        return view('schedule.create');
    }

    public function store(Request $request){
        Schedule::create(
            [
                'user_id' => Auth::id(),
                'specialism' => $request->specialism,
                'status' => 'pendente',
            ]
            );
        return redirect('/schedule')->with('success', 'Agendamento criado com sucesso!');
    }

    public function edit($id){
        $schedule = Schedule::findOrFail($id);

        return view('schedule.edit', compact('schedules'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'doctor_id' => 'required|exists:doctors,id',
            'ubs_id' => 'required|exists:ubs,id',
            'date' => 'required'
        ]);

        $schedule = Schedule::findOrFail($id);

        $schedule->update([
            'doctor_id' => $request->doctor_id,
            'ubs_id' => $request->ubs_id,
            'date' => $request->date,
            'status' => 'confirmado'
        ]);

        return redirect('/schedule')->with('sucess', 'Agendamento confirmado!');
    }

    public function pending(){
        dd("chegou");
        
        $schedules = Schedule::where('status', 'pendente')->get();

        return view('schedule.pending', compact('schedules'));
    }
}
