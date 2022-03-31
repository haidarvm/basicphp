<?php

class HomeController {
    public function index() {
        $page_title = 'Starter Application';
        Basic::view('home', compact('page_title'));
    }

    public function hello() {
        echo $_GET['message'];
        echo 'Hello World';
    }

    public function posting() {
        $number = rand(1, 7050);
        $page_title = 'Starter Application';
		$this->db->join("post_id pi", "pi.post_id=p.ID", "LEFT");
		$this->db->where("ID", $number);
        $post  = $this->db->getOne('posts p');
        // header('Content-Type: application/json');
        // echo json_encode($post);
        Basic::view('posting_view', $post);
    }
}
