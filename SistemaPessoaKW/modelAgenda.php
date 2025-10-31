<?php
    include "conexao.php";    
    //DAO - CRUD - create, read, update, delete
    class ModelAgenda{
        public function inserir(Agenda $agenda){
            $sql = "insert into agenda(cpf, data, descricao, horario) values(?, ?, ?, ?)";
            $con = new Conexao();
            $bd = $con->pegarConexao();

            $stm = $bd->prepare($sql);
            $stm->bindValue(1, $agenda->getCpf());
            $stm->bindValue(2, $agenda->getData());
            $stm->bindValue(3, $agenda->getDescricao());
            $stm->bindValue(4, $agenda->getHora());

            $resultado = $stm->execute();
            if($resultado){
                echo "cadastrado com sucesso";
            }else{
                echo "erro ao cadastrar";
            }
        }

        public function apagar(Agenda $agenda){
            $sql = "delete from agenda where cpf = ? and data = ? and horario = ?";
            $con = new Conexao();
            $bd = $con->pegarConexao();

            $stm = $bd->prepare($sql);
            $stm->bindValue(1, $agenda->getCpf());
            $stm->bindValue(2, $agenda->getData());
            $stm->bindValue(3, $agenda->getHora());
            $resultado = $stm->execute();
            if($resultado){
                echo "apagado com sucesso";
            }else{
                echo "erro ao apagar";
            }
        }

        public function atualizar(Agenda $agenda){
            $sql = "update agenda set descricao=? where cpf=? and data=? and horario=? ";
            $con = new Conexao();
            $bd = $con->pegarConexao();

            $stm = $bd->prepare($sql);
            $stm->bindValue(1, $agenda->getDescricao());
            $stm->bindValue(2, $agenda->getCpf());
            $stm->bindValue(3, $agenda->getData());
            $stm->bindValue(4, $agenda->getHora());
            
            $resultado = $stm->execute();
            if($resultado){
                echo "atualizado com sucesso";
            }else{
                echo "erro ao atualizar";
            }
        }

        public function consultar(){
            $sql = "select * from agenda inner join 
                    pessoa on agenda.cpf = pessoa.cpf";
            $con = new Conexao();
            $bd = $con->pegarConexao();

            $stm = $bd->prepare($sql);
            $stm->execute();
            
            if($stm->rowCount()>0){
                $resultado = $stm->fetchAll(\PDO::FETCH_ASSOC);
                return json_encode($resultado);
            }

        }
    }
?>