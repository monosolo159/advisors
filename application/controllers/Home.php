<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct() {
		parent::__construct();

		if(!isset($_SESSION)) {
			session_start();
		}
	}
	public function loadview($value)
	{
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view($value['view'],$value['result']);
		$this->load->view('template/footer');
	}

	public function index()
	{
		$value = array(
			'result' => array(
			),
			'view' => 'dashboard'
		);
		$this->loadview($value);
	}

	public function login()
	{
		$this->load->view('login');
	}

	public function teacher()
	{
		$value = array(
			'result' => array(
			),
			'view' => 'teacher_list'
		);
		$this->loadview($value);
	}

	public function student()
	{
		$value = array(
			'result' => array(
			),
			'view' => 'student_list'
		);
		$this->loadview($value);
	}
	public function student_insert(){
		$value = array(
			'result' => array(
			),
			'view' => 'student_insert'
		);
		$this->loadview($value);
	}
	public function teacher_insert(){
		$value = array(
			'result' => array(
			),
			'view' => 'teacher_insert'
		);
		$this->loadview($value);
	}

}
