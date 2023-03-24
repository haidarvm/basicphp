<?php
use Symfony\Component\HttpFoundation\Request;


class IdenditasController extends PublicController {
    protected $idenditas;

    public function __construct() {
        parent::__construct();
        $this->idenditas = new idenditasModel;
        $this->request = Request::createFromGlobals();
    }
    public function index() {
        $data['page_title'] = 'Idenditas';
        $data['idenditas'] = $this->idenditas->getAll();
        // print_r($data);exit;
        view('template/header', $data);
        view('idenditas_list', $data);
        view('template/footer', $data);
    }

    public function insert() {
        $data['page_title'] = 'Data idenditas';
        view('template/header', $data);
        view('idenditas_form', $data);
        view('template/footer', $data);
    }

    public function save() {
        $data = $this->request->request->all();
        $this->idenditas->insert($data);
        header('Location: ' . base_url() . 'idenditas');

    }
}