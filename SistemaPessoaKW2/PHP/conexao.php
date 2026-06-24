<?php
class conexao{
    public $database = "SistemaDeAgendamentos";
    public $host = "localhost";
    public $user = "root";
    public $password = "";

    public function bd(){
        try{
        $conn = new PDO("mysql:host = $host; dbname = $database", $host, $user, $password);
        echo "Conectado com sucesso";
        }
        catch(error $e){
            echo "Houve um erro na conexão com o banco: ". $e;
        }
    }
}
?>