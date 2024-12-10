<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sua UBS Online</title>
    <style>
        /* Estilo geral */
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(to bottom, #bef4ca, #8cb5f9);
            color: #333;
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem 2rem;
            background-color: linear-gradient(to bottom, #7afc97, #8cb5f9);
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .logo img {
            justify-content: center; /* Centraliza horizontalmente */
            align-items: center;
            max-width: 150px;
            height: auto;
        }

        nav a {
            margin-left: 1rem;
            text-decoration: none;
            color: #333;
            padding: 0.5rem 1rem;
            border-radius: 5px;
            transition: background 0.3s;
        }

        nav a:hover {
            background-color: #2e4d5b;
            color: #fff;
        }

        .container {
            text-align: center;
            padding: 2rem;
        }

        .headline {
            font-size: 2.5rem;
            font-weight: bold;
            color: #ffffff;
            margin: 1rem 0;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3); /* Sombra suave */
        }

        .description {
            background: #2e4d5b; /* Fundo elegante e contrastante */
            color: #ffffff; /* Cor do texto */
            border-radius: 12px; /* Bordas arredondadas */
            padding: 1.5rem; /* Espaçamento interno */
            max-width: 600px; /* Largura máxima */
            margin: 1rem auto; /* Centraliza horizontalmente */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2); /* Sombra suave */
            transition: transform 0.3s ease, box-shadow 0.3s ease; /* Transições para efeitos */
        }

        /* Efeito ao passar o mouse */
        .description:hover {
            transform: translateY(-5px); /* Move levemente para cima */
            box-shadow: 0 8px 12px rgba(0, 0, 0, 0.3); /* Aumenta a sombra */
        }

        /* Estilo do texto */
        .description p {
            font-size: 1rem; /* Tamanho da fonte */
            line-height: 1.6; /* Espaçamento entre linhas */
            color: #d4e4ea; /* Cor do texto levemente mais clara */
        }


        .mvv-section {
            background color: #8cb5f9;
            padding: 2rem;
            border-top: 2px solid #e0e0e0;
        }

        .mvv-section h2 {
            font-size: 1.8rem;
            margin-bottom: 1rem;
            color: #333;
        }

        .mvv-item {
            margin-bottom: 1.5rem;
        }

        .mvv-item h3 {
            font-size: 1.5rem;
            color: #2e4d5b;
        }

        .mvv-item p {
            color: #555;
        }

        footer {
            background: #2e4d5b;
            color: #fff;
            text-align: center;
            padding: 1rem;
            margin-top: 2rem;
        }

        /* Estilo geral da seção */
        .mvv-section {
            text-align: center;
            padding: 2rem 1rem;
            background-color: #f9f9f9; /* Cor de fundo suave */
            color: #333; /* Cor do texto */
            font-family: 'Arial', sans-serif;
        }

        .mvv-title {
            font-size: 2rem;
            margin-bottom: 1.5rem;
            color: #007BFF; /* Cor destaque para o título */
        }

        /* Container flexível para itens */
        .mvv-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 1.5rem; /* Espaço entre os itens */
        }

        /* Estilo individual dos itens */
        .mvv-item {
            background: #fff;
            border: 1px solid #ddd; /* Borda leve */
            border-radius: 8px;
            padding: 1.5rem;
            max-width: 300px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Sombra suave */
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }   

        /* Efeito ao passar o mouse */
        .mvv-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 10px rgba(0, 0, 0, 0.15);
        }

        .mvv-item h3 {
            font-size: 1.5rem;
            margin-bottom: 1rem;
            color: #007BFF;
        }

        .mvv-item p {
            font-size: 1rem;
            line-height: 1.6;
            color: #555;
        }

        /* Estilo para a imagem */
        .mockup img {
            justify-content: center; /* Centraliza horizontalmente */
            align-items: center;
            width: 100%; /* Faz com que a imagem ocupe 100% do contêiner */
            max-width: 1000px; /* Define o tamanho máximo */
            height: auto; /* Mantém as proporções */
        }

        /* Seção Quem Somos */
        .quem-somos-section {
            padding: 40px 20px;
            background-color: #f7f9fc;
            text-align: center;
        }

        .quem-somos-title {
            font-size: 28px;
            font-weight: bold;
            margin-bottom: 20px;
            text-transform: uppercase;
            color: #00bfa5;
        }

        .quem-somos-text {
            max-width: 600px;
            margin: 0 auto;
            font-size: 18px;
            line-height: 1.8;
            color: #333;
        }

        /* Seção Equipe */
        .equipe-section {
            padding: 60px 20px;
            background-color: #f7f9fc;
            text-align: center;
        }   

        .equipe-title {
            font-size: 28px;
            font-weight: bold;
            margin-bottom: 40px;
            text-transform: uppercase;
            color: #00bfa5;
        }

        .equipe-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            justify-items: center;
        }

        .equipe-item {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: transform 0.3s, box-shadow 0.3s;
            width: 100%;
            max-width: 300px;
        }

        .equipe-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
        }

        .equipe-photo {
            width: 100%;
            aspect-ratio: 9/16; /* Mantém proporção de 16:9 */
            object-fit: cover; /* Garante que a imagem preencha o espaço */
            border-radius: 12px; /* Bordas arredondadas */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Adiciona sombra */
            transition: transform 0.3s ease, box-shadow 0.3s ease; /* Efeito de transição */
}

        .equipe-photo:hover {
            transform: scale(1.05); /* Ampliação leve ao passar o mouse */
            box-shadow: 0 8px 12px rgba(0, 0, 0, 0.2); /* Sombra mais intensa no hover */
}
        .equipe-name {
            font-size: 20px;
            font-weight: bold;
            margin: 15px 0 5px;
            color: #333;
        }

        .equipe-role {
            font-size: 16px;
            color: #666;
            margin-bottom: 15px;
        }


    </style>
</head>
<body>
    <!-- Cabeçalho -->
    <header>
        <div class="logo">
            <img src="img/logo.png" alt="Logo Vale Saúde">
        </div>
        <nav>
            @if (Route::has('login'))
                <nav class="-mx-3 flex flex-1 justify-end">
                    @auth
                        <a
                            href="{{ url('/dashboard') }}"
                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                        >
                            Dashboard
                        </a>
                    @else
                        <a
                            href="{{ route('login') }}"
                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                        >
                            Log in
                        </a>

                        @if (Route::has('register'))
                            <a
                                href="{{ route('register') }}"
                                class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                            >
                                Register
                            </a>
                        @endif
                    @endauth
                </nav>
            @endif
        </nav>
    </header>

    <!-- Conteúdo principal -->
    <div class="container">
        <h1 class="headline">SUA UBS ONLINE</h1>
        <div class="description">
            <h2>Bem-vindo(a)!</h2>
            <p>Vale + Saúde é o aplicativo que permite agendar seu primeiro atendimento na Unidade Básica de Saúde (UBS), a porta de entrada do Sistema Único de Saúde (SUS) no município do Vale do Ribeira.</p>
            <p>Ao agendar seu horário pelo Vale + Saúde, você tem a liberdade de escolher a data e o horário que melhor se adequam à sua disponibilidade.</p>
        </div>

        <div class="mockup">
            <img src="img/mockup.png" alt="">
        </div>
    </div>

    <!-- Seção Missão, Visão e Valores -->
<section class="mvv-section">
    <h2 class="mvv-title"></h2>
    <div class="mvv-container">
        <div class="mvv-item">
            <h3>Missão</h3>
            <p>Facilitar o acesso à saúde pública, promovendo agilidade e eficiência no agendamento de atendimentos nas UBS.</p>
        </div>
        <div class="mvv-item">
            <h3>Visão</h3>
            <p>Ser referência nacional em tecnologia e inovação para o setor de saúde pública, melhorando a experiência do usuário.</p>
        </div>
        <div class="mvv-item">
            <h3>Valores</h3>
            <p>Compromisso com a saúde, acessibilidade, inovação, e respeito aos usuários e profissionais do sistema público de saúde.</p>
        </div>
    </div>
</section>

<!-- Seção Quem Somos -->
<section class="quem-somos-section">
    <h2 class="quem-somos-title">Quem Somos</h2>
    <p class="quem-somos-text">
        Somos uma equipe dedicada a transformar o acesso à saúde pública. Unindo tecnologia e empatia, criamos soluções que agilizam e simplificam o agendamento de atendimentos, garantindo que cada usuário tenha uma experiência eficiente e acessível.
    </p>
</section>

<!-- Seção Equipe -->
<section class="equipe-section">
    <h2 class="equipe-title">Nossa Equipe</h2>
    <div class="equipe-container">
        <div class="equipe-item">
            <img src="img/integrante1.jpg" alt="Foto de Integrante 1" class="equipe-photo">
            <h3 class="equipe-name">Tatiana Sobral</h3>
            <p class="equipe-role">Desenvolvedor Frontend</p>
        </div>
        <div class="equipe-item">
            <img src="img/integrante2.jpg" alt="Foto de Integrante 2" class="equipe-photo">
            <h3 class="equipe-name">Gustavo Zanon</h3>
            <p class="equipe-role">Desenvolvedor Backend</p>
        </div>
        <div class="equipe-item">
            <img src="img/integrante3.jpg" alt="Foto de Integrante 3" class="equipe-photo">
            <h3 class="equipe-name">Guilherme Zanon</h3>
            <p class="equipe-role">Designer UX/UI</p>
        </div>
        <div class="equipe-item">
            <img src="img/integrante4.jpg" alt="Foto de Integrante 4" class="equipe-photo">
            <h3 class="equipe-name">Greece Perdones</h3>
            <p class="equipe-role">Gerente de Projetos</p>
        </div>
        <div class="equipe-item">
            <img src="img/integrante5.jpg" alt="Foto de Integrante 5" class="equipe-photo">
            <h3 class="equipe-name">Jakeline Silva</h3>
            <p class="equipe-role">Analista de Qualidade</p>
        </div>
        <div class="equipe-item">
            <img src="img/integrante6.jpg" alt="Foto de Integrante 6" class="equipe-photo">
            <h3 class="equipe-name">Nilza Oliveira</h3>
            <p class="equipe-role">Marketing e Comunicação</p>
        </div>
    </div>
</section>

    <!-- Rodapé -->
    <footer>
        <p>&copy; 2024 Vale + Saúde. Todos os direitos reservados.</p>
    </footer>
</body>
</html>
 