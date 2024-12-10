<x-app-layout>
    <x-slot name="header">
        <h2 style="font-size: 1.5rem; font-weight: bold; text-align: center; color: #2a8c6b;">
            {{ __('Confirmar Agendamento') }}
        </h2>
    </x-slot>

    <body style="background: linear-gradient(180deg, #a8e2ca, #6fa9d6); font-family: 'Arial', sans-serif; margin: 0; padding: 0;">
        
        <main style="display: flex; justify-content: center; align-items: center; height: 100vh; padding: 1rem;">
            <section style="background: white; border-radius: 12px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); padding: 2rem; width: 100%; max-width: 500px;">

                <form action="{{route('schedule.update', $schedule->id)}}" method="POST" style="display: flex; flex-direction: column; gap: 1rem;">
                    @csrf
                    @method('PUT')
                    
                    <label for="doctor_id" style="font-weight: bold; color: #333;">Médico</label>
                    <select name="doctor_id" id="doctor_id" class="form-control w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" >
                        <option value="">Selecione um médico</option>
                        @foreach($doctors as $doctor)
                            <option value="{{ $doctor->id }}" {{ $schedule->doctor_id == $doctor->id ? 'selected' : '' }}>
                                {{ $doctor->name }}
                            </option>
                         @endforeach
                    </select>

                    <label for="ubs_id" style="font-weight: bold; color: #333;">UBS</label>
                    <select name="ubs_id" id="ubs_id" class="form-control w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        <option value="">Selecione uma UBS</option>
                        @foreach($ubsList as $ubs)
                            <option value="{{ $ubs->id }}" {{ $schedule->ubs_id == $ubs->id ? 'selected' : '' }}>
                                {{ $ubs->name }}
                            </option>
                        @endforeach
                    </select>

                    <div>
                        <label for="date" style="font-weight: bold; color: #333;">Data da Consulta:</label>
                        <input type="date" name="date" id="date" class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    </div>

                    <div>
                        <input type="submit" value="Confirmar Agendamento"
                        style="width: 100%; padding: 0.8rem; background: #2a8c6b; color: white; border: none; border-radius: 8px; font-size: 1rem; cursor: pointer; transition: background 0.3s;">
                    </div>
                </form>
            </section>
        </main>
    </body>
</x-app-layout>