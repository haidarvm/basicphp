<?php

function base_url() {
    return Basic::baseUrl();
}

function view($file, $data) {
    return Basic::view($file, $data);
}


function base_url_no() {
    return  rtrim(Basic::baseUrl(),"/");
}
function nullSearch($search) {
    return !empty($search) ? $search : '0';
}
function checkVal($val =null, $key = null, $other=null) {
    $exval = explode('-', $val);
    // echo $exval[0]. $exval[1];exit;
    $data = !empty($val->$key) ? $val->$key : '';
    return !empty($data) ? $data : $other;
}

function checkIf($val, $other=null) {
    return !empty($val) ? $val : $other;
}

function uri($int) {
    return Basic::segment($int);
}

function dateSql() {
    return date("Y-m-d");
}

function dateSqlfull() {
    return date("Y-m-d H:i:s");
}

function toSqlDate($date) {
    return date("Y-m-d",strtotime($date));
}
function dateIndo() {
    return date("d-m-Y");
}

function dateIndos() {
    return date("d-m-Y H:i:s");
}

function indoDate($date) {
    return date('d-m-Y', strtotime($date));
    // return strftime('%u %b %y', strtotime($date));
    // return time_elapsed_string($date);
}

function tglJamDate($date) {
    return date('d-M-Y H:i', strtotime($date));
    // return strftime('%u %b %y', strtotime($date));
    // return time_elapsed_string($date);
}

function indosDate($date) {
    return date('d M Y', strtotime($date));
}

function indoFullDate($date) {
    return date('d F Y', strtotime($date));
}

function hassed($pwd, $pepper) {
    $pwd_peppered = hash_hmac('sha256', $pwd, $pepper);
    $pwd_hashed = password_hash($pwd_peppered, PASSWORD_ARGON2ID);
    return $pwd_hashed;
}

function preppered($pwd, $pepper) {
    return hash_hmac('sha256', $pwd, $pepper);
}