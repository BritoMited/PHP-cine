<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes do Filme</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <div class="container">
            <img src="../images/logo.jpeg" alt="Cinema XYZ" class="logo">
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="#">Filmes</a></li>
                    <li><a href="#">Promoções</a></li>
                    <li><a href="#">Contato</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section class="detalhes-filme">
        <div class="container">
            <?php
            // Banco de dados fictício de filmes
            $movies = [
                1 => [
                    'title' => 'amigos imaginarios',
                    'description' => 'Um dos maiores clássicos do cinema mundial, dirigido por Francis Ford Coppola.',
                    'release_date' => '1972',
                    'duration' => '175 minutos',
                    'genre' => 'Crime, Drama',
                    'director' => 'Gustavo de bito',
                    'cast' => 'Rafael mocochesnmki, Dianarte serebini',
                    'rating' => '18 anos',
                    'poster' => 'amigos-imaginarios.jpeg',
                    'trailer' => 'https://www.youtube.com/watch?v=sY1S34973zA'
                ],
                2 => [
                    'title' => 'Interestelar',
                    'description' => 'Um épico de ficção científica dirigido por Christopher Nolan.',
                    'release_date' => '2014',
                    'duration' => '169 minutos',
                    'genre' => 'Aventura, Drama, Ficção Científica',
                    'director' => 'Christopher Nolan',
                    'cast' => 'Matthew McConaughey, Anne Hathaway, Jessica Chastain',
                    'rating' => '12 anos',
                    'poster' => 'destaque2.jpg',
                    'trailer' => 'https://www.youtube.com/watch?v=Lm8p5rlrSkY'
                ],
                // Outros filmes...
            ];

            // Receber o ID do filme
            $movie_id = isset($_GET['id']) ? $_GET['id'] : 1;
            $movie = $movies[$movie_id];

            // Exibir detalhes do filme
            echo '<div class="filme-detalhes">';
            echo '<img src="images/' . $movie['poster'] . '" alt="' . $movie['title'] . '">';
            echo '<h1>' . $movie['title'] . '</h1>';
            echo '<p><strong>Descrição:</strong> ' . $movie['description'] . '</p>';
            echo '<p><strong>Data de Lançamento:</strong> ' . $movie['release_date'] . '</p>';
            echo '<p><strong>Duração:</strong> ' . $movie['duration'] . '</p>';
            echo '<p><strong>Gênero:</strong> ' . $movie['genre'] . '</p>';
            echo '<p><strong>Diretor:</strong> ' . $movie['director'] . '</p>';
            echo '<p><strong>Elenco:</strong> ' . $movie['cast'] . '</p>';
            echo '<p><strong>Classificação:</strong> ' . $movie['rating'] . '</p>';
            echo '<p><a href="' . $movie['trailer'] . '" target="_blank">Assistir Trailer</a></p>';
           
