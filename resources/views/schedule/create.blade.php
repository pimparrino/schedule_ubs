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
                Selecione a UBS e o Médico
            </h3>

            <!-- Formulário Dinâmico -->
            <form action="{{ route('schedule.store') }}" method="POST" class="space-y-6">
                @csrf

                <!-- Seleção da UBS -->
                <div>
                    <label for="ubs" class="block text-gray-700 font-medium mb-2">
                        Unidade Básica de Saúde (UBS):
                    </label>
                    <select name="ubs" id="ubs" 
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" 
                        required>
                        <option value="" disabled selected>Selecione uma UBS</option>
                        @foreach ($ubsList as $ubs)
                            <option value="{{ $ubs->id }}">{{ $ubs->name }}</option>
                        @endforeach
                    </select>
                </div>

                <!-- Seleção do Médico -->
                <div>
                    <label for="doctor" class="block text-gray-700 font-medium mb-2">
                        Médico:
                    </label>
                    <select name="doctor" id="doctor" 
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" 
                        required>
                        <option value="" disabled selected>Selecione um Médico</option>
                        @foreach ($doctors as $doctor)
                            <option value="{{ $doctor->id }}">{{ $doctor->name }} - {{$doctor->specialism }} </option>
                        @endforeach
                    </select>
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
