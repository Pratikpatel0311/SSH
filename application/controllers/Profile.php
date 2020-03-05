<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Profile extends CI_Controller
{
	
	public function __construct(){
		parent::__construct();
		$this->load->helper(array('url','form'));
		$this->load->model('portfolio_model');
		$this->load->library('session');
		echo "Hello";
	}

	public function index()
	{
		$this->load->view('portfolio/login');
	}

	public function dashboard(){
		$this->load->view('admin/dashboard');	
	}

	public function gallary(){
		$this->load->view('admin/gallary');	
	}

	public function logout(){
 		$this->session->sess_destroy();
  		$this->load->view('portfolio/login');
	}

	//Read contacts
	public function contacts(){
		$data['c_id']=$this->portfolio_model->read_contacts();
		$this->load->view('admin/contacts',$data);	
	}

	//Delete contact
	public function delete_contact($id){
		$res=$this->portfolio_model->delete_contact($id);

		if($res == "success"){
			$this->contacts();
		}
	}
	


	//Upload profile picture
	public function do_upload_pic(){
		$name = $_FILES["file"]["name"];
	    $ext = end((explode(".", $name))); # extra () to prevent notice

	    $config['upload_path']   = './assests/img';
	    $config['allowed_types'] = 'jpeg|jpg|png';
	    $config['max_size']      = 0;

	    $this->load->library('upload', $config);
	    if( ! $this->upload->do_upload()){
	        $error = array('error' => $this->upload->display_errors());

	        $this->load->view('admin/user', $error);
	    }
	}


	//Load user profile
	public function user_profile(){
		$this->load->view('admin/user');	
	}

	//Update personal details for profile
	public function update_personal_details(){
		$id=$this->session->userdata('id');
		$name=$this->input->post('name');
		$age=$this->input->post('age');
		$phone=$this->input->post('phone');
		$email=$this->input->post('email');
		$city=$this->input->post('city');
		$state=$this->input->post('state');
		$country=$this->input->post('country');
		$username=$this->input->post('username');
		$password=$this->input->post('password');

		$res=$this->portfolio_model->update_personal_details($name,$age,$phone,$email,$city,$state,$country,$username,$password,$id);

		if($res == "success"){
			$this->load->view('admin/user');	
		}
	}


	//Read skills
	public function skills_list(){
		$data['s_id']=$this->portfolio_model->read_skills();
		$this->load->view('admin/skills_list',$data);	
	}

	//Load view for adding new skill
	public function add_skill(){
		$this->load->view('admin/add_skills');
	}

	//Add new skill
	public function skill(){
		$skill=$this->input->post('skill_name');
		$proficiency=$this->input->post('proficiency');

		$res=$this->portfolio_model->add_new_skill($skill,$proficiency);

		if($res == "success"){
			$this->skills_list();
		}
		else{
			$this->add_skill();	
		}
	}

	//Load the update page for skills
	public function update_skill($id){
		$data['skill']=$this->portfolio_model->get_skill_byID($id);

		if(!empty($data['skill'])){
			$this->load->view('admin/update_skills',$data);
		}else{
			$this->skill();
		}
	}

	//Update skills
	public function update_skills(){
		$id=$this->input->post('id');
		$skill=$this->input->post('skillname');
		$proficiency=$this->input->post('proficiency');

		$res=$this->portfolio_model->update_skills($skill,$proficiency,$id);

		if($res == "success"){
			$this->skills_list();
		}
		else{
			$this->load->view('admin/update_skill');	
		}
	}

	//Delete skill
	public function delete_skill($id){
		$res=$this->portfolio_model->delete_skill($id);

		if($res == "success"){
			$this->skills_list();
		}
	}



	public function education_list(){
		$data['e_id']=$this->portfolio_model->read_edu();
		$this->load->view('admin/education_list',$data);	
	}

	//Load view for adding new educational detail
	public function add_education(){
		$this->load->view('admin/add_educational_details');
	}

	//Add new educational detail
	public function education(){
		$education=$this->input->post('education');
		$university=$this->input->post('university');
		$duration=$this->input->post('duration');

		$res=$this->portfolio_model->add_new_education($education,$university,$duration);

		if($res == "success"){
			$this->load->view('admin/education_list');
		}
		else{
			$this->add_education();	
		}
	}

	//Load the update page for single educational details
	public function update_education($id){
		$data['education']=$this->portfolio_model->get_education_byID($id);

		if(!empty($data['education'])){
			$this->load->view('admin/update_education_details',$data);
		}else{
			$this->load->view('admin/table');
		}
	}

	//Update educational details
	public function update_education_details(){
		$id=$this->input->post('id');
		$education=$this->input->post('education');
		$university=$this->input->post('university');
		$duration=$this->input->post('duration');

		$res=$this->portfolio_model->update_education_details($education,$university,$duration,$id);

		if($res == "success"){
			$this->education_list();
		}
		else{
			$this->update_education($id);	
		}
		// print_r($res);
	}

	//Delete education
	public function delete_education($id){
		$res=$this->portfolio_model->delete_education($id);

		if($res == "success"){
			$this->table();
		}
	}



	//Read projects
	public function projects(){
		$data['p_id']=$this->portfolio_model->read_projects();
		$this->load->view('admin/projects',$data);	
	}

	//Load view for adding new project
	public function add_project(){
		$this->load->view('admin/add_project');
	}

	//Add new project details
	public function project(){
		$project=$this->input->post('project_name');
		$tech=$this->input->post('technology');
		$status=$this->input->post('status');
		$link=$this->input->post('link');
		// $screen=$this->input->post('scrn');

		$res=$this->portfolio_model->add_new_project($project,$tech,$status,$link);

		if($res == "successs"){
			$this->load->view('admin/projects');
		}
		$this->add_project();	
	}

	//Load the update page for single project details
	public function update_project($id){
		$data['project']=$this->portfolio_model->get_project_byID($id);

		if(!empty($data['project'])){
			$this->load->view('admin/update_project_details',$data);
		}else{
			$this->load->view('admin/projects');
		}
	}

	//Update project details
	public function update_project_details(){
		$id=$this->input->post('id');
		$project=$this->input->post('project_name');
		$tech=$this->input->post('technology');
		$status=$this->input->post('status');
		$link=$this->input->post('link');

		$res=$this->portfolio_model->update_project_details($project,$tech,$status,$link,$id);

		if($res == "success"){
			$this->projects();
		}
		else{
			$this->update_project($id);	
		}
		// print_r($res);
	}

}
