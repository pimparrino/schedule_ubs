<x-app-layout>
    <x-slot  name="header">
        <h2>
            {{ __('Solicitações Pendentes') }}
        </h2>
    </x-slot>

    <body>
        
        <main>
            <section>
                <article>
                    <h2>Agendamentos Pendentes</h2>
                    <table class="tabelapendente">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Especialista</th>
                                <th>Médico</th>
                                <th>Ubs</th>
                                <th>Data</th>
                                <th>Status</th>
                                <th>Atualizar</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($schedules as $schedule)
                            <tr>
                                <td>{{ $schedule->id }}</td>
                                <td>{{ $schedule->specialism }}</td>
                                <td>{{ $schedule->doctor_id }}</td>
                                <td>{{ $schedule->ubs_id }}</td>
                                <td>{{ $schedule->date }}</td>
                                <td>{{ $schedule->status }}</td>
                                <td><a href="{{route('schedule.edit', $schedule->id)}}">Confirmar Agendamento</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </article>

            </section>
        </main>
    </body>

</x-app-layout>