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
                'exam' => $request->exam,
                'date' => $request->date,
                'user_id' => Auth::id()
            ]
            );
        return redirect('/schedule');
    }
}
