<?php
    class homeModel extends Mysql{
        public function __construct(){
            parent::__construct();
        }
        public function setUser(string $nombre_usuario, string $contraseña, string $rol){
            $query_insert = "INSERT INTO usuario(nombre_usuario,contraseña,rol)VALUES(?,?,?)";
            $arrData = array($nombre_usuario,$contraseña,$rol);
            $request_insert = $this->insert($query_insert,$arrData);
            return $request_insert;
        }
    }
?>