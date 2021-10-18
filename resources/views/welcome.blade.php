<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

    </style>
</head>

<body>

    <header class="p-1 bg-dark text-white fixed-top">
        <div class="container">
            <div
                class="d-flex flex-column flex-sm-row align-items-center justify-content-center justify-content-lg-center">
                <a href="/" class="d-flex align-items-center text-white text-decoration-none">
                    <img src="{{ asset('img/eureciclo-logo.png') }}" alt="" width="150">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-dot mx-3 d-none d-sm-block" viewBox="0 0 16 16">
                        <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
                    </svg>
                </a>
                <span class="fs-5 mb-0
                ">Avaliação para desenvolvedor</span>
            </div>
        </div>
    </header>

    <main class="container my-5 pt-5">
        <div class="px-sm-5 py-2  bg-light rounded-3">
            <div class="container-fluid py-5">
                <h1 class="h1 display-5 fw-bold">Descrição do projeto</h1>

                <p class="fs-4">Você recebeu um arquivo de texto com os dados de vendas da empresa. Precisamos
                    criar uma maneira para que estes dados sejam importados para um banco de dados.</p>
                <p class="fs-4">Sua tarefa é criar uma interface web que aceite upload de arquivos, normalize
                    os dados e armazene-os
                    no banco de dados.</p>

                <h2 class="h3">Sua aplicação web DEVE:</h2>

                <ol>
                    <li>Aceitar (via formulário) o upload de arquivos text, com dados separados por TAB. A primeira
                        linha do
                        arquivo tem o nome das colunas. Você pode assumir que as colunas estarão sempre nesta ordem e
                        sempre
                        haverá uma linha de cabeçalho. Um arquivo de exemplo chamado 'dados.txt' está incluído neste
                        repositório.</li>
                    <li>
                        Interpretar ("parsear") o arquivo recebido, normalizar os dados, e salvar corretamente a
                        informação
                        em um banco de dados relacional.
                    </li>
                    <li>
                        Exibir todos os registros importados, bem como a receita bruta total dos registros contidos no
                        arquivo enviado após o upload + parser.
                    </li>
                    <li>
                        A aplicação deve ser escrita obrigatoriamente em: Python 3 ou PHP 7 (dependendo da vaga que está
                        se
                        candidatando), utilizando qualquer framework de preferência.
                    </li>
                    <li>
                        Executar via Docker ou Docker Compose.
                    </li>
                    <li>Utilizar apenas linguagens e bibliotecas livres ou gratuitas.</li>
                    <li>Ter testes de model e controller automatizados.</li>
                    <li>Ter uma boa aparência e ser fácil de usar.</li>
                </ol>


                <a href="#" class="btn btn-primary btn-lg px-5">
                    Iniciar
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-arrow-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                    </svg>
                </a>
            </div>
        </div>
    </main>

    <footer class="text-center">
        &copy; {{ date('Y') }} - <a href="https://epscavalcante.dev" target="_blank"
            class="text-decoration-none text-dark fw-bold">Eduardo Cavalcante</a>
    </footer>
</body>

</html>
