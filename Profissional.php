<?php

 require_once("Conexao.php");

 class Profissional{
    private $nomeProfissional;
    private $cpfProfissional;
    private $rgProfissional;

    


    public function cadastrar($profissional){
        $conexao = Conexao::conectar();
        $stmt = $conexao->prepare("INSERT INTO tbprofissional(nomeProfissional, cpfProfissional,
                                    rgProfissional) VALUES(?, ?, ?)");
        $stmt->bindValue(1, $profissional->getNomeProfissional());
        $stmt->bindValue(2, $profissional->getCpfProfissional());
        $stmt->bindValue(3, $profissional->getRgProfissional());
      
        $stmt->execute();

    }

    /**
     * Get the value of nomeProfissional
     */ 
    public function getNomeProfissional()
    {
        return $this->nomeProfissional;
    }

    /**
     * Set the value of nomeProfissional
     *
     * @return  self
     */ 
    public function setNomeProfissional($nomeProfissional)
    {
        $this->nomeProfissional = $nomeProfissional;

        return $this;
    }

    /**
     * Get the value of cpfProfissional
     */ 
    public function getCpfProfissional()
    {
        return $this->cpfProfissional;
    }

    /**
     * Set the value of cpfProfissional
     *
     * @return  self
     */ 
    public function setCpfProfissional($cpfProfissional)
    {
        $this->cpfProfissional = $cpfProfissional;

        return $this;
    }

    /**
     * Get the value of rgProfissional
     */ 
    public function getRgProfissional()
    {
        return $this->rgProfissional;
    }

    /**
     * Set the value of rgProfissional
     *
     * @return  self
     */ 
    public function setRgProfissional($rgProfissional)
    {
        $this->rgProfissional = $rgProfissional;

        return $this;
    }
 }

 

?>