<?php
    class Voluntariado extends Controllers{ 
        public function __construct(){
            parent::__construct();
        }
        public function voluntariado(){
            $data['page_tag']="Voluntariado";
            $data['page_title']="Pagina principal";
            $data['page_name']="voluntariado";
            $data['page_functions_js']= "functions_voluntariado.js";
            $this->views->getView($this,"voluntariado",$data);
        }
        public function getVoluntariado(){
            $arrData=$this->model->selectVoluntariado();
            dep($arrData);
        }
    }
?>