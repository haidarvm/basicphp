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

    public function getDb() {
        return DB_NAME;
    }
    
    public function insertIdentitas($data) {
        unset($data['submit']);
        return $this->insertGetId($data);
    }

    public function updateIdentitas($data, $id) {
        unset($data['submit']);
       return  $this->where($id)->update($data);
    }

    public function deleteIdentitas($id) {
        return false;
    }

}