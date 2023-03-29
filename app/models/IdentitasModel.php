<?php

use Symfony\Component\HttpFoundation\Request;

class IdentitasModel extends Db {
    public $table = 'identitas';
    public $primaryKey = 'id';
    public $timestamps = false;

    public function __construct() {
        parent::__construct();
    }

    public function getAll() {
        return $this->get();
    }

    public function getAllData($limit, $page = null) {
        $page_limit = ($page - 1) * $limit;
        $data = $this->orderBy('id')->limit($limit);
        return !empty($page) ? $data->offset($page_limit)->get() : $data->get();
    }

    public function getAllDataTotal($limit) {
        $data = $this->select($this->raw('count(DISTINCT id) as total'))->limit($limit);
        return  $data->first()->total;
    }

    public function getDb() {
        return DB_NAME;
    }

    public function getIdentitas($id) {
        return $this->where('id', $id)->first();
    }

    public function insertIdentitas($post) {
        $data = $post->request->all();
        $data['gambar'] = $this->upload($post);
        return $this->insertGetId($data);
    }

    public function updateIdentitas($post) {
        $data = $post->request->all();
        $data['gambar'] = $this->upload($post);
        $id = $data['id'];
        unset($data['id']);
        return $this->where('id', $id)->update($data);
    }

    protected function upload($data) {
        $filename = '';
        if (!empty($data->files->get('gambar'))) {
            $filename = $data->files->get('gambar')->getClientOriginalName();
            foreach ($data->files as $file) {
                if (!empty($filename)) {
                    $file->move(PATH_UPLOAD, $filename);
                }
            }
        }
        return $filename;
    }

    public function deleteIdentitas($id) {
        return $this->where('id', $id)->delete();
    }

}
