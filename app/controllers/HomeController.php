<?php
use Symfony\Component\HttpFoundation\Request;

// use Paginator;

class HomeController extends PublicController {
    protected $identitas;

    public function __construct() {
        parent::__construct();
        $this->identitas = new IdentitasModel;
        $this->request = Request::createFromGlobals();
    }

  
    public function index() {
        $data['title'] = "home";
        view('home', $data);
    }

    public function setting() {
        $db = uri(3);
        if($db == 'mariadb') {
            $_SESSION['db_driver'] = 'mysql';
            $_SESSION['db_user'] = 'root';
        } else {
            $_SESSION['db_driver'] = 'pgsql';
            $_SESSION['db_user'] = 'postgres';
        }
        header('Location: ' . base_url() . 'identitas/page/1');
    }
}