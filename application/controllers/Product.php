<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Product extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Product';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();


        $data['product'] = $this->M_product->get();

        $this->form_validation->set_rules('nama_p', 'Nama product', 'required');

        if ($this->form_validation->run() == false) {


            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('product/index', $data);
            $this->load->view('templates/footer');
        } else {
            $this->db->insert('product', ['nama_p' => $this->input->post('nama_p')]);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                    New product added.
                    </div>');
            redirect('product');
        }
    }


    public function delete($id)
    {

        $data['product'] = $this->M_product->delete($id);
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Data successfully deleted. </div>');
        redirect('product');
    }

}
