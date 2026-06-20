<?php
class modeloPessoa{
//  public $dados = file_get_contents('../JS/script.js');
// echo $dados;
 public function RequestMetodos(){
    if ($_SERVER['REQUEST_METHOD'] == "POST"){
        // Criar Usuario
        echo "Estamos usando metodo de requisição: ". $_SERVER['REQUEST_METHOD'];
    }
    else if($_SERVER['REQUEST_METHOD'] == "GET"){
        // Consulta de Usuario
        echo "Por padrão estamos usando: ". $_SERVER['REQUEST_METHOD'];
    }
    else if($_SERVER['REQUEST_METHOD'] == "PUT"){
        // Atualizar dados do usuario

    }
    else if($_SERVER['REQUEST_METHOD'] == "DELETE"){
        // Deletar daods do usuario

    }}
}
?>