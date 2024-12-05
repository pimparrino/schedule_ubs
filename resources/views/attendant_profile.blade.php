@extends('layouts.app')

@section('content')
    <h1>Solicitações de Pacientes</h1>

    @foreach ($appointments as $appointment)
        <div>
            <p>Paciente: {{ $appointment->patient_name }}</p>
            <p>Status: {{ $appointment->status }}</p>
            <form method="POST" action="{{ route('appointments.approve', $appointment->id) }}">
                @csrf
                <button type="submit">Aprovar</button>
            </form>
        </div>
    @endforeach
@endsection

@foreach ($appointments as $appointment)
    <div>
        <p>Paciente: {{ $appointment->patient_name }}</p>
        <p>Data da Solicitação: {{ $appointment->requested_at }}</p>
        <p>Status: {{ $appointment->status }}</p>
        <form method="POST" action="{{ route('appointments.approve', $appointment->id) }}">
            @csrf
            <button type="submit">Aprovar</button>
        </form>
    </div>
@endforeach
