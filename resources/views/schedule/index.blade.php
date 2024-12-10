<x-app-layout>
    <x-slot name="header">
        <h2>
            {{ __('Histórico de Agendamentos') }}
        </h2>
    </x-slot>

    <body>
        
        <main>
            <section>

                <div>
                    <a href="/schedule/create">
                        Agendar Consulta
                    </a>
                </div>

                <article>
                    <h2>Agendamentos</h2>
                    <table class="minhatabela">
                        <thead>
                            <tr>
                                <th>Médico</th>
                                <th>Especialidade</th>
                                <th>Data</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($user->doctorAsParticipantSchedule as $schedule)

                            <tr>
                                <td>{{ $schedule->name }}</td>
                                <td>{{ $schedule->specialism }}</td>
                                <td>{{ $schedule->doctor?->name ?? 'Médico não atribuído' }}</td>
                                <td>{{ $schedule->ubs?->name ?? 'UBS não atribuída' }}</td>
                                <td>{{ Carbon\Carbon::parse($schedule->date)->format('d/m/Y') }}</td>
                                <td>{{ $schedule->status }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </article>

            </section>
        </main>
    </body>

</x-app-layout>