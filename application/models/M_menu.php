<?php

/**
 * 
 */
class M_menu extends CI_Model
{


    public function get()
    {
        $this->db->select('*');
        $this->db->from('user_menu');
        $result = $this->db->get();
        return $result->result();
    }



    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('user_menu');

        if ($this->db->affected_rows() > 0)
            return true;
        else
            return false;
    }

    function update($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('user_menu', $data);
    }
}
