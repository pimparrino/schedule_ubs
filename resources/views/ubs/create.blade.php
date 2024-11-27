<x-app-layout>
    <x-slot name="header">
        <h2>
            {{ __('Cadastrar uma Ubs') }}
        </h2>
    </x-slot>

    <body>
        <main>
            <section>

                <form action="/ubs/store" method="POST">
                    @csrf

                    <div>
                        <label for="name">Nome:</label>
                        <input type="text" name="name" id="name">
                    </div>

                    <div>
                        <label for="address">Endereço:</label>
                        <input type="text" name="address" id="address">
                    </div>

                    <div>
                        <label for="phone">Telefone:</label>
                        <input type="text" name="phone" id="phone">
                    </div>

                    <div>
                        <input type="submit" value="Cadastrar">
                    </div>
                </form>


            </section>
        </main>
    </body>
</x-app-layout>