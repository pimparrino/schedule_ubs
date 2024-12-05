<x-app-layout>
    <x-slot name="header">
        <h2 style="font-size: 1.5rem; font-weight: bold; text-align: center; color: #2a8c6b;">
            {{ __('Cadastrar um Médico') }}
        </h2>
    </x-slot>

    <body style="background: linear-gradient(180deg, #a8e2ca, #6fa9d6); font-family: 'Arial', sans-serif; margin: 0; padding: 0;">
        <main style="display: flex; justify-content: center; align-items: center; height: 100vh; padding: 1rem;">
            <section style="background: white; border-radius: 12px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); padding: 2rem; width: 100%; max-width: 500px;">
                <form action="/doctor/store" method="POST" style="display: flex; flex-direction: column; gap: 1rem;">
                    @csrf

                    <div>
                        <label for="name" style="font-weight: bold; color: #333;">Nome:</label>
                        <input type="text" name="name" id="name" placeholder="Digite o nome do médico" 
                               style="width: 100%; padding: 0.8rem; border: 1px solid #ccc; border-radius: 8px; font-size: 1rem;">
                    </div>

                    <div>
                        <label for="specialism" style="font-weight: bold; color: #333;">Especialidade:</label>
                        <input type="text" name="specialism" id="specialism" placeholder="Digite a especialidade"
                               style="width: 100%; padding: 0.8rem; border: 1px solid #ccc; border-radius: 8px; font-size: 1rem;">
                    </div>

                    <div>
                        <label for="crm" style="font-weight: bold; color: #333;">CRM:</label>
                        <input type="text" name="crm" id="crm" placeholder="Digite o CRM"
                               style="width: 100%; padding: 0.8rem; border: 1px solid #ccc; border-radius: 8px; font-size: 1rem;">
                    </div>

                    <div>
                        <label for="ubs_id" style="font-weight: bold; color: #333;">ID da UBS:</label>
                        <input type="number" name="ubs_id" id="ubs_id" placeholder="Digite o ID da UBS"
                               style="width: 100%; padding: 0.8rem; border: 1px solid #ccc; border-radius: 8px; font-size: 1rem;">
                    </div>

                    <div>
                        <input type="submit" value="Cadastrar" 
                               style="width: 100%; padding: 0.8rem; background: #2a8c6b; color: white; border: none; border-radius: 8px; font-size: 1rem; cursor: pointer; transition: background 0.3s;">
                        
                    </div>
                </form>
            </section>
        </main>
    </body>
</x-app-layout>
