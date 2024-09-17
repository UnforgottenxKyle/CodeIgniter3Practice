<?php

class User extends CI_Model
{
    function create($data)
    {
        $this->db->insert('student', $data);
        if ($this->db->affected_rows() >= 0) {
            return true;
        } else {
            return false;
        }
    }

    function read()
    {
        $query = $this->db->get('student');
        return $query->result_array();
    }
}
