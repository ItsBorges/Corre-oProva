<?php
    include_once "../dao/ConnectionFactory.php";
    include_once "../model/Tarefa.php";
    include_once "../dao/TarefaDao.php";

    $tarefaDao = new TarefaDao;

    $d = filter_input_array(INPUT_POST);
    //Verifica o name do botão, se for salver executa insert
        if(isset($_POST['salvar'])){
            $conn = ConnectionFactory::getConnection();
            $tarefa = new Tarefa($d['titulo'], $d['descricao'], $d['prioridade'], $d['dataVencimento']);
            $tarefaDao->insert($tarefa);
        }
?>