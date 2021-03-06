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

        $this->form_validation->set_rules('nama_p', 'Name product', 'required');
        $this->form_validation->set_rules('harga_p', 'Product Price', 'required');
        $this->form_validation->set_rules('url_img', 'Url Images', 'required');
        $this->form_validation->set_rules('url_video', 'Url Videos', 'required');
        $this->form_validation->set_rules('url_file', 'Url File', 'required');
        $this->form_validation->set_rules('idjp', 'Jenis Product', 'required');

        if ($this->form_validation->run() == false) {


            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('product/index', $data);
            $this->load->view('templates/footer');
        } else {
            $data = array(
                'nama_p' => $this->input->post('nama_p'),
                'harga_p' => $this->input->post('harga_p'),
                'url_img' => $this->input->post('url_img'),
                'url_video' => $this->input->post('url_video'),
                'url_file' => $this->input->post('url_file'),
                'idjp' => $this->input->post('idjp')
            );
            $this->M_product->insert($data);

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Add product successfully. </div>');
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

    public function paket()
    {
        $data['title'] = 'Paket order';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['menu'] = $this->M_menu->get();


        $data['product'] = $this->M_product->get();

        $data['paket'] = $this->M_paketproduct->get();

        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('menu_id', 'Menu', 'required');
        $this->form_validation->set_rules('url', 'Url', 'required');
        $this->form_validation->set_rules('icon', 'Icon', 'required');
        $this->form_validation->set_rules('is_active', 'Active', 'required');;

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('product/paket', $data);
            $this->load->view('templates/footer');
        } else {
            $data = array(
                'title' => $this->input->post('title'),
                'menu_id' => $this->input->post('menu_id'),
                'url' => $this->input->post('url'),
                'icon' => $this->input->post('icon'),
                'is_active' => $this->input->post('is_active')
            );
            $this->M_submenu->insert($data);

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Add submenu successfully. </div>');
            redirect('product/paket');
        }
    }
}
