<x-app-layout>
    <x-slot>
        <h2>{{ __('Confirmar Agendamento') }}</h2>
    </x-slot>

    <body>
        
        <main>
            <section>

                <form action="{{route('schedule.update', $schedule->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    
                    <div>
                        <label for="doctor_id">ID do Médico:</label>
                        <input type="number" name="doctor_id" id="doctor_id" placeholder="Digite o ID do Médico">
                    </div>

                    <div>
                        <label for="ubs_id">ID da UBS:</label>
                        <input type="number" name="ubs_id" id="ubs_id" placeholder="Digite o ID da UBS">
                    </div>

                    <div>
                        <label for="date">Data da Consulta:</label>
                        <input type="date" name="date" id="date">
                    </div>

                    <div>
                        <input type="date" value="Confirmar Agendamento">
                    </div>
                </form>
            </section>
        </main>
    </body>
</x-app-layout>