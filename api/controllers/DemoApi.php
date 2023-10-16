<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

// use chriskacerguis\RestServer\RestController;

class DemoApi extends REST_Controller
{
    // protected $modelName = 'App\Models\DemoApi_model';
    public function __construct() { 
        parent::__construct();
        $this->load->library('encryption');
    }
    
    public function create_post()
    {
        var_dump("hii");die();
        $data = $this->request->getJSON();

        // Use $this->modelName to access the model
        $model = new $this->modelName();
        
        if ($model->insert($data)) {
            return $this->respondCreated(['status' => 'User created']);
        } else {
            return $this->fail($model->errors());
        }
    }
}
