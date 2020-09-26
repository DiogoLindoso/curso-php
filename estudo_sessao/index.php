<form method="post">
    <input type="text" name="nome" placeholder="Insira o nome">
    <input type="text" name="telefone" placeholder="Insira o telefone">
    <input type="submit" value="Salvar">
</form>
<br>
<a href="?comando=limparlista">Limpar Lista</a>
<br>
<br>
<?php
    ini_set('display_errors', '1');
    include 'Contato.php';
    require 'funcoes.php';

    listarContatos();

?>