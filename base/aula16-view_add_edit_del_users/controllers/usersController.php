<?php
class usersController extends controller {

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

        if($u->hasPermission('users_view')) {
            $data['users_list'] = $u->getList($u->getCompany());
            
            $this->loadTemplate('users', $data);
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

        if($u->hasPermission('users_add')) {
            $permissions = new Permissions();
            $data['permissions_groups_list'] = $permissions->getGroupList($u->getCompany());

            if(isset($_POST['email']) && !empty($_POST['email'])) {
                
                $email = addslashes($_POST['email']);
                $name = addslashes($_POST['name']);
                $group = addslashes($_POST['group']);
                $pass = addslashes($_POST['password']);
                $a = $u->add($email, $name, $group, $pass, $u->getCompany());

                if($a == '1') {
                    header("Location: ".BASE_URL."/users");
                } else {
                    $data['error_msg'] = "<strong>Ops!</strong> Este usuário já existe.";
                }
            }

            $this->loadTemplate('users_add', $data);
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

        if($u->hasPermission('users_edit')) {
            $permissions = new Permissions();
            $data['permissions_groups_list'] = $permissions->getGroupList($u->getCompany());
            $data['user_info'] = $u->getInfo($id, $u->getCompany());

            if(isset($_POST['email']) && !empty($_POST['email'])) {
                
                $email = addslashes($_POST['email']);
                $name = addslashes($_POST['name']);
                $group = addslashes($_POST['group']);
                $pass = addslashes($_POST['password']);
                $u->edit($email, $name, $group, $pass, $id, $u->getCompany());
                header("Location: ".BASE_URL."/users");
                
            }

            $this->loadTemplate('users_edit', $data);
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

        if($u->hasPermission('users_del')) {
            $permissions = new Permissions();
            $u->del($id, $u->getCompany());
            header("Location: ".BASE_URL."/users");
        } else {
            header("Location: ".BASE_URL);
        }
    }

}