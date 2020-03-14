<?php

   require_once("config.php");

   /* $sql = new Sql();

   $usuarios = $sql->select("SELECT * FROM tb_usuario");

   echo json_encode($usuarios); */

   echo "PÁGINA DO USUÁRIO";
  
   echo "<br/>";

   echo "USUÁRIO 3";

   echo "<br/>";

   $root = new Usuario();
   $root->loadById(3);
   
   echo $root;

   echo "<br/>";

   echo "CARREGA TODOS OS USUÁRIOS DA TABELA";

   echo "<br/>";

   $lista = Usuario::getList();

   echo json_encode($lista);

   echo "<br/>";

   //CARREGA UMA LISTA DE USUÁRIOS BUSCANDO PELO LOGIN
   $search = Usuario::search("user");

   echo "CARREGA TODOS OS USUÁRIO CUJO LOGIN COMECEM POR 'USER' NO BANCO";

   echo "<br/>";

   echo json_encode($search);

?>