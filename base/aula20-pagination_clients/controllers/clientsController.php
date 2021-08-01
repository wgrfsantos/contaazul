<?php
class clientsController extends controller {

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

        if($u->hasPermission('clients_view')) {
            $c = new Clients();
            //Paginação
            $offset = 0;
            $data['p'] = 1;
            if(isset($_GET['p']) && !empty($_GET['p'])) {
                $data['p'] = intval($_GET['p']);
                if($data['p']  == 0) {
                    $data['p'] = 1;
                }
            }
            $offset = ( 10 * ($data['p']-1) );

            $data['client_count'] = $c->getCount($u->getCompany());
            $data['p_count'] = ceil( $data['client_count'] / 10 );

            $data['clients_list'] = $c->getList($offset, $u->getCompany());
            $data['view_permission'] = $u->hasPermission('clients_view');
            $data['add_permission'] = $u->hasPermission('clients_add');
            $data['edit_permission'] = $u->hasPermission('clients_edit');
            $data['del_permission'] = $u->hasPermission('clients_del');

            $this->loadTemplate('clients', $data);
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

        if($u->hasPermission('clients_add')) {
            $c = new Clients();

            if(isset($_POST['name']) && !empty($_POST['name'])) {
                
                $name = addslashes($_POST['name']);
                $cpf = addslashes($_POST['cpf']);
                $email = addslashes($_POST['email']);
                $phone = addslashes($_POST['phone']);
                $stars = addslashes($_POST['stars']);
                $internal_obs = addslashes($_POST['internal_obs']);
                $address_zipcode = addslashes($_POST['address_zipcode']);
                $address = addslashes($_POST['address']);
                $address_number = addslashes($_POST['address_number']);
                $address2 = addslashes($_POST['address2']);
                $address_neighb = addslashes($_POST['address_neighb']);
                $address_city = addslashes($_POST['address_city']);
                $address_state = addslashes($_POST['address_state']);
                $address_country = addslashes($_POST['address_country']);
                
                $c->add( $u->getCompany(), $name, $cpf, $email, $phone, $stars, $internal_obs, $address_zipcode, $address, $address_number, $address2, $address_neighb, $address_city, $address_state, $address_country);
                header("Location: ".BASE_URL."/clients");
            }
            
            $this->loadTemplate('clients_add', $data);
        } else {
            header("Location: ".BASE_URL."/clients");
        }
    }

    public function edit($id) {
        $data = array();
        $u = new Users();
        $u->setLoggedUser();
        $company = new Companies($u->getCompany());

        $data['company_name'] = $company->getName();
        $data['user_name'] = $u->getName();

        if($u->hasPermission('clients_edit')) {
            $c = new Clients();

            if(isset($_POST['name']) && !empty($_POST['name'])) {
                
                $name = addslashes($_POST['name']);
                $cpf = addslashes($_POST['cpf']);
                $email = addslashes($_POST['email']);
                $phone = addslashes($_POST['phone']);
                $stars = addslashes($_POST['stars']);
                $internal_obs = addslashes($_POST['internal_obs']);
                $address_zipcode = addslashes($_POST['address_zipcode']);
                $address = addslashes($_POST['address']);
                $address_number = addslashes($_POST['address_number']);
                $address2 = addslashes($_POST['address2']);
                $address_neighb = addslashes($_POST['address_neighb']);
                $address_city = addslashes($_POST['address_city']);
                $address_state = addslashes($_POST['address_state']);
                $address_country = addslashes($_POST['address_country']);
                
                $c->edit($id, $u->getCompany(), $name, $cpf, $email, $phone, $stars, $internal_obs, $address_zipcode, $address, $address_number, $address2, $address_neighb, $address_city, $address_state, $address_country);
                header("Location: ".BASE_URL."/clients");
            }

            $data['client_info'] = $c->getInfo($id, $u->getCompany());
            
            $this->loadTemplate('clients_edit', $data);
        } else {
            header("Location: ".BASE_URL."/clients");
        }
    }

    public function view($id) {
        $data = array();
        $u = new Users();
        $u->setLoggedUser();
        $company = new Companies($u->getCompany());

        $data['company_name'] = $company->getName();
        $data['user_name'] = $u->getName();

        if($u->hasPermission('clients_view')) {
            $c = new Clients();

            $data['client_info'] = $c->getInfo($id, $u->getCompany());
            
            $this->loadTemplate('clients_view', $data);
        } else {
            header("Location: ".BASE_URL."/clients");
        }
    }

}