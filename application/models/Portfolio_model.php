<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Portfolio_model extends CI_Model{
		
		public function __construct(){
			parent::__construct();
			$this->load->database();
		}

		//Read user profile
		public function read_personal_details(){
			$query = $this->db->query("SELECT * from personal_details");
			return $query;
		}

		//Loin the user
		public function login_user($uname,$pass){
			$this->db->select('*');
			$this->db->from('personal_details');
			$this->db->where('username',$uname);
			$this->db->where('password',$pass);
			 
			if($query=$this->db->get())
			{
			    return $query->row_array();
			}
			else{
			  return false;
			}
		}

		//Update user profile
		public function update_personal_details($name,$age,$phone,$email,$city,$state,$country,$username,$password,$id){
				$query = $this->db->query("UPDATE personal_details SET name='$name', phone='$phone', age=$age, email='$email', city='$city' , state='$state' , country='$country' , username='$username', password='$password' WHERE id=$id");
			
				if($query){
					return "success";
				}else{
					return "failed";
				}
		}


		//Read all skills
		public function read_skills(){
			$query = $this->db->query("SELECT * from skills");
			return $query;
		}

		//Add new skill
		public function add_new_skill($skill,$proficiency){
			$query=$this->db->query("INSERT into skills (id,skill_name,proficiency) values (NULL,'$skill',$proficiency)");
			if($query){
				return "success";
			}else{
				return "failed";
			}
		}

		//Read single skill
		public function get_skill_byID($id){
			$query=$this->db->query("select * from skills where id='$id'");
			return $query->row();
		}

		//Update skill
		public function update_skills($skill,$proficiency,$id){
			$query=$this->db->query("UPDATE skills SET skill_name='$skill' , proficiency='$proficiency' WHERE id='$id'");

			if($query){
					return "success";
				}else{
					return "failed";
				}
		}

		//Delete skill
		public function delete_skill($id){
			$query=$this->db->query("DELETE from skills WHERE id='$id'");

			if($query){
					return "success";
				}else{
					return "failed";
				}
		}



		//Read educational details
		public function read_edu(){
			$query = $this->db->query("SELECT * from educational_details");
			return $query;
		}

		//Add new educational details
		public function add_new_education($education,$university,$duration){
			$query=$this->db->query("INSERT into educational_details (id,education_level,university,duration) values (NULL,'$education','$university','$duration')");
			if($query){
				return "success";
			}else{
				return "failed";
			}
		}

		//Read single education detail
		public function get_education_byID($id){
			$query=$this->db->query("SELECT * from educational_details WHERE id='$id'");
			return $query->row();
		}

		//Update education detail
		public function update_education_details($education,$university,$duration,$id){
			$query=$this->db->query("UPDATE educational_details SET education_level='$education' , university ='$university' , duration= '$duration' WHERE id='$id'");

			if($query){
					return "success";
				}else{
					return "failed";
				}
		}

		//Delete education
		public function delete_education($id){
			$query=$this->db->query("DELETE from educational_details WHERE id='$id'");

			if($query){
					return "success";
				}else{
					return "failed";
				}
		}




		//Add contact/client details
		public function contact_me($cname,$cmail,$csubject,$cmessage){
			$query = $this->db->query("INSERT into contacts (id,name,email,subject,message) values(NULL,'$cname','$cmail','$csubject','$cmessage')");
			if($query){
				return "success";
			}else{
				return "failed";
			}
		}

		//Read contacts
		public function read_contacts(){
			$query=$this->db->query("SELECT * from contacts");
			return $query;
		}

		//Delete contact
		public function delete_contact($id){
			$query=$this->db->query("DELETE from contacts WHERE id='$id'");

			if($query){
					return "success";
				}else{
					return "failed";
				}
		}

		

		//Read project details
		public function read_projects(){
			$query=$this->db->query("SELECT * FROM projects");
			return $query;
		}

		//Add new project details
		public function add_new_project($project,$tech,$status,$link){
			$insert = $this->db->query("INSERT INTO projects (id,project_name,technology,status,link) values (NULL,'$project','$tech','$status','$link')");

			if($insert){
				return "success";
			}
			else{
				return "failed";
			}
    
		}

		//Read single project details
		public function get_project_byID($id){
			$query=$this->db->query("SELECT * from projects WHERE id='$id'");
			return $query->row();
		}

		//Update project detail
		public function update_project_details($project,$tech,$status,$link,$id){
			$query=$this->db->query("UPDATE projects SET project_name='$project' , technology ='$tech' , status= '$status' , link = '$link' WHERE id='$id'");

			if($query){
					return "success";
				}else{
					return "failed";
				}
		}

		//Count total no of projects
		public function count_projects(){
			$this->db->from('projects');
			return $num=$this->db->count_all_results();
		}

}