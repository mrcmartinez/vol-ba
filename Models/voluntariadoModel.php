<?php
    class voluntariadoModel extends Mysql{
        public function __construct(){
            parent::__construct();
        }
        public function selectVoluntariado(){
            $sql= "SELECT *from voluntariado";
            $request = $this->select_all($sql);
            return $request;
        }
    }
?>