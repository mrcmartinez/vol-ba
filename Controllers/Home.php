<?php
    class Home extends Controllers{ 
        public function __construct(){
            parent::__construct();
        }
        public function home($parems){
            // echo "mensaje desde el controlador";
        }
         public function datos($parems){
             echo "Dato recibido:".$parems;
         }
         public function datosusuarios($parems){
            $datosusuarios= $this->model->getDatosUsuarios($parems);
            echo $datosusuarios;
            echo "prueba2";
        }
    }
?>