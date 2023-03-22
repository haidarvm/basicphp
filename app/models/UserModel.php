<?php

class UserModel extends Db {
    public $table = 'users';
    public $primaryKey = 'user_id';


    public function login($username, $pass) {
        return $this->where(['username' => $username, 'password' => sha1($pass)])->first();
    }

}
