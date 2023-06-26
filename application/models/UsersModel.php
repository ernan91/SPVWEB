<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class UsersModel extends CI_Model {

    function login($email, $password){
        $this->db->where('Mail', $email);
        $this->db->where('password', $password);
        $q = $this->db->get('users');

        if ($q->num_rows() == 1) {
          // Utilisateur trouvé, retourner les données de l'utilisateur
          return $q->row_array();
        } else {
          // Utilisateur non trouvé
          return false;
        }
      }

      function register($email, $username, $password){
        $data = array(
            'Mail' => $email,
            'pseudo' => $username,
            'Password' => $password
        );
    
        $this->db->insert('users', $data);
    
        if ($this->db->affected_rows() == 1) {
            // Inscription réussie
            return true;
        } else {
            // Erreur lors de l'inscription
            return false;
        }
    }
    

  function getUsers(){
 
    $response = array();
 
    // Select record
    $this->db->select('*');
    $q = $this->db->get('users');
    $response = $q->result_array();

    return $response;
  }

}