<?php

class MahasiswaModel extends Db {
    public $table = 'mahasiswa';
    public $primaryKey = 'mahasiswa_id';


    public function getAll() {
        return $this->get();
    }

    public function getMahasiswa($id) {
        return $this->where('mahasiswa_id =' . $id)->find();
    }

}
