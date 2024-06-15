<pre>
<?php

$banco = new mysqli("localhost", "root", "", "php-cine");

// FILMES ======================

function criarFilme(string $titulo, string $descricao, string $data_lancamento,string $duracao,string $genero,string $diretores,string $elenco,string $rating,string $poster,string $trailer) : void {
        global $banco;

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

        $banco->query($q);

       
    }

    function listarFilmes(){
        global $banco;
        $q = "SELECT `Id`, `Titulo`, `Descricao`, `Lancamento`, `Duracao`, `Genero`, `Diretor`, `Elenco`, `Nota`, `Poster`, `Trailer` FROM `listafilmes`";
        $resp = $banco->query($q);

        return $resp;
    }


    // LOGIN ==========================
    function buscarUsuario($usuario, $senha){
        global $banco;

        $q = "SELECT * FROM login-usuario WHERE Usuario = $usuario AND Senha = $senha";

        $busca = $banco->query($q);


        return $busca;
    }

    function buscarUsuarioADM($usuario, $senha){
        global $banco;

        $q = "SELECT * FROM  `login-adm` WHERE Usuario = '$usuario' AND Senha = '$senha'";

        $busca = $banco->query($q);


        if ($busca) {
            echo "deu certo";
            header("Location: ../Filmes/ColocarFilme.php");
        } else {
            echo "Erro ao criar usuário: ";
        }
    }

    function criarUsuario($usuario, $senha){
        global $banco;

        $q = "INSERT INTO usuarios(usuario, senha) VALUES ('$usuario', '$senha')";

        $resp = $banco->query($q);

        if ($resp) {
            echo "deu certo";
        } else {
            echo "Erro ao criar usuário: ";
        }
    }




// INGRESSOS ====================================


function criarIngresso($Id_usuario, $Id_filme, $Assentos, $Preco){
    global $banco;

    $q = "INSERT INTO `ingressos`(`Id`, `Id_usuario`, `Id_filme`, `Assentos`, `Preco`) 
                    VALUES (NULL,'$Id_usuario','$Id_filme','$Assentos','$Preco')";

    $resp = $banco->query($q);

    if(!$resp) {
        echo "Erro ao criar ingresso: ";
    }
   
}















?>

</pre>