<?php
require_once("Config/Config.php");
$url = !empty($_GET['url'])?$_GET['url']:'home/home';
//separar la url con delimitador "/" en un array
$arrUrl = explode("/",$url);
//controlador
$controller = $arrUrl[0];
$method = $arrUrl[0];
$params = "";
if (!empty($arrUrl[1])) {
    if ($arrUrl[1]!="") {
        $method = $arrUrl[1];       
    }
}

if (!empty($arrUrl[2])) {
    if ($arrUrl[2]!="") {
        for ($i=2; $i < count($arrUrl); $i++) { 
            $params.= $arrUrl[$i].',';
        }       
        $params = trim($params,',');
        // echo $params;
    }
}
spl_autoload_register(function($class){
    if (file_exists(LIBS.'Core/'.$class.".php")) {
        require_once(LIBS.'Core/'.$class.".php");
    }
});

//load
$controllerFile = "Controllers/".$controller.".php";
if (file_exists($controllerFile)) {
    require_once($controllerFile);
    $controller = new $controller();
    if (method_exists($controller,$method)) {
        $controller->{$method}($params);
    }else{
        echo "no existe metodo";    
    }
}else{
    echo "no existe controlador";
}

// echo "<br>Controlador: ".$controller." metodo: ".$method;
?>