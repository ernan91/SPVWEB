<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class QuizzsModel extends CI_Model {

    public function insertQuizz($nom, $description, $image) {
        $data = array(
            'nom' => $nom,
            'description' => $description,
            'img' => $image
        );

        $this->db->insert('quizzs', $data);

        if ($this->db->affected_rows() == 1) {
            // Insertion réussie
            return $this->db->insert_id();
        } else {
            // Erreur lors de l'insertion
            return false;
        }
    }

    public function getQuizzs() {
        $this->db->select('id, nom, description, img');
        $query = $this->db->get('quizzs');
        return $query->result_array();
    }

    public function insertQuestionsQuizz($data) {
       
    
            $this->db->insert('quizzpages', $data);

            if ($this->db->affected_rows() !== 0) {
                // Insertion réussie
                return $this->db->insert_id();
            } else {
                // Erreur lors de l'insertion
                return false;
            }
    }
    
    public function getQuizzPagesById($id) {
        $this->db->where('Quizz', $id);
        $query = $this->db->get('quizzpages');  
        return $query->result_array();
    }
    
    public function deleteQuizz($id) {
        $this->db->where('id', $id);
        $this->db->delete('quizzs');

        if ($this->db->affected_rows() !== 0) {
            // Suppression réussie
            return true;
        } else {
            // Erreur lors de la suppression
            return false;
        }
    }


}