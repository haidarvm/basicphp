<?php
use Symfony\Component\HttpFoundation\Session\Session;

class PublicController {
    public $session;
    public $vari;

    public function __construct() {
        $this->vari = "Arfa";
        $this->session = new Session();
    }
}
