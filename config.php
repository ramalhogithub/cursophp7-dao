<?php

spl_autoload_register(function($className){

    $fileName = "class".DIRECTORY_SEPARATOR. $className.".php";

    //echo "O NOME DA CLASSE É: ".$fileName;


    if(file_exists($fileName)){
        require_once($fileName);

    }

});



?>