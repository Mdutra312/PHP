<?php

require_once("Conexao.php");

class Paciente{
    private $nomePaciente;
    private $cpfPaciente;
    private $dtNascPaciente;
    private $rgPaciente;
    private $emailPaciente;
    private $telefonePaciente;
    private $celularPaciente;
    


    public function getNomePaciente(){
        return $this->nomePaciente;
    }
    public function setNomePaciente($nomePaciente){
        $this->nomePaciente = $nomePaciente;
    }
    public function getCpfPaciente(){
        return $this->cpfPaciente;
    }
    public function setCpfPaciente($cpfPaciente){
        $this->cpfPaciente = $cpfPaciente;
    }
    public function getDtNasctoPaciente(){
        return $this->dtNascPaciente;
    }
    public function setDtNasctoPaciente($dtNasctoPaciente){
        $this->dtNascPaciente = $dtNasctoPaciente;
    }



    public function cadastrar($paciente){
        $conexao = Conexao::conectar();
        $stmt = $conexao->prepare("INSERT INTO tbpaciente(nomePaciente, cpfPaciente,
                                    rgPaciente, dtNascPaciente, emailPaciente, telefonePaciente, 
                                    celularPaciente) VALUES(?, ?, ?, ?, ?, ?, ?)");
        $stmt->bindValue(1, $paciente->getNomePaciente());
        $stmt->bindValue(2, $paciente->getCpfPaciente());
        $stmt->bindValue(3, $paciente->getRgPaciente());
        $stmt->bindValue(4, $paciente->getDtNasctoPaciente());
        $stmt->bindValue(5, $paciente->getEmailPaciente());
        $stmt->bindValue(6, $paciente->getTelefonePaciente());
        $stmt->bindValue(7, $paciente->getCelularPaciente());


        $stmt->execute();

    }


    /**
     * Get the value of rgPaciente
     */ 
    public function getRgPaciente()
    {
        return $this->rgPaciente;
    }

    /**
     * Set the value of rgPaciente
     *
     * @return  self
     */ 
    public function setRgPaciente($rgPaciente)
    {
        $this->rgPaciente = $rgPaciente;

        return $this;
    }

    /**
     * Get the value of emailPaciente
     */ 
    public function getEmailPaciente()
    {
        return $this->emailPaciente;
    }

    /**
     * Set the value of emailPaciente
     *
     * @return  self
     */ 
    public function setEmailPaciente($emailPaciente)
    {
        $this->emailPaciente = $emailPaciente;

        return $this;
    }

    /**
     * Get the value of telefonePaciente
     */ 
    public function getTelefonePaciente()
    {
        return $this->telefonePaciente;
    }

    /**
     * Set the value of telefonePaciente
     *
     * @return  self
     */ 
    public function setTelefonePaciente($telefonePaciente)
    {
        $this->telefonePaciente = $telefonePaciente;

        return $this;
    }

    /**
     * Get the value of celularPaciente
     */ 
    public function getCelularPaciente()
    {
        return $this->celularPaciente;
    }

    /**
     * Set the value of celularPaciente
     *
     * @return  self
     */ 
    public function setCelularPaciente($celularPaciente)
    {
        $this->celularPaciente = $celularPaciente;

        return $this;
    }
}





?>