<?php

/**
 * 
 */
class M_paketproduct extends CI_Model
{


    public function get()
    {
        $this->db->select('*');
        $this->db->from('paket_product');
        $this->db->join('jenis_product', 'jenis_product.idjp = paket_product.idjp');
        $this->db->join('product', 'product.idp = paket_product.idp');
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
