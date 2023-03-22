<?php
use Symfony\Component\HttpFoundation\Request;


class MahasiswaController extends PublicController {
    protected $mahasiswa;

    public function __construct() {
        parent::__construct();
        $this->mahasiswa = new MahasiswaModel;
        $this->request = Request::createFromGlobals();
    }
    public function index() {
        $data['page_title'] = 'Data Mahasiswa';
        $data['mahasiswa'] = $this->mahasiswa->getAll();
        // print_r($data);exit;
        view('template/header', $data);
        view('mahasiswa_list', $data);
        view('template/footer', $data);
    }

    public function insert() {
        $data['page_title'] = 'Data Mahasiswa';
        view('template/header', $data);
        view('mahasiswa_form', $data);
        view('template/footer', $data);
    }

    public function save() {
        $data = $this->request->request->all();
        $this->mahasiswa->insert($data);
        header('Location: ' . base_url() . 'mahasiswa');

    }
}