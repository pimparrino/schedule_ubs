<x-app-layout>
    <!-- Header -->
    <x-slot name="header">
        <div class="bg-gradient-to-r from-blue-500 to-green-500 rounded-lg py-4 px-6 shadow-lg">
            <h2 class="text-3xl font-bold text-white text-center">
                {{ __('Criar um Agendamento') }}
            </h2>
        </div>
    </x-slot>

    <!-- Conteúdo Principal -->
    <div class="bg-gray-100 min-h-screen flex items-center justify-center py-10">
        <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-lg">
            <h3 class="text-2xl font-semibold text-gray-800 mb-6 text-center">
                Selecione a Especialidade
            </h3>

            <!-- Formulário Dinâmico -->
            <form action="{{ route('schedule.store') }}" method="POST" class="space-y-6">
                @csrf

                <!-- Seleção do Médico -->
                <div>
                    <div>
                        <label for="specialism">
                            Especialista:
                        </label>
                        <input type="text" name="specialism" id="specialism" placeholder="Digite qual especialista deseja consultar(ex: dentista)" class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    </div>
                </div>

                <!-- Botão de Envio -->
                <div class="flex justify-center">
                    <button type="submit"
                        class="w-full bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-lg transition duration-300 ease-in-out shadow-lg">
                        Enviar Solicitação
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
