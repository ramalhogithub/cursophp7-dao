<?php

  class Usuario {

    private $idusurio;
    private $deslogin;
    private $dessenha;
    private $dtcadastro;
    


    /**
     * Get the value of idusurio
     */ 
    public function getIdusurio()
    {
        return $this->idusurio;
    }

    /**
     * Set the value of idusurio
     *
     * @return  self
     */ 
    public function setIdusurio($idusurio)
    {
        $this->idusurio = $idusurio;

        return $this;
    }

    /**
     * Get the value of deslogin
     */ 
    public function getDeslogin()
    {
        return $this->deslogin;
    }

    /**
     * Set the value of deslogin
     *
     * @return  self
     */ 
    public function setDeslogin($deslogin)
    {
        $this->deslogin = $deslogin;

        return $this;
    }

    /**
     * Get the value of dessenha
     */ 
    public function getDessenha()
    {
        return $this->dessenha;
    }

    /**
     * Set the value of dessenha
     *
     * @return  self
     */ 
    public function setDessenha($dessenha)
    {
        $this->dessenha = $dessenha;

        return $this;
    }

    /**
     * Get the value of dtcadastro
     */ 
    public function getDtcadastro()
    {
        return $this->dtcadastro;
    }

    /**
     * Set the value of dtcadastro
     *
     * @return  self
     */ 
    public function setDtcadastro($dtcadastro)
    {
        $this->dtcadastro = $dtcadastro;

        return $this;
    }
  }
?>