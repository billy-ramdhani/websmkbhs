<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Class Auth
 * @property Ion_auth|Ion_auth_model $ion_auth        The ION Auth spark
 * @property CI_Form_validation      $form_validation The form validation library
 */

class Login extends CI_Controller {

	public $data = [];

	public function __construct();
	$this->load->database();
	$this->load->library(['ion_auth', 'form_validation']);
	$this->load->helper(['url', 'language']);

	$this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));

	$this->load->model('menu_model', 'menu', true);
	$this->load->load('auth')

	public function index()
	{
		$this->load->view('admin');
	}
}
