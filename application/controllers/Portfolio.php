<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Portfolio extends CI_Controller
{
	
	public function __construct(){
		parent::__construct();
		$this->load->helper(array('url','form'));
		$this->load->library('form_validation');
		$this->load->model('portfolio_model');
	}

	public function index()
	{
		$data['res_id']=$this->portfolio_model->read_personal_details();
		$data['s_id']=$this->portfolio_model->read_skills();
		$data['e_id']=$this->portfolio_model->read_edu();
		$data['p_count']=$this->portfolio_model->count_projects();
		$this->load->view('portfolio/index',$data);
	}

	//For inserting contact details through contact form
	public function contact(){
		$cname=$this->input->post('contactName');
		$cmail=$this->input->post('contactEmail');
		$csubject=$this->input->post('contactSubject');
		$cmessage=$this->input->post('contactMessage');

		$res=$this->portfolio_model->contact_me($cname,$cmail,$csubject,$cmessage);

		if($res == "success"){
			$this->index();
		}
	}

	public function profile(){
		$this->load->view('portfolio/login');
	}

	//For login to change/update portfolio
	public function login(){
		$user_login=array(
		  'user_email'=>$this->input->post('username'),
		  'user_password'=>$this->input->post('password')
		);
		 
		$data_log=$this->portfolio_model->login_user($user_login['user_email'],$user_login['user_password']);
		if($data_log)
		{
		    $this->session->set_userdata('id',$data_log['id']);
		    $this->session->set_userdata('name',$data_log['name']);
		    $this->session->set_userdata('age',$data_log['age']);
		    $this->session->set_userdata('phone',$data_log['phone']);
		    $this->session->set_userdata('email',$data_log['email']);
		    $this->session->set_userdata('city',$data_log['city']);
		    $this->session->set_userdata('state',$data_log['state']);
		    $this->session->set_userdata('country',$data_log['country']);
		    $this->session->set_userdata('profile_img',$data_log['profile_img']);
		    $this->session->set_userdata('username',$data_log['username']);
		    $this->session->set_userdata('password',$data_log['password']);
		 
		    $this->load->view('admin/dashboard');
		 
		}
		else{
		       $this->session->set_flashdata('error_msg', 'Error occured,Try again.');
		       $this->load->view('portfolio/login');
		 
		}
	}

	//Log out
	public function logout(){
 		$this->session->sess_destroy();
  		$this->load->view('portfolio/login');
	}

}