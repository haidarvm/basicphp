<?php

// use Db as DB;

class IdentitasModel extends Db {
    public $table = 'identitas';
    public $primaryKey = 'id';


    public function getAll() {
        return $this->get();
    }

    public function getDb() {
        return DB_NAME;
    }

    public function getIdentitas($id) {
        return $this->where('id',$id)->get();
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