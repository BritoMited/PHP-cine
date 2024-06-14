<pre>
<?php

$banco_filmes = new mysqli("localhost", "root", "", "php-cine");

$banco_login = new mysqli("localhost", "root", "", "php-cine");

// FILMES ======================

function criarFilme(string $titulo, string $descricao, string $data_lancamento,string $duracao,string $genero,string $diretores,string $elenco,string $rating,string $poster,string $trailer) : void {
        global $banco_filmes;

        $q = "INSERT INTO listafilmes(Id, 
                                        Titulo,
                                        Descricao,
                                        Lancamento,
                                        Duracao,
                                        Genero,
                                        Diretor,
                                        Elenco,
                                        Nota,
                                        Poster,
                                        Trailer) VALUES (NULL, 
                                        '$titulo', 
                                        '$descricao', 
                                        '$data_lancamento', 
                                        '$duracao',
                                        '$genero',
                                        '$diretores',
                                        '$elenco',
                                        '$rating',
                                        '$poster',
                                        '$trailer')";

        $banco_filmes->query($q);

       
    }

    function listarFilmes(){
        global $banco_filmes;
        $q = "SELECT `Id`, `Titulo`, `Descricao`, `Lancamento`, `Duracao`, `Genero`, `Diretor`, `Elenco`, `Nota`, `Poster`, `Trailer` FROM `listafilmes`";
        $resp = $banco_filmes->query($q);

        return $resp;
    }


    // LOGIN ==========================
    function buscarUsuario($usuario, $senha){
        global $banco_login;

        $q = "SELECT * FROM login-usuario WHERE Usuario = $usuario AND Senha = $senha";

        $busca = $banco_login->query($q);


        return $busca;
    }

    function buscarUsuarioADM($usuario, $senha){
        global $banco_login;

        $q = "SELECT * FROM  `login-adm` WHERE Usuario = '$usuario' AND Senha = '$senha'";

        $busca = $banco_login->query($q);


        if ($busca) {
            echo "deu certo";
            header("Location: ../Filmes/ColocarFilme.php");
        } else {
            echo "Erro ao criar usuário: ";
        }
    }

    function criarUsuario($usuario, $senha){
        global $banco_login;

        $q = "INSERT INTO usuarios(usuario, senha) VALUES ('$usuario', '$senha')";

        $resp = $banco_login->query($q);

        if ($resp) {
            echo "deu certo";
        } else {
            echo "Erro ao criar usuário: ";
        }
    }























?>

</pre>