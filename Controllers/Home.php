<?php
    class Home extends Controllers{ 
        public function __construct(){
            parent::__construct();
        }
        public function home($parems){
            $data['tag_page']="Home";
            $data['tag_title']="Pagina principal";
            $data['tag_name']="home";
             $this->views->getView($this,"home",$data);
        }
        //  public function datos($parems){
        //      echo "Dato recibido:".$parems;
        //  }
        //  public function datosusuarios($parems){
        //     $datosusuarios= $this->model->getDatosUsuarios($parems);
        //     echo $datosusuarios;
        //     // echo "prueba2";
        //}
    }
?>