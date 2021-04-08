<?php
    require_once 'lib/nusoap.php';

    $client = new nusoap_client("http://localhost/Practica4ONMR/server.php");

    $error = $client -> getError();
    if($error) {
        echo "<h2>Error en el constructor</h2> <pre>" . $error . "</pre>";
    }

    $result = $client -> call("getLanguages", array("datos" => "languages"));
    if($client -> fault)
    {
        echo "<h2>Fault</h2><pre>";
        print_r($result);
        echo"</pre>";
    }
    else
    {
        $error = $client -> getError();
        if ($error) {
            echo "<h2>Error</h2> <pre>" . $error . "</pre>";
        }
        else
        {
            echo "<h2>LANGUAGES</h2><pre>";
            echo $result;
            echo"</pre>";
        }
    }
?>