<?php
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class JsonController {
    protected $request;
    protected $post;
    protected $setting;
    protected $response;

    public function __construct() {
        $this->post = new PostModel;
        $this->setting = new SettingsModel;
        $this->request = Request::createFromGlobals();
        $this->response = new Response(
            'Content',
            Response::HTTP_OK,
            ['content-type' => 'text/html']
        );
    }
    public function index() {
        $data['page_title'] = 'Hydant Mini Logger Data';
        $data['post'] = $this->post->getAllPost();
        // print_r($data);exit;
        view('template/header', $data);
        view('json_table', $data);
        view('template/footer', $data);
    }

    public function raw() {
        $raw = json_decode($this->request->getContent(), true);
        if (!empty($raw)) {
            // print_r($raw);
            $headers = $this->request->headers->all();
            $data['headers'] = json_encode($headers);
            $data['body'] = json_encode($raw);
            $this->post->insert($data);
            $raw['message'] = 'success';
            $raw['body'] = $data['body'];
        } else {
            $raw['message'] = 'empty';
        }
        $response = new JsonResponse($raw);
        return $response->send();
    }

    public function formtojson() {
        $post = $this->request->request->all();
        $body['body'] =  json_encode($post);
        // echo $body['body'];
        print_r($body);
        // echo json_decode($body["body"]);exit;
        $this->post->insert($body);
        $response = new JsonResponse($body['body']);
        return $response->send();
    }

    public function formdata() {
        $post = $this->request->request->all();
        // print_r($post);
        // echo json_decode($body["body"]);exit;
        $first = $this->setting->getFirst();
        $setting_id = ['setting_id' => $post['setting_id']];
        unset($post['setting_id']);
        if (!empty($first->setting_id)) {
            $update = $post + $setting_id;
            // print_r($update);exit;
            $update['status'] = $this->setting->where($setting_id)->update($post);
            // print_r($update);exit;
            $response = new JsonResponse(json_encode($post + $update));
            return $response->send();
        } else {
            $setting_id  =  $this->setting->insertGetId($post);
            $response = $this->response->setContent($setting_id);
            return $response->send();
        }
        // print_r($first);exit;
    }

    public function formsetting() {
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
