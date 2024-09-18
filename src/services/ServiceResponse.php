<?php

namespace app\services;

class ServiceResponse
{
    public $success;
    public $data;
    public $error;
    public $statusCode;

    public function __construct($success, $data = null, $error = null, $statusCode = 200)
    {
        $this->success = $success;
        $this->data = $data;
        $this->error = $error;
        $this->statusCode = $statusCode;
    }
}
