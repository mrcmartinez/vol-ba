<?php
    class homeModel extends Mysql{
        public function __construct(){
            parent::__construct();
        }
        // public function setUser(string $nombre_usuario, string $contraseña, string $rol){
        //     $query_insert = "INSERT INTO usuario(nombre_usuario,contraseña,rol)VALUES(?,?,?)";
        //     $arrData = array($nombre_usuario,$contraseña,$rol);
        //     $request_insert = $this->insert($query_insert,$arrData);
        //     return $request_insert;
        // }
        // public function getUser($id){
        //     $sql = "SELECT * FROM usuario WHERE id_usuario = $id";
        //     $request = $this->select($sql);
        //     return $request;
        // }
        // public function updateUser(int $id, string $nombre, string $password, string $rol){
        //     $sql = "UPDATE usuario SET nombre_usuario = ?, contraseña = ?, rol = ? WHERE id_usuario = $id";
        //     $arrData = array($nombre,$password,$rol);
        //     $request = $this->update($sql,$arrData);
        //     return $request;
            
        // }
        // public function getUsers(){
        //     $sql = "SELECT * FROM usuario";
        //     $request = $this->select_all($sql);
        //     return $request;

        // }
        // public function delUser($id){
        //     $sql = "DELETE FROM usuario WHERE id_usuario = $id";
        //     $request = $this->delete($sql);
        //     return $request;
        // }
    }
?>