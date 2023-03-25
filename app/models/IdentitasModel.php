<?php

class IdentitasModel extends Db {
    public $table = 'identitas';
    public $primaryKey = 'identitas_id';


    public function getAll() {
        return $this->get();
    }

    public function getidentitas($id) {
        return $this->where('identitas_id =' . $id)->find();
    }

    public function insertIdentitas($data) {
        return $this->setting->insertGetId($data);
    }

    public function updateIdentitas($data, $id) {
       return  $this->setting->where($id)->update($data);
    }

    public function deleteIdentitas($id) {
        return false;
    }

}
