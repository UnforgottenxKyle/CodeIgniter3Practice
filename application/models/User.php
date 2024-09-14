<?php

class User extends CI_Model
{
    function create($data)
    {
        $this->db->insert('student', $data);
    }
}
