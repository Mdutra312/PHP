<?php
require_once("Profissional.php");

$nome = $_POST['txtNome'];

$profissional = new Profissional();


$profissional->setNomeprofissional($nome);
$profissional->setCpfprofissional($_POST['txtCpf']);
$profissional->setRgprofissional($_POST['txtRg']);

$profissional->cadastrar($profissional);



?>