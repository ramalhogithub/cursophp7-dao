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

    public function loadById($id){

        $sql = new Sql();
        $result = $sql->select("SELECT * FROM tb_usuario WHERE idusuario = :ID",array(
            ":ID"=>$id
        ));

        if(count($result) > 0){

            $row = $result[0];

            $this->setIdusurio($row['idusuario']);
            $this->setDessenha($row['dessenha']);
            $this->setDeslogin($row['deslogin']);
            $this->setDtcadastro(new Datetime($row['dtCadastro']));

        }

    }

    public static function search($login){

        $sql = new Sql();
        return $sql->select("SELECT * FROM tb_usuario WHERE deslogin LIKE  :SEARCH  ORDER BY deslogin ", array(
             ':SEARCH'=>"%".$login."%"
        ));

    }


    //Ao ser estático não precisar instanciar um objeto Usuário
    public static function getList(){
        $sql = new sql();

        return  $sql->select("SELECT * FROM tb_usuario ORDER BY idusuario;");

    }


    public function __toString()
    {
        return json_encode(array(
            "idusurio"=>$this->getIdusurio(),
            "dessenha"=>$this->getDessenha(),
            "deslogin"=>$this->getDeslogin(),
            "dtcadastro"=>$this->getDtcadastro()->format("d/m/Y H:i:s")

        ));
    }
  }
?>