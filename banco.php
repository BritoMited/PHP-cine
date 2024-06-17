
<?php

$banco = new mysqli("localhost", "root", "", "php-cine");

// FILMES ======================

function criarFilme(string $titulo, string $descricao, string $data_lancamento,string $duracao,string $genero,string $diretores,string $elenco,string $rating,string $poster,string $trailer){
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

    function buscarFilme($id_filme){
        global $banco;
        $q = "SELECT `Titulo`, `Descricao`, `Lancamento`, `Duracao`, `Genero`, `Diretor`, `Elenco`, `Nota`, `Poster`, `Trailer` FROM `listafilmes` WHERE Id = '$id_filme'";
        $resp = $banco->query($q);

        return $resp;
    }


    // LOGIN ==========================
    function buscarUsuario($usuario, $senha){
        global $banco;

        $q = "SELECT * FROM `login-usuario` WHERE Usuario = '$usuario' AND Senha = '$senha'";

        $busca = $banco->query($q);

        if ($busca->num_rows == 0) {
            return false;
        }
    
        return true;
    
    }

    function buscarUsuarioADM($usuario, $senha){
        global $banco;

        $q = "SELECT * FROM  `login-adm` WHERE Usuario = '$usuario' AND Senha = '$senha'";

        $busca = $banco->query($q);


        if ($busca->num_rows == 0) {
            return false;
        }
    
        return true;
    }

    function criarUsuario($usuario, $senha){
        global $banco;

        $q = "INSERT INTO `login-usuario`(Usuario, Senha) VALUES ('$usuario', '$senha')";

        $resp = $banco->query($q);

        if ($resp) {
            echo "deu certo";
        } else {
            echo "Erro ao criar usuário: ";
        }
    }




// INGRESSOS ====================================

function buscarAssento($id_filme, $assento){
    global $banco;

    $q = "SELECT Assentos FROM `ingressos` WHERE Id_filme = '$id_filme' AND Assentos = '$assento'";

    $busca = $banco->query($q);

    

    if ($busca->num_rows == 0) {
        return false;
    }
    return true;
}


function criarIngresso($usuario, $Id_filme, $Assentos, $Preco){
    global $banco;

    $Id_usuario = buscarIdUsuario($usuario);

    $q = "INSERT INTO `ingressos`(`Id`, `Id_usuario`, `Id_filme`, `Assentos`, `Preco`) 
                    VALUES (NULL,'$Id_usuario','$Id_filme','$Assentos','$Preco')";

    $resp = $banco->query($q);

    if(!$resp) {
        echo "Erro ao criar ingresso: ";
    }
   
}

function buscarIdUsuario($usuario){
    global $banco;

    $q = "SELECT Id FROM `login-usuario` WHERE Usuario = '$usuario'";

    $busca = $banco->query($q);

    $id = $busca->fetch_object();


    return $id->Id;

}













?>

