<?php
use Symfony\Component\HttpFoundation\Request;

// use Paginator;

class IdentitasController extends PublicController {
    protected $identitas;

    public function __construct() {
        parent::__construct();
        $this->identitas = new IdentitasModel;
        $this->request = Request::createFromGlobals();
    }

    public function paginate() {
    }

    public function index() {
        header('Location: ' . base_url() . 'identitas/page/1');
    }

    public function page($alert = null, $page_uri = null) {
        $data['page_title'] = 'identitas';
        $data['db'] = $this->identitas;
        $page = !empty($page_uri) ? $page_uri : uri(3);
        $data['page'] = $page;
        $limit = 3;
        $data['limit'] = 3;
        if (!empty($alert)) {
            $data['alert'] = $alert;
        }
        $data['identitas'] = $this->identitas->getAllData($limit, $page);
        $data['request'] = $this->request;
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
        if ($this->request->request->all()) {
            // print_r($this->request->request->all());
            header('Location: ' . base_url() . 'identitas');
        }
        view('ubah', $data);
    }

    public function hapus() {
        $id = uri(3);
        $this->identitas->deleteIdentitas($id);
        if ($id) {
            $alert = 'Dihapus';
            $this->page($alert,1);
        }
    }

    public function insert() {
        $insert_id = $this->identitas->insertIdentitas($this->request);
        if ($insert_id) {
            $alert = 'Ditambahkan';
            $this->page($alert,1);
        }
    }

    public function update() {
        $insert_id = $this->identitas->updateIdentitas($this->request);
        if ($insert_id) {
            $alert = 'Diubah';
            $this->page($alert,1);
        }
    }
}
