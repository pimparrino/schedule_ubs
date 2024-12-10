<x-app-layout>
    <!-- Header Slot -->
    <x-slot name="header">
        <div class="bg-gradient-to-r from-green-500 to-blue-600 rounded-lg shadow-lg py-6 px-4">
            <h2 class="text-3xl font-bold text-white text-center">
                {{ __('Dashboard') }}
            </h2>
        </div>
    </x-slot>

    <!-- Main Content -->
    <div class="py-10 bg-gray-50 min-h-screen">
        <div class="container mx-auto px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

                <!-- Conteúdo para Atendentes -->
                @can('isAttendant')
                <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <div class="bg-blue-500 text-white rounded-full p-3">
                                📋
                            </div>
                            <h3 class="ml-4 text-xl font-bold text-gray-800">Atendente</h3>
                        </div>
                        <ul class="space-y-2">
                            <li>
                                <a href="/doctor" class="text-blue-600 hover:text-blue-800 flex items-center">
                                    ➡️ Listar Médicos
                                </a>
                            </li>
                            <li>
                                <a href="/ubs" class="text-blue-600 hover:text-blue-800 flex items-center">
                                    ➡️ Listar UBS
                                </a>
                            </li>
                            <li>
                                <a href="/schedules/pending" class="text-blue-600 hover:text-blue-800 flex items-center">
                                    ➡️ Verificar Agendamentos Pendentes
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
                @endcan

                <!-- Conteúdo para Médicos -->
                @can('isDoctor')
                <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <div class="bg-green-500 text-white rounded-full p-3">
                                🩺
                            </div>
                            <h3 class="ml-4 text-xl font-bold text-gray-800">Médico</h3>
                        </div>
                        <p class="text-gray-600 leading-relaxed">
                            Acesse conteúdos e funcionalidades exclusivas para médicos no sistema.
                        </p>
                    </div>
                </div>
                @endcan

                <!-- Conteúdo para Pacientes -->
                @can('isPatient')
                <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <div class="bg-yellow-500 text-white rounded-full p-3">
                                👤
                            </div>
                            <h3 class="ml-4 text-xl font-bold text-gray-800">Paciente</h3>
                        </div>
                        <ul class="space-y-2">
                            <li>
                                <a href="/schedule" class="text-blue-600 hover:text-blue-800 flex items-center">
                                    ➡️ Lista de Agendamentos
                                </a>
                            </li>
                            <li>
                                <a href="/schedule/create" class="text-blue-600 hover:text-blue-800 flex items-center">
                                    ➡️ Solicitar um Agendamento
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                @endcan

            </div>
        </div>
    </div>
</x-app-layout>
