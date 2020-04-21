<?php
	/**
	 * 
	 */
	class Login extends CI_Controller{
		
		public function index(){
			$this->load->view('update_form');
		}

		public function action(){
			
		}

		public function logout(){
			redirect(base_url('login'));
	    }

	    public function update_data($value=''){
	    	
	    }
	}
?>