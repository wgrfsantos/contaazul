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
            $permissions = new Permissions();
            $data['permissions_list'] = $permissions->getList($u->getCompany());
            $this->loadTemplate('permissions', $data);
        } else {
            header("Location: ".BASE_URL);
        }
    }

    public function add() {
        $data = array();
        $u = new Users();
        $u->setLoggedUser();
        $company = new Companies($u->getCompany());
        $data['company_name'] = $company->getName();
        $data['user_name'] = $u->getName();

        if($u->hasPermission('permissions_add')) {
            $permissions = new Permissions();

            if(isset($_POST['name']) && !empty($_POST['name'])) {
                $pname = addslashes($_POST['name']);
                $fname = addslashes($_POST['frist_name']);
                $permissions->add($pname, $fname, $u->getCompany());
                header("Location: ".BASE_URL."/permissions");
            }

            $this->loadTemplate('permissions_add', $data);
        } else {
            header("Location: ".BASE_URL);
        }
    }

    public function edit($id) {
        $data = array();
        $u = new Users();
        $u->setLoggedUser();
        $company = new Companies($u->getCompany());
        $data['company_name'] = $company->getName();
        $data['user_name'] = $u->getName();

        if($u->hasPermission('permissions_edit')) {
            $permissions = new Permissions();
            $data['info'] = $permissions->get($id);

            if(isset($_POST['id']) && !empty($_POST['id'])) {
                $pname = addslashes($_POST['name']);
                $fname = addslashes($_POST['frist_name']);
                $permissions->edit($pname, $fname, $id);
                header("Location: ".BASE_URL."/permissions");
            }

            $this->loadTemplate('permissions_edit', $data);
        } else {
            header("Location: ".BASE_URL);
        }
    }

    public function del($id) {
        $data = array();
        $u = new Users();
        $u->setLoggedUser();
        $company = new Companies($u->getCompany());
        $data['company_name'] = $company->getName();
        $data['user_name'] = $u->getName();

        if($u->hasPermission('permissions_del')) {
            $permissions = new Permissions();
            $permissions->del($id);
            header("Location: ".BASE_URL."/permissions");
        } else {
            header("Location: ".BASE_URL);
        }
    }

}