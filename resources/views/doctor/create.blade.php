<x-app-layout>
    <x-slot name="header">
        <h2>
            {{ __('Cadastrar um Médico') }}
        </h2>
    </x-slot>

    <body>
        <main>
            <section>

                <form action="/doctor/store" method="POST">
                    @csrf

                    <div>
                        <label for="name">Nome:</label>
                        <input type="text" name="name" id="name">
                    </div>

                    <div>
                        <label for="specialism">Especialidade:</label>
                        <input type="text" name="specialism" id="specialism">
                    </div>

                    <div>
                        <label for="crm">Crm:</label>
                        <input type="text" name="crm" id="crm">
                    </div>

                    <div>
                        <label for="ubs_id">ID da Ubs:</label>
                        <input type="number" name="ubs_id" id="ubs_id">
                    </div>

                    <div>
                        <input type="submit" value="Cadastrar">
                    </div>
                </form>


            </section>
        </main>
    </body>
</x-app-layout>