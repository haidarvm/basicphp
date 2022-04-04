<?php
use Symfony\Component\HttpFoundation\Session\Session;

class PublicController {
    public $session;

    public function __construct() {
        $this->session = new Session();
    }
}
