<x-app-layout>
    <x-slot name="header">
        <h2>
            {{ __('Lista de Ubs') }}
        </h2>
    </x-slot>

    <body>
        
        <main>
            <section>

                <div>
                    <a href="/ubs/create">
                        Cadastrar Ubs
                    </a>
                </div>

                <article>
                    <h2>Ubs</h2>
                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nome</th>
                                <th>Endereço</th>
                                <th>Telefone</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($ubs as $unidade)
                            <tr>
                                <td>{{ $unidade->id }}</td>
                                <td>{{ $unidade->name }}</td>
                                <td>{{ $unidade->address }}</td>
                                <td>{{ $unidade->phone }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </article>

            </section>
        </main>
    </body>

</x-app-layout>