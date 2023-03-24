<?php

class UserModel extends Db {
    public $table = 'users';
    public $primaryKey = 'user_id';
    protected $ini;
    
    public function __construct() {
        $this->ini = parse_ini_file(CONF);
    }

    public function login($username, $pass) {
        $pwd_peppered = preppered($pass, $this->ini["PR"]);
        $login =  $this->where(['username' => $username])->first();
        if (!empty($login->user_id)) {
            if (password_verify($pwd_peppered, $login->password)) {
                return $login;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }


    public function logins($username, $pass) {
        return $this->where(['user_login' => $username, 'pass' => sha1($pass)])->first();
    }

}
