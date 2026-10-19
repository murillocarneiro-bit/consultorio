<?php
include('../includes/cabecalho.php');
include('../includes/menu.php');
include('../includes/rodape.php');
?>
<main>
    <h1>Cadastrar Paciente</h1>
    <form method="POST" action="/consultorio/action/action_paciente.php?action=cadastrar">
    Nome *: <input name= "nome" type="text" class="form-control" required>
    CPF *: <input name= "cpf" type="text" class="form-control" required>
    Data de Nascimento *: <input name= "nome" type="text" class="form-control" required>
    Telefone *: <input name= "data_nascimento" type="text" class="form-control" required>
    Email *: <input name= "email" type="text" required>
    Endereço *: <input name= "endereco" type="text" class="form-control" required>
    Convento: <input name= "convento" type="text" class="form-control">
    Observação: <input name= "observacao" type="text" class="form-control">
    <input type= "submit" value="cadastrar">
    </form>
    
</main>