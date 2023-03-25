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
        view('identitas_list', $data);
    }

    public function detail() {
        $data['page_title'] = 'Data identitas';
        $id = uri(3);
        $data['identitas'] = $this->identitas->getIdentitas($id);
        view('detail', $data);
    }

    public function save() {
        $data = $this->request->request->all();
        $this->identitas->insert($data);
        header('Location: ' . base_url() . 'identitas');

    }
}