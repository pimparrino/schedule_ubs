<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Chuchu') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <style>
        .logo img {
            justify-content: center; /* Centraliza horizontalmente */
            align-items: center;
            max-width: 150px;
            height: auto;
        }

        .minhatabela {
    background-color: #f9f9f9; /* Cor de fundo clara e neutra */
    border-collapse: collapse; /* Remove os espaços entre bordas */
    width: 100%; /* Preenche a largura do container */
    font-family: 'Arial', sans-serif; /* Fonte moderna e clean */
    font-size: 1rem; /* Tamanho de fonte padrão */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Sombra sutil para dar profundidade */
    border-radius: 8px; /* Bordas arredondadas */
    overflow: hidden; /* Para bordas arredondadas funcionarem bem */
}

/* Estilização das células */
.minhatabela th,
.minhatabela td {
    padding: 1rem; /* Espaçamento interno para mais conforto visual */
    text-align: left; /* Alinha o conteúdo à esquerda */
    border-bottom: 1px solid #ddd; /* Linha de divisão entre as linhas */
}

/* Estilo para cabeçalho */
.minhatabela th {
    background-color: #2a8c6b; /* Cor de fundo do cabeçalho */
    color: #ffffff; /* Texto branco para contraste */
    font-weight: bold; /* Destaca o texto */
    text-transform: uppercase; /* Deixa o texto em maiúsculas */
}

/* Estilo para linhas alternadas */
.minhatabela tr:nth-child(even) {
    background-color: #f3f3f3; /* Fundo sutil para alternar */
}

/* Efeito hover nas linhas */
.minhatabela tr:hover {
    background-color: #e0f7e8; /* Destaque quando o mouse passa */
    transition: background-color 0.3s ease; /* Suaviza a transição */
}

    </style>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @isset($header)
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
