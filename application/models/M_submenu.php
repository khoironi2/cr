<?php

/**
 * 
 */
class M_submenu extends CI_Model
{


    public function get()
    {

        $this->db->select('user_sub_menu.id as idsm, user_sub_menu.menu_id, user_menu.menu,user_sub_menu.title, user_sub_menu.url, user_sub_menu.icon, user_sub_menu.is_active');
        $this->db->from('user_sub_menu');

        $this->db->join('user_menu', 'user_menu.id=user_sub_menu.menu_id');
        $result = $this->db->get();
        return $result->result();
    }

    public function insert($data)
    {
        $this->db->insert('user_sub_menu', $data);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }



    function update($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('user_sub_menu', $data);
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('user_sub_menu');

        if ($this->db->affected_rows() > 0)
            return true;
        else
            return false;
    }
}
