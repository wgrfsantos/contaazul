<?php
class Clients extends model {

    public function getList($offset, $id_company) {
        $array = array();

        $sql = $this->db->prepare("SELECT * FROM clients WHERE id_company = :id_company ORDER BY id DESC LIMIT $offset, 10");
        $sql->bindValue(':id_company', $id_company);
        $sql->execute();

        if($sql->rowCount() > 0) {
            $array = $sql->fetchAll();
        }

        return $array;
    }

    public function getInfo($id, $id_company) {
        $array = array();

        $sql = $this->db->prepare("SELECT * FROM clients WHERE id = :id AND id_company = :id_company");
        $sql->bindValue(':id', $id);
        $sql->bindValue(':id_company', $id_company);
        $sql->execute();

        if($sql->rowCount() > 0) {
            $array = $sql->fetch();
        }

        return $array;
    }

    public function add($id_company, $name, $cpf, $email, $phone, $stars, $internal_obs, $address_zipcode, $address, $address_number, $address2, $address_neighb, $address_city, $address_state, $address_country) {

        
            $sql = $this->db->prepare("INSERT INTO clients SET
                id_company = :id_company,
                name = :name,
                cpf = :cpf,
                email = :email,
                phone = :phone,
                stars = :stars,
                internal_obs = :internal_obs,
                address_zipcode = :address_zipcode,
                address = :address,
                address_number = :address_number,
                address2 = :address2, 
                address_neighb = :address_neighb,
                address_city = :address_city,
                address_state = :address_state,
                address_country = :address_country");
            
            $sql->bindValue(':id_company', $id_company);
            $sql->bindValue(':name', $name);
            $sql->bindValue(':cpf', $cpf);
            $sql->bindValue(':email', $email);
            $sql->bindValue(':phone', $phone);
            $sql->bindValue(':stars', $stars);
            $sql->bindValue(':internal_obs', $internal_obs);
            $sql->bindValue(':address_zipcode', $address_zipcode);
            $sql->bindValue(':address', $address);
            $sql->bindValue(':address_number', $address_number);
            $sql->bindValue(':address2', $address2);
            $sql->bindValue(':address_neighb', $address_neighb);
            $sql->bindValue(':address_city', $address_city);
            $sql->bindValue(':address_state', $address_state);
            $sql->bindValue(':address_country', $address_country);
            $sql->execute();          

    }

    public function edit($id, $id_company, $name, $cpf, $email, $phone, $stars, $internal_obs, $address_zipcode, $address, $address_number, $address2, $address_neighb, $address_city, $address_state, $address_country) {

        
        $sql = $this->db->prepare("UPDATE clients SET
            id_company = :id_company,
            name = :name,
            cpf = :cpf,
            email = :email,
            phone = :phone,
            stars = :stars,
            internal_obs = :internal_obs,
            address_zipcode = :address_zipcode,
            address = :address,
            address_number = :address_number,
            address2 = :address2, 
            address_neighb = :address_neighb,
            address_city = :address_city,
            address_state = :address_state,
            address_country = :address_country WHERE id = :id AND id_company = :id_company2");
        
        $sql->bindValue(':id', $id);
        $sql->bindValue(':id_company', $id_company);
        $sql->bindValue(':id_company2', $id_company);
        $sql->bindValue(':name', $name);
        $sql->bindValue(':cpf', $cpf);
        $sql->bindValue(':email', $email);
        $sql->bindValue(':phone', $phone);
        $sql->bindValue(':stars', $stars);
        $sql->bindValue(':internal_obs', $internal_obs);
        $sql->bindValue(':address_zipcode', $address_zipcode);
        $sql->bindValue(':address', $address);
        $sql->bindValue(':address_number', $address_number);
        $sql->bindValue(':address2', $address2);
        $sql->bindValue(':address_neighb', $address_neighb);
        $sql->bindValue(':address_city', $address_city);
        $sql->bindValue(':address_state', $address_state);
        $sql->bindValue(':address_country', $address_country);
        $sql->execute();          

}
}