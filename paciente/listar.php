<?php
include('../includes/cabecalho.php');
include('../includes/menu.php');
include('../includes/rodape.php');
$pacientes = Paciente::listar();
?>

<main class="container">
    <h1>Lista de Pacientes</h1>
    <table>
        <head>
                <TH>nome</TH>
                <TH>cpf</TH>
                <TH>data</TH>
                <TH>telefone</TH>
                <TH>Email</TH>
                <TH>Endereço</TH>
                <TH>Convênio</TH>
                <TH>Ações</TH>
            </tr>
        </head>
    <tbody>
<?php
    foreach($pacientes as $paciente)
    {
        echo "<tr>
        <td>.$paciente->nome.</td>
        <td>.$paciente->cpf.</td>
        <td>.$paciente->data_nascimento.</td>
        <td>.$paciente->telefone.</td>
        <td>.$paciente->email.</td>
        <td>.$paciente->endereco.</td>
        <td>.$paciente->convenio.</td>
        <td>.$paciente->observacao.</td>
        <td>
        <a href='editar.php?id =".$paciente->id."'>
        <a href='/consultorio/action/action_paciente.php?action=excluir&id =".$paciente->id."'>
        </td>
        </tr>";
    }

?>
    </tbody>
  </table>
  <div class="pb-5"></div>
</main>