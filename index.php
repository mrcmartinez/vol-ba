<?php
$url = !empty($_GET['url'])?$_GET['url']:'home/home';
//separar la url con delimitador "/" en un array
$arrUrl = explode("/",$url);
//controlador
$Controller = $arrUrl[0];
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
        echo $params;
    }
}
echo "<br>Controlador: ".$Controller." metodo: ".$method;
?>