<?php
use Symfony\Component\HttpFoundation\Request;


class IdentitasController extends PublicController {
    protected $identitas;

    public function __construct() {
        parent::__construct();
        $this->identitas = new IdentitasModel;
        $this->request = Request::createFromGlobals();
    }
    public function index() {
        $data['page_title'] = 'identitas';
        $data['identitas'] = $this->identitas->getAll();
        $data['db'] = $this->identitas;
        view('template/header', $data);
        view('identitas_list', $data);
        view('template/footer', $data);
    }

    public function insert() {
        $data['page_title'] = 'Data identitas';
        view('template/header', $data);
        view('identitas_form', $data);
        view('template/footer', $data);
    }

    public function save() {
        $data = $this->request->request->all();
        $this->identitas->insert($data);
        header('Location: ' . base_url() . 'identitas');

    }
}