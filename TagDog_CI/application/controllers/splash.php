<?php

class Splash extends CI_Controller {

 	function Login_post() {

		parent::Controller();
		$this->load->helper(array('url'));
 	}

	function index() {
		$this->load->library('javascript');
		//$this->load->library('jquery', FALSE);
		$data['main_content'] = 'view_splash';
		$this->load->view('includes/template', $data);
	}

	function validate_credentials() {

		$this->load->model('membership_model');

	}
	function post_action() {

		
	}
	function share() {

		$via = $_POST['share_var'];

		if ($via != "") {

			switch ( $via ) {
	
				case "tweet":
				echo 'Tweet';
				break;
			
				default:
				echo 'Nada';
				break;
			}
		}
	}

}
