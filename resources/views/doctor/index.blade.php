<x-app-layout>
    <x-slot name="header">
        <h2>
            {{ __('Lista de Médicos') }}
        </h2>
    </x-slot>

    <body>
        
        <main>
            <section>

                <div>
                    <a href="/doctor/create">
                        Cadastrar Médico
                    </a>
                </div>

                <article>
                    <h2>Médicos</h2>
                    <table class="minhatabela">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nome</th>
                                <th>Especialidade</th>
                                <th>Crm</th>
                                <th>Ubs</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($doctors as $doctor)
                            <tr>
                                <td>{{ $doctor->id }}</td>
                                <td>{{ $doctor->name }}</td>
                                <td>{{ $doctor->specialism }}</td>
                                <td>{{ $doctor->crm }}</td>
                                <td>{{ $doctor->ubs->name }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </article>

            </section>
        </main>
    </body>

</x-app-layout>