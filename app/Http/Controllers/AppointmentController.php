<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointmen; // Modelo de Solicitações
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppointmentController extends Controller
{
    public function pendingRequests()
    {
        // Busca todas as solicitações com status 'pendente'
        $appointments = Appointment::where('status', 'pending')->get();

        // Retorna a view com as solicitações pendentes
        return view('attendant_profile', compact('appointments'));
    }

    public function approveRequest($id)
    {
        $appointment = Appointment::findOrFail($id);
        $appointment->status = 'approved';
        $appointment->save();
    return redirect()->back()->with('success', 'Solicitação aprovada e mensagem enviada ao paciente!');


    return redirect()->route('attendant.requests')->with('success', 'Solicitação aprovada com sucesso!');
}

}

class Appointment extends Model
{
    use HasFactory;

    protected $fillable = [
        'patient_name',
        'status',
        'requested_at',
        // Outros campos relacionados à solicitação
    ];
}

