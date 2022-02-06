<?php

    class M_login extends CI_Model {
        function cek_login($username = null , $pass = null){
            $this->db->where('username', $username);
            $this->db->where('password', $pass);
            $query = $this->db->get('user');
            return $query->result();
           }
    }

?>