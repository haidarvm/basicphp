<?php
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class JsonController {
    protected $request;

    public function __construct() {
        $this->post = new PostModel;
        $this->request =  Request::createFromGlobals();
    }
    public function index() {
        $number = rand(1, 7050);
        $data['number'] = $number;
        // $data['post'] = $this->post->getPost($number);
        $data['post'] = $this->post->getPost($number)->data;
        // echo json_encode( $data['post']);exit;
        Basic::view('news_view', $data);
    }

    public function raw() {
        $raw = json_decode($this->request->getContent(), true);
        if(!empty($raw)) {
            // print_r($raw);
            $headers = $this->request->headers->all();
            $data['headers'] = json_encode($headers); 
            $data['body'] = json_encode($raw);
            $this->post->insert($data);
            $raw['message'] = "success";
            $raw["body"] = $data['body'];
        } else {
            $raw['message'] = 'empty';
        }
        $response = new JsonResponse($raw);
        return $response->send();
    }

    public function hello() {
        echo 'hello world basicphp';
    }

    public function json() {
        # $this->db->getLastQuery();
        $number = rand(1, 7050);
        $post = $this->post->getPost($number)->data;
        header('Content-Type: application/json');
        echo json_encode($post);
    }
}
