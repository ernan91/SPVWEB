<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class QuizzController extends CI_Controller {

	 public function __construct() {
        parent::__construct();
        $this->load->model('QuizzsModel');
        $this->load->library('upload');
    }

   

    public function index() {
        // Chargement du modèle
        $this->load->model('QuizzsModel');
        
        // Appel de la fonction du modèle pour récupérer tous les quizzs
        $data['quizzs'] = $this->QuizzsModel->getQuizzs();
        
        // Chargement de la vue avec les données
        $this->load->view('AccueilView', $data);
    }

    public function AddQuizView(){
        $this->load->view('AddQuizzView');
    }

    public function QuizzTest(){
        $this->load->view('QuizzTest');
    }

    public function EditQuizz(){
        $id = $this->input->get('id');
        $id=(int)$id;
        $data['id'] = $id; 
        $this->load->view('MakeQuizzView',$data);
        
    }



    public function insertQuizz() {
		$nom = $this->input->post('nom'); // Récupère la valeur du paramètre 'username' depuis l'URL
		$description = $this->input->post('description'); // Récupère la valeur du paramètre 'password' depuis l'URL

        $imageName = $_FILES['image']['name'];//Returns array of containing all of the data related to the file you uploaded.

        $image = $_FILES['image'];


        if ($image['name']) {
            // Chemin de destination pour le dossier de votre application
            $destination = 'application/assets/img/' . $image['name'];
    
            // Copier le fichier téléchargé dans le dossier de votre application
            if (move_uploaded_file($image['tmp_name'], $destination)) {
                // Le fichier a été copié avec succès, vous pouvez maintenant utiliser le chemin du fichier dans votre application
                // par exemple, vous pouvez enregistrer le chemin dans votre base de données ou effectuer d'autres opérations nécessaires
            } else {
                // Une erreur s'est produite lors de la copie du fichier
                echo 'Une erreur s\'est produite lors du téléchargement de l\'image.';
            }

        }


		$quizz = $this->QuizzsModel->insertQuizz($nom, $description,$imageName);
  
		if ($quizz !== false) {
			$this->index();
		} else {
			// Authentification échouée
			$this->load->view('LoginView');
		}
	}

    public function loadQuizz() {
        $id=$this->input->get('id');
        $id=(int)$id;

        $data['quizzPages'] = $this->QuizzsModel->getQuizzPagesById($id);

        $this->load->view('QuizzTest', $data);
    }

    public function deleteQuizz() {
        $id = $this->input->get('id');
        $resp = $this->QuizzsModel->deleteQuizz($id);
        
        if ($resp == true) {
            // Suppression réussie
            $this->session->set_flashdata('message', 'Le quizz a été supprimé avec succès.');
        } else {
            // Échec de la suppression
            $this->session->set_flashdata('message', 'Une erreur s\'est produite lors de la suppression du quizz.');
        }
        
        $accueil = "Location: http://localhost:8082/ProjetFilRouge/index.php/QuizzController";
        header($accueil);
        exit(); // Assurez-vous d'ajouter exit() pour arrêter l'exécution du script après la redirection
    }
    

    public function insertQuestionQuizzController(){
        // Récupération des données du formulaire
        $nombreQuestions = $this->input->post('nombre_questions');
    
        // Boucle pour traiter chaque question
        for ($i = 1; $i <= $nombreQuestions; $i++) {
            $questionIndex = $i;
    
            // Récupération des données de la question
            $question = $this->input->post('question_' . $questionIndex);
            $reponse = $this->input->post('reponse_' . $questionIndex);
            $image = $_FILES['image_'. $questionIndex];

          
        
            //traitement des images
            $imageName = $_FILES['image'. $questionIndex]['name'];//Returns array of containing all of the data related to the file you uploaded.

            
    
    
            if ($image['name']) {
                // Chemin de destination pour le dossier de votre application
                $destination = 'application/assets/img/' . $image['name'];
        
                // Copier le fichier téléchargé dans le dossier de votre application
                if (move_uploaded_file($image['tmp_name'], $destination)) {
                    // Le fichier a été copié avec succès, vous pouvez maintenant utiliser le chemin du fichier dans votre application
                    // par exemple, vous pouvez enregistrer le chemin dans votre base de données ou effectuer d'autres opérations nécessaires
                } else {
                    // Une erreur s'est produite lors de la copie du fichier
                    echo 'Une erreur s\'est produite lors du téléchargement de l\'image.';
                }
    
            }

            // Tableau pour stocker les propositions
            $propositions = array();
    
            // Boucle pour récupérer les propositions
            for ($j = 1; $j <= 4; $j++) {
                $proposition = $this->input->post('proposition_' . $questionIndex . '_' . $j);
                $propositions[] = $proposition;
            }
            $idQuizz=$this->input->post('idQuizz');
            // Insertion des données dans la table quizzpages
            $data = array(
                'Quizz' => $idQuizz, // Remplacez $idQuizz par l'id du quizz correspondant
                'Question' => $question,
                'Reponse' => $reponse,
                'prop1' => $propositions[0],
                'prop2' => $propositions[1],
                'prop3' => $propositions[2],
                'prop4' => $propositions[3],
                'img' => $image['name']
            );
            $response=$this->QuizzsModel->insertQuestionsQuizz($data);
        }
       

        if($response==false){

        }else{
            $accueil = "Location: http://localhost:8082/ProjetFilRouge/index.php/QuizzController";
            header($accueil);
            exit(); // Assurez-vous d'ajouter exit() pour arrêter l'exécution du script après la redirection
        }

        
    }

    
}