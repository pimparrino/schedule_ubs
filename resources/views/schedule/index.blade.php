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
                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Exame</th>
                                <th>Data</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($schedules as $schedule)
                            <tr>
                                <td>{{ $schedule->id }}</td>
                                <td>{{ $schedule->exam }}</td>
                                <td>{{ $schedule->request_date }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </article>

            </section>
        </main>
    </body>

</x-app-layout>