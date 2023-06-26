<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginController extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */

	 public function __construct() {
        parent::__construct();
		$this->load->model('UsersModel');
		$this->load->model('QuizzsModel');
    }

	public function login() {
		$email = $this->input->get('username'); // Récupère la valeur du paramètre 'username' depuis l'URL
		$password = $this->input->get('password'); // Récupère la valeur du paramètre 'password' depuis l'URL
	
		$user = $this->UsersModel->login($email, $password);
		$false = "Authentification échouée";
		$quizzs = $this->QuizzsModel->getQuizzs();

		if ($user) {
			// Authentification réussie

			$data['user'] = $user;
			$data['quizzs']=$quizzs;
			$this->load->view('AccueilView', $data);
		} else {
			// Authentification échouée
			$data['false'] = $false;
			$this->load->view('LoginView', $data);
		}
	}

	function Inscription (){
		$this->load->view('InscriptionView');
	}

	public function registerUser() {
		// Récupération des données du formulaire
		$email = $this->input->post('email');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
	
		// Appel de la fonction register() pour enregistrer l'utilisateur
		$result = $this->UsersModel->register($email, $username, $password);

		if ($result) {
			// Inscription réussie, charger la vue "QuizzTest"
			
		} else {
			// Erreur lors de l'inscription, afficher un message d'erreur ou rediriger vers une autre page
			echo "Erreur lors de l'inscription";
		}
		
	}
	
	
	
	

	public function successRegister(){
		$this->load->view('AccueilView');
	}
	
	


}
