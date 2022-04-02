<?php

class HomeController {
    protected $setting;
    public function __construct() {
        $this->setting = new SettingsModel;
    }

    public function index() {
        $data['page_title'] = 'Hydant Logger Settings';
        $first  = $this->setting->getFirst();
        $data['setting'] = '';
        if (!empty($first->setting_id)) {
            $data['setting'] = $first;
        } 
        view('setting', $data);
    }

    public function valid() {
        $data['page_title'] = "Form Validation"; 
        view('validation', $data);

    }

    public function hello() {
        echo $_GET['message'];
        echo 'Hello World';
    }

    public function posting() {
        $number = rand(1, 7050);
        $page_title = 'Starter Application';
        $this->db->join('post_id pi', 'pi.post_id=p.ID', 'LEFT');
        $this->db->where('ID', $number);
        $post  = $this->db->getOne('posts p');
        // header('Content-Type: application/json');
        // echo json_encode($post);
        Basic::view('posting_view', $post);
    }
}
