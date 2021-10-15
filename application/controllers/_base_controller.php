<?php

namespace WarkopDeveloper\CustomCI;

defined('BASEPATH') or exit('No direct script access allowed');


class BaseController extends \CI_Controller
{
    
    function __construct()
    {
        parent::__construct();

        $this->load->helper('cookie');
        $this->load->helper('assets');
        $this->load->helper('url');
    }

    protected function load_view(ViewModel $viewModel) : void
    {
        $assets = create_assets($viewModel->assets);

        $viewModel->css = $assets->css;
        $viewModel->js = $assets->js;
        $viewModel->modules = $viewModel->modules ? create_assets($viewModel->modules)->js : null;
        $viewModel->load();
    }

    protected function sanitize_view(String $view, Array $data = []) : void
    {
        ob_start("sanitize_output");
        $this->load->view($view, $data);
        ob_end_flush();
    }

    protected function page_not_found() : void
    {
        $this->load->view('errors/html/error_404');
    }

}