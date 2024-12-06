<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                    @can('isAttendant')
                        <a href="/doctor">Listar Medicos</a>
                        <a href="/ubs">Listar UBS</a>
                    @endcan            

                    @can('isDoctor')
                        <h3>Conteudo Medico</h3>
                    @endcan


                    @can('isPatient')
                        <h3 class="mt-4 text-lg font-semibold">Solicitação de Agendamento de Consulta</h3>

                        <form method="POST" action="{{ route('schedule.store') }}">
                            @csrf
                            <div class="mt-4">
                                <label for="data" class="block text-sm font-medium text-gray-700">Data da Consulta</label>
                                <input type="date" id="data" name="data" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" />
                            </div>

                            <div class="mt-4">
                                <label for="hora" class="block text-sm font-medium text-gray-700">Hora da Consulta</label>
                                <input type="time" id="hora" name="hora" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" />
                            </div>

                            <div class="mt-4">
                                <label for="descricao" class="block text-sm font-medium text-gray-700">Descrição</label>
                                <textarea id="descricao" name="descricao" rows="3" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Descreva brevemente sua solicitação..."></textarea>
                            </div>

                            <div class="mt-6">
                                <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-black bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                    Solicitar Agendamento
                                </button>
                            </div>
                        </form>
                    @endcan
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
