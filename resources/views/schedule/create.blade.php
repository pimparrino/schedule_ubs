<x-app-layout>
    <x-slot name="header">
        <h2>
            {{ __('Criar um Agendamento') }}
        </h2>
    </x-slot>

    <body>
        <main>
            <section>

                <form action="/schedule/store" method="POST">
                    @csrf

                    <div>
                        <label for="specialism">Especialista:</label>
                        <input type="text" name="specialism" id="specialism" placeholder="Digite qual especialista deseja consultar(ex: dentista)">
                    </div>

                    <div>
                        <input type="submit" value="Enviar Solicitação">
                    </div>
                </form>


            </section>
        </main>
    </body>
</x-app-layout>