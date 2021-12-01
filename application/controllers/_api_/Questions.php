<?php
defined('BASEPATH') or exit('No direct script access allowed');

require_once APPPATH.DIRECTORY_SEPARATOR.'controllers/_api_/_base_api.php';

use WarkopDeveloper\CustomCI\BaseAPI;

class Questions extends BaseAPI
{

    public function index_post()
    {
        $requestBody = $this->special_post('name, email, subject, message')->data;
        $this->_postQuestionValidation($requestBody);

        echo json_encode($requestBody);
    }

    private function _postQuestionValidation(Object $requestBody) : void
    {

    }
    
}
