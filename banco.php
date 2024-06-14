<pre>


<?php

$banco_filmes = new mysqli("localhost", "root", "", "filmes");

$banco_login = new mysqli("localhost", "root", "", "login");


function criarFilme(string $titulo, string $descricao, string $data_lancamento,string $duracao,string $genero,string $diretores,string $elenco,string $rating,string $poster,string $trailer, $debug = false) : void {
        global $banco_filmes;

        $q = "INSERT INTO listafilmes(id, 
                                        titulo,
                                        descricao,
                                        data_lancamento,
                                        duracao,
                                        genero,
                                        diretores,
                                        elenco,
                                        rating,
                                        poster,
                                        trailer) VALUES (NULL, 
                                        '$titulo', 
                                        '$descricao', 
                                        '$data_lancamento', 
                                        '$duracao',
                                        '$genero',
                                        '$diretores',
                                        '$elenco',
                                        '$rating',
                                        '$poster',
                                        '$trailer', 'admin')";

        $resp = $banco_filmes->query($q);
        
        if($debug){
            echo "<br> Query: $q"; 
            echo var_dump($resp);
        }
    }
    function buscarUsuario($usuario, $senha){
        global $banco_login;

        $q = "SELECT * FROM `login-usuario` WHERE Usuario = $usuario AND Senha = $senha";

        $busca = $banco_login->query($q);
      

        return $busca;
    }

    function buscarUsuarioADM($usuario, $senha){
        global $banco_login;

        $q = "SELECT * FROM `login-adm` WHERE Usuario = '$usuario' AND Senha = '$senha'";

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