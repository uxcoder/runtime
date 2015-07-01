<?php


class AppRequest {

    protected $request;

    public function __construct()
    {
        $this->_request = $_REQUEST;
    }

    public function get($key=null)
    {
//        var_dump('--> '.$_REQUEST);
        if ($key === null) {
            return $this->_request;
        }
        $value = isset($this->_request[$key]) ? $this->_request[$key] : null;
        return $value;
    }

}

