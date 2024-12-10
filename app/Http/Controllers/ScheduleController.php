<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Schedule;
use App\Models\Ubs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ScheduleController extends Controller
{
    public function index(){
        $schedules = Schedule::all();
        //$schedules = Schedule::where('user_id', '=' , Auth::id())->get();
        $user = Auth::user();
        //dd($user->ubsAsParticipantSchedule);

        return view('schedule.index', compact(['schedules','user']));
    }

    public function create()
{
    $ubsList = Ubs::all(); // Buscar UBS do banco
    $doctors = Doctor::all(); // Buscar Médicos do banco

    return view('schedule.create', compact('ubsList', 'doctors'));

    }

    public function store(Request $request)
    {
        // Valida os dados recebidos
        $validated = $request->validate([
            'ubs' => 'required|exists:ubs,id',
            'doctor' => 'required|exists:doctors,id',
        ]);


        
        Schedule::create(
            [
                'user_id' => Auth::user()->id,
                'doctor_id' => $request->doctor,
                'ubs_id' => $request->ubs
            ]
            );
        
       // $user = Auth::user();
       // $user->doctorAsParticipantSchedule->attach($request->doctor, ['ubs_id'=>$request->ubs]);

        return redirect()->route('schedule.index')->with('success', 'Agendamento criado com sucesso!');
    }

    public function edit($id){
        $schedule = Schedule::findOrFail($id);

        return view('schedule.edit', compact('task'));
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
        $schedules = Schedule::where('status', 'pendente')->get();

        return view('schedule.pending', compact('schedules'));
    }
}
