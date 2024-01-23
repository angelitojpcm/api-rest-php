<?php
namespace Core;

class Http{
    public function isLocal() {
        $whitelist = array('127.0.0.1', '::1');
        if(in_array($_SERVER['REMOTE_ADDR'], $whitelist)){
            return true;
        }
        return false;
    }
}