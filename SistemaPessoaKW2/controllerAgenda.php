<?php
require_once "modelAgenda.php";
require_once "agenda.php";

  $cpf = filter_input(INPUT_GET, "cpf");
  $data = filter_input(INPUT_GET, "data");
  $descricao = filter_input(INPUT_GET, "descricao");
  $acao = filter_input(INPUT_GET, "acao");  
  $horario = filter_input(INPUT_GET, "horario");

  $agenda = new Agenda();
  $agenda->setCpf($cpf);
  $agenda->setData($data);
  $agenda->setDescricao($descricao);
  $agenda->setHora($horario);

  $modelAgenda = new modelAgenda();
  
  if($acao=="inserir"){
      $modelAgenda->inserir($agenda);
  }else if($acao=="apagar"){
      $modelAgenda->apagar($agenda);
  }else if($acao=="atualizar"){
    $modelAgenda->atualizar($agenda);
  }else if($acao=="consultar"){
    echo $modelAgenda->consultar();
  }
?>