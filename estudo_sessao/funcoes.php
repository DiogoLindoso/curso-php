<?php

session_start();

if (isset($_GET['comando'])) {
    if  ($_GET['comando'] == 'limparlista') {
        $_SESSION['contatos'] = array();
    }
    if ($_GET['comando'] == 'excluir') {
        $id = $_GET['contatoId'];
        unset($_SESSION['contatos'][$id]);
    }
    header('Location: /diogo/estudo_sessao/');
}

if (isset($_POST['nome'])) {
    $contato = new Contato($_POST['nome'], $_POST['telefone']);
    salvarContato($contato);
}
function salvarContato($contato)
{
    array_push(
        $_SESSION['contatos'],
        array(
            'nome' => $contato->getNome(),
            'telefone' => $contato->getTelefone()
        )
    );
    header('Location: /diogo/estudo_sessao/');
}
if (!isset($_SESSION['contatos'])) {
    $_SESSION['contatos'] = array();
}
function listarContatos()
{
    foreach ($_SESSION['contatos'] as $indice => $contato) {
        echo 'Nome: ' . $contato['nome'] . '<br>';
        echo 'Telefone: ' . $contato['telefone'] . '<br>';
        echo '<a href="?comando=excluir&contatoId=' . $indice . '">Apagar contato</a>';
        echo '<hr>';
    }
}
