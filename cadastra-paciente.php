<?php

require_once("Paciente.php");;

$paciente = new Paciente();

$nome = $_POST['txtNome'];

$paciente = new Paciente();


$paciente->setNomePaciente($nome);
$paciente->setCpfPaciente($_POST['txtCpf']);
$paciente->setDtNasctoPaciente($_POST['txtDtNascto']);
$paciente->setEmailPaciente($_POST['txtEmail']);
$paciente->setTelefonePaciente($_POST['txtTelefone']);
$paciente->setCelularPaciente($_POST['txtCelular']);
$paciente->setRgPaciente($_POST['txtRg']);



$paciente->cadastrar($paciente);



?>