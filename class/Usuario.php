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

            $this->setData($result[0]);

        }

    }

    public static function search($login){

        $sql = new Sql();
        return $sql->select("SELECT * FROM tb_usuario WHERE deslogin LIKE  :SEARCH  ORDER BY deslogin ", array(
             ':SEARCH'=>"%".$login."%"
        ));

    }


    public function login($login, $senha){

        $sql = new Sql();
        $result = $sql->select("SELECT * FROM tb_usuario WHERE deslogin = :LOGIN AND dessenha = :SENHA ", array(
            ":LOGIN" => $login,
            ":SENHA" => $senha
        ));

        if (count($result) > 0) {

            $row = $result[0];
           
            $this->setData($result[0]);
           
        }else{
            throw new Exception("Login e/ou senha inválidos.");
        }

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

    public function setData($data){

          $this->setIdusurio($data['idusuario']);
         $this->setDessenha($data['dessenha']);
          $this->setDeslogin($data['deslogin']);
          $this->setDtcadastro(new Datetime($data['dtcadastro']));

    }


  

    public function __construct($login = "", $password = "")
    {
        $this->setDeslogin($login);
        $this->setDessenha($password);
    }

    public function insert(){
        
               
        $sql = new Sql();
        $results = $sql->select("CALL sp_usuarios_insert(:LOGIN, :PASSWORD)", 
        array(':LOGIN'=>$this->getDeslogin(),
              ':PASSWORD'=>$this->getDessenha()
    ));
      if(count($results) > 0){
         
          $this->setData($results[0]);
      }else{
         
      }
    } 
    

    public function update($login, $password){

        $this->setDeslogin($login);
        $this->setDessenha($password);

        $sql = new Sql();

        $sql->query("UPDATE tb_usuario SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID", array(
            ':LOGIN'=>$this->getDeslogin(),
            ':PASSWORD'=>$this->getDessenha(),
            ':ID'=>$this->getIdusurio()
        ));      

    }


    public function delete(){
        $sql = new Sql();
        $sql->query("DELETE FROM tb_usuario WHERE idusuario = :ID", array(
        ':ID'=>$this->getIdusurio()
        ));
        
    }
  }
?>