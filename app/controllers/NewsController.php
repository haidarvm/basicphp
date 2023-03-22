<?php

class NewsController {
    protected $post;
    public function __construct() {
        $this->post = new PostModel;

    }
    public function index() {
        $number = rand(1, 7050);
        $data['number'] = $number;
        // $data['post'] = $this->post->getPost($number);
        // $data['post'] = $this->post->getPost($number)->data;
        // echo json_encode( $data['post']);exit;
        Basic::view('news_view', $data);
    }

    public function hello() {
        echo "hello world";
    }

    public function json() {
        # $this->db->getLastQuery();
        $number = rand(1, 7050);
        // $post = $this->post->getPost($number)->data;
        $post = '';
        header('Content-Type: application/json');
        echo json_encode($post);
    }
}
