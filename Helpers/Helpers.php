<?php
    function base_url(){
        return BASE_URL;
    }
    function dep($data){
        $format = print_r('<pre>');
        $format .= print_r($data);
        $format .= print_r('</pre>');
        return $format;
    }
    function strClean(){
        $string = trim($string);//eliminar espacios en blanco
    }
?>