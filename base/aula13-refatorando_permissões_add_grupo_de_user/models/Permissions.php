<?php
class Permissions extends model {

    private $group;
    private $permissions;

    public function setGroup($id, $id_company) {
        $this->group = $id;
        $this->permissions = array();

        $sql = $this->db->prepare("SELECT params FROM permission_groups WHERE id = :id AND id_company = :id_company");
        $sql->bindValue(':id', $id);
        $sql->bindValue(':id_company', $id_company);
        $sql->execute();

        if($sql->rowCount() > 0) {
            $row = $sql->fetch();

            if(empty($row['params'])) {
                $row['params'] = '0';
            }

            $params = $row['params'];

            $sql = $this->db->prepare("SELECT name FROM permission_params WHERE id IN ($params) AND id_company = :id_company");
            
            $sql->bindValue(':id_company', $id_company);
            $sql->execute();

            if($sql->rowCount() > 0) {
                foreach($sql->fetchAll() as $item) {
                    $this->permissions[] = $item['name'];
                }

            }
        }      
    }

    public function hasPermission($name) {
        if(in_array($name, $this->permissions)) {
            return true;
        } else {
            return false;
        }
    }

    public function getList($id_company) {
        $array = array();

        $sql = $this->db->prepare("SELECT * FROM permission_params WHERE id_company = :id_company");
        $sql->bindValue(':id_company', $id_company);
        $sql->execute();

        if($sql->rowCount() > 0) {
            $array = $sql->fetchAll();
        }

        return $array;
    }

    public function getListView($id_company) {
        $array = array();

        $sql = $this->db->prepare("SELECT * FROM permission_params WHERE id_company = :id_company AND type = 1");
        $sql->bindValue(':id_company', $id_company);
        $sql->execute();

        if($sql->rowCount() > 0) {
            $array = $sql->fetchAll();
        }

        return $array;
    }

    public function getListAdd($id_company) {
        $array = array();

        $sql = $this->db->prepare("SELECT * FROM permission_params WHERE id_company = :id_company AND type = 2");
        $sql->bindValue(':id_company', $id_company);
        $sql->execute();

        if($sql->rowCount() > 0) {
            $array = $sql->fetchAll();
        }

        return $array;
    }

    public function getListEdit($id_company) {
        $array = array();

        $sql = $this->db->prepare("SELECT * FROM permission_params WHERE id_company = :id_company AND type = 3");
        $sql->bindValue(':id_company', $id_company);
        $sql->execute();

        if($sql->rowCount() > 0) {
            $array = $sql->fetchAll();
        }

        return $array;
    }

    public function getListDel($id_company) {
        $array = array();

        $sql = $this->db->prepare("SELECT * FROM permission_params WHERE id_company = :id_company AND type = 4");
        $sql->bindValue(':id_company', $id_company);
        $sql->execute();

        if($sql->rowCount() > 0) {
            $array = $sql->fetchAll();
        }

        return $array;
    }

    public function getGroupList($id_company) {
        $array = array();

        $sql = $this->db->prepare("SELECT * FROM permission_groups WHERE id_company = :id_company");
        $sql->bindValue(':id_company', $id_company);
        $sql->execute();

        if($sql->rowCount() > 0) {
            $array = $sql->fetchAll();
        }

        return $array;
    }

    public function get($id) {
		$array = array();

		$sql = "SELECT * FROM permission_params WHERE id = :id";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(':id', $id);
		$sql->execute();

		if($sql->rowCount() > 0) {
			$array = $sql->fetch(\PDO::FETCH_ASSOC);
		}

		return $array;
	}

    public function add($name, $frist_name, $type, $id_company) {
        $sql = $this->db->prepare("INSERT INTO permission_params SET name = :name, frist_name = :frist_name, type = :type, id_company = :id_company");
        $sql->bindValue(':name', $name);
        $sql->bindValue(':frist_name', $frist_name);
        $sql->bindValue(':type', $type);
        $sql->bindValue(':id_company', $id_company);
        $sql->execute();
    }

    public function addGroup($name, $plist, $id_company) {
        $params = implode(',', $plist);
        $sql = $this->db->prepare("INSERT INTO permission_groups SET name = :name, id_company = :id_company, params = :params");
        $sql->bindValue(':name', $name);
        $sql->bindValue(':id_company', $id_company);
        $sql->bindValue(':params', $params);
        $sql->execute();
    }

    public function edit($name, $frist_name, $type, $id) {
        $sql = $this->db->prepare("UPDATE permission_params SET name = :name, frist_name = :frist_name, type = :type WHERE id = :id");
        $sql->bindValue(':name', $name);
        $sql->bindValue(':frist_name', $frist_name);
        $sql->bindValue(':type', $type);
        $sql->bindValue(':id', $id);
        $sql->execute();
    }

    public function del($id) {
        $sql = $this->db->prepare("DELETE FROM permission_params WHERE id = :id");
        $sql->bindValue(":id", $id);
        $sql->execute();
    }
}