<?php
class Login extends CI_Controller {
	private $pass = '';
	
	public function __construct() {
		parent::__construct ();
		$this->load->helper(array('form','url'));
		$this->load->library('session');
	}
	
	public function index() {
		$this->load->view ( 'login' );
	}
	
	public function formsubmit() {
		$this->load->library ( 'form_validation' );
		$this->form_validation->set_rules ( 'email', 'Email', 'required' );
		$this->form_validation->set_rules ( 'password', 'Password', 'required' );
		
		if ($this->form_validation->run () == FALSE) {
			$this->load->view ( 'login' );
		} else {
			if (isset ( $_POST ['submit'] ) && ! empty ( $_POST ['submit'] )) {
				$data = array (
					'email' => $_POST ['email'],
					'pass' => md5($_POST ['password'])
				);
				$newdata = array(
					'email'  =>  $data ['email'] ,
					'userip'     => $_SERVER['REMOTE_ADDR'],
					'luptime'   =>time()
				);
				
				if ($_POST ['submit'] == 'login') {
					$query = $this->db->get_where ( 'uc_email', 
						array ('email' => $data ['email']), 1, 0 );
					
					foreach ( $query->result () as $row ) {
						$pass = $row->pass;
					}
					if ($pass == $data ['pass']) {
						$this->session->set_userdata($newdata);
						$this->load->view ( 'usercenter', $data );
					}
				} else if ($_POST ['submit'] == 'register') {
					$this->session->set_userdata($newdata);
					$this->db->insert ( 'uc_email', $data );
					$this->load->view ( 'usercenter', $data );
				} else {
					$this->session->sess_destroy();
					$this->load->view ( 'login' );
				}
			}
		}
	}

}
