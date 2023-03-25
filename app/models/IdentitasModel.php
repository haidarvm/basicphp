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

}
