<?php

   require_once("config.php");

   /* $sql = new Sql();

   $usuarios = $sql->select("SELECT * FROM tb_usuario");

   echo json_encode($usuarios); 

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

   echo "<br/>";

   echo "TESTANDO O MÉTODOS LOGIN DA CLASSE USUÁRIO";

   echo '<br/>';

   echo "PASSANDO UM USUÁRIO VÁLIDO";

    echo "<br/>";

   $usuarioValido = new Usuario();
   $usuarioValido->login("user","12345");
   echo $usuarioValido;

   echo "<br/>";

   echo "AGORA PASSANDO UM USUÁRIO INVÁLIDO!";

   echo "<br/>";

   $usuarioInvalido = new Usuario();
   $usuarioInvalido->login("mane", "678");

   echo $$usuarioInvalido;


   echo "<br/>";

   echo "INSERINDO UM USUÁRIO NOVO NO BANCO";

   echo "<br/>";

   $aluno = new Usuario("aluno_novo","12345");

   /* $aluno->setDeslogin("aluno");
   $aluno->setDessenha("12345"); => se tornam desnecessárias com o construtor */

   /* $aluno->insert();

   echo "NOVO USUÁRIO INSERIDO COM SUCESSO!";

   echo "<br/>";

   echo $aluno; */

   /* ATUALIZANDO UM USUAÁRIO

   $usuario = new Usuario();

   $usuario->loadById(10);

   $usuario->update("professor","abcd");

  

   echo $usuario; */

   /* DELETANDO UM USUÁRIO DO BANCO */

   echo "VAMOS DELTAR O USUARIO 9"."<br/>";

   $usuario = new Usuario();
   $usuario->loadById(9);
   $usuario->delete();

   echo "USUÁRIO DELETADO COM SUCESSO!";


  








?>