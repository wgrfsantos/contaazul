<?php
class homeController extends controller {

    public function __construct() {
        parent::__construct();

        $u = new Users();
        if($u->isLogged() == false) {
            header("Location: ".BASE_URL."/login");
        }
    }

    public function index() {
       $dados = array();

        $this->loadTemplate('home', $dados);
    }

}