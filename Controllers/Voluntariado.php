<?php
    class Voluntariado extends Controllers{ 
        public function __construct(){
            parent::__construct();
        }
        public function voluntariado(){
            $data['page_id']=1;
            $data['page_tag']="Voluntariado";
            $data['page_title']="Pagina principal";
            $data['page_name']="voluntariado";
             $this->views->getView($this,"voluntariado",$data);
        }
    }
?>