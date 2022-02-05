<?php
    class Home extends Controllers{ 
        public function __construct(){
            parent::__construct();
        }
        public function home(){
            $data['page_id']=1;
            $data['tag_page']="Home";
            $data['page_title']="Pagina principal";
            $data['page_name']="home";
            $data['page_content']="AadADADSFDDSFASDadwdsdsd";
             $this->views->getView($this,"home",$data);
        }
        public function insertar(){
            $data=$this->model->setUser("Mau","123","Admin");
            print_r($data);
        }
    }
?>