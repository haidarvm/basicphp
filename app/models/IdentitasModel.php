<?php

// use Db as DB;

class IdentitasModel extends Db {
    public $table = 'identitas';
    public $primaryKey = 'id';
    public $timestamps = false;

    public function getAll() {
        return $this->get();
    }

    public function getDb() {
        return DB_NAME;
    }

    public function getIdentitas($id) {
        return $this->where('id', $id)->first();
    }

    public function insertIdentitas($data) {
        unset($data['submit']);
        return $this->insertGetId($data);
    }

    public function updateIdentitas($id, $data) {
        unset($data['submit']);
        return $this->where('id', $id)->update($data);
    }

    public function deleteIdentitas($id) {
        return $this->where('id', $id)->delete();
    }
}
