<?php

class PostModel extends Db {
    public $table = 'post_data';
    public $primaryKey = 'id';

    public function getPost($id) {
        return $this->where('id =' . $id)->find();
    }

    public function getAllPost() {
        return $this->orderByDesc('id')->limit(10)->get();
    }

    public function insertPost($data){ 
        $datadb["body"] = $data;
        return $this->insert($datadb);
    }

    public function getFirst() {
        return $this->first();
    }

    public function getPostm($id) {
        // $this->db->join('post_id pi', 'pi.post_id=p.ID', 'INNER');
        // $this->db->where('new_id', $id);
        // return $this->db->getOne('posts p');
    }
}
