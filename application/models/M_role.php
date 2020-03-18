<?php

/**
 * 
 */
class M_role extends CI_Model
{


    public function get()
    {
        $this->db->select('*');
        $this->db->from('user_role');
        $result = $this->db->get();
        return $result->result();
    }

    public function getId($role_id)
    {
        $this->db->select('*');
        $this->db->from('user_role');
        $this->db->where('id', $role_id);
        $result = $this->db->get();
        return $result->result();
    }
}
