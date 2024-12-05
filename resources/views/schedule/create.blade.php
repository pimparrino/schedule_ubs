<x-app-layout>
    <x-slot name="header">
        <h2>
            {{ __('Criar um Agendamento') }}
        </h2>
    </x-slot>

    <body>
        <main>
            <section>

                <form action="/schedule.store" method="POST">
                    @csrf

                    <div>
                        <label for="exam">Exame:</label>
                        <input type="text" name="exam" id="exam">
                    </div>

                    <div>
                        <label for="request_date">Data:</label>
                        <input type="date" name="date" id="date">
                    </div>

                    <div>
                        <input type="submit" value="Enviar Solicitação">
                    </div>
                </form>


            </section>
        </main>
    </body>
</x-app-layout>