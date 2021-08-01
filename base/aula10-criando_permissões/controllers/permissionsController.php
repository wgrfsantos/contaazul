<?php
class permissionsController extends controller {

    public function __construct() {
        parent::__construct();

        $u = new Users();
        if($u->isLogged() == false) {
            header("Location: ".BASE_URL."/login");
        }
    }

    public function index() {
        $data = array();
        $u = new Users();
        $u->setLoggedUser();
        $company = new Companies($u->getCompany());

        $data['company_name'] = $company->getName();
        $data['user_name'] = $u->getName();

        if($u->hasPermission('permissions_view')) {
            $this->loadTemplate('permissions', $data);
        } else {
            header("Location: ".BASE_URL);
        }
    }

    public function items() {
        $data = array();
        $u = new Users();
        $u->setLoggedUser();
        $company = new Companies($u->getCompany());

        $data['company_name'] = $company->getName();
        $data['user_name'] = $u->getName();

        $this->loadTemplate('permissions_items', $data);

    }

}