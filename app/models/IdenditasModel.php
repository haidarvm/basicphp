<?php

class IdenditasModel extends Db {
    public $table = 'idenditas';
    public $primaryKey = 'idenditas_id';


    public function getAll() {
        return $this->get();
    }

    public function getIdenditas($id) {
        return $this->where('idenditas_id =' . $id)->find();
    }

}
