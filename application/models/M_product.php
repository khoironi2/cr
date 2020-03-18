<?php

/**
 * 
 */
class M_product extends CI_Model
{


    public function get()
    {
        $this->db->select('*');
        $this->db->from('product');
        $this->db->join('jenis_product', 'jenis_product.idjp = product.idjp');
        $result = $this->db->get();
        return $result->result();
    }

    public function insert($data)
    {
        $this->db->insert('product', $data);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }



    public function delete($id)
    {
        $this->db->where('idp', $id);
        $this->db->delete('product');
       
        if ($this->db->affected_rows() > 0)
            return true;
        else
            return false;
    }

    function update($id, $data)
    {
        $this->db->where('idp', $id);
        $this->db->update('product', $data);
    }
}
