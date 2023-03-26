<?php
use Symfony\Component\HttpFoundation\Request;
use Paginator;

class IdentitasController extends PublicController {
    protected $identitas;

    public function __construct() {
        parent::__construct();
        $this->identitas = new IdentitasModel;
        $this->request = Request::createFromGlobals();
    }

    public function paginate(){
        
    }

    public function index() {
        header('Location: ' . base_url() . 'identitas/page/0');
    }

    public function page() {
        $data['page_title'] = 'identitas';
        $data['db'] = $this->identitas;
        $page = uri(3);
        $limit = 3;
        $data['identitas'] = $this->identitas->getAllData($limit,$page);
        $data['total'] = $this->identitas->getAllDataTotal($limit);
        $url_pattern = '/identitas/page/(:num)';
        $data['paginator'] = new Paginator($data['total'], $limit, $page, $url_pattern);
        view('identitas_list', $data);
    }

    public function detail() {
        $data['page_title'] = 'Data identitas';
        $id = uri(3);
        $data['identitas'] = $this->identitas->getIdentitas($id);
        view('detail', $data);
    }

    public function ubah() {
        $data['page_title'] = 'Ubah identitas';
        $id = uri(3);
        $data['db'] = $this->identitas;
        $data['identitas'] = $this->identitas->getIdentitas($id);
        if($this->request->request->all()) {
            // print_r($this->request->request->all());
            header('Location: ' . base_url() . 'identitas');
        }
        view('ubah', $data);
    }

    public function hapus() {
        $id = uri(3);
        $this->identitas->deleteIdentitas($id);
        header('Location: ' . base_url() . 'identitas');
    }

    public function save() {
        $data = $this->request->request->all();
        $this->identitas->insert($data);
        header('Location: ' . base_url() . 'identitas');
    }
}