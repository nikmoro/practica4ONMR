<?php
    phpinfo();
    require_once 'lib/nusoap.php';

    function getLanguages($datos){
        if($datos == languages)
        {
            return join(",", array(
                "Python",
                "TypeScript",
                "Java",
                "C#",
                "PHP"
            ));
        }
        else
        {
            return "No hay datos";
        }
    }

    $server = new soap_server();

    $server -> register("getLanguages");
    
    if(!isset($HTTP_RAW_POST_DATA))
        $HTTP_RAW_POST_DATA = file_get_contents('php://input');
    
    $server -> service($HTTP_RAW_POST_DATA);
?>