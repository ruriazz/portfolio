<?php
defined('BASEPATH') or exit('No direct script access allowed');

require_once APPPATH.DIRECTORY_SEPARATOR.'controllers/_base_controller.php';
use WarkopDeveloper\CustomCI\BaseController;

class Skills extends BaseController
{

	public function index()
	{
		$modules = app_module([
			asset_dir('css/_main.css')
		]);

		$this->sanitize_view('skills_page', ['src' => $modules]);
	}
	
}
